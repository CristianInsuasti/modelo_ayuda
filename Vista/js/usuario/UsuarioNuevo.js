var gestionUsuarioNuevo = {
    constructor: function () {
        $('#frm').on('submit', gestionUsuarioNuevo.guardarUsuario);
    },
    guardarUsuario: function (e) {
        e.preventDefault();
        e.stopPropagation();
        var formulario = $('#frm');
        var data = {};
        data.nombre = formulario.find('#txtNombre').val();
        data.email = formulario.find('#txtEmail').val();
        data.clave = formulario.find('#txtClave').val();
        app.ajax('../Controlador/UsuarioController.php?opcion=insertar', data, gestionUsuarioNuevo.respuestaUsuario);
    },
    respuestaUsuario: function (respuesta) {
        app.mensaje(respuesta);
        $('#frm input').val('');
    }

};
gestionUsuarioNuevo.constructor();



