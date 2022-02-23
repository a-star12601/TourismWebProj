
<?php
session_start();
include('connection.php');
error_reporting(E_ALL ^ E_WARNING); 

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
$pin=$_POST['pin'];
$mail=$_POST['mail'];  
$address=$_POST['address'];
$state=$_POST['state'];
$phone=$_POST["phone"];
$city=$_POST["city"];
$misc=$_POST["MiscFback"];
// $query= "SELECT * from `contactus`"
$query = "INSERT into `contactus` (FName, LName, BChoice, WChoice, TChoice,Phone,City,MiscFback,State,Address,Mail,Pin)
VALUES ('$fname','$lname','$BC','$WC','$TC','$phone','$city','$misc','$state','$address','$mail','$pin')";

if($result = mysqli_query($conn, $query))
{ 
    $_SESSION["formfill"]=true;
   
    header("location: contact-us.php");
}
else{
    $_SESSION["formfill"]=false;
    header("location: contact-us.php");
}
?>

