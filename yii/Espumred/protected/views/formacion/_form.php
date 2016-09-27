<?php
/* @var $this FormacionController */
/* @var $model Formacion */
/* @var $form CActiveForm */
$arrRegistro = array();
$arrRegistro = Yii::app()->session['registro'];
//var_dump($arrRegistro)

?>

<style type="text/css">

	 #agregarAutoComplete{
    background:url(images/iconoboton.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


	 .btnEliminar{
    background:url(images/iconoremove.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


</style>
<script type="text/javascript">
mostrarArticulos();
// cargar();
	function myFunction() {
				 var altura= $("#altura").val();
				  
				  event.preventDefault();
				  var carritoActual;
				  //var cod= $("#cod").val();
				  //var codlote= $("#codlote").val();
				  //var altura= $("#altura").val();
				  var largo= $("#largo").val();
				  var tipo= $("#tipo").val();
				  var cantidad= $("#cantidad").val();
				  var desicion="";
				  
				  if (largo>0 && largo!="") {
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Formacion/agregarFormacion", {largo: largo,cantidad:cantidad,tipo:tipo},
				   function(data) {
				       console.log(data);
				         desicion=data;
				       Registros = $.parseJSON(desicion);
				      //var carritoActual = '<?php echo json_encode(Yii::app()->session['Familiar']) ?>';
			
				      
				     if (Registros[0]!="excede") {
				     document.getElementById("cantidad").value="";
				     document.getElementById("largo").value="";
				     
				   
				    }else{

				    	alert("LA CANTIDAD DE KILOS INGRESADOS EXCEDE LA CANTIDAD DE KILOS DISPONIBLES");
				    };
				       
				       
				        
				        
			   })

				// // /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
				// //   del . done es que hace el ingreso de manera inmediata*/
				    .done(mostrarArticulos);
			}else{
				alert("ALGUNOS CAMPOS ESTÁN VACIO O CON VALOR 0");
			};
		
		}


//funcion para mostrar en pantalla las que ingreso
		 function mostrarArticulos() {
		    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Formacion/verFormacion", {},
		      function(data) {
		      	console.log(data);
		        valorTotal=0;
		        var formacion = data;
		        var valorTotas;
		        var sumatoria;
		        var resta;
		        var arrformacion = $.parseJSON(formacion);
		       // alert(arrformacion);
		       var altura = "<?php echo $arrRegistro['altura']; ?>" ;
		        arregloCantidad=arrformacion.length-1;
		        console.log(arrformacion);
		 
		  
		      
		        var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

		        for(var i=0; i< arrformacion.length ;i++){
		                      
		                       form = form+ 
		                       "<div width='100%'>"
		                         + "<div class='col-md-2 col-xs-2'>"+arrformacion[i][0]+"</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>"+arrformacion[i][1]+"</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp"+altura+"</div>"         							 
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp"+arrformacion[i][2]+
		           							 "</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp&nbsp"+arrformacion[i][3]+
		           							 "</div>"
		           							 +"<div align='left'  class='col-md-1 col-xs-2'>&nbsp&nbsp&nbsp&nbsp"+arrformacion[i][4]+
		           							 "</div>"
											 +"<button value='"+arrformacion[i][0]+"' id="
		                           			 +arrformacion[i][0]+" class='btnEliminar btn'></button>" +"</div>";
		        // +"<div class='col-md-1'><button name='eliminar' class='btnEliminar' ></button><div>"+ 
		                       
		       }
	
		      
		       sumatoria=arrformacion[arrformacion.length-1][7];
		       valorTotal=arrformacion[arrformacion.length-1][6];
		       resta=sumatoria-valorTotal;

		      form = form + "</form>";
		      $("#agregarProductos").html(form);

		       document.getElementById("cantidadkilos").value=valorTotal;
		       document.getElementById("cantidadkiloscon").value=sumatoria;
		       document.getElementById("kilosdisponibles").value=resta;

		       
		    


		    });
		}

//funcion para eliminar las referencia familiares que desean
 $(document).on("click", ".btnEliminar", function (event){
 	event.preventDefault();
 		var idEliminar=this['value'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Formacion/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();

 		mostrarArticulos();
 		document.getElementById("cantidadkilos").value="";
		document.getElementById("cantidadkiloscon").value="";
		document.getElementById("kilosdisponibles").value="";
});


</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

<div class="col-md-12">
	<?php echo $form->errorSummary($model); ?>

<div class="col-md-12">
<!-- 	<div class="col-md-4">
		<?php //echo $form->labelEx($model,'cod'); ?>
		<?php //echo $form->textField($model,'cod',array('id'=>'cod','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'cod'); ?>
	</div>

		<div class="col-md-4">
		<?php //echo $form->labelEx($model,'codlote'); ?>
		<?php //echo $form->textField($model,'codlote',array('id'=>'codlote','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'codlote'); ?>
	</div> -->
	<div class="col-md-4">
		
		<?php echo $form->labelEx($model,'cantidad de kilos lote'); ?>
		<?php echo CHtml::textField('Text', '',array('id'=>'cantidadkilos','size'=>45,'maxlength'=>45,'class'=>'form-control', 'disabled'=>"disabled" )); ?>
	</div>
	<div class="col-md-4">
		
		<?php echo $form->labelEx($model,'cantidad de kilos consumidos'); ?>
		<?php echo CHtml::textField('Text', '',array('id'=>'cantidadkiloscon','size'=>45,'maxlength'=>45,'class'=>'form-control', 'disabled'=>"disabled" )); ?>
	</div>
	<div class="col-md-4">
		
		<?php echo $form->labelEx($model,'kilos disponibles'); ?>
		<?php echo CHtml::textField('Text', '',array('id'=>'kilosdisponibles','size'=>45,'maxlength'=>45,'class'=>'form-control', 'disabled'=>"disabled" )); ?>
	</div>
         
</div>

<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->dropDownList($model,'cantidad',array(
				'1'=>'1',
				'2'=>'2',
				'3'=>'3',
				'4'=>'4',
				'5'=>'5',
				'5'=>'5',
				'6'=>'6',
				'7'=>'7',
				'8'=>'8',
				'9'=>'9',
				'10'=>'10',
				),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'cantidad')); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	

	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'largo (mts)'); ?>
		<?php echo $form->textField($model,'largo',array('id'=>'largo','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'largo'); ?>
		</br>
		</br>
	</div>

	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'tipo Bloque'); ?>
		<?php echo $form->dropDownList($model,'tipo',array(
				'Primera'=>'Primera',
				'Segunda'=>'Segunda',
				),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</br>
		</br>
	</div>
	<!-- <div class="col-md-4" >
		<?php //echo $form->labelEx($model,'peso'); ?>
		<?php //echo $form->textField($model,'peso',array('id'=>'peso','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'peso'); ?>
		</br>
	</br>
	</div> -->

</div>




	
</div>

<div align="center" class="buttons">
<?php echo CHtml::button('',array("id"=>"agregarAutoComplete", "class"=>" form-control", "onclick"=>"myFunction()")); ?>	</div></br>

<div class="col-md-12">
	
<div class="container" id="Cartaremisora_descripcion" >
       
          <div class="panel panel-default">
      			 <div class="panel-heading col-md-2 align='center'">
      		        <h3 class="panel-title">Cod <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2 ">
      		        <h3 class="panel-title">Lote<span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Altura (mts.) <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Ancho (mts.)<span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Largo (mts.)<span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Peso (kg)<span class="glyphicon"></span></h3>
      		      </div>
      		    
            
            <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
          </div>  

      
  </div>

<div align="center" class="buttons">

		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
	
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->


