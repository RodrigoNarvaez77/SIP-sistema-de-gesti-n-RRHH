<body  onload="paralelo_fecha();">
  <form action="<?php echo base_url() ?>sip/trabajador/guardar_trabajador" role="form" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
    <div class="panel panel-white">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">

          <br><p align="left"><i>En esta secci&oacute;n se pueden agregar, editar y eliminar Datos de los Trabajadores.</i></p>
        </div>
        <div class="col-md-1" align="center"></div>
      </div>
      <div class="panel-body">
        <div class="row">
          <!-- inicio div tabulado -->
          <div class="tabbable">
            <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
              <li class="active">
                <a data-toggle="tab" href="#primero">Datos Personales</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#segundo">Contacto de Emergencia</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#tercero">Datos Familiares</a>
              </li>
               <li class="">
                <a data-toggle="tab" href="#cuarto">Direcciones</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#quinto">Estudios</a>
              </li>
               <li class="">
                <a data-toggle="tab" href="#sexto">Otros</a>
              </li>
               <li class="">
                <a data-toggle="tab" href="#septimo">Comentarios</a>
              </li>
                <li class="">
                <a data-toggle="tab" href="#octavo">Capacitaciones</a>
              </li>
            </ul>
          <div class="tab-content">
              <div id="primero" class="tab-pane fade active in">
                 <div class="col-md-6">
                      <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">Rut</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="rut" id="rut" maxlength='12' required/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Nombre</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="nombre" id="nombre" maxlength='12' required/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellido Paterno</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="apellido_paterno" id="apellido_paterno" maxlength='12'required/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellido Materno</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="apellido_materno" id="apellido_materno" maxlength='12'required/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Fecha Nacimiento</label>
                         <div class="controls">
                          <input name="fecha_nacimiento" type="text" id="fecha_nacimiento" class="datepicker" size="12" readonly="true"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Nacionalidad</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="nacionalidad" id="nacionalidad" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Numero de Hijos</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="n_hijos" id="n_hijos" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="telefono_dp" id="telefono_dp" maxlength='12'/>
                        </div>
                      </div>

                  </div>
                <div class="col-md-6">
                  <div class="control-group">
                <br><br>
                        <label class="control-label" for="inputTipo">Estado Civil</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="estado_civil" id="estado_civil" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Fecha Matrimonio</label>
                        <div class="controls">
                          <input name="fecha_matrimonio"  type="text" id= "fecha_matrimonio" class="datepicker" size="12" readonly="true" title="Fecha Matrimonio"/>
                          <IMG alt SRC="<?php echo base_url()?>extras/layout2.0/assets/images/avatar-11-small.jpg">
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Valor Plan UF</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="valor_plan" id="valor_plan" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Sueldo se Deposita en Cuenta de Pago</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="sueldo_depositado" id="sueldo_depositado" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Banco</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="banco" id="banco" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Direccion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="direccion" id="direccion" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Celular</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="celular" id="celular" maxlength='12'/>
                        </div>
                      </div>

                      <div class="control-group">
                        <br>
                        <label class="control-label" for="inputTipo">Fotografia</label>
                        <div class="controls">
                          <input type="file" name="documento" id="documento" accept="jpg|jpeg|gif|png">

                        </div>
                      </div>
                </div>
                </div>

                <div id="segundo" class="tab-pane fade">
                 <div class="col-md-6">
                     <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">Nombre</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="nombrec" id="nombrec" maxlength='12'/>
                        </div>
                      </div> 

                   <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellidos</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="apellidos" id="apellidos" maxlength='12'/>
                        </div>
                   </div>
                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Calle/Numero/Departamento</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="calle" id="calle" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Villa/Poblacion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="villa" id="villa" maxlength='12'/>
                        </div>
                      </div>
                     
                  </div>
                   <div class="col-md-6">
                    <div class="control-group">
                      <br><br>
                        <label class="control-label" for="inputTipo">Ciudad</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="ciudad" id="ciudad" maxlength='12'/>
                        </div>
                      </div> 

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Comuna</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="comuna" id="comuna" maxlength='12'/>
                        </div>
                      </div> 

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Region</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="regionc" id="regionc" maxlength='12'/>
                        </div>
                      </div> 

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">N° de Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="ntelefono" id="ntelefono" maxlength='12'/>
                        </div>
                      </div> 
                   </div>
                </div>
                 
                <div id="tercero" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-10">
                   <table class="" id="encCol" align="center">
                     <tr style="text-align:center">
                      <br><br>
                      <td><b>Parentesco</b></td>                       
                      <td><b>Primer Apellido</b></td>                                              
                      <td><b></b>Nombres</td>                                              
                      <td><b>Rut Familiar</b></td>           
                      <td><b>Carga Familiar</b></td>           
                      <td><b>2° Apellido</b></td>           
                      <td><b>Sexo</b></td>      
                      <td><b>Fecha Nacimiento</b></td>        
                     </tr>
                    <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco" id="parentesco"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido" id="primer_apellido"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres" id="nombres"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar" id="rut_framiliar"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar" id="carga_familiar"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_1_df" id="segundo_apellido_1_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_1" id="sexo_df_1"/></td>
                      <td><input name="fecha_nacimiento_df_1" style="width:130px;height:28px"  type="text" id="fecha_nacimiento_df_1" class="datepicker" size="12" readonly="true" title="Fecha Nacimiento"/></td>

                    </tr>
                     <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_2" id="parentesco"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_2" id="primer_apellido_2"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_2" id="nombres_2"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_2" id="rut_familiar_2"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_2" id="carga_familiar_2"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_2_df" id="segundo_apellido_2_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_2" id="sexo_df_2"/></td>
                      <td><input type='text' style="width:130px;height:28px" class="datepicker" name="fecha_nacimiento_df_2" id="fecha_nacimiento_df_2"/></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_3" id="parentesco"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_3" id="primer_apellido"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_3" id="nombres"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_3" id="rut_familiar_3"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_3" id="carga_familiar_3"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_3_df" id="segundo_apellido_3_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_3" id="sexo_df_3"/></td>
                      <td><input type='text' style="width:130px;height:28px" class="datepicker" name="fecha_nacimiento_df_3" id="fecha_nacimiento_df_3"/></td>
                    </tr>
                    <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_4" id="parentesco_4"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_4" id="primer_apellido_4"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_4" id="nombres_4"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_4" id="rut_familiar_4"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_4" id="carga_familiar_4"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_4_df" id="segundo_apellido_4_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_4" id="sexo_df_4"/></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_4" id="fecha_nacimiento_df_4"/></td>
                    </tr>
                    <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_5" id="parentesco_5"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_5" id="primer_apellido_5"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_5" id="nombres_5"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_5" id="rut_familiar_5"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_5" id="carga_familiar_5"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_5_df" id="segundo_apellido_5_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_5" id="sexo_df_5"/></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_5" id="fecha_nacimiento_df_5"/></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_6" id="parentesco_6"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_6" id="primer_apellido_6"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_6" id="nombres_6"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_6" id="rut_familiar_6"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_6" id="carga_familiar_6"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_6_df" id="segundo_apellido_6_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_6" id="sexo_df_6"/></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_6" id="fecha_nacimiento_df_6"/></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_7" id="parentesco_7"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_7" id="primer_apellido_7"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_7" id="nombres_7"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_7" id="rut_familiar_7"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_7" id="carga_familiar_7"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_7_df" id="segundo_apellido_7_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_7" id="sexo_df_1"/></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_7" id="fecha_nacimiento_df_7"/></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_8" id="parentesco_8"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_8" id="primer_apellido_8"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_8" id="nombres_8"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_8" id="rut_familiar_8"/></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="carga_familiar_8" id="carga_familiar_8"/></td>
                       <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_8_df" id="segundo_apellido_8_df"/></td>
                      <td><input type='text' class="input-mini" style="width:90px;height:28px" name="sexo_df_8" id="sexo_df_8"/></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_8" id="fecha_nacimiento_df_8"/></td>
                    </tr>
                    </table>
                  </div>
                  </div>
                 </div>
                 
                 <div id="cuarto" class="tab-pane fade">
                 <div class="col-md-6">
                      <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">Calle/Numero/Departamento</label>
                          <div class="controls">
                            <input type='text' class="input-mini" name="calles" id="calles" maxlength='12'/>
                          </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Villa/Poblacion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="villas" id="villas" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Ciudad</label>
                        <div class="controls">
                          <input type='text' class="ciudades" name="ciudades" id="apellido_paterno" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Region</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="region" id="region" maxlength='12'/>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6">

                      <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">N° Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="n_telefono_d" id="region" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Comuna</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="comuna_d" id="region" maxlength='12'/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Vivienda</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="vivienda_d" id="region" maxlength='12'/>
                        </div>
                      </div>

                       </div>
                </div>
<div id="quinto" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-10">
                   <table class="" id="encCol" align="center">
                     <tr style="text-align:center">
                      <br>
                      <td><b>Estudios</b></td>                       
                      <td><b>Establecimiento</b></td>                        
                      <td><b>Profesion</b></td>                        
                      <td><b>Estado</b></td>                        
                      <td><b>Adjuntar</b></td>                        
                     </tr>
                    <tr style="text-align:center">
                        <td><b>Basicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_1" id="establecimiento_1"/></td>
                        <td></td>
                        <td><select name="id_select_basico" id="id_select_basico" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_1" id="documento_1" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                    <tr style="text-align:center">
                        <td><b>Medios</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_2" id="establecimiento_2"/></td>
                          <td></td>
                       <td><select name="id_select_medios" id="id_select_medios" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_2" id="documento_2" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                    
                     <tr style="text-align:center">
                        <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_3" id="establecimiento_3"/></td>
                        <td><select name="id_select_tecnicos_1" id="id_select_tecnicos_1" required>
                        <?php
                          foreach ($profesionlista as $id_profesion => $nombre)
                          echo '<option value="',$id_profesion,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_tecnicos_10" id="id_select_tecnicos_10" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_3" id="documento_3" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     
                     <tr style="text-align:center">
                        <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_4" id="establecimiento_4"/></td>
                          <td><select name="id_select_tecnicos_2" id="id_select_tecnicos_2" required>
                        <?php
                          foreach ($profesionlista as $id_profesion => $nombre)
                          echo '<option value="',$id_profesion,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_tecnicos_11" id="id_select_tecnicos_11" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_4" id="documento_4" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>


                     <tr style="text-align:center">
                        <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_5" id="establecimiento_5"/></td>
                        <td><select name="id_select_tecnicos_3" id="id_select_tecnicos_3" required>
                        <?php
                          foreach ($profesionlista as $id_profesion => $nombre)
                          echo '<option value="',$id_profesion,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_tecnicos_12" id="id_select_tecnicos_12" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_5" id="documento_5" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_6" id="establecimiento_6" maxlength='12'/></td>
                        <td><select name="id_select_tecnicos_4" id="id_select_tecnicos_4" required>
                        <?php
                          foreach ($profesionlista as $id_profesion => $nombre)
                          echo '<option value="',$id_profesion,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_tecnicos_13" id="id_select_tecnicos_13" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_6" id="documento_6" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_7" id="establecimiento_7" maxlength='12'/></td>
                        <td><select name="id_select_tecnicos_5" id="id_select_tecnicos_5" required>
                        <?php
                          foreach ($profesionlista as $id_profesion => $nombre)
                          echo '<option value="',$id_profesion,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_tecnicos_14" id="id_select_tecnicos_14" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_7" id="documento_7" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                   
                    <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_8" id="establecimiento_8" maxlength='12'/></td>
                      <td><select name="id_select_universitarios_1" id="id_select_universitarios_1" required>
                        <?php
                          foreach ($universidadlista as $id_universidad => $nombre)
                          echo '<option value="',$id_universidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                      <td><select name="id_select_universitarios_10" id="id_select_universitarios_10" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_8" id="documento_8" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                      <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_9" id="establecimiento_9" maxlength='12'/></td>
                      <td><select name="id_select_universitarios_2" id="id_select_universitarios_2" required>
                        <?php
                          foreach ($universidadlista as $id_universidad => $nombre)
                          echo '<option value="',$id_universidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                      <td><select name="id_select_universitarios_11" id="id_select_universitarios_11" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_9" id="documento_9" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                      <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_10" id="establecimiento_10" maxlength='12'/></td>
                      <td><select name="id_select_universitarios_3" id="id_select_universitarios_3" required>
                        <?php
                          foreach ($universidadlista as $id_universidad => $nombre)
                          echo '<option value="',$id_universidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                      <td><select name="id_select_universitarios_12" id="id_select_universitarios_12" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_10" id="documento_10" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                      <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_11" id="establecimiento_11" maxlength='12'/></td>
                      <td><select name="id_select_universitarios_4" id="id_select_universitarios_4" required>
                        <?php
                          foreach ($universidadlista as $id_universidad => $nombre)
                          echo '<option value="',$id_universidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                       <td><select name="id_select_universitarios_13" id="id_select_universitarios_13" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_11" id="documento_11" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>

                    </tr>
                      <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_12" id="establecimiento_12" maxlength='12'/></td>
                      <td><select name="id_select_universitarios_5" id="id_select_universitarios_5" required>
                        <?php
                          foreach ($universidadlista as $id_universidad => $nombre)
                          echo '<option value="',$id_universidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                      <td><select name="id_select_universitarios_14" id="id_select_universitarios_14" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_12" id="documento_12" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     

                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_13" id="establecimiento_13" maxlength='12'/></td>
                        <td><select name="id_select_especialidad_1" id="id_select_especialidad_1" required>
                        <?php
                          foreach ($especialidadlista as $id_especialidad => $nombre)
                          echo '<option value="',$id_especialidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_especialidad_10" id="id_select_especialidad_10" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_13" id="documento_13" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_14" id="establecimiento_14" maxlength='12'/></td>
                        <td><select name="id_select_especialidad_2" id="id_select_especialidad_2" required>
                        <?php
                          foreach ($especialidadlista as $id_especialidad => $nombre)
                          echo '<option value="',$id_especialidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_especialidad_11" id="id_select_especialidad_11" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_14" id="documento_14" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_15" id="establecimiento_15" maxlength='12'/></td>
                        <td><select name="id_select_especialidad_3" id="id_select_especialidad_3" required>
                        <?php
                          foreach ($especialidadlista as $id_especialidad => $nombre)
                          echo '<option value="',$id_especialidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_especialidad_12" id="id_select_especialidad_12" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_15" id="documento_15" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_16" id="establecimiento_16" maxlength='12'/></td>
                        <td><select name="id_select_especialidad_4" id="id_select_especialidad_4" required>
                        <?php
                          foreach ($especialidadlista as $id_especialidad => $nombre)
                          echo '<option value="',$id_especialidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_especialidad_13" id="id_select_especialidad" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_16" id="documento_16" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_17" id="establecimiento_17" maxlength='12'/></td>
                        <td><select name="id_select_especialidad_5" id="id_select_especialidad_5" required>
                        <?php
                          foreach ($especialidadlista as $id_especialidad => $nombre)
                          echo '<option value="',$id_especialidad,'">',$nombre,'</option>';
                        ?>
                        </select></td>
                        <td><select name="id_select_especialidad_14" id="id_select_especialidad_14" required>
                        <?php
                          foreach ($estadolista as $id_estado => $estado)
                          echo '<option value="',$id_estado,'">',$estado,'</option>';
                        ?>
                        </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                                <input type="file" name="documento_17" id="documento_17" accept="jpg|jpeg|gif|png">
                              </div>
                               </div> 
                         </td>
                    </tr>
                    </table>
                  </div>
                  </div>
                 </div>
 <div id="sexto" class="tab-pane fade">
                 <div class="col-md-6">
                  <br><br>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Clase</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="clase" id="clase"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Pantalon</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="talla_pantalon" id="talla_pantalon"/>
                        </div>
                      </div>

                        <div class="control-group">
                        <label class="control-label" for="inputTipo">Tipo de Licencia:</label>
                         <div class="controls">
                      <select name="id_select_licencia" id="id_select_licencia" required>
                        <?php
                          foreach ($licencia_lista as $id_licencia => $nombre)
                          echo '<option value="',$id_licencia,'">',$nombre,'</option>';
                        ?>
                        </select>    
                  </div>
                </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Casaca</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_casaca" id="talla_casaca"/>
                        </div>
                      </div>
                  </div>
                <div class="col-md-6">
                  <div class="control-group">
                <br><br>
                        <label class="control-label" for="inputTipo">Talla Buzo</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_buzo" id="talla_buzo"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Calzado</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_calzado" id="talla_calzado"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Situacion Militar</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="situacion_militar" id="situacion_militar"/>
                        </div>
                      </div>
                </div>
                </div>
 <div id="septimo" class="tab-pane fade">
                 <div class="col-md-6">
                  <br><br>
                    <div class="col-md-6">
                        <input type='hidden' class="input-mini" name="id" id="id"/>
                        <br>
                          <label class="control-label" for="inputTipo">Comentarios:</label>
                            <div class="controls">
                               <textarea  class="input-mini" rows="5" cols="80" id="texto" name="texto" ></textarea>
                            </div> 
                    </div>
                  </div>
                </div>
   <div id="octavo" class="tab-pane fade">
     <div class="col-md-6">
      <br><br>
        <table class="table" align="center">
            <tr>
              <td><b>Capacitaciones</b></td>
              <td><b>Seleccionar</b></td>
            </tr>
            <tr>  
              <?php 
                foreach ($capacitaciones as $datos){
              ?>
            </tr>
            <tr>  
              <td><?php echo $datos->nombre?></td>
              <td><input type="checkbox" name="check_estado[]" value="<?php echo $datos->id?>" ></td>
            <!-- <td><input type="file" name="archivo[]" id="archivo[]" accept="jpg|jpeg|gif|png"></td>-->
                <?php
                  }  
                ?>
            </tr>
          </table>
      </div>
    </div>

  </div>
</div>
<!-- fin div tabulado -->
 </div>
    <div class="modal-footer" style="margin-top: 25px">
      <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
    </div>
    </div>
  </div>
  </form>
</body>
