<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo12 container-xxl">
    
    <img class="Anm3 "  src="./Imagenes/IMG-Escenas/Esc12x.png" alt="" >
    <div class=" position-absolute Esc12x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena11.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena13.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena12.js'; ?>></script>