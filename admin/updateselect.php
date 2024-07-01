<?php

$SN=$_REQUEST['q'];

$con=mysqli_connect("localhost","root","","hpm");

$q="select *from client_details where S_NO='$SN'";

$r=mysqli_query($con,$q);



?>







<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>

</head>

<body>

	<?php

		

		while ($key=mysqli_fetch_assoc($r)) {



		?>

<form action="updateclientinform.php?q=<?php echo $key['S_NO'];?>" method="Post">

	<?php 

	if(isset($_REQUEST['success'])){

		?>



		<p style="color:green;">

		<?php

 	echo "successfully updated";

}

		?></p>

    

	Name<input type="text" name="dataName" value="<?php echo $key['Name'];?>">

    Phone Number:<input type="number" name="dataPhone" value="<?php echo $key['Phone_No'];?>">

	Gender:<input type="text" name="dataGender" value="<?php echo $key['Gender'];?>">

	Email id:<input type="email" name="dataEmail" value="<?php echo $key['Email_id'];?>">

	Persons<input type="text" name="dataPersons" value="<?php echo $key['Persons'];?>">

	Rate<input type="number"  id="" name="dataRate"  value="<?php echo $key['Rate'];?>">

	<button type="submit">submit</button>

</form>

<?php } ?>

</body>

</html>