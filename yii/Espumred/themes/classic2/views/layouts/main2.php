<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    
<!--   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
   -->
    <!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified CSS -->



<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  
<!--   <link href="<?php //echo Yii::app()->theme->baseUrl;?>/css/rating/jquery-2.1.1.js">
  <link href="<?php //echo Yii::app()->theme->baseUrl;?>/css/rating/jquery-2.1.1.min.js">  -->

  <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.rating.css" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.form.js">
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.MetaData.js">
<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/rating/jquery.rating.js">




<!-- Latest compiled and minified JavaScript -->


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl;?>/images/EspumasMedellin.png">
  </head>
  <body>
<?php 

 
?>

<style type="text/css">
  .bg-primary {
color: #000000;
/*background-color: #d5d5d5;*/
background-color: #f36815;
}

</style>



<div class="container">
  
<div class="navbar navbar-default" role="navigation">


  
      
        
      <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
     <a href="<?php echo Yii::app()->createUrl("site/index"); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/logo2.jpg" width='150px' height="50px"></a>
  </div>
 

     <!--  <div class="collapse navbar-collapse"> -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">

 
    <ul class="nav navbar-nav navbar-right">
     
      <li class="dropdown">
   
          <?php
          $menuItems="";
            $menuItems = array(
                        'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                        'items'=>array(
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        // array('label'=>'Ayuda', 'url'=>array('/site/page', 'view'=>'about')),
                        // array('label'=>'Contacto', 'url'=>array('/site/contact')),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                  )
              );
          
          } 
          elseif(Yii::app()->user->rol=='admin'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       // array('label'=>'Ciudad', 'url'=>array('/ciudad/create')),
                       array('label'=>'Usuario', 'url'=>array('/usuario/create')),
                       // array('label'=>'Productos', 'url'=>array('/articulos/create')),
                       // array('label'=>'Cliente', 'url'=>array('/cliente/create')),
                       // array('label'=>'Empresa', 'url'=>array('/empresa/create')),
                       // array('label'=>'CartasRemisoras', 'url'=>array('/cartaremisora/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );
                
          }   elseif(Yii::app()->user->rol=='adminSistema'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       array('label'=>'Crear Extension', 'url'=>array('extensiones/create')),
                       array('label'=>'Administrar Extension', 'url'=>array('extensiones/admin')),
                       array('label'=>'Listar Extension', 'url'=>array('extensiones/mostrarExtensiones')),
                      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );
                 }elseif(Yii::app()->user->rol=='corte'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       //array('label'=>'lote', 'url'=>array('lote/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );  

                      }elseif(Yii::app()->user->rol=='costo'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       array('label'=>'Crear', 'url'=>array('productocostos/create')),
                       array('label'=>'Informe', 'url'=>array('productocostos/mostrarInforme')),
                       array('label'=>'Modificar', 'url'=>array('productocostos/Actualizar')),
                       array('label'=>'Fecha', 'url'=>array('estadocosto/update&id=01')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );  
     }elseif(Yii::app()->user->rol=='costoExterno'||Yii::app()->user->rol=='costoMayorista'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                      // array('label'=>'Crear', 'url'=>array('productocostos/create')),
                       array('label'=>'Informe', 'url'=>array('productocostos/mostrarInforme')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    ); 
          

          }      elseif(Yii::app()->user->rol=='factura'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                       array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                       array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );  

                  }      

                        elseif(Yii::app()->user->rol=='recepcion'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                       array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                       array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                       array('label'=>'Registro Personal', 'url'=>array('ingresopersonal/menu')),
                       array('label'=>'Ingreso Personal', 'url'=>array('ingresopersonal/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );  
                 }  


                  elseif(Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='AdminfacturaGeneral'){
                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(
                       array('label'=>'Facturacion', 'url'=>array('facturacion/create')),
                       array('label'=>'Proveedores', 'url'=>array('provedoresfacturas/create')),
                       array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                       array('label'=>'Reporte', 'url'=>array('facturacion/informeGeneral')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    );
          
        }      elseif(Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='facturaCompras'){
                        $menuItems = array(
                            'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                            'items'=>array(
                               array('label'=>'Administracion', 'url'=>array('facturacion/informe')),
                               array('label'=>'Reporte', 'url'=>array('facturacion/informeGeneral')),
                               array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                               array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
              ),
            );
          

          }   elseif(Yii::app()->user->rol=='talentohumano'){

                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(       
                     array('label'=>'TALENTO HUMANO', 'url'=>''),               
                       // array('label'=>'ACTUALIZAR EMPLEADO', 'url'=>array('/informacionempleado/index')),
                       // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                       // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                       // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );            
          

          }   elseif(Yii::app()->user->rol=='porteria'){

                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(       
                     //array('label'=>'TALENTO HUMANO', 'url'=>''),               
                       // array('label'=>'ACTUALIZAR EMPLEADO', 'url'=>array('/informacionempleado/index')),
                       // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                       // array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                       // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );            



          }  elseif(Yii::app()->user->rol=='ingresopersonal'){

                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(       
                     //array('label'=>'TALENTO HUMANO', 'url'=>''),               
                       // array('label'=>'ACTUALIZAR EMPLEADO', 'url'=>array('/informacionempleado/index')),
                       // array('label'=>'CONSULTAR EMPLEADO', 'url'=>array('/informacionempleado/admin')),
                       //array('label'=>'INGRESO NUEVO EMPLEADO', 'url'=>array('/informacionpersonal/create')),
                       // array('label'=>'RETIRO', 'url'=>array('/informacionempleado/create')),
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  ); 

            }elseif(Yii::app()->user->rol=='comercio'){

                $menuItems = array(
                    'htmlOptions'=>array("class"=>"nav navbar-nav navbar-right"),
                    'items'=>array(       
                     //array('label'=>'TALENTO HUMANO', 'url'=>''),              
                        array('label'=>'Actualizar Condiciones Comerciales', 'url'=>array('/condicionescomerciales/actualizar')),
                        array('label'=>'Crear Condiciones Comerciales', 'url'=>array('/condicionescomerciales/create')),
                        array('label'=>'Mostrar Condiciones Comerciales', 'url'=>array('/informacionpersonal/admin')),
                        array('label'=>'Crear Cliente', 'url'=>array('/clientes/create')),
                        array('label'=>'Mostrar clientes', 'url'=>array('/clientes/admin')),
                        array('label'=>'Actualizar Clientes', 'url'=>array('/clientes/actualizar')),
                        array('label'=>'Crear descripcion', 'url'=>array('/descripcion/create')),
                        array('label'=>'mostrar descripcion', 'url'=>array('/descripion/admin')),
                        array('label'=>'Actualizar Descripcion', 'url'=>array('/descripion/actualizar')),
                        array('label'=>'Crear referencia', 'url'=>array('/referencias/create')),
                        array('label'=>'mostrar referencias', 'url'=>array('/referencias/admin')),
                        array('label'=>'Actualizar referencias', 'url'=>array('/referencias/actualizar')),



                       array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                       array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                  );            
          }





          }







            // }
                   
                
     $this->widget('zii.widgets.CMenu',$menuItems); 
                
                 
                 ?>
                     </li>
    </ul>
      </div><!--/.nav-collapse -->


    </div>

</div>



    
<?php if(!empty($this->breadcrumbs)):?>
  <div class="container" style="padding:0">
  <div>
  <div class="col-md-6">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>

<section>
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


</section><br>
<section id="Footer">
<footer class="footer bg-primary clearfix pd6">
 <div class="container">
                              <!--footer container-->
                              <div class="col-md-12">
                                  <div class="col-md-2">
                                  </div>
                                   
                                      <div class="col-md-8" align="center" id="contenido" >
                                       <section>
    <?php if(isset(Yii::app()->user->rol)): ?>

                        <?php if (Yii::app()->user->rol=='despacho'): ?>

                           
                                          <p >
                                          Fábrica: Cra 48 Nº 98 sur 05 variante a Caldas, sector la tablacita, La Estrella –Antioquia. 
                                          Oficinas Calle 3 sur nº 43ª-52. Of. 704 Torre Ultrabursátiles , Medellín- Antioquia PBX (4) 444 14 23
                                          <br>Email : despachos@espumasmedellin.com
                                          </p>
                                      
                          <?php ?>
                        <?php endif ?>

                        <?php if (Yii::app()->user->rol=='admin'): ?>
                          

                                          <p >
                                        Fábrica:Cra 48 Nº 98 sur 05 variante a Caldas, sector la tablacita, La Estrella –Antioquia. 
                                          Oficinas Calle 3 sur nº 43ª-52. Of. 704 Torre Ultrabursátiles , Medellín- Antioquia PBX (4) 444 14 23
                                          <br>Email : admin@espumasmedellin.com
                                          </p>

                          <?php ?>
                        <?php endif ?>



                   
    <?php  endif ?>
              </section>
              <section>
              <br><br><br><br>
              </section>
           </div>       
          <div class="col-md-2">
                                      
          </div>
          <!-- close .span4 -->
      </div>
       <!-- close .row-fluid-->
  </div>
  <!-- close footer .container-->  
    
</footer>


 <!--section class="footer-credits">
    <div class="container">
        <ul class="clearfix">
            <li>© 2013 Tenebit. All rights reserved.</li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
    <close footer-credits container-->
</section>

          </section> 
  
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
  <!--script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script-->

  </body>
</html>
