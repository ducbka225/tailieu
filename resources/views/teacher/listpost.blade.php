@extends('teacher.master')
@section('content')
<div id="wrapper">
           
    <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BASIC TABLE -->
                            <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Danh sách bài học</h3>
                                        <h4 class="panel-content"><a href="teacher/addpost/{{$course_id}}" >Thêm bài học</a></h4>
                                    </div>
                                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>Nội dung phụ</th>
                                <th>Nội dung </th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($listpost as $lp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lp->id}}</td>
                                <td>{{$lp->title}}</td>
                                <td><img src="ezuca/images/{{$lp->avatar}}" width="150px" height="100px"></td>
                                <td>{{$lp->subcontent}}</td>
                                <td>{{$lp->content}}</td>
                                <td class="center">
                                	<a href="teacher/addpost/{{$course_id}}" title="Thêm bài học">
							          <span class="glyphicon glyphicon-plus"></span>
							        </a>
							        <a href="deletepost/{{$lp->id}}" title="Xóa bài học"><i class="fa fa-trash-o  fa-fw"></i></a> 
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                            </div>      
                        </div>
                    </div>   
                </div>
            </div>         
            <!-- /.container-fluid -->
    </div>
</div>    
@endsection