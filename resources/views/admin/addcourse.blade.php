@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="wrapper">
           
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Course
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="postaddcourse" method="POST">
                        	{!!csrf_field()!!}
                            <div class="form-group">
                                <label>Course Number</label>
                                <input class="form-control" name="txtCourse_number" placeholder="Please Enter Number" required />
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="txtTitle" placeholder="Please Enter title" required />
                            </div>
                            <div class="form-group">
                                <label>Course Avatar</label>
                                <input class="form-control" name="txtCourse_avatar" placeholder="Please Enter title" required />                                
                            </div>
                            <div class="form-group">
					          <label>lenght</label>
					          <input class="form-control" name="txtLenght" placeholder="Please Enter Content"  required />
					        </div> 
                             <div class="form-group">
                             <label>Giáo viên</label>
                            <select class="form-control" name="txtUser_id" id="user_name">
                                @foreach($id_user->$u)
                                <option value="1">{{$u->name}}</option>
                                @endforeach
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