<?php

namespace Database\Seeders;

use App\Models\Rgm;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RgmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rgm::factory(1)->create();
    }
}
