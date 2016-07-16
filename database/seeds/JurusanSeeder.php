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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('jurusan')->truncate();

        $jurusan = [
                    ['jurusan'=>'Teknik Kimia'],
                    ['jurusan'=>'Teknik Energi'],
                    ['jurusan'=>'Teknik Industri'],
                    ['jurusan'=>'Teknik Mesin'],
                    ['jurusan'=>'Teknik Sipil'],
                    ['jurusan'=>'Perancangan Jalan dan Jembatan'],
                    ['jurusan'=>'Teknik Elektronika'],
                    ['jurusan'=>'Teknik Elektronika (D4)'],
                    ['jurusan'=>'Teknik Telekomunikasi'],
                    ['jurusan'=>'Teknik Telekomunikasi (D4)'],
                    ['jurusan'=>'Teknik Listrik'],
                    ['jurusan'=>'Teknik Komputer'],
                    ['jurusan'=>'Manajemen Informatika'],
                    ['jurusan'=>'Akutansi'],
                    ['jurusan'=>'Akutansi Sektor Publik (D4)'],
                    ['jurusan'=>'Manajemen Bisnis (D4)'],
                    ['jurusan'=>'Usaha Perjalanan Wisata'],
                    ['jurusan'=>'Administrasi Bisnis'],
                    ['jurusan'=>'Bahasa Inggris']

        ];
        DB::table('jurusan')->insert($jurusan);


    }
}
