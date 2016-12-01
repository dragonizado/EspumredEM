<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
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
                    body:   "Descripción o cuerpo de la notificación",
                icon:   "/yii/espumred/images/logoredondo2.png",
                dir :   "ltr"
                };     
                var  notification  =  new  Notification("Hola :D", options);
            }   
        });  
    }
}
</script>
<?php
$cont=0;
$cont2=0;
$app_ver = '1.90';
$modelContrato=Contrato::model()->findAll();
 $modelEmpleado=Informacionempleado::model()->findAll();

for ($i=0; $i <count($modelContrato) ; $i++) { 
  $fecha=$modelContrato[$i]["fechaDeRetiro"];
                                             
    $segundos=strtotime($fecha) - strtotime('now');
    $diferencia_dias=intval($segundos/60/60/24);
    if ($diferencia_dias<="45"&& $diferencia_dias>"0") {
    $modelContrato[$i]["id"];
        for ($j=0; $j <count($modelEmpleado) ; $j++) { 
          if ($modelContrato[$i]["id"]==$modelEmpleado[$j]["contrato"]) {
           
          $cont=$cont+1;
                                                                                                                
          };
        };

    };
};

for ($i=0; $i <count($modelContrato) ; $i++) { 
  $fecha=$modelContrato[$i]["fechaPrimerContrato"];
                                             
    $segundos=strtotime($fecha) - strtotime('now');
    $diferencia_prueba=intval($segundos/60/60/24);
	
	$fechaActaul=date_default_timezone_set('UTC');
	$segundos2=strtotime($fechaActaul) - strtotime('now');
    $diaActual=intval($segundos/60/60/24);
	
    if($diferencia_prueba!="0"  && $diferencia_prueba<"0" ){

    if ($diferencia_prueba>"-12") {
    $modelContrato[$i]["id"];
        for ($j=0; $j <count($modelEmpleado) ; $j++) { 
          if ($modelContrato[$i]["id"]==$modelEmpleado[$j]["contrato"]) {
          $cont2=$cont2+1;
                                                                                                                 
          };
        };

    };
	 }
};
$arrayName = array();
Yii::app()->session['Registro']=$arrayName;
Yii::app()->session['Familiar']=$arrayName;
?>
<style>
  .rating-static {
  width: 60px;
  height: 16px;
  display: block;
  background: url('http://www.itsalif.info/blogfiles/rating/star-rating.png') 0 0 no-repeat;
}


</style>
			
                    <div class="row">
                    	 <div class="col-md-12">
                                <div class="row">
                                <div class="col-md-3 hidden-xs hidden-sm"style="text-align:center;" >
                                 <!-- <img src="<?php echo Yii::app()->baseUrl;?>/images/laterales.png" width='320px' height="400px"></a> -->
                                <div style="background-color:#ff5d00; width:27.7%; height:400px; position:fixed; float:left; left:0px;"></div>
                                
                                </div>
                                  <div class="col-md-6 col-xs-12" style="text-align:center; padding-top:3%;">
                                <?php if(isset(Yii::app()->user->rol)): ?>
                                    <!-- logo central de despacho -->
                                         <?php if (Yii::app()->user->rol=='despacho'): ?>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/ESPUMRED.png" width='130px' height="100px"></a>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='320px' height="300px"></a>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/ESPUMRED.png" width='130px' height="100px"></a>
                                      <?php endif ?>
                                        
                                     <!-- logo central de despacho -->

                                         <?php if (Yii::app()->user->rol=='talentohumano'): ?>
                                            <div>
                                                
                                         </div>
                                         <?php 
                                            $modelFamiliar=Contrato::model()->findAll();
                                            for ($i=0; $i <count($modelFamiliar) ; $i++) { 
                                               
                                            }
                                          ?>
                                          
                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                          Empleados proximo  a cumplir contrato <?php echo"( ".$cont." )"?>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Empleados proximo a vencer contrato</h4>
                                              </div>
                                              <div class="modal-body">
                                                 <?php 
                                                  $modelContrato=Contrato::model()->findAll();
                                                   $modelEmpleado=Informacionempleado::model()->findAll();
                                                  for ($i=0; $i <count($modelContrato) ; $i++) { 
                                                        $fecha=$modelContrato[$i]["fechaDeRetiro"];
                                             
                                                $segundos=strtotime($fecha) - strtotime('now');
                                                $diferencia_dias=intval($segundos/60/60/24);
												                        if($diferencia_dias!="0"  && $diferencia_dias>"0" ){
                                                if ($diferencia_dias<="45") {

                                                    $modelContrato[$i]["id"];

                                                    for ($j=0; $j <count($modelEmpleado) ; $j++) { 
                                                      if ($modelContrato[$i]["id"]==$modelEmpleado[$j]["contrato"]) {
                                                        $cont=$cont+$cont;
                                                        $modelInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleado[$j]["informacionPersonal"]);
                                                        echo "El Empleado<b> ".$modelInformacionPersonal["nombre"]
                                                        ." </b>con cc <b>".$modelInformacionPersonal["cc"].
                                                        "</b> esta proximo a vencer contrato con ".$diferencia_dias." dias de vigencia <br>";                                                       
                                                      };
                                                    };

                                                };
												                     }
                                                          ?><?php
                                                  }
                                                    ?> 
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>
										
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/TalentoHumano.png" width='400px' height="250px"></a>
										 
										   <!-- Button trigger modal -->
                                        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
                                          Empleados proximo  a vencer periodo de prueba <?php echo"( ".$cont2." )"?>
                                        </button>
										
										 <!-- Modal -->
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Empleados proximo a vencer periodo de prueba</h4>
                                              </div>
                                              <div class="modal-body">
                                                 <?php 
                                                  $modelContrato=Contrato::model()->findAll();
                                                   $modelEmpleadoPrueba=Informacionempleado::model()->findAll();
                                                  for ($i=0; $i <count($modelContrato) ; $i++) { 
                                                        $fecha=$modelContrato[$i]["fechaPrimerContrato"];
                                             
                                                $segundos=strtotime($fecha) - strtotime('now');
                                                $diferencia_dias=intval($segundos/60/60/24);
												if($diferencia_dias!="-12"  && $diferencia_dias<"0" ){
                                                if ($diferencia_dias>"-12") {
													$diferencia_dias=$diferencia_dias+12;
                                                    $modelContrato[$i]["id"];

                                                    for ($j=0; $j <count($modelEmpleadoPrueba) ; $j++) { 
                                                      if ($modelContrato[$i]["id"]==$modelEmpleadoPrueba[$j]["contrato"]) {
                                                        $cont2=$cont2+$cont2;
                                                        $modelInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleadoPrueba[$j]["informacionPersonal"]);
                                                        echo "El Empleado<b> ".$modelInformacionPersonal["nombre"]
                                                        ." </b>con cc <b>".$modelInformacionPersonal["cc"].
                                                        "</b> esta proximo a vencer periodo de prueba  con ".$diferencia_dias." dias de vigencia <br><hr>";                                                       
                                                      };
                                                    };

                                                };
												                        }
                                                ?><?php
                                                  }
                                                    ?> 
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                           <footer> Version <?echo $app_ver;?></footer>
                                      
                                       <?php endif ?>
                                             
                                              <!-- logo administrador Sistema de despacho -->
                                         <?php if (Yii::app()->user->rol=='adminSistema'): ?>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/administradorsistemas.png" width='350px' height="300px"></a>
                                        <footer>Version 1.0</footer>  
                                      <?php endif ?>



                                              <!-- logo administrador Sistema de mantenimiento -->
                                         <?php if (Yii::app()->user->rol=='mantenimiento'): ?>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/mantenimiento.jpg" width='350px' height="300px"></a>
                                          <footer> Version 1.0</footer>
                                      <?php endif ?>


                                           <!-- logo administrador Sistema de costos -->
                                         <?php if (Yii::app()->user->rol=='costo'||Yii::app()->user->rol=='costoExterno'||Yii::app()->user->rol=='costoMayorista'): ?>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/imagencosto.png" width='350px' height="300px"></a>
                                          <footer> Version 1.0</footer>
                                      <?php endif ?>



                                          <!-- logo administrador Sistema de porteria -->
                                         <?php if (Yii::app()->user->rol=='porteria'): ?>
                                          
                                          <div class="buttons col-md-12" >
                                           
                                           <a  align="center" href="<?php echo Yii::app()->createUrl("vehiculo/menu"); ?>" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/CONDUCTOR.jpg" width='250px' height="250px"></a>
                                          
                                          </div>                     
                                        <footer> Version <?echo $app_ver;?></footer>
                                      <?php endif ?>

                                      <!-- logo administrador Sistema de porteria -->
                                         <?php if (Yii::app()->user->rol=='ingresopersonal'): ?>
                                          
                                          <div class="buttons col-md-12" >
                                           <a  align="center" href="<?php echo Yii::app()->createUrl("ingresopersonal/create"); ?>" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/VISITANTE.jpg" width='250px' height="250px"></a>
                                           <a  align="center" href="<?php echo Yii::app()->createUrl("ingresopersonal/adminpersonal"); ?>" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/Guardar.png" width='250px' height="250px"></a>
                                                                                
                                          </div> 
                                          <div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>Crear Visitas</label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label>Ver Visitas Ingresadas</label>
                                          </div>

                                          <footer> Version <?echo $app_ver;?></footer>
                                        
                                      <?php endif ?>

                                      <!-- logo administrador Sistema de porteria -->
                                         <?php if (Yii::app()->user->rol=='ingresovehiculo'): ?>
                                          
                                          <div class="buttons col-md-12" >
                                           <a  align="center" href="<?php echo Yii::app()->createUrl("vehiculo/menuinicio"); ?>" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/CONDUCTOR.jpg" width='250px' height="250px"></a> 
                                           <a  align="center" href="<?php echo Yii::app()->createUrl("registroconductores/menu"); ?>" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/personal.png" width='250px' height="250px"></a>
                                           
                                             
                                          </div>                     
                                          <footer> Version <?echo $app_ver;?></footer>
                                      <?php endif ?>


                                           <!-- logo administrador Sistema de facturacion -->
                                         <?php if (Yii::app()->user->rol=='factura'||Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='facturaCompras'||Yii::app()->user->rol=='AdminfacturaGeneral'||Yii::app()->user->rol=='recepcion'): ?>
                                         <br>
                                         <br>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/logo2.jpg" width='350px' height="200px"></a>
                                        <footer> Version <?echo $app_ver;?></footer>
                                      <?php endif ?>


                                       <?php if (Yii::app()->user->rol=='admin'): ?>
                                          
                                        <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='400px' height="250px"></a>
                                        <footer> Version <?php echo $app_ver;?></footer>
                                        
                                        <?php endif ?>

                                        <?php if (Yii::app()->user->rol=='corte'): ?>
                                           
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                        <footer> Version <?php echo $app_ver;?></footer>

                                        <?php endif ?>


                                       <?php if (Yii::app()->user->rol=='noticorte'): ?>
                                            <div>
                                                <nav class="navbar navbar-default" role="navigation">
                                                <div class="container-fluid">
                                                  <!-- Collect the nav links, forms, and other content for toggling -->

                                                   <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                            data-target=".navbar-ex2-collapse">
                                                          <span class="sr-only">Desplegar navegación</span>
                                                          <span class="icon-bar"></span>
                                                          <span class="icon-bar"></span>
                                                          <span class="icon-bar"></span>
                                                        </button>
                                                       
                                                      </div>
                                                     
                                                  <div class="collapse navbar-collapse  navbar-ex2-collapse" id="bs-example-navbar-collapse-1">
                                                    <ul  class="nav navbar-nav">                                    
                                                     <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">DESCARGAR ESPUMA <span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                          <li><a href="<?php echo Yii::app()->createUrl("descargoespumas/create"); ?>">Crear</a></li>
                                                         <li class="divider"></li>
                                                         <li><a href="<?php echo Yii::app()->createUrl("descargoespumas/admin"); ?>">Administrar</a></li>
                                                                              
                                                         
                                                          </ul>
                                                      </li>                                             
                                                    </ul>
                                                  </div><!-- /.navbar-collapse -->
                                                </div><!-- /.container-fluid -->
                                              </nav>
                                         </div>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                        <footer> Version <?php echo $app_ver;?></footer>

                              <?php endif ?>



                             <?php if (Yii::app()->user->rol=='T8'): ?>
                                            <div>
                                                <nav class="navbar navbar-default" role="navigation">
                                                <div class="container-fluid">
                                                  <!-- Collect the nav links, forms, and other content for toggling -->

                                                   <div class="navbar-header">
                                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                                data-target=".navbar-ex2-collapse">
                                                          <span class="sr-only">Desplegar navegación</span>
                                                          <span class="icon-bar"></span>
                                                          <span class="icon-bar"></span>
                                                          <span class="icon-bar"></span>
                                                        </button>
                                                       
                                                      </div>
                                                     
                                                  <div class="collapse navbar-collapse  navbar-ex2-collapse" id="bs-example-navbar-collapse-1">
                                                    <ul  class="nav navbar-nav">                                    
                                                      <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOTE <span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                           <li><a href="<?php echo Yii::app()->createUrl("lote/create"); ?>">Crear</a></li>
                                                          <li class="divider"></li>
                                                             <li><a href="<?php echo Yii::app()->createUrl("lote/admin"); ?>">Administrar</a></li>
                           
                                                        
                                                            
                                                       </ul>
                                                      </li>
                                                     <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOQUE ESPUMA <span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                          <li><a href="<?php echo Yii::app()->createUrl("lote/admindescargo"); ?>">Crear</a></li>
                                                         <li class="divider"></li>
                                                         <li><a href="<?php echo Yii::app()->createUrl("formacion/admin"); ?>">Administrar</a></li>
                                                                              
                                                         
                                                          </ul>
                                                      </li>

                                                      <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESPUMAS<span class="caret"></span></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                          <li><a href="<?php echo Yii::app()->createUrl("espumas/create"); ?>">Crear</a></li>
                                                         <li class="divider"></li>
                                                         <li><a href="<?php echo Yii::app()->createUrl("espumas/admin"); ?>">Administrar</a></li>

                                                          </ul>
                                                      </li>                                             
                                                    </ul>
                                                  </div><!-- /.navbar-collapse -->
                                                </div><!-- /.container-fluid -->
                                              </nav>
                                         </div>
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                        <footer> Version <?php echo $app_ver;?></footer>

                                 <?php endif ?>
					         
					                  <!--desde aqui empieza usuario modificados recientemente-->
                            
					                      <?php if (Yii::app()->user->rol=='Test'): ?>
                                                
                                         <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                        <footer> Version <?php echo $app_ver;?></footer>

                                        <?php  endif ?>
                                        
                                   <!--configuracion de Usuario Niyereth-->

                             
                                <?php if (Yii::app()->user->rol=='Revisoria'): ?>
                             
                                 <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                <footer> Version 1.0</footer>

                                <?php endif ?>


                              <!--configuracion de usuario Wilmer-->


                                <?php if (Yii::app()->user->rol=='Gerente'): ?>
                                                
                                  <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer>
                                  <?php endif ?>
                                  

                                 <?php if (Yii::app()->user->rol=='Qreclamos'): ?>
                                  <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                  <?php endif ?>
                                 
                                  <!--creacion de usuario de gerentes para otorgar permisos-->


                                  <?php if (Yii::app()->user->rol=='GerenteComercial'): ?>
                                                
                                  <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                  <?php endif ?>
                                  
                                  
                                 <?php if (Yii::app()->user->rol=='GerenteCartera'): ?>
                                               
                                  <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                 <?php endif ?>
                                 

                                 <?php if (Yii::app()->user->rol=='Asesor'): ?>
                                        
                                <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                  <?php endif ?>
                                  
                                  
                                 <?php if (Yii::app()->user->rol=='ServicioCliente'): ?>
                                             
                                 <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                  <?php endif ?>

                                  <?php if (Yii::app()->user->rol=='Cartera'): ?>
                                             
                                 <img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>
                                  <footer> Version <?php echo $app_ver;?></footer> 
                                  <?php endif ?>


                                  <?php endif ?>
                                  <?php if (!isset(Yii::app()->user->rol)): ?>
                                  
                                    <a  href="<?php echo Yii::app()->createUrl("site/login"); ?>" ><img src="<?php echo Yii::app()->baseUrl;?>/images/Espumas medellin-logo-central.png" width='350px' height="300px"></a>                                     
                                 
                                  <?php endif ?>
                                  

                                  </div>
                                  <div class="col-md-3 hidden-xs hidden-sm" style="text-align:center;">
                                    <!-- <img src="<?php echo Yii::app()->baseUrl;?>/images/laterales.png" width='320px' height="400px"></a> -->
                                    <div style="background-color:#ff5d00; width:27.7%; height:400px; position:fixed; "></div>
                                  </div>



                                </div> <!-- col-md-3 -->
                            </div> <!-- ROW -->
                        </div> <!-- COL-MD-12 -->
                    </div> <!-- ROW -->

