{{-- MODEL FOR CREATE PROJECT AND SCHEMES --}}

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close  bg-white"  data-dismiss="modal">&times;</button>
        <h4 class="text-light ">Create New Project </h4>
      </div>

      

      <div class="modal-body">
        <form action="{{url('/createscheme')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 control-label text-light">Project Name</label>

            <div class="col-sm-10">
              <input type="text" class="form-control" name="inputscheme" placeholder="">
            </div>
          </div>
          {{-- <div class="ml-auto col-sm-10">
            <button type="submit" class="btn btn-success">Create</button>
          </div> --}}
        

          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default text-light " data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success  ">Create</button>
           </div>
      </form>
      
    </div>
  </div>
</div>

{{-- END OF MODEL --}}


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="active">
          <a href="/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Projects Details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="{{'viewrunningproject'==request()->path()? 'active':''}}"><a href="/viewrunningproject"  data-toggle="#" data-target="#"  >View Your Running Projects</a></li>
            <li class="{{'createscheme'==request()->path()? 'active':''}}"><a href="/createscheme"  data-toggle="modal" data-target="#myModal" >Create a New Project</a></li>
            <li class="{{'viewrunningproject'==request()->path()? 'active':''}}"><a href="/addprojectdetails" >Add Project Details</a></li>
            <li ><a href="/updateprojectdetails" >Update Project Details</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'profile'==request()->path()? 'active':''}}"><a href="/profile" class="active">View Your Profile</a></li>
            <!-- <li class="{{'newadmin'==request()->path()? 'active':''}}"><a href="/newadmin">Make new Admin </a></li> -->
            {{-- <li><a href="pages/widgets/calendar.html">Calendar</a></li> --}}
          </ul>
        </li>

        
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html">General Elements</a></li>
            <li><a href="pages/forms/advanced.html">Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html">Editors</a></li>
            <li><a href="pages/forms/form-validation.html">Form Validation</a></li>
            <li><a href="pages/forms/form-wizard.html">Form Wizard</a></li>
            <li><a href="pages/forms/code-editor.html">Code Editor</a></li>
            <li><a href="pages/forms/editor-markdown.html">Markdown</a></li>
            <li><a href="pages/forms/xeditable.html">Xeditable Editor</a></li>
          </ul>
        </li>         --}}
        
      </ul>
    </section>
    <!-- /.sidebar -->
    <div class="sidebar-footer">
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
		<!-- item-->
		<a href="/logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>

  