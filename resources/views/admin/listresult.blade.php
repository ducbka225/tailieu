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
                                        <h3 class="panel-title"> List Resulr Of Test Table</h3>
                                    </div>
                                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dlrlrables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                           
                                <th>Đáp án</th>
                                
                             
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($listresult as $lr)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lr->id}}</td>
                                <td>{{$lr->answer}}</td>
                                <td class="center">
							        <a href="deletetest/{{$lr->id}}" title="Xóa"><i class="fa fa-trash-o  fa-fw"></i></a> 
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