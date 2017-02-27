@extends('main')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ $folder->name }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Главная</a>
                </li>
                <li><a href="{{ url('/photofolders') }}">Фотогалерея</a>
                </li>
                <li class="active">{{ $folder->name }}
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                {{--<ol class="carousel-indicators">

                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    @for ($i=1; $i<(count($photos)); $i++)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
                    @endfor
                    --}}{{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}{{--
                </ol>--}}

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img class="img-responsive" src="http://placehold.it/750x500" alt="">
                    </div>

                    @foreach ($photos as $photo)
                        <div class="item">
                            <img class="img-responsive" src="{{'images/photos/'. $folder->id .'/' . $photo->id.'.jpg' }}" alt="">
                        </div>
                    @endforeach

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <h3>Project Description</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem,
            adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

        </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Related Projects</h3>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-sm-3 col-xs-6">
            <a href="#">
                <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

@endsection