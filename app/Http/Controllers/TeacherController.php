<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Requests\StoreTeacher;
use App\Http\Requests\UpdateTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $teacher = Teacher::orderBy('created_at', 'desc')->get();

        return view('backend.teacher.index', compact('teacher'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.teacher.create');
    }

    /**
     * @param TeacherRequest $request
     * @return mixed
     */
    public function store(TeacherRequest $request)
    {
        if ($teacher = Teacher::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $teacher);
            }
        }

        return redirect()->route('teacher.index')->withSuccess(trans('New Teacher has been created'));
    }

    /**
     * @param Teacher $page
     * @return \Illuminate\View\View
     */
    public function edit(Teacher $teacher)
    {
        return view('backend.teacher.edit', compact('teacher'));
    }

    public function update(TeacherRequest $request, Teacher $teacher)
    {
        if ($teacher->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $teacher);
            }
        }
        return redirect()->route('teacher.index')->withSuccess(trans('Teacher has been updated'));
    }

    public function destroy(Teacher $teacher)
    {
//        dd($teacher);
        $teacher->delete();
    }

    function uploadFile(Request $request, $teacher)
    {
        $file = $request->file('image');
        $path = 'uploads/teacher';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($teacher->image))
            $this->__deleteImages($teacher);

        $data['image'] = $fileName;
        $this->updateImage($teacher->id, $data);

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

    public function updateImage($teacherId, array $data)
    {
        try {
            $teacher = Teacher::find($teacherId);
            $teacher = $teacher->update($data);
            return $teacher;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
