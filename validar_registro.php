<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>RESUMEN REGISTRO</h2>

      <?php if (isset($_POST['submit'])): 
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['total_pedido'];
        $fecha = date('Y-m-d H:i:s');

        //  Pedidos
         
        $boletos = $_POST['boletos'];
        $bonos = $_POST['bono_evento'];
        $stickers = $_POST['sticker_evento'];
        include_once 'includes/funciones/funciones.php';
        $pedido = productos_json($boletos, $bonos, $stickers);
        echo "<pre>";
        var_dump($pedido);
        echo "</pre>";

        ?>

            <pre>
                <?php var_dump($boletos); ?>
            </pre>
        <?php endif; ?>
    </section>

<?php include_once 'includes/templates/footer.php'; ?>