@extends('master')
@section('content')
<div class="container">
        <div class="row mx-m-250">
         

            <div class="col-12 col-md-12 col-lg-4 px-25">
                <div class="content">
                    	 
                <form class="quiz-form" method="post" action="posttest/{course_id}" name="post">	
	                 <h2>Đề số 01</h2>
	            @foreach($test_result as $tr)

                    	<hr class="style-one"><font size="4" color="#0B0B61"><b></b></font>	
				<div id="khungtracnghiem">
				<div id="{{$tr->id}}"><div class="bai_stt">問: {{$tr->answer}}</div>&nbsp;&nbsp;
				<font size="4" color="#0B0B61"><b><h4>
					
				</b></font></div>
				
				</div>
				 @endforeach


                         <input type="button" value="Làm Lại" onclick="reset_result();" class="btn btn-minw btn-square btn-success" id="lamlai">
                         <input type="button" value="Đáp Án" onclick="result_correct();" class="btn btn-minw btn-square btn-primary" id="dapan" data-toggle="tooltip" title="" data-original-title="Bạn chỉ xem được đáp án khi làm đúng 60% trở lên">
				</form>
				


                        <!-- <form >
						    <label class="radio-inline">
						      <input type="radio" name="optradio" checked>{{$t->a}}
						    </label>
						    <label class="radio-inline">
						      <input type="radio" name="optradio">{{$t->b}}
						    </label>
						    <label class="radio-inline">
						      <input type="radio" name="optradio">{{$t->c}}
						    </label>
						     <label class="radio-inline">
						      <input type="radio" name="optradio">{{$t->d}}
						    </label>
						</form> -->


                    </div><!-- .course-content -->
                </div><!-- .col -->
               
            </div><!-- .col -->
    </div><!-- .container -->

@endsection