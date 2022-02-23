<?php session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "<script>window.location.href='login.php';</script>";
    echo $_SESSION["loggedin"];
}
?>
<html>

<head>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
          <link rel="icon" href="UTlogoicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reviews</title>
    <script>



    </script>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        @font-face {
            font-family: Poppins;
            src: url("css/Poppins-Medium.ttf");
        }

        @font-face {
            font-family: Bebas;
            src: url("css/Bebas-Regular.ttf");
        }

        @font-face {
            font-family: Kaushan;
            src: url("css/KaushanScript-Regular.ttf");
        }

        .container-fluid {
            font-family: Poppins;
            margin: 0;
            padding: 0;
            background-color: rgb(248, 248, 248);
        }

        .navbar {
            border-radius: 0;
            border: none;
            padding: 2.5vh 1.5vw;
            margin-bottom: 0;

        }

        .nav-link {
            display: block;
            font-size: 3vh;
            padding: 1.5vh 2vw;
        }

        .nav-link:hover {
            color: green;
        }

        
        .links {
            text-decoration: none;
            color: white;
        }

        .add-btn {
            padding: 2vw 3.4vw;
            background-color: rgb(192, 31, 46);
            text-decoration: none;
            font-weight: bold;
            color: white;
            border:none;
            border-radius: 0;
            
        }

        .review 
        {
            width:95%;
            margin:1% 2.5%;
            justify-content: center;
            -webkit-box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.21); 
box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.21);
        }
        .Head{
              margin:5px 0;
              padding:3vh;
              font-family: Kaushan;
              font-size: 7vw;
              text-align: center;
              display:block;
              background-image:linear-gradient(rgba(17, 38, 68, 0.7),rgba(17, 38, 68, 0.7)),url("Beaches/h1.jpg");
              background-repeat: no-repeat;
              color:white;
            }

        h1 {
            padding: 5vh 0 10vh;
        }
        .foot-head {
            border-bottom: solid 1px white;
            width: 50%;
        }
        .dp{
            height:4vw;
            width:4vw;
            margin-right:1vw;
            border-radius:50%;
            border: solid 2px white;
            float:left;
        }
    </style>


</head>

<body>
    <div class="container-fluid">
        <!-- NAVBAR AREA -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Udupi Tourism</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav1"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="nav1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 text-primary dropdown-toggle" href="#" id="navDrop" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navDrop">
                                <li><a class="dropdown-item" href='logout.php'>Logout</a></li>
                            </ul>
                        </li>    
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
        <h1 class='Head'>Reviews</h1>
        
        <button class='add-btn w-100' data-bs-toggle="modal" data-bs-target="#AddReview"> + ADD REVIEW </button>
        <?php
        if(isset($_SESSION['review'])){
        if($_SESSION["review"] == true){ ?>
        <div class="alert alert-success alert-dismissable d-flex align-items-center m-0" role="alert">
            <i class="bi bi-check-circle-fill"></i>
            <div class="px-2">
                Review added successfully
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php       }
        else{
            ?>
        <div class="alert alert-danger alert-dismissable d-flex align-items-center m-0" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <div class="px-2">
                There was some error with the review
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
        }} 
        unset($_SESSION['review']);
        ?> 
        <div class="modal fade" id="AddReview" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Your Review</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="addreview.php" method='post' autocomplete="off" >
                                <p>
                                    <label> Title: </label>
                                    <input class="form-control"type="text" id="rheading" name="rheading" required />
                                </p>
                                <p>
                                    <label> Body: </label>
                                    <textarea class="form-control" type="text" id="rbody" name="rbody" required ></textarea>
                                </p>
                                <p>
                                    <label> Rating: </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating" id="R1" value="1">
                                        <label class="form-check-label" for="1">1</label>
                                        </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating" id="R2" value="2">
                                        <label class="form-check-label" for="2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating" id="R3" value="3">
                                        <label class="form-check-label" for="3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating" id="R4" value="4">
                                        <label class="form-check-label" for="4">4</label>
                                        </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating" id="R4" value="5">
                                        <label class="form-check-label" for="5">5</label>
                                    </div>
                                </p>
                                <p>
                                    <label>Favourite Place: </label>
                                    <input class="form-control" type="text" id="location" name="location" required />
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php

function time_elapsed_string($time_ago)
{
    $time_ago = strtotime($time_ago);
    $cur_time   = time();
    $time_elapsed   = $cur_time - $time_ago;
    $seconds    = $time_elapsed ;
    $minutes    = round($time_elapsed / 60 );
    $hours      = round($time_elapsed / 3600);
    $days       = round($time_elapsed / 86400 );
    $weeks      = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640 );
    $years      = round($time_elapsed / 31207680 );
    // Seconds
    if($seconds <= 60){
        return "just now";
    }
    //Minutes
    else if($minutes <=60){
        if($minutes==1){
            return "one minute ago";
        }
        else{
            return "$minutes minutes ago";
        }
    }
    //Hours
    else if($hours <=24){
        if($hours==1){
            return "an hour ago";
        }else{
            return "$hours hrs ago";
        }
    }
    //Days
    else if($days <= 7){
        if($days==1){
            return "yesterday";
        }else{
            return "$days days ago";
        }
    }
    //Weeks
    else if($weeks <= 4.3){
        if($weeks==1){
            return "a week ago";
        }else{
            return "$weeks weeks ago";
        }
    }
    //Months
    else if($months <=12){
        if($months==1){
            return "a month ago";
        }else{
            return "$months months ago";
        }
    }
    //Years
    else{
        if($years==1){
            return "one year ago";
        }else{
            return "$years years ago";
        }
    }
}
{
    include('connection.php'); 
    $sql ="select * from reviews,login where uname=username order by submit_date desc";  
    $result = mysqli_query($conn, $sql);
    
    ?>
    <div class="row" style="margin:0">
    <?php foreach ($result as $row):
        $dp=$row['imgpath'];
        $name=$row['fname']." ".$row['lname'];
        $head=$row['rheading'];
        $body=$row['rbody'];
        $rating=$row['rating'];
        $date=$row['submit_date'];
        $loc=$row['location'];
        $date=time_elapsed_string($row['submit_date']);
        
        
        ?>
        
            <div class="card review" >
              <div class="card-body">
                <img class='dp' src='<?php echo $dp?>'> 
                <h6 class="card-subtitle mb-2 text-muted" style="float:right"><?php echo $date?></h6>
                <h4 class="card-title"><?php echo $head?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $name?></h6>
                <p class="card-text"><?php echo $body?></p>
                <p class="card-text">Favourite Place: <?php echo $loc?></p>
                <p class="card-text">Rating:

                    <?php for($i=0;$i<$rating;$i++){?>
                        <i class="bi bi-star-fill text-warning" ></i>
                        <?php }?>       
                </p>
              </div>
            </div>  
    <?php endforeach;?>
</div>
<?php
 }
?>
<div id='alertback'></div>

        <!-- FOOTER AREA  -->
        <footer class="py-4  py-md-4  border-top bg-dark">
                <div class="row m-0">
                  <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>QUICK LINKS</h5>
                    <ul class="list-unstyled">
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="home.html">Home</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="gallery.html">Gallery</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="login.php">Reviews</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="contact-us.php">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>PLACES TO VISIT</h5>
                    <ul class="list-unstyled ">
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="beaches.html">Beaches</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="temples.html">Temples</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="wildlife.html">Wildlife</a></li>
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
