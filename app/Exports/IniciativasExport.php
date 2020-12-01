<?php

namespace App\Exports;

use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

class IniciativasExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        Iniciativas::$search = Request::has('buscar') ? Request::get('buscar') : null;
        Iniciativas::$search_canton_id = Request::has('canton_id') ? Request::get('canton_id') : [];
        Iniciativas::$search_tipo_institucion = Request::has('tipo_institucion') ? Request::get('tipo_institucion') : [];
        Iniciativas::$search_ods_categorias = Request::has('ods_categorias') ? Request::get('ods_categorias') : [];
        Iniciativas::$search_tipo_poblacion = Request::has('tipo_poblacion') ? Request::get('tipo_poblacion') : [];
        $iniciativas = Iniciativas::obtenerIniciativasAll();

        $ODS = OdsCategoria::obtenerOdsCategoriaPluckNameIdArray();
        $filas[0] = self::cabecera($ODS) ?? [];

        foreach ($iniciativas as $iniciativa) {
            $filas[] = self::filas($iniciativa, $ODS);
        }

        return new Collection($filas);
    }

    /**
     * @return array
     */
    public static function cabecera($ODS)
    {
        $inicio = [
            '#',
            'Nombre Institución',
            'Siglas',
            'Link',
            'Categoría',
            'Enfoque (qué es)',
            'Nombre proyecto o programa',
            'Año inicio',
            'Vigente',
            'Personas atendidas por esta iniciativa',
            'Descripción',
            'Componente innovador'
        ];

        $fin = [
            'Nombre del contacto de proyecto o programa',
            'Correo',
            'Teléfono',
            //'No tlf. solo redes',
            //'Extensión',
            'Nombre',
            //'Cargo',
            'Correo',
            'Teléfono',
            //'Extensión'
        ];

        return array_merge($inicio, $ODS, $fin);
    }

    /**
     * @param Iniciativas $iniciativas
     */
    public static function filas(Iniciativas $iniciativas, $ODS)
    {
        $ODSFila = [];
        $inicio = [
            $iniciativas->id,
            ($iniciativas->iniciativaActor) ? $iniciativas->iniciativaActor->nombre_organizacion : null,
            ($iniciativas->iniciativaActor) ? $iniciativas->iniciativaActor->siglas : null,
            ($iniciativas->iniciativaActor) ? $iniciativas->iniciativaActor->sitio_web : null,
            null,
            ($iniciativas->iniciativaActor) ? $iniciativas->iniciativaActor->enfoque : null,
            $iniciativas->iniciativaInformacion->nombre_iniciativa,
            $iniciativas->iniciativaInformacion->anio,
            $iniciativas->iniciativaInformacion->vigencia,
            null,
            $iniciativas->iniciativaInformacion->descripcion_iniciativa,
            $iniciativas->iniciativaInformacion->componente_innovador
        ];

        $ODSRegistro = $iniciativas->iniciativaOds()->pluck('id', 'id')->all();
        foreach ($ODS as $key => $name) {
            $ODSFila[] = (in_array($key, $ODSRegistro)) ? 1 : 0;
        }

        $contactoFila = [];
        $ContactoRegistro = $iniciativas->iniciativaContactos()->get();
        foreach ($ContactoRegistro as $contacto) {
            $contactoFila[] = $contacto->nombre_persona;
            $contactoFila[] = $contacto->correo_electronico;
            $contactoFila[] = $contacto->celular;

        }

        return array_merge($inicio, $ODSFila, $contactoFila);
    }
}
