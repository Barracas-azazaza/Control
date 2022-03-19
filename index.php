<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  require("archivos/head.inc");
  ?>
</head>

<body>

  <?php
  require("archivos/header.inc");
  require("archivos/nav.inc");
  ?>
  <!-- Slideshow container -->
  <section>
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="recursos/images/slide11.jpg" alt="" style="width:100%">
        <div class="botonslide">Gestionar Equipos ></div>
        <div class="text">Toma el control de tus equipos</div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="recursos/images/slide1.jpg" alt="" style="width:100%">
        <div class="text">Revisa el estado de tus equipos</div>
        <div class="botonslide">Consultas ></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="recursos/images/slide2.png" alt="" style="width:100%">
        <div class="text">En Tiempo Real</div>
        <div class="botonslide">Reportes ></div>
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </section>
  <div class="lineaAzul">
    <h2>Conociendo sobre inventarios</h2>
  </div>
  <article class="grid-container">
    <div class="item1">
      <h3>Importancia de Los Inventarios:</h3> Las empresas deben tener un correcto control de su inventario. ¿Por qué? Es muy sencillo: una gestión confiable de los inventarios implica mejores decisiones, reducción de costos, mayor rentabilidad y clientes más contentos.
    </div>
    <div class="item2">
      <h3>Equipos de Telecomunicaciones:</h3>Las telecomunicaciones en empresas son una herramienta de importancia vital para los negocios hoy en día. Las telecomunicaciones permiten a las empresas comunicarse de manera efectiva con los clientes y ofrecen un alto nivel de servicio y atención al cliente. Son también un elemento clave en el trabajo en equipo, lo que permite a los trabajadores colaborar fácilmente desde cualquier lugar donde encuentren trabajando a modo de oficina virtual.
    </div>
  </article>


  <?php
  require("archivos/footer.inc");

  ?>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


</body>

</html>