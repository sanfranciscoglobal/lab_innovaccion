<?php

use Illuminate\Database\Seeder;

class TipoSectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql  = "ALTER SEQUENCE tipo_sector_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE tipo_sector CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('1','1','A: Agricultura, ganadería, silvicultura y pesca',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('2','1','B: Explotación de minas y canteras',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('3','1','C: Industrias manufactureras',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('4','1','D: Suministro de electricidad, gas, vapor y aire acondicionado',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('5','1','E: Distribución de agua; alcantarillado, gestión de desechos y actividades de saneamiento',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('6','1','F: Construcción',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('7','1','G: Comercio al por mayor y al por menor; reparación de vehículos automotores y motocicletas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('8','1','H: Transporte y almacenamiento',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('9','1','I: Actividades de alojamiento y de servicio de comidas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('10','1','J: Información y comunicación',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('11','1','K: Actividades financieras y de seguros',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('12','1','L: Actividades inmobiliarias',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('13','1','M: Actividades profesionales, científicas y técnicas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('14','1','N: Actividades de servicios administrativos y de apoyo',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('15','1','O: Administración pública y defensa; planes de seguridad social de afiliación obligatoria',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('16','1','P: Enseñanza',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('17','1','Q: Actividades de atención de la salud humana y de asistencia social',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('18','1','R: Artes, entretenimiento y recreación',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('19','1','S: Otras actividades de servicios',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('20','1','U: Actividades de Organizaciones y Órganos Extraterritoriales',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('21','3','Social',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('22','3','Recursos naturales',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('23','3','Infraestructura',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('24','3','Seguridad',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('25','3','Económico y productivo',NULL,NULL,NULL);");
        
    }
}
