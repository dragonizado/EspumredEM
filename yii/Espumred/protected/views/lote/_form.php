<?php
/* @var $this LoteController */
/* @var $model Lote */
/* @var $form CActiveForm */
// 
// 
$espumas=Espumas::model()->findAll(array('order'=> 'tipo ASC' ));
//var_dump($espumas);

?>
<script type="text/javascript">
	
	$(document).ready(function() {



		$('input').bind("enterKey",function(e){
		event.preventDefault();
		// document.getElementById("sexo").value=Registro[0]["sexo"];
		// document.getElementById("sexo").
	
		
			$("#create").show();
			$("#id11").hide();
			$("#crear").prop( "disabled", false );	
			
	});

	$('input').keyup(function(e){
		event.preventDefault();
		if(e.keyCode == 13)
		{
		  $(this).trigger("enterKey");
		  
		}
	});



 //funcion para regresar ala ventana anterior al darle click en retroceder
		 $(document).on("click", "#peso", function (event){
		 	event.preventDefault();
		 	
		 	 var densidad=parseInt($("#densidad").val());
		 	 var altura=parseFloat($("#altura").val());
		 	 var ancho=parseFloat($("#ancho").val());
		 	 var largo=parseFloat($("#largo").val());
		 	 
		 	 
		 	 var kilos=(altura*ancho*largo)*densidad; 

		 	 // kilos=Math.round(kilos*100); no se debe redondear
		 	//kilos= Math.round(kilos);
		
		 	 document.getElementById("peso").value=kilos;
		 		// var idEliminar=this['value'];
					//document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionvivienda/create";  
					 
		   //          $(this).parent().remove();
		 	
		});

		 	$(document).on("click","#densidad",function(event){
		 			event.preventDefault();
		 			 var descripcion=$("#descripcion").val();
		 			 var tipoEspuma=$("#tipoEspuma").val();
		 		$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=lote/cargarMedida",{ descripcion:descripcion ,tipoEspuma:tipoEspuma },
					    function(data) {
					    
					       var Registro = data;
					      Registros = $.parseJSON(Registro);
					       document.getElementById("altura").value=Registros["alto"];
					        document.getElementById("ancho").value=Registros["ancho"];
					        document.getElementById("largo").value=Registros["largo"];
					        document.getElementById("densidad").value=Registros["densidad"];
					        
			    			
			    		
			   
			    })


			// event.preventDefault();
			//   var cantidadElementos =0;
			//    var suma=parseInt(document.getElementById("primerIngreso").value)+parseInt(document.getElementById("otrosIngresos").value);
			//   var cantidadElementos = parseInt(document.getElementById("segundoIngreso").value);
   //           //esta document.getElementsByName muestra cuantas Productos hay 
          
   //          suma=suma+cantidadElementos;
            
                
   //          document.getElementById("totalIngresos").value=suma;

		});


		$(document).on("change","#tipoEspuma",function(event){
		 			event.preventDefault();
		 			//alert("cambio");
		 					document.getElementById("descripcion").value="";
		 			 		document.getElementById("altura").value="";
					        document.getElementById("ancho").value="";
					        document.getElementById("largo").value="";
					        document.getElementById("densidad").value="";
					        document.getElementById("peso").value="";
		 			 var tipoEspuma=$("#tipoEspuma").val();
		 			 
		 		$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=lote/guardar",{tipoEspuma:tipoEspuma },
					    function(data) {
					    	console.log(data);
			    })

		});




			
 });
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lote-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">


	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'codLote '); ?>
		<?php echo $form->textField($model,'codLote',array('id'=>'codLote','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codLote'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'tipoEspuma '); ?>
		<?php echo $form->dropDownList($model,'tipoEspuma',CHtml::listData(Espumas::model()->findAllByAttributes(array('ancho' => "unico",)), 'tipo', 'tipo'),array('empty'=>'-- Seleccione --','size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'tipoEspuma')); ?>
		<?php echo $form->error($model,'tipoEspuma'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
			<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->descripcion !='') {
                             $value = ($model->descripcion);
                         } else {
                             $value = '';
                         }
                          echo $form->hiddenField($model, 'descripcion', array());
                         
                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'descripcion',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarEspumas'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Lote_descripcion").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Lote_descripcion").val(0); }'
                             ),
                         ));

			?>


		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'densidad'); ?>
		<?php echo $form->textField($model,'densidad',array('id'=>'densidad','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'densidad'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'altura (mts)'); ?>
		<?php echo $form->textField($model,'altura',array('id'=>'altura','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'altura'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ancho (mts)'); ?>
		<?php echo $form->textField($model,'ancho',array('id'=>'ancho','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ancho'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'largo (mts)'); ?>
		<?php echo $form->textField($model,'largo',array('id'=>'largo','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'largo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'peso (kg)'); ?>
		<?php echo $form->textField($model,'peso',array('id'=>'peso','size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'peso'); ?>
	</div>
	<div style="display: none">
		<?php echo $form->labelEx($model,'cortado'); ?>
		<?php echo $form->textField($model,'cortado',array('id'=>'cortado','size'=>45,'maxlength'=>45,'class'=>'form-control','value'=>"No")); ?>
		<?php echo $form->error($model,'cortado'); ?>
	</div>

	 
	<div align="center"class="row buttons" id='id11'>
		</br>
		<?php echo CHtml::Button($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large", "id"=>"guardar")); ?>
		<br>
		
	</div>

	<br>
	<div align="center" class="buttons" style="display: none" id="create">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large",'id'=>'crear','disabled'=>'true')); ?>
	</div>
	<br>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->