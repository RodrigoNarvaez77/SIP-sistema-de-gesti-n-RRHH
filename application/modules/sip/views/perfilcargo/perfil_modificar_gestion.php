<body>
 <form action="<?php echo base_url();?>sip/perfilcargo/actualizar" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
  <div class="panel panel-white">
    <div class="row">
      <div class="col-md-2">
        <p align="left">
          <i>1.0 Generalidades</i>
        </p>
      </div>
    </div>
  <div class="row">
      <div class="col-md-10">
  <br>
    <?php
      foreach ($crear_perfil as $datos) {
    ?>
     <table>
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Nombre:</b></label></td>
          <td><input type='text' class="input-mini" name="nombre" id="nombre" onkeypress="return valida_abecedario(event)" maxlength="25" value="<?php echo $datos->nombre;?>" required/></td>
        </tr>
          <td><input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id;?>"/></td>
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Version:</b></label></td>
          <td><input type='text' class="input-mini" name="version" id="version" maxlength="2" onkeypress="return valida(event)" value="<?php echo $datos->version;?>" required/></td>
        </tr>
        <tr>  
          <td><label class="control-label" for="inputTipo"><b>Area:</b></label></td>  
          <td><select name="id_select_area" id="id_select_area"> 
              <?php foreach ($area_lista as $row){ ?>
              <option value="<?php echo $row->id ?>" <?php if($datos->area_perfil == $row->id){ echo "selected"; } ?> ><?php echo $row->nombre ?></option>
              <?php } ?>
              </select>
        </td>
      </tr>
    </td>       
        </tr>
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Dependencia:</b></label></td>
          <td><select name="id_select_dependencia" id="id_select_dependencia">
                <?php foreach ($dependencia_lista as $row2){ ?>
                <option value="<?php echo $row2->id ?>" <?php if($datos->dependencia_perfil == $row2->id){ echo "selected"; } ?> ><?php echo $row2->nombre ?></option>
                <?php } ?>
              </select>
          </td> 
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Sede Cargo:</b></label></td>
          <td><select name="id_select_sede" id="id_select_sede">
                <?php foreach ($sede_lista as $row3){ ?>
                  <option value="<?php echo $row3->id ?>" <?php if($datos->sede_perfil == $row3->id){ echo "selected"; } ?> ><?php echo $row3->nombre ?></option>
                <?php } ?>
              </select>
          </td>
        </tr>
        <tr>
          <td><label><b>Funciones:</b></label></td>
          <td><a data-toggle="modal" href="<?php echo base_url();?>sip/perfilcargo/modal_funciones/<?php echo $datos->id; ?>" data-target="#ModalFunciones"><i class="fa fa-edit"></i></a></td>
        </tr>
        <tr>
          <td><label><b>Competencias:</b></label></td>
          <td><a data-toggle="modal" href="<?php echo base_url(); ?>sip/perfilcargo/modal_compentencias/<?php echo $datos->id;?>" data-target="#ModalCompetencias"><i class="fa fa-edit"></i></a></td>
        </tr>
        <tr>
          <td><label><b>Requisitos:</b></label></td>
          <td><a data-toggle="modal" href="<?php echo base_url();?>sip/perfilcargo/modal_requisitos/<?php echo $datos->id;?>" data-target="#ModalRequisitos"><i class="fa fa-edit"></i></a></td>
        </tr>
         <tr>
          <td><label><b>Capacitaciones:</b></td>
          <td></label> <a data-toggle="modal"  data-target="#ModalAgregar"><i class="fa fa-plus-square"></i></a></td>
        </tr>  
      </table>
       <?php
         }
        ?>
     <br>
    <div class="modal-footer">
      <button type="submit" name="actualizar" class="btn btn-primary">Guardar</button>
      </div>
    </div>
     </div>
  </div>
</form>
</body>
<!-- Modal Funciones y Responsabilidades-->
<div class="modal fade" id="ModalFunciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-body"></div>
      </div>
  </div>
</div>
<!-- End Modal -->
<!-- Modal Competencias-->
<div class="modal fade" id="ModalCompetencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-body"></div>
      </div>
  </div>
</div>
<!-- End Modal --> 
<!-- Modal Requisitos-->
<div class="modal fade" id="ModalRequisitos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-body"></div>
      </div>
  </div>
</div>
<!-- End Modal --> 
<!-- Modal Agregar Capacitacion-->
<div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="text-align:center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title" id="myModalLabel">Ingresar Capacitaciones Perfil de Cargo</h2>
      </div>
        <div class="modal-body">
          <div>
            <h5>Instrucciones:</h5>
            <p>*Seleccionar Capacitaciones.</p>
              <div class="control-group">
                <label class="control-label" for="inputTipo"></label>
                    <form action="<?php echo base_url();?>sip/perfilcargo/guardar_capacitaciones_perfil" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data">
                      <input name="id_perfil" type="hidden" value="<?php echo $datos->id; ?>">
                       <table class="table" align="center">
                        <tr>
                          <td><b>Capacitaciones</b></td>
                          <td><b>Seleccionar</b></td>
                        </tr>
                        <tr>  
                          <?php
                            foreach ($capacitaciones as $datos) {
                          ?>
                        </tr>
                        <tr>  
                          <td><?php echo $datos->nombre; ?></td>
                          <td><input type="checkbox" name="check_estado[]" value="<?php echo $datos->id; ?>"<?php  echo ($datos->estado) ? "checked='checked'" : "";?> ></td>
                            <?php
                              }
                            ?>
                       </tr>
                      </table>
                        <div class="modal-footer" style="margin-top: 25px">
                        <button type="submit" name="actualizar" class="btn btn-primary">Guardar</button>
                        <button type="button" name="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                    </form>
              </div>
         </div>
      </div>
   </div>
  </div>
</div>