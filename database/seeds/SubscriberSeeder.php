<?php

use Illuminate\Database\Seeder;

class SubscriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            'name' => 'Suscriptor 1 con seed',
            'email' => 's1@s.com',
            'content_id' => NULL,
        ]);
        DB::table('subscribers')->insert([
            'name' => 'Suscriptor 2 con seed',
            'email' => 's2@s.com',
            'content_id' => NULL,
        ]);
    }
}
