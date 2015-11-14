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

        <title>Home</title>

        <!-- Bootstrap Core CSS -->
        <!--link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <!--link href="css/round-about.css" rel="stylesheet">
        <link href="css/userprofile.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/CFL/css/bootstrap.min1.css" rel="stylesheet">
        <link href="/CFL/css/round-about1.css" rel="stylesheet">
        <link href="/CFL/css/userprofile1.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--script src="/CFL/script/changesquad.js"></script-->
        <script src="/CFL/script/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/CFL/script/bootstrap.min.js"></script>
        <script src="/CFL/script/userprofile.js"></script>
        

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
                        <a class="navbar-brand" href="#">Home</a>
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
                                <a href="/CFL/match.php">Match</a>
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
                            <li>
                                <div id="">
                                    <!--a href="/CFL/Editprofile.php" class=".btn-primary" role="button">Edit Profile</a-->
                                    <button type="button" class="btn btn-primary" id="logout">Logout</button>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            <!-- Page Content -->
            <div class="left1">
                  <img src="../CFL/images/avatar.png" alt="...">
                  <h2 class="USERName">Name: </h2>
                  <h1 class="team">Team Name: </h1>
                  <h2> <span id="point">point: </span></h2>
                  <!--h2> <span id="rank">Rank: </span></h2>
                  <!--h2> <span id="budget">Buget Left: </span></h2>
                  <h2> <span id="sub">Substitution Left: </span></h2-->
                  <div id="leftfooter">
                      <a href="/CFL/Editprofile.php" class="btn btn-primary btn-lg" role="button">Edit Profile</a>
                  </div>
                      

            </div>
            <div class="container">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="8"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="10"></li>
                    
                    

                </ol>

                <!-- Wrapper for slides -->
                <div class="row1">
                    <div>
                        
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd1">Mashrafe Mortaza</h1>
                          <h3><a id= "mlink1" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id="mImage1" class="images" src="../CFL/images/mashrafe_mortaza.jpg" alt="">
                          </div>
                        </div>

                  </div>
                  <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd2">Shakib Al Hasan</h1>
                          <h3><a id= "mlink2" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div id =class="item-images">
                            <img id= "mImage2"class="images" src="../CFL/images/shakib.jpg" alt="">
                          </div>
                    </div>
                </div>
                  <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd3">Tamim Iqbal</h1>
                          <h3><a id= "mlink3" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage3" class="images" src="../CFL/images/../CFL/images/tamim.jpg" alt="">
                          </div>
                    </div>
                </div>

                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd4">Mahmudullah Riyad</h1>
                          <h3><a id= "mlink4" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage4" class="images" src="mah.jpg" alt="">
                          </div>
                    </div>
                </div>

                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd5">Mushfiqur Rahim</h1>
                          <h3><a id= "mlink5" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage5" class="images" src="mushfiq.jpg" alt="">
                          </div>
                    </div>
                </div>
                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd6">Taskin Ahmed</h1>
                          <h3><a id= "mlink6" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage6" class="images" src="taskin.jpg" alt="">
                          </div>
                    </div>
                </div>
                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd7">Mominul Haque</h1>
                          <h3><a id= "mlink7" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage7" class="images" src="momi.jpg" alt="">
                          </div>
                    </div>
                </div>
                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd8">Arafat Sunny</h1>
                          <h3><a id= "mlink8" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage8" class="images" src="arafat.jpg" alt="">
                          </div>
                    </div>
                </div>

                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd9">Imrul Kayes</h1>
                          <h3><a id= "mlink9" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage9" class="images" src="imrul.jpg" alt="">
                          </div>
                    </div>
                </div>

                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd10">Jubair Hossain</h1>
                          <h3><a id= "mlink10" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage10" class="images" src="jubair.jpg" alt="">
                          </div>
                    </div>
                </div>
                <div class="item">
                      <img src="../CFL/images/black.png" alt="...">
                      <div class="carousel-caption">
                          <h1 id="hd11">Litton Das</h1>
                          <h3><a id= "mlink11" href="/teams/chennai-super-kings/squad/25/Dwayne-Bravo/">Full Profile »</a></h3>
                          <div class="item-images">
                            <img id= "mImage11" class="images" src="liton.jpg" alt="">
                          </div>
                    </div>
                </div>
                
              

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> <!-- Carousel -->

        

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Squad</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage"id="myImage1" src="../CFL/images/tamim.jpg" alt="">
                <h3><a id=link1 class="link" href="/CFL/showplayer.php">Tamim Iqbal</a>
                    <div class="hidden" id="hidden1">1</div>
                </h3>

            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage2" src="../CFL/images/shakib.jpg" alt="">
                <h3><a id=link2 href="http://www.w3schools.com/html/">Sakib Al Hasan</a>
                    <div class="hidden" id="hidden2">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage3" src="../CFL/images/mah.jpg" alt="">
                <h3><a id=link3 href="http://www.w3schools.com/html/">Mahmudullah Riyad</a>
                    <div class="hidden" id="hidden3">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage4" src="mushfiq.jpg" alt="">
                <h3><a id=link4 href="http://www.w3schools.com/html/">Mushfiqur Rahim</a>
                    <div class="hidden" id="hidden4">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage5" src="momi.jpg" alt="">
                <h3><a id=link5 href="http://www.w3schools.com/html/">Mominul Haque</a>
                    <div class="hidden" id="hidden5">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage6" src="arafat.jpg" alt="">
                <h3><a id=link6 href="http://www.w3schools.com/html/">Arafat Sunny</a>
                    <div class="hidden" id="hidden6">1</div>
                </h3>
            </div>
            
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage7" src="jubair.jpg" alt="">
                <h3><a id=link7 href="http://www.w3schools.com/html/">Jubair Hossain</a>

                  <div class="hidden" id="hidden7">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage8" src="liton.jpg" alt="">
                <h3><a id=link8 href="http://www.w3schools.com/html/">Litton Das</a>
                    <div class="hidden" id="hidden8">1</div>

                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage9" src="nasir.jpg" alt="">
                <h3><a id="link9" href="http://www.w3schools.com/html/">Nasir Hossain</a>
                    <div class="hidden" id="hidden9">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage10" src="rubel.jpg" alt="">
                <h3><a id=link10 href="http://www.w3schools.com/html/">Rubel Hossain</a>
                    <div class="hidden" id="hidden10">1</div>
                </h3>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="myImage" id="myImage11" src="sabbir.jpg" alt="">
                <h3><a id=link11 href="http://www.w3schools.com/html/">Sabbir Rahman</a>
                    <div class="hidden" id="hidden11">1</div>
                </h3>
            </div>
            


        </div>
        <div id="rightfooter">
        <a href="/CFL/changesquad.php" class="btn btn-primary btn-lg" role="button">CHANGE SQUAD</a>
        </div>

        

        

    </div>
    </div>
    <div id="footer">
      <p>Copyright &copy; Masudul Hasan Masud 2015</p>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

