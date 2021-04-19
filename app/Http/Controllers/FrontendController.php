<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMailNotifiable;
use App\Mail\VacancyApply;
use App\Models\Category;
use App\Models\Course;
use App\Models\Download;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function homepage()
    {
        $notices = Event::where('is_published', 1)->where('is_notice', 1)->get();
        $bigEvent = Event::where('is_featured', 1)->where('is_published', 1)->where('is_notice', 0)->latest()->first();
        if ($bigEvent) {
            $events = Event::where('is_featured', 1)->where('is_published', 1)->whereNotIn('id', [$bigEvent->id])->where('is_notice', 0)->take(3)->latest()->get();
        } else {
            $events = '';
        }
        $courses = Course::where('is_featured', 1)->where('is_published', 1)->get();
        $reviews = Student::where('is_featured', 1)->where('is_published', 1)->get();
        $teachers = Teacher::where('is_featured', 1)->where('is_published', 1)->get();
        $sliders = Slider::where('is_published', 1)->get();
        $downloads = Download::where('is_published', 1)->get();
        $features = Page::where('view', 'feature')->where('is_published', 1)->get();
        $welcomeMsg = Page::where('slug', 'like', '%welcome%')->where('is_published', 1)->first();
        return view('frontend.home', compact('events', 'sliders', 'downloads', 'courses', 'bigEvent', 'reviews', 'teachers', 'features', 'welcomeMsg', 'notices'));
    }

    public function about()
    {
        return view('frontend.about.about');
    }

    public function consulting()
    {
        return view('frontend.consulting.consulting');
    }

    public function downloads()
    {
        $categories = Category::whereIsPublished(1)->where('view', 'download')->get();
        $downloads = Download::whereIsPublished(1)->get();
        return view('frontend.downloads', compact('categories', 'downloads'));
    }

    public function gallery()
    {
        $categories = Category::whereIsPublished(1)->where('view', 'gallery')->get();
        $galleries = Gallery::whereIsPublished(1)->get();
        return view('frontend.gallery', compact('categories', 'galleries'));
    }

    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function vacancy()
    {
        $vacancy = Page::where('slug', 'like','%vacancy%')->first();
        return view('frontend.vacancy',compact('vacancy'));
    }

    public function eventList($slug = null)
    {
        $events = Event::where('is_published', 1)->get();
        return view('frontend.event.events', compact('events'));
    }

    public function eventDetail(Event $event)
    {
        $events = Event::where('is_published', 1)->limit(4)->whereNotIn('id', [$event->id])->latest()->get();
        return view('frontend.event.events_detail', compact('event', 'events'));
    }

    public
    function courseDetail(Course $course)
    {
        return view('frontend.course.detail', compact('course'));
    }

    public function contactMail(Request $request)
    {
        $mailParam = [
            'full_name' => $request->full_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'subject' => $request->subject,
            'cnt_message' => $request->cnt_message
        ];

        Mail::to('info@lec.edu.np')->send(new ContactFormMailNotifiable($mailParam));
        return redirect()->back()->withSuccess(trans('Contact Inquiry Send Successfully'));
    }

    public function applyVacancy(Request $request) 
    {
        $mailParam = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            
        ];
        $files = [];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'uploads/vacancy';
            $fileName = $this->uploadFromAjax($file, $path, true);
            array_push($files,['file'=> $fileName]);
        }

        if ($request->hasFile('transcript')) {
            $file = $request->file('transcript');
            $path = 'uploads/vacancy';
            $fileName = $this->uploadFromAjax($file, $path, true);
            array_push($files,['file'=> $fileName]);
        }

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $path = 'uploads/vacancy';
            $fileName = $this->uploadFromAjax($file, $path , true);
            array_push($files,['file'=> $fileName]);
        }

        Mail::to('info@lec.edu.np')->send(new VacancyApply($mailParam,$files));
        return redirect()->back()->withSuccess(trans('Vacancy Enqiury Send Successfully.'));

    }

    public function page($slug = null)
    {
        if ($slug) {
            $page = Page::whereSlug($slug)->whereIsPublished(1)->first();

            if ($page == null) {
                $service = Service::whereSlug($slug)->whereIsPublished(1)->first();
                if ($service) {
                    $services = Service::where('is_published', 1)->whereNotIn('id', [$service->id])->get();
                    return view('frontend.service.detail', compact('services', 'service'));
                } else {
                    return view('frontend.errors.404');
                }
            }
            if ($page) {
                $courses = Course::where('is_featured', 1)->where('is_published', 1)->get();
                $events = Event::where('is_published', 1)->take(3)->latest()->get();
                $pages = Page::where('is_published', 1)->whereNotIn('id', [$page->id])->get();
                return view('frontend.page', compact('page', 'pages','courses','events'));
            } else {
                return view('frontend.errors.404');
            }
        }
    }

}
