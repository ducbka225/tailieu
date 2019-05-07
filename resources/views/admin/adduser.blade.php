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
                        <h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                       <form name="ajax-form" id="contact-form2" action="postadduser" method="post" >
							{!!csrf_field()!!}

							<div class="form-group">
								<label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Name" required />
							</div>
							<div class="form-group">
								 <label>Email</label>
                                <input class="form-control" name="txtEmail" placeholder="Please Enter Email" required type="email" />
							</div>
							
							<div class="form-group">
								 <label>Password</label>
                                <input class="form-control" name="txtPassword" placeholder="Please Enter Password" required type="password" />							</div>
							<div class="form-group">
								 <label>Address</label>
                                <input class="form-control" name="txtAddress" placeholder="Please Enter Address" required />
							</div>
							<div class="form-group">
								 <label>Avatar</label>
                                <input class="form-control" name="txtAvatar" placeholder="Please Enter Avatar" required />
							</div>
							<div class="form-group">
								 <label>Role</label>
                                <input class="form-control" name="txtRole" placeholder="Please Enter Role" required />
							</div>

						
							
							<div class="form-group">
								<input name="submit" value="Thêm" id="send" type="submit">
							</div>
							
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