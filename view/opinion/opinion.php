<!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="public/img/about/info-img.jpg" alt="">
            </div>
            <div class="col-lg-6 info-right">
              <h6>Califica nuestro sitio</h6>
              <p></br>Si quieres calificar nuestro sitio, completa las siguientes preguntas. Tus respuestas ayudaran a mejorar la página.</p>
              <form class="form" action="?opinion=setOpinion" method="post">
                <div class="form-row">
                  <div class="col-lg-7 info-left">
                    <label for="radio">Puntuación del Sitio</label><br>
                    <input type="radio" id="10" name="radio" value="10">
                    <label >10</label>
                    <input type="radio" id="9" name="radio" value="9">
                    <label >9</label>
                    <input type="radio" id="8" name="radio" value="8">
                    <label >8</label>
                    <input type="radio" id="7" name="radio" value="7">
                    <label >7</label>
                    <input type="radio" id="6" name="radio" value="6">
                    <label >6</label>
                    <input type="radio" id="5" name="radio" value="5">
                    <label >5</label>
                    <input type="radio" id="4" name="radio"  value="4">
                    <label >4</label>
                    <input type="radio" id="3" name="radio"  value="3">
                    <label >3</label>
                    <input type="radio" id="2" name="radio"  value="2">
                    <label >2</label>
                    <input type="radio" id="1" name="radio"  value="1">
                    <label >1</label>
                    <label for="comentario">Comentario (Opcional)</label>
                    <textarea rows = "5" cols = "30" id = "comentario" name = "comentario"><?php //echo $valor; ?></textarea>
                  </div>
                  <p>
                </div>
                <button id="btnopinion" class="btn btn-success" type="submit">Enviar Opinión</button>
              </form>
              <div class="alert alert-warning" role="alert">
                <?php if($msg!=null){echo $msg;} ?>
              </div>
              </p>
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area 
      <script src="public/js/opinion.js"></script>-->