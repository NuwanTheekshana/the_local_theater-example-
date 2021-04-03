 <!-- Navigation -->
 
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >

    <a href="#" id="branding">
        <img src="{{ asset('img/images/i.png') }}" class="logo" style="width: 40%;" >
      
    </a> <!-- #branding -->

                <div class="main-navigation" style="margin-left: 40%;">


                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="{{url('/home')}}">Home</a></li>

                        @if (Auth::user()->permission == "admin")
                            <li class="menu-item"><a href="{{route('admin_home')}}">Admin Pannel</a></li>
                        @endif

                   </ul> <!-- .menu -->
                   

                    <!-- Right Side Of Navbar -->
                 <ul class="menu">
                    <!-- Authentication Links -->
                
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                </ul>



                </div>

                

</nav>