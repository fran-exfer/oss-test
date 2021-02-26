<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of images.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        //
    }

    /**
     * Show a form to create an image.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        //
    }

    /**
     * Persist the new image data in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Shows a form to edit data from an image.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update data from an image into the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove an image from the database.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy(Image $image)
    {
        //
    }
}
