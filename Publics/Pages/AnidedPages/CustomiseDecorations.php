<?php
$producto = isset($_POST['producto']) ? $_POST['producto'] : 'Producto no especificado';
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : 'No se permite cambiar los parámetros de configuración para este producto';
$precio = isset($_POST['precio']) ? $_POST['precio'] : 0;
$dedicatoria = isset($_POST['dedicatoria']) ? $_POST['dedicatoria'] : null;
$globos = isset($_POST['globos']) ? $_POST['globos'] : 0;
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
                        <label for="globos">Cantidad De Globos Adicionales:</label>
                        <input class="input-quantity" type="number" id="cantidad-de-globos" min="0" value="<?php echo htmlspecialchars($globos); ?>">
                    </div>
                <?php endif; ?>

                <?php if (!empty($arcoGlobos)): ?>
                    <div class="arco-globos item-custom">
                        <label for="arco-globos">Selecciona un Arco de Globos:</label>
                        <select  class="input-quantity"id="arco-globos">
                            <option value="0" data-cantidad="0">Sin arco</option>
                            <option value="50" data-cantidad="15">Pequeño 50cm*60cm (x68 globos)</option>
                            <option value="80" data-cantidad="21">Mediano 80cm*100cm (x96 globos)</option>
                            <option value="100" data-cantidad="26.5">Grande 100cm*200cm (x128 globos)</option>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($luces)): ?>
                    <div class="luces item-custom">
                        <label for="luces">Selecciona el tipo de luces:</label>
                        <select class="input-quantity" id="luces">
                            <option value="0" data-luces="sin luces">No quiero Alquilar</option>
                            <option value="5000" data-luces="luces de discoteca">Luces de discoteca</option>
                            <option value="7000" data-luces="bola disco">Bola disco</option>
                            <option value="10000" data-luces="luces LED">Luces LED</option>
                            <option value="8000" data-luces="luces RGB">Luces RGB</option>
                            <option value="9000" data-luces="luces estroboscópicas">Luces estroboscópicas</option>
                            <option value="10000" data-luces="luces de fiesta">Luces de fiesta</option>
                        </select>
                    </div>
                <?php endif; ?>

                <?php if (!empty($columnasGlobos)): ?>
    <div class="columnas-globos item-custom">
        <label for="columnas-globos"> Columnas de globos:</label>
        <select  class="input-quantity" id="columnas-globos" name="columnas-globos">
            <option value="0">Sin columnas</option>
            <option value="1">1 columna</option>
            <option value="2">2 columnas</option>
            <option value="3">3 columnas</option>
            <option value="4">4 columnas</option>
            <option value="5">5 columnas</option>
            <!-- Agregar más opciones si es necesario -->
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
                    <label for="precio-luces"> Alquiler de Luces:</label>
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

    <script>
        let precioBase = <?php echo $precio; ?>;

        // Precios de los productos
        const precioGlobo = 500; // Precio por globo

        // Elemento de luces
         const lucesSelect = document.getElementById("luces");

        const precioArco = 1000; // Precio por arco de globos
        const precioLuces = 300; // Precio por luces
        const precioColumnas = 12000; // Precio por columnas de globos
        const precioTexto = 500; // Precio por texto en globos
        const precioFrutas = 300; // Precio por frutas
        const precioConfites = 200; // Precio por confites
        const precioPulseras = 150; // Precio por pulseras
        const precioAnillos = 200; // Precio por anillos

        // Elementos HTML
        const cantidadGlobosInput = document.getElementById("cantidad-de-globos");
        const arcoGlobosSelect = document.getElementById("arco-globos"); // El select para arco de globos
        const frutasInput = document.getElementById("frutas");
        const lucesInput = document.getElementById("luces");
        const columnasGlobosInput = document.getElementById("columnas-globos");
        const textoGlobosInput = document.getElementById("texto-globos");
        const precioTotalElement = document.getElementById("precio-total");
        const precioGlobosElement = document.getElementById("precio-globos");
        const precioArcoElement = document.getElementById("precio-arco-globos");
        const precioLucesElement = document.getElementById("precio-luces");
        const precioColumnasElement = document.getElementById("precio-columnas-globos");
        const precioTextoElement = document.getElementById("precio-texto-globos");
        const precioFrutasElement = document.getElementById("precio-frutas");
        const precioConfitesElement = document.getElementById("precio-confites");
        const precioPulserasElement = document.getElementById("precio-pulseras");
        const precioAnillosElement = document.getElementById("precio-anillos");

        // Función para actualizar el precio del arco de globos
        function actualizarPrecioArco() {
            // Obtener la cantidad de globos para el arco seleccionada
            const arcoSeleccionado = arcoGlobosSelect.options[arcoGlobosSelect.selectedIndex];
            const cantidadGlobosArco = parseInt(arcoSeleccionado.getAttribute("data-cantidad")) || 0;

            // Calcular el costo del arco de globos
            const costoArco = cantidadGlobosArco * precioArco;

            // Mostrar el precio del arco de globos
            precioArcoElement.textContent = "$" + costoArco;

            return costoArco; // Devolver el costo para sumarlo al precio total
        }

        // Función para actualizar los precios
        function actualizarPrecios() {
            // Obtener cantidad de globos
            const cantidadGlobos = parseInt(cantidadGlobosInput.value) || 0;

            const lucesSeleccionadas = lucesSelect.options[lucesSelect.selectedIndex];
            const precioLuces = parseInt(lucesSeleccionadas.value) || 0; // Obtener el valor del precio

            const frutas = parseInt(frutasInput.value) || 0;
            const luces = parseInt(lucesInput.value) || 0;
            const columnasGlobos = parseInt(columnasGlobosInput.value) || 0;
            const textoGlobos = parseInt(textoGlobosInput.value) || 0;

            // Calcular precios individuales
            const costoGlobos = cantidadGlobos * precioGlobo;
            const costoArco = actualizarPrecioArco(); // Llamar a la función para obtener el costo del arco
            const costoLuces = luces * precioLuces;
            const costoColumnas = columnasGlobos * precioColumnas;
            const costoTexto = textoGlobos * precioTexto;
            const costoFrutas = frutas * precioFrutas;

            // Mostrar precios individuales en los elementos correspondientes
            precioGlobosElement.textContent = "$" + costoGlobos;
            
            precioLucesElement.textContent = "$" + precioLuces;

            precioColumnasElement.textContent = "$" + costoColumnas;
            precioTextoElement.textContent = "$" + costoTexto;
            precioFrutasElement.textContent = "$" + costoFrutas;

            // Calcular el precio total
            const precioTotal = precioBase + costoGlobos + costoArco + precioLuces + costoColumnas + costoTexto + costoFrutas;

            // Actualizar el precio total en la página
            precioTotalElement.textContent = "$" + precioTotal;
        }

        // Escuchar cambios en el select de arco de globos
        arcoGlobosSelect.addEventListener("change", actualizarPrecios);

        // Agregar listeners a los inputs para actualizar el precio cuando cambian
        cantidadGlobosInput.addEventListener("input", actualizarPrecios);
        lucesSelect.addEventListener("change", actualizarPrecios);
        frutasInput.addEventListener("input", actualizarPrecios);
        lucesInput.addEventListener("input", actualizarPrecios);
        columnasGlobosInput.addEventListener("input", actualizarPrecios);
        textoGlobosInput.addEventListener("input", actualizarPrecios);

        // Llamar a la función inicialmente para cargar los precios con valores por defecto
        actualizarPrecios();
    </script>

</body>

</html>