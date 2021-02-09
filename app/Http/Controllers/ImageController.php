<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function image()
    {
        return view('admins.add-images');
    }

    public function store(ImageRequest $request)
    {

    }
}
