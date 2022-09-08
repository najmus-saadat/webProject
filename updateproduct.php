<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Update Product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header>
      <div>
        <h2>My <span>CRUD</span> Application</h2>
        <p>Car Managemnet System</p>
      </div>
    </header>

    <div class="main_wrapper">
      <div class="wrapper_header">
        <p class="head_title">Edit Product</p>
        <form action="php/update.php" method="POST">




        <?php

$conn = mysqli_connect("localhost", "root", "UK=}An>g8Yxf0PXZ", "id19538944_crud");
$id = $_GET['id'];

$sql = "SELECT * FROM product WHERE id = $id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_assoc($result)){

    ?> 

    <div class="input_div">
    <input style='display: none' type="text" name='id' value='<?php echo $id; ?>' />

    <div>
      <p>Product Name</p>
      <input type="text" name='name' value='<?php echo $row['name']; ?>' />
    </div>
    <div>
      <p>Product Price</p>
      <input type="text" name='price' value='<?php echo $row['price']; ?>'  />
    </div>
    <div>
      <p>Product Description</p>
      <input type="text" name='description' value='<?php echo $row['description']; ?>'  />
    </div>
    <div>
      <p>Quantity</p>
      <input type="text" name='quantity' value='<?php echo $row['quantity']; ?>'  />
    </div>
    <div>
      <p>Expiry Date</p>
      <input type="date" name='exp_date' value='<?php echo $row['expire_date']; ?>' />
    </div>
  </div>
  <div class="btn_holder">
    <input type="submit" value="Update" />
  </div>


  <?php
  }
}

?>



        </form>
      </div>
      







    
    </div>
  </body>
</html>
