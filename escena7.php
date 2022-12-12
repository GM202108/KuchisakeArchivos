<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo7 container-xxl">
    <img class=" position-absolute SamuraiLD" src="./Imagenes/IMG-Escenas/SamuraiLDD.png" alt="">
    <img class=" position-absolute KuchisakeLD" src="./Imagenes/IMG-Escenas/KuchisakeLDD.png" alt="">
    <div class=" position-absolute SamuraiLDPL"></div>
    <div class=" position-absolute KuchisakeLDPL"></div>
</div>

<div class="d-flex align-item-center justify-content-center gap-5">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena6.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena8.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena7.js'; ?>></script>