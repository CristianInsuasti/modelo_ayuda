var app = {
  ajax:function(url, data, funcion){
      $.ajax({
        "url": url,
        type: 'POST',
        "data": data,
        beforeSend: function(e){
          console.log("Enviando petición");
        }, error: function(error){
          console.log("Error en la petición")
        }, success: function(respuesta){
            funcion(respuesta);
      }
    });
  }, mensaje:function(respuesta){
      var divMensaje = $('#mensaje');
      var clase = (respuesta.codigo > 0) ? 'alert-success': 'alert-danger';
      divMensaje.removeClass('alert-danger alert-success hidden');
      divMensaje.addClass(clase);
      divMensaje.text(respuesta.mensaje);
      divMensaje.show();
      divMensaje.fadeOut(5000);
  }
};
