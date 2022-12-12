var Anm = document.querySelector(".Anm");


Anm.addEventListener("click", cambio);
function cambio(){
    if (Anm==0) {
        return
    } else {
    Anm.setAttribute("src","./Imagenes/IMG-Escenas/10x.gif");
    Anm = 0; 
    }
}

