<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_supplier'=>'LN Hijab',
                'alamat_supplier'=>'Jl. Ketimang Tengah no.32 kab. Pasuruan',
                'jenis'=>'fashion',
                'no_hp_supplier'=>'087965890765'
        ];
    }
}
