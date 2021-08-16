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
                  <li style="background-image: url(images/slide_1.jpg);">
                     <div class="overlay-gradient"></div>
                     <div class="container">
                        <div class="col-md-8 js-fullheight slider-text">
                           <div class="slider-text-inner">
                              <div class="desc">
                                 <h2>CONTACTO</h2>
                                
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
                        <h2>CONTACTO</h2>
                        <span></span>
                     </div>
                     <span class="heading-meta-sub">CONTACTO</span>
                     
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
                     <?php 
					if($_POST)
					{
						//echo"Formulario enviado!";
						/*Recibimos los datos desde el Form*/
						$Nombre = $_POST['Nombre'];
						$Email = $_POST['Email'];
                  $Mensaje = $_POST['Mensaje'];
						
						/*Validando los datos*/
						if(empty($Nombre))
						{
							echo"<h2>¡Porfavor digite el Nombre!</h2>";
						}
						if(empty($Email))
						{
							echo"<h2>¡Porfavor digite su Email!</h2>";
						}
                  if(empty($Mensaje))
						{
							echo"<h2>¡Porfavor digite su Mensaje!</h2>";
						}
						
						/*Verificamos de forma conjunto que no haya ningun campos 
						obligatorio vacio*/
						if( (!empty($Nombre)) && (!empty($Email)) && (!empty($Mensaje)) )
						{
							/* Conexion a la base de datos*/
							/*Datos del Servidor MySql*/ 
							$Servidor="localhost";
							$UsarioDB="root";
							$ClaveDB="";
							$DB="dbelmundodelafotografia";
							
							/*Realizamos la conexion a la DB y verificamos si fue exitosa*/
							$Conectarme= mysqli_connect($Servidor,$UsarioDB,$ClaveDB,$DB) or die ("Error con la Base de Datos") ;
							
							/*Guardar (insertar) el registro, verificando si fue 
							exitoso o no*/
							$Guardar="
								INSERT INTO contacto 
									(nombre, email, mensaje)
								VALUES
									('$Nombre','$Email', '$Mensaje')
							";
							
							if(mysqli_query($Conectarme,$Guardar))
							{
								echo"<h2>¡Gracias! su mensaje ha sido enviado.</h2>";
								echo"<h3><h2><a href='contact.php'>Contactar de nuevo.</a></h2>";
							}else{
								echo"<h3>Los sentimos, ha fallado el Registro!.</h3>";
							}
							
							
						}else
						{
							echo"<h2>¡Faltan contactos por llenar!</h2>";
						}
						
						
					}
				?>      
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Contact Section -->

<?php 

include_once("footer.php")

?>