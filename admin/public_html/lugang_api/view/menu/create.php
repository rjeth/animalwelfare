<?php

require_once ("../../data/config.php");

if($_POST) {
  $prodid = $_POST['id'];
  $rate = $_POST['price'];
  $qt = $_POST['selectquant'];
  $total = $_POST['tot'];
    $oldqt = $_POST['qtys'];
  $newqt = $oldqt - $qt;


    $sql = "INSERT INTO order_items (order_id, product_id, qty, rate, amount , status) VALUES ('1', '$prodid', '$qt' , '$rate' , '$total' , 'Raw')";
    if($conn->query($sql) === TRUE) {
      $sql = "UPDATE products set quantity = $newqt WHERE id = $prodid";
      if($conn->query($sql) === TRUE) {
              header('location:../cart/');

      } else {
          echo "Error " . $sql . ' ' . $connect->connect_error;
      }



    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
  $conn->close();

}


?>
