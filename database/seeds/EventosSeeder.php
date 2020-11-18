<?php

use Illuminate\Database\Seeder;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql  = "ALTER SEQUENCE eventos_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE eventos CASCADE;';
        DB::insert('insert into eventos (id, nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values(u"1", u"OPEN INNOVACIÓN", u"SFG", u"2020-11-26", u"20:00:00", u"1605582500_SFG_1.jpg", u"Evento que se desarrollaró para fomentar la innovación a través del uso de datos abiertos. Este es un evento dirigido para jóvenes, niños, investigadores, estudiantes, profesionales y expertos.  Evento que se desarrollaró para fomentar la innovación a través del uso de datos abiertos. Este es un evento genial!", u"False", u"None", u"None", u"0", u"0", u"meet.google.com/nnp-hacz-nou", u"False", u"True", u"12", u"None", u"2020-11-16 22:08:20", u"2020-11-16 22:08:20")');
        DB::insert('insert into eventos (id, nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values(u"2", u"Innovación al día", u"SFG", u"2020-11-27", u"12:00:00", u"1605582905_SFG_2.png", u"Este es el mejor momento para enterarte cómo puedes ayudar a las mipymes para mejorar su productividad y así que puedan reactivar la economía.", u"True", u"101", u"Avenida Amazonas, Quito, Ecuador", u"-0.1774277", u"-78.4859566", u"meet.google.com/nnp-hacz-nou", u"False", u"True", u"12", u"None", u"2020-11-16 22:15:05", u"2020-11-16 22:15:05")');
        DB::insert('insert into eventos (id, nombre, organizador, fecha, hora, imagen, descripcion, tipo, canton, ubicacion, org_lat, org_long, url, estado, terminos, user_id, deleted_at, created_at, updated_at) values(u"3", u"CANADIAN INNOVATION WEEK", u"Canadian Association of Science Centres", u"2020-11-19", u"09:30:00", u"1605649467_Canadian-Association-of-Science-Centres_3.png", u"Este evento te invita a la búsqueda de la resiliencia a través del pensamiento innovador en medio de la pandemia.", u"True", u"1701", u"Avenida Amazonas, Quito, Ecuador", u"-0.1774277", u"-78.4859566", u"https://www.canadiansciencecentres.ca/Canadian-Innovation-Week", u"False", u"True", u"12", u"None", u"2020-11-17 16:44:27", u"2020-11-17 16:44:27")');
    }
}
