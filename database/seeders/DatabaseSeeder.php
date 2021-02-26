<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Calls custom seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImagesFromOssianSeeder::class);
    }
}
