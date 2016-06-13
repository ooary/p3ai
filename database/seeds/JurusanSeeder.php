<?php

use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Jurusan::create(['jurusan'=>'Teknik Kimia']);
        App\Jurusan::create(['jurusan'=>'Teknik Mesin']);
        App\Jurusan::create(['jurusan'=>'Teknik Sipil']);
        App\Jurusan::create(['jurusan'=>'Teknik Elektro']);
        App\Jurusan::create(['jurusan'=>'Teknik Mesin']);
        App\Jurusan::create(['jurusan'=>'Teknik Komputer']);
        App\Jurusan::create(['jurusan'=>'Manajemen Informatika']);
        App\Jurusan::create(['jurusan'=>'Akutansi']);
        App\Jurusan::create(['jurusan'=>'Administrasi Bisnis']);
        App\Jurusan::create(['jurusan'=>'Bahasa Inggris']);








    }
}
