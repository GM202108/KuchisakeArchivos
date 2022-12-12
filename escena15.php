<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo15 container-xxl">
    
    <img class="Anm15 "  src="./Imagenes/IMG-Escenas/Esc15.png" alt="" >
    <div class=" position-absolute Esc15x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena14.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena16.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena15.js'; ?>></script>