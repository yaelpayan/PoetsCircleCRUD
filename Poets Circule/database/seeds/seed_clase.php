<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seed_clase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('usuarios')->insert([
            'Usuario'=>'Yael',
            'password'=>'12345',
            'key'=>'gsfg61'


        ]);
       
    }
}
