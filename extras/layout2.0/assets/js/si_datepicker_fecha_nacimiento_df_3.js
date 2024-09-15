$(document).ready(function () {
  $('#fecha_nacimiento_df_3').datepicker({
    format: 'yyyy-mm-dd',
}).on('changeDate', function(ev) {
  fecha_seleccionada = $(this).val();
  });
});