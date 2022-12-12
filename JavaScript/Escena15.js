var Anm9 = document.querySelector(".Anm15");


Anm9.addEventListener("click", cambio);
function cambio(){
    if (Anm9==0) {
        return
    } else {
    Anm9.setAttribute("src","./Imagenes/IMG-Escenas/Esc15x.gif");
    Anm9 = 0; 
    }
}