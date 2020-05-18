<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi culpa non,
    praesentium, quasi natus eaque est sapiente error nobis quisquam vel
    sint delectus provident, explicabo dolores quo! Quibusdam, vel
    asperiores!
  </p>
</section>

<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="bg.talleres.jpg">
      <source src="video/video/video.mp4" type="video/mp4" />
      <source src="video/video/video.webm" type="video/webm" />
      <source src="video/video/video.ogv" type="video/ogv" />
    </video>
  </div>
  <div class="contenido-prog">
    <div class="contenedor">
      <div class="prog-event">

        <h2>Programa del Evento</h2>
        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = " SELECT * FROM `categoria_evento` ";
          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>
        <nav class="menu-prog">
          <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria) ?>">
              <i class="fas <?php echo $cat['icono'] ?>"></i><?php echo $categoria; ?></a>
          <?php } ?>
        </nav>

        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados ";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 1 ";
          $sql .= " ORDER BY evento_id LIMIT 2; ";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados ";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 2 ";
          $sql .= " ORDER BY evento_id LIMIT 2; ";
          $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos ";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados ";
          $sql .= " ON eventos.id_inv = invitados.invitado_id ";
          $sql .= " AND eventos.id_cat_evento = 3 ";
          $sql .= " ORDER BY evento_id LIMIT 2; ";
        } catch (\Exception $e) {
          echo $e->getMessage();
        }
        ?>

        <?php $conn->multi_query($sql); ?>

        <?php
        do {
          $resultado = $conn->store_result();
          $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

          <?php $i = 0; ?>
          <?php foreach ($row as $evento) : ?>

            <?php if ($i % 2 == 0) { ?>
              <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
              <?php } ?>

              <div class="detalle-event">
                <h3><?php echo $evento['nombre_evento'] ?></h3>
                <p><i class="far fa-clock" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                <p><i class="far fa-calendar-alt" aria-hidden="true"></i><?php echo $evento['fecha_evento'] ?></p>
                <p><i class="far fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'] ?></p>
              </div>

              <?php if ($i % 2 == 1) : ?>
                <a href="calendario.php" class="boton float-right">Ver Todos</a>
              </div>
            <?php endif; ?>
            <?php $i++; ?>
          <?php endforeach; ?>
          <?php $resultado->free(); ?>

        <?php } while ($conn->more_results() && $conn->next_result()); ?>
      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/templates/invitemp.php'; ?>

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-event clearfix">
      <li>
        <p class="numero"></p>
        Invitados
      </li>
      <li>
        <p class="numero"></p>
        Talleres
      </li>
      <li>
        <p class="numero"></p>
        Dias
      </li>
      <li>
        <p class="numero"></p>
        Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="seccion precios">
  <h2>precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>pase por dia</h3>
          <p class="numero">$30</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>todos los talleres</li>
          </ul>
          <a href="#" class="boton hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>todos los dias</h3>
          <p class="numero">$50</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>todos los talleres</li>
          </ul>
          <a href="#" class="boton">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>pase por 2 dias</h3>
          <p class="numero">$45</p>
          <ul>
            <li>Bocadillos Gratis</li>
            <li>Todas las Conferencias</li>
            <li>todos los talleres</li>
          </ul>
          <a href="#" class="boton hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div id="mapa" class="mapa"></div>

<section class="seccion">
  <h2>Testimoniales</h2>
  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at
          ea inventore quasi facere consequatur sequi consequuntur,
          voluptate unde cumque fuga quidem exercitationem dolorem ipsa
          ullam aspernatur! Exercitationem, ullam officia!
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial" />
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at
          ea inventore quasi facere consequatur sequi consequuntur,
          voluptate unde cumque fuga quidem exercitationem dolorem ipsa
          ullam aspernatur! Exercitationem, ullam officia!
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial" />
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit at
          ea inventore quasi facere consequatur sequi consequuntur,
          voluptate unde cumque fuga quidem exercitationem dolorem ipsa
          ullam aspernatur! Exercitationem, ullam officia!
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial" />
          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>

<div class="news parallax">
  <div class="contenido contenedor">
    <p>Registrate al Newsletter:</p>
    <h3>MtyWebCamp</h3>
    <a href="#mc_embed_signup" class="btn_news boton transparente">Registro</a>
  </div>
</div>

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-reg contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p>
        dias
      </li>
      <li>
        <p id="horas" class="numero"></p>
        horas
      </li>
      <li>
        <p id="minutos" class="numero"></p>
        minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p>
        segundos
      </li>
    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>