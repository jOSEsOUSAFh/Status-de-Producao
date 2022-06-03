
let datas = new Date()

var primeiroDiaMeS = new Date(datas.getFullYear(), datas.getMonth(),1);




 let mes = String(datas.getMonth()+1)

 let dia = String(datas.getDate())
 
 

 let qtdiaMes = () =>{
     switch(mes){
         case `1` :
            return 31
            case `2` :
                return 28
                case `3` :
                    return 31
                    case `4` :
                        return 30
                        case `5` :
                            return 31
                            case `6` :
                                return 30
                                case `7` :
                                    return 31
                                    case `8` :
                                        return 31
                                        case `9` :
                                            return 30
                                            case `10` :
                                                return 31
                                                case `11` :
                                                    return 30
                                                    case `12` :
                                                        return 31
                        
     }
 }

 programadoMes = 12000

function retornaMetaDia(){

   let = programadoDia = []

    for(let i = 1; i <= qtdiaMes(); i++ ){
        programadoDia.push(Math.round(programadoMes / qtdiaMes()))
    }

    
    return programadoDia
} 


function retornaDiasDoMes(){

    let resultados = []
    for(let i = 1; i <= qtdiaMes(); i++ ){
        resultados.push(i)
    }
    // console.log(resultados)
    return resultados
}








////////////////////////////////////////////// GRAFICO BARRA/////////////////////////////////////////////////////////////////

$('#search').click(function(){
  var data_inicio = $('#data_inicio').val();
  var data_final = $('#data_final').val();
    if(data_inicio != '' && data_final != ''){

      $.post('graficos/graficoBarFilter.php',{data_inicio:data_inicio,data_final:data_final},function(result){

        var data = JSON.parse(result);
        var dados = [];
        console.log(data)


        for(let i in data){
          dados.push(data)
          
      }
      
    
      })

     
    }
    else{
     alert("O filtro requer parametros");
    }
  

  






 

 

 });
