@extends('master')
@section('content')
<div class="input-container">
	<div class="row justify-content-center">
						<!-- .student-info -->
						<div class="student-info">
							@if(Session::has('message'))
				            <div class="alert alert-success">{{Session::get('message')}}</div>
				            @endif
				            @if(Session::has('loi'))
				            <div class="alert alert-danger">{{Session::get('loi')}}</div>
				            @endif
							<form action="/updateinfo" method="POST" enctype="multipart/form-data">
								{!!csrf_field()!!}
							  <h2>Thay Đổi thông tin cá nhân</h2>
							  <div class="input-container">
							    <i class="fa fa-user icon"></i>
							    <input class="input-field" type="text" value="{{$user->name}}" name="name">
							  </div>


							  <div class="input-container">
							    <i class="fa fa-envelope icon"></i>
							    <input class="input-field" type="text" placeholder="Email" name="email" readonly value="{{$user->email}}">
							  </div>

							  <div class="input-container">
							    <i class="fa fa-address-card-o icon"></i>
							    <input class="input-field" type="text" value="{{$user->address}}" name="address" >
							  </div>

							  <div class="input-container">
							    <i class="fa fa-phone-square icon"></i>
							    <input class="input-field" type="text" value="{{$user->phone_number}}" name="phone" >
							  </div>
							  <div class="input-container">
							  <i class="fa fa-photo icon"></i> 
							  <input class="input-field" type="file" name="avatar" placeholder="Chọn ảnh đại diện">
							  </div>
							  <button type="submit" class="btn">Cập Nhật</button>
							</form>
						</div>
						<!-- .student-info -->
					</div>
				</div>
@endsection