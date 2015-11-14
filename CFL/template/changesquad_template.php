    <?php

    // Inialize session
    session_start();
    //session_destroy();
    // Check, if username session is NOT set then this page will jump to login page
    if (!isset($_SESSION['user'])) {
      header('Location:/CFL/login.php');
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Round About - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="/CFL/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/CFL/css/round-about.css" rel="stylesheet">
        <link href="/CFL/css/userprofile.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="/CFL/script/changesquad.js"></script>
        <script src="/CFL/script/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/CFL/script/bootstrap.min.js"></script>
        

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

        <body>

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container1">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/CFL/userprofile.php">Home</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Teams<span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="/CFL/team/bangladesh.php">Bangladesh</a></li>
                                    <li><a href="/CFL/team/india.php">India</a></li>
                                    <li><a href="/CFL/team/australia.php">Australia</a></li>
                                    <li><a href="/CFL/team/newzealand.php">New Zealand</a></li>
                                    <li><a href="/CFL/team/england.php">England</a></li>
                                    <li><a href="/CFL/team/SA.php">South Africa</a></li>
                                    <li><a href="/CFL/team/srilanka.php">Sri Lanka</a></li>
                                    <li><a href="/CFL/team/wi.php">West Indies</a></li>
                                    <li><a href="/CFL/team/pakistan.php">Pakistan</a></li>
                                    <li><a href="/CFL/team/zim.php">zimbabwe</a></li>                     
                                  </ul>
                                </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                            <li>
                                <a href="#">Schedule</a>
                            </li>
                            <li>
                                <a href="#">Result</a>
                            </li>
                            <li>
                                <a href="#">photos</a>
                            </li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            <!-- Page Content -->
            <div class="left1">
              
            </div>
            <div class="container">
            </div>

    <div id="footer">
      <p>Copyright &copy; Masudul Hasan Masud 2015</p>
    </div>
    <!-- /.container -->

    

</body>

</html>
