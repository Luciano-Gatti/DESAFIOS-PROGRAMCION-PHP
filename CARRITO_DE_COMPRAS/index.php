<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda en línea</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <?php include_once "productos.php"; ?>
        <h1>Carrito</h1>
        <div id="carrito">
            <?php include "mostrar_carrito.php"; ?>
        </div>

        <!-- Mostrar los productos disponibles -->
        <h1>Productos Disponibles</h1>
        <ul>
            <?php foreach ($productos as $producto) {?>
                <li>
                    <?php echo $producto["nombre"]; ?> - $<?php echo $producto["precio"]; ?>
                    <button onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al Carrito</button>
                </li>
            <?php } ?>
        </ul>

        <script>
            function agregarAlCarrito(idProducto){
                $.ajax({
                    url: "agregar_al_carrito.php",
                    type: "POST",
                    data: { id: idProducto },
                    success: function(response) {
                        alert("Producto agregado al carrito");
                        // Actualizar el contenido del carrito en el DOM
                        $("#carrito").html(response); // Actualizamos el contenido del carrito con la respuesta de mostrar_carrito.php
                    }
                });
            }
        </script>
    </body>
</html>