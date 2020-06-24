 <?php
        if($_SESSION["session"] == "User"){
           
        }else{
      echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>';

          }          
          ?>

<!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
            </div>
            <div class="col-lg-6 info-right">
              <h6>Acerca de nosotros</h6>
              
              <p>
                DesTica es una empresa de turismo nacional, que ofrece las mejores experiencias para su familia.
              </p>
              <h6>Valoración general 0 a 10 :</h6>
              <h4>
              <div class="alert alert-success" role="alert">
              <?php echo number_format ($valoration,2); ?>
              </div>
              </h4>
              <h6>Esta valoración es obtenida a través de las opiniones dadas por nuestros usuarios.</h6>
              <p>
              <h6>Desarrolladores:</h6>
              <p>
                Leandro Quesada <br>
                Anthony Salazar
              </p>
               <h6>Contacto:</h6>
              
              <p>
                Tel: <a href="tel:+50612345678">+50612345678</a><br>
                Correo: <a href="mailto:destica@costarricenense.cr">destica@costarricenense.cr</a> 
              </p>
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->