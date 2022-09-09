<?php 
include("../core/db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM shopping_cart WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Contact removed succesfully';
    $_SESSION['message_type'] = 'danger';

    header("Location: ../home.php");
}
?>