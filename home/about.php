<?php include("../core/verification.php");?>
<?php include("../layout/head.php");  ?>
<style type="text/css">

  html,
  body,
  header,
  .carousel {
    height: 60vh;
  }

  @media (max-width: 740px) {
    html,
    body,
    header,
    .carousel {
      height: 100vh;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .carousel {
      height: 100vh;
    }
  }

  @media (min-width: 800px) and (max-width: 850px) {
          .navbar:not(.top-nav-collapse) {
              background: #929FBA!important;
          }
      }
</style>


<header>


<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong>Learn Bootstrap 4 with MDB</strong>
            </h1>

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
              <i class="fa fa-graduation-cap ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/First slide-->

    <!--Second slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong>Learn Bootstrap 4 with MDB</strong>
            </h1>

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
              <i class="fa fa-graduation-cap ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
      <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

          <!-- Content -->
          <div class="text-center white-text mx-5 wow fadeIn">
            <h1 class="mb-4">
              <strong>Learn Bootstrap 4 with MDB</strong>
            </h1>

            <p>
              <strong>Best & free guide of responsive web design</strong>
            </p>

            <p class="mb-4 d-none d-md-block">
              <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written versions
                available. Create your own, stunning website.</strong>
            </p>

            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white btn-lg">Start free tutorial
              <i class="fa fa-graduation-cap ml-2"></i>
            </a>
          </div>
          <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

      </div>
    </div>
    <!--/Third slide-->

  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

</header>

<!--Main layout-->
<main>
<div class="container">

  <!--Section: Main info-->

  <!--Section: Main info-->

  <hr class="my-5">

  <!--Section: Main features & Quick Start-->
  <section>

    <h3 class="h3 text-center mb-5">About MDB</h3>

    <!--Grid row-->
    <div class="row wow fadeIn">

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 px-4">

        <!--First row-->
        <div class="row">
          <div class="col-1 mr-3">
            <i class="fa fa-code fa-2x indigo-text"></i>
          </div>
          <div class="col-10">
            <h5 class="feature-title">Bootstrap 4</h5>
            <p class="grey-text">Thanks to MDB you can take advantage of all feature of newest Bootstrap 4.</p>
          </div>
        </div>
        <!--/First row-->

        <div style="height:30px"></div>

        <!--Second row-->
        <div class="row">
          <div class="col-1 mr-3">
            <i class="fa fa-book fa-2x blue-text"></i>
          </div>
          <div class="col-10">
            <h5 class="feature-title">Detailed documentation</h5>
            <p class="grey-text">We give you detailed user-friendly documentation at your disposal. It will help you to implement your ideas
              easily.
            </p>
          </div>
        </div>
        <!--/Second row-->

        <div style="height:30px"></div>

        <!--Third row-->
        <div class="row">
          <div class="col-1 mr-3">
            <i class="fa fa-graduation-cap fa-2x cyan-text"></i>
          </div>
          <div class="col-10">
            <h5 class="feature-title">Lots of tutorials</h5>
            <p class="grey-text">We care about the development of our users. We have prepared numerous tutorials, which allow you to learn
              how to use MDB as well as other technologies.</p>
          </div>
        </div>
        <!--/Third row-->

      </div>
      <!--/Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12">

        <p class="h5 text-center mb-4">Watch our "5 min Quick Start" tutorial</p>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cXTThxoywNQ" allowfullscreen></iframe>
        </div>
      </div>
      <!--/Grid column-->

    </div>
    <!--/Grid row-->

  </section>
  <!--Section: Main features & Quick Start-->

  <hr class="my-5">

  <!--Section: Not enough-->



  <!--Section: More-->

  <!--Section: More-->

</div>
</main>


<?php include("../layout/foot.php"); ?>
