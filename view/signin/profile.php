
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
            <div class="col-lg-6 info-right">
              
              <h4>Tus datos personales </h4>

                      <?php

             if(isset($profileData)){
              foreach ($profileData as $item): 
               ?>
              <form class="form-signin" action="?profile=updateData" method="post">
              

                <div class="form-label-group">
                   <label >Nombre</label>
                  <input type="text" id="inputName" name="inputName" class="form-control" value="<?php echo $item[0]?>" required autofocus>
                 
                </div>

                <div class="form-label-group">
                  <label for="inputEmail">Correo</label>
                  <input type="email" id="inputEmail" name="inputEmail" class="form-control" value="<?php echo $item[1]?>"  required autofocus>
               
                  
                </div>

                <div class="form-label-group">
                  <label for="validationTooltip04">Ambiente Preferido</label>
                <select class="custom-select" name="environment" id="environment" required>
                <option value="" disabled>Seleccione un ambiente</option>
                <option <?php if ($item[2] == "Playa" ) echo 'selected' ; ?> value="Playa">Playa</option>
                <option <?php if ($item[2] == "Montaña" ) echo 'selected' ; ?> value="Montaña">Montaña</option>
                <option <?php if ($item[2] == "Ciudad" ) echo 'selected' ; ?> value="Ciudad">Ciudad</option>
                <option <?php if ($item[2] == "Historico") echo 'selected' ; ?> value="Historico">Historico</option>
              </select>
                </div>
                <div class="form-label-group">
                     <label for="validationTooltip04">Tipo de camino prefirido</label>
              <select class="custom-select" name="road_type" id="road_type" required>
                <option value="" disabled>Seleccione un camino </option>
                <option <?php if ($item[3] == "Asfaltado" ) echo 'selected' ; ?> value="Asfaltado">Asfaltado</option>
                <option <?php if ($item[3] == "Lastre" ) echo 'selected' ; ?> value="Lastre">Lastre</option>
                <option <?php if ($item[3] == "Tierra" ) echo 'selected' ; ?> value="Tierra">Tierra</option>
              </select>

                </div>
                <div class="form-label-group">
                   <label for="validationTooltip04">Tipo de clima favorito</label>
              <select class="custom-select" name="weather" id="weather" required>
                <option value="" disabled>Seleccione un tiempo </option>
                <option <?php if ($item[4] == "Caluroso" ) echo 'selected' ; ?> value="Caluroso">Caluroso</option>
                <option <?php if ($item[4] == "Humedo" ) echo 'selected' ; ?> value="Humedo">Humedo</option>
                <option <?php if ($item[4] == "Lluvioso" ) echo 'selected' ; ?> value="Lluvioso">Lluvioso</option>
              </select>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar Datos</button>
            </form>

              <?php
              break;
              endforeach;
            }
            ?>


            </div>
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->
