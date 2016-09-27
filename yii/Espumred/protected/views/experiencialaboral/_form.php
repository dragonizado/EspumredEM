<?php
/* @var $this ExperiencialaboralController */
/* @var $model Experiencialaboral */
/* @var $form CActiveForm */
?>
<style type="text/css">

	 #agregarAutoComplete{
    background:url(images/iconoboton.png);
    background-repeat: no-repeat;
    width: 20px;
    height: 40px;

  }


	 .btnEliminar{
    background:url(images/iconoremove.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


</style>
<script type="text/javascript" >

	 mostrarArticulos();
 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacioneconomica/create";  
			 
   //          $(this).parent().remove();
 	
});



// funcion que inica al darle clic al boton de agregar el cual tiene un icono de ingreso
		function myFunction() {
				  
				  event.preventDefault();
				  var empresa= $("#empresa").val();
				  var cargo= $("#cargo").val();
				  var funciones= $("#funciones").val();
				  var fecha_inicio = $("#fecha_inicio").val(); 
				  var fecha_retiro = $("#fecha_retiro").val(); 
				  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Experiencialaboral/agregarexperiencia", {empresa:empresa,cargo:cargo,funciones:funciones,fecha_inicio:fecha_inicio,fecha_retiro:fecha_retiro,},
				    function(data) {
				      console.log(data);
				      //var carritoActual = '<?php echo json_encode(Yii::app()->session['Familiar']) ?>';
				        document.getElementById("empresa").value="";
				        document.getElementById("cargo").value="";
				        document.getElementById("funciones").value="";
				        document.getElementById("fecha_inicio").value="";
				        document.getElementById("fecha_retiro").value="";
				        
			    })

				// /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
				//   del . done es que hace el ingreso de manera inmediata*/
				    .done(mostrarArticulos);

		
		};

//funcion para mostrar en pantalla las referencia familiares que ingreso
		 function mostrarArticulos() {
		    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Experiencialaboral/verExperiencia", {},
		      function(data) {
		        var experienciaActual = data;
		        var arrExperiencia= $.parseJSON(experienciaActual);
		       // alert(arrExperiencia);
		       //console.log(arrExperiencia);
		      
		        var form = "<form id='formularioExperiencia' class='clase' name='formularioExperiencia' method='POST' action='#'>";

		        for(var i=0; i< arrExperiencia.length ;i++){
		                       
		                       form = form+ 
		                       "<div width='100%'>"
		                         + "<div  align='center' class='col-md-2 col-xs-4'>"+arrExperiencia[i][1]+"</div>"
		           				 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrExperiencia[i][2]+"</div>"
		           				 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrExperiencia[i][3]+"</div>"         							 
		           				 +"<div align='center'  class='col-md-3 col-xs-2'>"+arrExperiencia[i][4]+ "</div>"
		           				 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrExperiencia[i][5]+ "</div>"           							        							  
		           				+"<button value='"+arrExperiencia[i][1]+"' id="+arrExperiencia[i][1]+" class='btnEliminar btn'></button>" +"</div>";
		                       
		       }

		      form = form + "</form>";
		      $("#agregarProductos").html(form);

		    });
		};

//funcion para eliminar las referencia familiares que desean
 $(document).on("click", ".btnEliminar", function (event){
 	event.preventDefault();
 		var idEliminar=this['value'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Experiencialaboral/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();
 	
});

		

 
  
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencialaboral-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>
<div class="col-md-12">

	<p class="note">La informacion con <span class="required">*</span> con requeridas.</p>

	

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>45,'id'=>'empresa','maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>45,'id'=>'cargo','maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'funciones'); ?>
		<?php echo $form->textField($model,'funciones',array('size'=>45,'id'=>'funciones','maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'funciones'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_inicio != '') {
	                                    $model->fecha_inicio = date('d-m-Y', strtotime($model->fecha_inicio));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_inicio',
	                                    'value' => $model->fecha_inicio,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha_inicio'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_inicio,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'fecha_retiro'); ?>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_retiro != '') {
	                                    $model->fecha_retiro = date('d-m-Y', strtotime($model->fecha_retiro));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_retiro',
	                                    'value' => $model->fecha_retiro,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha_retiro'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_retiro,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		<?php echo $form->error($model,'fecha_retiro'); ?>
	</div>
<div class="col-md-4"></div>

</div>

<div class="col-md-12">
<div align="center" class="buttons">
<?php echo CHtml::button('',array("id"=>"agregarAutoComplete", "class"=>" form-control", "onclick"=>"myFunction()")); ?></div>
<br>

</div>
<div class="col-md-12">
	
<div class="container" id="Cartaremisora_descripcion" >
       
          <div class="panel panel-default">
      			 <div class="panel-heading col-md-2" align='center'>
      		        <h3 class="panel-title">Empresa <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2" align='center'>
      		        <h3 class="panel-title">Cargo <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2" align='center'>
      		        <h3 class="panel-title">Funciones <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-3" align='center'>
      		        <h3 class="panel-title">Fecha Inicio <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-3" >
      		        <h3 class="panel-title">Fecha Retiro <span class="glyphicon"></span></h3>
      		      </div>       
            <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
          </div>  
      
  </div>
</div>

	<div class="buttons col-md-12" align="center">
	<br>
			 <?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>

		 <br><br><br>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->