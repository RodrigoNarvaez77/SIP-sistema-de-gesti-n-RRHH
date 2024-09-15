<body>
  <form action="<?php echo base_url() ?>sip/trabajador/guardar_perfil" role="form" id="form" method='post' autocomplete="off">
    <div class="panel panel-white"><br>
      <div class="row">
        <div class="col-md-10">
          <p align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i>En esta secci&oacute;n se pueden agregar, editar y eliminar Registros.</i>
          </p>
        </div>
        <div class="col-md-2">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <?php
               foreach ($crear_perfil as $datos) {
             ?>
            <table class="table" id="encCol" align="center" border="1">
              <thead>
              <tr style="text-align:center">
                  <td style="width:100px;"><b>Seleccione un perfil</b></td>
              </tr>
              </thead>
             <td><select name="id_select_perfil" id="id_select_perfil">
              <?php foreach ($perfil_lista as $row2){ ?>
                  <option value="<?php echo $row2->id?>"<?php if($datos->perfil_de_cargo == $row2->id){ echo "selected"; } ?>><?php echo $row2->nombre ?></option>
                  <?php } ?>
                </select>
                <input type="submit" class="btn-primary" style="width:70px; height:30px;" value="Asignar">
          </td> 
            </table>
            
          <br><br>
        </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
           <table>
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Rut:</b></label></td>
          <td><input type='text' class="input-mini" name="rut" id="rut" readonly="readonly" value="<?php echo $datos->rut;?>"/></td>
        </tr>
          <td><input type='hidden' class="input-mini" name="id" id="id" readonly="readonly" value="<?php echo $datos->id;?>"/></td>
        <tr>
          <td><label class="control-label" for="inputTipo"><b>Nombre:</b></label></td>
          <td><input type='text' class="input-mini" name="nombre" id="nombre" readonly="readonly"  value="<?php echo $datos->nombre;?>"/></td>
          <td></td>
        </tr>
        <tr>  
          <td><label class="control-label" for="inputTipo"><b>Apellido Paterno:</b></label></td>  
          <td><input type='text' class="input-mini" name="apellido_paterno" readonly="readonly" id="apellido_paterno" value="<?php echo $datos->apellido_paterno;?>"/></td>
      </tr>
      <tr>  
          <td><label class="control-label" for="inputTipo"><b>Apellido Materno:</b></label></td>  
          <td><input type='text' class="input-mini" name="apellido_materno" readonly="readonly" id="apellido_materno" value="<?php echo $datos->apellido_materno;?>"/></td>
      </tr>
      </table>
        <?php
          }
          ?>
          </div>
        </div>
          <div class="row">
           <div class="col-md-1"></div>
          <div class="col-md-8">
              <?php foreach ($listar_perfiles as $datos){ ?>
           <table>
         <tr>
            <td><b>Item</b></td>
            <td><b>Datos Perfil</b></td>
            <td><b>Datos Trabajador</b></td>
            <td><b>Evaluacion</b></td>
         </tr>
         <tr>  
          <td><label class="control-label" for="inputTipo"><b>Version:</b></label></td>  
          <td><input type='text' class="input-mini" name="version" id="version" readonly="readonly" value="<?php echo $datos->version;?>"/></td>
        </tr>
        <tr>
          <td><label><b>Area:</b></label></td>
          <td><input type='text' class="input-mini" name="area_perfil" id="area_perfil" readonly="readonly" value="<?php echo $datos->nombre_area_perfil_1;?>"/></td>    
        <tr>
          <td><label><b>Dependencia:</b></label></td>
          <td><input type='text' class="input-mini" name="dependencia_perfil" readonly="readonly" id="dependencia_perfil" value="<?php echo $datos->nombre_dependencia_perfil_1;?>"/></td>
        </tr>
        <tr>
          <td><label><b>Sede Cargo:</b></label></td>
          <td><input type='text' class="input-mini" name="sede_perfil" id="sede_perfil" readonly="readonly" value="<?php echo $datos->nombre_sede_perfil_1;?>"/></td>
        </tr>
        <tr>
          <td><label><b>Escolaridad Basica:</b></label></td>
          <td><input type='text' class="input-mini" name="escolaridad_basica" id="escolaridad_basica" readonly="readonly" value="<?php echo $datos->nombre_escolaridad_basica;?>"/></td>
         <td><?php echo $datos->resultado_basico;?></td>
        </tr>
        <tr>
          <td><label><b>Escolaridad Media:</b></label></td>
          <td><input type='text' class="input-mini" name="escolaridad" id="escolaridad" readonly="readonly" value="<?php echo $datos->nombre_escolaridad_perfil_1;?>"/></td>
          <td><?php echo $datos->resultado_medio;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Tecnica 1:</b></label></td>
          <td><input type='text' class="input-mini" name="tecnicos_perfil_1" id="tecnicos_perfil_1" readonly="readonly" value="<?php echo $datos->nombre_tecnicos_perfil_1;?>"/></td>
          <td><?php echo $datos->resultado_tecnico_1;?></td>
          <td><?php echo $datos->resultado_tecnico_e_1;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Tecnica 2:</b></label></td>
          <td><input type='text' class="input-mini" name="tecnicos_perfil_2" id="tecnicos_perfil_2" readonly="readonly" value="<?php echo $datos->nombre_tecnicos_perfil_2;?>"/></td>
          <td><?php echo $datos->resultado_tecnico_2;?></td>
         <td><?php echo $datos->resultado_tecnico_e_2;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Tecnica 3:</b></label></td>
          <td><input type='text' class="input-mini" name="tecnicos_perfil_3" id="tecnicos_perfil_3" readonly="readonly" value="<?php echo $datos->nombre_tecnicos_perfil_3;?>"/></td>
          <td><?php echo $datos->resultado_tecnico_3;?></td>
          <td><?php echo $datos->resultado_tecnico_e_3;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Universitaria 1:</b></label></td>
          <td><input type='text' class="input-mini" name="universitario_perfil_1" id="universitario_perfil_1" readonly="readonly" value="<?php echo $datos->nombre_universitario_perfil_1;?>"/></td>
          <td><?php echo $datos->resultado_profesion_1;?></td>
          <td><?php echo $datos->resultado_profesion_e_1;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Universitaria 2:</b></label></td>
          <td><input type='text' class="input-mini" name="universitario_perfil_2" id="universitario_perfil_2" readonly="readonly" value="<?php echo $datos->nombre_universitario_perfil_2;?>"/></td>
           <td><?php echo $datos->resultado_profesion_2;?></td>
          <td><?php echo $datos->resultado_profesion_e_2;?></td>
        </tr>
         <tr>
          <td><label><b>Profesion Universitaria 3:</b></label></td>
          <td><input type='text' class="input-mini" name="universitario_perfil_3" id="universitario_perfil_3" readonly="readonly" value="<?php echo $datos->nombre_universitario_perfil_3;?>"/></td>
           <td><?php echo $datos->resultado_profesion_3;?></td>
          <td><?php echo $datos->resultado_profesion_e_3;?></td>
        </tr>
         <tr>
          <td><label><b>Especialidad 1:</b></label></td>
          <td><input type='text' class="input-mini" name="especialidad_perfil_1" id="especialidad_perfil_1" readonly="readonly" value="<?php echo $datos->nombre_especialidad_perfil_1;?>"/></td>
          <td><?php echo $datos->resultado_especialidad_1;?></td>
          <td><?php echo $datos->resultado_especialidad_e_1;?></td>
        </tr>
         <tr>
          <td><label><b>Especialidad 2:</b></label></td>
          <td><input type='text' class="input-mini" name="especialidad_perfil_2" id="especialidad_perfil_2" readonly="readonly" value="<?php echo $datos->nombre_especialidad_perfil_2;?>"/></td>
          <td><?php echo $datos->resultado_especialidad_2;?></td>
          <td><?php echo $datos->resultado_especialidad_e_2;?></td>
        </tr>
         <tr>
          <td><label><b>Especialidad 3:</b></label></td>
          <td><input type='text' class="input-mini" name="especialidad_perfil_3" id="especialidad_perfil_3" readonly="readonly" value="<?php echo $datos->nombre_especialidad_perfil_3;?>"/></td>
          <td><?php echo $datos->resultado_especialidad_3;?></td>
          <td><?php echo $datos->resultado_especialidad_e_3;?></td>
        </tr>
          <?php 
            foreach ($capacitaciones as $datos){
          ?>
        <tr>  
          <!--<td><?php //echo $datos->id_capacitacion." - ";?></td>-->
          <td><?php echo $datos->nombre_capacitacion_perfil ?></td>
          <td><?php echo $datos->estado_cap;?></td>
            <?php
              }  
            ?>
          </tr>
      </table>
      <?php } ?> 
        </div>
      </div>
      </div>
  </form>
</body>