<?php 
include './components/init_page.php';
include './components/navbar.php';
?>

<div class="EscenaFondoFinal container-xxl">
    
<img class="position-absolute" src="./Imagenes/PapelHistoria.svg" alt="">

<p class="AnmFinal2 position-absolute text-center w-50 wx-auto ">ACABAS DE MORIR</p>
<p class="AnmFinal position-absolute text-center w-50 wx-auto ">Gracias por participar en nuestro cómic digital interactivo, vuelve al inicio para seguir navegando.</p>
    
</div>

<div class="d-flex align-item-center justify-content-center">
   <div class="m-1 diseño-boton ">
        <a class=" tp-style-nav text-decoration-none diseño-letra"
            href="<?php echo baseUrl . ' /historia.php'; ?>">Inicio</a>
    </div>
</div>

<audio src="./Audios-Videos/Tenebrosa.mp3" autoplay loop></audio>

<!-- No tocar -->
<?php 
include './components/script.php';
?>
<!-- Final No tocar -->


<?php include './components/end_page.php';?>