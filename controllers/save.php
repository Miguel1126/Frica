<?php 
include("../core/db.php");

if (isset($_POST['save_contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO contacts(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Contact saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: ../contact.php");
}

if (isset($_POST['save_product'])){
    $product = $_POST['product'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $img = $_FILES['img']['name'];
    $temp_img=$_FILES['img']['tmp_name'];
    $folder = '../images';
    $route = $folder. '/'. $img;
    move_uploaded_file($temp_img, $folder. '/'. $img);


    $query = "INSERT INTO products(product, brand, price, img) VALUES ('$product', '$brand', '$price', '$route')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Product saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: ../product.php");
}

if (isset($_POST['save_cart'])){
    $product_id = $_POST['product_id'];


    $query = "INSERT INTO shopping_cart(product_id) VALUES ('$product_id')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Product saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: ../home.php");
}

if (isset($_POST['save_user'])){
    $name = $_POST['name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $img = $_FILES['img']['name'];
    $temp_img=$_FILES['img']['tmp_name'];
    $folder = '../images';
    $route = $folder. '/'. $img;
    move_uploaded_file($temp_img, $folder. '/'. $img);


    $query = "INSERT INTO users(name, last_name, email, password, img) VALUES ('$name', '$lastName', '$email', '$password', '$route')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'User saved succesfully';
    $_SESSION['message_type'] = 'success';

    header("Location: ../singUp.php");
}
?>
?>