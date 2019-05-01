@extends('master')
@section('content')
<div class="container">
        <div class="row mx-m-250">
         

            <div class="col-12 col-md-12 col-lg-4 px-25">
                <div class="content">
                    	 
                <form class="quiz-form" method="post" action="result/{course_id}" name="post">	
                	{{ csrf_field() }}
	                 <h2>Đề số 01</h2>
	            @foreach($test_course as $t)

                    	<hr class="style-one"><font size="4" color="#0B0B61"><b></b></font>	
				<div id="khungtracnghiem">
				<div id="{{$t->id}}"><div class="bai_stt">問:{{$t->id}} {{$t->content}}</div>&nbsp;&nbsp;<font size="4" color="#0B0B61"><b></b></font></div>
				<table id="table_tracnghiem" name="{{$t->id}}">
						<tbody><tr id="table_tracnghiem"> <td id="table_tracnghiem">
							<!-- <input id="{{$t->id}}_correct_11" type="hidden" name="{{$t->id}}"> -->
							<input id="{{$t->id}}_11" type="radio" name="{{$t->id}}" value="{{$t->a}}"><span style="font-size: 15px">   {{$t->a}}</span><span id="result_question_11"></span> <span id="result_correct_11"></span></td></tr>
						<tr id="table_tracnghiem"> <td id="table_tracnghiem">
							<!-- <input id="{{$t->id}}_correct_12" type="hidden" name="correct"> -->
							<input id="{{$t->id}}_12" type="radio" name="{{$t->id}}" value="{{$t->b}}"><span style="font-size: 15px">   {{$t->b}} </span><span id="result_question_12"></span> <span id="result_correct_12"></span></td></tr>
						<tr id="table_tracnghiem"> <td id="table_tracnghiem">
							<!-- <input id="{{$t->id}}_correct_13" type="hidden" name="correct"> -->
							<input id="{{$t->id}}_13" type="radio" name="{{$t->id}}" value="{{$t->c}}"><span style="font-size: 15px">   {{$t->c}} </span><span id="result_question_13"></span> <span id="result_correct_13"></span></td></tr>
						<tr id="table_tracnghiem"> <td id="table_tracnghiem">
						<!-- 	<input id="{{$t->id}}_correct_14" type="hidden" name="correct"> -->
							<input id="{{$t->id}}_14" type="radio" name="{{$t->id}}" value="{{$t->d}}"><span style="font-size: 15px">  {{$t->d}} </span><span id="result_question_14"></span> <span id="result_correct_14"></span></td></tr>
				</tbody></table>
				</div>
				 @endforeach
				         <input type="submit" value="Kết Quả" class="btn btn-minw btn-square btn-danger" id="ketqua">


						 <!-- <input type="button" value="Kết Quả" onclick="check_result();" class="btn btn-minw btn-square btn-danger" id="ketqua"> -->
                       <!--   <input type="button" value="Làm Lại" onclick="reset_result();" class="btn btn-minw btn-square btn-success" id="lamlai">
                         <input type="button" value="Đáp Án" onclick="result_correct();" class="btn btn-minw btn-square btn-primary" id="dapan" data-toggle="tooltip" title="" data-original-title="Bạn chỉ xem được đáp án khi làm đúng 60% trở lên"> -->
				</form>
				<!--  <script type="hidden">

						function check_result(){
						 var your_{{$t->id}}_correct = 0;
							for(i=0;i<{{$t->id}}_id.length;i++){
								for(j in {{$t->id}}_id[i]){
									if(document.getElementById('{{$t->id}}_' + {{$t->id}}_id[i][j]).checked==true){
										document.getElementById('result_question_' + {{$t->id}}_id[i][j]).innerHTML = your_{{$t->id}}[0];
									}
									document.getElementById('{{$t->id}}_'+{{$t->id}}_id[i][j]).disabled=true;
								}
							}		
							for(i=0;i<{{$t->id}}_correct.length;i++){
								if(document.getElementById('{{$t->id}}_'+{{$t->id}}_correct[i]).checked == true){
									document.getElementById('result_question_'+{{$t->id}}_correct[i]).innerHTML = your_{{$t->id}}[1];
									your_{{$t->id}}_correct++;
								}	
							}
							if(question_count == your_{{$t->id}}_correct)
								var color = 'green';
							else
								var color = 'red';
						}
										 	
						function result_correct(){
								var your_{{$t->id}}_correct = 0;
								for(i=0;i<{{$t->id}}_correct.length;i++){
									if(document.getElementById('{{$t->id}}_'+{{$t->id}}_correct[i]).checked == true){
										your_{{$t->id}}_correct++;
									}	
								}
								var tyledung = (your_{{$t->id}}_correct / question_count) * 100;
								var username = "";
								if(tyledung >= 60 || username =='administrator'){
									for(i in {{$t->id}}_correct){
										document.getElementById('result_correct_'+{{$t->id}}_correct[i]).innerHTML = your_{{$t->id}};
									}
								}
						}
						function reset_result(){
							for(i in {{$t->id}}_id){
								for(j in {{$t->id}}_id[i]){
									document.getElementById('result_question_' + {{$t->id}}_id[i][j]).innerHTML = '';
									document.getElementById('result_correct_' + {{$t->id}}_id[i][j]).innerHTML = '';
									document.getElementById('{{$t->id}}_'+{{$t->id}}_id[i][j]).disabled=false;
									document.getElementById('{{$t->id}}_'+{{$t->id}}_id[i][j]).checked = false;
								}
							}	
							document.getElementById('your_{{$t->id}}_correct').innerHTML = '';
						}
				 </script> -->


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