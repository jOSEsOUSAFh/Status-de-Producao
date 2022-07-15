
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
            // var ob = document.getElementById("teste");
            // ob.classList.add("newclass");        
        },
        stop: function() {
                        // console.log("stop")
        }
    });
}); 


  
  
  
  