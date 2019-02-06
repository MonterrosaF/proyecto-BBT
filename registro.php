<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
      <h2>REGISTRO DE USUARIOS</h2>
      <form action="index.html" id="registro" class="registro" method="POST">
          <div id="datos_usuario" class="registro caja clearfix">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre">
            </div>
            <div class="campo">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" placeholder="Tu apellido">
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Tu email">
            </div>
            <div id="error"></div>
          </div>
          <div id="paquetes" class="paquetes">
              <h3>Elige el tour de tu preferencia:</h3>
              <ul class="lista-precios clearfix">
                <li>
                  <div class="tabla-precio">
                    <h3>Tour Bogotá Historica</h3>
                    <p class="numero">$25.000</p>
                    <ul>
                      <li><i class="far fa-hand-point-right"></i>Recorrido por lugares historicos de <br/>Bogotá</li>
                      <li><i class="far fa-hand-point-right"></i>Español, ingles, aleman, frances, japones</li>
                      <li><i class="far fa-hand-point-right"></i>Visita a restaurantes historicos</li>
                    </ul>
                    <div class="orden">
                        <label for="Bogota_Historica">Cantidad de personas</label>
                        <input type="number" min="0" id="Bogota_Historica" size="3" placeholder="0">
                    </div>
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
                    <div class="orden">
                        <label for="Bogota_Cultural">Cantidad de personas</label>
                        <input type="number" min="0" id="Bogota_Cultural" size="3" placeholder="0">
                    </div>
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
                    <div class="orden">
                        <label for="montanismo">Cantidad de personas</label>
                        <input type="number" min="0" id="montanismo" size="3" placeholder="0">
                    </div>
                  </div>
                </li>
              </ul>
          </div> <!-- paquetes-->

          <div id="eventos" class="eventos clearfix">
            <h3>Elige tus tours</h3>
            <div class="caja">
              <div id="historica" class="contenido-dia clearfix">
                <h4>Tour Bogotá Historica</h4>
                <div>
                  <p>Actividades:</p>
                  <label><input type="checkbox" name="registro" id="taller_01" value="taller_01"><time>12:00</time> Reunión previa al tour con el guia</label>
                  <label><input type="checkbox" name="registro" id="taller_02" value="taller_02"><time>12:05</time> Inicio del recorrido</label>
                  <label><input type="checkbox" name="registro" id="taller_03" value="taller_03"><time>12:30</time> Descripción lugares reconocidos</label>
                  <label><input type="checkbox" name="registro" id="taller_04" value="taller_04"><time>13:00</time> Pausa para almorzar</label>
                  <label><input type="checkbox" name="registro" id="taller_05" value="taller_05"><time>13:30</time> Regreso a las oficinas BBT</label>
                  <label><input type="checkbox" name="registro" id="taller_06" value="taller_06"><time>14:00</time> Charla de finalizacion del tour</label>
                </div>
                <div>
                  <p>Restaurantes:</p>
                  <label><input type="checkbox" name="registro" id="conf_01" value="conf_01"><time>12:30</time>Toma de chicha en sector reconocido del lugar</label>
                  <label><input type="checkbox" name="registro" id="conf_02" value="conf_02"><time>12:40</time>Visita a casa de postres reconocido del lugar</label>
                  <label><input type="checkbox" name="registro" id="conf_03" value="conf_03"><time>13:00</time>Almuerzo en restaurante sorpresa</label>
                </div>
                <div>
                  <p>Obsequios</p>
                  <label><input type="checkbox" name="registro" id="sem_01"><time>14:00</time>Llaveros de Bogotá</label>
                </div>
              </div>

              <div id="cultural" class="contenido-dia clearfix">
                <h4>Tour Bogotá Cultural</h4>
                  <div>
                    <p>Actividades:</p>
                    <label><input type="checkbox" name="registro" id="taller_07" value="taller_07"><time>11:00</time> Reunión previa al tour con el guia</label>
                    <label><input type="checkbox" name="registro" id="taller_08" value="taller_08"><time>11:05</time> Inicio del recorrido</label>
                    <label><input type="checkbox" name="registro" id="taller_09" value="taller_09"><time>11:30</time> Descripción lugares reconocidos</label>
                    <label><input type="checkbox" name="registro" id="taller_10" value="taller_10"><time>12:00</time> Pausa para almorzar</label>
                    <label><input type="checkbox" name="registro" id="taller_11" value="taller_11"><time>12:30</time> Regreso a las oficinas BBT</label>
                    <label><input type="checkbox" name="registro" id="taller_12" value="taller_12"><time>13:00</time> Charla de finalizacion del tour</label>
                  </div>
                  <div>
                    <p>Restaurantes:</p>
                    <label><input type="checkbox" name="registro" id="conf_04" value="conf_04"><time>11:30</time> Toma de chicha en sector reconocido del lugar</label>
                    <label><input type="checkbox" name="registro" id="conf_05" value="conf_05"><time>11:40</time> Visita a casa de postres reconocido del lugar</label>
                    <label><input type="checkbox" name="registro" id="conf_06" value="conf_06"><time>12:00</time> Almuerzo en restaurante sorpresa</label>
                  </div>
                  <div>
                    <p>Obsequios</p>
                    <label><input type="checkbox" name="registro" id="sem_02" value="sem_02"><time>13:00</time> Llaveros y camisetas de Bogotá</label>
                  </div>
              </div>

              <div id="montanismo" class="contenido-dia clearfix">
                <h4>Tour Ciclomontañismo</h4>
                  <div>
                    <p>Actividades:</p>
                    <label><input type="checkbox" name="registro" id="taller_13" value="taller_13"><time>11:00</time> Reunión previa al tour con el guia</label>
                    <label><input type="checkbox" name="registro" id="taller_14" value="taller_14"><time>11:05</time> Entrega elementos de prontección</label>
                    <label><input type="checkbox" name="registro" id="taller_15" value="taller_15"><time>11:10</time> Inicio del recorrido</label>
                    <label><input type="checkbox" name="registro" id="taller_16" value="taller_16"><time>12:30</time> Descripción lugares reconocidos</label>
                    <label><input type="checkbox" name="registro" id="taller_17" value="taller_17"><time>13:00</time> Inicio primera montaña</label>
                    <label><input type="checkbox" name="registro" id="taller_18" value="taller_18"><time>14:00</time> Inicio Segunda montaña</label>
                    <label><input type="checkbox" name="registro" id="taller_19" value="taller_19"><time>15:00</time> Inicio tercera montaña</label>
                    <label><input type="checkbox" name="registro" id="taller_20" value="taller_20"><time>16:00</time> Pausa para almorzar</label>
                    <label><input type="checkbox" name="registro" id="taller_21" value="taller_21"><time>16:30</time> Regreso a las oficinas BBT</label>
                    <label><input type="checkbox" name="registro" id="taller_22" value="taller_22"><time>17:00</time> Charla de finalizacion del tour</label>
                  </div>
                  <div>
                    <p>Restaurantes:</p>
                    <label><input type="checkbox" name="registro" id="conf_07" value="conf_07"><time>11:30</time> Almuerzo "Paseo de olla"</label>
                  </div>
                  <div>
                    <p>Obsequios</p>
                    <!-- <label><input type="checkbox" name="registro" id="sem_03" value="sem_03"><time>13:00</time> Llaveros, camisetas y recuerdos de Bogotá</label> -->
                  </div>
              </div> <!-- domingo -->

            </div> <!-- caja eventos -->
          </div> <!-- eventos-->

          <div id="resumen" class="resumen">
            <h3>Pago y extras</h3>
            <div class="caja clearfix">
              <div class="extras">
                <div class="orden">
                  <label for="bono_evento">Bono tour Bogotá Historica $7000 <small>(promoción 20% descuento)</small></label>
                  <input type="number" min="0" name="bono_evento" size="3" placeholder="0" id="bono_evento">
                </div> <!-- Orden -->
                <div class="orden">
                  <label for="stickers">Paquete de stickers $5000 <small>(Lugares historicos y personajes importantes)</small></label>
                  <input type="number" min="0" id="stickers" size="3" placeholder="0">
                </div><!-- Orden -->
                  <div class="orden">
                    <label for="regalo">Seleccione un regalo</label><br/>
                    <select id="regalo" required>
                      <option value="">- Seleccione un regalo -</option>
                      <option value="ETI">Poster</option>
                      <option value="PUL">Manilla</option>
                      <option value="PLU">Esfero</option>
                    </select>
                  </div><!-- Orden -->

                  <input type="button" id="calcular" class="button" value="Calcular precio">
              </div><!-- Extras -->

              <div class="total">
                <p>Resumen:</p>
                <div id="lista-productos">

                </div> <!-- Lista productos -->
                <p>Total:</p>
                <div id="suma-total">
                  <input id="btnRegistro" type="submit" class="button" value="Pagar">
                </div> <!-- suma total-->
              </div> <!-- Total -->
            </div> <!-- caja resumen-->
          </div> <!-- Resumen -->
      </form>
  </section>


  <?php include_once 'includes/templates/footer.php'; ?>