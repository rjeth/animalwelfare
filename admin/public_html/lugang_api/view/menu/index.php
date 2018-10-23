
<?php

if($_GET['id']) {



  $inds = '%["'.$_GET['id'].'"]';
  $ids = $_GET['id']; 
?>
<?php include '../../layout/header2.php';?>


    <!-- Start your project here-->
    <div class="container-fluid" >

   <div class="row">

   	<?php
include_once("../../data/config.php");
$sql = "SELECT * FROM products WHERE category_id LIKE '$inds' ";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {

?>


<a class="card" href="selectorder.php?id=<?php echo $record['id'];?>"  style="width: 18rem; margin: 5px; color: black">
  <?php
  $stat =  $record['active'];$stat1 =  $record['quantity'];
  if ($stat == 1 && $stat1 != '0'){ echo "<img class='card-img-top' src='../../../".$record['image']."' alt='Card image cap' >";}
  else
  {echo "  <img class='card-img-top' src='../../../".$record['image']."' alt='Card image cap' style='-webkit-filter: grayscale(100%);
    filter: grayscale(100%);'> <div class='card-img-overlay'>
     <h2 class='card-text pull-right' style='color: red ; font-weight: bold; '>
     Not Available
     </h2>
     </div>";}?>


  <h6 class="card-title"></h6>
  <div class="card-body">
    <h5 class="text-left" data-target="#nam"><?php echo $record['name']; ?></h5>
    <p class="card-text" ><?php echo $record['description']; ?></p>





    <!--button type="button" href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target="#exampleModal">ADD To CART</button-->
  </div>
  <div class="card-footer">
      <h5 ><span class="badge badge-warning">₱ <?php echo $record['price']; ?></span></h5>
  </div>
</a>


   <?php } ?>

   <!-- Modal -->



</div>

    </div>
    <!-- /Start your project here-->
  <?php  } ?>


<?php include '../../layout/footer.php';?>
