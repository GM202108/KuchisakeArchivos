<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo5 container-xxl">
    <div class=" position-absolute Frente5PL" ></div>
    <img class=" position-absolute Frente5" src="./Imagenes/IMG-Escenas/5Frente.png" alt="">
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena4.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena6.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena5.js'; ?>></script>