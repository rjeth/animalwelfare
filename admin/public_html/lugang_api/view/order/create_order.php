<?php

require_once ("../../data/config.php");

if($_POST) {

  $branch = $_POST['branchnn'];
    $randss = $_POST['rands'];
  $tblid = $_POST['table_no'];
  $totalAmount = $_POST['totB'];
  $date = $_POST['order_date'];
    $vatrate = $_POST['vat'];
    $vatcon = $vatrate / 100;
    $vatamount = $vatcon * $totalAmount;
    $netamount = $vatamount + $totalAmount;
    $bill = "Bill-".$randss;




    $sql = "INSERT INTO orders(bill_no, date_time , gross_amount , vat_charge_rate , vat_charge_amount , net_amount ,  table_id , store_id ) VALUES ('$bill', '$date', '$totalAmount' , '$vatrate', '$vatamount', '$netamount','$tblid' , '$branch' )";
    if($conn->query($sql) === TRUE) {
      $sql = "INSERT INTO requests (table_no, request_name, status) VALUES ('1', 'Bill out' , 'Pending')";
      if($conn->query($sql) === TRUE) {
              header('location:../order/');

      } else {
          echo "Error " . $sql . ' ' . $connect->connect_error;
      }

    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }

    $conn->close();
}

?>
