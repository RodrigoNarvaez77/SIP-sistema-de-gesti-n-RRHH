<div id="modal">
 <div class="modal-header" style="text-align:center">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="exampleModalLabel">Competencias del Perfil de Cargo</h4>
  </div>
    <form action="<?php echo base_url();?>sip/perfilcargo/actualizar_competencias" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
      <div id="modal_content">
        <div class="modal-header">
          <h5>Instrucciones:</h5>
          <p>Ingresar las Competencias del Perfil.</p>
        </div>
          <?php
            foreach ($datos_competencias as $datos) {
          ?>
         <div class="col-md-6">
          <input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id; ?>"/>
            <br>
              <label class="control-label" for="inputTipo">Detalles:</label>
                <div class="controls">
                  <textarea  class="input-mini" rows="10" cols="73" id="competencias" name="competencias" ><?php echo $datos->competencias;?></textarea>
                </div>
            
        </div>
    </div>
   <?php
    }
  ?>
   <br><br><br><br><br><br><br>
     <div class="modal-footer"><br><br><br><br><br>
      <button type="submit" name="actualizar" class="btn btn-primary">Guardar</button>
        <button type="button" name="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
  </div>