<?php

use Illuminate\Database\Seeder;

class DataSepeda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => 'BMX00'.$i,
                'jumlahsepeda' => '1',
                'jenissepeda' => 'bmx',
            ]); 
            }
        
        for ($j = 1; $j <= 20; $j++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => 'FIX00'.$j,
                'jumlahsepeda' => '1',
                'jenissepeda' => 'fixie',
                ]);
            }
        for ($k = 1; $k <= 20; $k++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => 'PHO00'.$k,
                'jumlahsepeda' => '1',
                'jenissepeda' => 'phoenix',
                ]);
            }
        
        for ($l = 1; $l <= 20; $l++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => 'ONT00'.$l,
                'jumlahsepeda' => '1',
                'jenissepeda' => 'onthel',
                ]);
            }

        for ($m = 1; $m <= 20; $m++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => 'MEC00'.$m,
                'jumlahsepeda' => '1',
                'jenissepeda' => 'mec',
                ]);
            }

        for ($n = 1; $n <= 20; $n++) {
            DB::table('sepedas')->insert([
                'no_sepeda' => '3RO00'.$n,
                'jumlahsepeda' => '1',
                'jenissepeda' => '3roda',
                ]);
            }
        }
    }

