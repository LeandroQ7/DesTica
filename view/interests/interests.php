 <?php
        if($_SESSION["session"] == "User"){
           
        }else{
      echo '<script type="text/javascript">',
     'headerAdmin();',
     '</script>';

          }          
          ?>
<!-- Start about-info Area -->
<form type="submit" action="?interest=search" method="post">
  <section class="about-info-area section-gap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 info-right">
            <h6>Quieres recibir recomendaciones de atractivos?</h6>
            <p>
              Completa la siguiente serie de preguntas, al recibir tus respuestas nuestro sistema determinara sitios turísticos que podría serle de real interés.
            </p>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Ambiente Preferido</label>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="" disabled>Seleccione un ambiente</option>
                <option selected  value="Playa">Playa</option>
                <option value="Montaña">Montaña</option>
                <option value="Montaña">Ciudad</option>
                <option value="Montaña">Rural</option>
              </select>
          
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Rango de tiempo deseado</label>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="" disabled>Seleccione un tiempo </option>
                <option selected  value="horas">1 a 5 horas</option>
                <option value="dia">Día completo</option>
                <option value="Montaña">Mas de un día</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationTooltip04">Condicion de vía</label>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="" disabled>Seleccione tipo de camino </option>
                <option selected value="">Asfaltado</option>
                <option value="Playa">De piedra o barro</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
        
            <div class="col-md-4 mb-3">
              <label for="validationTooltip05">Cantidad de Personas</label>
                <br/>
              <select class="custom-select" id="validationTooltip04" required>
                <option value="" disabled>Seleccione el numero de personas</option>
                <option select value="pequeño">1 a 3 personas</option>
                <option value="mediano">4 a 7 personas</option>
                <option value="grande">Más de 8 personas</option>
              </select>
              <div class="invalid-tooltip">
                Por favor seleccione una opción.
              </div>
            </div>
            

       
          </div>
          <!-- End for Interest-->
               <button type="submit" class="btn btn-success" >Enviar Respuestas</button> 
        </div>
      </div> 
  </section>
</form>
<!-- End about-info Area -->