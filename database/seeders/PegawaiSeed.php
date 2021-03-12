<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PegawaiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_pegawai')->insert(
            [
            'nama_pegawai'=>'Naily Ikmalul Insiyah',
            'jabatan'=>'staf',
            'no_hp_pegawai'=>'081234567911',
            'alamat_pegawai'=>'Jl. Ketimang Tengah no.32 kab. Pasuruan'
            ]
            );
    }
}
