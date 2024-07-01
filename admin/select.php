

<?php

$con=mysqli_connect("localhost", "root","","hpm");

$q =" select * from client_details order by S_NO desc ";

$r = mysqli_query($con,$q);





?>


 



<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Clients_Details</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/css/normalize.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/themify-icons.css">
   <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
   <link rel="stylesheet" href="assets/css/flag-icon.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
  







  <!-- ======= Header ======= -->
  <?php 
   include 'header.php';
   ?>
      

  
      <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
      <div class="card-header"><strong>Client</strong><small> Detail</small></div>
   

      <div class="card-body card-block">
<table class=" table table-hover table-striped">

    <tr>

  

        <th>S_No</th>

<th>Name</th>





<th>Phoneno</th>

<th>Gender</th>

<th>Email_id</th>

<th>persons</th>

<th>Rate</th>

<th>Update</th>

<th>Delete</th>

    </tr>

    <?php 

    $a=1;

    while($key=mysqli_fetch_assoc($r)){

        ?>

        <tr>

            <!-- <td>

               php echo $a++; 

            </td> -->

            <td>

                <?php echo $key['S_NO'];?>

            </td>

            <td>

                <?php echo $key['Name'];?>

            </td>

    



<td><?php  echo $key['Phone_No'];?></td>

<td><?php  echo $key['Gender'];?></td>

<td><?php     echo $key['Email_id'];?></td>

<td><?php  echo $key['Persons'];?></td>

<td><?php echo $key['Rate'];?></td>

<td><a href="updateselect.php?q=<?=$key['S_NO'];?>" class="btn btn-primary">update</a></td>

<td><a href="" class="btn btn-danger">delete</a></td>

        </tr>



        <?php } ?>

</table>
      </div>
                     </div>
                  </div>
               </div></div></div>
    



  <!-- ======= Footer ======= -->

  

      
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>
