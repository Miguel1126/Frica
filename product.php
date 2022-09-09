<?php include("./core/db.php")?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Products</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section haeder_main">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="home.php">Home</a>
                  <a href="computers.php">Computers</a>
                  <a href="mans_clothes.php">Mans Clothes</a>
                  <a href="womans_clothes.php">Womans Clothes</a>
                  <a href="contact.php">Contact</a>
                  <a href="product.php">Products</a>
               </div>
               <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="images/toggle-icon.png"></span>
               <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="#"><img src="images/user-icon.png"></a></li>
                        <li><a href="#"><img src="images/trolly-icon.png"></a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- product section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Add product</h1>
            <form action="controllers/save.php" method="POST" enctype="multipart/form-data">
               <div class="contact_section_2">
               <?php if(isset($_SESSION['message_type'])) {?>
               <div class="alert alert-success alert-<?= $_SESSION['message']; ?>
               alert-dismissible fade show" role="alert">
               <?=$_SESSION['message']?>
               <button type="button" class="close" data-dismiss="alert"
               aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
               </div>
               <?php session_unset(); }?>
                  <div class="mail_section_1">
                  <div class="mb-3">
                     <label for="formFile" class="btn btn-secondary btn-lg">>Select Image</label>
                     <input name="img" type="file" id="formFile" style="visibility:hidden;">
                  </div>
                  <input type="text" class="mail_text" placeholder="Product" name="product">
                  <input type="text" class="mail_text" placeholder="Brand" name="brand">
                  <input type="text" class="mail_text" placeholder="Price" name="price">
                  <input type="submit" class="send_bt btn btn-success" value="Send" name="save_product">
               </div>
            </form>
            </div>
         </div>
      </div>
      <!-- contact section end -->
       <!-- contact list start -->
       <div class="contact_section layout_padding mb-3">
         <div class="container">
         <h1 class="contact_taital">Product List</h1>
         <div class="contact_section_2">
         <div class="mail_section_1">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Product</th>
                     <th>Brand</th>
                     <th>Price</th>
                     <th>Image</th>
                     <th>Created At</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                  $query = "SELECT * FROM products";
                  $resultCont = mysqli_query($conn, $query);

                  while($row = mysqli_fetch_array($resultCont)){ ?>
                  <tr>
                     <td><?php echo $row['id'] ?></td>
                     <td><?php echo $row['product'] ?></td>
                     <td><?php echo $row['brand'] ?></td>
                     <td><?php echo $row['price'] ?></td>
                     <td><?php echo $row['img'] ?></td>
                     <td><?php echo $row['created_at'] ?></td>
                     <td class="d-flex">
                        <a href="controllers/editProd.php?id=<?php echo $row['id']?>" class="btn btn-secondary m-3" ><span class="material-symbols-outlined">edit</span></i></a>
                        <a href="controllers/deleteProd.php?id=<?php echo $row['id']?>" class="btn btn-danger m-3"><span class="material-symbols-outlined">delete</span></a>
                     </td>
                  </tr>
                  <?php }?>
               </tbody>
            </table>
         </div>
         </div>
         </div>
      </div>
      <!-- contact list end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top_90">
         <div class="container">
            <div class="footer_logo_main">
               <div class="footer_logo"><a href="index.php"><img src="images/footer-logo.png"></a></div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                     <li><a href="#"><img src="images/youtub-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <h4 class="adderss_text">About</h4>
                     <p class="ipsum_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h4 class="adderss_text">Menu</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a href="computers.php">Computers</a></li>
                           <li><a href="Mans_clothes.php">Mans Clothes</a></li>
                           <li><a href="womans_clothes.php">Womans Clothes</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h4 class="adderss_text">Useful Link</h4>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="#">Adipiscing</a></li>
                           <li><a href="#">Elit, sed do</a></li>
                           <li><a href="#">Eiusmod</a></li>
                           <li><a href="#">Tempor</a></li>
                           <li><a href="#">incididunt</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <h4 class="adderss_text">Contact</h4>
                     <div class="call_text"><img src="images/map-icon.png"><span class="paddlin_left_0"><a href="#">London 145 United Kingdom</a></span></div>
                     <div class="call_text"><img src="images/call-icon.png"><span class="paddlin_left_0"><a href="#">+7586656566</a></span></div>
                     <div class="call_text"><img src="images/mail-icon.png"><span class="paddlin_left_0"><a href="#">volim@gmail.com</a></span></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>