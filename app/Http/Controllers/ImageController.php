<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /*
    * @Views $imagePaths
    *
    * Gets Images paths from Storage to call from Views
    */
    public function getImages()
    {
        $imageUrls = Storage::files('/public/uploads');

        $imagePaths = [];

        foreach ($imageUrls as $image) {
            array_push($imagePaths, Storage::url($image));
        }

        return View::share('imagePaths', $imagePaths);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ImageController::getImages();

        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(
        $nullUpload = false,
        $uploadSuccess = false,
        $lastUpload = false)
    {
        $create_status = [
            'nullUpload' => $nullUpload,
            'uploadSuccess' => $uploadSuccess,
            'lastUpload' => $lastUpload, ];

        return view('create', $create_status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->imgfile === false || $request->imgfile === null || $request->imgfile === '') {
            return redirect()->route('image.create', [
                'nullUpload' => true,
                'uploadSuccess' => false,
                'lastUpload' => false,
                ]);
        }

        $lastUpload = $request->imgfile->store('public/uploads');

        $lastUpload = Storage::url($lastUpload);

        return redirect()->route('image.create', [
            'nullUpload' => false,
            'uploadSuccess' => true,
            'lastUpload' => $lastUpload,
            ]);
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $url = Storage::url($id);

        // $return = Storage::disk('local')->exists('/public/storage/uploads'.$id);

        // $return = $return ? 'true' : 'false';

        Storage::delete('public/uploads/'.$id);

        $imageUrls = Storage::files('/public/uploads');

        return redirect()->route('image.index');
    }
}
