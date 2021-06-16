<?php

namespace App\Exports;

use App\Models\Iniciativas;
use App\Models\OdsCategoria;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class IniciativasExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
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
        //$filas[0] = self::cabecera($ODS) ?? [];

        foreach ($iniciativas as $iniciativa) {
            $filas[] = self::filas($iniciativa, $ODS);
        }

        //dd($filas, $ODS);
        return new Collection($filas);
    }

    public function headings(): array
    {
        $ODS = OdsCategoria::obtenerOdsCategoriaPluckNameIdArray();
        $inicio = [
            '#',
            'Nombre Institución',
            'Siglas',
            'Link',
            //'Categoría',
            'Enfoque (qué es)',
            'Nombre proyecto o programa',
            'Año inicio',
            'Vigente',
            //'Personas atendidas por esta iniciativa',
            'Descripción',
            'Componente innovador'
        ];

        $fin = [
            'Nombre del contacto de proyecto o programa',
            'Correo del contacto',
            'Teléfono del contacto',
            'Nombre del segundo contacto de proyecto o programa',
            'Correo del segundo contacto',
            'Teléfono del segundo contacto',
        ];

        return array_merge($inicio, $ODS, $fin);
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:AG1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
//                $event->sheet->getColumnDimension('E')->setAutoSize(false);
//                $event->sheet->getColumnDimension('I')->setAutoSize(false);
//                $event->sheet->getColumnDimension('J')->setAutoSize(false);
            },
        ];
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
            // null,
            ($iniciativas->iniciativaActor) ? $iniciativas->iniciativaActor->enfoque : null,
            $iniciativas->iniciativaInformacion->nombre_iniciativa,
            $iniciativas->iniciativaInformacion->anio,
            $iniciativas->iniciativaInformacion->vigencia,
            //null,
            $iniciativas->iniciativaInformacion->descripcion_iniciativa,
            $iniciativas->iniciativaInformacion->componente_innovador
        ];

        $ODSRegistro = $iniciativas->iniciativaOds()->pluck('ods_categoria_id', 'ods_categoria_id')->all();
        foreach ($ODS as $key => $name) {
            $ODSFila[] = (in_array($key, $ODSRegistro)) ? 1 : 0;
        }

        //dd($ODSFila, $ODS, $ODSRegistro);

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
