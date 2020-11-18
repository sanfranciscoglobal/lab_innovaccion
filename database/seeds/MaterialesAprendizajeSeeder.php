<?php

use Illuminate\Database\Seeder;
use App\Models\MaterialAprendizaje;
class MaterialesAprendizajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE materialesaprendizaje_id_seq RESTART WITH 1;";
         $sql .= 'TRUNCATE materialesaprendizaje CASCADE;';
            DB::insert('insert into materialesaprendizaje (id, nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values("1", "Playbook Nesta Inteligencia Colectiva", "None", "Tema 2", "Tipo 3", "True", "www.nesta.com", "None", "False", "True", "12", "2020-11-14 20:21:30", "2020-11-14 19:48:55", "2020-11-14 20:21:30")');
            DB::insert('insert into materialesaprendizaje (id, nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values("2", "Playbook Nesta Inteligencia Colectiva", "2020-11-14", "Tema 2", "Tipo 3", "False", "www.nesta.com", "Nesta", "False", "True", "12", "None", "2020-11-14 19:53:14", "2020-11-14 20:25:31")');
            DB::insert('insert into materialesaprendizaje (id, nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values("3", "Social Impact of open Data", "None", "Tema 1", "Tipo 2", "True", "www.hola.com", "None", "False", "True", "12", "None", "2020-11-15 18:04:03", "2020-11-16 07:49:23")');
            DB::insert('insert into materialesaprendizaje (id, nombre_publicacion, fecha_publicacion, tema_tratado, tipo_documento, tipo, fuente_publicacion, autor_publicacion, estado, terminos, user_id, deleted_at, created_at, updated_at) values("4", "Playbook for Innovation Learning", "2018-04-02", "Tema 1", "Tipo 2", "False", "https://media.nesta.org.uk/documents/nesta_playbook_for_innovation_learning.pdf", "Nesta", "False", "True", "12", "None", "2020-11-17 16:55:58", "2020-11-17 17:06:01")');
    }
}
