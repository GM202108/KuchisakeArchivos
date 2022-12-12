<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div>
    <p class="text-center">El SAMURAI recibe una carta anónima que habla sobre una posible infidelidad de su esposa.
</p>
</div>
<div class="EscenaFondo10 container-xxl">
    <img class="Anm"  src="./Imagenes/IMG-Escenas/10.png" alt="" >
    <div class=" position-absolute Esc10x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena9.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena11.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena10.js'; ?>></script>