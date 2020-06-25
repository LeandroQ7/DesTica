<!-- Start about-info Area -->
<section >
  <div class="container">

    <section class="destinations-area section-gap">

      <h4>Hemos encontrado los siguientes destinos, que podrían ser de interes.</h4>

      <div class="album py-5 bg-light">
        <div class="container">


          <div class="row">


            <?php

            if(isset($interestResults)){

             foreach ($interestResults as $item):
              ?>

              
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                  <img class="card-img-top" src="public/img/<?php echo $item[3] ?>" alt="Card image cap" width="250" height="250">
                  <div class="card-body">
                    <p class="card-text"><?php echo $item[2] ?></p>
                    <span>Precio:</span>
                    <a  class="price-btn">$<?php echo $item[1] ?></a>
                    <div class="d-flex justify-content-between align-items-center">

                      <form action="?destiny=details" method="post">
                        <div class="btn-group">
                          <input type="text" id="ID" name="ID" value="<?php echo $item[0]?>" style="display:none;">
                          <button type="submit" class="btn btn-sm btn-primary">Ver detalles</button>

                        </div>
                      </form>
                      <small class="text-muted">9 mins</small>
                    </div>
                  </div>
                </div>
              </div>


              <?php
            endforeach; 

          }
          ?>



        </div>
      </div>

    </div>

  </section>
</div>  

</section>
      <!-- End about-info Area -->