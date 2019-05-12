<?php

namespace App\Http\Controllers;

use App\User;

class TestController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param int $id
     *
     * @return View
     */
    public function show($id)
    {
        return view('test-controller', ['user' => $id]);
    }
}
