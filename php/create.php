<?php

//Recieving all data
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$exp_date = $_POST['exp_date'];


//creatinng connection
$conn = mysqli_connect("localhost", "root", "UK=}An>g8Yxf0PXZ", "id19538944_crud");
$sql = "INSERT INTO `product`( `name`, `description`, `quantity`, `price`, `expire_date`) VALUES ('{$name}','{$description}','{$quantity}','{$price}','{$exp_date}')";


if(mysqli_query($conn, $sql)){
    header("Location: http://localhost/pp/");
}else{
    die("Query failed");
}




