var Anm2 = document.querySelector(".Anm2");


Anm2.addEventListener("click", cambio);
function cambio(){
    if (Anm2==0) {
        return
    } else {
    Anm2.setAttribute("src","./Imagenes/IMG-Escenas/11x.gif");
    Anm2 = 0; 
    }
}