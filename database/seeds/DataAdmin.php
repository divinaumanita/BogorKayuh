<?php

use Illuminate\Database\Seeder;

class DataAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins'->insert([
            'nama' => 'Budiman S',
            'kata_sandi' => 'KRB0001',
            'no_telp' =>'084957846743',
            'emaild' =>'budiman@gmail.com',
        
        ]));
    
}
}