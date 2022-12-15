<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
	<div class="mobile-sidebar-header d-md-none">
		 <div class="header-logo">
			 {{-- <a href="index.html"><img src="orange.jpeg" alt="logo"></a> --}}
		 </div>
	</div>
	 <div class="sidebar-menu-content">
		 <ul class="nav nav-sidebar-menu sidebar-toggle-view">
			 <li class="nav-item  ">
				@if ($member->membership_type == 'Starter')
				<a href="{{ route('starter') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
				@else
				<a href="{{ route('business') }}" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
				@endif
			 </li>

			 <li class="nav-item  ">
				<a href="{{ route('profile') }}" class="nav-link"><i class="flaticon-user"></i><span>Profile</span></a>	
			</li>
			 <li class="nav-item  ">
				{{-- <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Events & Projects</span></a>	 --}}
			</li>
			<li  class="nav-item  ">
				{{-- <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Renew / Dues Payment</span></a> --}}
			</li>
			<li  class="nav-item  " >
				{{-- <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Help Desk</span></a> --}}
			</li>
			<li  class="nav-item  " >
				{{-- <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Yess Fund</span></a> --}}
			</li>

		 </ul>
	 </div>
 </div>