<?php
$producto = isset($_POST['producto']) ? $_POST['producto'] : 'Producto no especificado';
$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : 'Imagen no especificada';
$precio = isset($_POST['precio']) ? $_POST['precio'] : 'Precio no especificado';
$cantidadDulces = isset($_POST['cantidadDulces']) ? $_POST['cantidadDulces'] : 'No especificado';
$globos = isset($_POST['globos']) ? $_POST['globos'] : 'no especificado';
$dedicatoria = isset($_POST['dedicatoria']) ? $_POST['dedicatoria'] : 'no especificado';
$objeto1 = isset($_POST['objeto1']) ? $_POST['objeto1'] : 'no especificado';
$objeto2 = isset($_POST['objeto2']) ? $_POST['objeto2'] : 'no especificado';
$objeto3 = isset($_POST['objeto3']) ? $_POST['objeto3'] : 'no especificado';
$adicional1 = isset($_POST['adicional1']) ? $_POST['adicional1'] : 'no especificado';
$adicional2 = isset($_POST['adicional2']) ? $_POST['adicional2'] : 'no especificado';
$adicional3 = isset($_POST['adicional3']) ? $_POST['adicional3'] : 'no especificado';
$adicional4 = isset($_POST['adicional4']) ? $_POST['adicional4'] : 'no especificado';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/Styles.css">
    <script src="https://kit.fontawesome.com/e4511b2e12.js" crossorigin="anonymous"></script>
    <title>Personalizar Compra</title>
</head>

<body>

    <main>
        <h2>Personalizar :<?php echo htmlspecialchars($producto); ?></h2>

        <div class="container-custom">

            <div class="container-img-customize">
                <img id="imagen-custom" src="../<?php echo htmlspecialchars($imagen); ?>" alt="<?php echo htmlspecialchars($imagen); ?>">

            </div>



            <div class="container-details-customize-product">

                <div class="precio item-custom">
                    <span>
                        <label for="precio">Precio:</label>
                        <span id="precio"><?php echo htmlspecialchars($precio); ?></span>
                    </span>
                </div>

                <div class="dulces item-custom">
                    <label for="cantidad-dulces">Cantidad Dulces:</label>
                    <input type="number" id="cantidad-dulces" value="<?php echo htmlspecialchars($cantidadDulces); ?>">
                </div>

                <div class="globos item-custom">
                    <label for="globos">Cantidad De Globos:</label>
                    <input type="number" id="cantidad-de-globos" value="<?php echo htmlspecialchars($globos); ?>">
                </div>

                <div class="dedicatoria item-custom">
                    <label for="dedicatoria">Dedidactoria:</label>
                    <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>

                <div class="botellas item-custom">
                    <label for="dedicatoria">Cantidad de Bebidas:</label>
                    <input type="number" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>

                <div class="objetos item-custom">
                    <label for="objetos">Selecciona un objeto:</label>
                    <select id="objetos" name="objetos">
                        <option value="">--Selecciona un objeto--</option>
                        <option><?php echo htmlspecialchars($objeto1); ?></option>
                        <option><?php echo htmlspecialchars($objeto2); ?></option>
                        <option><?php echo htmlspecialchars($objeto3); ?></option>
                    </select>
                </div>



                <div class="adicionales item-custom">

                    <legend>Selecciona los elementos que deseas añadir:</legend>

                    <label>
                        <input type="checkbox" name="elementos" value="perfumes"> <?php echo htmlspecialchars($adicional1); ?>
                    </label><br>

                    <label>
                        <input type="checkbox" name="elementos" value="perfumes"> <?php echo htmlspecialchars($adicional2); ?>
                    </label><br>

                    <label>
                        <input type="checkbox" name="elementos" value="pulseras"> <?php echo htmlspecialchars($adicional3); ?>
                    </label><br>

                    <label>
                        <input type="checkbox" name="elementos" value="anillos"> <?php echo htmlspecialchars($adicional4); ?>
                    </label><br>
                </div>




                <div class=" item-custom">
                    <label for="dedicatoria">Dedidactoria:</label>
                    <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>

                <div class=" item-custom">
                    <label for="dedicatoria">Dedidactoria:</label>
                    <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>

                <div class=" item-custom">
                    <label for="dedicatoria">Dedidactoria:</label>
                    <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>

                <div class=" item-custom">
                    <label for="dedicatoria">Dedidactoria:</label>
                    <input type="text" id="cantidad-de-globos" value="<?php echo htmlspecialchars($dedicatoria); ?>">
                </div>
            </div>

        </div>
        <button id="btn-comprar">Comprar</button>
    </main>


</body>

</html>