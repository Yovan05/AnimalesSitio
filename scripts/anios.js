
function anios(){
    var anioInicial= document.getElementById("anioInicio").value;
    var anioFinal= document.getElementById("anioFinal").value;
    var div_aniosV = document.getElementById("aniosV");
    div_aniosV.innerHTML ='<p></p>';
    if(anioInicial < anioFinal){
        for(let i = anioInicial; i <= anioFinal; i++ ){
            if(i%4==0){
                div_aniosV.innerHTML +='<p class="bisciesto">' + i + '</p>'; 
            }else{
                div_aniosV.innerHTML +='<p>' + i + '</p>';
            }
            
        }
    }else{
        alert("El año de incio debe ser menor al año final")
    }
}

function clean(){
    var anioInicial= document.getElementById("anioInicio").value ="";
    var anioFinal= document.getElementById("anioFinal").value = "";
    var div_aniosV = document.getElementById("aniosV");
    div_aniosV.innerHTML ='<p></p>';
}

function diasFaltantes(){
    var today = new Date();
    var year = today.getFullYear();
    var div_faltantes = document.getElementById("faltantes");
    if(year%4==0){
        var yearNextB = year+4;
    }else{
        while((year+1)%4 != 0){
            year++;
        }
        yearNextB = year+1;
    }
    var bisDate = new Date(`${yearNextB}-01-01`);
    var diffDays = bisDate-today;
    var daysLeft = Math.ceil(diffDays/(1000*60*60*24));
    var yearLeft = Math.floor(daysLeft/365);
    div_faltantes.innerHTML = '<h2> El proximo año bisciesto es en: '+yearNextB+'</h2>';
    div_faltantes.innerHTML += '<h2> Faltan: '+yearLeft+' años con '+(daysLeft-(yearLeft*365))+ ' dias</h2>';
}