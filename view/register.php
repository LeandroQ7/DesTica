<?php    
        include_once 'header.php';          
?>
    <!-- Start about-info Area -->
      <section class="about-info-area section-gap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 info-right">
              <h1>Bienvenidos a DesTica</h1>
              <form class="form-signin">
                <div class="text-center mb-4">
                  <img class="mb-4" src="view/img/logo.png" alt="" width="72" height="72">
                  <p>Por favor ingrese sus datos personales para crearte una nueva cuenta.</p>
                </div>

                <div class="form-label-group">
                  <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
                  <label for="inputName">Nombre</label>
                </div>

                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
            </form>
            </div>
            <div class="col-lg-6 info-left">
              <img class="img-fluid" src="view/img/about/info-img.jpg" alt="">
            </div>
          </div>
        </div>  
      </section>
      <!-- End about-info Area -->
<?php
  include_once 'footer.php';          
?>