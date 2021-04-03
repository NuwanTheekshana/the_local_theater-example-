@extends('layouts.app1')


@section('content')

{{-- <div class="container bg-dark">
    <div class="row">
        
        <a href="index.html" id="branding">
            <img src="{{ asset('img/images/h.png') }}" alt="" class="logo" style="width: 25%;height:25%" >
            <div class="logo-copy">
                <i><h1 class="site-title">SL Bioscope</h1></i>
                <small class="site-description">Tagline goes here</small>
            </div>
        </a> <!-- #branding -->

        <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                <li class="menu-item"><a href="about.html">About</a></li>
                <li class="menu-item"><a href="review.html">Movie reviews</a></li>
                <li class="menu-item"><a href="joinus.html">Join us</a></li>
                <li class="menu-item"><a href="contact.html">Contact</a></li>
            </ul> <!-- .menu -->

            <form action="#" class="search-form">
                <input type="text" placeholder="Search...">
                <button><i class="fa fa-search"></i></button>
            </form>

    

        </div> <!-- .main-navigation -->
    </div> <!-- .row -->
    <div class="mobile-navigation"></div>
    
</div> --}}


 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-default fixed-top">
    <div class="container ">
        <a href="index.html" id="branding">
            <img src="{{ asset('img/images/i.png') }}" class="logo" style="width: 50%;height:50%" >
            <div class="logo-copy">
                <i><h1 class="site-title">SL Bioscope</h1></i>
                <small class="site-description">Tagline goes here</small>
            </div>
        </a> <!-- #branding -->

                    <div class="main-navigation">


                        <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                            <li class="menu-item current-menu-item"><a href="pages/about.HTML">Home</a></li>
                            <li class="menu-item"><a href = 'img/new.php';>Login  </a></li>  
                
                        </ul> <!-- .menu -->
   
                    </div> 

                    <form action="#" class="search-form">
                        <input type="text" placeholder="______________________">
                        <button class="btn btn-warning" style="background-color: rgb(201, 255, 4)"><i class="fa fa-search"></i>Search</button>
                    </form>
              
            
            </li>
    
          </ul>
        </div>
      </div>

</nav>

<div id="site-content">
   
            <div class="page" style="background-color: transparent">
                <div class="row" style="background-color: transparent">
                    <div class="col-md-12" style="background-color: rgb(97, 109, 103)">
                        <div class="slider" style="background-color: transparent">
                            <ul class="slides" style="background-color: transparent">
                                
                                <li><a href="#"><img src="{{ asset('img/dummy/wonder.jpg') }}" alt="Slide 1"></a></li>
                                <li><a href="#"><img src="{{ asset('img/dummy/falcon.jpg') }}" alt="Slide 2"></a></li>
                                <li><a href="#"><img src="{{ asset('img/dummy/godzilla.jpg') }}" alt="Slide 3"></a></li>



                            </ul>
                        </div>
                    </div>
                  
                </div> <!-- .row -->
            </div>

        <main class="main-content" style="background-color: rgb(97, 109, 103) ">    



        <div class="container" style="background-color: #f5ebeb ">  
            
            
             
    <div class="card sm-1 " style="background-color: #fcf7f7 ">
        <div class="card-body">
            


                <div class="card mt-1 bg-dark">
            <div class="card sm-1 " style="background-color: #bdf7cc ">
              <div class="card-body">
                <p><h1>Action</H1></p>

                    
              
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            
                            
                            <a href="#"><img src="{{ asset('img/dummy/thumb-3.jpg') }}" alt="Movie 3"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>

                            <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                <textarea name="comments" id="comments" style="width:96%;height:90px;padding:2%;font-size:1.2em;background-color:rgb(253, 253, 253);">
                                Hey... say something!
                                </textarea>
                                <input type="submit" value="Submit">
                                </form>

                                
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/thumb-4.jpg') }}" alt="Movie 4"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/thumb-5.jpg') }}" alt="Movie 5"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/thumb-6.jpg') }}" alt="Movie 6"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                </div> <!-- .row -->              
             </div>
            </div>
        </div>




                <div class="card mt-1 bg-dark">
                <div class="card sm-1 " style="background-color: #64e7c6 ">
                    <div class="card-body">
                    <p><h1>Horror</h1></p>

           
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ asset('img/dummy/ready or not.jpg') }}"alt="Movie 3"></a>
                        <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ asset('img/dummy/hospital.jpg') }}" alt="Movie 4"></a>
                        <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ asset('img/dummy/mimic.jpg') }}"  alt="Movie 5"></a>
                        <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="latest-movie">
                        <a href="#"><img src="{{ asset('img/dummy/annabellejpg.jpg') }}" alt="Movie 6"></a>
                        <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                    </div>
                </div>
            </div> <!-- .row -->
            </div>
                </div>    
            </div>  



            <div class="card mt-1 bg-dark">
                <div class="card sm-1 " style="background-color: #ddececc9 ">
                  <div class="card-body">
                <p><h1></h1></p>
                <p style="color:red"> Drama </p>

            
                </div> <!-- .row -->
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/bagi.jpg') }}" alt="Movie 3"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/bloodshot.jpg') }}" alt="Movie 4"></a>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/download.jpg') }}" alt="Movie 5"></a>
                            <p><h3>Title :xxxx <style= fonta face ></style></h3></p>
                            <p><h3>Title :xxxx</h3></p>
                            <p><h3>Title :xxxx</h3></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="latest-movie">
                            <a href="#"><img src="{{ asset('img/dummy/2.0.jpg') }}" alt="Movie 6"></a>
                            <p><h3>Title :2.0</h3></p>
                            <p><h3>IMDB :4.3</h3></p>
                            
                            <H3><p class="text-dark">RELEASE YEAR :2019</p></H3>
                        </div>
                    </div>
                </div> <!-- .row -->          
              </div>
            </div>
        

           
         </div> <!-- .container -->
        </div>
      </main>











    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia tempore vitae mollitia nesciunt saepe cupiditate</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Recent Review</h3>
                        <ul class="no-bullet">
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Sit amet consecture</a></li>
                            <li><a href="#">Dolorem respequem</a></li>
                            <li><a href="#">Invenore veritae</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Help Center</h3>
                        <ul class="no-bullet">
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Sit amet consecture</a></li>
                            <li><a href="#">Dolorem respequem</a></li>
                            <li><a href="#">Invenore veritae</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Join Us</h3>
                        <ul class="no-bullet">
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Sit amet consecture</a></li>
                            <li><a href="#">Dolorem respequem</a></li>
                            <li><a href="#">Invenore veritae</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Social Media</h3>
                        <ul class="no-bullet">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email Address">
                        </form>
                    </div>
                </div>
            </div> <!-- .row -->

            <div class="colophon">Copyright 2014 Company name, Designed by Themezy. All rights reserved</div>
        </div> <!-- .container -->

    </footer>
</div>
<!-- Default snippet for navigation -->








    
@endsection