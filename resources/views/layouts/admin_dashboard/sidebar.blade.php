<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
	<div class="mobile-sidebar-header d-md-none">
		 <div class="header-logo">
			{{-- <a href="index.html"><img src="orange.jpeg" alt="logo"></a> --}}
		</div>
	</div>
	 <div class="sidebar-menu-content">
		 <ul class="nav nav-sidebar-menu sidebar-toggle-view">
			 
			 <li class="nav-item">
				<a href="{{ route('admin') }}" class="nav-link"><i
						class="flaticon-planet-earth"></i><span>Dashboard</span></a><hr>
			</li>

			<li class="nav-item sidebar-nav-item">
				<a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Registration</span></a>
				<ul class="nav sub-group-menu">
					<li class="nav-item">
						<a href="{{ route('member.reg') }}" class="nav-link"><i class="fas fa-angle-right"></i>Registration Fee Approval</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('member.dues') }}" class="nav-link"><i class="fas fa-angle-right"></i>First Dues Approval</a>
					</li>
				</ul>
			</li>
			<li class="nav-item sidebar-nav-item">
				<a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Members</span></a>
				<ul class="nav sub-group-menu">
					<li class="nav-item">
						<a href="{{ route('members.list') }}" class="nav-link"><i class="fas fa-angle-right"></i>All Members</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('members.business') }}" class="nav-link"><i class="fas fa-angle-right"></i>Business Members</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('members.starter') }}" class="nav-link"><i class="fas fa-angle-right"></i>Starter Members</a>
					</li>

				</ul>
			</li>


{{-- for user permission  --}}

			<li class="nav-item sidebar-nav-item">
				@can('user-list','user-create')
				<a href="#" class="nav-link"><i class="flaticon-multiple-users-silhouette"></i><span>Users</span></a>
				@endcan

				<ul class="nav sub-group-menu">
					@can('user-list')
					<li class="nav-item">
						<a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-angle-right"></i> List User</a>
					</li>
					@endcan
					
					@can('user-create')
					<li class="nav-item">
						<a class="nav-link" href="{{ route('users.create') }}">
							<i class="fas fa-angle-right"></i>Create Users</a>
					</li>
					@endcan
				</ul>
			</li>
			{{-- end user permission --}}

			{{-- Roles --}}

				<li class="nav-item sidebar-nav-item">
					@can('role-list','role-create')
					<a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Roles</span></a>
					@endcan

					<ul class="nav sub-group-menu">
						@can('role-list')
						<li class="nav-item">
							<a href="{{ route('roles.index') }}" class="nav-link"><i class="fas fa-angle-right"></i> List Roles</a>
						</li>
						@endcan
						
						@can('role-create')
						<li class="nav-item">
							<a class="nav-link" href="{{ route('roles.create') }}">
								<i class="fas fa-angle-right"></i>Create Roles</a>
						</li>
						@endcan
					</ul>
				</li>

			{{-- end Roles --}}

			{{-- Permissions --}}


			<li class="nav-item sidebar-nav-item">
			@can('permission-list','permission-create')
			<a href="#" class="nav-link"><i class="fa fa-lock"></i><span>Permissions</span></a>
			@endcan

			<ul class="nav sub-group-menu">
				@can('permission-list')
				<li class="nav-item">
					<a href="{{ route('permissions.index') }}" class="nav-link"><i class="fas fa-angle-right"></i> List Permissions</a>
				</li>
				@endcan
				
				@can('permission-create')
				<li class="nav-item">
					<a class="nav-link" href="{{ route('permissions.create') }}">
						<i class="fas fa-angle-right"></i>Create Permissions</a>
				</li>
				@endcan
			</ul>
			</li>

			{{-- end Permissions --}}
		 </ul>
	 </div>
 </div>