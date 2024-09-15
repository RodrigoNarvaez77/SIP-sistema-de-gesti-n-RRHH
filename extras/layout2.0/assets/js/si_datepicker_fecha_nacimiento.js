$(document).ready(function () {
  $('#fecha_nacimiento').datepicker({
    format: 'yyyy-mm-dd',
}).on('changeDate', function(ev) {
  fecha_seleccionada = $(this).val();
  });
});