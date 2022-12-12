<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo14 container-xxl">
    
    <img class="Anm5 position-absolute" src="./Imagenes/IMG-Escenas/Esc13xc.png" alt="" >
    <div class=" position-absolute Esc14x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena13.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena15.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena14.js'; ?>></script>