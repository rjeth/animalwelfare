<?php include '../../layout/header.php';?>


    <!-- Start your project here-->
    <div class="container-fluid" >

   <div class="row">




<?php
include_once("../../data/config.php");
$sql = "SELECT * FROM category ORDER BY  `name` ASC ";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $record = mysqli_fetch_assoc($resultset) ) {
    $stat =  $record['active'];

    if ($stat == 1){
      $inds = '%["'.$record['id'].'"]';
      include_once("../../data/config.php");
      $sql = "SELECT * FROM products WHERE category_id LIKE '$inds'  LIMIT 1";
      $res= mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
      while( $rec= mysqli_fetch_assoc($res) ) {

      echo "<a class='card' href=../menu/index.php?id=".$record['id']."  style='width: 36.5rem; margin: 5px; color: black'>
      <img class='card-img-top' src='../../../".$rec['image']."' alt='Card image cap' style='height:300px'>
      <div class='card-body'>
        <h4 class='card-title'>".$record['name']."</h4>
        <p class='card-text'>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
    </a>";

  }
}
    else
    {echo "";}


    ?>
   <?php } ?>
</div>

    </div>



<?php include '../../layout/footer.php';?>
