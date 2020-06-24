 <?php
        if($_SESSION["session"] == "User"){
           
        }else{
      echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>';

          }          
          ?>

<!-- Start about-info Area -->
      <section >
        <div class="container">

         
          <section class="destinations-area section-gap">
             <h4>Lista de Atractivos Turisticos</h4>

            <form action="?destiny=details" method="post">
              
               <div class="single-destinations">

                <div class="details">
                 
                  <table class="listTable">

                    <tr>
                      <th>Posición</th>
                      <th>Nombre</th>
                      <th></th>
                      <th>Acción</th>
                    </tr>


                    <?php

                    if(isset($myList)){

                     $posicion=0;
                     foreach ($myList as $item): 
                      $posicion++;

                      ?>


                      <tr>
                        <td><?php echo $posicion ?></td>
                        <td><?php echo $item[0] ?></td>
                        <td><img class="img-fluid" src="public/img/about/info-img.jpg" alt="" width="100" height="100"></td>
                        <td><input type="submit"  value="Ver Detalles" name="submit" id="submit" /></td>
                      </tr>
                    <?php endforeach;
                  }
                  ?>

                </table>

              </div>
            </div>


            
         </form>
      </section>
        </div>  

      </section>
      <!-- End about-info Area -->