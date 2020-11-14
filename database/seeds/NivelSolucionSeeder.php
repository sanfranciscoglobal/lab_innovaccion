<?php

use Illuminate\Database\Seeder;
use App\Models\NivelSolucion;

class NivelSolucionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sql = "ALTER SEQUENCE nivel_solucion_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE nivel_solucion CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        NivelSolucion::create(['nombre' => 'Idea (Cuando tienes claro el problema y has visionado una potencial solución en base a tu conocimiento y experiencia)']);
        NivelSolucion::create(['nombre' => 'Investigación en desarrollo (Cuando has iniciado un proceso riguroso de generación de conocimiento el mismo que puede ser aplicado para resolver el problema identificado)']);
        NivelSolucion::create(['nombre' => 'Proyecto estructurado con conclusiones (Cuando has finalizado una investigación y tienes resultados suficientes que demuestran que tu propuesta se puede aplicar para resolver el problema identificado)']);
        NivelSolucion::create(['nombre' => 'Prototipo (Cuando has alcanzado el desarrollo de la primera muestra o ejemplar de una investigación cuyos resultados pueden aplicarse para resolver el problema identificado)']);
        NivelSolucion::create(['nombre' => 'Producto final (Cuando tienes una solución completamente desarrollada para solucionar el problema identificado)']);
                   
        
    }
}
