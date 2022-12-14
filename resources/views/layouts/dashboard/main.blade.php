  @include('layouts.dashboard.inc.css')

  <body>
      <!-- Preloader Start Here -->
      <div></div>
      <!-- Preloader End Here -->
      <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
         @include('layouts.dashboard.head')

          <!-- Header Menu Area End Here -->
          <!-- Page Area Start Here -->
          <div class="dashboard-page-one">
              <!-- Sidebar Area Start Here -->
              @include('layouts.dashboard.sidebar')

              <!-- Sidebar Area End Here -->
              <div class="dashboard-content-one">
                  <!-- Breadcubs Area Start Here -->
                  <div class="breadcrumbs-area">
                    <h3> @foreach( Auth::user()->roles as $roles) 
                        {{ $roles->name }}
                    @endforeach Member Dashboard</h3>
                    <ul>
                            @if (Auth::user()->roles = 'Starter')
                            <li>
                            <a href="{{ route('starter') }}">Home</a>
                            </li>   
                            @elseif (Auth::user()->roles = 'Business')
                            <li>
                            <a href="{{ route('business') }}">Home</a>
                            </li>
                            @endif
                        <li>Member</li>
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

      @include('layouts.dashboard.inc.js')

  </body>
  
  </html>