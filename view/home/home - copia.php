
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
    <div class="row align-items-center">
      <div class="col-lg-6 info-right">
        <h1>Bienvenidos a DesTica</h1>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>

          

      </div>
      <div class="col-lg-6 info-left">
        <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
      </div>
    </div>

    <section class="destinations-area section-gap">

        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Top 10 de los mejores destinos</h1>


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

                    if(isset($topten)){

                     $posicion=0;
                     foreach ($topten as $item): 
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


<?php if($_SESSION["session"] != "User"){  ?>

<section class="destinations-area section-gap">

        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Recomendaciones segun tu perfil</h1>


              </div>
            </div>
          </div>            
          <div class="row">

            <div class="col-lg-12">
              <div class="single-destinations">

                <div class="details">
                  <h4>Lista de Atractivos Turisticos</h4>


                  <?php

                  $link = mysqli_connect("163.178.107.10", "laboratorios", "UCRSA.118", "dbdestica");
                    
                  // Attempt select query execution
                  $sql = "call sp_topten_list()";
                  if($result = mysqli_query($link, $sql)){
                    $values=mysqli_fetch_array($result);
                    //var_dump($values);
                      if(mysqli_num_rows($result) > 0){
                          echo "<table class='listTable'>";
                              echo "<tr>";
                                  echo "<th>Posicion</th>";
                                  echo "<th>Nombre</th>";
                                  echo "<th></th>";
                                  echo "<th>Acción</th>";
                              echo "</tr>";
                              $posicion=0;
                          while($row = mysqli_fetch_array($result)){
                            $posicion++;
                            echo "<form action='?destiny=details' method='post'>";

                              echo "<tr>";
                                  echo "<td>" . $posicion . "</td>";
                                  echo "<td>" . $row['title'] . "</td>";
                                  echo "<td> <img class='img-fluid' src='public/img/".$row['image']."' width='100' height='100'> </td>";
                                  echo "<td> <input type='text' id='ID' name='ID' value='".$row['iddestination']."' style='display:none;'>
                                   <input type='submit' value='Ver Detalles' name='submit' /> </td>";
                              echo "</tr>";

                               echo "</form>";
                          }
                          echo "</table>";
                          // Free result set
                          mysqli_free_result($result);
                      }
                  }  
                  // Close connection
                  mysqli_close($link);
                  ?>

              </div>
            </div>
          </div>




        </div>
      </div>  
  
  </section>

  <?php }  ?>


</div>  

</section>
<!-- End about-info Area -->