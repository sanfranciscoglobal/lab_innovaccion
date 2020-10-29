<?php

use Illuminate\Database\Seeder;

class ObjetivosDesarrolloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql  = "ALTER SEQUENCE objetivosdesarrollo_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE objetivosdesarrollo CASCADE;';
        DB::connection()->getPdo()->exec($sql);
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('1','Objetivo 1: Poner fin a la pobreza',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('2','Objetivo 2: Hambre y seguridad alimentaria',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('3','Objetivo 3: Salud y bienestar',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('4','Objetivo 4: Educación de calidad',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('5','Objetivo 5: Igualdad de género',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('6','Objetivo 6: Agua limpia y saneamiento',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('7','Objetivo 7: Energía asequible y no contaminante',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('8','Objetivo 8: Trabajo decente y crecimiento económico',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('9','Objetivo 9: Industria, innovación e infraestructura',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('10','Objetivo 10: Reducción de las desigualdades',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('11','Objetivo 11: Ciudades y comunidades sostenibles',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('12','Objetivo 12: Producción y consumo responsables',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('13','Objetivo 13: Acción por el clima',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('14','Objetivo 14: Vida submarina',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('15','Objetivo 15: Vida de ecosistemas terrestres',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('16','Objetivo 16: Paz, justicia e instituciones sólidas',NULL,NULL,NULL);");
        DB::insert("insert into objetivosdesarrollo (id,  nombre, created_at, updated_at, deleted_at) values('17','Objetivo 17: Alianzas para lograr los objetivos',NULL,NULL,NULL);");
    }
}
