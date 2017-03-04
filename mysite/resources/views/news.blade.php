@extends('main')

@section ('content')

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Новости
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Главная</a>
                    </li>
                    <li class="{{ url('/news') }}">Новости</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-lg-12">

                @foreach ($news as $one_news)
                <!-- First Blog Post -->
                <h2>
                    <a href="{{ url('/news_'. $one_news->id) }}">{{ $one_news -> name }}</a>
                </h2>

                <p><i class="fa fa-clock-o"></i> Опубликовано {{ $one_news->created_at }}</p>
                <hr>
                <a href="#">
				{{--<img class="img-responsive img-hover" width="400" height="400" src="{{'images/news/' . $one_news->image_path}}" alt="">--}}
					<img src="{{'images/news/' . $one_news->image_path}}" class="img-thumbnail" alt="" width="304" height="236">
                </a>
                <hr>
                <p>{{str_limit($one_news->description, 200)}}</p>
                <a class="btn btn-primary" href="{{ url('/news_'. $one_news->id) }}">Подробнее <i class="fa fa-angle-right"></i></a>

                <hr>

                @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

        </div>
        <!-- /.row -->

@endsection