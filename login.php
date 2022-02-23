<?php session_start();

?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel = "icon" href = "UTlogoicon.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/login.css">
<style>
    

    #login-bg
    {
    height: 90vh;
    padding: 5% 30%;
    justify-content: center;
    background-image: linear-gradient(rgba(212, 85, 0, 0.7), rgba(56, 0, 7, 0.7)),url("Gallery/g2.jpg");
    background-size: cover;
    }
    @media screen and (max-width:700px){
        #login-bg
    {
    padding: 5% 12%;
    
    }
    }

    </style>


</head>

<body>
    <div class="container-fluid">
        <!-- NAVBAR AREA -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <!-- <img style="width:2.5vw"src="UdupiTLogo.png"/> -->
                     Udupi Tourism</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav1"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="nav1">
                    <ul class="nav navbar-nav">
                        <li><a class="nav-link px-2" href='home.html'>Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navDrop" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Places To Visit
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navDrop">
                                <li><a class="dropdown-item" href='beaches.html'>Beaches</a></li>
                                <li><a class="dropdown-item" href="temples.html">Temples</a></li>
                                <li><a class="dropdown-item" href="wildlife.html">Wildlife</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link px-2" href='culture.html'>Cultures</a></li>
                        <li><a class="nav-link px-2" href='gallery.html'>Gallery</a></li>
                        <li><a class="nav-link px-2" href='login.php'>Reviews</a></li>
                        <li><a class="nav-link px-2" href='contact-us.php'>Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- BODY AREA  -->
        
        <?php
        if(isset($_SESSION["login"]) && $_SESSION["login"] !== true){ ?>
        <div class="alert alert-danger alert-dismissable d-flex align-items-center m-0" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div class="px-2">
                User not found, Enter proper data 
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php      
        }
        unset($_SESSION['login']);

        if(isset($_SESSION['register'])){
        if($_SESSION["register"] == true){ ?>
        <div class="alert alert-success alert-dismissable d-flex align-items-center m-0" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <div class="px-2">
                Registered Successfully
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php       }
        else{
            ?>
        <div class="alert alert-danger alert-dismissable d-flex align-items-center m-0" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div class="px-2">
                Please enter correct data
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }} 
        unset($_SESSION['register']);
        ?>

        <div class='container-fluid'>
            <div id='login-bg'>
                <div id='login-front'>
                            <h1>Login</h1>
                            <form name="f1" autocomplete="off" action='authentication.php' method="POST">
                                <p>
                                    <label> Username: </label>
                                    <input class="form-control mx-5 w-75"type="text" id="user" name="user" required/>
                                </p>    
                                <p>
                                    <label> Password: </label>
                                    <input class="form-control mx-5 w-75"type="password" id="pass" name="pass" required/>
                                </p>
                                <p>
                                    <input type="submit" class="btn2" value="Login" />
                                </p>
                                <p>
                                </form>
                                    <a href='' data-bs-toggle="modal" data-bs-target="#Register">
                                        New Here? Register Now
                                    </a>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="Register" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Register Here</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                <form action='register.php' method='post' enctype="multipart/form-data" autocomplete="off" >
                                                    <p>
                                                        <label> First Name: </label>
                                                        <input class="form-control"type="text" id="fname" name="fname" required />
                                                    </p>
                                                    <p>
                                                        <label> Last Name: </label>
                                                        <input class="form-control" type="text" id="lname" name="lname" required />
                                                    </p>
                                                    <p>
                                                        <label> Username: </label>
                                                        <input class="form-control"type="text" id="reguser" name="reguser" required />
                                                    </p>
                                                    <p>
                                                        <label> Password: </label>
                                                        <input class="form-control"type="password" id="regpass" name="regpass" required />
                                                    </p>
                                                    <p>
                                                        <label> Profile Photo: </label>
                                                        <input class="form-control"type="file" accept="image/*" id="dp" name="dp" required />
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Register</button>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                </div>
            </div>
        </div>

        <!-- FOOTER AREA  -->
        <footer class="py-4  py-md-4  border-top bg-dark">
            <div class="row m-0">
                <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>QUICK LINKS</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="home.html">Home</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="gallery.html">Gallery</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="login.php">Reviews</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>PLACES TO VISIT</h5>
                    <ul class="list-unstyled ">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="beaches.html">Beaches</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="temples.html">Temples</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="wildlife.html">Wildlife</a></li>
                        </li>
                    </ul>
                </div>
        
                <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>MAINTAINED BY</h5>
                    <p class='text-secondary'>Anuroop and Rahul<br>
                        5th Sem CSE<br>
                        NMAMIT,Nitte</p>
                </div>
            </div>
        </footer>
    </div>
    </div>


</body>

</html>