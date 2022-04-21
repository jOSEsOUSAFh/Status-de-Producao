
let datas = new Date()

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
        programadoDia.push(programadoMes / qtdiaMes())
    }
    
    return programadoDia
} 

function retornaDiasDoMes(){

    let resultados = []
    for(let i = 1; i <= qtdiaMes(); i++ ){
        resultados.push(i)
    }
    console.log(resultados)
    return resultados
}








////////////////////////////////////////////// GRAFICO BARRA/////////////////////////////////////////////////////////////////
$('document').ready(function(){
    
    $.ajax({
        type: "POST",
        url: "graficoBar.php",
        dataType: "json",
        success: function(data){
            var quantidadeArray = [];
            var dataArray = [];



            for(let i in data){
                quantidadeArray.push(data[i].produzidoDia)
                dataArray.push(data[i].data_chegada.split('-').reverse().join('/'))
                
                
            }



           graficoBar(dataArray, quantidadeArray )

        
        }
    }); 


})



function graficoBar (datachegada, quantidade){


  const labels = datachegada

    const data = {
    labels: labels,
    datasets: [{
        label: 'Programado',
        backgroundColor: 'rgb(166, 249, 247)',
        borderColor: 'rgb(255, 99, 132)',
        data: retornaMetaDia()





    },{

        label: 'Produzido',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: quantidade

        
  


        
    }],
    
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        yAxes: [{
            ticks: {
                max: 1000,
                min: 0,
                // stepSize: 50
            }
        }]
      }
    },
  };

  const myChart = new Chart(
    document.getElementById('myBarChart'),
    config
  );
  

}

//////////////////////////////////Grafico Pizza////////////////////////////////////////////////////

$('document').ready(function(){

    $.ajax({
        type: "POST",
        url: "graficoPie.php",
        dataType: "json",
        success: function(data){
            var quantidadeProdMes = [];
        


            for(let i in data){
                quantidadeProdMes.push(data[i].produzidoTotal)
                
                
            }
            
            graficoPie(quantidadeProdMes)
        }
    }); 


})



function graficoPie(totalProduzido){

const totalMetaMes = programadoMes

const saldoPendente = totalMetaMes - totalProduzido


///////////////////////////Parte do grafico em tabela///////////////////////////////
var labelProdBB = document.createTextNode(totalProduzido)
document.getElementById('Metaexecutada').appendChild(labelProdBB)

var labelPendente = document.createTextNode(saldoPendente)
document.getElementById('saldoPendente').appendChild(labelPendente)


const data = {
    labels: [
      'Total Meta',
      'Executado',
      'Saldo Pendente'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [totalMetaMes, totalProduzido, saldoPendente],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
    //   hoverOffset: 4
    }]
  };


    
      const config = {
        type: 'doughnut',
        data: data,
      };
    
      const myChart = new Chart(
        document.getElementById('myPieChart'),
        config
      );
      
    }


    //////////////////////////////////////////////////////////////////////////////////


    var labelMeta = document.createTextNode(programadoMes)
    document.getElementById('totalMeta').appendChild(labelMeta)


    var Metadia = programadoMes / qtdiaMes()
    var labelMeta = document.createTextNode(Metadia)
    document.getElementById('MetaDiaria').appendChild(labelMeta)
    
    




    
