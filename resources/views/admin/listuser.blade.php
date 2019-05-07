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
                                        <h3 class="panel-title">User Table</h3>
                                    </div>
                                <div class="panel-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Avatar</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($listuser as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->address}}</td>
                                <td><img src="ezuca/images/{{$us->avatar}}" width="150px" height="100px"></td>
                                <td>
                                    @if($us->role == 0)
                                    <p class="text-primary">Học Sinh</p>
                                    @else
                                    <p class="text-danger">Admin</p>
                                    @endif
                                    
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/deleteuser/{{$us->id}}"> Delete</a></td>

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