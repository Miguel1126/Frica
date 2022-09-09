<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sing Up</title>
</head>
<body>
     <!-- user section start -->
     <div>
         <div class="container border rounded position-absolute top-50 start-50 translate-middle" id="container" style="width: 40%;">
            <h1 class="text-center">Register</h1>
            <form action="controllers/save.php" method="POST" enctype="multipart/form-data">
               <div class="d-wrap m-3" >
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
                  <div class="container rounded">
                  <div class="m-3">
                     <label for="formFile" class="btn btn-secondary">>Select Image</label>
                     <input name="img" type="file" id="formFile" style="visibility:hidden;">
                  </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" placeholder="Name" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" placeholder="Last Name" name="last_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" placeholder="Email" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" placeholder="Password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                  <input type="submit" class="send_bt btn btn-success m-3" value="Send" name="save_user">
               </div>
            </form>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<style>
    body{
        background-color: #2b2a33;
        color: #fff;
    }
    #container{
        background-color: #42414d;
    }
</style>