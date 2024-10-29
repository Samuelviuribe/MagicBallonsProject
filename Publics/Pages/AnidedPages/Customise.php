<?php
$producto = isset($_POST['producto']) ? $_POST['producto'] : 'Producto no especificado';
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : 'No se permite cambiar los paramtetros de configuracion para este producto';
$precio = isset($_POST['precio']) ? $_POST['precio'] : 0;
$cantidadDulces = isset($_POST['cantidadDulces']) ? $_POST['cantidadDulces'] : null;
$cantidadBebidas = isset($_POST['cantidadBebidas']) ? $_POST['cantidadBebidas'] : null;
$globos = isset($_POST['globos']) ? $_POST['globos'] : 0;
$dedicatoria = isset($_POST['dedicatoria']) ? $_POST['dedicatoria'] : null;
$objeto1 = isset($_POST['objeto1']) ? $_POST['objeto1'] : null;
$objeto2 = isset($_POST['objeto2']) ? $_POST['objeto2'] : null;
$objeto3 = isset($_POST['objeto3']) ? $_POST['objeto3'] : null;
$adicional1 = isset($_POST['adicional1']) ? $_POST['adicional1'] : null;
$adicional2 = isset($_POST['adicional2']) ? $_POST['adicional2'] : null;
$adicional3 = isset($_POST['adicional3']) ? $_POST['adicional3'] : null;
$adicional4 = isset($_POST['adicional4']) ? $_POST['adicional4'] : null;
$frutas1 = isset($_POST['frutas1']) ? $_POST['frutas1'] : null;
$frutas2 = isset($_POST['frutas2']) ? $_POST['frutas2'] : null;
$frutas3 = isset($_POST['frutas3']) ? $_POST['frutas3'] : null;
$frutas4 = isset($_POST['frutas4']) ? $_POST['frutas4'] : null;
$frutas5 = isset($_POST['frutas5']) ? $_POST['frutas5'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/Styles.css">
    <link rel="icon" href="../../Img/Logo/icono-principal.png">
    <script src="https://kit.fontawesome.com/e4511b2e12.js" crossorigin="anonymous"></script>
    <title>Personalizar Compra</title>
</head>

<body>

    <main>
        <div class="header-custom">
            <h2> <?php echo htmlspecialchars($producto); ?></h2>
        </div>

        <div class="container-custom">

            <div class="container-img-customize">
                <img id="imagen-custom" src="../<?php echo htmlspecialchars($imagen); ?>" alt="<?php echo htmlspecialchars($imagen); ?>">
            </div>

            <div class="container-details-customize-product">

                <div class="precio item-custom">
                    <span>
                        <label for="precio">Precio:</label>
                        <span id="precio">$<?php echo htmlspecialchars($precio); ?></span>
                    </span>
                </div>

                <div class="dulces item-custom">
                    <label for="cantidad-dulces">Cantidad de Golosinas:</label>
                    <input class="input-quantity" type="number" id="cantidad-dulces" min="0" value="<?php echo htmlspecialchars($cantidadDulces); ?>">
                </div>

                <div class="globos item-custom">
                    <label for="globos">Cantidad De Globos:</label>
                    <input class="input-quantity" type="number" id="cantidad-de-globos" min="0" value="<?php echo htmlspecialchars($globos); ?>">
                </div>

                <div class="botellas item-custom">
                    <label for="dedicatoria">Cantidad de Bebidas:</label>
                    <input class="input-quantity" type="number" id="cantidad-de-globos" min="0" value="<?php echo htmlspecialchars($cantidadBebidas); ?>">
                </div>


                <?php if ($objeto1 || $objeto2 || $objeto3): ?>
                    <div class="objetos item-custom">
                        <label for="objetos">Selecciona un objeto:</label>
                        <select id="objetos" name="objetos">
                            <option value=""> Selecciona un objeto adicional </option>
                            <?php if ($objeto1): ?>
                                <option><?php echo htmlspecialchars($objeto1); ?></option>
                            <?php endif; ?>

                            <?php if ($objeto2): ?>
                                <option><?php echo htmlspecialchars($objeto2); ?></option>
                            <?php endif; ?>

                            <?php if ($objeto3): ?>
                                <option><?php echo htmlspecialchars($objeto3); ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if ($adicional1 || $adicional2 || $adicional3 || $adicional4): ?>
                    <div class="adicionales item-custom">
                        <legend>Selecciona los elementos que deseas añadir:</legend>

                        <?php if ($adicional1): ?>
                            <label>
                                <input type="checkbox" name="elementos" value="perfumes"> <?php echo htmlspecialchars($adicional1); ?>
                            </label><br>
                        <?php endif; ?>

                        <?php if ($adicional2): ?>
                            <label>
                                <input type="checkbox" name="elementos" value="perfumes"> <?php echo htmlspecialchars($adicional2); ?>
                            </label><br>
                        <?php endif; ?>

                        <?php if ($adicional3): ?>
                            <label>
                                <input type="checkbox" name="elementos" value="pulseras"> <?php echo htmlspecialchars($adicional3); ?>
                            </label><br>
                        <?php endif; ?>

                        <?php if ($adicional4): ?>
                            <label>
                                <input type="checkbox" name="elementos" value="anillos"> <?php echo htmlspecialchars($adicional4); ?>
                            </label><br>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($frutas1 || $frutas2 || $frutas3 || $frutas4 || $frutas5): ?>
                    <div class="frutas item-custom">
                        <label for="frutas">Selecciona una fruta:</label>
                        <select id="frutas" name="frutas">
                            <option value="0"> Escoja una fruta de preferencia </option>
                            <?php if ($frutas1): ?>
                                <option value="2000"><?php echo htmlspecialchars($frutas1); ?></option>
                            <?php endif; ?>
                            <?php if ($frutas2): ?>
                                <option value="3000"><?php echo htmlspecialchars($frutas2); ?></option>
                            <?php endif; ?>
                            <?php if ($frutas3): ?>
                                <option value="2500"><?php echo htmlspecialchars($frutas3); ?></option>
                            <?php endif; ?>
                            <?php if ($frutas4): ?>
                                <option value="1500"><?php echo htmlspecialchars($frutas4); ?></option>
                            <?php endif; ?>
                            <?php if ($frutas5): ?>
                                <option value="1000"><?php echo htmlspecialchars($frutas5); ?></option>
                            <?php endif; ?>
                        </select>
                    </div>
                <?php endif; ?>


                <?php if ($dedicatoria): ?>
                    <div class="item-custom">
                        <label for="dedicatoria">Dedicatoria:</label>
                        <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                    </div>
                <?php endif; ?>

                <?php if ($dedicatoria): ?>
                    <div class="item-custom">
                        <label for="dedicatoria">Dedicatoria:</label>
                        <input type="text" id="cantidad-de-globos" min="1" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                    </div>
                <?php endif; ?>

                <?php if ($dedicatoria): ?>
                    <div class="item-custom">
                        <label for="dedicatoria">Dedicatoria:</label>
                        <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                    </div>
                <?php endif; ?>

                <?php if ($dedicatoria): ?>
                    <div class="item-custom">
                        <label for="dedicatoria">Dedicatoria:</label>
                        <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                    </div>
                <?php endif; ?>



            </div>

            <div class="precio-total">
                <span>
                    <label for="precio-total">Precio Total (personalizado):</label>
                    <span id="precio-total">$<?php echo htmlspecialchars($precio + ($globos * 500)); ?></span>
                </span>
                <br>
                <span>
                    <label for="precio-globos">Costo por Globos :</label>
                    <span id="precio-globos">$<?php echo htmlspecialchars($globos * 500); ?></span>
                </span>
                <br>
                <span>
                    <label for="precio-dulces">Costo por Dulces :</label>
                    <span id="precio-dulces">$<?php echo htmlspecialchars($cantidadDulces * 1000); ?></span>
                </span>
                <br>
                <span>
                    <label for="precio-frutas">Costo por Fruta :</label>
                    <span id="precio-frutas">$0</span>
                </span>
                <br>
            </div>


    </main>

    <button id="btn-comprar">Comprar</button>
    <button id="btn-compartir">Share</button>
    <button id="btn-feivu">feivu</button>
    <button id="btn-whatsapp">whasa</button>

    <script>
        // Variables base
        let precioBase = <?php echo $precio; ?>;
        const precioGlobo = 500;
        const precioDulce = 1000;

        // Elementos HTML
        const cantidadGlobos = document.getElementById("cantidad-de-globos");
        const cantidadDulces = document.getElementById("cantidad-dulces");

        const precioGlobosElement = document.getElementById("precio-globos");
        const precioDulcesElement = document.getElementById("precio-dulces");
        const precioTotalElement = document.getElementById("precio-total");
        const frutasElement = document.getElementById("frutas"); // Asegúrate de que este ID coincida con tu HTML
        const precioFrutasElement = document.getElementById("precio-frutas"); // Asegúrate de tener este elemento en tu HTML

        // Función para actualizar el precio total (Previsualización)
        function actualizarPrecioTotal() {
            const cantidadGlobosValue = parseInt(cantidadGlobos.value) || 0;
            const cantidadDulcesValue = parseInt(cantidadDulces.value) || 0;
            const costoFrutas = parseInt(frutasElement.value) || 0;

            // Precios individuales
            const costoGlobos = cantidadGlobosValue * precioGlobo;
            const costoDulces = cantidadDulcesValue * precioDulce;

            // Precio total 
            const precioTotal = precioBase + costoGlobos + costoDulces + costoFrutas;

            // Mostrarlos
            precioTotalElement.textContent = "$" + precioTotal;
            precioGlobosElement.textContent = "$" + costoGlobos;
            precioDulcesElement.textContent = "$" + costoDulces;
            precioFrutasElement.textContent = "$" + costoFrutas;
        }

        // Event Listeners para cambios en la cantidad del precio individual
        cantidadGlobos.addEventListener("input", actualizarPrecioTotal);
        cantidadDulces.addEventListener("input", actualizarPrecioTotal);
        frutasElement.addEventListener("change", actualizarPrecioTotal);
    </script>



</body>

</html>