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
        return view('index', ['images' => Image::all()->sortByDesc('id')]);
    }

    /**
     * Show a form to create an image.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('imageform');
    }

    /**
     * Persist the new image data in the database.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function store()
    {
        Image::create($this->validateInputs());
        return redirect(route('index'))->withSuccess('Image created successfully');
    }

    /**
     * Shows a form to edit data from an image.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Image $image)
    {
        return view('imageform', ['image' => $image]);
    }

    /**
     * Update data from an image into the database.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function update(Image $image)
    {
        $image->update($this->validateInputs());
        return redirect(route('index'))->withSuccess('Image data updated successfully');
    }

    /**
     * Shows a delete confirmation message.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function delete(Image $image)
    {
        return view('deleteconfirm', ['image' => $image]);
    }

    /**
     * Remove an image from the database.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect(route('index'))->withSuccess('Image deleted successfully');
    }

    /**
     * Validate create/edit form fields or generate
     * a redirect response to previous URL with errors
     * 
     * @return array
     */
    private function validateInputs()
    {
        return request()->validate([
            'title' => 'required|max:20',
            'category' => 'required|max:20',
            'description' => 'required',
            'url' => 'required|URL|max:512',
        ]);
    }
}
