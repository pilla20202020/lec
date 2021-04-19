<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\StoreCourse;
use App\Http\Requests\UpdateCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $course = Course::orderBy('created_at', 'desc')->get();

        return view('backend.course.index', compact('course'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.course.create');
    }

    /**
     * @param CourseRequest $request
     * @return mixed
     */
    public function store(CourseRequest $request)
    {
        if ($course = Course::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $course);
            }
        }

        return redirect()->route('course.index')->withSuccess(trans('New Course has been created'));
    }

    /**
     * @param Course $page
     * @return \Illuminate\View\View
     */
    public function edit(Course $course)
    {
        return view('backend.course.edit', compact('course'));
    }

    public function update(CourseRequest $request, Course $course)
    {
        if ($course->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $course);
            }
        }
        return redirect()->route('course.index')->withSuccess(trans('Course has been updated'));
    }

    public function destroy(Course $course)
    {
//        dd($course);
        $course->delete();
    }

    function uploadFile(Request $request, $course)
    {
        $file = $request->file('image');
        $path = 'uploads/course';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($course->image))
            $this->__deleteImages($course);

        $data['image'] = $fileName;
        $this->updateImage($course->id, $data);

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

    public function updateImage($courseId, array $data)
    {
        try {
            $course = Course::find($courseId);
            $course = $course->update($data);
            return $course;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
