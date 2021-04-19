<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvent;
use App\Http\Requests\UpdateEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $event = Event::orderBy('created_at', 'desc')->get();

        return view('backend.event.index', compact('event'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * @param StoreEvent $request
     * @return mixed
     */
    public function store(StoreEvent $request)
    {
        if ($event = Event::create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $event);
            }
        }

        return redirect()->route('event.index')->withSuccess(trans('New Event has been created'));
    }

    /**
     * @param Event $page
     * @return \Illuminate\View\View
     */
    public function edit(Event $event)
    {
        return view('backend.event.edit', compact('event'));
    }

    public function update(UpdateEvent $request, Event $event)
    {
        if ($event->update($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $event);
            }
        }
        return redirect()->route('event.index')->withSuccess(trans('Event has been updated'));
    }

    public function destroy(Event $event)
    {
//        dd($event);
        $event->delete();
    }

    function uploadFile(Request $request, $event)
    {
        $file = $request->file('image');
        $path = 'uploads/event';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($event->image))
            $this->__deleteImages($event);

        $data['image'] = $fileName;
        $this->updateImage($event->id, $data);

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

    public function updateImage($eventId, array $data)
    {
        try {
            $event = Event::find($eventId);
            $event = $event->update($data);
            return $event;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}
