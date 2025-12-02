<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use WithoutModelEvents;

  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();}
    Category::create(['name' => 'generica', 'descripction' => 'generica']);
    Category::create(['name' => 'economica', 'descripction' => 'economica']);
    Category::create(['name' => 'premium', 'descripction' => 'premium']);
  }
}
