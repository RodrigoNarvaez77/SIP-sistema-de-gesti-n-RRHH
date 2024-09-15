<div id="modal">
 <div class="modal-header" style="text-align:center">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="exampleModalLabel">Requisitos Perfil de Cargo</h4>
  </div>
  <div id="modal_content">
    <br>
    <!--<div class="col-md-6">--><!--abre-->
    <form action="<?php echo base_url()?>sip/perfilcargo/actualizar_requisitos" role="form" id="form2" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
      <?php foreach ($datos_requisitos as $datos){
        ?>
    <table>
      <tr>
        <td><input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id?>"/>
              <div class="control-group">
              <label class="control-label" for="inputTipo">Escolaridad Basica:</label>
        </td>
        <td> <select name="id_select_escolaridad_basica" id="id_select_escolaridad_basica">
                <?php foreach ($escolaridad_lista as $row){ ?>
                <option value="<?php echo $row->id?>" <?php if($datos->escolaridad_basica == $row->id){ echo "selected"; } ?>><?php echo $row->estado?></option>           
                <?php } ?>
              </select>    
      </td>  
      </tr>
      <tr>
        <td></div>
              <div class="control-group">
                <label class="control-label" for="inputTipo">Escolaridad Media:</label>
        </td>
        <td><select name="id_select_escolaridad" id="id_select_escolaridad">
              <?php foreach ($escolaridad_lista as $row2){ ?>
                <option value="<?php echo $row2->id?>"<?php if($datos->escolaridad == $row2->id){ echo "selected"; } ?> ><?php echo $row2->estado?></option>
              <?php } ?>
              </select>    
          </div>
        </td>
      </tr>
       <tr>
        <td></div>
              <div class="control-group">
                <label class="control-label" for="inputTipo">Tipo de Licencia:</label>
        </td>
        <td><select name="id_select_licencia" id="id_select_licencia">
              <?php foreach ($licencia_lista as $row20){ ?>
                <option value="<?php echo $row20->id?>"<?php if($datos->licencia == $row20->id){ echo "selected"; } ?> ><?php echo $row20->nombre?></option>
              <?php } ?>
              </select>    
          </div>
        </td>
      </tr>
      <tr>
        <td><div class="control-group">
            <label class="control-label" for="inputTipo">Años de Experiencia:</label>
        </td>
        <td><input type='text' class="input-mini" size="9" name="ex_similar" id="ex_similar" maxlength="2" onkeypress="return valida(event)" value="<?php echo $datos->ex_similar?>" required/></div>
        </td>
      </tr>
    </table>
       <br>
       <label class="control-label" for="inputTipo">Profesion Tecnica</label>
          <div class="control-group">
            <div class="controls">
             <select name="id_select_tecnicos_1" id="id_select_tecnicos_1">
                <?php
                  foreach ($tecnico_lista as $row3){ ?>
                     <option value="<?php echo $row3->id?>" <?php if($datos->tecnicos_perfil_1 == $row3->id){ echo "selected"; } ?>><?php echo $row3->nombre?></option>
                  <?php } ?>
              </select>
            </div>
          </div> 
          <div class="control-group">
            <div class="controls">
              <select name="id_select_tecnicos_2" id="id_select_tecnicos_2">
                <?php
                  foreach ($tecnico_lista as $row4){ ?>
                     <option value="<?php echo $row4->id?>" <?php if($datos->tecnicos_perfil_2 == $row4->id){ echo "selected"; } ?>><?php echo $row4->nombre?></option>
                  <?php } ?>
              </select>
            </div>
          </div>  
          <div class="control-group">
            <div class="controls">
               <select name="id_select_tecnicos_3" id="id_select_tecnicos_3">
                <?php
                  foreach ($tecnico_lista as $row5){ ?>
                     <option value="<?php echo $row5->id?>" <?php if($datos->tecnicos_perfil_3 == $row5->id){ echo "selected"; } ?>><?php echo $row5->nombre?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
       <!--</div>--><!--cierra-->
       <!--  <div class="col-md-6">-->
            <label class="control-label" for="inputTipo">Profesion Universitaria</label>
              <div class="control-group">
                <div class="controls">
                   <select name="id_select_profesion_1" id="id_select_profesion_1">
                <?php
                  foreach ($profesion_lista as $row6){ ?>
                     <option value="<?php echo $row6->id?>" <?php if($datos->universitario_perfil_1 == $row6->id){ echo "selected"; } ?>><?php echo $row6->nombre?></option>
                  <?php } ?>
              </select>
                </div>
          </div>
          <div class="control-group">
            <div class="controls">
               <select name="id_select_profesion_2" id="id_select_profesion_2">
                <?php
                  foreach ($profesion_lista as $row7){ ?>
                     <option value="<?php echo $row7->id?>" <?php if($datos->universitario_perfil_2 == $row7->id){ echo "selected"; } ?>><?php echo $row7->nombre?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <select name="id_select_profesion_3" id="id_select_profesion_3">
                <?php
                  foreach ($profesion_lista as $row8){ ?>
                     <option value="<?php echo $row8->id?>" <?php if($datos->universitario_perfil_3 == $row8->id){ echo "selected"; } ?>><?php echo $row8->nombre?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
          <!--<br><br><br><br><br><br><br>-->
           <div class="control-group">
            <label class="control-label" for="inputTipo">Especialidad</label>
             <div class="control-group">
              <div class="controls">
                  <select name="id_select_especialidad_1" id="id_select_especialidad_1">
                    <?php
                    foreach ($especialidad_lista as $row9){ ?>
                    <option value="<?php echo $row9->id?>" <?php if($datos->especialidad_perfil_1 == $row9->id){ echo "selected"; } ?>><?php echo $row9->nombre?></option>
                    <?php } ?>
              </select>
              </div>
            </div>
             <div class="control-group">
              <div class="controls">
                 <select name="id_select_especialidad_2" id="id_select_especialidad_2">
                    <?php
                    foreach ($especialidad_lista as $row10){ ?>
                    <option value="<?php echo $row10->id?>" <?php if($datos->especialidad_perfil_2 == $row10->id){ echo "selected"; } ?>><?php echo $row10->nombre?></option>
                    <?php } ?>
              </select>
              </div>
          </div>
             <div class="control-group">
              <div class="controls">
                <select name="id_select_especialidad_3" id="id_select_especialidad_3">
                    <?php
                    foreach ($especialidad_lista as $row11){ ?>
                    <option value="<?php echo $row11->id?>" <?php if($datos->especialidad_perfil_3 == $row11->id){ echo "selected"; } ?>><?php echo $row11->nombre?></option>
                    <?php } ?>
              </select>
              </div>
          </div>
       </div>
        <?php 
          }
        ?>
    <br>
     <div class="modal-footer">
      <button type="submit" name="actualizar" class="btn btn-primary">Guardar</button>
        <button type="button" name="cancelar" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </form>
  </div>