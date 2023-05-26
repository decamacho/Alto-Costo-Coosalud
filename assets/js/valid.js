$(document).ready(function() {
    var divs = $('.single-card');
    for (var i = 0; i < divs.length; i += 4) {
            divs.slice(i, i + 4).wrapAll('<div class="row"></div>');
    }
});

$(document).ready(function(){
    let id= $('#detalle').val();
    $('#moreDetails').click(function (){
        
        if(id === ''){
            console.log("no hay nada :(")
        }else{
            console.log(id)
            $("#detalles").load("?controller=paciente&method=complete&id="+id);
        }
        
    })
})

function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = "á é í ó ú a b c d e f g h i j k l m n ñ o p q r s t u v w x y z A B C D E F G H I J K L M N Ñ O P Q R S T U V W X Y Z";
    especiales = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(letras.indexOf(tecla)==-1 && !tecla_especial){
       return false;
    }
}
function soloNumeros(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numero = "0123456789";
    especiales = "8-37-39-46";
    tecla_especial = false
    for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }
    if(numero.indexOf(tecla)==-1 && !tecla_especial){
        return false; 
    }
}

var arrayTipos= []

$("#addElements").click(function (e) {
    e.preventDefault()

    let idFre= $("#id_frecuencia").val()
    let nombreFre= $("#id_frecuencia option:selected").text()
    let idActividad= $("#id_actividad").val()
    let nombreActividad= $("#id_actividad option:selected").text()

    if(idFre !='') {
        if(idActividad !=''){
            if(typeof existActividad(idActividad) === 'undefined') {
                arrayTipos.push({
                    'id_frecuencia'   : idFre,
                    'nombreFrecuencia': nombreFre,
                    'id_actividad'    : idActividad,
                    'nombreActividad' : nombreActividad
                })
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El Procedimiento ya ha sido escogido'
                })
            }
            showProcedimientos()
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Debe Seleccionar Actividad para completar el procedimiento'
            })
        }
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe Seleccionar Frecuencia del procedimiento'
        })
    }
});
function existActividad(idActividad){
    let existActividad= arrayTipos.find(function (actividad) {
        return actividad.id_actividad == idActividad
    })
    return existActividad
}
function showProcedimientos() {
    $("#list-procedimiento").empty()

    arrayTipos.forEach(function (actividad) {
        let fila= '<tr><td>'+actividad.nombreActividad+'</td><td>'+actividad.nombreFrecuencia+'</td><td><button onclick="removeElements('+actividad.id_actividad+')" type="button" class="btn btn-danger">-</button></td></tr>'
        $("#list-procedimiento").append(fila)
    })
}
function removeElements(idActividad) {
    let index= arrayTipos.indexOf(existActividad(idActividad))
    arrayTipos.splice(index, 1)
    showProcedimientos()
}

$("#proceso").click(function (e) {
    e.preventDefault()

    let url= "?controller=paciente&method=save"
    let params= {
        nombre      : $("#nombre").val(),
        descripcion : $("#descripcion").val(),
        id_riesgo   : $("#id_riesgo").val(),
        id_programa : $("#id_programa").val(),
        actividad   : arrayTipos
    }

    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            let info= '<div autofocus class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+response.message+'</div>'
            $("#mensaje").append(info)
        }else{
            Swal.fire(
                'Correcto',
                'Se registró la información correctamente',
                'success'
              )
            let idPrograma= $("#id_programa").val()
            location.href= "?controller=paciente&method=more&id="+idPrograma
        }
    }, 'json').fail(function (error) {

        let info= '<div autofocus class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+response.message+'</div>'
        $("#mensaje").append(info)
        //Swal.fire("Inserción Fallida: ("+error.responseText+")")
        console.log(error)
    })
})

var arrayPrograma= []

$("#addPrograma").click(function (e) {
    e.preventDefault()

    let idPaciente        = $("#id_paciente").val()
    let nombrePaciente    = $("#id_paciente option:selected").text()
    let idDiagnostico     = $("#id_diagnostico").val()
    let nombreDiagnostico = $("#id_diagnostico option:selected").text()
    let feIngreso         = $("#fecha_ingreso").val()
    let feDiagnostico     = $("#fecha_diagnostico").val()
    let asignado          = $("#id_asignado").val()
    let nombAsignado      = $("#id_asignado option:selected").text()

    if(idPaciente !='') {
        if(idDiagnostico !=''){
            if(asignado !=''){
                if(feIngreso !=''){
                    if(feDiagnostico !=''){
                        if(typeof existPaciente(idPaciente) === 'undefined') {
                            arrayPrograma.push({
                                'id_paciente'       : idPaciente,
                                'paciente'          : nombrePaciente,
                                'id_diagnostico'    : idDiagnostico,
                                'diagnostico'       : nombreDiagnostico,
                                'fecha_ingreso'     : feIngreso,
                                'fecha_diagnostico' : feDiagnostico,
                                'id_asignado'       : asignado,
                                'asignado'          : nombAsignado
                            })
                        }else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'El Tipo Paciente ya se encuentra seleccionado'
                            })
                        }
                        showPrograma()
                    }else{
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Debe Ingresar la Fecha de Diagnóstico'
                        })
                    }
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Debe Seleccionar la Fecha de Ingreso'
                    })
                }
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Debe Asignar un Gestor'
                })
            }
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Debe seleccionar un Diagnóstico'
            })
        }
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Debe seleccionar Tipo de Paciente'
        })
    }
});

function existPaciente(idPaciente){
    let existPaciente= arrayPrograma.find(function (paciente) {
        return paciente.id_paciente == idPaciente
    })
    return existPaciente
}
function showPrograma() {
    $("#list-programa").empty()

    arrayPrograma.forEach(function (paciente) {
        let nprograma= $("#id_asignado").val()
        let datos= '<tr><td>'+paciente.paciente+'</td><td>'+paciente.diagnostico+'</td><td>'+paciente.fecha_ingreso+'</td><td>'+paciente.fecha_diagnostico+'</td><td>'+paciente.asignado+'</td><td><button onclick="removePrograma('+paciente.id_paciente+')" type="button" class="btn btn-danger">-</button></td></tr>'
        $("#list-programa").append(datos)
    })
}
function removePrograma(id_paciente) {
    let index= arrayPrograma.indexOf(existPaciente(id_paciente))
    arrayPrograma.splice(index, 1)
    showPrograma()
}

$("#plan").click(function (e) {
    e.preventDefault()

    let url    = "?controller=persona&method=save"
    let params = {
        nombre:            $("#nombre").val(),
        apellido:          $("#apellido").val(),
        documento:         $("#documento").val(),
        telefono:          $("#telefono").val(),
        direccion:         $("#direccion").val(),
        fecha_nacimiento:  $("#fecha_nacimiento").val(),
        sexo:              $("#sexo").val(),
        id_tipo_documento: $("#id_documento").val(),
        rh:                $("#rh").val(),
        id_municipio:      $("#id_municipio").val(),
        email:             $("#email").val(),
        id_regimen:        $("#id_regimen").val(),
        id_programa:       $("#id_programa").val(),
        programa:          arrayPrograma

    }
    $.post(url, params, function (response) {
        if(typeof response.error !== 'undefined') {
            let info= '<div autofocus class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+response.message+'</div>'
            $("#mensaje").append(info)
            //alert(response.message)
            console.log(response.message)
        }else{
            Swal.fire(
                'Correcto',
                'Se registró la información correctamente',
                'success'
              )
            let idprograma= $("#idpaciente").val()
            location.href= "?controller=persona&method=all&paciente="+idprograma
        }
    }, 'json').fail(function (error) {

        alert("Inserción Fallida: ("+error.responseText+")")
        console.log(error)
    })
})