var Anm4 = document.querySelector(".Anm4");


Anm4.addEventListener("click", cambio);
function cambio(){
    if (Anm4==0) {
        return
    } else {
    Anm4.setAttribute("src","./Imagenes/IMG-Escenas/Esc13.gif");
    Anm4 = 0; 
    }
}