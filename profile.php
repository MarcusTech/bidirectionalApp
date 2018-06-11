<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Cisco | Dashboard</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="../js/plugins/morris/morris.css">
  <link rel="stylesheet" href="../js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="../js/plugins/select2/select2.css">
  <link rel="stylesheet" href="../js/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="../css/target-admin.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <a class="navbar-brand navbar-brand-image" href="./index.php">
        <img src="../img/cisco-logo.png">
      </a>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">



      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="../dashboard.php/">Dashboard</a>
        </li>

        <li>
          <a href="../modules.php/">Modules</a>
        </li>

        <li>
          <a href="../manager.php/">Modules(Manager)</a>
        </li>
        <li>
          <a href="../admin.php/">Modules(admin)</a>
        </li>
        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="../img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="../profile.php/">
                <i class="fa fa-user"></i>
                &nbsp;&nbsp;My Profile
              </a>
            </li>



            <li>
              <a href="../settings.php/">
                <i class="fa fa-cogs"></i>
                &nbsp;&nbsp;Settings
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="#">
                <i class="fa fa-sign-out"></i>
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>







    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->
 <!-- /.mainbar -->
<hr


<div class="container">

  <div class="content">

    <div class="content-container">



      <div class="content-header">
        <h2 class="content-header-title"> Profile</h2>

      </div> <!-- /.content-header -->



      <div class="row">

        <div class="col-md-9">

          <div class="row">

            <div class="col-md-4 col-sm-5">

              <div class="thumbnail">
                <img src="../img/avatars/download.png" alt="Profile Picture" />
              </div> <!-- /.thumbnail -->

              <br />

              <div class="list-group">

                <a href="javascript:;" class="list-group-item">
                  <i class="fa fa-asterisk"></i> &nbsp;&nbsp;Activity Feed

                  <i class="fa fa-chevron-right list-group-chevron"></i>
                </a>



                <a href="javascript:;" class="list-group-item">
                  <i class="fa fa-envelope"></i> &nbsp;&nbsp;Messages

                  <i class="fa fa-chevron-right list-group-chevron"></i>
                </a>




              </div> <!-- /.list-group -->

            </div> <!-- /.col -->


            <div class="col-md-8 col-sm-7">

              <h2>John Doe </h2>

              <h4>Visual, UI, UX Designer</h4>

              <hr />

              <p>
                <a href="javascript:;" class="btn btn-primary">Follow Rod</a>
                &nbsp;&nbsp;
                <a href="javascript:;" class="btn btn-secondary">Send Message</a>
              </p>

              <hr />


              <ul class="icons-list">
                <li><i class="icon-li fa fa-envelope"></i> john@example.com</li>
                <li><i class="icon-li fa fa-globe"></i> www.example.com</li>
                <li><i class="icon-li fa fa-map-marker"></i> Las Vegas, NV</li>
              </ul>

              <br />

              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p>

              <hr />

              <br />








            </div> <!-- /.col -->

          </div> <!-- /.row -->

        </div> <!-- /.col -->


        <div class="col-md-3 col-sm-6 col-sidebar-right">

          <h4>Stats</h4>


          <div class="list-group">

            <a href="javascript:;" class="list-group-item"><h3 class="pull-right"><i class="fa fa-eye"></i></h3>
                  <h4 class="list-group-item-heading">38,847</h4>
                  <p class="list-group-item-text">Profile Views</p>

                </a>


          </div> <!-- /.list-group -->

          <br />



          <div class="well">
            <h4>Recent Activity</h4>


            <ul class="icons-list text-md">

              <li>
                <i class="icon-li fa fa-location-arrow"></i>

                <strong>Rod</strong> uploaded 6 files.
                <br />
                <small>about 4 hours ago</small>
              </li>

              <li>
                <i class="icon-li fa fa-location-arrow"></i>

                <strong>Rod</strong> followed the research interest: <a href="javascript:;">Open Access Books in Linguistics</a>.
                <br />
                <small>about 23 hours ago</small>
              </li>

              <li>
                <i class="icon-li fa fa-location-arrow"></i>

                <strong>Rod</strong> added 51 papers.
                <br />
                <small>2 days ago</small>
              </li>
            </ul>

          </div>
        </div> <!-- /.col -->


      </div> <!-- /.row -->








    </div> <!-- /.content-container -->

  </div> <!-- /.content -->

</div> <!-- /.container -->

<footer class="footer">

  <div class="container">

    <div class="row">

      <div class="col-sm-3">



        <p>&copy; 2018 Cisco.</p>

      </div> <!-- /.col -->

     <!-- /.col -->

       <!-- /.col -->


    </div> <!-- /.row -->

  </div> <!-- /.container -->

</footer>
  <script>
    // When the user clicks on div, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
  </script>
<script src="../js/libs/jquery-1.10.1.min.js"></script>
<script src="../js/libs/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/libs/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="../js/libs/excanvas.compiled.js"></script>
<![endif]-->

<!-- Plugin JS -->
<script src="../js/plugins/icheck/jquery.icheck.js"></script>
<script src="../js/plugins/select2/select2.js"></script>
<script src="../js/libs/raphael-2.1.2.min.js"></script>
<script src="../js/plugins/morris/morris.min.js"></script>
<script src="../js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script src="../js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- App JS -->
<script src="../js/target-admin.js"></script>

<!-- Plugin JS -->
<script src="../js/demos/dashboard.js"></script>
<script src="../js/demos/calendar.js"></script>
<script src="../js/demos/charts/morris/area.js"></script>
<script src="../js/demos/charts/morris/donut.js"></script>





</body>
</html>
