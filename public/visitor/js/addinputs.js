//------------------------------------------------------------------Inputs---------------------------------------------------------
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $("#telefonos_vertice"); //Fields wrapper
    var add_button      = $("#agregar_telefono"); //Add button ID
   
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="row" id="telefono'+x+'"><div class="col s4 l4"><div class="row"><div class="input-field col s12"><input id="dueño'+x+'" type="text" class="validate" name="dueño'+x+'"><label for="dueño">Dueño del teléfono</label></div></div></div><div class="col s4 l4"><div class="row"><div class="input-field col s12"><input id="numero'+x+'" type="text" class="validate" name="numero'+x+'"><label for="numero">Numero telefónico</label></div></div></div><div class="col s4 l4"><div class="row"><div class="input-field col s12 center"><a href="#" class="remove_field waves-effect waves-light btn red">Eliminar</a></div></div></div> </div>'); //add input box
        }
    });
   
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $('#telefono'+x+'').remove();; x--;
    })
});
