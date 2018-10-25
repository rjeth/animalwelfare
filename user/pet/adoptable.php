<?php require_once("../../core/session.php"); ?>
<?php require_once("../../core/config.php"); ?>
<?php include("../../layout/head2.php");  ?>

  <style type="text/css">
    /* Necessary for full page carousel*/
    html,
    body,
    header,
    .view {
      height: 100%;
    }

    /* Carousel*/
    .carousel,
    .carousel-item,
    .carousel-item.active {
      height: 100%;
    }
    .carousel-inner {
      height: 100%;
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
          background: #1C2331!important;
      }
  }

  </style>
  <!-- Navbar -->

<main class="mt-5 pt-5 pb-5">
    <div class="container">
      <!--Section: Main features & Quick Start-->
      <section class="mb-5">
            <h2 class="font-weight-bold mt-lg-5 mb-5 pb-4"><strong>Adoptable Pets</strong></h2>
            <section class="mb-5">
              <!-- Search form -->
              <label for="textInput">Search</label>
              <input type="text" id="search" name="search" class="form-control mb-4" placeholder="Text input">
              <div class="row">
              <div class="col-md-4">
                <label for="select">Type/label>
                <select class="browser-default custom-select mb-4" id="select">
                  <option value="" disabled="" selected="">Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="select">Location</label>
                <select class="browser-default custom-select mb-4" id="select">
                  <option value="" disabled="" selected="">Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
              </div>
              <div class="col-md-4">
                 <button class="btn btn-info btn-block my-4" type="submit">Search</button>
              </div>
            </div>
          </section >
            <!-- Search form -->
                  <div class="row">
                    <div id="display">

                    </div>
                  </div>
              </section>
      <!--Section: Main features & Quick Start-->
    <hr class="mb-5">
  <!--Section: More-->
      <!--Section: More-->
  </div>
  </main>
  <!--Main layout-->


   <script type="text/javascript" src="pet.js"></script>>
  <script>
      $(document).ready(function(){
      $('input.typeahead').typeahead({
          name: 'typeahead',
          remote:'search.php?key=%QUERY',
          limit : 10
      });
  });
      </script>

<?php include("../../layout/foot.php"); ?>
