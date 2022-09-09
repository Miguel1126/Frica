<?php
include("../core/db.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM contacts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['message'];
    }
} 

if(isset($_POST['update_contact'])){

    echo 'updating';
   $id = $_GET['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];

    $query = "UPDATE contacts set name = '$name', email = '$email', phone = '$phone', message = '$message' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['message'] = 'Contact updated succesfully';
    $_SESSION['message_type'] = 'warning';
    header("Location: ../contact.php");
}
?>
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
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="../css/owl.carousel.min.css">
      <link rel="stylesheet" href="../css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section haeder_main">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="../javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="../index.php">Home</a>
                  <a href="../computers.php">Computers</a>
                  <a href="../mans_clothes.php">Mans Clothes</a>
                  <a href="../womans_clothes.php">Womans Clothes</a>
                  <a href="../contact.php">Contact</a>
                  <a href="../product.php">Products</a>
               </div>
               <span style="font-size:30px;cursor:pointer; color: #fff;" onclick="openNav()"><img src="../images/toggle-icon.png"></span>
               <a class="navbar-brand" href="index.php"><img src="../images/logo.png"></a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="#"><img src="../images/user-icon.png"></a></li>
                        <li><a href="#"><img src="../images/trolly-icon.png"></a></li>
                        <li><a href="#"><img src="../images/search-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- contact section start -->
      
    <div class="contact_section layout_padding mb-3">
         <div class="container">
            <h1 class="contact_taital">Editing Contact</h1>
            <form action="../controllers/edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
               <div class="contact_section_2">
                  <div class="mail_section_1">
                  <input type="text" class="mail_text" placeholder="Name" name="name" value="<?php echo $name; ?>">
                  <input type="text" class="mail_text" placeholder="Email" name="email" value="<?php echo $email; ?>">
                  <input type="text" class="mail_text" placeholder="Phone Number" name="phone" value="<?php echo $phone; ?>">
                  <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" rows="2"><?php echo $message; ?></textarea>
                  <input type="submit" class="send_bt" value="Update" name="update_contact">
               </div>
            </form>
            </div>
         </div>
    </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top_90">
         <div class="container">
            <div class="footer_logo_main">
               <div class="footer_logo"><a href="index.php"><img src="../images/footer-logo.png"></a></div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="../images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="../images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="../images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="../images/instagram-icon.png"></a></li>
                     <li><a href="#"><img src="../images/youtub-icon.png"></a></li>
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
                     <div class="call_text"><img src="../images/map-icon.png"><span class="paddlin_left_0"><a href="#">London 145 United Kingdom</a></span></div>
                     <div class="call_text"><img src="../images/call-icon.png"><span class="paddlin_left_0"><a href="#">+7586656566</a></span></div>
                     <div class="call_text"><img src="../images/mail-icon.png"><span class="paddlin_left_0"><a href="#">volim@gmail.com</a></span></div>
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
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <script src="../js/plugin.js"></script>
      <!-- sidebar -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
      <!-- javascript --> 
      <script src="../js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
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