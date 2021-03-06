<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>SI P3AI</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{asset('assets/js/ace-extra.min.js')}}"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					
						<h3>Sistem Informasi P3AI PNP</h3>
							
						
					
				</div>
				</div>
				


				<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

		<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><ul class="dropdown-menu dropdown-light-blue dropdown-caret"></ul></li>
					</ul>

					
				</nav>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
                    <li><a href="{{ url('/') }}">
                    	<i class="menu-icon fa  fa-home">
                    	</i>Home</a>
                    </li>

                     @if (Auth::check())
                     @if (Auth::user()->roles()->first()->name == "Admin")
                   
                   
                <li class=" open hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">
								Admin
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>


					<ul class="submenu">
							 <li class="hover">
							 <a href="{{ route('users.index') }}">
							 <i class="menu-icon fa fa-caret-right">	
							 </i>User</a>
							</li>
						

					
							<li class="hover">
								<a href="{{ route('roles.index') }}">
								<i class="menu-icon fa fa-caret-right"></i>Roles</a>
							</li>
							 </li>
					
						 	<li class="hover">
							 	<a href="{{ route('tahun.index')}}">
							 	<i class="menu-icon fa fa-caret-right">
							 	</i> Tahun</a>
							 </li>

					</ul>
				</li>



                <li class="open hover">
                	<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">
								Dosen
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

					<ul class="submenu">
							 <li class="hover">
							 <a href="{{ route('dosen.index') }}">
							 <i class="menu-icon fa fa-caret-right">	
							 </i>Data Dosen</a>
							</li>

							 <li class="hover">
							 <a href="{{ route('kelengkapan.index')}}">
							 <i class="menu-icon fa fa-caret-right">	
							 </i>Kelengkapan Dosen</a>
							</li>
					</ul>
                </li>
        
                    <li><a href="{{ route('asessor.index')}}"><i class="menu-icon fa fa-users"></i>Data Asessor</a></li>
                   <!-- <li><a href="{{ route('rps.index')}}"><i class="menu-icon fa  fa-book"></i>RPS</a></li>		 -->
                    <li><a href="{{ route('kurikulum.index')}}"><i class="menu-icon fa fa-folder-open"></i>Kurikulum Terbaru</a></li>
                    <li><a href="{{ route('bkd.index')}}"><i class="menu-icon fa fa-desktop"></i>Cek BKD Dosen</a></li>
                    <li><a href="{{ route('serdos.index')}}"><i class="menu-icon fa fa-list"></i>Sertifikasi Dosen</a></li>
                    <li><a href="{{ route('prodi.index')}}"><i class="menu-icon fa fa-desktop"></i>Data Prodi</a></li>
                    <li><a href="{{ route('jurusan.index')}}"><i class="menu-icon fa fa-desktop"></i> Jurusan</a></li>
                   


                  

                <li class="open hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text">
							Laporan
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>


					<ul class="submenu">
							<li class="hover">
								<a href="{{route('rekappeserta.selectpeserta')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Peserta Serdos
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapbkd.selectbkd')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan BKD
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapdataasessor.selectdataasessor')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Data Asessor
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapasessordosen.selectasessordosen')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Asessor
								</a>

								<b class="arrow"></b>
							</li>
					</ul>

				</li>
				@endif
				@if (Auth::user()->roles()->first()->name == "Kap3ai")

				<li class="open hover">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text">
							Laporan
						</span>
						<b class="arrow fa fa-angle-down"></b>
					</a>
					<b class="arrow"></b>


					<ul class="submenu">
							<li class="hover">
								<a href="{{route('rekappeserta.selectpeserta')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Peserta Serdos
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapbkd.selectbkd')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan BKD
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapdataasessor.selectdataasessor')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Data Asessor
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="{{route('rekapasessordosen.selectasessordosen')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Laporan Asessor
								</a>

								<b class="arrow"></b>
							</li>
					</ul>

				</li>
				@endif

				@if (Auth::user()->roles()->first()->name == "Dosen")

				 <li class="open hover">
                	<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text">
								Dosen
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>
						<b class="arrow"></b>

					<ul class="submenu">
							 <li class="hover">
							 <a href="{{ route('dosen.show',Auth::id())}}">
							 <i class="menu-icon fa fa-caret-right">	
							 </i>Data Dosen</a>
							</li>

							 <li class="hover">
							 <a href="{{ route('kelengkapan.index')}}">
							 <i class="menu-icon fa fa-caret-right">	
							 </i>Kelengkapan Dosen</a>
							</li>
					</ul>
                </li>
				@endif     
				@endif

				</ul>

			 @yield('content')
			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div>
									
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('assets/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>
