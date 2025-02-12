<?php

namespace Database\Seeders;

use App\Models\Shopping_List;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        Shopping_List::factory(2)->create();
    }
}
