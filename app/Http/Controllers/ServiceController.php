<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreService;
use App\Http\Requests\UpdateService;
use App\Models\Service;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();

        return view('backend.service.index', compact('services'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StoreService $request)
    {
        DB::transaction(function () use ($request)
        {
            $service = Service::create($request->data());

            $this->uploadRequestImage($request, $service);
        });

        return redirect()->route('service.index')->withSuccess(trans('New Service has been created'));
    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Service $services)
    {
        return view('backend.service.edit', compact('services'));
    }

    public function update(UpdateService $request, Service $services)
    {
//        dd($request->all());

        DB::transaction(function () use ($request, $services)
        {
//            dd($services->all());

            $services->update($request->data());

            $this->uploadRequestImage($request, $services);
        });

        return redirect()->route('service.index')->withSuccess(trans('Service has been updated'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
    }
}
