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
    <link rel="stylesheet" href="../js/plugins/icheck/skins/minimal/blue.css">

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
                        <span class="navbar-profile-label">admin@example.com &nbsp;</span>
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
<hr>

<div class="container">

    <div class="content">

        <div class="content-container">


            <!-- /.content-header -->



            <div class="row">

                <div class="col-md-12">

                    <div class="portlet">

                        <div class="portlet-header">

                            <h3>
                                <i class="fa fa-table"></i>
                                Modules
                            </h3>


                        </div> <!-- /.portlet-header -->

                        <div class="portlet-content">

                            <div class="table-responsive">

                                <table
                                    class="table table-striped table-bordered table-hover table-highlight table-checkable"
                                    data-provide="datatable"
                                    data-display-rows="10"
                                    data-info="true"
                                    data-search="true"
                                    data-length-change="true"
                                    data-paginate="true"
                                    >
                                    <thead>
                                    <tr>

                                        <th data-filterable="true" data-sortable="true" data-direction="desc"></th>
                                        <th data-direction="asc" data-filterable="true" data-sortable="true"></th>
                                        <th data-filterable="true" data-sortable="true"></th>
                                        <th data-filterable="false" class="hidden-xs hidden-sm"></th>
                                        <th data-filterable="false" class="hidden-xs hidden-sm"> </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:20px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i> </td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:20px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr class="">

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr class="">

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>

                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"> <i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i></td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"><i class="fa fa-star" style="font-size:19px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i> </td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr >

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"><i class="fa fa-star" style="font-size:20px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i> </td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr>

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"><i class="fa fa-star" style="font-size:20px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i> </td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>
                                    <tr>

                                        <td><a href="../associates.php/">CSAP FY18Q1 AMS 1: Security</a> </td>
                                        <td>Marcos Cavinato
                                        </td>
                                        <td>11/11/2018- 11/11/2018</td>
                                        <td class="hidden-xs hidden-sm"><i class="fa fa-star" style="font-size:20px" ></i> <i class="fas fa-clipboard-check" style="font-size:20px"  > <i class="fa fa-cog" style="font-size:20px"  ></i> </td>
                                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-primary btn-xs">Optional Feedback</button></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div> <!-- /.table-responsive -->


                        </div> <!-- /.portlet-content -->

                    </div> <!-- /.portlet -->



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


        </div>

        <script src="../js/libs/jquery-1.10.1.min.js"></script>
        <script src="../js/libs/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="../js/libs/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
        <script src="./js/libs/excanvas.compiled.js"></script>
        <![endif]-->

        <!-- Plugin JS -->
        <script src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../js/plugins/datatables/DT_bootstrap.js"></script>
        <script src="../js/plugins/tableCheckable/jquery.tableCheckable.js"></script>
        <script src="../js/plugins/icheck/jquery.icheck.min.js"></script>

        <!-- App JS -->
        <script src="../js/target-admin.js"></script>

        <script type="text/javascript" src="../zjs/moment.js"></script>
        <script type="text/javascript" src="./js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="./js/timer.js"></script>


</body>
</html>
