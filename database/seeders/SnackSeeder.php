<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnackSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('snacks')->insert([
            [
                'name' => 'Keripik Pisang',
                'flavor' => 'Cokelat',
                'price' => 15000,
                'weight' => 200,
                'image' => 'keripik-pisang.jpg',
                'description' => 'Keripik pisang renyah dengan balutan rasa cokelat yang manis dan nikmat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Keripik Singkong',
                'flavor' => 'Balado',
                'price' => 12000,
                'weight' => 250,
                'image' => 'keripik-singkong.jpg',
                'description' => 'Keripik singkong gurih dan renyah dengan bumbu balado pedas manis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Basreng',
                'flavor' => 'Pedas Daun Jeruk',
                'price' => 18000,
                'weight' => 150,
                'image' => 'basreng.jpg',
                'description' => 'Bakso goreng kering dengan rasa pedas dan aroma daun jeruk.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makaroni Kering',
                'flavor' => 'Pedas',
                'price' => 10000,
                'weight' => 200,
                'image' => 'makaroni.jpg',
                'description' => 'Camilan makaroni kering yang renyah dengan bumbu pedas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kacang Bawang',
                'flavor' => 'Original',
                'price' => 14000,
                'weight' => 250,
                'image' => 'kacang-bawang.jpg',
                'description' => 'Kacang goreng renyah dengan aroma bawang yang gurih.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stik Talas',
                'flavor' => 'Keju',
                'price' => 13000,
                'weight' => 200,
                'image' => 'stik-talas.jpg',
                'description' => 'Stik talas renyah dengan cita rasa keju yang gurih.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}