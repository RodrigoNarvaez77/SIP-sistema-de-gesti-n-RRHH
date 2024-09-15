<body>
  <form action="<?php echo base_url() ?>sip/capacitaciones/verificar" role="form" id="form" method='post' autocomplete="off">
    <div class="panel panel-white"><br>
      <div class="row">
        <div class="col-md-10">
          <p align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>En esta secci&oacute;n se pueden agregar, editar y eliminar Capacitaciones.</i>
          </p>
        </div>
        <div class="col-md-2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="button" title="Agregar" value="+" name ="+" class="btn btn-green" data-toggle="modal" data-target="#ModalAgregar">
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-8">
          <table class="table" id="encCol" align="center" border="1">
            <thead>
            <tr style="text-align:center">
              <td style="width:100px;"><b>Nombre</b></td>
              <td style="width:100px;"><b>Modificar</b></td>
              <td style="width:100px;"><b>Eliminar</b></td>
            </tr>
            </thead>
          <tbody> 
          <?php 
            foreach ($capacitaciones as $datos){
          ?>
            <tr style="text-align:center">
              <td style="width:128px;"><?php echo $datos->nombre?></td>
              <td style="width:60px;"><a data-toggle="modal" href="<?php echo base_url()?>sip/capacitaciones/modal_editar/<?php echo $datos->id?>" data-target="#ModalEditar"><i class="fa fa-edit"></i></a></td>
              <td style="width:53px;" aling="center"><a href="javascript:;" onclick="aviso('<?php echo base_url()?>sip/capacitaciones/eliminar/<?php echo $datos->id?>'); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                <?php
                  }  
                ?>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
      </div>
    </div>
  </form>
</body>
 <!-- Modal Editar capacitaciones-->
            <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                          <div class="modal-body"></div>
                    </div>
                </div>
            </div>
<!-- End Modal -->  
<!-- Modal Agregar-->
 <div class="modal fade" id="ModalAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="text-align:center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title" id="myModalLabel">Ingreso Nueva Capacitacion</h2>
        </div>
          <div class="modal-body">
            <div>
              <h5>Instrucciones:</h5>
              <p>*Todos los campos sus obligatorios.</p>
            </div>
                <div class="control-group">
                  <label class="control-label" for="inputTipo"></label>
                      <form action="<?php echo base_url() ?>sip/capacitaciones/guardar_capacitacion" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data">
                        <input name="id" type="hidden" size="25" maxlength="25">
                        <div class="control-group">
                          <label class="control-label" for="inputTipo">Nombre Capacitacion:</label>
                            <div class="controls">
                              <input type='text' class="input-mini" name="nombre" id="nombre"  required/>
                            </div>
                        </div>
                      <div class="modal-footer" style="margin-top: 25px">
                        <button type="submit" name="actualizar" class="btn btn-primary">Guardar</button>
                         <button type="button" name="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>