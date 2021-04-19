<?php

namespace App\Http\ViewCreators;

use Illuminate\View\View;

class BackendMenuCreator
{

    /**
     * The user model.
     *
     * @var \App\Models\User;
     */
    protected $user;

    /**
     * Create a new menu bar composer.
     */
    public function __construct()
    {
        $this->user = auth()->user();
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function create(View $view)
    {
        $menu[] = [
            'class' => false,
            'route' => url('admin/home'),
            'icon'  => 'md md-home',
            'title' => 'Home'
        ];
        array_push($menu, [
            'class' => false,
            'route' => route('menu.index'),
            'icon'  => 'md md-menu',
            'title' => 'Menu',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('page.index'),
            'icon'  => 'md md-pages',
            'title' => 'Page',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('slider.index'),
            'icon'  => 'md md-image',
            'title' => 'Slider',
        ]);


        array_push($menu, [
            'class' => false,
            'route' => route('event.index'),
            'icon'  => 'md md-description',
            'title' => 'Events',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('category.index'),
            'icon'  => 'md md-folder',
            'title' => 'Category Management',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('document.index'),
            'icon'  => 'md md-folder',
            'title' => 'Downloads',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('course.index'),
            'icon'  => 'md md-folder',
            'title' => 'Course',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('teacher.index'),
            'icon'  => 'md md-folder',
            'title' => 'Teachers',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('student.index'),
            'icon'  => 'md md-folder',
            'title' => 'Student Reviews',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('gallery.index'),
            'icon'  => 'md md-photo-album',
            'title' => 'Gallery',
        ]);
        array_push($menu, [
            'class' => false,
            'route' => route('admission.index'),
            'icon'  => 'md md-photo-album',
            'title' => 'Admission',
        ]);

        $view->with('allMenu', $menu);
    }
}
