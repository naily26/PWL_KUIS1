<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Pegawai;
use App\Models\Supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([BlogSeed::class]);
        // Blog::factory(100)->create();
        //$this->call([KategoriSeed::class]);
        // $this->call([AboutSeed::class]);
        $this->call([PegawaiSeed::class]);
        Pegawai::factory(100)->create();
        $this->call([SupplierSeed::class]);
        Supplier::factory(100)->create();
    }
}
