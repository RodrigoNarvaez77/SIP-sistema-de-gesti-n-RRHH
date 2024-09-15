<body>
  <form action="<?php echo base_url() ?>sip/trabajador/actualizar_trabajador" role="form" method='post' name="f2" enctype="multipart/form-data" autocomplete="off">
    <div class="panel panel-white"><br>
      <div class="row">
        <div class="col-md-10">
        </div>
    </div>
    <br>
           <?php
        foreach ($listado as $datos){
      ?>
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
                           <input type='text' class="input-mini" name="rut" id="rut" value="<?php echo $datos->rut?>"  />
                           <input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id?>"  />
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Nombre</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="nombre" id="nombre" value="<?php echo $datos->nombre?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellido Paterno</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="apellido_paterno" id="apellido_paterno" value="<?php echo $datos->apellido_paterno?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellido Materno</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="apellido_materno" id="apellido_materno" value="<?php echo $datos->apellido_materno?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Fecha Nacimiento</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Nacionalidad</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="nacionalidad" id="nacionalidad" value="<?php echo $datos->nacionalidad?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Numero de Hijos</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="n_hijos" id="n_hijos" value="<?php echo $datos->n_hijos?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="telefono_dp" id="telefono_dp" value="<?php echo $datos->telefono_dp?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Celular</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="celular" id="celular" value="<?php echo $datos->celular?>"/>
                        </div>
                      </div>
                  </div>
                <div class="col-md-6">
                  <div class="control-group">
                <br><br>
                        <label class="control-label" for="inputTipo">Estado Civil</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="estado_civil" id="estado_civil" value="<?php echo $datos->estado_civil?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Fecha Matrimonio</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="fecha_matrimonio" id="fecha_matrimonio" value="<?php echo $datos->fecha_matrimonio?>" />
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Valor Plan UF</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="valor_plan" id="valor_plan" value="<?php echo $datos->valor_plan?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Sueldo se Deposita en Cuenta de Pago</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="sueldo_depositado" id="sueldo_depositado" value="<?php echo $datos->sueldo_depositado?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Banco</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="banco" id="banco" value="<?php echo $datos->banco?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Direccion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="direccion" id="direccion" value="<?php echo $datos->direccion?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <br>
                        <label class="control-label" for="inputTipo">Fotografia</label>
                        <div class="controls">
                          <img src="<?php echo base_url().$datos->imagen ?>" style="widht:250px; height:150px"> 
                          <input type="file" name="imagen" id="imagen"/>

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
                          <input type='text' class="input-mini" name="nombrec" id="nombrec" value="<?php echo $datos->nombrec?>"/>
                        </div>
                      </div> 

                   <div class="control-group">
                        <label class="control-label" for="inputTipo">Apellidos</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="apellidos" id="apellidos" value="<?php echo $datos->apellidos?>"/>
                        </div>
                   </div>
                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Calle/Numero/Departamento</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="calle" id="calle" value="<?php echo $datos->calle?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Villa/Poblacion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="villa" id="villa" value="<?php echo $datos->villa?>"/>
                        </div>
                      </div>

                      
                  </div>
                   <div class="col-md-6">
                    <div class="control-group">
                      <br><br>
                        <label class="control-label" for="inputTipo">Ciudad</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="ciudad" id="ciudad" value="<?php echo $datos->ciudad?>"/>
                        </div>
                      </div> 

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Comuna</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="comuna" id="comuna" value="<?php echo $datos->comuna?>"/>
                        </div>
                      </div> 

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Region</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="regionc" id="regionc" value="<?php echo $datos->regionc?>"/>
                        </div>
                      </div> 

                     
                       <div class="control-group">
                        <label class="control-label" for="inputTipo">N° de Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="ntelefono" id="ntelefono" value="<?php echo $datos->ntelefono?>"/>
                        </div>
                      </div> 
                   </div>
                </div>
                 
                
                <div id="tercero" class="tab-pane fade">
                        <br><br>
                   <table border ='1'>
                     <tr style="text-align:center">
                      <br><br>
                      <td><b>Numero</b></td>
                      <td><b>Parentesco</b></td>                       
                      <td><b>1° Apellido</b></td>                                              
                      <td><b>2° Apellido</b></td>                                              
                      <td><b>Nombre</b></td> 
                       <td><b>Carga</b></td>          
                      <td><b>Rut</b></td>                      
                      <td><b>Sexo</b></td>      
                      <td><b>Fecha Nacimiento</b></td>      
                     </tr>
                    <tr style="text-align:center">
                      <td><b>1</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco" id="parentesco" value="<?php echo $datos->parentesco?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido" id="primer_apellido" value="<?php echo $datos->primer_apellido?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres" id="nombres" value="<?php echo $datos->nombres?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar" id="rut_framiliar" value="<?php echo $datos->rut_familiar?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar" id="carga_familiar" value="<?php echo $datos->carga_familiar?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_1_df" id="segundo_apellido_1_df" value="<?php echo $datos->segundo_apellido_1_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_1" id="sexo_df_1" value="<?php echo $datos->sexo_df_1?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_1" id="fecha_nacimiento_df_1" value="<?php echo $datos->fecha_nacimiento_df_1?>" /></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>2</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_2" id="parentesco" value="<?php echo $datos->parentesco_2?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_2" id="primer_apellido_2" value="<?php echo $datos->primer_apellido_2?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_2" id="nombres_2" value="<?php echo $datos->nombres_2?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_2" id="rut_familiar_2"  value="<?php echo $datos->rut_familiar_2?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_2" id="carga_familiar_2"  value="<?php echo $datos->carga_familiar_2?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_2_df" id="segundo_apellido_1_df" value="<?php echo $datos->segundo_apellido_2_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_2" id="sexo_df_2" value="<?php echo $datos->sexo_df_2?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_2" id="fecha_nacimiento_df_2" value="<?php echo $datos->fecha_nacimiento_df_2?>" /></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>3</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_3" id="parentesco" value="<?php echo $datos->parentesco_3?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_3" id="primer_apellido" value="<?php echo $datos->primer_apellido_3?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_3" id="nombres" value="<?php echo $datos->nombres_3?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_3" id="rut_familiar_3" value="<?php echo $datos->rut_familiar_3?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_3" id="carga_familiar_3" value="<?php echo $datos->carga_familiar_3?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_3_df" id="segundo_apellido_3_df" value="<?php echo $datos->segundo_apellido_3_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_3" id="sexo_df_3" value="<?php echo $datos->sexo_df_3?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_3" id="fecha_nacimiento_df_3" value="<?php echo $datos->fecha_nacimiento_df_3?>" /></td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>4</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_4" id="parentesco_4" value="<?php echo $datos->parentesco_4?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_4" id="primer_apellido_4" value="<?php echo $datos->primer_apellido_4?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_4" id="nombres_4" value="<?php echo $datos->nombres_4?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_4" id="rut_familiar_4" value="<?php echo $datos->rut_familiar_4?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_4" id="carga_familiar_4" value="<?php echo $datos->carga_familiar_4?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_4_df" id="segundo_apellido_4_df" value="<?php echo $datos->segundo_apellido_4_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_4" id="sexo_df_4" value="<?php echo $datos->sexo_df_4?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_4" id="fecha_nacimiento_df_4" value="<?php echo $datos->fecha_nacimiento_df_4?>" /></td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>5</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_5" id="parentesco_5" value="<?php echo $datos->parentesco_5?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_5" id="primer_apellido_5" value="<?php echo $datos->primer_apellido_5?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_5" id="nombres_5" value="<?php echo $datos->nombres_5?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_5" id="rut_familiar_5" value="<?php echo $datos->rut_familiar_5?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_5" id="carga_familiar_5" value="<?php echo $datos->carga_familiar_5?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_5_df" id="segundo_apellido_5_df" value="<?php echo $datos->segundo_apellido_5_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_5" id="sexo_df_5" value="<?php echo $datos->sexo_df_5?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_5" id="fecha_nacimiento_df_5" value="<?php echo $datos->fecha_nacimiento_df_5?>" /></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>6</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_6" id="parentesco_6" value="<?php echo $datos->parentesco_6?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_6" id="primer_apellido_6" value="<?php echo $datos->primer_apellido_6?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_6" id="nombres_6" value="<?php echo $datos->nombres_6?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_6" id="rut_familiar_6" value="<?php echo $datos->rut_familiar_6?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_6" id="carga_familiar_6" value="<?php echo $datos->carga_familiar_6?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_6_df" id="segundo_apellido_6_df" value="<?php echo $datos->segundo_apellido_6_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_6" id="sexo_df_6" value="<?php echo $datos->sexo_df_6?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_6" id="fecha_nacimiento_df_6" value="<?php echo $datos->fecha_nacimiento_df_6?>" /></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>7</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_7" id="parentesco_7" value="<?php echo $datos->parentesco_7?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_7" id="primer_apellido_7" value="<?php echo $datos->primer_apellido_7?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_7" id="nombres_7" value="<?php echo $datos->nombres_7?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_7" id="rut_familiar_7" value="<?php echo $datos->rut_familiar_7?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_7" id="carga_familiar_7" value="<?php echo $datos->carga_familiar_7?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_7_df" id="segundo_apellido_7_df" value="<?php echo $datos->segundo_apellido_7_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_7" id="sexo_df_7" value="<?php echo $datos->sexo_df_7?>" /></td>
                      <td><input type='text' class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_7" id="fecha_nacimiento_df_7" value="<?php echo $datos->fecha_nacimiento_df_7?>" /></td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>8</b></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="parentesco_8" id="parentesco_8" value="<?php echo $datos->parentesco_8?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="primer_apellido_8" id="primer_apellido_8" value="<?php echo $datos->primer_apellido_8?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="nombres_8" id="nombres_8" value="<?php echo $datos->nombres_8?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="rut_familiar_8" id="rut_familiar_8" value="<?php echo $datos->rut_familiar_8?>" /></td>
                      <td><input type='text' class="input-mini" style="width:50px;height:28px" name="carga_familiar_8" id="carga_familiar_8" value="<?php echo $datos->carga_familiar_8?>" /></td>
                      <td><input type='text' class="input-mini" style="width:130px;height:28px" name="segundo_apellido_8_df" id="segundo_apellido_8_df" value="<?php echo $datos->segundo_apellido_8_df?>" /></td>
                      <td><input type='text' class="input-mini" style="width:100px;height:28px" name="sexo_df_8" id="sexo_df_8" value="<?php echo $datos->sexo_df_8?>" /></td>
                      <td><input type='text' style="background:url(logo.jpg) no-repeat left; padding-left:2px"  class="datepicker" style="width:130px;height:28px" name="fecha_nacimiento_df_8" id="fecha_nacimiento_df_8" value="<?php echo $datos->fecha_nacimiento_df_8?>"/></td>
                    </tr>
                    </table>
    </div>             
                 <div id="cuarto" class="tab-pane fade">
                 <div class="col-md-6">
                      <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">Calle/Numero/Departamento</label>
                          <div class="controls">
                            <input type='text' class="input-mini" name="calles" id="calles" value="<?php echo $datos->calles?>" />
                          </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Villa/Poblacion</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="villas" id="villas" value="<?php echo $datos->villas?>" />
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Ciudad</label>
                        <div class="controls">
                          <input type='text' class="ciudades" name="ciudades" id="ciudades" value="<?php echo $datos->ciudades?>" />
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Region</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="region" id="region" value="<?php echo $datos->region?>" />
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6">

                      <div class="control-group">
                        <br><br>
                        <label class="control-label" for="inputTipo">N° Telefono</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="n_telefono_d" id="n_telefono_d" value="<?php echo $datos->n_telefono_d?>" />
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Comuna</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="comuna_d" id="comuna_d" value="<?php echo $datos->comuna_d?>" />
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Vivienda</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="vivienda_d" id="vivienda_d" value="<?php echo $datos->vivienda_d?>" />
                        </div>
                      </div>

                       </div>
                </div>
                <div id="quinto" class="tab-pane fade">
                 <div class="col-md-12">
                  <div class="control-group">
                    <br><br>
                   <table align="center">
                     <tr>
                      <br>
                      <td aling="center"><b>Estudios</b></td>                                          
                      <td aling="center"><b>Establecimiento</b></td>                        
                      <td aling="center"><b>Profesion</b></td>                        
                      <td aling="center"><b>Estado</b></td>                        
                      <td aling="center"><b>Adjuntar</b></td>  
                      <td align="center"><b>Subir</b></td>  

                     </tr>
                    <tr>
                      <td><b>Basicos</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_1" id="establecimiento_1" value="<?php echo $datos->establecimiento_1?>"/></td>
                      <td></td>
                      <td><select name="id_select_basico" id="id_select_basico">
                            <?php foreach ($estadolista as $row){ ?>
                            <option value="<?php echo $row->id?>" <?php if($datos->basico_e == $row->id){ echo "selected"; } ?>><?php echo $row->estado?></option>           
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                            <div class="control-group">
                            <div class="controls">
                            <?php
                            if(!$datos->documento_1){
                            ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                            <a  href="<?php echo base_url().$datos->documento_1 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                           ?>
                      </td> 
                      <td>
                        <input type="file" name="documento_1" id="documento_1"/>
                        </div>
                        </div> 
                      </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Medios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_2" id="establecimiento_2" value="<?php echo $datos->establecimiento_2?>"/></td>
                      <td></td>
                      <td><select name="id_select_medios" id="id_select_medios">
                            <?php foreach ($estadolista as $row2){ ?>
                            <option value="<?php echo $row2->id?>" <?php if($datos->medios_e == $row2->id){ echo "selected"; } ?>><?php echo $row2->estado?></option>           
                            <?php } ?>
                          </select></td>
                       <td><div class="control-group">
                          <div class="controls">
                          <?php
                          if(!$datos->documento_2){
                          ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                            <a href="<?php echo base_url().$datos->documento_2 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                           ?>
                       </td>
                       <td>
                        <input type="file" name="documento_2" id="documento_2"/>
                        </div>
                        </div> 
                       </td>
                    </tr>
                     <tr style="text-align:center">
                      <td><b>Tecnicos</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_3" id="establecimiento_3" value="<?php echo $datos->establecimiento_3?>"/></td>
                      <td><select name="id_select_tecnico_1" id="id_select_tecnico_1">
                            <?php foreach ($tecnicolista as $row3){ ?>
                            <option value="<?php echo $row3->id?>" <?php if($datos->c_tecnico_1 == $row3->id){ echo "selected"; } ?>><?php echo $row3->nombre?></option>           
                            <?php } ?>
                          </select></td>
                      <td><select name="id_select_tecnicos_e_1" id="id_select_tecnicos_e_1">
                            <?php foreach ($estadolista as $row4){ ?>
                            <option value="<?php echo $row4->id?>" <?php if($datos->tecnicos_e_1 == $row4->id){ echo "selected"; } ?>><?php echo $row4->estado?></option>           
                            <?php } ?>
                          </select></td>
                      <td><div class="control-group">
                          <div class="controls">
                          <?php
                          if(!$datos->documento_3){
                          ?>
                          <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                          <a href="<?php echo base_url().$datos->documento_3 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                           ?>
                      </td>
                      <td><input type="file" name="documento_3" id="documento_3"/>
                            </div>
                            </div> 
                      </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Tecnicos</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_4" id="establecimiento_4" value="<?php echo $datos->establecimiento_4?>"/></td>
                      <td><select name="id_select_tecnico_2" id="id_select_tecnico_2">
                            <?php foreach ($tecnicolista as $row4){ ?>
                            <option value="<?php echo $row4->id?>" <?php if($datos->c_tecnico_2 == $row4->id){ echo "selected"; } ?>><?php echo $row4->nombre?></option>           
                            <?php } ?>
                          </select>
                      </td>
                      <td><select name="id_select_tecnicos_e_2" id="id_select_tecnicos_e_2">
                            <?php foreach ($estadolista as $row5){ ?>
                            <option value="<?php echo $row5->id?>" <?php if($datos->tecnicos_e_2 == $row5->id){ echo "selected"; } ?>><?php echo $row5->estado?></option>           
                            <?php } ?>
                          </select></td>
                        <td><div class="control-group">
                             <div class="controls">
                             <?php
                             if(!$datos->documento_4){
                             ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                            <?php
                            }else{
                            ?>
                            <a href="<?php echo base_url().$datos->documento_4 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                           <?php
                           }
                           ?>
                        </td>
                        <td>
                           <input type="file" name="documento_4" id="documento_4"/>
                           </div>
                           </div> 
                        </td>
                      </tr>
                      <tr style="text-align:center">
                      <td><b>Tecnicos</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_5" id="establecimiento_5" value="<?php echo $datos->establecimiento_5?>"/></td>
                        <td><select name="id_select_tecnico_3" id="id_select_tecnico_3">
                            <?php foreach ($tecnicolista as $row5){ ?>
                            <option value="<?php echo $row5->id?>" <?php if($datos->c_tecnico_3 == $row5->id){ echo "selected"; } ?>><?php echo $row5->nombre?></option>           
                            <?php } ?>
                          </select></td>
                        <td><select name="id_select_tecnicos_e_3" id="id_select_tecnicos_e_3">
                            <?php foreach ($estadolista as $row6){ ?>
                            <option value="<?php echo $row6->id?>" <?php if($datos->tecnicos_e_3 == $row6->id){ echo "selected"; } ?>><?php echo $row6->estado?></option>           
                            <?php } ?>
                          </select></td>
                        <td><div class="control-group">
                            <div class="controls">
                            <?php
                            if(!$datos->documento_5){
                            ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                            <?php
                            }else{
                            ?>
                            <a href="<?php echo base_url().$datos->documento_5?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <?php
                            }
                           ?>
                        </td>
                        <td>
                          <input type="file" name="documento_5" id="documento_5"/>
                            </div>
                            </div> 
                        </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Tecnicos</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_6" id="establecimiento_6" value="<?php echo $datos->establecimiento_6?>"/></td>
                      <td><select name="id_select_tecnico_4" id="id_select_tecnico_4">
                            <?php foreach ($tecnicolista as $row6){ ?>
                            <option value="<?php echo $row6->id?>" <?php if($datos->c_tecnico_4 == $row6->id){ echo "selected"; } ?>><?php echo $row6->nombre?></option>           
                            <?php } ?>
                          </select></td>
                      <td><select name="id_select_tecnicos_e_4" id="id_select_tecnicos_e_4">
                            <?php foreach ($estadolista as $row7){ ?>
                            <option value="<?php echo $row7->id?>" <?php if($datos->tecnicos_e_4 == $row7->id){ echo "selected"; } ?>><?php echo $row7->estado?></option>           
                            <?php } ?>
                          </select></td>
                      <td><div class="control-group">
                          <div class="controls">
                          <?php
                            if(!$datos->documento_6){
                          ?>
                          <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                          <a href="<?php echo base_url().$datos->documento_6 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                           ?>
                      </td>
                      <td>
                          <input type="file" name="documento_6" id="documento_6"/>
                          </div>
                          </div> 
                      </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Tecnicos</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_7" id="establecimiento_7" value="<?php echo $datos->establecimiento_7?>"/></td>
                      <td><select name="id_select_tecnico_5" id="id_select_tecnico_5">
                            <?php foreach ($tecnicolista as $row7){ ?>
                            <option value="<?php echo $row7->id?>" <?php if($datos->c_tecnico_5 == $row7->id){ echo "selected"; } ?>><?php echo $row7->nombre?></option>           
                            <?php } ?>
                          </select></td>
                      <td><select name="id_select_tecnicos_e_5" id="id_select_tecnicos_e_5">
                            <?php foreach ($estadolista as $row8){ ?>
                            <option value="<?php echo $row8->id?>" <?php if($datos->tecnicos_e_5 == $row8->id){ echo "selected"; } ?>><?php echo $row8->estado?></option>           
                            <?php } ?>
                          </select></td>
                      <td><div class="control-group">
                          <div class="controls">
                          <?php
                          if(!$datos->documento_7){
                          ?>
                          <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                          <a href="<?php echo base_url().$datos->documento_7 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                          ?>
                      </td>
                      <td>
                          <input type="file" name="documento_7" id="documento_7"/>
                          </div>
                        </div> 
                      </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_8" id="establecimiento_8" value="<?php echo $datos->establecimiento_8?>"/></td>
                      <td><select name="id_select_profesion_1" id="id_select_profesion_1">
                            <?php foreach ($universidadlista as $row8){ ?>
                            <option value="<?php echo $row8->id?>" <?php if($datos->c_profesion_1 == $row8->id){ echo "selected"; } ?>><?php echo $row8->nombre?></option>           
                            <?php } ?>
                          </select></td>
                      <td><select name="id_select_universitarios_e_1" id="id_select_universitarios_e_1">
                            <?php foreach ($estadolista as $row9){ ?>
                            <option value="<?php echo $row9->id?>" <?php if($datos->profesional_e_1 == $row9->id){ echo "selected"; } ?>><?php echo $row9->estado?></option>           
                            <?php } ?>
                          </select></td>
                      <td><div class="control-group">
                          <div class="controls">
                          <?php
                          if(!$datos->documento_8){
                          ?>
                          <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                          <?php
                          }else{
                          ?>
                          <a href="<?php echo base_url().$datos->documento_8 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                          <?php
                          }
                           ?>
                        </td>
                        <td>
                          <input type="file" name="documento_8" id="documento_8"/>
                            </div>
                            </div> 
                         </td>
                    </tr>
                      <tr style="text-align:center">
                        <td><b>Universitarios</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_9" id="establecimiento_9" value="<?php echo $datos->establecimiento_9?>"/></td>
                        <td><select name="id_select_profesion_2" id="id_select_profesion_2">
                            <?php foreach ($universidadlista as $row10){ ?>
                            <option value="<?php echo $row10->id?>" <?php if($datos->c_profesion_2 == $row10->id){ echo "selected"; } ?>><?php echo $row10->nombre?></option>           
                            <?php } ?>
                          </select></td>
                        <td><select name="id_select_universitarios_e_2" id="id_select_universitarios_e_2">
                            <?php foreach ($estadolista as $row11){ ?>
                            <option value="<?php echo $row11->id?>" <?php if($datos->profesional_e_2 == $row11->id){ echo "selected"; } ?>><?php echo $row11->estado?></option>           
                            <?php } ?>
                          </select></td>
                         <td><div class="control-group">
                              <div class="controls">
                              <?php
                                if(!$datos->documento_9){
                              ?>
                              <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                              <?php
                              }else{
                              ?>
                              <a href="<?php echo base_url().$datos->documento_9 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                              <?php
                               }
                              ?>
                            </td>
                            <td>
                              <input type="file" name="documento_9" id="documento_9"/>
                              </div>
                               </div> 
                          </td>
                        </tr>
                      <tr style="text-align:center">
                        <td><b>Universitarios</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_10" id="establecimiento_10" value="<?php echo $datos->establecimiento_10?>"/></td>
                        <td><select name="id_select_profesion_3" id="id_select_profesion_3">
                            <?php foreach ($universidadlista as $row12){ ?>
                            <option value="<?php echo $row12->id?>" <?php if($datos->c_profesion_3 == $row12->id){ echo "selected"; } ?>><?php echo $row12->nombre?></option>           
                            <?php } ?>
                          </select></td>
                        <td><select name="id_select_universitarios_e_3" id="id_select_universitarios_e_3">
                            <?php foreach ($estadolista as $row13){ ?>
                            <option value="<?php echo $row13->id?>" <?php if($datos->profesional_e_3 == $row13->id){ echo "selected"; } ?>><?php echo $row11->estado?></option>           
                            <?php } ?>
                          </select></td>
                        <td><div class="control-group">
                            <div class="controls">
                            <?php
                            if(!$datos->documento_10){
                            ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                            <?php
                            }else{
                            ?>
                            <a href="<?php echo base_url().$datos->documento_10 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <?php
                            }
                           ?>
                        </td>
                        <td>
                         <input type="file" name="documento_10" id="documento_10"/>
                          </div>
                          </div> 
                        </td>
                      </tr>
                      <tr style="text-align:center">
                        <td><b>Universitarios</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_11" id="establecimiento_11" value="<?php echo $datos->establecimiento_11?>"/></td>
                        <td><select name="id_select_profesion_4" id="id_select_profesion_4">
                            <?php foreach ($universidadlista as $row14){ ?>
                            <option value="<?php echo $row14->id?>" <?php if($datos->c_profesion_4 == $row14->id){ echo "selected"; } ?>><?php echo $row14->nombre?></option>           
                            <?php } ?>
                          </select></td>
                       <td><select name="id_select_universitarios_e_4" id="id_select_universitarios_e_4">
                            <?php foreach ($estadolista as $row15){ ?>
                            <option value="<?php echo $row15->id?>" <?php if($datos->profesional_e_4 == $row15->id){ echo "selected"; } ?>><?php echo $row15->estado?></option>           
                            <?php } ?>
                          </select></td>
                        <td><div class="control-group">
                            <div class="controls">
                            <?php
                              if(!$datos->documento_11){
                            ?>
                            <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                            <?php
                            }else{
                            ?>
                            <a href="<?php echo base_url().$datos->documento_11 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                            <?php
                            }
                           ?>
                          </td>
                          <td>
                            <input type="file" name="documento_11" id="documento_11"/>
                            </div>
                            </div> 
                        </td>
                    </tr>
                    <tr style="text-align:center">
                      <td><b>Universitarios</b></td>
                      <td><input type='text' class="input-mini" name="establecimiento_12" id="establecimiento_12" value="<?php echo $datos->establecimiento_12?>"/></td>
                      <td><select name="id_select_profesion_5" id="id_select_profesion_5">
                            <?php foreach ($universidadlista as $row16){ ?>
                            <option value="<?php echo $row16->id?>" <?php if($datos->c_profesion_5 == $row16->id){ echo "selected"; } ?>><?php echo $row16->nombre?></option>           
                            <?php } ?>
                          </select></td>
                      <td><select name="id_select_universitarios_e_5" id="id_select_universitarios_e_5">
                            <?php foreach ($estadolista as $row17){ ?>
                            <option value="<?php echo $row17->id?>" <?php if($datos->profesional_e_5 == $row17->id){ echo "selected"; } ?>><?php echo $row17->estado?></option>           
                            <?php } ?>
                          </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                               <?php
                                if(!$datos->documento_12){
                                ?>
                                  <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                                <?php
                                }else{
                                ?>
                                <a href="<?php echo base_url().$datos->documento_12 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                <?php
                                 }
                                ?>
                              </td>
                              <td>
                                <input type="file" name="documento_12" id="documento_12"/>
                              </div>
                               </div> 
                            </td>
                          </tr>
                     <tr style="text-align:center">
                        <td><b>Especialidad</b></td>
                        <td><input type='text' class="input-mini" name="establecimiento_13" id="establecimiento_13" value="<?php echo $datos->establecimiento_13?>"/></td>
                        <td><select name="id_select_especialidad_1" id="id_select_especialidad_1">
                            <?php foreach ($especialidadlista as $row18){ ?>
                            <option value="<?php echo $row18->id?>" <?php if($datos->c_especialidad_1 == $row18->id){ echo "selected"; } ?>><?php echo $row18->nombre?></option>           
                            <?php } ?>
                          </select></td>
                        <td><select name="id_select_especialidad_e_1" id="id_select_especialidad_e_1">
                            <?php foreach ($estadolista as $row19){ ?>
                            <option value="<?php echo $row19->id?>" <?php if($datos->especialidad_e_1 == $row19->id){ echo "selected"; } ?>><?php echo $row19->estado?></option>           
                            <?php } ?>
                          </select></td>
                          <td><div class="control-group">
                              <div class="controls">
                              <?php
                              if(!$datos->documento_13){
                              ?>
                              <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                              <?php
                              }else{
                              ?>
                              <a href="<?php echo base_url().$datos->documento_13 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                              <?php
                                 }
                              ?>
                            </td>
                            <td>
                              <input type="file" name="documento_13" id="documento_13"/>
                              </div>
                              </div> 
                            </td>
                          </tr>
                          <tr style="text-align:center">
                            <td><b>Especialidad</b></td>
                            <td><input type='text' class="input-mini" name="establecimiento_14" id="establecimiento_14" value="<?php echo $datos->establecimiento_14?>"/></td>
                            <td><select name="id_select_especialidad_2" id="id_select_especialidad_2">
                            <?php foreach ($especialidadlista as $row20){ ?>
                            <option value="<?php echo $row20->id?>" <?php if($datos->c_especialidad_2 == $row20->id){ echo "selected"; } ?>><?php echo $row20->nombre?></option>           
                            <?php } ?>
                          </select></td>
                            <td><select name="id_select_especialidad_e_2" id="id_select_especialidad_e_2">
                            <?php foreach ($estadolista as $row21){ ?>
                            <option value="<?php echo $row21->id?>" <?php if($datos->especialidad_e_2 == $row21->id){ echo "selected"; } ?>><?php echo $row21->estado?></option>           
                            <?php } ?>
                          </select></td>
                            <td><div class="control-group">
                                <div class="controls">
                                    <?php
                                      if(!$datos->documento_14){
                                    ?>
                                    <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                                    <?php
                                      }else{
                                    ?>
                                    <a href="<?php echo base_url().$datos->documento_14 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    <?php
                                      }
                                    ?>
                                  </td>
                                  <td>
                                    <input type="file" name="documento_14" id="documento_14"/>
                                </div>
                               </div> 
                              </td>
                            </tr>
                            <tr style="text-align:center">
                                <td><b>Especialidad</b></td>
                                <td><input type='text' class="input-mini" name="establecimiento_15" id="establecimiento_15" value="<?php echo $datos->establecimiento_15?>"/></td>
                                <td><select name="id_select_especialidad_3" id="id_select_especialidad_3">
                            <?php foreach ($especialidadlista as $row22){ ?>
                            <option value="<?php echo $row22->id?>" <?php if($datos->c_especialidad_3 == $row22->id){ echo "selected"; } ?>><?php echo $row22->nombre?></option>           
                            <?php } ?>
                          </select></td>
                                <td><select name="id_select_especialidad_e_3" id="id_select_especialidad_e_3">
                            <?php foreach ($estadolista as $row23){ ?>
                            <option value="<?php echo $row23->id?>" <?php if($datos->especialidad_e_3 == $row23->id){ echo "selected"; } ?>><?php echo $row23->estado?></option>           
                            <?php } ?>
                          </select></td>
                                <td><div class="control-group">
                                    <div class="controls"> 
                                      <?php
                                        if(!$datos->documento_15){
                                      ?>
                                      <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                                      <?php
                                        }else{
                                      ?>
                                      <a href="<?php echo base_url().$datos->documento_15 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    <?php
                                      }
                                    ?>
                                  </td>
                                  <td>
                                    <input type="file" name="documento_15" id="documento_15"/>
                                </div>
                               </div> 
                              </td>
                            </tr>
                           <tr style="text-align:center">
                              <td><b>Especialidad</b></td>
                              <td><input type='text' class="input-mini" name="establecimiento_16" id="establecimiento_16" value="<?php echo $datos->establecimiento_16?>"/></td>
                              <td><select name="id_select_especialidad_4" id="id_select_especialidad_4">
                            <?php foreach ($especialidadlista as $row24){ ?>
                            <option value="<?php echo $row24->id?>" <?php if($datos->c_especialidad_4 == $row24->id){ echo "selected"; } ?>><?php echo $row24->nombre?></option>           
                            <?php } ?>
                          </select></td>
                              <td><select name="id_select_especialidad_e_4" id="id_select_especialidad_e_4">
                            <?php foreach ($estadolista as $row25){ ?>
                            <option value="<?php echo $row25->id?>" <?php if($datos->especialidad_e_4 == $row25->id){ echo "selected"; } ?>><?php echo $row25->estado?></option>           
                            <?php } ?>
                          </select></td>
                              <td><div class="control-group">
                                <div class="controls">
                                <?php
                                if(!$datos->documento_16){
                                ?>
                                <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                                <?php
                                  }else{
                                ?>
                                  <a href="<?php echo base_url().$datos->documento_16 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                  <?php
                                    }
                                  ?>
                              </td>
                                <td>
                                  <input type="file" name="documento_16" id="documento_16"/>
                                    </div>
                                  </div> 
                                </td>
                              </tr>
                              <tr>
                                <td><b>Especialidad</b></td>
                                <td><input type='text' class="input-mini" name="establecimiento_17" id="establecimiento_17" value="<?php echo $datos->establecimiento_17?>"/></td>
                                <td><select name="id_select_especialidad_5" id="id_select_especialidad_5">
                            <?php foreach ($especialidadlista as $row25){ ?>
                            <option value="<?php echo $row25->id?>" <?php if($datos->c_especialidad_5 == $row25->id){ echo "selected"; } ?>><?php echo $row25->nombre?></option>           
                            <?php } ?>
                          </select></td>
                                <td><select name="id_select_especialidad_e_5" id="id_select_especialidad_e_5">
                            <?php foreach ($estadolista as $row26){ ?>
                            <option value="<?php echo $row26->id?>" <?php if($datos->especialidad_e_5 == $row26->id){ echo "selected"; } ?>><?php echo $row26->estado?></option>           
                            <?php } ?>
                          </select></td>
                                <td><div class="control-group">
                                  <div class="controls">
                                  <?php
                                  if(!$datos->documento_17){
                                  ?>
                                  <i style="color:red" class="fa fa-thumbs-down" aria-hidden="true"></i>
                                  <?php
                                    }else{
                                  ?>
                                    <a href="<?php echo base_url().$datos->documento_17 ?>" target="_blank"><i style="color:green" class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                  <?php
                                    }
                                  ?>
                                  </td>
                                  <td>
                                  <input type="file" name="documento_17" id="documento_17"/>
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
                        <label class="control-label" for="inputTipo">Licencia de Conducir</label>
                         <div class="controls">
                        <select name="id_select_licencia" id="id_select_licencia">
                            <?php foreach ($licencia_lista as $row33){ ?>
                            <option value="<?php echo $row33->id?>" <?php if($datos->licencia == $row33->id){ echo "selected"; } ?>><?php echo $row33->nombre?></option>           
                            <?php } ?>
                          </select>
                           </div>
                         </div>
                        
                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Clase</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="clase" id="clase" value="<?php echo $datos->clase?>"/>
                        </div>
                      </div>

                       <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Pantalon</label>
                        <div class="controls">
                           <input type='text' class="input-mini" name="talla_pantalon" id="talla_pantalon" value="<?php echo $datos->talla_pantalon?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Casaca</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_casaca" id="talla_casaca" value="<?php echo $datos->talla_casaca?>"/>
                        </div>
                      </div>
                  </div>
                <div class="col-md-6">
                  <div class="control-group">
                <br><br>
                        <label class="control-label" for="inputTipo">Talla Buzo</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_buzo" id="talla_buzo" value="<?php echo $datos->talla_buzo?>"/>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Talla Calzado</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="talla_calzado" id="talla_calzado" value="<?php echo $datos->talla_calzado?>" />
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label" for="inputTipo">Situacion Militar</label>
                        <div class="controls">
                          <input type='text' class="input-mini" name="situacion_militar" id="situacion_militar" value="<?php echo $datos->situacion_militar?>"/>
                        </div>
                      </div>
                </div>
                </div>
                 <div id="septimo" class="tab-pane fade">
                 <div class="col-md-6">
                  <br><br>
                   <?php foreach ($editar_texto as $datos){
                            ?>
                          <div class="col-md-6">
                              <input type='hidden' class="input-mini" name="id" id="id" value="<?php echo $datos->id?>"/>
                              <br>
                                <label class="control-label" for="inputTipo">Comentarios:</label>

                                  <div class="controls">
                              <textarea  class="input-mini" rows="5" cols="60" id="texto" name="texto" ><?php echo $datos->texto?></textarea>
                                  </div> 
                        </div>
                   <?php 
                        }
                    ?> 
                  </div>
                </div>

    <div id="octavo" class="tab-pane fade">
     <div class="col-md-6">
      <br><br>
        <table class="table" align="center">
            <input name="id_trabajador" type="hidden" value="<?php echo $datos->id; ?>">
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
              <td><input type="checkbox" name="check_estado[]" value="<?php echo $datos->id; ?>"<?php  echo ($datos->estado) ? "checked='checked'" : "";?> ></td>
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
          <?php
                }
              ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="modal-footer">
        <button type="submit" name="actualizar" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
      </div>
    </div>
  </form>
</body>
