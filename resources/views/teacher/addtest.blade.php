@extends('teacher.master')
@section('content')
<!-- Page Content -->
<div id="wrapper">
           
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Test
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="postaddtest/{{$course_id}}" method="POST">
                        	{!!csrf_field()!!}
                            <div class="form-group">
                                <label>Câu hỏi</label>
                                <input class="form-control" name="txtContent" placeholder="nhập câu hỏi" required />
                            </div>
                            <div class="form-group">
                                <label>a</label>
                                <input class="form-control" name="txtA" placeholder="nhập đáp án A" required />
                            </div>
                            <div class="form-group">
                                <label>b</label>
                                <input class="form-control" name="txtB" placeholder="nhập đáp án B" required />
                            </div>
                            <div class="form-group">
                                <label>c</label>
                                <input class="form-control" name="txtC" placeholder="nhập đáp án C" required />
                            </div>
                            <div class="form-group">
                                <label>d</label>
                                <input class="form-control" name="txtD" placeholder="nhập đáp án D" required />
                            </div>
                            
                            <div class="form-group">
					         <label>Đáp Án Đúng </label>
                            <select class="form-control" name="txtTrue" id="true">
                                
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">D</option>
                            </select>
					        </div> 
                            
                            <button type="submit" class="btn btn-primary">Thêm</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
@endsection