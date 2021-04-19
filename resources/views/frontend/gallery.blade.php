@extends ('frontend.layouts.app')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="page-title">
                        <h1>Gallery</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->

    <!-- START SECTION GALLERY -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    @if($categories->isNotEmpty())
                        <ul class="list_none grid_filter">
                            <li><a href="#" class="current" data-filter="*">all</a></li>
                            @foreach($categories as $category)
                                <li><a href="#" data-filter=".{{$category->slug}}">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($galleries->isNotEmpty())
                        <ul class="grid_container gutter_medium grid_col4">
                            <li class="grid-sizer"></li>
                            <!-- START PORTFOLIO ITEM -->
                            @foreach($galleries as $gallery)
                                    <li class="grid_item {{$gallery->category->slug}}">
                                        <div class="gallery_item radius_all_10">
                                            <a href="#" class="image_link">
                                                <img src="{{asset($gallery->thumbnail_path)}}" alt="{{$gallery->name}}">
                                            </a>
                                            <div class="gallery_content">
                                                <div class="link_container">
                                                    <a href="{{asset($gallery->image_path)}}"
                                                    class="image_popup"><span class="ripple"><i
                                                                    class="ion-image"></i></span></a>
                                                </div>
                                                <div class="text_holder text_white">
                                                    <h5>{{$gallery->name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                            @endforeach
                        <!-- END PORTFOLIO ITEM -->
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION GALLERY -->
@endsection
