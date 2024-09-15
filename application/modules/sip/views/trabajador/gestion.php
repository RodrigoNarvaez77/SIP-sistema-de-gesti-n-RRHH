<body>
  <form action="<?php echo base_url() ?>sip/trabajador/verificar" role="form" id="form" method='post' autocomplete="off">
    <div class="panel panel-white"><br>
      <div class="row">
        <div class="col-md-10">
          <p align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>En esta secci&oacute;n se pueden agregar, editar y eliminar registros de la tabla Trabajadores.</i>
          </p>
        </div>
        <div class="col-md-2">
          &nbsp;&nbsp;&nbsp;
         <a href="trabajador/agregar"><input type="button" title="Agregar" value="Agregar" name ="Agregar" class="btn btn-green"></a> 
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
              <table class="table" id="example1" align="center" >
                <thead>
                  <tr style="text-align:center">
                      <td><b>Rut</b></td>
                      <td><b>Nombre</b></td>
                      <td><b>Apellido Paterno</b></td>
                      <td><b>Apellido Materno</b></td>
                      <td><b>Modificar</b></td>  
                      <td><b>Eliminar</b><br></td>
                  </tr>
                </thead> 
                    <tbody>
                    <?php 
                      foreach ($personal as $datos){
                    ?>
                  <tr style="text-align:center">  
                    <td><?php echo $datos->rut?></td>
                    <td><?php echo $datos->nombre?></td>
                    <td><?php echo $datos->apellido_paterno?></td>
                    <td><?php echo $datos->apellido_materno?></td>
                    <td><a data-toggle="modal" <a href="trabajador/modificar/<?php echo $datos->id?>"><i class="fa fa-edit"></i></a>
                    <a data-toggle="modal" <a href="trabajador/agregar_perfil/<?php echo $datos->id?>"><i class="fa fa-plus" aria-hidden="true"></i></a></td>
                    <td style="width:53px;" aling="center"><a href="javascript:;" onclick="aviso('<?php echo base_url()?>sip/trabajador/eliminar_trabajador/<?php echo $datos->id?>'); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>  
                      <?php
                        }  
                      ?>
                </tr>
                    </tbody>
            </table>
            </div>
           <div class="row">
          <div class="col-md-8"></div>
        </div>
       </div>
      </div>
    </div>
  </form>
</body>
 <!-- Modal Editar Trabajador-->
            <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                          <div class="modal-body"></div>
                    </div>
                </div>
            </div>
<!-- End Modal -->  
