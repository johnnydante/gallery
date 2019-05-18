<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $photos = Gallery::all();
        $birthday = Gallery::where('tag','birthday')->get()->toArray();
        return view('welcome', compact('photos', 'birthday'));
    }
}
