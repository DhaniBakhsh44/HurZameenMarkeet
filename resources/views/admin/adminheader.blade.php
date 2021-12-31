  <header class="main-header">
    <!-- Logo -->
    <a href="/dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><!-- <img src="images/apro.png" alt=""> --></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hur</b>ZameenMareet</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
    

      {{-- <div class="pull-right"> --}}
        
        
        
      {{-- </div> --}}
      <div class="navbar-custom-menu">
        
    <ul class="nav navbar-nav">
          
		  <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <div class="pull-right">
               {{-- @foreach ($admin as $admins)  --}}
                  
              
              <small style="color: red"> <b>{{ ucfirst (session('admin.name')) }} </b></small> <a href="/logout" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
            </div>
              {{-- @endforeach  --}}
            {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/images/admin/user2-160x160.jpg" class="user-image rounded-circle" alt="User Image">
            </a> --}}
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              {{-- @foreach ($admins as $admin) --}}
              {{-- <li class="user-header">
                <img src="assets/images/admin/user2-160x160.jpg" class="float-left rounded-circle" alt="User Image">
                <p>
                  {{session('admin')}}
                  {{-- <small class="mb-5">	{{$admin->email}}</small> --}}
                  {{-- <a href="/profile" class="btn btn-danger btn-sm">View Profile</a>
                </p> --}}
              {{-- </li> --}}
              {{-- @endforeach --}}
              <!-- Menu Body -->
              {{-- <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href=""><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>
                  </div>
                </div>
                <!-- /.row -->
              </li> --}}
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-block btn-primary"><i class="ion ion-locked"></i> Lock</a>
                </div>
                <div class="pull-right">
                  <a href="/logout" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                </div>
              </li>
            </ul>
          </li>

          
        </ul>
      </div>
    </nav>
  </header>
