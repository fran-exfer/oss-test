<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Seeder;

class ImagesFromOssianSeeder extends Seeder
{
    /**
     * Make a request to Ossian Tech's internal API and populate
     * the images table in the database with that data.
     *
     * @return void
     */
    public function run()
    {
        // Fetch the data from the API
        $response = Http::get('http://internal.ossian.tech/api/Sample');
        $imagesFromApi = $response->json()['result'];
        dd($imagesFromApi);
    }
}
