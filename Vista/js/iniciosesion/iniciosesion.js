// var usuarioModeloTorneo = {
//     listaUsuarios: [],
//     pos: -1
// };

var inicioSesion = {
    constructor: function () {
        $('#frm').on('submit', inicioSesion.validarInicio);
        // $('#admin').on('click', inicioSesion.validarInicioADMIN);
    },
    validarInicio: function (e) {
        e.preventDefault();
        //e.stopPropagation();
        var formulario = $('#frm');
        var email = formulario.find('#email').val();
        var clave = formulario.find('#clave').val();
        if (email == '') {
            app.mensaje({ codigo: -1, mensaje: 'Debe ingresar un email' });
            return;
        }
        if (clave == '') {
            app.mensaje({ codigo: -1, mensaje: 'Debe ingresar una clave' });
            return;
        }
        var data = { 'email': email, 'clave': clave };
        app.ajax('../Controlador/SesionController.php?opcion=iniciarSesion', data, inicioSesion.respuestaInicio);
    },
    respuestaInicio: function (respuesta) {
        if (respuesta.codigo < 0) {
            app.mensaje(respuesta);
            return;
        }
        location.href = "IndexUsuario.php";
    },
    // validarInicioADMIN: function (e) {
    //     e.preventDefault();
    //     //e.stopPropagation();
    //     var formulario = $('#frm');
    //     var usuario = formulario.find('#usuario').val();
    //     var clave = formulario.find('#clave').val();
    //     if (usuario == '') {
    //         app.mensaje({codigo: -1, mensaje: 'Debe ingresar un usuario'});
    //         return;
    //     }
    //     if (clave == '') {
    //         app.mensaje({codigo: -1, mensaje: 'Debe ingresar una clave'});
    //         return;
    //     }
    //     var data = {'usuario': usuario, 'clave': clave};
    //     app.ajax('../Controlador/SesionController.php?opcion=iniciarSesionADMIN', data, inicioSesion.respuestaInicioADMIN);
    // },
    // respuestaInicioADMIN: function (respuesta) {
    //     if (respuesta.codigo < 0) {
    //         app.mensaje(respuesta);
    //         return;
    //     }
    //     location.href = "index_1.php";
    // }
};
inicioSesion.constructor();
