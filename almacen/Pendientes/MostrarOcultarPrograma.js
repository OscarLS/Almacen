function mostrar(){
    document.getElementById("titulo").style.display = "block";
    document.getElementById("programa").style.display = "block";
    
}
function ocultar(){
    document.getElementById("titulo").style.display = "none";
    document.getElementById("programa").style.display = "none";
}
function mostrar_ocultar(){
    var titulo = document.getElementById("titulo");
    var entrada = document.getElementById("programa");
    if(titulo.style.display=="none" && entrada.style.display=="none"){
        mostrar();
    }else{
        ocultar();
    }
}