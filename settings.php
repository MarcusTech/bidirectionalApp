<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Cisco | Modules</title>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../js/plugins/fileupload/bootstrap-fileupload.css">

    <!-- App CSS -->
    <link rel="stylesheet" href="../css/target-admin.css">
    <link rel="stylesheet" href="../css/custom.css">


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
                <li class="dropdown navbar-profile">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                        <img src="../img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
                        <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
                        <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu" role="menu">

                        <li>
                            <a href="./page-profile.html">
                                <i class="fa fa-user"></i>
                                &nbsp;&nbsp;My Profile
                            </a>
                        </li>



                        <li>
                            <a href="../settings.php">
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
<hr>

<div class="container">

    <div class="content">

        <div class="content-container">



            <div class="row">

                <div class="col-md-3 col-sm-4">

                    <ul id="myTab" class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="#profile-tab" data-toggle="tab">
                                <i class="fa fa-user"></i>
                                &nbsp;&nbsp;Profile Settings
                            </a>
                        </li>
                        <li>
                            <a href="#password-tab" data-toggle="tab">
                                <i class="fa fa-lock"></i>
                                &nbsp;&nbsp;Change Password
                            </a>
                        </li>


                    </ul>

                    <br>

                </div> <!-- /.col -->

                <div class="col-md-9 col-sm-8">

                    <div class="tab-content stacked-content">

                        <div class="tab-pane fade in active" id="profile-tab">

                            <h3 class="">Edit Profile Settings</h3>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                            <hr />

                            <br />

                            <form action="./page-settings.html" class="form-horizontal">

                                <div class="form-group">

                                    <label class="col-md-3">Avatar</label>

                                    <div class="col-md-7">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 180px; height: 180px;"><img src="./img/avatars/avatar-large-1.jpg" alt="Profile Avatar" /></div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 200px; line-height: 20px;"></div>
                                            <div>
                                                <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" /></span>
                                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                            </div>
                                        </div>
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">Username</label>

                                    <div class="col-md-7">
                                        <input type="text" name="user-name" value="jumpstartui" class="form-control" e />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">First Name</label>

                                    <div class="col-md-7">
                                        <input type="text" name="first-name" value="Rod" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">Last Name</label>

                                    <div class="col-md-7">
                                        <input type="text" name="last-name" value="Marcus" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">Email Address</label>

                                    <div class="col-md-7">
                                        <input type="text" name="email-address" value="den@example.com" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">Website</label>

                                    <div class="col-md-7">
                                        <input type="text" name="website" value="#" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">About You</label>

                                    <div class="col-md-7">
                                        <textarea id="about-textarea" name="about-you" rows="6" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</textarea>
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <br />

                                <div class="form-group">

                                    <div class="col-md-7 col-md-push-3">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        &nbsp;
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                            </form>


                        </div> <!-- /.tab-pane -->

                        <div class="tab-pane fade" id="password-tab">

                            <h3 class="">Change Your Password</h3>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>

                            <br />

                            <form action="./page-settings.html" class="form-horizontal">

                                <div class="form-group">

                                    <label class="col-md-3">Old Password</label>

                                    <div class="col-md-7">
                                        <input type="password" name="old-password" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <hr />

                                <div class="form-group">

                                    <label class="col-md-3">New Password</label>

                                    <div class="col-md-7">
                                        <input type="password" name="new-password-1" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <div class="form-group">

                                    <label class="col-md-3">New Password Confirm</label>

                                    <div class="col-md-7">
                                        <input type="password" name="new-password-2" class="form-control" />
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                                <br />

                                <div class="form-group">

                                    <div class="col-md-7 col-md-push-3">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                        &nbsp;
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div> <!-- /.col -->

                                </div> <!-- /.form-group -->

                            </form>
                        </div> <!-- /.tab-pane -->





                    </div> <!-- /.tab-content -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->




        </div> <!-- /.content-container -->

    </div> <!-- /.content -->

</div> <!-- /.container -->




<div class="container">

    <div class="row">

        <div class="col-sm-3">



            <br>



            <hr>

            <p>&copy; 2018 Cisco.</p>

        </div> <!-- /.col -->

    </div> <!-- /.row -->

</div> <!-- /.container -->

</footer>

<script src="../js/libs/jquery-1.10.1.min.js"></script>
<script src="../js/libs/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../js/libs/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="../js/libs/excanvas.compiled.js"></script>
<![endif]-->

<!-- Plugin JS -->
<script src="../js/plugins/fileupload/bootstrap-fileupload.js"></script>

<!-- App JS -->
<script src="../js/target-admin.js"></script>




</body>
</html>













































