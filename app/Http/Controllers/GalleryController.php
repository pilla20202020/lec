<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();

        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::where('is_published',1)->where('view','gallery')->get();
        return view('backend.gallery.create',compact('categories'));
    }

    /**
     * @param GalleryRequest $request
     * @return mixed
     */
    public function store(GalleryRequest $request)
    {
        if ($gallery = Gallery::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $gallery);
            }
        }

        return redirect()->route('gallery.index')->withSuccess(trans('New Gallery has been created'));
    }

    /**
     * @param Gallery $gallery
     * @return \Illuminate\View\View
     */
    public function edit(Gallery $gallery)
    {
        $categories = Category::where('is_published',1)->where('view','gallery')->get();
        return view('backend.gallery.edit', compact('gallery','categories'));
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        if ($gallery->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $gallery);
            }
        }

        return redirect()->route('gallery.index')->withSuccess(trans('Gallery has been updated'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
    }
    function uploadFile(Request $request, $news)
    {
        $file = $request->file('image');
        $path = 'uploads/gallery';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($news->image))
            $this->__deleteImages($news);

        $data['image'] = $fileName;
        $this->updateImage($news->id, $data);

    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }

    public function updateImage($galleryId, array $data)
    {
        try {
            $gallery = Gallery::find($galleryId);
            $gallery = $gallery->update($data);
            return $gallery;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
