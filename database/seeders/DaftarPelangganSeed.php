<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DaftarPelangganSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_daftar_pelanggan')->insert(
            [
            'nama_pelanggan'=>'Luluk Mufida',
            'jenis_kelamin'=>'Perempuan',
            'no_hp'=>'085232818530',
            'alamat'=>'Jalan Kersikan Bangil Kab. Pasuruan'
            ]
        );
    }
}
