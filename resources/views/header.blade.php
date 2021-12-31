<div class="nav-top-area">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-sm-2 col-lg-2">
    <div class="left">
    <a href="/index">
    <img src="../assets/images/logo.png" alt="Logo">
    </a>
    </div>
    </div>
    <div class="col-sm-12 col-lg-10">
    <div class="right">
    <ul>
    <li>
    <div class="inner">
    <i class='bx bx-mail-send'></i>
    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#7e161b1212113e0d1017180a07501d1113"><span class="__cf_email__" data-cfemail="d1b9b4bdbdbe91a2bfb8b7a5a8ffb2bebc">[email&#160;protected]</span></a>
    <span>Drop us a line</span>
    </div>
    </li>
    <li> 
    <div class="inner">
    <i class='bx bx-phone-call'></i>
    <a href="tel:+0123654987">+0123-654-987</a>
    <span>Make a call</span>
    </div>
    </li>
    <!-- <li>
    <a class="common-btn" href="#">
    <i class='bx bxs-quote-left'></i>
    Get A Quote
    </a>
    </li> -->
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
        <a href="index.html" class="logo">
        <img src="../assets/images/logo-two.png" alt="Logo">
        </a>
        </div>
        
        <div class="main-nav">
        <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
        <li class="nav-item">
        <a href="/index" class="nav-link dropdown-toggle {{'index'==request()->path()? 'active':''}} ">Home <i class=''></i></a>
        </li>
        <li class="nav-item">
        <a href="/about" class="nav-link  {{'about'==request()->path()?'active':''}} ">About Us</a>
        </li>
         <li class="nav-item">
        <a href="#" class="nav-link dropdown-toggle ">Properties <i class='bx bx-chevron-down' ></i></a>
        <ul class="dropdown-menu">

        @foreach ($schemes as $scheme)
        <li class="nav-item">
        
        <a href="{{url('/schemedetails/'.$scheme->scheme_id)}}" class="nav-link  {{'schemedetails/'.$scheme->scheme_id==request()->path()? 'active':''}}" >{{$scheme->schemes_name}}</a>
        <input type="hidden" name="schemeId" id="schemeId" value="{{$scheme->scheme_id}}"/>
        </li>
        @endforeach
        
        </ul>
        </li>

        <li class="nav-item">
        <a href="/reviews" class="nav-link dropdown-toggle {{'reviews'==request()->path()? 'active':''}} ">Reviews <i class=''></i></a>
        </li>
        
        <li class="nav-item">
        <a href="/contact" class="nav-link {{'contact'==request()->path()? 'active':''}}">Contact</a>
        </li>
        </ul>
        
        </div>
        </nav>
        </div>
        </div>
        </div>
        
    