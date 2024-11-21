<?php
$producto = isset($_POST['producto']) ? $_POST['producto'] : 'Producto no especificado';
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : 'No se permite cambiar los parámetros de configuración para este producto';
$precio = isset($_POST['precio']) ? $_POST['precio'] : 0;
$dedicatoria = isset($_POST['dedicatoria']) ? $_POST['dedicatoria'] : null;
$globos = isset($_POST['globos']) ? $_POST['globos'] : 'No especificado';
$arcoGlobos = isset($_POST['arcoGlobos']) ? $_POST['arcoGlobos'] : 'Sin arco';
$luces = isset($_POST['luces']) ? $_POST['luces'] : 'Sin luces';
$columnasGlobos = isset($_POST['columnasGlobos']) ? $_POST['columnasGlobos'] : 'No especificado';
$textoGlobos = isset($_POST['textoGlobos']) ? $_POST['textoGlobos'] : 'Sin texto';
$botellas = isset($_POST['botellas']) ? $_POST['botellas'] : 'No especificado';
$frutas = isset($_POST['frutas']) ? $_POST['frutas'] : 'No especificado';
$confites = isset($_POST['confites']) ? $_POST['confites'] : 'No especificado';
$pulseras = isset($_POST['pulseras']) ? $_POST['pulseras'] : 'No especificado';
$anillos = isset($_POST['anillos']) ? $_POST['anillos'] : 'No especificado';
$id = isset($_POST['id']) ? $_POST['id'] : 'ID no especificado';

// //  depuración
// echo "Producto: $producto<br>";
// echo "Imagen: $imagen<br>";
// echo "Precio: $precio<br>";
// echo "Dedicatoria: $dedicatoria<br>";
// echo "Globos: $globos<br>";
// echo "Arco de Globos: $arcoGlobos<br>";
// echo "Luces: $luces<br>";
// echo "Columnas de Globos: $columnasGlobos<br>";
// echo "Texto en Globos: $textoGlobos<br>";
// echo "Botellas: $botellas<br>";
// echo "Frutas: $frutas<br>";
// echo "Confites: $confites<br>";
// echo "Pulseras: $pulseras<br>";
// echo "Anillos: $anillos<br>";
// echo "ID: $id<br>";
// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizar Decoracion</title>
    <link rel="stylesheet" href="../../Css/Styles.css">
    <link rel="icon" href="../../Img/Logo/icono-principal.png">
    <script src="https://kit.fontawesome.com/e4511b2e12.js" crossorigin="anonymous"></script>
</head>

<body>

    <main>
        <div class="header-custom catalogo-title">
            <h2> <?php echo htmlspecialchars($producto); ?>
                <hr>
            </h2>
        </div>

        <div class="container-custom">

            <div class="element-custom-presentation">

                <div class="container-img-customize">
                    <img id="imagen-custom" src="../<?php echo htmlspecialchars($imagen); ?>" alt="<?php echo htmlspecialchars($imagen); ?>">
                </div>

                <div class="custom-icons-share">
                    <a href="#" id="btn-copy" title="Copiar Link">
                        <i class="fa-regular fa-copy"></i>
                    </a>
                    <a href="#" id="btn-compartir" title="Compartir como...">
                        <i class="fa-solid fa-share"></i>
                    </a>
                    <a href="#" id="btn-facebook" title="Compartir como...">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" id="btn-whatsapp" title="Compartir como...">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>

            </div>

            <div class="container-details-customize-product">

                <?php if ($precio): ?>
                    <div class="precio item-custom">
                        <span>
                            <label for="precio">Precio:</label>
                            <span id="precio">$<?php echo htmlspecialchars($precio); ?></span>
                        </span>
                    </div>
                <?php endif; ?>

                <?php if (!empty($globos)): ?>
                    <div class="globos item-custom">
                        <label for="globos">Cantidad de Globos:</label>
                        <select class="input-quantity" id="globos" name="globos">
                            <?php foreach (explode(",", $globos) as $globo): ?>
                                <option value="<?php echo htmlspecialchars($globo); ?>"><?php echo htmlspecialchars($globo); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($arcoGlobos)): ?>
                    <div class="arco-globos item-custom">
                        <label for="arco-globos">Selecciona el tipo de arco de globos:</label>
                        <select class="input-quantity" id="arco-globos" name="arco-globos">
                            <?php foreach (explode(",", $arcoGlobos) as $arco): ?>
                                <option value="<?php echo htmlspecialchars($arco); ?>"><?php echo htmlspecialchars($arco); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($luces)): ?>
                    <div class="luces item-custom">
                        <label for="luces">Selecciona el tipo de luces:</label>
                        <select class="input-quantity" id="luces" name="luces">
                            <?php foreach (explode(",", $luces) as $luz): ?>
                                <option value="<?php echo htmlspecialchars($luz); ?>"><?php echo htmlspecialchars($luz); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($columnasGlobos)): ?>
                    <div class="columnas-globos item-custom">
                        <label for="columnas-globos">Cantidad de columnas de globos:</label>
                        <select class="input-quantity" id="columnas-globos" name="columnas-globos">
                            <?php foreach (explode(",", $columnasGlobos) as $columna): ?>
                                <option value="<?php echo htmlspecialchars($columna); ?>"><?php echo htmlspecialchars($columna); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($textoGlobos)): ?>
                    <div class="texto-globos item-custom">
                        <label for="texto-globos">Texto para los globos:</label>
                        <input class="input-text" type="text" id="texto-globos" value="<?php echo htmlspecialchars($textoGlobos); ?>">
                    </div>
                <?php endif; ?>

                <?php if (!empty($frutas)): ?>
                    <div class="frutas item-custom">
                        <label for="frutas">Selecciona una fruta:</label>
                        <select class="input-quantity" id="frutas" name="frutas">
                            <?php foreach (explode(",", $frutas) as $fruta): ?>
                                <option value="<?php echo htmlspecialchars($fruta); ?>"><?php echo htmlspecialchars($fruta); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($confites)): ?>
                    <div class="confites item-custom">
                        <label for="confites">Selecciona un confite:</label>
                        <select class="input-quantity" id="confites" name="confites">
                            <?php foreach (explode(",", $confites) as $confite): ?>
                                <option value="<?php echo htmlspecialchars($confite); ?>"><?php echo htmlspecialchars($confite); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($pulseras)): ?>
                    <div class="pulseras item-custom">
                        <label for="pulseras">Selecciona una pulsera:</label>
                        <select class="input-quantity" id="pulseras" name="pulseras">
                            <?php foreach (explode(",", $pulseras) as $pulsera): ?>
                                <option value="<?php echo htmlspecialchars($pulsera); ?>"><?php echo htmlspecialchars($pulsera); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($anillos)): ?>
                    <div class="anillos item-custom">
                        <label for="anillos">Selecciona un anillo:</label>
                        <select class="input-quantity" id="anillos" name="anillos">
                            <?php foreach (explode(",", $anillos) as $anillo): ?>
                                <option value="<?php echo htmlspecialchars($anillo); ?>"><?php echo htmlspecialchars($anillo); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                <?php endif; ?>

            </div>



            <!-- Elementos de barra de personalizacion -->

            <div class="precio-total">
                <span class="titulo-precio-custom">
                    <label for="precio-globos">Costo por Globos:</label>
                    <span id="precio-globos">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-arco-globos">Costo por Arco de Globos:</label>
                    <span id="precio-arco-globos">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-luces">Costo por Luces:</label>
                    <span id="precio-luces">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-columnas-globos">Costo por Columnas de Globos:</label>
                    <span id="precio-columnas-globos">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-texto-globos">Costo por Texto en Globos:</label>
                    <span id="precio-texto-globos">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-frutas">Costo por Fruta:</label>
                    <span id="precio-frutas">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-confites">Costo por Confites:</label>
                    <span id="precio-confites">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-pulseras">Costo por Pulseras:</label>
                    <span id="precio-pulseras">$0</span>
                </span>
                <br>
                <span class="titulo-precio-custom">
                    <label for="precio-anillos">Costo por Anillos:</label>
                    <span id="precio-anillos">$0</span>
                </span>
                <br>

                <!-- Pagar precio -->
                <span class="titulo-precio-custom">
                    <label for="precio-total">Precio Total (personalizado): <br></label>
                    <span id="precio-total">$0</span>
                    <br>
                </span>
                <button id="btn-comprar-customice">Comprar</button>
            </div>

    </main>

</body>

</html>

<script>
    // Variables base provenientes de PHP
    let precioBase = <?php echo $precio; ?>;

    // Variables de PHP inyectadas
    const producto = "<?php echo $producto; ?>";
    const imagen = "<?php echo $imagen; ?>";
    const dedicatoriaBase = "<?php echo $dedicatoria; ?>";
    const globosBase = "<?php echo $globos; ?>";
    const arcoGlobosBase = "<?php echo $arcoGlobos; ?>";
    const lucesBase = "<?php echo $luces; ?>";
    const columnasGlobosBase = "<?php echo $columnasGlobos; ?>";
    const textoGlobosBase = "<?php echo $textoGlobos; ?>";
    const botellasBase = "<?php echo $botellas; ?>";
    const frutasBase = "<?php echo $frutas; ?>";
    const confitesBase = "<?php echo $confites; ?>";
    const pulserasBase = "<?php echo $pulseras; ?>";
    const anillosBase = "<?php echo $anillos; ?>";
    const idProducto = "<?php echo $id; ?>";

    // Elementos HTML
    const cantidadGlobos = document.getElementById("cantidad-de-globos");
    const frutasElement = document.getElementById("frutas");
    const lucesElement = document.getElementById("luces");
    const arcoGlobosElement = document.getElementById("arco-globos");
    const columnasGlobosElement = document.getElementById("columnas-globos");
    const textoGlobosElement = document.getElementById("texto-globos");
    const precioTotalElement = document.getElementById("precio-total");

    // Precios fijos por adicionales (pueden ser dinámicos)
    const precioGlobo = 500;
    const precioBotella = 800;
    const precioFruta = 300;
    const precioConfite = 200;

    // Función para actualizar el precio total
    function actualizarPrecioTotal() {
        const cantidadGlobosValue = parseInt(cantidadGlobos.value) || 0;
        const cantidadFrutasValue = parseInt(frutasElement.value) || 0;
        const costoGlobos = cantidadGlobosValue * precioGlobo;
        const costoFrutas = cantidadFrutasValue * precioFruta;

        // Precio total
        const precioTotal = precioBase + costoGlobos + costoFrutas;

        // Actualizar en la página
        precioTotalElement.textContent = "$" + precioTotal;
    }

    // Listeners para cambios
    cantidadGlobos.addEventListener("input", actualizarPrecioTotal);
    frutasElement.addEventListener("input", actualizarPrecioTotal);
</script>