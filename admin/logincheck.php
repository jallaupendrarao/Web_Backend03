<?php

$sn=$_POST['adminemail'];



$spwd=$_POST['adminpass'];



//echo($sn.$spwd);

$con=mysqli_connect("localhost","root","","hpm");

$q="select * from adminlogin where adminemail='$sn' and adminpass='$spwd'";

$r=mysqli_query($con,$q);

if (mysqli_affected_rows($con)>0) {



    header("location:index.php");

}

else{

	header("location:login.php?tryagain");

    // echo"try again";

}







?>