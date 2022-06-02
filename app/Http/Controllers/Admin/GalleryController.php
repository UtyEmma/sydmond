<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Library\FileHandler;
use App\Library\Response;
use App\Library\Token;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller{

    public function index(){
        try {
            $images = Gallery::paginate();
            return Response::view('admin.gallery.gallery',[
                'images' => $images
            ]);
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    public function create(GalleryRequest $request){
        try {
            $unique_id = Token::unique('galleries');
            $file = $request->file('image');
            $image = FileHandler::upload($file, '/images/gallery', $request->title);
            $values = collect($request->validated())->merge(['unique_id' => $unique_id, 'image' => $image]);
            Gallery::create($values->all());
            return Response::redirectBack('success', 'FAQ Created');
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    public function edit($id){
        try {
            $images = Gallery::paginate();
            $image = Gallery::findOrFail($id);
            return Response::view('admin.faqs.edit-faq', [
                'images' => $images,
                'image' => $image
            ]);
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    public function status($id){
        try {
            $image = Gallery::findOrFail($id);
            $image->status = !$image->status;
            $image->save();
            $status = $image->status ? 'Enabled' : 'Disabled';

            return Response::redirectBack('success', "Gallery Image $status");
        } catch (\Throwable $th) {
            return Response::redirectBack('error', $th->getMessage());
        }
    }

    public function update(UpdateGalleryRequest $request, $id){
        $gallery = Gallery::findOrFail($id);
        $image = $request->hasFile('image')
                    ? FileHandler::update($request->file('image'), '/images/gallery', $request->title, $gallery->image)
                    : $gallery->image;

        $values = collect($request->validated())->merge(['image' => $image]);
        $gallery->update($values->all());
        return Response::redirectBack('success', "Gallery Image Updated");
    }

    public function destroy($id){
        $gallery = Gallery::findOrFail($id);
        FileHandler::deleteFile($gallery->image);
        $gallery->delete();
        return Response::redirectBack('success', 'Gallery Image Deleted');
    }
}
