<?php include_once 'includes/templates/header.php'; ?>
  <section class="seccion contenedor">
    <h2>La mejor pagina para sus tours</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra leo vel ex finibus bibendum. Cras
      posuere turpis metus, a posuere elit viverra ac. Sed aliquam risus eget turpis gravida ultrices. Ut cursus ligula
      a quam semper, eu placerat diam suscipit. Nulla risus felis, suscipit sed dolor vel, tempus congue risus.
      Curabitur malesuada feugiat maximus. Duis varius dui quis urna ultrices, vitae convallis metus cursus.
      Suspendisse fermentum, enim a dignissim auctor, erat erat facilisis risus, a dapibus dui ipsum id augue. Nulla
      facilisi. Sed gravida molestie erat, id malesuada mauris varius vitae. Vivamus vitae libero quis mi tempor
      varius. Quisque magna dolor, rhoncus nec lobortis non, feugiat vel magna.
    </p>
  </section>

  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop muted>
        <source src="video/Mountain_Biking1.mp4" type="video/mp4">
        <source src="video/Mountain_Biking1.ogg" type="video/webm">
        <source src="video/Mountain_Biking1.ogg" type="video/ogg">
      </video>
    </div>

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
          <h2>Programa del tour</h2>
          <nav class="menu-programa">
            <a href="#bogota-cultural"><i class="fab fa-angellist"></i>Bogotá Cultural</a>
            <a href="#bogota-historica"><i class="fas fa-building"></i>Bogotá Historica</a>
            <a href="#ciclomon"><i class="fas fa-bicycle"></i>Ciclomontañismo</a>
          </nav>

          <div id="bogota-cultural" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Bogotá Cultural (antes del almuerzo)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 10:00 - 12:00</p>
              <p><i class="fas fa-bicycle"></i> Oficina BBT - Plaza de Bolivar</p>
            </div>
            <div class="detalle-evento">
              <h3>Bogotá Cultural (despues del almuerzo)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 12:00 - 14:00</p>
              <p><i class="fas fa-bicycle"></i> Plaza de Bolivar - Oficina BBT</p>
            </div>
            <a href="#" class="button float-right">VER MAS</a>
          </div>

          <div id="bogota-historica" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Bogotá Historica (Antes del almuerzo)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 11:00 - 13:00</p>
              <p><i class="fas fa-bicycle"></i> Oficina BBT - Planetario Distrital </p>
            </div>
            <div class="detalle-evento">
              <h3>Bogotá Historica (despues del almuerzo)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 13:00 - 15:00</p>
              <p><i class="fas fa-bicycle"></i> Planetario Distrital - Oficina BBT</p>
            </div>
            <a href="#" class="button float-right">VER MAS</a>
          </div>

          <div id="ciclomon" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Tour Ciclomontañismo (primera parte)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 10:00 - 14:00</p>
              <p><i class="fas fa-bicycle"></i> Oficina BBT - Montaña 1</p>
            </div>
            <div class="detalle-evento">
              <h3>Tour Ciclomontañismo (segunda parte)</h3>
              <p><i class="fa fa-calendar"></i> Sabados y Domingos</p>
              <p><i class="far fa-clock"></i> 14:00 - 17:00</p>
              <p><i class="fas fa-bicycle"></i> Montaña 1 - Montaña 2 - Oficina BBT</p>
            </div>
            <a href="#" class="button float-right">VER MAS</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once 'includes/templates/guias.php'; ?>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento clearfix">
        <li>
          <p class="numero">0</p> Guias Turisticos
        </li>
        <li>
          <p class="numero">0</p> Rutas
        </li>
        <li>
          <p class="numero">0</p> Días a la semana
        </li>
        <li>
          <p class="numero">0</p> Tours
        </li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>PRECIOS</h2>
    <div class="contenedor">
      <ul class="lista-precios clearfix">
        <li>
          <div class="tabla-precio">
            <h3>Tour Bogotá Historica</h3>
            <p class="numero">$25.000</p>
            <ul>
              <li><i class="far fa-hand-point-right"></i>Recorrido por lugares historicos de Bogotá</li>
              <li><i class="far fa-hand-point-right"></i>Español, ingles, aleman, frances, japones</li>
              <li><i class="far fa-hand-point-right"></i>Visita a restaurantes historicos</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Tour Bogotá Cultural</h3>
            <p class="numero">$28.000</p>
            <ul>
              <li><i class="far fa-hand-point-right"></i>Recorrido por lugares culturales del centro de Bogotá</li>
              <li><i class="far fa-hand-point-right"></i>Español, ingles, frances </li>
              <li><i class="far fa-hand-point-right"></i>Visita a restaurantes culturales</li>
            </ul>
            <a href="#" class="button ">Comprar</a>
          </div>
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Tour Ciclomontañismo</h3>
            <p class="numero">$30.000</p>
            <ul>
              <li><i class="far fa-hand-point-right"></i>Recorrido por lugares rocosos de Cundinamarca</li>
              <li><i class="far fa-hand-point-right"></i>Español, ingles</li>
              <li><i class="far fa-hand-point-right"></i>Refrigerio y almuerzo</li>
            </ul>
            <a href="#" class="button hollow">Comprar</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa">

  </div>

  <section class="seccion">
    <h2>TESTIMONIOS</h2>
    <div class="testimoniales contenedor clearfix">
      <div class="testimonial">
        <blockquote>
          <p>Sed aliquam commodo est ut vulputate. Nulla pulvinar interdum tincidunt. Maecenas eu dignissim ipsum, non
            ultrices enim. Aenean sagittis feugiat augue at facilisis.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Wilmer Garcia <span>Guia Turistico BBT</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Sed aliquam commodo est ut vulputate. Nulla pulvinar interdum tincidunt. Maecenas eu dignissim ipsum, non
            ultrices enim. Aenean sagittis feugiat augue at facilisis.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Wilmer Garcia <span>Guia Turistico BBT</span></cite>
          </footer>
        </blockquote>
      </div>
      <div class="testimonial">
        <blockquote>
          <p>Sed aliquam commodo est ut vulputate. Nulla pulvinar interdum tincidunt. Maecenas eu dignissim ipsum, non
            ultrices enim. Aenean sagittis feugiat augue at facilisis.</p>
          <footer class="info-testimonial clearfix">
            <img src="img/testimonial.jpg" alt="imagen testimonial">
            <cite>Wilmer Garcia <span>Guia Turistico BBT</span></cite>
          </footer>
        </blockquote>
      </div>
    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Registrate en nuestra pagina</p>
      <h3>BBT</h3>
      <a href="#" class="button transparente">Registro</a>
    </div>
  </div>

  <section class="seccion">
    <h2>PROXIMO EVENTO ESPECIAL:</h2>
    <div class="cuenta-regresiva contenedor">
      <ul class="clearfix">
        <li>
          <p id="dias" class="numero"></p> Días
        </li>
        <li>
          <p id="horas" class="numero"></p> Horas
        </li>
        <li>
          <p id="minutos" class="numero"></p> Minutos
        </li>
        <li>
          <p id="segundos" class="numero"></p>Segundos
        </li>
      </ul>
    </div>
  </section>

  <?php include_once 'includes/templates/footer.php'; ?>