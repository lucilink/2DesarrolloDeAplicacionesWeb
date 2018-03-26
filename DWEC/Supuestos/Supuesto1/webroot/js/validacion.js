(function(){
        var modo=document.getElementById("modo");
        var tiempo=document.getElementById("tiempo");
        var tipo=document.getElementById("tipo");
        function elegirModo(){
            if(this.value==="subjuntivo" && tipo.value==="simple"){
                tiempo.children[2].disabled=true;
                tiempo.children[4].disabled=true;
                tiempo.children[7].disabled=true;
                tiempo.children[9].disabled=true;
                tiempo.children[5].disabled=true;
                tiempo.children[6].disabled=true;
                tiempo.children[8].disabled=true;

                /*if(tipo.value==="simple"){
                    tiempo.children[5].disabled=true;
                    tiempo.children[6].disabled=true;
                    tiempo.children[8].disabled=true;
                }else{
                    tiempo.children[5].disabled=false;
                    tiempo.children[6].disabled=false;
                    tiempo.children[8].disabled=false;
                }
                
                if(tipo.value==="compuesto"){
                    tiempo.children[0].disabled=true;
                    tiempo.children[1].disabled=true;
                    tiempo.children[3].disabled=true;
                }else{
                    tiempo.children[0].disabled=false;
                    tiempo.children[1].disabled=false;
                    tiempo.children[3].disabled=false;
                }*/
                
            }else{
                tiempo.children[2].disabled=false;
                tiempo.children[4].disabled=false;
                tiempo.children[7].disabled=false;
                tiempo.children[9].disabled=false;
                tiempo.children[5].disabled=false;
                tiempo.children[6].disabled=false;
                tiempo.children[8].disabled=false;
            }                                        
        }
        modo.addEventListener("change", elegirModo);
    }())
    
function cerrarVentana(){
    document.getElementById("vsec").removeChild(document.getElementById("cerrado"));
}


