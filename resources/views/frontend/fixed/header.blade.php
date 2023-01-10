<header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (12) 345 67890</li>
                            <li><i class="fa fa-envelope"></i> info.colorlib@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Booking Now</a>
                            @guest
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
Register
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
  Login
</button>      
@endguest       
@auth
<p>{{auth()->user()->name}}</p>
<a href="{{route('Front_logout')}}">logout</a>
@endauth              
<div class="language-option">
     <img src="{{url('frontend/img/flag.jpg')}}" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{{url('frontend/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="{{route('home.page')}}">Home</a></li>
                                    <li><a href="{{route('room.page')}}">Rooms</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('page')}}">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('room.details')}}">Room Details</a></li>
                                            <li><a href="{{route('blog')}}">Blog Details</a></li>
                                            <li><a href="#">Family Room</a></li>
                                            <li><a href="#">Premium Room</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('news')}}">News</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Button trigger modal -->

<!-- register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('reg.submit')}}" method="post">
            @csrf
      <div class="modal-body">

            <div>         
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
</div>
<div>        <div>         
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
</div>
  
                    <label for="">Password</label>
                    <input type="password" name="password"class="form-control"  placeholder="Enter your password">
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('Front_login')}}" method="post">
            @csrf
      <div class="modal-body">

<div>        <div>         
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
</div>
  
                    <label for="">Password</label>
                    <input type="password" name="password"class="form-control"  placeholder="Enter your password">
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
