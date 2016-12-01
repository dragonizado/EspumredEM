<?php 
  $modeloInformacionPersonal=Condicionescomerciales::model()->findByPk($model['condicionescomerciales']);
  $modeloCondicion=Condicion::model()->findByPk($model['condicion']);
  $id="0";
?>
<html>
<head>
   <!-- <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.min.css" media="print" />
</head>
<body>
  <style type="text/css">
 
    table thead tr td.colorgris{
      background-color: #BFBFBF;
    }

    td.colcentro{
       padding-top:41px !important;
    }

    .contenedor.fila{
       display: flex;
       flex-wrap: wrap;
       justify-content: space-between;
    }
    
    .gcontenedor{
       padding-left: 7px;
       padding-right: 7px;
    }
</style>
 <table class="table table-bordered">
   <thead>
    <tr>
      <td colspan="2" rowspan="3" align="center">
        <!-- <img type="button" value="electr&oacute;nico" src="<?php echo Yii::app()->baseUrl;?>/images/logo_pequenio.png" width='250px' height="50px" style="margin-top: 10px;">  -->
      </td>
      <td colspan="5" rowspan="3" align="center"><h3>CONDICIONES COMERCIALES DEL CLIENTE</h3></td>
      <td colspan="5" rowspan="3" align="center">
        Codigo: FGC-01 <br>
        Versión: 05 <br>
        Fecha: 04/02/2016 <br>
      </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td colspan="12"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">NOMBRE DEL ASESOR:</td>
      <td colspan="4" width="462" align="center"><?php echo $modeloInformacionPersonal["nombreAsesor"]; ?></td>
      <td colspan="1" align="center">COD:</td>
      <td colspan="5" align="center"><?php echo $modeloInformacionPersonal["cod"]; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center">NOMBRE CLIENTE:</td>
      <td colspan="10" align="center"><?php echo $model["NombreCliente"]; ?></td>
    </tr>
    <tr>
      <td colspan="12" rowspan="4">
        <br>
        <div>
          TIPOLOGIA DEL CLIENTE: __________<u><?php echo $modeloInformacionPersonal["TipologiaCliente"]; ?></u>__________
          <span style="margin-left:150px;">CAMBIO</span><span>&nbsp;&nbsp;&nbsp;&nbsp;</span> 
          <span style="width:50px; height:10px; border:2px solid black; padding-left:5px;" align="center">
            <?php  
                  if($modeloInformacionPersonal["Cambio"] != 0 ){
                    echo "X";
                  }else{
                    echo "&nbsp;&nbsp;&nbsp;";
                  }
            ?>
          </span>
          <span style="margin-left:150px;">NEG PUNTUAL</span><span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
          <span style="width:50px; height:10px; border:2px solid black; padding-left:5px;" align="center">
          <?php 
                if($modeloInformacionPersonal["negPuntual"] != 0){
                  echo "X";
                }else{
                  echo "&nbsp;&nbsp;&nbsp;";
                }
          ?>
          </span>
        </div>
        <br>
        <div align="center">
          VIGENCIA&nbsp;&nbsp;&nbsp;&nbsp;DESDE________<u><?php echo $modeloInformacionPersonal["vigenciadesde"]; ?></u>_________ HASTA ________<u><?php echo ($modeloInformacionPersonal["vigenciahasta"] === '0000-00-00')? '__________' : $modeloInformacionPersonal["vigenciahasta"]; ?></u>________
        </div>
        <br>
      </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr align="center">
      <td rowspan="3" class="colcentro colorgris">REG</td>
      <td rowspan="3" class="colcentro colorgris">DESCRIPCIÓN</td>
      <td rowspan="3" class="colcentro colorgris">REFERENCIA</td>
      <td rowspan="3" class="colcentro colorgris">PRECIO ANTERIOR</td>
      <td rowspan="3" class="colcentro colorgris">NUEVO PRECIO</td>
      <td colspan="2" rowspan="2" class="colorgris">DCTO COMERCIAL</td>
      <td colspan="4" class="colorgris">DCTO FINANCIERO</td>
      <td colspan="1" class="colorgris">OTRO</td>
    </tr>
    <tr align="center">
      <td class="colorgris">%</td>
      <td class="colorgris">2</td>
      <td class="colorgris">5</td>
      <td class="colorgris">8</td>
      <td class="colorgris"></td>
    </tr>
    <tr align="center">
      <td class="colorgris">PIE <br> FACTURA</td>
      <td class="colorgris">REBATE</td>
      <td class="colorgris">DIAS</td>
      <td class="colorgris">60</td>
      <td class="colorgris">30</td>
      <td class="colorgris">08</td>
      <td class="colorgris"></td>
    </tr>
   </thead>
   <tbody>


   <!-- inicio del cuerpo de la informacion -->
   <?php 

      $description2 = array(
            'KG ESPUMA D12 ',         
            'KG ESPUMA D18  KG',
            'KG ESPUMA TAPYCOL',
            'KG ESPUMA D20' ,                
            'KG ESPUMA D23 - P23 ', 
            'KG ESPUMA D26 - P26',   
            'KG ESPUMA D30',        
            'KG ESPUMA D30 TERMO',  
            'KG ESPUMA D40 ',     
            'KG ESPUMA D40 VISCO ',    
            'KG VISCOELASTICA D55 ',   
            'KG ESPUMA RA-300',
            'KG ESPUMA D60 ',
            'KG CONTINUA D12',             
            'KG CONTINUA D18 ' ,      
            'KG CONTINUA D20' ,         
            'KG CONTINUA D30 ' ,         
            'KG CONTINUA D30 TERMO ',
            'KG CONTINUA D40 ' ,           
            'KG CONTINUA D60',               
            'KG CONTINUA RA-300',
            'KG CASSATA',                       
            'KG CUEROS',                        
            'KG RETAL ',                      
            'KG TRITURADO ',                   
            'KG SEGUNDAS',                   
            'UND COLCHONES',           
            'UND COLCHONETAS',             
            'UND ALMOHADAS',                
            'UND MÓDULOS',                      
            'UND SUDADEROS ' ,    
            'UND MUEBLES',         
            'UND COMBOS',                       
            'UND BASE CAMAS ',  
               
         );
            
         $count = 1;
         foreach ($description2 as $key => $value) {
            echo "<tr>";
            echo  "<td>".$count."</td>";
            echo  "<td>".$value."</td>";
            echo  "<td>";
                     echo $modeloCondicion["referencia".$count];
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["precioanterior".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["nuevoprecio".$count];
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["piefactura".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["rebate".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["Dias".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["Sesenta".$count] ;
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["Treinta".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["Ocho".$count]; 
            echo  "</td>";
            echo  "<td>";
                     echo $modeloCondicion["Otro".$count]; 
            echo  "</td>";
            echo  "</tr>";
            $count++;
         }

    ?>
   <!-- fin del cuerpo de la informacion -->
     <!-- Inicio del footer de la tabla --> 
      <tr>
         <td colspan="12"></td>
      </tr>
      <tr>
         <td colspan="12" rowspan="3">
            OBSERVACIONES: <?php echo $model["observaciones"];?>
         </td>
      </tr>
      <tr></tr>
      <tr></tr>
      <tr>
         <td colspan="12" rowspan="8">
            <br>
           <span>FIRMA ASESOR: ________<u><?php echo $modeloInformacionPersonal["nombreAsesor"];?></u>________</span>   <span>FECHA:________<u><?php echo $model["fecha"];?></u>________</span>
            <br>
            <br>
            <strong>(AUTORIZACIONES):</strong>
            <br>
            <br>
            <div class="contenedor fila">
               <div class="gcontenedor" align="center">
                  <span>
                     ________<u><?php echo $model["gerente_comercial"];?></u>________
                  </span><br>
                  <span>GERENTE COMERCIAL</span>
                  <br>
                  <br>
                  <span>Fecha autorización:</span><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $model["fechautorizacion"];?>
                  
               </div>
               <div class="gcontenedor" align="center">
                  <span>
                     ________<u><?php echo $model["gerente_cartera"];?></u>________
                  </span><br>
                  <span>GERENTE CARTERA</span>
                  <br>
                  <br>
                  <span>Fecha autorización:</span><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $model["fechautorizacion1"];?>
               </div>
               <div class="gcontenedor" align="center">
                  <span>
                     ________<u><?php echo $model["gerente_general"];?></u>________
                  </span><br>
                  <span>GERENTE GENERAL</span>
                  <br>
                  <br>
                  <span>Fecha autorización:</span><span>&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo $model["fechautorizacion2"];?>
               </div>
            </div>
            <br>
            <br>
         </td>
      </tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
      <tr></tr>
   <!-- fin del footer de la tabla -->
   </tbody>  
 </table>
</body>
</html>