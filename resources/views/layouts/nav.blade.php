 <!-- Navigation -->
 
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" >

    <a href="#" id="branding">
        <img src="{{ asset('img/images/i.png') }}" class="logo" style="width: 40%;" >
      
    </a> <!-- #branding -->

                <div class="main-navigation" style="margin-left: 50%;">


                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="menu-item"><a href ="{{route('login')}}">Login  </a></li> 
                   </ul> <!-- .menu -->

                </div>

</nav>