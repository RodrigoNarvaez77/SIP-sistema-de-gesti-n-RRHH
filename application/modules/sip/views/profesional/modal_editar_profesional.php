<div id="modal">
 <div class="modal-header" style="text-align:center">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="exampleModalLabel">Modificar Profesiones</h4>
  </div>
  <div id="modal_content">
    <div class="modal-header">
      <h5>Instrucciones:</h5>
      <p>Todos los campos sus obligatorios.</p>
    </div><br>
    <form action="<?php echo base_url()?>sip/profesional/actualizar_profesional" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
        <?php foreach ($datos_profesional as $datos){
        ?>
         <div class="control-group">
          </div>
        <input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id?>" required/>
      <div class="control-group">
            <label class="control-label" for="inputTipo">Nombre Titulo</label>
            <div class="controls">
                <input type='text' class="input-mini" name="nombre" id="nombre" value="<?php echo $datos->nombre?>" required/>
            </div>
          </div>
          <?php 
        }
          ?>
    <br>
    <div class="modal-footer">
      <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
        <button type="button" name="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    </form>
  </div>
