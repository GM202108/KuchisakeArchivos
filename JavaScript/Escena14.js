var Anm5 = document.querySelector(".Anm5");


Anm5.addEventListener("click", cambio);
function cambio(){
    if (Anm5==0) {
        return
    } else {
    Anm5.setAttribute("src","./Imagenes/IMG-Escenas/Esc14.gif");
    Anm5 = 0; 
    }
}