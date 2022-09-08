<?php

// //Creting database
// $conn = mysqli_connect("localhost", "root", "");
// $sql = "CREATE DATABASE IF NOT EXISTS cmss";
// $q = mysqli_query($conn, $sql);
// mysqli_close($conn); // closing current connection


//creating new connection with databse name
$conn = mysqli_connect("localhost", "root", "UK=}An>g8Yxf0PXZ", "id19538944_crud");
// $sql = "CREATE TABLE IF NOT EXISTS `product` (
//           `id` int(11) NOT NULL AUTO_INCREMENT,
//           `name` text NOT NULL,
//           `description` text NOT NULL,
//           `quantity` text NOT NULL,
//           `price` text NOT NULL,
//           `expire_date` varchar(255) NOT NULL,
//           PRIMARY KEY (id)
//         );";

// mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
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
        <p>MD Najmus Saadat | 19CSE039</p>
      </div>
    </header>

    <div class="main_wrapper">
      <div class="wrapper_header">
        <p class="head_title">Add New Product</p>
        <form action="php/create.php" method="POST">
          <div class="input_div">
            <div>
              <p>Product Name</p>
              <input type="text" name='name' />
            </div>
            <div>
              <p>Product Price</p>
              <input type="text" name='price'  />
            </div>
            <div>
              <p>Product Description</p>
              <input type="text" name='description'  />
            </div>
            <div>
              <p>Quantity</p>
              <input type="text" name='quantity'  />
            </div>
            <div>
              <p>Expiry Date</p>
              <input type="date" name='exp_date' />
            </div>
          </div>
          <div class="btn_holder">
            <input type="submit" value="Add" />
          </div>
        </form>
      </div>
      <p class="head_title">All Products</p>
      <div class="wrapper_bdy">




<?php

$sql = "SELECT * FROM product ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

  while($row = mysqli_fetch_assoc($result)){

    ?>


    <div class="prod_template">
    <div>
      <p>Name</p>
      <p><?php echo $row['name']; ?></p>
    </div>
    <div>
      <p>Description</p>
      <p><?php echo $row['description']; ?></p>
    </div>
    <div>
      <p>Quantity</p>
      <p><?php echo $row['quantity']; ?></p>
    </div>
    <div>
      <p>Expiry Date</p>
      <p><?php echo $row['expire_date']; ?></p>
    </div>
    <div>
      <p>Price</p>
      <p> <span style='font-weight: bold'>$</span> <?php echo $row['price']; ?></p>
    </div>
    <div>
      <a href="php/delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </div>
    <div>
      <a href="updateproduct.php?id=<?php echo $row['id']; ?>">Update</a>
    </div>
  </div>

<?php

  }
}else{
  echo "<div class='no_prod'><p>Add Data to View List</p></div>";
}

?>


      </div>
    </div>
  </body>
</html>
