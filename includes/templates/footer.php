<footer class="site-foot">
  <div class="contenedor clearfix">
    <div class="foot-info">
      <h3>Sobre <span>MtyWebCamp</span></h3>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam
        assumenda laborum sed labore. Asperiores et consequuntur, inventore
        repudiandae facilis perspiciatis ipsum consequatur ab impedit saepe
        illo quas accusantium perferendis similique.
      </p>
    </div>
    <div class="ultimos-tweets">
      <h3>ultimos <span>tweets</span></h3>
      <ul>
        <li>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sit ex
          explicabo libero laudantium expedita nulla blanditiis temporibus
          vero.
        </li>
        <li>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sit ex
          explicabo libero laudantium expedita nulla blanditiis temporibus
          vero.
        </li>
        <li>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sit ex
          explicabo libero laudantium expedita nulla blanditiis temporibus
          vero.
        </li>
      </ul>
    </div>
    <div class="menu">
      <h3>redes <span>sociales</span></h3>
      <nav class="redes-sociales">
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
        <a href=""><i class="fab fa-pinterest"></i></a>
        <a href=""><i class="fab fa-youtube"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copy">Todos los Derechos Reservados MTYWEBCAMP 2020 &copy;</p>
</footer>

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup {
    background: #fff;
    clear: left;
    font: 14px Helvetica, Arial, sans-serif;
  }

  /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div style="display: none">
  <div id="mc_embed_signup">
    <form action="https://gmail.us19.list-manage.com/subscribe/post?u=e463f869d2d8c067c24b691c2&amp;id=3abd325ead" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
        <h2>Subscribete</h2>
        <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
        <div class="mc-field-group">
          <label for="mce-EMAIL">Correo Electronico <span class="asterisk">*</span>
          </label>
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
        </div>
        <div class="mc-field-group">
          <label for="mce-FNAME">Nombre </label>
          <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
        </div>
        <div class="mc-field-group">
          <label for="mce-LNAME">Apellido </label>
          <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
        </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e463f869d2d8c067c24b691c2_3abd325ead" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="Subscribirse" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
      </div>
    </form>
  </div>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
  <script type='text/javascript'>
    (function($) {
      window.fnames = new Array();
      window.ftypes = new Array();
      fnames[0] = 'EMAIL';
      ftypes[0] = 'email';
      fnames[1] = 'FNAME';
      ftypes[1] = 'text';
      fnames[2] = 'LNAME';
      ftypes[2] = 'text';
      fnames[3] = 'ADDRESS';
      ftypes[3] = 'address';
      fnames[4] = 'PHONE';
      ftypes[4] = 'phone';
    }(jQuery));
    var $mcj = jQuery.noConflict(true);
  </script>
  <!--End mc_embed_signup-->
</div>

<script src="js/vendor/modernizr-3.8.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
  window.jQuery ||
    document.write(
      '<script src="js/vendor/jquery-3.4.1.min.js"><\/script>'
    );
</script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<?php
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if ($pagina == 'invitados' || $pagina == 'index') {
  echo '<script src="js/jquery.colorbox.js"></script>';
} else if ($pagina == 'conferencia') {
  echo '<script src="js/lightbox.js"></script>';
}
?>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments);
  };
  ga.q = [];
  ga.l = +new Date();
  ga("create", "UA-XXXXX-Y", "auto");
  ga("set", "transport", "beacon");
  ga("send", "pageview");
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>