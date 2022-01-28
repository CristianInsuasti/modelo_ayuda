var articulosModelo = {
    listaArticulos: [],
    pos: -1
};

var articulo = {

    constructor: function () {
        $('#frm').on('submit', articulo.guardarUsuario);
        // articulo.consultarArticulos();
    },
    guardarUsuario: function (e) {
        e.preventDefault();
        e.stopPropagation();
        var formulario = $('#frm');
        var data = {};
        data.nombre = formulario.find('#nombreArticulo').val();
        data.descripcion = formulario.find('#descripcionArticulo').val();
        
        app.ajax('../Controlador/ArticuloController.php?opcion=insertar', data, articulo.respuestaUsuario);
    },
    respuestaUsuario: function (respuesta) {
        app.mensaje(respuesta);
        $('#frm input').val('');
    },
    consultarArticulos: function () {
        var data = {};
        //data.opcion = 'consultar';
        app.ajax('../Controlador/ArticuloController.php?opcion=consultar', data, articulo.respuestaConsultaArticulos);
    },
    respuestaConsultaArticulos: function () {
        alert("OK");
    }

}

articulo.constructor();