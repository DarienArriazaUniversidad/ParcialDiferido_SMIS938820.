<?php

namespace base\Seeders;

use Illuminate\base\Console\Seeds\WithoutModelEvents;
use Illuminate\base\Seeder;

class baseSeeder extends Seeder
{
    /**
     * Seed the application's base.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoryTableSeeder::class);
    }
}
