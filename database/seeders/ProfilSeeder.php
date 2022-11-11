<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <=5; $i++){
            DB::table('users')->insert([
                'name' => 'Faker',
                'fullname' => $faker->name,
                'domisili' =>'Surabaya',
                'goldar' => 'O',
                'riwayat_penyakit' =>'Tidak ada',
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }

        for($i = 1; $i <=5; $i++){
            DB::table('users')->insert([
                'name' => 'Faker',
                'fullname' => $faker->name,
                'domisili' =>'Gresik',
                'goldar' => 'AB',
                'riwayat_penyakit' =>'Diabetes',
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }
        
    }
}
