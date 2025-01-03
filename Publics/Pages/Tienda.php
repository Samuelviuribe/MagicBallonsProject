<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Styles.css">
    <link rel="icon" href="../Img/Logo/icono-principal.png">

    <script src="https://kit.fontawesome.com/e4511b2e12.js" crossorigin="anonymous"></script>
    <title>Tienda</title>
</head>

<body>
    <!-- header -->
    <div class="hero">
        <nav>
            <img src="../Img/Logo/icono-principal-black.png" alt="" class="logo-principal">
            <ul>
                <li><a class="headLink" href="../../Index.php" title="Inicio">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon-nav">
                            <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 
                16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 
                512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 
                14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4
                 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 
                 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>
                    </a></li>
                <li><a class="headLink" href="MagicBalloons.php" title="¿MagicBallons? ¡Conocenos!">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-nav">
                            <path d="M184 48l144 0c4.4 0 8 3.6 
                8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 
                0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 
                288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z" />
                        </svg>
                    </a></li>
                <li><a class="headLink" href="AboutUs.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon-nav">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 
             307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg>
                    </a></li>
                <li><a class="headLink" href="Contacto.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-nav">
                            <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 
                0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>
                    </a></li>
            </ul>
            <div class="container-cart-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon-cart"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 
                45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 
                11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 
                0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 
                0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 
                96 48 48 0 1 1 0-96z" />
                </svg>
            </div>
            <div class="count-products">
                <span id="contador-productos">0</span>
            </div>


            <div class="container-cart-products hidden-cart">
                <div class="row-product">
                    <!-- <div class="cart-product"> 
                         <div class="info-cart-product">
                            <span class="cantidad-producto-carrito"></span>
                            <p class="titulo-producto-carrito"></p>
                            <span class="precio-producto-carrito"></span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon-close"> 
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </div>   -->
                </div>
                <div class="cart-total">
                    <h3> Total :</h3>
                    <!-- <span class="total-pagar">100.000</span> -->
                    <span class="total-pagar">0</span>
                </div>
                <p class="cart-empty">El carrito está vacío</p>
            </div>
        </nav>
    </div>
    <!-- header -->

    <div class="catalogo-title">
        <h1 id="anchetas-scroll"> Anchetas</h1>
    </div>

    <div class="cointainer-items">
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-1.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta personal </h2>
                <p class="precio">$40000</p>

                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-producto="Ancheta Personal"
                    data-precio="40000"
                    data-cantidad-dulces="5"
                    data-cantidad-globos="3"
                    data-nombre-dedicatorio="Feliz Cumpleaños"
                    data-cantidad-botellas="1"
                    data-objetos-1="Juguete"
                    data-objetos-2="Tarjeta"
                    data-objetos-3="Foto"
                    data-imagen="../Img/Catalogo/Ancheta-1.jpg"
                    data-frutas-1="fresas"
                    data-frutas-2="manzanas"
                    data-frutas-3="peras"
                    data-frutas-4="uvas"
                    data-frutas-5="melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>


                <button class="btn-add-cart">Añadir al Carro</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-2.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta Personal Morada</h2>
                <p class="precio">$50000</p>

                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-imagen="../Img/Catalogo/Ancheta-2.jpg"
                    data-producto="Ancheta Personal Morada"
                    data-precio="50000"
                    data-cantidad-dulces="5"
                    data-cantidad-globos="3"
                    data-nombre-dedicatorio="Feliz Cumpleaños"
                    data-cantidad-botellas="1"
                    data-objetos-1="Peluche"
                    data-objetos-2="Velas"
                    data-objetos-3="Regalo Sorpresa"
                    data-adicionales-1="confeti"
                    data-adicionales-2="perfume"
                    data-adicionales-3="pulsera"
                    data-adicionales-4="anillo"
                    data-frutas-1="fresas"
                    data-frutas-2="mangos"
                    data-frutas-3="piñas"
                    data-frutas-4="uvas"
                    data-frutas-5="melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-2">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-3.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta Pastelera</h2>
                <p class="precio">$35000</p>

                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-producto="Ancheta Pastelera"
                    data-precio="35000"
                    data-cantidad-dulces="1"
                    data-cantidad-globos="18"
                    data-nombre-dedicatorio="Feliz Cumpleaños"
                    data-cantidad-botellas="1"
                    data-objetos-1="Juguete"
                    data-objetos-2="Tarjeta"
                    data-objetos-3=""
                    data-imagen="../Img/Catalogo/Ancheta-3.jpg"
                    data-frutas-1="fresas"
                    data-frutas-2="manzanas"
                    data-frutas-3="peras"
                    data-frutas-4="uvas"
                    data-frutas-5="melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-4.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta de dulces</h2>
                <p class="precio">$27000</p>

                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-producto="Ancheta de Dulces"
                    data-precio="27000"
                    data-cantidad-dulces="9"
                    data-cantidad-globos="1"
                    data-cantidad-botellas="0"
                    data-objetos-1=""
                    data-objetos-2="Tarjeta"
                    data-objetos-3=""
                    data-imagen="../Img/Catalogo/Ancheta-4.jpg"
                    data-frutas-1="Fresas"
                    data-frutas-2="Manzanas"
                    data-frutas-3="Peras"
                    data-frutas-4="Uvas"
                    data-frutas-5="Melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-5.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta Roja</h2>
                <p class="precio">$40000</p>
                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-producto="Ancheta Roja"
                    data-precio="27000"
                    data-cantidad-dulces="9"
                    data-cantidad-globos="1"
                    data-cantidad-botellas="0"
                    data-objetos-1=""
                    data-objetos-2="Tarjeta"
                    data-objetos-3=""
                    data-imagen="../Img/Catalogo/Ancheta-5.jpg"
                    data-frutas-1="Fresas"
                    data-frutas-2="Manzanas"
                    data-frutas-3="Peras"
                    data-frutas-4="Uvas"
                    data-frutas-5="Melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>


                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Catalogo/Ancheta-6.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Ancheta Basica</h2>
                <p class="precio">$20000</p>
                <a href="AnidedPages/Customise.php"
                    class="btn-edit-cart"
                    data-producto="Ancheta Basica"
                    data-precio="27000"
                    data-cantidad-dulces="9"
                    data-cantidad-globos="1"
                    data-cantidad-botellas="0"
                    data-objetos-1=""
                    data-objetos-2="Tarjeta"
                    data-objetos-3="" s
                    data-imagen="../Img/Catalogo/Ancheta-6.jpg"
                    data-frutas-1="Fresas"
                    data-frutas-2="Manzanas"
                    data-frutas-3="Peras"
                    data-frutas-4="Uvas"
                    data-frutas-5="Melocotones"
                    data-tamaño="Mediano"

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
    </div>

    <!-- 2da seccion -->


    <div class="catalogo-title">
        <h1 id="decoraciones-scroll">Decoraciones</h1>
    </div>


    <div class="decoraciones-container">

        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Decoraciones/Decoracion-1.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Memorias Doradas</h2>
                <p class="precio">$47000</p>

                <a href="AnidedPages/CustomiseDecorations.php"
                    class="btn-edit-deco"
                    data-producto="Memorias Doradas"
                    data-precio="47000"
                    data-nombre-dedicatorio="¡Congratulations!"
                    data-imagen="../Img/Decoraciones/Decoracion-1.jpg"
                    data-globos="50, 60, 80"
                    data-arco-globos="sin arco, pequeno 50cm*60cm (x68 globos), mediano 80cm*100cm (x96 globos), grande 100cm*200cm (x128 globos)"
                    data-luces="sin luces, calidas, frias, multicolores"
                    data-columnas-globos="0, 30, 40, 50"
                    data-texto-globos="¡Te Queremos!"
                    data-botellas="1, 2, 3"
                    data-frutas="fresas, manzanas, peras"
                    data-confites="chocolate, caramelos, gomitas"
                    data-pulseras="pulsera_roja, pulsera_azul"
                    data-anillos="anillo_dorado, anillo_plata"
                    data-id="personalizar-btn-2" 

                    id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Decoraciones/Decoracion-5.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Estilo Azul Festivo</h2>
                <p class="precio">$47000</p>

                <a href="AnidedPages/CustomiseDecorations.php"
                    class="btn-edit-deco"
                    data-producto="Estilo Azul Festivo"
                    data-precio="47000"
                    data-nombre-dedicatorio="¡Felicidades!"
                    data-imagen="../Img/Decoraciones/Decoracion-5.jpg"
                    data-globos="50, 60, 80"
                    data-arco-globos="sin_arco, pequeno, grande, personalizado"
                    data-luces="sin_luces, calidas, frias, multicolores"
                    data-columnas-globos="3, 4, 5"
                    data-texto-globos="¡Te Queremos!"
                    data-botellas="1, 2, 3"
                    data-frutas="fresas, manzanas, peras"
                    data-confites="chocolate, caramelos, gomitas"
                    data-pulseras="pulsera_roja, pulsera_azul"
                    data-anillos="anillo_dorado, anillo_plata"
                    data-id="personalizar-btn-2" 
                     id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Decoraciones/Decoracion-3.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Fiesta Algodón de Azúcar</h2>
                <p class="precio">$80000</p>

                <a href="AnidedPages/CustomiseDecorations.php"
                    class="btn-edit-deco"
                    data-producto="Fiesta Algodón de Azúcar"
                    data-precio="80000"
                    data-nombre-dedicatorio="¡Felicidades!"
                    data-imagen="../Img/Decoraciones/Decoracion-3.jpg"
                    data-globos="50, 60, 80"
                    data-arco-globos="sin arco, pequeno, grande, personalizado"
                    data-luces="sin luces, calidas, frias, multicolores"
                    data-columnas-globos="3, 4, 5"
                    data-texto-globos="¡Te Queremos!"
                    data-botellas="1, 2, 3"
                    data-frutas="fresas, manzanas, peras"
                    data-confites="chocolate, caramelos, gomitas"
                    data-pulseras="pulsera_roja, pulsera_azul"
                    data-anillos="anillo_dorado, anillo_plata"
                    data-id="personalizar-btn-2" 
                     id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>

                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Decoraciones/Decoracion-4.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Jardín de Globos</h2>
                <p class="precio">$20000</p>

                <a href="AnidedPages/CustomiseDecorations.php"
                    class="btn-edit-deco"
                    data-producto="Jardín de Globos"
                    data-precio="20000"
                    data-nombre-dedicatorio="¡Felicidades!"
                    data-imagen="../Img/Decoraciones/Decoracion-4.jpg"
                    data-globos="50, 60, 80"
                    data-arco-globos="sin_arco, pequeno, grande, personalizado"
                    data-luces="sin_luces, calidas, frias, multicolores"
                    data-columnas-globos="3, 4, 5"
                    data-texto-globos="¡Te Queremos!"
                    data-botellas="1, 2, 3"
                    data-frutas="fresas, manzanas, peras"
                    data-confites="chocolate, caramelos, gomitas"
                    data-pulseras="pulsera_roja, pulsera_azul"
                    data-anillos="anillo_dorado, anillo_plata"
                    data-id="personalizar-btn-2" 
                     id="personalizar-btn-1">
                    <!-- Icono de SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-customise">
                        <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7l0 21.4c0 8.8-7.2 16-16 16l-15.8 0c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9l0-27.6c0-8.8 7.2-16 16-16l34.6 0c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM208 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z" />
                    </svg>
                </a>
                
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
    </div>

    <!-- 3ra seccion -->

    <div class="catalogo-title">
        <h1 id="regalos-scroll"> Regalos </h1>
    </div>

    <div class="regalos-container">

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-1.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>The BFF Present</h2>
                <p class="precio">$14000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>


        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-2.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2> Corazón Azul</h2>
                <p class="precio">$15000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-3.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2> Linea Make-up</h2>
                <p class="precio">$33000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-4.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>ChoCorazón de rosas</h2>
                <p class="precio">$28000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-5.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>Moño de chocolate</h2>
                <p class="precio">$12000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-6.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>Goloso de chocolate</h2>
                <p class="precio">$24000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-7.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2> Beer Time</h2>
                <p class="precio">$21800</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-8.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>Presente Girasol</h2>
                <p class="precio">$18000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-9.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2> BomBom Heart</h2>
                <p class="precio">$28000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-10.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2> pequeño Stitch</h2>
                <p class="precio">$25000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

        <div class="item-regalo">
            <figure>
                <img class="imagen-catalogo" src="../Img/Regalos/Regalo-11.jpg" alt="">
            </figure>
            <div class="info-product-regalo">
                <h2>Noche de Graduacion</h2>
                <p class="precio">$18000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
    </div>

    <!-- 4ta seccion -->

    <div class="catalogo-title">
        <h1 id="bouquets-scroll"> Bouquets </h1>
    </div>


    <div class="bouquets-container">
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Bouquets/Bouquets-1.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Pequeño Jardín Rojo</h2>
                <p class="precio">$17500</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Bouquets/Bouquets-2.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Arco-Razón</h2>
                <p class="precio">$19800</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Bouquets/Bouquets-3.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Dulce Bouquet</h2>
                <p class="precio">$22000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>
        <div class="item">
            <figure>
                <img class="imagen-catalogo" src="../Img/Bouquets/Bouquets-4.jpg" alt="">
            </figure>
            <div class="info-product">
                <h2> Sonrisas Acurrucadas</h2>
                <p class="precio">$18000</p>
                <button class="btn-add-cart" button>Añadir al Carro</button>
            </div>
        </div>

    </div>

    <script src="../Js/index.js"></script>
</body>

</html>