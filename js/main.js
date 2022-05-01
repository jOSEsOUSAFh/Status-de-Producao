
$(function(){
       
    $(".sortable").sortable({
        connectWith: ".sortable",
        placeholder: 'dragHelper',
        scroll: true,
        revert: true,
        cursor: "move",
        update: function(event, ui) {
             var cad_id_item_list = $(this).sortable('toArray').toString();
           
             $.ajax({
                 url: 'ordenar.php',
                 type: 'POST',
                 data: {id : cad_id_item_list},
                 success: function(data) {
                    
                 }
             });
        },
        start: function() {
                            console.log("start")            
        },
        stop: function() {
                        console.log("stop")
        }
    });
}); 


// $(function(){

//     $.ajax({
//         type: "POST",
//         url: "graficoTabela.php",
//         dataType: "json",
//         success: function(data){

//             var totalVeiculosCarregados = [];
        


//             for(let i in data){
//                 totalVeiculosCarregados.push(data[i].totalVeiculosCarregados);
                
                
//             }
            
//             tabelaInfo(totalVeiculosCarregados)
//             console.log(totalVeiculosCarregados)
//         }
//     }); 


// })

// function tabelaInfo( totalVeiculosCarregados){

//     var totalVeiculosCarregados = document.createTextNode(totalVeiculosCarregados)
//     document.getElementById('qtdCarrosCarregados').appendChild(totalVeiculosCarregados)

//   }




