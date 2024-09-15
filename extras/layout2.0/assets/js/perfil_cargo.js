function perfil_cargo(){
  var id = $('#id_select_perfil').val();
     alert(id);
      
   $.ajax({
      type: "POST",
      url:base_url+"sip/trabajador/buscar_detalles_trabajador/"+id,
      contentType: "application/x-www-form-urlencoded",
      dataType: "json",
      success: function(data){ 
        $("#version").val(data['version']);
        $("#area_perfil").val(data['area_perfil']);
        $("#dependencia_perfil").val(data['dependencia_perfil']);
        $("#sede_perfil").val(data['sede_perfil']);
      }
      });
}