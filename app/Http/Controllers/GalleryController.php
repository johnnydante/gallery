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
        $birthday = Gallery::where('tag','birthday')->get()->toArray();
        return view('welcome', compact('photos', 'birthday'));
    }

    public function addPhoto() {
        return view('addPhoto');
    }

    public function submitPhoto(AddPhotoRequest $request) {
        $image = Input::file('filename');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $filenameToDb  = 'images/torty/'.$filename;
        $path = public_path('images/torty/' . $filename);
        list($width, $height) = getimagesize($image);
        try
        {
            if($width > $height) {
                Image::make($image->getRealPath())->resize(900, 650)->save($path);
            } else {
                Image::make($image->getRealPath())->resize(650, 900)->save($path);
            }
            DB::beginTransaction();
            $request->offsetUnset('_token');
            Gallery::create(
                $request->except('filename') +
                ['filename' => $filenameToDb]
            );
            DB::commit();
            return redirect()->back()->with('success', 'Pomyślnie dodano zdjęcie');
        }
        catch(\Exception $e)
        {
            DB::rollBack();
            Log::error($e->getMessage());
            Log::error($e->getTraceAsString());
        }
        return redirect()->back()->with('danger', 'Problem z odczytem zdjęcia, proszę spróbować dodać inne');
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
