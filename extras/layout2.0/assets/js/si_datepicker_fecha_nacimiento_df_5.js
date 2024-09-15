$(document).ready(function () {
  $('#fecha_nacimiento_df_5').datepicker({
    format: 'yyyy-mm-dd',
}).on('changeDate', function(ev) {
  fecha_seleccionada = $(this).val();
  });
});