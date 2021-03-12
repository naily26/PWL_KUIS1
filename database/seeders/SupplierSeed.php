<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SupplierSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_supplier')->insert(
            [
                'nama_supplier'=>'LN Hijab',
                'alamat_supplier'=>'Jl. Ketimang Tengah no.32 kab. Pasuruan',
                'jenis'=>'fashion',
                'no_hp_supplier'=>'087965890765'
            ]
            );
    }
}
