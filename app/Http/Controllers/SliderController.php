<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoto;
use App\Http\Requests\StoreSlider;
use App\Models\Slider;
use App\Models\Team;
use App\Photo;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class SliderController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slides = Slider::orderBy('order', 'asc')->get();

        return view('backend.slider.index', compact('slides'));
    }

    public function create()
    {
        return view('backend.slider.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'max:18072',
        ]);


        DB::transaction(function () use ($request)
        {
            $slideOrder = Slider::latest('order')->pluck('order')->first();

            $slide = new Slider();
            $slide->title = $request->input('title');
            $slide->caption = $request->input('caption');
            $slide->link_url = $request->input('link_url');
            $slide->link_caption = $request->input('link_caption');
            $slide->is_published = '1';
            $slide->order = ++$slideOrder;

            $slide->save();

            if ($request->hasFile('image')) {
                $this->uploadFile($request, $slide);
            }
        });

        return redirect()->route('slider.index')->withSuccess(trans('New Slide has been created'));
    }

    /**
     * @param Slider $page
     * @return \Illuminate\View\View
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'max:18072',
        ]);
        if ($slider->update($request->all())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $slider);
            }
        }

        return redirect()->route('slider.index')->withSuccess(trans('Slider has been updated'));
    }

    public function destroy(Slider $slider)
    {
//        $slide = Slider::find($id);
        $slider->delete();
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'A title is required',
//            'image.max'  => 'A message is required',
//        ];
//    }

    function uploadFile(Request $request, $slider)
    {
        $file = $request->file('image');
        $path = 'uploads/slider';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($slider->image))
            $this->__deleteImages($slider);

        $data['image'] = $fileName;
        $this->updateImage($slider->id, $data);

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

    public function updateImage($sliderId, array $data)
    {
        try {
            $slider = Slider::find($sliderId);
            $slider = $slider->update($data);
            return $slider;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
