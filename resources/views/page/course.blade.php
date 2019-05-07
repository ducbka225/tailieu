@extends('master')
@section('content')
<div class="container">
            <div class="row mx-m-25">
                <h3> Danh sách khóa học </h3>
          @foreach($course as $c)
                <div class="col-12 col-md-4 col-lg-4 px-25">
                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <a href="courses/{{$c->id}}"><img src="ezuca/images/{{$c->course_avatar}}" width="250px" height="10px"></a>
                        </figure>
                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="post/{{$c->id}}" style="color: green">{{$c->title}}</a></h2>
                                <div class="entry-meta flex align-items-center">
                                    <div class="course-author">{{$c->lenght}}</div>
                                     </div><!-- .course-date -->
                            </header><!-- .entry-header -->
                             <footer class="entry-footer flex justify-content-between align-items-center">
                                <div class="course-cost">
                                   <a href="test/{{$c->id}}"> <span class="free-cost">Thi</span></a>
                                </div><!-- .course-cost -->
                                <div class="course-ratings flex justify-content-end align-items-center">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="course-ratings-count">(4 votes)</span>
                                </div><!-- .course-ratings -->
                            </footer><!-- .entry-footer -->
                        </div><!-- .course-content-wrap -->
                    </div><!-- .course-content -->
                </div><!-- .col -->
                <div class="">
                @endforeach
            </div><!-- .col -->
    </div><!-- .container -->

@endsection