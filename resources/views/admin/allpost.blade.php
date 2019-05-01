@extends('admin.master')
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
                                        <h3 class="panel-title"> All Post Table</h3>
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
                        	@foreach($allpost as $ap)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ap->id}}</td>
                                <td>{{$ap->title}}</td>
                                <td><img src="ezuca/images/{{$ap->avatar}}" width="150px" height="100px"></td>
                                <td>{{$ap->subcontent}}</td>
                                <td>{{$ap->content}}</td>
                                <td class="center">
                                	<a href="/admin/addpost" title="Thêm bài học">
							          <span class="glyphicon glyphicon-plus"></span>
							        </a>
							        <a href="deletepost/{{$ap->id}}" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a> 
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