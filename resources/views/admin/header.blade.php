
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Tìm kiếm">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger"></span>
							</a>
							
						</li>
						<li class="dropdown">
							
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/img/user.png" class="img-circle" alt="Avatar">
								 
								   @if(Auth::check())
				                    <span>{{Auth::user()->name}}</span> 
				                   @endif 
								 
								 <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>Thông tin cá nhân</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Tin nhắn</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Cài đặt</span></a></li>
								<li><a href="admin/logout"><i class="lnr lnr-exit"></i> <span>Đăng xuất</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="admin/index" class="active"><i class="lnr lnr-home"></i> <span>Trang chủ</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Tài Liệu</span></a></li>
						<li>
							<a href="#sub__Pages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Kiểm tra</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>

							<div id="sub__Pages" class="collapse ">
								<ul class="nav">
									<li><a href="admin/alltest" class="">Tất cả câu hỏi</a></li>
									<li><a href="admin/allresult" class="">Tất cả câu trả lời</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#sub_aPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Khóa học</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="sub_aPages" class="collapse ">
								<ul class="nav">
									<li><a href="admin/listcourse" class="">Tất cả khóa học</a></li>
									<li><a href="admin/addcourse" class="">Thêm khóa học</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Người dùng</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="admin/listuser" class="">Tất cả người dùng</a></li>
									<li><a href="admin/adduser" class="">Thêm người dùng</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#sub_Pages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Bài học</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="sub_Pages" class="collapse ">
								<ul class="nav">
									<li><a href="admin/post" class="">Tất cả bài học</a></li>
									<!-- <li><a href="admin/addlesson" class="">Add Lesson</a></li> -->
								</ul>
							</div>
						</li>
						<!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
						<li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
				<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->

