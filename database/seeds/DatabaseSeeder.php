<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            BackupSeeder::class,
            TipoSectorSeeder::class,
            TipoSubsectorSeeder::class,
            OdsCategoriasSeeder::class,
            NivelSolucionSeeder::class,
            IniciativaOrigenSeeder::class,
            EstadoRegistroSeeder::class,
            SectorSolucionSeeder::class,
            TipoInstitucionSeeder::class,
            TipoPoblacionSeeder::class,
            TipoPropuestaSeeder::class,
            TipoSubConvocatoriaSeeder::class,
            ProvinciaSeeder::class,
            CantonSeeder::class,

        ]);
    }
}