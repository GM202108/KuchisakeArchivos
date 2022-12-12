<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondo15 container-xxl">
    
    <img class="Anm17 "  src="./Imagenes/IMG-Escenas/Esc17.png" alt="" >
    <div class=" position-absolute Esc17x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/EscFinal.php'; ?>">Si</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/EscFinal.php'; ?>">No</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena17.js'; ?>></script>