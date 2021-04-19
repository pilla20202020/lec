@extends ('frontend.layouts.app')
@section('content')


    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
             data-parallax-bg-image="{{asset('assets/images/about_bg.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="page-title">
                        <h1>Downloads</h1>
                    </div>
                </div>
                <div class="col-sm-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Downloads</li>
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
                            @foreach($categories as $category)
                                <li><a href="#" data-filter=".{{$category->slug}}"
                                       class="@if($loop->index == 0) current @endif">{{$category->title}}</a></li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if($downloads->isNotEmpty())
                        <ul class="grid_container gutter_medium grid_col4 downloads">
                            <li class="grid-sizer"></li>
                            <!-- START PORTFOLIO ITEM -->
                            <li>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col" width="10%">#</th>
                                    <th scope="col" width="40%" align="center">Title</th>
                                    <th scope="col" width="40%" align="center"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($downloads as $download)
                                    <tr grid_item {{$download->category->slug}}>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$download->title}}</td>
                                        <td>
                                            <a href="{{asset($download->document_path)}}">
                                                <button class="btn btn-sm btn-outline-default"><i
                                                        class="fa fa-download"></i> Download
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </li>
                            <!-- END PORTFOLIO ITEM -->
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION GALLERY -->

@endsection
