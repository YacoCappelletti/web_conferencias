<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
        <h3>Sobre <span>gdlwebcamp</span></h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore saepe quasi dignissimos
           labore sequi velit expedita eligendi dolore voluptatibus reiciendis, enim consequatur cum? Nisi
            accusamus amet sapiente vitae asperiores tenetur?</p>
    </div>
    <div class="ultimos-tweets">
      <h3>Ultimos <span>tweets</span></h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore saepe quasi dignissimos
        labore sequi velit expedita eligendi dolore voluptatibus reiciendis, enim consequatur cum? Nisi
         accusamus amet sapiente vitae asperiores tenetur?</p>
    </div>
    <div class="menu">
      <h3>Redes <span>Sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyrigth">Todos los derechos reservados GDLWEBCAM 2020</p>


</footer>


  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.lettering.js"></script>
  
  <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace('.php', "", $archivo);
      if($pagina == 'invitados' || $pagina =='index'){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
      }else if($pagina == 'conferencia'){
        echo '<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>';
      }
  ?>
  <script src="js/main.js"></script>





  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>0
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
