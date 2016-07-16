<?php

use Illuminate\Database\Seeder;

class GolPangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        DB::table('golongan')->truncate();
        $golongan = [
                        ['golongan'=>'Penata Muda Gol III/A'],
                        ['golongan'=>'Penata Muda Tk. I Gol III/B'],
                        ['golongan'=>'Penata Gol III/C'],
                        ['golongan'=>'Pembina Gol IV/A'],
                        ['golongan'=>'Pembina Tk. I Gol IV/B'],
                        ['golongan'=>'Pembina Utama Muda Gol IV/C'],
                        ['golongan'=>'Pembina Utama Madya Gol IV/D'],
                        ['golongan'=>'Pembina Utama Gol IV/E']

        ];
        
        DB::table('golongan')->insert($golongan);

    }
}
