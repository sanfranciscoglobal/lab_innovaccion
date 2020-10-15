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

        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('1','1','Agricultura, ganadería, silvicultura y pesca',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('2','1','Explotación de minas y canteras',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('3','1','Industrias manufactureras',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('4','1','Suministro de electricidad, gas, vapor y aire acondicionado',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('5','1','Distribución de agua; alcantarillado, gestión de desechos y actividades de saneamiento',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('6','1','Construcción',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('7','1','Comercio al por mayor y al por menor; reparación de vehículos automotores y motocicletas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('8','1','Transporte y almacenamiento',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('9','1','Actividades de alojamiento y de servicio de comidas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('10','1','Información y comunicación',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('11','1','Actividades financieras y de seguros',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('12','1','Actividades inmobiliarias',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('13','1','Actividades profesionales, científicas y técnicas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('14','1','Actividades de servicios administrativos y de apoyo',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('15','1','Administración pública y defensa; planes de seguridad social de afiliación obligatoria',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('16','1','Enseñanza',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('17','1','Actividades de atención de la salud humana y de asistencia social',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('18','1','Artes, entretenimiento y recreación',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('19','1','Otras actividades de servicios',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('20','1','Actividades de Organizaciones y Órganos Extraterritoriales',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('21','3','Social',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('22','3','Recursos naturales',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('23','3','Infraestructura',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('24','3','Seguridad',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('25','3','Económico y productivo',NULL,NULL,NULL);");
        
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('26','2','Objetivo 1: Poner fin a la pobreza',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('27','2','Objetivo 2: Hambre y seguridad alimentaria',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('28','2','Objetivo 3: Salud y bienestar',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('29','2','Objetivo 4: Educación de calidad',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('30','2','Objetivo 5: Igualdad de género',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('31','2','Objetivo 6: Agua limpia y saneamiento',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('32','2','Objetivo 7: Energía asequible y no contaminante',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('33','2','Objetivo 8: Trabajo decente y crecimiento económico',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('34','2','Objetivo 9: Industria, innovación e infraestructura',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('35','2','Objetivo 10: Reducción de las desigualdades',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('36','2','Objetivo 11: Ciudades y comunidades sostenibles',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('37','2','Objetivo 12: Producción y consumo responsables',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('38','2','Objetivo 13: Acción por el clima',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('39','2','Objetivo 14: Vida submarina',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('40','2','Objetivo 15: Vida de ecosistemas terrestres',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('41','2','Objetivo 16: Paz, justicia e instituciones sólidas',NULL,NULL,NULL);");
        DB::insert("insert into tipo_sector (id, convocatoria_id, nombre, created_at, updated_at, deleted_at) values('42','2','Objetivo 17: Alianzas para lograr los objetivos',NULL,NULL,NULL);");
       
    }
}
