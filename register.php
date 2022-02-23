<?php
session_start();
    if($_SERVER["REQUEST_METHOD"]=='POST'){
    include('connection.php'); 
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $user=$_POST["reguser"];
    $pass=$_POST["regpass"];
    //print_r($_FILES);
        // Move uploaded file to new destination, if destination file already 
         // exists it will be overwritten 
        move_uploaded_file($_FILES["dp"]["tmp_name"],"upload/" . $_FILES["dp"]["name"]);
        $imgpath="upload/" . $_FILES["dp"]["name"];
        
    //echo "'$fname','$lname','$user','$pass'";
// $query= "SELECT * from `contactus`"
$query = "INSERT into `login` (fname,lname,username,password,imgpath) VALUES ('$fname','$lname','$user','$pass','$imgpath')";
if($result = mysqli_query($conn, $query))
{ 
    $_SESSION["register"]=true;
   
    header("location: login.php");
}
else{
    $_SESSION["register"]=false;
    header("location: login.php");
}
    }
?>