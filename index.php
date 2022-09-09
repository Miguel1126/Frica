<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Frica Login</title>
</head>
<body>
   <div class="container border position-absolute top-50 start-50 translate-middle" id="container">
   <form action="login.php" method="post">
      <h1 class="text-center">Login</h1>
      <div class="text-center position-absolute top-50 start-50 translate-middle">
         <div class="m-3"><input type="text" placeholder="Email" name="email"></div>
         <div class="m-3"><input type="password" placeholder="Password" name="password"></div>
         <input class="btn btn-success m-1" type="submit" value="Login">   
         <a href="singUp.php" class="btn btn-primary m-1">Sing Up</a>
      </div>
   </form>
   </div>
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
        width: 25%;
        height: 50%;
    }
</style>