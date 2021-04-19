<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Requests\StoreAdmission;
use App\Models\Admissions ;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class AdmissionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function index()
    {
        $admissions = Admissions::orderBy('id','desc')->get();

        return view('backend.admission.index', compact('admissions'));
    }

    public function show($admission)
    {
        $admission = Admissions::find($admission);

        return view('backend.admission.view', compact('admission'));
    }

    public function create()
    {
        // dd('here');
        return view('admissions.create');
        // return view('admissions.submissionOver');
    }

    /**
     * @param StoreAdmission $request
     * @return mixed
     */


    /**
     * @param StoreAdmission $request
     * @return mixed
     */
    public function store(StoreAdmission $request)
    {
        DB::transaction(function () use ($request)
        {
            $admission = Admissions::create($request->storeData());


            if ($request->hasFile('file')) 
            {
                $file = $request->file('file');

                if ($file->isValid())
                {
                    $path        = 'uploads/documents/';
                    $extension   = $file->extension();
                    $size        = $file->getSize();
                    $name        = str_slug(date('YmdHis') . ' ' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $extension;
                    $destination = $path . $name;

                    $request->file('file')->move($path, $name);

                    $admission->documents()->create([

                        'size'      => $size,
                        'extension' => $extension,
                        'path'      => $destination
                    ]);
                }
            }

        });

        return back()->withSuccess(trans('Your form has been submitted. For re-confirmation please contact the college. Contact No:+977-1-5260216'));
    }

    public function viewAll()
    {

        return view('backend.admissions.viewAllApplicants');
    }

    public function viewDetails(Admissions $admission)
    {
        return view('backend.admission.view', compact('admission'));
    }

    /**
     * @return mixed
     */
    public function admissionList()
    {

        return Datatables::of(Admissions::where( DB::raw('YEAR(created_at)'), '=', date('Y') )->get())->addColumn('action', function ($item)
        {
            $buttons = $this->getButtons($item);

            return $buttons;
        })->editColumn('created_at', function ($item)
            {
                $date = date_format($item->created_at, 'Y-m-d');

                return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
            })->make(true);
    }

    public function search()
    {
        $fromDate = setting('readmission_date');
        $to  = Carbon::now()->toDateString();
        $toDate = Carbon::createFromFormat('Y-m-d', $to);

        return Datatables::of(Admissions::whereBetween('created_at', [ $fromDate, $toDate ])->get())
        ->editColumn('created_at', function ($item)
        {
            $date = date_format($item->created_at, 'Y-m-d');

            return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
        })
        ->addColumn('action', function ($item)
        {
            $buttons = $this->getButtons($item);

            return $buttons;
        })->make(true);

    }

    public function viewCivil()
    {
        return view('backend.admissions.viewCivil');
    }

    /**
     * @return mixed
     */
    public function civilList()
    {
        return Datatables::of(Admissions::where('prior_prog_1', 'civil')->where( DB::raw('YEAR(created_at)'), '=', date('Y') )->get())->addColumn('action', function ($item)
        {
            $buttons = $this->getButtons($item);

            return $buttons;
        })->make(true);
    }

    public function searchCivil()
    {
        $fromDate = setting('readmission_date');
        $to  = Carbon::now()->toDateString();
        $toDate = Carbon::createFromFormat('Y-m-d', $to);

        return Datatables::of(Admissions::whereBetween('created_at', [ $fromDate, $toDate ])
        ->where('prior_prog_1', 'civil')->get())
        ->editColumn('created_at', function ($item)
        {
            $date = date_format($item->created_at, 'Y-m-d');

            return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
        })
        ->addColumn('action', function ($item)
        {
            $buttons = $this->getButtons($item);

            return $buttons;
        })
        ->make(true);
    }

    public function viewComputer()
    {
        return view('backend.admissions.viewComputer');
    }

    /**
     * @return mixed
     */
    public function computerList()
    {
        return Datatables::of(Admissions::where('prior_prog_1', 'computer')->where( DB::raw('YEAR(created_at)'), '=', date('Y') )->get())->addColumn('action', function ($item)
        {
            $buttons = $this->getButtons($item);

            return $buttons;
        })->make(true);
    }

    public function searchComputer()
    {
        $fromDate = setting('readmission_date');
        $to  = Carbon::now()->toDateString();
        $toDate = Carbon::createFromFormat('Y-m-d', $to);

        return Datatables::of(Admissions::whereBetween('created_at', [ $fromDate, $toDate ])
            ->where('prior_prog_1', 'computer')->get())
            ->editColumn('created_at', function ($item)
            {
                $date = date_format($item->created_at, 'Y-m-d');

                return Carbon::createFromFormat('Y-m-d', $date)->toDateString();
            })
            ->addColumn('action', function ($item)
            {
                $buttons = $this->getButtons($item);

                return $buttons;
            })
            ->make(true);
    }


    /**
     * @param Admission $admission
     * @return mixed
     */
    public function destroy(Admissions $admission)
    {
        $admission->delete();
        return redirect()->back();
    }

    public function admissionForm() {
        return view('frontend.admission.form');
    }

}
