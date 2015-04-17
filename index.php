<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Earthquake Assessment tool :: EERC, IIIT-H</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo"><b>EERC</b> IIIT-H</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>                            
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome phone?</p>
                        </a>
                      </li><!-- end message -->                      
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->                      
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->                      
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Mrinal Dhar</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Mrinal Dhar
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="login.html" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Mrinal Dhar</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><span>Overview</span></a></li>
            <li class="treeview">
              <a href="#"><span>Stone Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('1_1')">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Mud Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>RC Frame Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Confined Masonry Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>ABC Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>XYZ Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>PQR Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Overview
            <small>What this project is all about</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Overview</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="nav-tabs-custom">
                               
                                    
                                </div><!-- /.tab-content -->
                      
                    <!-- END CUSTOM TABS -->
                            </div><!-- /.box -->

            </div>
          </div>

          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Copyright &copy; 2015. All Rights Reserved.
        </div>
        <!-- Default to the left --> 
        <strong>Developed by ES Subgroup 6 for EERC, IIIT-Hyderabad</strong>
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
  <script>
  var page_loaded = "0";
  function load_form(which) {
    if (page_loaded == "0") {
      clearAllTabs();
    }
    switch(which) {
      case '1_1':
        if (page_loaded!="1_1") {
        clearAllTabs();
        base = "./form1_stone/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        addtab(2);
        doajax(base+"page2.php", "#tab_2");
        page_loaded = "1_1";
      } 
      case '1_2':
        if (page_loaded!="1_2") {
        clearAllTabs();
        base = "./form1_stone/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        addtab(2);
        doajax(base+"page2.php", "#tab_2");
        page_loaded = "1_2";
      } 
      case '1_3':
        if (page_loaded!="1_3") {
        clearAllTabs();
        base = "./form1_stone/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        addtab(2);
        doajax(base+"page2.php", "#tab_2");
        page_loaded = "1_3";
      } 
      case '1_4':
        if (page_loaded!="1_4") {
        clearAllTabs();
        base = "./form1_stone/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        addtab(2);
        doajax(base+"page2.php", "#tab_2");
        page_loaded = "1_4";
      } 
    }
    
  }
  function doajax(page_url, element) {
    $.ajax({
      url: page_url,
  dataType: "html",
  crossDomain: true,
  success:function(data){
    $(element).html(data);
  }
});
  }
  function addtab(number) {
    $('#tabs_ctrl').append($('<li><a id="open_'+number+'" href="#tab_'+number+'" data-toggle="tab">Page '+number+'</a></li>'));
    $('#tabs_cnt').append($('<div class="tab-pane" id="tab_'+number+'"></div>'));

  }
  function openTab(number) {
    // $('#open_2').click();
    $('a[href="#tab_'+number+'"]').trigger("click");
    // window.location = "#tab_2"
  }
  function clearAllTabs() {
$('.nav-tabs-custom').html('<ul id="tabs_ctrl" class="nav nav-tabs"><li class="active"><a href="#tab_1" data-toggle="tab">Page 1</a></li></ul><div id="tabs_cnt" class="tab-content"><div class="tab-pane active" id="tab_1"></div>');
  }
  </script>
</html>