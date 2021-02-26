<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Seeder;
use App\Models\Image;

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
        $response = Http::get('http://internal.ossian.tech/api/Sample');
        $imagesFromApi = $response->json()['result'];

        foreach ($imagesFromApi as $image) {
            Image::create([
                'title' => $image['title'],
                'description' => $image['description'],
                'category' => $image['category'],
                'url' => $image['url']
            ]);
        }
    }
}
