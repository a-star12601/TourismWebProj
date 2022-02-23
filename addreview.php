<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=='POST'){
include("connection.php");  
//echo "Connected successfully";
    $username=$_SESSION["username"];
    $rheading=$_POST["rheading"];
    $rbody=$_POST["rbody"];
    $rating=$_POST["rating"];
    $location=$_POST["location"];
    $query = "INSERT into `reviews` (uname, rheading, rbody, rating,location)
VALUES ('$username','$rheading','$rbody','$rating','$location')";
$succ = '<div class="alert alert-success" role="alert">Successfully Inserted</div>';
$fail = '<div class="alert alert-success" role="alert">There has been some issues</div>';
if($result = mysqli_query($conn, $query))
{ 
    $_SESSION["review"]=true;
   
    header("location: reviews.php");
}
else{
    $_SESSION["review"]=false;
    header("location: reviews.php");
}

}
?>
