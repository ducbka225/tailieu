@extends('master')
@section('content')
<section class="featured-courses vertical-column courses-wrap">
        <div class="container">
            <div class="col-xs-12 .col-md-8">
                <div class="col-12 px-25">
                    <header class="heading flex flex-wrap justify-content-between align-items-center">
                        <h4 class="entry-title">Các khóa học mới nhất</h4>

                        <nav class="courses-menu mt-3 mt-lg-0">
                            <ul class="flex flex-wrap justify-content-md-end align-items-center">
                                <li class="active"><a href="#">Tất cả</a></li>
                                <li><a href="#">Học ngoại ngữ</a></li>
                                <li><a href="#">Học lập trình</a></li>
                                <li><a href="#">Học abc</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </nav><!-- .courses-menu -->
                    </header><!-- .heading -->
                </div><!-- .col -->

               

                @foreach($courses as $c)
                <div class="col-12 col-md-6 col-lg-4 px-25">
                    <div class="course-content">
                        <figure class="course-thumbnail">
                            <a href="details/{{$c->id}}"><img src="ezuca/images/{{$c->course_avatar}}" height="200px" alt=""></a>
                        </figure><!-- .course-thumbnail -->

                        <div class="course-content-wrap">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="details/{{$c->id}}" style="color: green">{{$c->title}}</a></h2>

                                <div class="entry-meta flex align-items-center">
                                    <div class="course-author">{{$c->lenght}}</div>

                                    <!-- <div class="course-date">Nov 06, 2018</div> -->
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
                <div class="col-12 px-25 flex justify-content-center">
                    <a class="btn" href="#">view all courses</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .courses-wrap -->


  
@endsection