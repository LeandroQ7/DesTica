<?php    
        include_once 'headerUser.php';          
?>
    <!-- Start about-info Area -->
      <section >
        <div class="container">
         
          <section class="destinations-area section-gap">
            <form action="?destiny=details" method="post">
            <div class="col-lg-12">
              <div class="single-destinations">
               
                <div class="details">
                  <h4>Lista de tus atractivos favoritos</h4>
                 
                  <ul class="package-list">
                    <li class="d-flex justify-content-between align-items-center">
                       
                      <span>Playa Avellanas, Guanacaste</span>
                     

                      <button type="submit" class="btn btn-link"> <img src="view/img/img2.png"  width="100" height="100">Detalles</button>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                       
                      <span>Volcan Arenal</span>

                       <button type="submit" class="btn btn-link"> <img src="view/img/img1.png"  width="100" height="100">Detalles</button>
                    </li>
                                           
                  </ul>
                              <div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#">1</a>
  
  <a href="#">&raquo;</a>
</div>
                </div>

              </div>

            </div>


            
         </form>
      </section>
        </div>  

      </section>
      <!-- End about-info Area -->
<?php
  include_once 'footer.php';          
?>