@extends('master')
@section('content')
<div class="container">
            <div class="row mx-m-25">
          @foreach($post_course as $p_c)
                <div class="col-12 col-md-6 col-lg-4 px-25">
                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <a href="courses/{{$p_c->id}}"><img src="ezuca/images/{{$p_c->course_avatar}}" width="150px" height="100px"></a>
                        </figure>
                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="details/{{$p_c->id}}" style="color: green">{{$p_c->title}}</a></h2>
                                <div class="entry-meta flex align-items-center">
                                    <div class="course-author">{{$p_c->lenght}}</div>
                                     </div><!-- .course-date -->
                            </header><!-- .entry-header -->
                             <footer class="entry-footer flex justify-content-between align-items-center">
                                <div class="course-cost">
                                    <span class="free-cost">Free</span>
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
                @endforeach
            </div><!-- .col -->
    </div><!-- .container -->

@endsection