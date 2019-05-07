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
                                        <h3 class="panel-title"> List Test Of Course Table</h3>
                                        <h4><a href="admin/addtest/{{$course_id}}">Thêm câu hỏi</a></h4>
                                    </div>
                                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dltltables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Đề bài</th>
                                <th>Đáp án 1</th>
                                <th>Đáp án 2</th>
                                <th>Đáp án 3</th>
                                <th>Đáp án 4</th>
                                <th>Đáp án đúng</th>
                             
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($listtest as $lt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lt->id}}</td>
                                <td>{{$lt->content}}</td>
                                <td>{{$lt->a}}</td>
                                <td>{{$lt->b}}</td>
                                <td>{{$lt->c}}</td>
                                <td>{{$lt->d}}</td>
                                <td>{{$lt->true}}</td>
                                <td class="center">

                                    <a href="admin/addtest/{{$course_id}}" title="Thêm Câu hỏi">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                    </a>
                                	<a href="/admin/result/{{$lt->id}}">
											          <span class="glyphicon glyphicon-list-alt"></span>
											        </a>
							        <a href="deletetest/{{$lt->id}}" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a> 
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