var Anm12 = document.querySelector(".Anm17");


Anm12.addEventListener("click", cambio);
function cambio(){
    if (Anm12==0) {
        return
    } else {
    Anm12.setAttribute("src","./Imagenes/IMG-Escenas/Esc17x.gif");
    Anm12 = 0; 
    }
}