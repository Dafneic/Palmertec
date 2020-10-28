$(document).ready(function () {

  var subserviciosInfo = [];
  var subserviciosInfoTemp = [];
  var subserviciosInfoCount = 1;
  var total = 0;
  $("#Servicio").change(function () { //Evento onchange

    $.get("../Controlador/subservicio2.php", "Servicio=" + $("#Servicio").val(), //Peticion
      function (equis) { //onSuccess
        var json = JSON.parse(equis);
        subserviciosInfo = json;
        // for (var i = 0; i < json.length; i++) {
        //   $('.select-Subservicio').append('<option value="' + json[i].id + '">' + json[i].nombre + '</option>');
        // }
        //console.log(dataJson);
      });

  });
  $("#agregarEtapa").click(function () {

    if (subserviciosInfoCount <= subserviciosInfo.length) {

      var contenidoDinamico = '<div class="col-lg-12" id="subservicio-' + subserviciosInfoCount + '">'
        + '<div  class="form-group" id="parent_div">'
        + '<div  class="row form-group child_div">'
        + '<label for="day" class="col-xs-2 control-label"></label>'
        + '<div   class="col-xs-1 col-lg-9">'
        + '<label for="form-input-col-xs-2" class="wb-inv">Elige las etapas necesarias:</label>'
        + '<div class="input-group" style="">'
        + '<?php foreach ($Subservicio as $Subservicio) { ?>' 
        + '<select class="form-control select-Subservicio" id="combo-Subservicio-' + subserviciosInfoCount + '" name="Subservicio[]">'
        + '<option value="" >-- SELECCIONE --</option>'
        + '</select>'
        + '<?php } ?>' 
        + '</div>'
        + '</div>'

        + '<div class="col-xs-12 col-lg-3">'
        + '<label for="form-input-col-xs-3" class="wb-inv">Precio</label>'
        + '<div class="input-group">'
        + '<input type="text" class="form-control" name="Item_Precio_subservicio[]" placeholder="Precio" onchange="calculaPrecio()" id="precio-subservicio-' + subserviciosInfoCount + '" />'
        + '<button class="btn btn-primary" onclick="eliminarPaso(' + subserviciosInfoCount + ')">-</button>'
        + '</div>'
        + '</div>'

        + '</div>'
        + '</div>'
        + '</div>';
      $("#aquiSeInsertaElContenidoDinamico").append(contenidoDinamico);
      for (var i = 0; i < subserviciosInfo.length; i++) {
        $('#combo-Subservicio-' + subserviciosInfoCount).append('<option value="' + subserviciosInfo[i].id + '">' + subserviciosInfo[i].nombre + '</option>');
      }
    }
    subserviciosInfoCount++;
  });

});

function eliminarPaso(id) {
  $('#subservicio-' + id).remove();
  subserviciosInfoCount--;
}

 function calculaPrecio() {
  var sum = 0;
  $('input[id^="precio-subservicio"]').each(function (index, element) {
    console.log($('#' + element.id).val());
    sum += parseFloat($(element).val());
  });
  $('#precio').val(sum.toFixed(2));

  console.log(precio);
}


