<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'Sección 1 con seed',
            'desc' => 'Descripción de la sección 1',
            'user_id' => '1',
        ]);
        DB::table('sections')->insert([
            'name' => 'Sección 2 con seed',
            'desc' => 'Descripción de la sección 2',
            'user_id' => '1',
        ]);
    }
}
