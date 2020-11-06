<?php

use Illuminate\Database\Seeder;
use App\Models\TipoPoblacion;

class TipoPoblacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE tipo_poblacion_id_seq RESTART WITH 1;";
        $sql .= "TRUNCATE tipo_poblacion CASCADE;";
        DB::connection()->getPdo()->exec($sql);

        TipoPoblacion::create(array('descripcion' => 'Adultos mayores'));
        TipoPoblacion::create(array('descripcion' => 'Agricultores'));
        TipoPoblacion::create(array('descripcion' => 'Artistas'));
        TipoPoblacion::create(array('descripcion' => 'Bancos'));
        TipoPoblacion::create(array('descripcion' => 'Centro de salud (privado, público)'));
        TipoPoblacion::create(array('descripcion' => 'Ciudadanía'));
        TipoPoblacion::create(array('descripcion' => 'Deportistas'));
        TipoPoblacion::create(array('descripcion' => 'Emprendedores'));
        TipoPoblacion::create(array('descripcion' => 'Empresas'));
        TipoPoblacion::create(array('descripcion' => 'Estudiantes'));
        TipoPoblacion::create(array('descripcion' => 'GLBTI'));
        TipoPoblacion::create(array('descripcion' => 'Gobierno nacional'));
        TipoPoblacion::create(array('descripcion' => 'Gobiernos locales'));
        TipoPoblacion::create(array('descripcion' => 'Grupos vulnerables'));
        TipoPoblacion::create(array('descripcion' => 'Mipymes'));
        TipoPoblacion::create(array('descripcion' => 'Mujeres'));
        TipoPoblacion::create(array('descripcion' => 'Niños, niñas y adolescentes'));
        TipoPoblacion::create(array('descripcion' => 'Organizaciones civiles'));
        TipoPoblacion::create(array('descripcion' => 'Peatones y ciclistas'));
        TipoPoblacion::create(array('descripcion' => 'Personas con discapacidades'));
        TipoPoblacion::create(array('descripcion' => 'Personas con problemas de salud'));
        TipoPoblacion::create(array('descripcion' => 'Personas en situación de movilidad humana'));
        TipoPoblacion::create(array('descripcion' => 'Personas privadas de libertad'));
        TipoPoblacion::create(array('descripcion' => 'Pueblos indígenas y etnias'));
    }
}
