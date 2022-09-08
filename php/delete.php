<?php

//Recieving all data
$id = $_GET['id'];



//creatinng connection
$conn = mysqli_connect("localhost", "root", "UK=}An>g8Yxf0PXZ", "id19538944_crud");
$sql = "DELETE FROM `product` WHERE id = $id";


if(mysqli_query($conn, $sql)){
    header("Location: http://localhost/pp/");
}else{
    die("Query failed");
}




