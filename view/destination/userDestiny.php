<?php
        if($_SESSION["session"] == "User"){
           
            echo $_SESSION["session"];
        }else
          {
            echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>'
;
              echo $_SESSION["session"] ;

          }
            
          ?>
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
  

    <section class="destinations-area section-gap">

        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Destinos Segun tu perfil</h1>


              </div>
            </div>
          </div>            
          <div class="row">

            <div class="col-lg-12">
              <div class="single-destinations">

                <div class="details">
                  <h4>Lista de Atractivos Turisticos</h4>



                  <table class="listTable">

                    <tr>
                      <th>Posición</th>
                      <th>Nombre</th>
                      <th></th>
                      <th>Acción</th>
                    </tr>


                    <?php

                    if(isset($destiny)){

                     $posicion=0;
                     foreach ($destiny as $item): 
                      $posicion++;

                      ?>
                        <form action="?destiny=details" method="post">

                      <tr>
                        <td><?php echo $posicion ?></td>
                        <td><?php echo $item[2] ?></td>
                        <td><img class="img-fluid" src="public/img/<?php echo $item[3]?>" alt="" width="100" height="100"></td>
                        <td><input type="text" id="ID" name="ID" value="<?php echo $item[1]?>" style="display:none;">
                          <input type="submit"  value="Ver Detalles" name="submit" /></td>
                      </tr>

                    </form>
                    <?php endforeach;
                  }
                  ?>

                </table>

              </div>
            </div>
          </div>




        </div>
      </div>  
  
  </section>




</div>  

</section>
<!-- End about-info Area -->