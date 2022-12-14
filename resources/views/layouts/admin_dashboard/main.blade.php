  @include('layouts.admin_dashboard.inc.css')

  <body>
      <!-- Preloader Start Here -->
      <div></div>
      <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         @include('layouts.admin_dashboard.head')

          <!-- Header Menu Area End Here -->
          <!-- Page Area Start Here -->
          <div class="dashboard-page-one">
              <!-- Sidebar Area Start Here -->
              @include('layouts.admin_dashboard.sidebar')

              <!-- Sidebar Area End Here -->
              <div class="dashboard-content-one">
                  <!-- Breadcubs Area Start Here -->
                  <div class="breadcrumbs-area">
                    <h3> @foreach( Auth::user()->roles as $roles) 
                        {{ $roles->name }}
                    @endforeach Dashboard</h3>
                    <ul>
                            @if (Auth::user()->roles = 'Admin')
                            <li>
                                <a href="{{ route('admin') }}">Home</a>
                            </li>   
                            @elseif (Auth::user()->roles = 'Superadmin')
                            <li>
                            <a href="{{ route('superadmin') }}">Home</a>
                            </li>
                            @endif
                            <li>{{ $roles->name }}</li>
                        </ul>
                  </div>
                  @yield('content')

                  <!-- Social Media End Here -->
                  <!-- Footer Area Start Here -->
                  @include('layouts.dashboard.footer')

                  <!-- Footer Area End Here -->
              </div>
          </div>
          <!-- Page Area End Here -->
      </div>

      @include('layouts.admin_dashboard.inc.js')

  </body>
  
  </html>