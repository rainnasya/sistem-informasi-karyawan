<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->bothify("#########"),
            'nama' => $this->faker->name(),
            'email' => $this->faker->email(),
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'telp' =>  $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),   
            'tempat_lahir' => $this->faker->address(),  
            'tanggal_lahir' => $this->faker->date($format = 'Y-m-d', $max = '2000-01-01'),       
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu', 'Kepercayaan']),  
            'status_nikah' => $this->faker->randomElement(['kawin', 'Belum']),           
            'golongan' => mt_rand(1,6)
        ];
   }
}
