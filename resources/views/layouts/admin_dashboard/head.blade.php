{{-- @include('layouts.dashboard.inc.css') --}}

{{-- <body> --}}
    <div id="preloader"></div>
    <div id="wrapper" class="wrapper bg-ash">
        <div class="navbar navbar-expand-md header-menu-one bg-light" >
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center ">
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group" >
                            <span class="input-group-addon">
                                <button type="submit">
                                   {{-- <a href="/"><i class="fa fa-home" style="font-size: 35px"></i></a>  --}}
                                </button>
                            </span>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title" style="text-transform: capitalize">     
                                <h5 class="item-title">{{ Auth::user()->name }}</h5>
                                    @foreach( Auth::user()->roles as $roles) 
                                        <span style="color: green; font-size: 16px"> {{ $roles->name }}</span>
                                    @endforeach
                            </div>
                            <div class="admin-img">

                                <img src="{{URL::asset('img/figure/admin.jpg')}}">
                            </div>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right">
                            
                            <div class="item-header">
                                <h6 class="item-title">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="item-content">                                
                                <ul class="settings-list">
                                    <li id="myBtn"><a href="#"><i class="flaticon-user"></i>My Profile</a></li>                                

                                    {{-- <li><a href="#"><i class="flaticon-list"></i>Task</a></li> --}}
                                    {{-- <li><a href="#"><i class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a></li> --}}
                                    {{-- <li><a href="{{ route('change.password.index') }}"><i class="flaticon-gear-loading"></i>Reset Password </a></li> --}}
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        <i class="flaticon-turn-off"></i> {{ __('Logout') }}
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                    <li class="navbar-item dropdown header-message">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <span>
                            <i class="far fa-envelope"></i>
                            </span>
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="item-header">
                                <h6 class="item-title">Messages</h6>
                            </div>
                        </div>
                    </li>   
                    
                </ul>

                {{-- <ul>
                    <li>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>

                                <div class="row1 "> 
                                    <hr>
                                        <h3 style="text-align: center">MY PROFILE</h3>
                                        <hr>
                                    <div class="columnu" >
                                        <img src="/images/{{ Auth::user()->member->image}}" alt="">

                                    </div>
                                    <div class="columni">
                                       
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="head">Full Name :</td>
                                                    <td class="td"> {{ Auth::user()->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="head">User Name :</td>
                                                    <td class="td"> {{ Auth::user()->username}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="head">Email :</td>
                                                    <td class="td"> {{ Auth::user()->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="head">Member ID :</td>
                                                    <td class="td"> {{ Auth::user()->member_mid}}</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="head">User Role :</td>
                                                    @foreach( Auth::user()->roles as $roles) 
                                                    <td class="td">  {{ $roles->name }}</td>
                                                    @endforeach                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>                         
                            </div>
                        </div>
                    </li>
                </ul>  --}}
                
            </div> 
            


        </div>
        <!-- Header Menu Area End Here -->

{{-- <script src="{{ URL::asset('js/modal.js') }}"></script> --}}

  

