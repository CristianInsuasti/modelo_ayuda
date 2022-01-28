var usuarioModelo = {
    listaUsuarios: [],
    pos: -1
};
var usuarioModeloTorneo = {
    listaUsuarios: [],
    pos: -1
};

var gestionUsuario = {
    // constructor: function () {
    //     gestionUsuario.consultarUsuarios();
    //     $('#frm').on('submit', gestionUsuario.guardarUsuario);
    //     $('#btnEliminar').on('click', gestionUsuario.eliminarUsuario);
    //     $('#btnActualizar').on('click', gestionUsuario.actualizar);
    // },
    // guardarUsuario: function (e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     var formulario = $('#frm');
    //     var data = {};
    //     data.nombre = formulario.find('#txtNombre').val();
    //     data.email = formulario.find('#txtEmail').val();
    //     data.clave = formulario.find('#txtClave').val();
    //     data.usuario = formulario.find('#txtUsuario').val();
    //     app.ajax('../Controlador/UsuarioController.php?opcion=insertar', data, gestionUsuario.respuestaUsuario);
    // },
    // respuestaUsuario: function (respuesta) {
    //     app.mensaje(respuesta);
    //     gestionUsuario.consultarUsuarios();
    //     $('#frm input').val('');
    // },
    // consultarUsuarios: function () {
    //     var data = {};
    //     //data.opcion = 'consultar';
    //     app.ajax('../Controlador/UsuarioController.php?opcion=consultar', data, gestionUsuario.respuestaConsultaUsuario);
    // }, 
    // respuestaConsultaUsuario: function (respuesta) {
    //     var cuerpo = $('#cuerpo');
    //     cuerpo.empty();
    //     var datos = respuesta.datos;
    //     usuarioModelo.listaUsuarios = datos;
    //     for (var i = 0; i < datos.length; i++) {
    //         var registro = datos[i];
    //         var fila = "<tr>" +
    //             "<td>" + registro.nombre + "</td>" +
    //             "<td>" + registro.email + "</td>" +
    //             "<td>" + registro.clave + "</td>" +
    //             "<td>" + registro.usuario + "</td>" +
    //             "<td><button class='btn btn-info' pos=" + i + "><i class=' glyphicon glyphicon-pencil'></i></button></td>" +
    //             "<td><button class='btn btn-danger' pos=" + i + "><i class='glyphicon glyphicon-trash'></i></button></td>" +
    //             "</tr>";
    //         cuerpo.append(fila);
    //     }
    //     $('#cuerpo button.btn-danger').on('click', function () {
    //         var pos = $(this).attr('pos');
    //         usuarioModelo.pos = pos;
    //         var usuario = usuarioModelo.listaUsuarios[pos];
    //         $('#texto').text(usuario.nombre + ' ' + usuario.usuario);
    //         $('#confirmacion').modal('show');
    //     });

    //     $('#cuerpo button.btn-info').on('click', function () {
    //         var pos = $(this).attr('pos');
    //         usuarioModelo.pos = pos;
    //         var usuario = usuarioModelo.listaUsuarios[pos];
    //         $('#idJugador').val(usuario.idJugador);
    //         $('#jugador').text(usuario.nombre + ' ' + usuario.usuario);
    //         $('#nombre').val(usuario.nombre);
    //         $('#username').val(usuario.usuario);
    //         $('#email').val(usuario.email);
    //         $('#clave').val(usuario.clave);
    //         $('#estado').val(usuario.estado);
    //         $('#actualizar').modal('show');
    //     });

    // },
    // eliminarUsuario: function (e) {
    //     var pos = usuarioModelo.pos;
    //     if (pos < 0) {
    //         app.mensaje({ 'codigo': -1, 'mensaje': 'Debe seleccionar un usuario' });
    //         return;
    //     }
    //     var data = { 'id': usuarioModelo.listaUsuarios[pos].idJugador };
    //     app.ajax('../Controlador/UsuarioController.php?opcion=eliminar', data, gestionUsuario.respuestaEliminarUsuario);
    // },
    // respuestaEliminarUsuario: function (respuesta) {
    //     app.mensaje(respuesta);
    //     $('#confirmacion').modal('hide');
    //     gestionUsuario.consultarUsuarios();
    // },
    // actualizar: function (e) {
    //     e.preventDefault();
    //     e.stopPropagation();
    //     var formulario = $('#actualizar');
    //     var data = {};
    //     data.id = formulario.find('#idJugador').val();
    //     data.nombre = formulario.find('#nombre').val();
    //     data.usuario = formulario.find('#username').val();
    //     data.email = formulario.find('#email').val();
    //     data.clave = formulario.find('#clave').val();
    //     data.estado = formulario.find('#estado').val();
    //     //var data = {'nombre': nombre, 'usuario': usuario,  'clave': clave, 'email': email, 'estado': estado, 'id': usuarioModelo.listaUsuarios[pos].idJugador, };
    //     app.ajax('../Controlador/UsuarioController.php?opcion=actualizar', data, gestionUsuario.respuestaActilizar);
    //     //        gestionUsuario.consultarUsuarios();
    //     //        gestionUsuario.respuestaConsultaUsuario();
    // },
    // respuestaActilizar: function (respuesta) {
    //     app.mensaje(respuesta);
    //     $('#actualizar').modal('hide');
    //     gestionUsuario.consultarUsuarios();
    //     //        gestionUsuario.respuestaConsultaUsuario();
    // }
};
gestionUsuario.constructor();
