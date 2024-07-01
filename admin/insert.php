<?php

 $data_Name = $_POST['dataname'];

 $data_Gender = $_POST['datagender'];

 $data_Phone = $_POST['dataphone'];

 $data_Email = $_POST['dataemail'];

 $data_Persons = $_POST['datapersons'];

//  $data_childs = $_POST['datachilds'];

//  $data_Password = $_POST['datapassword']; //md5()

$data_Rate = $_POST['datarate'];

//  echo  $data_Name , $data_Phone,  $data_Email, $data_Password;



 $c = mysqli_connect("localhost", "root","","hpm");

 $q = "insert into client_details(Name,Gender, Phone_no, Persons, Email_id , Rate)value('$data_Name','$data_Gender', ' $data_Phone', '$data_Persons', ' $data_Email', ' $data_Rate')";

 mysqli_query($c,$q);



 if (mysqli_affected_rows($c)>0){



    header("location:https://localhost/hpm/admin/forms.php?success");

//    echo "Successfully registered";

 }

 else 

 {echo "try Again";}

?> 