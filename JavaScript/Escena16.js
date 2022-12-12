var Anm10 = document.querySelector(".Anm16");


Anm10.addEventListener("click", cambio);
function cambio(){
    if (Anm10==0) {
        return
    } else {
    Anm10.setAttribute("src","./Imagenes/IMG-Escenas/Esc16x.gif");
    Anm10 = 0; 
    }
}