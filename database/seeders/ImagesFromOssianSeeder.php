<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use \Exception;
use App\Models\Image;

class ImagesFromOssianSeeder extends Seeder
{
    /**
     * Make a request to Ossian Tech's internal API and populate
     * the images table in the database with that data.
     * 
     * WARNING: This seeder refreshes the database, so all images
     * WILL be lost upon calling it.
     *
     * @return void
     */
    public function run()
    {
        try {
            $response = Http::get('http://internal.ossian.tech/api/Sample');
            $imagesFromApi = $response->json()['result'];
        }
        catch (Exception $e) {
            dd($e->getMessage());
        }
        finally {
            if (isset($response)) {
                DB::table('images')->delete();

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
    }
}
