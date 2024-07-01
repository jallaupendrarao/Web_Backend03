<?php

$SN=$_REQUEST['q'];

$stu_name=$_POST['dataName'];

//  $stu_Lname=$_POST['dataLastName'];

 $stu_gender=$_POST['dataGender'];

//  $stu_FA=$_POST['dataFatherName'];

//  $stu_MO=$_POST['dataMotherName'];

//  $stu_phone=$_POST['dataPhone'];

 $stu_email=$_POST['dataEmail'];

 $stu_persons=$_POST['dataPersons'];



 $stu_rate=$_POST['dataRate'];



// $stu_pwd=md5($_POST['dataPassword']);

//echo $stu_email,$stu_pwd,$stu_name;



$c=mysqli_connect("localhost","root","","hpm");

$q="update client_details set Name='$stu_name' ,gender='$stu_gender', Email_id='$stu_email', persons='$stu_persons', Rate = '$stu_rate' where S_NO='$SN' ";

mysqli_query($c,$q);



if (mysqli_affected_rows($c)>0) {

	header("http://localhost/hpm/select.php");

}

else{

	echo "updated complete";

  

}





?>



<a href="select.php">click to go back</a>