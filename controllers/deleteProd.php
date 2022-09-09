<?php
include("../core/db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed");
    }

    $_SESSION['message'] = 'Product removed succesfully';
    $_SESSION['message_type'] = 'danger';

    header("Location: ../product.php");
}
?>