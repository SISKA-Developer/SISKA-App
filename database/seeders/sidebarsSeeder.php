<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\DB;
use App\Models\sidebars;

class sidebarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        sidebars::create([
        	'name' => 'Matakuliah',
        	'urlname' => '595A4V8',
        	'url' => 'MatakuliahIndex',
        	'icon' => '',
        	'role' => 'kurikulum',
        	'hashids' => 619332782,
        ]);
        sidebars::create([
        	'name' => 'Jadwal Matakuliah',
        	'urlname' => '1wqgxmV',
        	'url' => 'JadwalMatakuliahIndex',
        	'icon' => '',
        	'role' => 'kurikulum',
        	'hashids' => 289456204,
        ]);
        sidebars::create([
        	'name' => 'Tujuan dan Capaian',
        	'urlname' => '3QLqokO',
        	'url' => 'TujuanCapaianIndex',
        	'icon' => '',
        	'role' => 'kurikulum',
        	'hashids' => 534089123,
        ]);
        sidebars::create([
        	'name' => 'My Profile',
        	'urlname' => 'j2ZoQkv',
        	'url' => 'myprofile',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 347892345,
        ]);
        sidebars::create([
        	'name' => 'Status',
        	'urlname' => 'pYLkm0r',
        	'url' => 'statusIndex',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 217946695,
        ]);        
        sidebars::create([
        	'name' => 'Jadwal Perkuliahan',
        	'urlname' => 'XDq10y5',
        	'url' => 'jadwalkuliahIndex',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 217089231,
        ]);        
        sidebars::create([
        	'name' => 'Pengkinian Data Induk Mahasiswa',
        	'urlname' => 'n5lvxZE',
        	'url' => 'datamahasiswaIndex',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 231708349,
        ]);        
        sidebars::create([
        	'name' => 'Status Keuangan',
        	'urlname' => 'kRXrLmY',
        	'url' => 'statuskeuanganIndex',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 217946690,
        ]);        
        sidebars::create([
        	'name' => 'Transkrip Nilai',
        	'urlname' => 'jZqgx05',
        	'url' => 'transkripnilaiIndex',
        	'icon' => '',
        	'role' => 'mahasiswa',
        	'hashids' => 672349845,
        ]);        
        sidebars::create([
        	'name' => 'Evaluasi Pembelajaran',
        	'urlname' => 'yL2KlW',
        	'url' => 'evaluasipembelajaranIndex',
        	'icon' => '',
        	'role' => 'evaluasi',
        	'hashids' => 132445657,
        ]);
        sidebars::create([
        	'name' => 'Evaluasi Pengelolaan Keuangan',
        	'urlname' => 'RlXqWoK',
        	'url' => 'evaluasipengelolaanIndex',
        	'icon' => '',
        	'role' => 'evaluasi',
        	'hashids' => 890763428,
        ]);
        sidebars::create([
        	'name' => 'Evaluasi Sarana dan Prasarana',
        	'urlname' => 'vgBmpm5',
        	'url' => 'evaluasisaranaIndex',
        	'icon' => '',
        	'role' => 'evaluasi',
        	'hashids' => 435677898,
        ]);
    }
}
