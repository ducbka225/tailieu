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
                        <h1 class="page-header">Post
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="postaddpost/{{$course_id}}" method="POST">
                        	{!!csrf_field()!!}
                            <div class="form-group">
                                <label>Lesson Title</label>
                                <input class="form-control" name="txtTitle" placeholder="Please Enter Title" required />
                            </div>
                            <div class="form-group">
                                <label>avatar</label>
                                <input class="form-control" name="txtAvatar" placeholder="Please Enter Avatar" required />
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="txtContent" class="form-control " id="editor2"></textarea>
                                
                            </div>
                            <div class="form-group">
					          <label>SubContent</label>
					          <input type="file" name="filename" value="upload">
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