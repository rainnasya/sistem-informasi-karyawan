<?php

namespace Database\Seeders;
use App\Models\Karyawan;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Pendidikan;
use App\Models\Pensiun;
use App\Models\Penggajian;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Karyawan::factory(10)->create();
        // Karyawan::factory(20)->create();

        Golongan::create([
            'golongan' => '1',
            'ruang' => 'I',
            'besar_gaji' => '1000000'
        ]);
        Golongan::create([
            'golongan' => '2',
            'ruang' => 'Ia',
            'besar_gaji' => '750000'
        ]);
        Golongan::create([
            'golongan' => '3',
            'ruang' => 'II',
            'besar_gaji' => '2000000'
        ]);
        Golongan::create([
            'golongan' => '4',
            'ruang' => 'IIa',
            'besar_gaji' => '1000000'
        ]);
        Golongan::create([
            'golongan' => '5',
            'ruang' => 'III',
            'besar_gaji' => '3000000'
        ]);
        Golongan::create([
            'golongan' => '6',
            'ruang' => 'IV',
            'besar_gaji' => '4000000'
        ]);



        

    }
}
