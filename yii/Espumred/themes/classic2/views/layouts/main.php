<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.rating.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/font-awesome.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/72.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/57.png">
    <!-- <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl;?>/images/logoredondo2.png"> -->
    <link rel="icon" type="image/png" href="<?php echo Yii::app()->baseUrl;?>/images/logoredondo2.png" />
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/caps.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </head>
  <body>
  <style type="text/css">
    .bg-primary {
      color: #000000;
      /*background-color: #d5d5d5;*/
      background-color: #f36815;
    }
    

  </style>
  <header>
    <div class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a href="<?php echo Yii::app()->createUrl("site/index"); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/logo3.png" width='150px' height="50px"></a>
      </div>

      <!--  <div class="collapse navbar-collapse"> -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
           
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <?php

            if(isset($notification)){
                echo"existe una notificacion";
                // Funtions_Global::notifyMeD('','');
                var_dump($notificacion);
              }
            
              $text_login = "Iniciar Sesion";
              $text_logout = "Salir";
              $menuItems="";
              $menuItems = array(
                            'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                            'items'=>array(
                            array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            // array('label'=>'Ayuda', 'url'=>array('/site/page', 'view'=>'about')),
                            // array('label'=>'Contacto', 'url'=>array('/site/contact')),
                            array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                         ),
                        );
              if(isset(Yii::app()->user->rol)){
                if(Yii::app()->user->rol=='usuario'){
                  $menuItems=array(
                      'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                      'items'=>array(
                           array('label'=>'Ayuda', 'url'=>array('/site/page', 'view'=>'about')),
                           array('label'=>'Contact', 'url'=>array('/site/contact')),
                           array('label'=>'Mis Pedidos', 'url'=>array('pedido/cancelarPedidoUsuario')),
                           array('label'=>'Descripcion Pedidos', 'url'=>array('pedido/mostrarPedidoProductoUsuario')),
                           array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                           array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      )
                  );

                }elseif(Yii::app()->user->rol=='admin'){
                 $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(
                      array(
                        
                        'label'=>'Crear',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear informacion personal','url'=>array('informacionpersonal/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear carta remisora','url'=>array('cartaremisora/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear Mecanico','url'=>array('mecanicos/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Mecanico','url'=>array('mecanicos/MostrarMecanico')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Herramienta','url'=>array('Herramientas/mostrarHerramientas')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear Usuarios','url'=>array('usuario/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Herramienta','url'=>array('Herramientas/mostrarHerramientas')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear Usuarios','url'=>array('usuario/create')),
                          )),
                       
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest))
                  ); 

               }elseif(Yii::app()->user->rol=='adminSistema'){
                 $menuItems = array(
                   'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                   'items'=>array(
                     array('label'=>'Crear Extension', 'url'=>array('extensiones/create')),
                     array('label'=>'Administrar Extension', 'url'=>array('extensiones/admin')),
                     array('label'=>'Listar Extension', 'url'=>array('extensiones/mostrarExtensiones')),
                     array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                     array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                   ),
                 );

                }elseif(Yii::app()->user->rol=='mantenimiento'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                    array('label'=>'Mecanicos', 'url'=>array('/mecanicos/create')),
                      array('label'=>'Herramientas', 'url'=>array('/herramientas/create')),
                      array('label'=>'Repuesto', 'url'=>array('/repuestos/create')),
                      array('label'=>'Registro', 'url'=>array('/registro/create')),
                      array('label'=>'Administrador', 'url'=>array('mecanicos/MostrarMecanico')),                                              
                      //array('label'=>'Remision', 'url'=>array('/prestamos/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='despacho'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'CartasRemisoras', 'url'=>array('/cartaremisora/create')),
                      array('label'=>'Cliente', 'url'=>array('/cliente/create')),
                      array('label'=>'Empresa', 'url'=>array('/empresa/create')),
                      array('label'=>'Productos', 'url'=>array('/articulos/create')),
                      //array('label'=>'Remision', 'url'=>array('/prestamos/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.'('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );


                }elseif(Yii::app()->user->rol=='corte'){
                 $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(
                      array(
                        
                        'label'=>'Lote',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear','url'=>array('lote/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Administrar','url'=>array('lote/admin')),
                          )),
                        array(
                        'label'=>'Bloque Espuma',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Actualizar','url'=>array('lote/admindescargo')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Consultar','url'=>array('formacion/admin')),
                          )),
                        array(
                        'label'=>'Descargar Espumas',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Dotacion','url'=>array('descargoespumas/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Cargos','url'=>array('descargoespumas/admin')),
                          )),
                        array(
                        'label'=>'Informe',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Vehiculo','url'=>array('formacion/MostrarInforme')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Conductor','url'=>array('descargoespumas/admin')),
                          )),
                      array(
                        'label'=>'Espumas',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear Visitantes','url'=>array('espumas/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Ver Visitas Ingresadas','url'=>array('espumas/admin')),
                         
                          )),
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest))
                  );
                }elseif(Yii::app()->user->rol=='costo'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'Crear', 'url'=>array('productocostos/create')),
                      array('label'=>'Informe', 'url'=>array('productocostos/mostrarInforme')),
                      array('label'=>'Modificar', 'url'=>array('productocostos/Actualizar')),
                      array('label'=>'Fecha', 'url'=>array('estadocosto/update&id=01')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='costoExterno'||Yii::app()->user->rol=='costoMayorista'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      // array('label'=>'Crear', 'url'=>array('productocostos/create')),
                      array('label'=>'Informe', 'url'=>array('productocostos/mostrarInforme')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );

                }elseif(Yii::app()->user->rol=='factura'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                      array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                      array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='recepcion'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                      array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                      array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                      array('label'=>'Registro Personal', 'url'=>array('ingresopersonal/menu')),
                      array('label'=>'Ingreso Personal', 'url'=>array('ingresopersonal/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='AdminfacturaGeneral'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                      array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                      array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                      array('label'=>'Reporte', 'url'=>array('facturacion/informeGeneral')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='facturaCompras'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                      array('label'=>'Reporte', 'url'=>array('facturacion/informeGeneral')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='talentohumano'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(
                      array(
                        'label'=>'Exportar',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Carnet','url'=>array('informacionempleado/generarExcelCarnet')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Cuenta','url'=>array('informacionempleado/generarExcelCuenta')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Dotaciones','url'=>array('dotacion/generarExcel')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Dotaciones Relaciones','url'=>array('dotacion/generarExcelEmpleado')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Empleados','url'=>array('informacionempleado/generarExcel')),
                          )),
                        array(
                        'label'=>'Empleado',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Actualizar','url'=>array('informacionempleado/actualizar')),
                          // array('itemOptions'=>array('class'=>'divider')),
                          // array('label'=>'Consultar','url'=>array('informacionempleado/mostrarEmpleado')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Ingreso','url'=>array('informacionpersonal/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Listar Empleado','url'=>array('informacionempleado/index')),
                          // array('itemOptions'=>array('class'=>'divider')),
                          // array('label'=>'Buscar Empleado','url'=>array('informacionEmpleado/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Buscar Empleado Sin Identificar','url'=>array('informacionpersonal/admin')),
                          )),
                        array(
                        'label'=>'Modificar',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Dotacion','url'=>array('articulosdedotacion/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Cargos','url'=>array('cargos/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Areas','url'=>array('area/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Retiro','url'=>array('informacionempleado/mostrarRetiro')),
                        
                          )),
                        array(
                        'label'=>'Porteria',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Vehiculo','url'=>array('vehiculo/menuinicio')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Conductor','url'=>array('registroconductores/menu')),
                          
                          )),
                      array(
                        'label'=>'Visitantes',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear Visitantes','url'=>array('ingresopersonal/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Ver Visitas Ingresadas','url'=>array('ingresopersonal/adminpersonal')),
                         
                          )),
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );

                }elseif(Yii::app()->user->rol=='porteria'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      //array('label'=>'TALENTO HUMANO', 'url'=>''),
                      // array('label'=>'ACTUALIZAR EMPLEADO', 'url'=>array('/informacionempleado/index')),
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='ingresopersonal'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      //array('label'=>'TALENTO HUMANO', 'url'=>''),
                      array('label'=>'INGRESO VEHICULO', 'url'=>array('/vehiculo/menuinicio')),
                      array('label'=>'REGISTRO CONDUCTORES', 'url'=>array('/registroconductores/menu')),                      
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );
                }elseif(Yii::app()->user->rol=='ingresovehiculo'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      //array('label'=>'TALENTO HUMANO', 'url'=>''),
                      // array('label'=>'ACTUALIZAR EMPLEADO', 'url'=>array('/informacionempleado/index')),
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );

                  }elseif(Yii::app()->user->rol=='Revisoria'){ 


                     $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),

                    'items'=>array(
                    // array('label'=>'Nuevo Cliente','url'=>array('/clientes/create')),
                    array('label'=>'Condicion Comercial', 'url'=>array('/observaciones/admin')),
                    array('label'=>'Visualizar Clientes', 'url'=>array('/clientes/admin')),
                             
                    array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)

                      ),
                );

                }elseif(Yii::app()->user->rol=='Asesor'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      //
                      array('label'=>'Crear Condicion Comercial', 'url'=>array('/condicionescomerciales/create')),
                      array('label'=>'Condicion Comercial', 'url'=>array('/observaciones/admin')),
                      array('label'=>'Solicitud de pedido', 'url'=>array('/solicitudP/Test')),
                      // array('label'=>'Crear PQRS', 'url'=>array('/quejasreclamos/MostrarAviso')),
              
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      ),
                    );

                    }elseif(Yii::app()->user->rol=='Gerente'||Yii::app()->user->rol=='GerenteComercial'||Yii::app()->user->rol=='GerenteCartera'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      
                      array('label'=>'Centro de Aceptacion', 'url'=>array('/observaciones/admin')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      ),
                    );

                    }elseif(Yii::app()->user->rol=='ServicioCliente'||Yii::app()->user->rol=='Qreclamos'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(

                     array(
                        'label'=>'PQRS',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Ver PQRS','url'=>array('QuejasReclamos/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear PQRS','url'=>array('QuejasReclamos/MostrarAviso')),
                         
                          )),
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                  ),
                );

                }elseif(Yii::app()->user->rol=='Test'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(
                      array(
                        'label'=>'Formato para pedidos', 
                        'url'=>array('solicitudP/test'),
                        'itemOptions'=>array('onclick'=>'notifyMe()')),
                      array(
                        'label'=>'Usuarios',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'CrearUsuarios','url'=>array('usuario/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Ver Usuarios','url'=>array('usuario/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'modificar', 'url'=>array('usuario/view')),                         
                          )),
                      array(
                        'label'=>'Condiciones Comerciales',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear Condicones comerciales','url'=>array('condicionescomerciales/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Condiciones Comerciales','url'=>array('condicionescomerciales/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Condicion Comercial', 'url'=>array('/observaciones/admin')),                         
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Alzas', 'url'=>array('/condicionescomerciales/alza')),                         
                          )),
                        array(
                        'label'=>'Clientes',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear Clientes','url'=>array('clientes/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Clientes','url'=>array('clientes/admin')),
                  
                          )),
                        array(
                        'label'=>'Descripcion',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Crear Descripcion','url'=>array('descripcion/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Descripcion','url'=>array('descripcion/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Crear Observaciones','url'=>array('observaciones/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Mostrar Observaciones','url'=>array('observaciones/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Prestamos Equipos','url'=>array('prestamoequipos/create')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Prestamos admin','url'=>array('prestamoequipos/admin')),
                          )),
                    
                      // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                      // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                      // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      
                     ),
                  );


                  }elseif(Yii::app()->user->rol=='Cartera'){
                  $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav"),
                    'items'=>array(
                      array(
                        'label'=>'Clientes',
                        'url'=>array('#'),
                        'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                        'submenuOptions'=>array('class'=>'dropdown-menu', 'role'=>'menu'),
                        'items'=>array(
                          array('label'=>'Ver Clientes','url'=>array('clientes/admin')),
                          array('itemOptions'=>array('class'=>'divider')),
                          array('label'=>'Registrar Clientes','url'=>array('clientes/create')),
                  
                          )),
                      array(
                        'label'=>'Condiciones Comerciales',
                        'url'=>array('/observaciones/admin')),
                      
                      array('label'=>$text_login, 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                      array('label'=>$text_logout.' ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                      
                     ),
                  );


                  }
              } //fin del if que valida que rol se ha logueado
              // }
              $this->widget('zii.widgets.CMenu',$menuItems);
            ?>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.nav final-->
  </header>
  <div class="container">
    <?php if(!empty($this->breadcrumbs)):?>
    <div class="container" style="padding:0">
      <div>
        <div class="col-md-6">
          <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'htmlOptions'=>array("style"=>"margin: 10px 0;"),
            'links'=>$this->breadcrumbs,
            ));
          ?><!-- breadcrumbs -->
        </div>
      </div>
    </div>
  <?php endif?>
    <?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
      <div class="container" style="padding-top:0">
        <div>
          <div class="col-md-10">
            <?php foreach($msgs as $type => $message):?>
              <div class="alert alert-<?php echo $type?>">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4><?php echo ucfirst($type)?>!</h4>
                <?php echo $message?>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    <?php endif;?>
    <?php echo $content;?>
  </div>
  
 
    <footer id="Footer" style="background-color:#ff5d00; height:100px; margin-top:8%;"></footer>

 
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.form.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.MetaData.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.rating.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript">
    $("#tabla").DataTable({
    "language":  {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});

     

    function ajaxpage(pagina,metodo){
      $.ajax({
      url:'/yii/espumred/index.php?r='+pagina+'/'+metodo,
      type:'get'
    }).done(function(done){
      $('.cuerpotabla').append(done);
      $('.loading').addClass('hidden');
        $('.panel').removeClass('hidden');
      $(".tablas").DataTable({
    "language":  {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
    
});
      
    }).error(function(){console.log("Error en el ajax del informacion Empleado")});
    $(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
    // $('section#Footer').css({'margin-top':'9.5%'});
    $('body').css({'background-color':'#EBEEEE'});
    $('.panel').addClass('caja');
    $('table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td').css({
      'border':'1px solid #ddd !important'
    });
    if ($(window).width() >= 820) {
      $('#Footer').removeClass('footermediaQuerym');
      $('#Footer').addClass('footermediaQuery');
    }
    $(window).resize(function(){
       if ($(window).width() >= 820) {
         $('#Footer').removeClass('footermediaQuerym');
         $('#Footer').addClass('footermediaQuery');
       }else if($(window).width() <= 766){
          $('#Footer').removeClass('footermediaQuery');
          $('#Footer').addClass('footermediaQuerym');

       }
    });
    }

    function indexpage(val){
  $('.contenidos').html('<div class="loading" style="width:100%; text-align:center; height:55vh; margin-top:10%;">'+
  '<div>'+
    '<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." style="position:absolute; z-index:9999;">'+
    '<img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_3.png" alt="Cargando contenido.." class="fa-pulse">'+
  '</div>'+
  '<span>Cargando contenido...</span>'+
'</div>');
  var pages = val;
    $.ajax({
      url:'/yii/espumred/index.php?r=informacionempleado/AjaxPaginations',
      data:{page:pages},
      type:'get'
    }).done(function(done){
      $('.contenidos').html(done);
    }).error(function(error){
      console.log('Error en el ajax de infomacion Empleado Index.php');
    });
}

// notificaciones

function  notifyMedos(titulo,cuerpo)  {  
    if  (!("Notification"  in  window))  {   
        alert("Este navegador no soporta notificaciones de escritorio");  
    }  
    else  if  (Notification.permission  ===  "granted")  {
        var  options  =   {
            body:   cuerpo,
            icon:   "/yii/espumred/images/logoredondo2.png",
            dir :   "ltr"
        };
        var  notification  =  new  Notification(titulo, options);
    }  
    else  if  (Notification.permission  !==  'denied')  {
        Notification.requestPermission(function (permission)  {
            if  (!('permission'  in  Notification))  {
                Notification.permission  =  permission;
            }
            if  (permission  ===  "granted")  {
                var  options  =   {
                    body:   cuerpo,
                icon:   "/yii/espumred/images/logoredondo2.png",
                dir :   "ltr"
                };     
                var  notification  =  new  Notification(titulo, options);
            }   
        });  
    }
}


    
  </script>


  </body>
</html>
