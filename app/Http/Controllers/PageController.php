<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePage;
use App\Http\Requests\UpdatePage;
use App\Models\Event;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pages = Page::get();

        return view('backend.page.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function resourceIndex()
    {
        $pages = Page::where('view', 'Resource')->get();

        return view('backend.resources.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StorePage $request)
    {
        $view = substr(Route::currentRouteName(), 0 , strpos(Route::currentRouteName(), '.'));

        if ($event = Page::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $event);
            }
        }

        return redirect()->route($view.'.index')->withSuccess(trans('New ' .$view. 'has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Page $page)
    {
        return view('backend.page.edit', compact('page'));
    }

    public function update(StorePage $request, Page $page)
    {
        if ($page->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $page);
            }
        }

        return redirect()->route('page.index') ->withSuccess(trans('Page has been updated'));
    }

    public function destroy(Page $page)
    {
        $page->delete();
    }

    function uploadFile(Request $request, $page)
    {
        $file = $request->file('image');
        $path = 'uploads/page';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($page->image))
            $this->__deleteImages($page);

        $data['image'] = $fileName;
        $this->updateImage($page->id, $data);

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

    public function updateImage($pageId, array $data)
    {
        try {
            $page = Page::find($pageId);
            $page = $page->update($data);
            return $page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
