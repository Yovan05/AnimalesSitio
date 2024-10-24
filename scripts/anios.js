
function anios(){
    var anioInicial= document.getElementById("anioInicio").value;
    var anioFinal= document.getElementById("anioFinal").value;
    var div_aniosV = document.getElementById("aniosV");
    div_aniosV.innerHTML ='<p></p>';
    for(let i = anioInicial; i <= anioFinal; i++ ){
        if(i%4==0){
            div_aniosV.innerHTML +='<p class="visciesto">' + i + '</p>'; 
        }else{
            div_aniosV.innerHTML +='<p>' + i + '</p>';
        }
        
    }

}