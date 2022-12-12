var Anm3 = document.querySelector(".Anm3");


Anm3.addEventListener("click", cambio);
function cambio(){
    if (Anm3==0) {
        return
    } else {
    Anm3.setAttribute("src","./Imagenes/IMG-Escenas/Esc12.gif");
    Anm3 = 0; 
    }
}