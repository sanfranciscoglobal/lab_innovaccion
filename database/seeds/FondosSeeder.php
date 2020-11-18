<?php

use Illuminate\Database\Seeder;

class FondosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE fondos_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE fondos CASCADE;';
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("2", "False", "MÉXICO", "None", "https://labcd.mx/herramientas-gobierno-abierto/", "None", "None", "None", "None", "None", "None", "None", "None", "True", "12", "2020-11-14 21:16:59", "2020-11-14 21:16:59", "None")');
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("1", "False", "Fondo Emprende", "None", "https://www.fondoemprende.gob.ec/", "None", "None", "https://www.facebook.com/FondoEmprende/", "None", "None", "None", "None", "None", "True", "12", "2020-11-14 21:04:24", "2020-11-14 21:19:18", "2020-11-14 21:19:18")');
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("3", "False", "Emprede Ecuador", "None", "https://www.fondoemprende.gob.ec/", "None", "None", "None", "None", "None", "None", "None", "None", "True", "12", "2020-11-17 07:43:27", "2020-11-17 07:43:27", "None")');
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("4", "False", "GIZ", "None", "https://www.giz.de/en/html/index.html", "None", "None", "None", "None", "None", "None", "None", "None", "True", "12", "2020-11-17 08:16:15", "2020-11-17 08:16:15", "None")');
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("5", "False", "GIZ", "None", "www.hol.com", "None", "None", "None", "None", "None", "None", "None", "None", "True", "12", "2020-11-17 15:24:14", "2020-11-17 15:24:31", "2020-11-17 15:24:31")');
        DB::insert('insert into fondos (id, fuente, organizacion, nombre_fondo, info, fecha_inicio, fecha_fin, facebook, instagram, youtube, linkedin, twitter, imagen, terminos, user_id, created_at, updated_at, deleted_at) values("6", "True", "CREAS ECUADOR", "CREAS ECUADOR", "http://www.creasecuador.com/", "2020-12-01", "2021-03-01", "None", "None", "None", "None", "None", "1605645680_6.png", "True", "12", "2020-11-17 15:41:20", "2020-11-17 15:41:20", "None")');
    }
}
