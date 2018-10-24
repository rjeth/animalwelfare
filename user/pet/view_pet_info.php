<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php"); ?>
<main class="mt-5 pt-5 pb-5">
    <div class="container">
        <!--Section: Post-->
        <section class="mt-4">

            <!--Grid row-->
            <div class="row">
              <?php
              require_once '../../core/config.php';
              if($_GET['pet_id']) {
                  $id = $_GET['pet_id'];
                  $sql = "SELECT * FROM tbl_pets WHERE pet_id = {$id}";
                  $result = $connect->query($sql);
                  $data = $result->fetch_assoc();
                  ?>
                    <div class="card col-md-8 mx-auto wow fadeIn">
                      <!--Card content-->
                        <div class="card-body">
                            <p class="h5 my-4">That's a very long heading </p>
                          <img src="../home/upload/<?php echo $data['pet_image']; ?>" class="img-fluid" alt="Responsive image">
                            <p class="h5 my-4"><?php echo $data['pet_name']; ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae, ut rerum deserunt corporis
                                ducimus at, deleniti ea alias dolor reprehenderit sit vel. Incidunt id illum doloribus,
                                consequuntur maiores sed eligendi.</p>
                        </div>
                    </div>
                    <?php } ?>

            </div>
          <!--Grid row-->
        </section>
        <!--Section: Post-->

    </div>
</main>




   <?php include("../../layout/foot.php"); ?>
