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
										<h3 class="panel-title">Course Table</h3>
									</div>
								<div class="panel-body">
                    <!-- /.col-lg-12 -->
				                    <table class="table" id="dataTables-example">
				                        <thead>
				                            <tr>
				                                <th>ID</th>
				                                <th>Mã KH</th>
				                                <th>Tiêu Đề</th>
				                                <th>Ảnh</th>
				                                <th>Thời Lượng</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                        	@foreach($listcourse as $cs)
				                            <tr class="odd gradeX" >
				                                <td>{{$cs->id}}</td>
				                                <td>{{$cs->course_number}}</td>
				                                <td <a href="#">{{$cs->title}}</td>
				                               
				                                <td><img src="ezuca/images/{{$cs->course_avatar}}" width="150px" height="100px"></td>
				                                 <td>{{$cs->lenght}}</td>
				                                 <td class="center">
				                                	<a href="#"><i class="fa fa-trash-o  fa-fw"></i></a> | 
				                                	<a href="/admin/addcourse" title="Thêm Khóa Học">
											          <span class="glyphicon glyphicon-plus"></span>
											        </a> | 
											        <a href="/admin/post/{{$cs->id}}">
											          <span class="glyphicon glyphicon-list-alt"></span>
											        </a>
											        <a href="/admin/test/{{$cs->id}}">
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