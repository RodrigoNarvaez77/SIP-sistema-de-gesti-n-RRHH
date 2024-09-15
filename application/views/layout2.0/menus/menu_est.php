<li><a href="<?php echo base_url() ?>usuarios/home"><i class="fa fa-home"></i> <span class="title"> Inicio </span></a></li>
<li><a href="<?php echo base_url() ?>documentos/documentos/listado"><i class="fa fa-book"></i> <span class="title"> Documentos </span></a></li>
<li><a href="<?php echo base_url() ?>usuarios/perfil/index"><i class="fa fa-user"></i> <span class="title"> Perfil </span></a></li>
<li><a href="<?php echo base_url() ?>usuarios/perfil/crear"><i class="fa fa-user"></i> <span class="title"> Crear Usuario </span></a></li>
<li><a href="javascript:void(0)"><i class="fa fa-road"></i> <span class="title"> EST </span><i class="icon-arrow"></i> </a>
	<ul class="sub-menu">
		<li><a href="javascript:void(0)"><i class="fa fa-group"></i> <span class="title"> Usuarios </span><i class="icon-arrow"></i> </a>	
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>est/trabajadores/buscar_js"><span class="title">Trabajadores </span> </a>
					<!--<ul class="sub-menu">
						<li><a href="<?php echo base_url() ?>est/trabajadores/agregar">Agregar</a></li>
						<li><a href="<?php echo base_url() ?>est/trabajadores/subir_archivo">Subir archivo</a></li>
						<li><a href="<?php echo base_url() ?>est/trabajadores/buscar">Buscar</a></li>
						<li><a href="#">Evaluar</a></li>
					</ul>-->
				</li>
				<li><a href="javascript:;"><span class="title">Usuario mandante</span><i class="icon-arrow"></i></a>
					<ul class="sub-menu">
						<li><a href="<?php echo base_url() ?>administracion/mandantes/agregar">Agregar mandante</a></li>
						<li><a href="#">Agregar subusuario</a></li>
						<li><a href="<?php echo base_url() ?>administracion/mandantes/buscar">Buscar mandante</a></li>
					</ul>
				</li>
				<li><a href="javascript:;"><span class="title">Internos</span><i class="icon-arrow"></i></a>
					<ul class="sub-menu">
						<li><a href="<?php echo base_url() ?>administracion/internos/categorias">Categorias</a></li>
						<li><a href="<?php echo base_url() ?>administracion/internos/agregar">Agregar</a></li>
						<li><a href="<?php echo base_url() ?>administracion/internos/buscar">Buscar</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="javascript:void(0)" ><i class="fa fa-gears"></i> <span class="title"> Administrar Requerimiento </span><i class="icon-arrow"></i></a>
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>est/empresas/listado">Empresa Mandante</a></li>
				<li><a href="<?php echo base_url() ?>est/plantas/buscar">Unidad de Negocio</a></li>
				<li><a href="<?php echo base_url() ?>est/areas/buscar">Areas</a></li>
				<li><a href="<?php echo base_url() ?>est/jefes_area/listado">Jefe de Area</a></li>
				<li><a href="<?php echo base_url() ?>est/cargos/buscar">Cargos</a></li>
			</ul>
		</li>
		<li><a href="<?php echo base_url() ?>est/requerimiento/listado"><i class="fa fa-bullhorn"></i> <span class="title"> Requerimientos </span></a>
			<!--<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>est/trabajadores/listado_grupo">Grupo de Requerimiento</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/agregar">Agregar</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/listado">Listado</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/busqueda_grupos">Busqueda Grupos</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/representantes_planta">Representantes Plantas</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/activos">Activos</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/historial">Historial</a></li>
				<li><a href="<?php echo base_url() ?>est/requerimiento/peticion_eliminacion">Petición de eliminación</a></li>
				<li><a href="#">Subir archivo</a></li>
				<li><a href="#">Buscar</a></li>
			</ul>-->
		</li>
		<li><a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Reportes </span></a>
			<!--<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/reportes/observaciones">Trabajadores con observaciones</a></li>
			</ul>-->
		</li>
		<li><a href="javascript:void(0)"><i class="fa fa-medkit"></i> <span class="title"> Evaluaciones </span></a>
			<!--<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/evaluaciones/crear">Crear</a></li>
				<li><a href="<?php echo base_url() ?>administracion/evaluaciones/archivo">Subir archivo</a></li>
				<li><a href="<?php echo base_url() ?>administracion/evaluaciones/informe_grupal">Informe Grupal</a></li>
				<li><a href="javascript:void(0)"><span class="title"> Listado </span><i class="icon-arrow"></i></a>
					<ul class="sub-menu">
						<?php foreach($listado_evaluaciones as $le){ ?>
							<li><a href="<?php echo base_url() ?>administracion/evaluaciones/listado/<?php echo $le->id ?>"><?php echo ucwords(mb_strtolower($le->nombre, 'UTF-8')) ?></a></li>
						<?php } ?>
					</ul>
				</li>
			</ul>-->
		</li>
		<li><a href="javascript:void(0)"><i class="fa fa-pencil-square-o"></i> <span class="title"> Publicaciones </span><i class="icon-arrow"></i></a>
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/publicaciones/publicar">Crear publicación</a></li>
				<li><a href="<?php echo base_url() ?>administracion/publicaciones/buscar/1">Listado Noticias</a></li>
				<li><a href="<?php echo base_url() ?>administracion/publicaciones/buscar/4">Listado Capacitaciones</a></li>
				<li><a href="<?php echo base_url() ?>administracion/ofertas/publicar">Ofertas de Trabajo</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)" ><i class="fa fa-desktop"></i> <span class="title"> Contratos </span><i class="icon-arrow"></i></a>
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/contratos/agregar_variable">Agregar Variable</a></li>
				<li><a href="<?php echo base_url() ?>administracion/contratos/editor_contratos">Texto de Contrato</a></li>
				<li><a href="<?php echo base_url() ?>administracion/contratos/listado">Listado de Contratos</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Configuraciones </span><i class="icon-arrow"></i></a>
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/configuracion/profesiones">Profesiones</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/especialidades">Especialidades</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/bancos">Bancos</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/tipos_de_archivos">Tipos de archivos</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/salud">Salud</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/afp">AFP</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/regiones">Regiones</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/provincias">Provincias</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/ciudades">Ciudades</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/nivel_de_estudios">Nivel de estudios</a></li>
				<li><a href="<?php echo base_url() ?>administracion/configuracion/estados_civiles">Estados civiles</a></li>
				<li><a href="<?php echo base_url() ?>administracion/motivosfalta/listar">Motivos de falta</a></li>
			</ul>
		</li>
		<li><a href="javascript:void(0)" ><i class="fa fa-desktop"></i> <span class="title"> Ayuda </span><i class="icon-arrow"></i></a>
			<ul class="sub-menu">
				<li><a href="<?php echo base_url() ?>administracion/mensajes/crear">Crear mensaje</a></li>
				<li><a href="<?php echo base_url() ?>administracion/avisos">Crear aviso</a></li>
				<li><a href="<?php echo base_url() ?>administracion/mensajes/bandeja" style="display: inline;">Revisar mensajes</a></li>
			</ul>
		</li>
	</ul>
</li>