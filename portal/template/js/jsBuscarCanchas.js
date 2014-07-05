var ruta = window.location.host+"/canchas";

$(function(){   
    
   

    // ACCION COMBO DEPARTAMENTO -> BUSCAR PROVINCIAS Y DISTRITOS
    $("#cbo_fnd_cancha_departamentos").bind('change', function(event){
        get_provincias();
        get_distritos();
    });  
    
    // ACCION COMBO DEPARTAMENTO -> BUSCAR PROVINCIAS Y DISTRITOS
    $("#btn_fnd_canchas").bind('click', function(event){
        search_canchas();
    }); 
   
});

// FUNCION DE BUSQUEDA DE CANCHAS
function search_canchas(){
    var nombre_cancha,id_depa,desc_depa,id_prov,desc_prov,id_dis,desc_dis,cadena;
    nombre_cancha = $('#txt_fnd_cancha_nombre').val();
    id_depa = $('#cbo_fnd_cancha_departamentos').val();
    id_prov = $('#cbo_fnd_cancha_provincias').val();
    id_dis = $('#cbo_fnd_cancha_distritos').val();
    desc_depa = $('#cbo_fnd_cancha_departamentos option:selected').text();
    desc_prov = $('#cbo_fnd_cancha_provincias option:selected').text();
    desc_dis = $('#cbo_fnd_cancha_distritos option:selected').text();
    
    cadena = nombre_cancha+'-'+desc_depa+'-'+desc_prov+'-'+desc_dis
    
    if(nombre_cancha == ""){
        if(id_depa == ""){
            alert("Seleccione el Departamento");
        }else if(id_prov == ""){
            alert("Seleccione la Provincia");
        }else if(id_dis == ""){
            alert("Seleccione el Distrito");
        }else{
            window.location.href = "http://"+ruta+"/portal/canchas/busqueda/"+cadena;
        }
    }else{
        window.location.href = "http://"+ruta+"/portal/canchas/busqueda/"+cadena;
    }
}


// FUNCIÓN PARA BUSCAR PROVINCIAS SEGUN DEPARTAMENTO SELECCIONADO
function get_provincias(){
    $.ajax({
        type: "POST",
        url: "inicio/getUbigeo",
        cache: false,
        data: {
            'name_ubigeo' : 'provincias',
            'name_mantenedor' : 'cancha',
            'Id_Departamento' : $('#cbo_fnd_cancha_departamentos option:selected').val(),
            'accion_ubigeo' : 'fnd'
        },
        success: function(data) {
            $("#cont_fnd_cancha_provincias").html(data);

            // ACCION COMBO PROVINCIA -> BUSCAR DISTRITOS
            $("#cbo_fnd_cancha_provincias").bind('change', function(event){
                get_distritos();
            });
        },
        error: function() { 
            alert("error");
        }              
    });
}

// FUNCIÓN PARA BUSCAR DISTRITOS SEGUN PROVINCIA SELECCIONADA
function get_distritos(){
    $.ajax({
        type: "POST",
        url: "inicio/getUbigeo",
        cache: false,
        data: {
            'name_ubigeo' : 'distritos',
            'name_mantenedor' : 'cancha',
            'Id_Departamento': $('#cbo_fnd_cancha_departamentos option:selected').val(),
            'Id_Provincia': $('#cbo_fnd_cancha_provincias option:selected').val(),
            'accion_ubigeo' : 'fnd'
        },
        success: function(data) {
            $("#cont_fnd_cancha_distritos").html(data);  
        },
        error: function() { 
            alert("error");
        }              
    });
}

