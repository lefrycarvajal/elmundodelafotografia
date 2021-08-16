<?php 

include_once("header.php")

?>


                  <!-- Banner section -->
                  <section id="banner" class="js-fullheight">
            <div class="flexslider js-fullheight">
               <!-- Social -->
               <ul class="list-unstyled ml-5 mt-3 position-relative social-links">
                  <li class="mb-3"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-behance"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                  <li class="mb-3"><a href="#"><i class="fab fa-instagram"></i></a></li>
               </ul>
               <!-- Slider -->
               <ul class="slides">
                  <li style="background-image: url(images/slide_3.jpg);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc">
                                 <h2>UNETE</h2>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                 
               </ul>
            </div>
         </section>
         <!-- End Banner Section -->

         <!-- Contact Section -->
         <section id="contact" class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>UNETE</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">UNETE</span>
                     <p>Si quieres ser parte de nuestra familia llena nuestro fromulario para poder entrar, tambien puedes escrbirnos a nuestreo correo electronico.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3 col-md-push-1">
                     <ul class="contact-info">
                        <li><i class="fas fa-map-marked-alt"></i>pianti 456 esquina duarte</li>
                        <li><i class="fas fa-phone-alt"></i>+849-564-8833</li>
                        <li><i class="fas fa-envelope"></i><a href="#">emdf@gmail.com</a></li>
                     
                     </ul>
                  </div>
                  <div class="col-md-7 col-md-push-1">
                     <div class="row">
                         <form action="contact2reg.php" method="POST">
                        <div class="col-md-6">
                        <div class="form-group">
                              <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Correo" name="Email">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <textarea class="form-control" id="Mensaje" cols="30" rows="7" placeholder="Mensaje" name="Mensaje"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group text-right">
                              <input type="submit" value="Enviar" class="btn btn-primary" name="enviar">
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact Section -->

<?php 

include_once("footer.php")

?>