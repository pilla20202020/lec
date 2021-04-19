<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $category = Category::orderBy('created_at', 'desc')->get();

        return view('backend.category.index', compact('category'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * @param CategoryRequest $request
     * @return mixed
     */
    public function store(CategoryRequest $request)
    {
        if ($category = Category::create($request->data())) {
            return redirect()->route('category.index')->withSuccess(trans('New Category has been created'));
        }

        return redirect()->back()->withFailure(trans('Category cannot be created'));
    }

    /**
     * @param Category $page
     * @return \Illuminate\View\View
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        if ($category->update($request->data())) {
            return redirect()->route('category.index')->withSuccess(trans('Category has been updated'));
        }

        return redirect()->back()->withFailure(trans('Category cannot be updated'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
    }
}
