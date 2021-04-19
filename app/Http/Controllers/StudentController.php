<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Requests\StoreStudent;
use App\Http\Requests\UpdateStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $student = Student::orderBy('created_at', 'desc')->get();

        return view('backend.student.index', compact('student'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.student.create');
    }

    /**
     * @param StudentRequest $request
     * @return mixed
     */
    public function store(StudentRequest $request)
    {
        if ($student = Student::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $student);
            }
        }

        return redirect()->route('student.index')->withSuccess(trans('New Student has been created'));
    }

    /**
     * @param Student $page
     * @return \Illuminate\View\View
     */
    public function edit(Student $student)
    {
        return view('backend.student.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student)
    {
        if ($student->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $student);
            }
        }
        return redirect()->route('student.index')->withSuccess(trans('Student has been updated'));
    }

    public function destroy(Student $student)
    {
//        dd($student);
        $student->delete();
    }

    function uploadFile(Request $request, $student)
    {
        $file = $request->file('image');
        $path = 'uploads/student';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($student->image))
            $this->__deleteImages($student);

        $data['image'] = $fileName;
        $this->updateImage($student->id, $data);

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

    public function updateImage($studentId, array $data)
    {
        try {
            $student = Student::find($studentId);
            $student = $student->update($data);
            return $student;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
