<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Form Page</title>
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




   <script>
      function bill() {
         var x = document.getElementById("s").value;
         var y = document.getElementById("c").value;
         var z = document.getElementById("p").value;
         var a = document.getElementById("o").value;

         for1.c.value = x;
         for1.p.value = x;
         for1.o.value = x;
      }
   </script>





   <?php
   include 'header.php';
   ?>


   <form action="insert.php" method="post" id="for1">


      <?php

      if (isset($_REQUEST['success'])) {

      ?>

         <p style="color:blue;">

         <?php echo "Successfuly registered";
      }

         ?></p>
         <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Checkin</strong><small> Form</small></div>
                        <div class="card-body card-block">
                           <div class="form-group">
                              <label for="fname" class=" form-control-label">NAME</label>
                              <input type="text" name="dataname" id="fname" placeholder="Enter name" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="phone" class=" form-control-label">PHONE_NO</label>
                              <input type="number" name="dataphone" placeholder="Number" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="gender" class=" form-control-label">GENDER</label>
                              <input type="text" name="datagender" placeholder="Enter gender" class="form-control">
                           </div>
                           <div class="form-group">
                              <label for="country" class=" form-control-label">EMAIL_ID</label>
                              <input type="email" placeholder="Enter email" name="dataemail" class="form-control">
                           </div>
                           <table id="up">
                              <tr>
                                 <td >
                                    No.of Persons :
                                 </td>
                                 <td>
                                    <select onchange="bill();" id="s" name="datapersons">


                                       <option value="1" >1</option>

                                       <option value="2" >2</option>

                                       <option value="3" >3</option>





                                    </select>
                                 </td>
                              </tr>




                           
                              <tr>
                                 <td>
                                    Rate :
                                 </td>
                                 <td>
                                    <select onchange="bill()" id="c" >


                                       <option value="1">2000</option>

                                       <option value="2">2500</option>



                                       <option value="3">2750</option>




                                    </select>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Gst :
                                 </td>
                                 <td>
                                    <select onchange="bill();" id="p">


                                       <option value="1">18%-360</option>

                                       <option value="2">18%-450</option>

                                       <option value="3">18%-495</option>





                                    </select>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Total :
                                 </td>
                                 <td>
                                    <select onchange="bill();" id="o" name="datarate">


                                       <option value="1">2360</option>

                                       <option value="2">2950</option>

                                       <option value="3">3245</option>





                                    </select>
                                 </td>
                              </tr>
                           </table>
                           <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" value="submit">
                              <span id="payment-button-amount" >Submit</span>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </form>
         <div class="clearfix"></div>
         <!-- <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; 2018 Ela Admin
                  </div>
                  <div class="col-sm-6 text-right">
                     Designed by <a href="https://colorlib.com/">Colorlib</a>
                  </div>
               </div>
            </div>
         </footer> -->
         </div>
         <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
         <script src="assets/js/popper.min.js" type="text/javascript"></script>
         <script src="assets/js/plugins.js" type="text/javascript"></script>
         <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>