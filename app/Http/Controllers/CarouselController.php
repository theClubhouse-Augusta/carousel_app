<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    /**
     * Show the Carousel.
     *
     * @param int $id
     *
     * @return View
     */
    public function index()
    {
        // Janky way of getting an array of Image paths
        $imageUrls = Storage::files('/public/uploads');

        $imagePaths = [];

        foreach ($imageUrls as $image) {
            array_push($imagePaths, Storage::url($image));
        }

        return view('carousel', ['imagePaths' => $imagePaths]);
    }
}
