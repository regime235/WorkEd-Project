<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Student</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/style.css">
  		<!-- jQuery -->
<script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/active.js"></script>
</head>

<body style="background-image: url(img/aup1.jpg); background-size: cover;" >


	<header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="img/aup_logo.png" alt="" height="75" width="75"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="HomePage.php">Home</a></li>
                                    <li><a href="#">Student</a>
                                    <li><a href="StudentRecord.php">Student Record</a></li>
                                    <li><a href="StudentLog.php">Student Log</a>
                                    <li><a href="index.php">Log Out</a></li>
                                    
                                        
                                </ul>

                                <!-- Share Icon -->
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
	<div class="container" style="margin: auto;;border: 2px;  padding: 55px; width: 460px; background: rgba(0,0,0,0.5) ">
        <h1 style="color: yellow; text-align: center; text-shadow: 2px 2px 6px black; font-family: bookman old style; font-size: 40px">Add Student</h1>
        <hr>
    <div class="row" id="myForm" >
        <div class="col-xs-12">
            <form action="StudentInsertLog.php" method="post" id="registration"; style="width: 250px; margin: auto;">
                <h5 style="color: yellow;">First Name:</h5> <input type="text"id="name" placeholder="Enter First Name" name="Stud_fName" style="width: 150%; background: none; padding: 5px;outline: 0;font-family: serif;font-size: 18px;border-top: none;border-left: none;border-right: none;">
                <br>
                <h5 style="color: yellow">Last Name:</h5> <input type="text" id="name" placeholder="Enter Last Name" name="Stud_lName"style="width: 150%; background: none; padding: 3px;outline: 0;font-family: serif;font-size: 18px;border-top: none;border-left: none;border-right: none;">
                <br>
                <h5 style="color: yellow">Department:</h5> <input type="text" id="name" placeholder="Enter Department" name="Department" style="width: 150%; background: none; padding: 3px;outline: 0;font-family: serif;font-size: 18px;border-top: none;border-left: none;border-right: none;">
                <br>
                <h5 style="color: yellow">Supervisor:</h5> <input type="text" id="name" placeholder="Enter Supervisor" name="Supervisor" style="width: 150%; background: none; padding: 3px;outline: 0;font-family: serif;font-size: 18px;border-top: none;border-left: none;border-right: none;">
                <br>
                <br>
                <button  type="submit" class="btn btn-success" style="width: 75%; text-align: center;">Submit</button>
            </form>
        </div>
        </div>
    </div>
</body>
</html>