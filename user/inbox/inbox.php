<?php include("../../layout/head2.php");  ?>

  <style>
        .avatar-sm {
            width: 56px;
            border-radius: 50%;
        }
        .scrollbar-deep-purple::-webkit-scrollbar-track {
          -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-deep-purple::-webkit-scrollbar {
              width: 12px;
              background-color: #F5F5F5; }

              .scrollbar-deep-purple::-webkit-scrollbar-thumb {
                border-radius: 10px;
                  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                  background-color: #512da8; }
              .example-1 {
              position: relative;
              overflow-y: scroll;
              height: 600px; }
              .chat-message-type {
                -webkit-box-flex: 1!important;
                -webkit-flex: 1 0 auto!important;
                -ms-flex: 1 0 auto!important;
                flex: 1 0 auto!important
              }

    </style>
  <!-- Navbar -->

  <main class="mt-5 pt-5 pb-5">
      <div class="container">
          <!--Section: Post-->
          <section class="mt-4">

              <!--Grid row-->
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class=" mb-4 wow fadeIn">
                            <!--Card content-->
                            <div class="">
                              <div class="md-form mb-4">
                                <i class="fa fa-search prefix"></i>
                                <input type="text" id="searchConv" class="form-control" placeholder="search">
                              </div>
                              <div class="list-group scrollbar-deep-purple  thin example-1">

                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media active">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">

                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Dawid Adach</strong></hp>
                                   <small>13 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>
                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://secure.gravatar.com/avatar/8c051fd54e4c811e02bbc78d50549280?s=150&amp;d=mm&amp;r=g">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Michal Szymanski</strong></hp>
                                   <small>14 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><span class="badge red">MDB Team</span> <strong>Michal: </strong> Donec id elit non
                                   mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                           </a>
                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/piotr.jpg">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Piotr Bender</strong></hp>
                                   <small>15 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>Piotr: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>

                           <!-- Sinle message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/michal.jpg">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Michal Krawczyk</strong></hp>
                                   <small>16 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>
                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/laura.jpg">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Laura Choromanska</strong></hp>
                                   <small>16 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>Laura: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>
                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/bartek.jpg">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Bartłomiej Malanowski</strong></hp>
                                   <small>16 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>Miroslaw: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>
                           <!-- Single message -->
                           <a href="#" class="list-group-item list-group-item-action media">
                               <!-- Avatar -->
                               <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/filip.jpg">
                               <!-- Author -->
                               <div class="d-flex justify-content-between mb-1 ">
                                   <hp class="mb-1"><strong>Filip Kapusta</strong></hp>
                                   <small>16 July</small>
                               </div>
                               <!-- Message -->
                               <p class="text-truncate"><strong>You: </strong> Donec id elit non mi porta gravida at eget metus. Maecenas
                                   sed diam eget risus varius blandit.</p>
                           </a>

                       </div>


                            </div>
                        </div>
                </div>

                  <!--Grid column-->
                  <div class="col-md-8 mb-4">

                      <!--Featured Image-->

                      <div class="card mb-3 wow fadeIn scrollbar-deep-purple  thin example-1">
                          <div class="card-body">

                              <!-- Default form reply -->
                              <div >
                                <div class="text-center"><small>16 July, 23:54</small></div>
                                  <div class="d-flex justify-content-end">
                                    <p class="primary-color rounded p-3 text-white w-75 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                    </div>
                                  </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>
                              <div >
                                <div class="text-center"><small>16 July, 23:55</small></div>
                                  <div class="d-flex justify-content-start media">
                                  <img class="mr-3 avatar-sm float-left" src="https://mdbootstrap.com/img/Photos/Avatars/adach.jpg">
                                  <p class="grey lighten-3 rounded p-3 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae modi exercitationem
                                      dignissimos repellat, voluptas iure quod aliquid voluptatem perspiciatis quidem
                                      sit eos, cum fugit voluptatibus quos laboriosam sed tenetur voluptate!</p>
                                </div>
                              </div>



                          </div>
                      </div>
                      <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex flex-row">
                                        <div class="md-form chat-message-type ">
                                            <textarea type="text" id="form7" class="form-control" rows="4" style="padding: 15px;"></textarea>

                                        </div>
                                        <div class="mt-5">
                                            <a class="btn btn-primary btn-lg waves-effect waves-light">Send</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                  </div>


              </div>
              <!--Grid row-->

          </section>
          <!--Section: Post-->

      </div>
  </main>
<?php include("../../layout/foot.php"); ?>
