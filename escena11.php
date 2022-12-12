<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div>
    <p class="text-center">Lleno de ira vuelve de la guerra angustiado por la carta. </p>
</div>
<div class="EscenaFondo11 container-xxl">
    <img class="Anm2"  src="./Imagenes/IMG-Escenas/11.png" alt="" >
    <div class=" position-absolute Esc11x"></div>
</div>

<div class="d-flex align-item-center justify-content-center">
    <div class=" m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena10.php'; ?>">Anterior</a>
    </div>

    <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . '/escena12.php'; ?>">Siguiente</a>
    </div>
</div>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>

<script src=<?php echo baseUrl . './JavaScript/Escena11.js'; ?>></script>