<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\StoreDocument;
use App\Http\Requests\UpdateDocument;
use App\Models\Category;
use App\Models\Download;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $document = Download::orderBy('created_at', 'desc')->get();

        return view('backend.download.index', compact('document'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::whereIsPublished(1)->whereView('download')->get();
        return view('backend.download.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocument $request)
    {
        if ($document = Download::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $document);
            }
        }

        return redirect()->route('document.index')->withSuccess(trans('New Document has been created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $document)
    {
        $categories = Category::whereIsPublished(1)->whereView('download')->get();
        return view('backend.download.edit', compact('document','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $document
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDocument $request, Download $document)
    {
        if ($document->update($request->all())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $document);
            }
        }
        return redirect()->route('document.index')->withSuccess(trans('Document has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $document)
    {
        $document->delete();
    }

    function uploadFile(Request $request, $document)
    {
        $file = $request->file('image');
        $path = 'uploads/document';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($document->document))
            $this->__deleteImages($document);

        $data['document'] = $fileName;
        $this->updateImage($document->id, $data);

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

    public function updateImage($documentId, array $data)
    {
        try {
            $document = Download::find($documentId);
            $document = $document->update($data);
            return $document;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
