

var Anm8 = document.querySelector(".Anm8");


Anm8.addEventListener("click", cambio);
function cambio(){
    if (Anm8==0) {
        return
    } else {
    Anm8.setAttribute("src","./Imagenes/IMG-Escenas/Esc6x.gif");
    Anm8 = 0; 
    }
}