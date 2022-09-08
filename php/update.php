<?php

//Recieving all data
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$exp_date = $_POST['exp_date'];


//creatinng connection
$conn = mysqli_connect("localhost", "root", "UK=}An>g8Yxf0PXZ", "id19538944_crud");
$sql = "UPDATE `product` SET `name`='$name',`description`='$description',`quantity`='$quantity',`price`='$price',`expire_date`='$exp_date' WHERE id = $id";


if(mysqli_query($conn, $sql)){
    header("Location: http://localhost/pp/");
}else{
    die("Query failed");
}




