<?php

use Illuminate\Database\Seeder;
use App\Models\Provincia;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE provincia_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE provincia CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('1','Azuay','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('2','Bolivar','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('3','Cañar','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('4','Carchi','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('5','Cotopaxi','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('6','Chimborazo','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('7','El Oro','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('8','Esmeraldas','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('9','Guayas','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('10','Imbabura','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('11','Loja','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('12','Los Rios','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('13','Manabi','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('14','Morona Santiago','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('15','Napo','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('16','Pastaza','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('17','Pichincha','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('18','Tungurahua','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('19','Zamora Chinchipe','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('20','Galapagos','Galápagos',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('21','Sucumbios','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('22','Orellana','Amazónica',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('23','Santo Domingo De Los Tsáchilas','Sierra',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('24','Santa Elena','Costa',NULL,NULL,NULL);");
        DB::insert("insert into provincia (id, nombre, region, created_at, updated_at, deleted_at) values('25','Nacional','Nacional',NULL,NULL,NULL);");
    }
}
