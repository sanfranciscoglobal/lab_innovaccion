<?php

namespace App\Exports;

use App\Models\Iniciativas;
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

        $filas[0] = self::cabecera() ?? [];

        foreach ($iniciativas as $iniciativa) {
            $filas[] = self::filas($iniciativa);
        }

        //dd($filas);

        return new Collection($filas);
    }

    /**
     * @return array
     */
    public static function cabecera()
    {
        $row = [
            '#',
            'Nombre Institución',
            'Siglas',
            'Link',
//            'Ciudad',
//            'Dirección (link google)',
            'Categoría',
            'Enfoque (qué es)',
            'Nombre proyecto o programa',
            'Año inicio',
            'Vigente',
            'Personas atendidas por esta iniciativa',
            'Descripción',
            'Componente innovador',
//            'ODS_1',
//            'ODS_2',
//            'ODS_3',
//            'ODS_4',
//            'ODS_5',
//            'ODS_6',
//            'ODS_7',
//            'ODS_8',
//            'ODS_9',
//            'ODS_10',
//            'ODS_11',
//            'ODS_12',
//            'ODS_13',
//            'ODS_14',
//            'ODS_15',
//            'ODS_16',
            'Nombre del contacto de proyecto o programa',
            'Correo',
            'Teléfono',
            'No tlf. solo redes',
            'Extensión',
            'Nombre',
            'Cargo',
            'Correo',
            'Teléfono',
            'Extensión'
        ];

        return $row;
    }

    /**
     * @param Iniciativas $iniciativas
     */
    public static function filas(Iniciativas $iniciativas)
    {
        $row = [
            $iniciativas->id,
            $iniciativas->iniciativaActor->nombre_organizacion,
            $iniciativas->iniciativaActor->siglas,
            $iniciativas->iniciativaActor->sitio_web,
//            'Ciudad',
//            'Dirección (link google)',
            null,
            $iniciativas->iniciativaActor->enfoque,
            $iniciativas->iniciativaInformacion->nombre_iniciativa,
            $iniciativas->iniciativaInformacion->anio,
            $iniciativas->iniciativaInformacion->vigencia,
            null,
            $iniciativas->iniciativaInformacion->descripcion_iniciativa,
            $iniciativas->iniciativaInformacion->componente_innovador,
//            'ODS_1',
//            'ODS_2',
//            'ODS_3',
//            'ODS_4',
//            'ODS_5',
//            'ODS_6',
//            'ODS_7',
//            'ODS_8',
//            'ODS_9',
//            'ODS_10',
//            'ODS_11',
//            'ODS_12',
//            'ODS_13',
//            'ODS_14',
//            'ODS_15',
//            'ODS_16',
            null,
            null,
            null,
            null,
            null,
        ];

        return $row;
//        dd($iniciativas->iniciativaActor, $iniciativas->iniciativaInformacion);
    }
}
