function mostrar(){
    document.getElementById("titulo").style.display = "block";
    document.getElementById("serieProd").style.display = "block";
    
}
function ocultar(){
    document.getElementById("titulo").style.display = "none";
    document.getElementById("serieProd").style.display = "none";
}
function mostrar_ocultar(){
    var titulo = document.getElementById("titulo");
    var entrada = document.getElementById("serieProd");
    if(titulo.style.display=="none" && entrada.style.display=="none"){
        mostrar();
    }else{
        ocultar();
    }
}