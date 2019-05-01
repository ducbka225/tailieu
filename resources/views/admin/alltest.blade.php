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
                                        <h3 class="panel-title"> All Test</h3>
                                    </div>
                                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="datatables-example">
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
                        	@foreach($alltest as $at)
                            <tr class="odd gradeX" align="center">
                                <td>{{$at->id}}</td>
                                <td>{{$at->content}}</td>
                                <td>{{$at->a}}</td>
                                <td>{{$at->b}}</td>
                                <td>{{$at->c}}</td>
                                <td>{{$at->d}}</td>
                                <td>{{$at->true}}</td>
                                <td class="center">
                                	<a href="/admin/addtest" title="Thêm Test">
							          <span class="glyphicon glyphicon-plus"></span>
							        </a>
							        <a href="deletetest/{{$at->id}}" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a> 
							        <a href="/admin/result/{{$at->id}}">
											        	<span class="fa fa-file-text"></span>
											        </a>	
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