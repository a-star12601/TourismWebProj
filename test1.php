<html>
    <head>
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">        
	<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <script>

            

        </script>
        <style>
            *{
                padding: 0;
                margin:0;
            }
            @font-face {
                font-family: Poppins;
                src: url("Poppins-Medium.ttf");
            }
            @font-face {
                font-family: Bebas;
                src: url("Bebas-Regular.ttf");
            }
            @font-face {
                font-family: Kaushan;
                src: url("KaushanScript-Regular.ttf");
            }
            .container-fluid{
                font-family: Poppins;
                margin:0;
                padding:0;
                background-color: rgb(248, 248, 248);
              }
            .navbar{
                border-radius: 0;
                border:none;
                padding: 2.5vh 1.5vw;
                margin-bottom: 0;
                
            }
            .nav-link{
                display:block;
                font-size: 3vh;
                padding: 1.5vh 2vw;
            }
            .nav-link:hover{
                color: green;
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
            .links{
              text-decoration: none;
              color:white;
            }
            .btn{
            font-size: 85%; 
            padding: 1vw 3.4vw;
            background-color: rgb(192,31,46); 
            text-decoration: none;
            font-weight: bold; 
            color: white;
            border-radius: 0;
            margin: 3vw 0 5vw;
          }
          .form-group{
            margin-top: 2vh;
          }
          .form-control,.form-check-input{
            -webkit-box-shadow: 5px 4px 4px 0px rgba(0,0,0,0.1); 
box-shadow: 5px 4px 4px 0px rgba(0,0,0,0.1);
          }
          h5{
            font-size: 120%;
            margin: 2vh 0;
          }
          
          .foot-head{
            border-bottom: solid 1px white;
            width:50%;
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
                          <li><a class="nav-link px-2" href='home.html'>Home</a></li><li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Places To Visit
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navDrop">
                              <li><a class="dropdown-item" href='beaches.html'>Beaches</a></li>
                              <li><a class="dropdown-item" href="temples.html">Temples</a></li>
                              <li><a class="dropdown-item" href="attractions.html">Attractions</a></li>
                            </ul>
                          </li>
                          <li><a class="nav-link px-2" href='culture.html'>Cultures</a></li>
                          <li><a class="nav-link px-2" href='gallery.html'>Gallery</a></li>
                          <li><a class="nav-link px-2" href='reviews.html'>Reviews</a></li>
                          <li><a class="nav-link px-2" href='contact-us.html'>Contact Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- CAROUSEL AREA -->
            <div id="carousel1" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carousel1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="c1 carousel-inner">
                  <div class="carousel-item active">
                    <img src="Car1.jpg" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="Car2.jpg" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="Car3.jpg" class="d-block w-100">
                  </div>
                  <div class="carousel-item">
                    <img src="Car4.jpg" class="d-block w-100">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <!-- BODY AREA  -->
              <h1 class='Head'>Contact Us</h1>
              
              
              <div class='container md-8'>
                <form action='' method='post'>

                  <div class='row mt-5 my-2'>
                    <div class='col-md-6'>
                      <label class='mb-0'>First Name</label>
                      <input type='text' name="fname" class='form-control' required>   
                    </div> 
                    <div class='col-md-6'>
                      <label class='mb-0'>Last Name</label>
                      <input type='text' name="lname" class='form-control' required>   
                    </div> 
                  </div>  
                  <div class='row my-2'>
                    <div class='col-md-6'>
                      <label class='mb-0'>Email-ID</label>
                      <input type='email' name="mail" class='form-control' required>   
                    </div> 
                    <div class='col-md-6'>
                      <label class='mb-0'>Phone Number</label>
                      <input type='text' name="phone" class='form-control' required>   
                    </div> 
                  </div>  
                  <div class='form-group'>
                      <label class='mb-0'>Address</label>
                      <input type='text' name="address" class='form-control' required>   
                  </div> 
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label >City</label>
                      <input type="text" name="city" class="form-control"> 
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control">
                        <option selected disabled>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label >Pincode</label>
                      <input type="text" class="form-control" name="pin">
                    </div>
                  </div>
                  <h4 class='mt-5'>Places you would like to visit?</h4>
                  <hr/>
                  <!-- BEACH INPUT  -->
                  <h5>Beaches:</h5>
                  <div style="font-size:120%">
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="BChoice[]" id="b1" value="malpe">
                    <label class="form-check-label" for="b1">Malpe</label>
                  </div>
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="BChoice[]" id="b2" value="maravanthe">
                    <label class="form-check-label" for="b2">Maravanthe</label>
                  </div>
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="BChoice[]" id="b3" value="kaup">
                    <label class="form-check-label" for="b3">Kaup</label>
                  </div>              
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="BChoice[]" id="b4" value="padubidri">
                    <label class="form-check-label" for="b3">Padubidri</label>
                  </div> 
                  </div>             
                  <!-- TEMPLE INPUT  -->
                  <h5>Temples:</h5>
                  <div style="font-size:120%">
                    <div class="form-check form-check-inline col-md-2 ">
                      <input class="form-check-input" type="checkbox" name="TChoice[]" id="b1" value="malpe">
                      <label class="form-check-label" for="b1">Malpe</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2 ">
                      <input class="form-check-input" type="checkbox" name="TChoice[]" id="b2" value="maravanthe">
                    <label class="form-check-label" for="b2">Maravanthe</label>
                  </div>
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="TChoice[]" id="b3" value="kaup">
                    <label class="form-check-label" for="b3">Kaup</label>
                  </div>              
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="TChoice[]" id="b4" value="padubidri">
                    <label class="form-check-label" for="b3">Padubidri</label>
                  </div>              
                </div>
                <!-- WILDLIFE INPUT  -->
                <h5>Wildlife:</h5>
                <div style="font-size:120%">
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="WChoice[]" id="b1" value="malpe">
                  <label class="form-check-label" for="b1">Malpe</label>
                </div>
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="WChoice[]" id="b2" value="maravanthe">
                  <label class="form-check-label" for="b2">Maravanthe</label>
                </div>
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="WChoice[]" id="b3" value="kaup">
                  <label class="form-check-label" for="b3">Kaup</label>
                </div>              
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="WChoice[]" id="b4" value="padubidri">
                  <label class="form-check-label" for="b3">Padubidri</label>
                </div> 
                </div>             
                <!-- ATTRACTION INPUT  -->
                <h5>Attractions:</h5>
                <div style="font-size:120%">
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="AChoice[]" id="b1" value="malpe">
                    <label class="form-check-label" for="b1">Malpe</label>
                  </div>
                  <div class="form-check form-check-inline col-md-2 ">
                    <input class="form-check-input" type="checkbox" name="AChoice[]" id="b2" value="maravanthe">
                  <label class="form-check-label" for="b2">Maravanthe</label>
                </div>
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="AChoice[]" id="b3" value="kaup">
                  <label class="form-check-label" for="b3">Kaup</label>
                </div>              
                <div class="form-check form-check-inline col-md-2 ">
                  <input class="form-check-input" type="checkbox" name="AChoice[]" id="b4" value="padubidri">
                  <label class="form-check-label" for="b3">Padubidri</label>
                </div>              
              </div>
              <h4 class='mt-5'>Any other Queries or feedbacks?</h4>
              <hr/>
              <textarea class='form-control'rows=5></textarea>

              <div style='text-align:center'>
                <input type='submit' class="btn" value="SUBMIT">
                <input type='reset' class="btn bg-primary" value="RESET">
              </div>
              </form>
              </div>

<?php
error_reporting(E_ALL ^ E_WARNING); 
if($_SERVER["REQUEST_METHOD"]=='POST'){
include("connection.php");  
//echo "Connected successfully";
$BC=$WC=$TC=$AC='';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$Bchoice=$_POST["BChoice"];
foreach($Bchoice as $b1)  
   {  
       $BC.= $b1.",";  
   }
   $Tchoice=$_POST["TChoice"];
foreach($Tchoice as $t1)  
   {  
      $TC.= $t1.",";  
    }
    $Wchoice=$_POST["WChoice"];
    foreach($Wchoice as $w1)  
    {  
        $WC.= $w1.",";  
    }  
    $Achoice=$_POST["AChoice"];
    foreach($Achoice as $a1)  
    {  
        $AC.= $a1.",";  
    }  
    $phone=$_POST["phone"];
    $city=$_POST["city"];
    // $query= "SELECT * from `contactus`"
    $query = "INSERT into `contactus` (FName, LName, BChoice, WChoice, TChoice, AChoice,Phone,City)
VALUES ('$fname','$lname','$BC','$WC','$TC','$AC','$phone','$city')";
if($result = mysqli_query($conn, $query))
{
    echo "<script>
    alert('successfully inserted');
    </script>";
}
else
{
    echo "<script>
    alert('successfully not inserted');
    </script>";
}

}
?>
              



              <!-- FOOTER AREA  -->
              <footer class="py-4  py-md-4  border-top bg-dark">
                <div class="row m-0">
                  <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>QUICK LINKS</h5>
                    <ul class="list-unstyled">
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="home.html">Home</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="gallery.html">Gallery</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="reviews.html">Reviews</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="contact-us.html">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="px-4 col-12 col-md-4">
                    <h5 class='text-light foot-head'>PLACES TO VISIT</h5>
                    <ul class="list-unstyled ">
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Beaches</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Temples</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Wildlife</a></li>
                      <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Attractions</a></li>
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