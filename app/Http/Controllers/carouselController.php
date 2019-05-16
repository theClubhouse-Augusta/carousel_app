<?php

namespace App\Http\Controllers;

class carouselController extends Controller
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
        return view('carousel');
    }
}
