<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\AddPhotoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    public function index() {
        $photos = Gallery::orderBy('created_at', 'desc')->get();
        $arrPhotos = Gallery::orderBy('created_at', 'desc')->get()->toArray();
        return view('welcome', compact('photos', 'arrPhotos'));
    }

    public function addPhoto() {
        return view('addPhoto');
    }

    public function submitPhoto(AddPhotoRequest $request) {
        $image = Input::file('filename');
        $time = time();
        $filename  = $time . '.' . $image->getClientOriginalExtension();
        $smallFilename = $time . '_small.' . $image->getClientOriginalExtension();
        $filenameToDb  = 'images/torty/'.$filename;
        $path = public_path('images/torty/'.$filename);
        $smallPath = public_path('images/torty/'.$smallFilename);
        list($width, $height) = getimagesize($image);
        try
        {
            if($width > $height) {
                Image::make($image->getRealPath())->resize(1040, 780)->save($path);
                Image::make($image->getRealPath())->resize(364, 273)->save($smallPath);
            } else {
                Image::make($image->getRealPath())->resize(780, 1040)->save($path);
                Image::make($image->getRealPath())->resize(273, 364)->save($smallPath);
            }
        }
        catch(\Exception $e)
        {
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
            return redirect()->back()->with('danger', 'Problem z odczytem zdjęcia, proszę spróbować dodać inne');
        }
        $request->offsetUnset('_token');
        Gallery::create(
            $request->except('filename') +
            ['filename' => $filenameToDb]
        );
        return redirect()->back()->with('success', 'Pomyślnie dodano zdjęcie');
    }

    public function deletePhoto($id) {
        Gallery::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Pomyślnie usunięto zdjęcie');
    }

    public function editPhoto($id) {
        $photo = Gallery::find($id);
        return view('editPhoto', compact('photo'));
    }

    public function editSubmitPhoto(Request $request) {
        $photo = Gallery::find($request->get('id'));
        $photo->tag = $request->get('tag');
        $photo->save();
        return redirect()->back()->with('success', 'Pomyślnie edytowano zdjęcie');
    }
}
