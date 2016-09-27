<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */
/* @var $form CActiveForm */
?>
<script type="text/javascript" >
 $(document).ready(function(){
    
window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para carar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionpersonal/cargar",
					    function(data) {
					    	console.log(data);
					      var Registro = data;
					      var index
					        Registros = $.parseJSON(Registro);
					     
					     	document.getElementById("nombre").value=Registros[0]["nombre"];
					     	document.getElementById("cedula").value=Registros[0]["cc"];
						    document.getElementById("sexo").value=Registro[0]["sexo"];
						    //se recorre hasta hayar cual sexo es el que habia escogido
						     for (var i = 0; i < 2; i++) {
						    	 document.getElementById("sexo").selectedIndex=i;
						    	 index= $("#sexo").val();
						    	 if (index==Registros[0]["sexo"]) {
						    	 	        i=2;
						    	 };
						    	
						    };
						    //se pregunta si es femenino que esconda los campos de libreta y clase de libreta militar
						     if ( document.getElementById("sexo").value=="Femenino") {
						     	$("#libreta").hide();
						     
						     }else{
						     		$("#libreta").show();
						     };

						      //se recorre hasta hayar cual rh es el que habia escogido
						    for (var i = 0; i < 9; i++) {
						    	 document.getElementById("rh").selectedIndex=i;
						    	 index= $("#rh").val();
						    	 if (index==Registros[0]["rh"]) {
						    	 	    
						    	 	     i=9;
						    	 };
						    	
						    };
						     //se recorre hasta hayar cual estado civl es el que habia escogido
						      for (var i = 0; i < 6; i++) {
						    	 document.getElementById("estadoCivil").selectedIndex=i;
						    	 index= $("#estadoCivil").val();
						    	 if (index==Registros[0]["estadoCivil"]) {
						    	 	   
						    	 	     i=6;
						    	 };
						    	
						    	
						    };
						     //se pregunta si es femenino Soltero (a), Divorciado (a),Viudo (a) que esconda el campo de tiempo casado
						    if ( document.getElementById("estadoCivil").value=="Soltero (a)" || document.getElementById("estadoCivil").value=="Divorciado (a)" ||
						     	document.getElementById("estadoCivil").value=="Viudo (a)" 
						     	) {

						     	$("#tiempoCasado").hide();
						     
						     }else{
						     		$("#tiempoCasado").show();

						     };
						     //se recorre hasta hayar cual estado numero de hijos es el que habia escogido
						      for (var i = 0; i <40 ; i++) {
						    	 document.getElementById("numeroHijos").selectedIndex=i;
						    	 index= $("#numeroHijos").val();
						    	 if (index==Registros[0]["numeroHijos"]) {
						    	 	   
						    	 	     i=40;
						    	 };
						    	
						    	
						    };
						    //se recorre hasta hayar cual clase de libreta es el que habia escogido
					   	 for (var i = 0; i <3 ; i++) {
						    	 document.getElementById("claseLibretaMilitar").selectedIndex=i;
						    	 index= $("#claseLibretaMilitar").val();
						    	 if (index==Registros[0]["claseLibretaMilitar"]) {
						    	 	   
						    	 	     i=3;
						    	 };
						    	
						    	
						    };
						    //se les da el valor por defecto que tenia antes de dar siguiente
					        document.getElementById("direccionResidencia").value=Registros[0]["direccionResidencia"];
					         document.getElementById("tiempoCasados").value=Registros[0]["tiempoCasado"];
					        document.getElementById("Informacionpersonal_fechaNacimiento").value=Registros[0]["fechaNacimiento"];
					        //document.getElementById("lugarNacimiento").value=Registros[0]["lugarNacimiento"];
					        //document.getElementById("municipio").value=Registros[0]["municipio"];
					        document.getElementById("barrio").value=Registros[0]["barrio"];
					        document.getElementById("telefono").value=Registros[0]["telefono"];
					        document.getElementById("celular").value=Registros[0]["celular"];
					        document.getElementById("libretaMilitar").value=Registros[0]["libretaMilitar"];
					       
					    })
				   
						
				        
			    }

			
				 
		
	

	$(document).on("change","#sexo",function(event){
  /* funcion  se activa cuando hay un cambio en el campo sexo el cual si es femenino esconderia los campos de libreta militar y clase de libreta militar*/
     if ( document.getElementById("sexo").value=="Femenino") {
     	$("#libreta").hide();
     	document.getElementById("claseLibretaMilitar").selectedIndex=0;
		document.getElementById("libretaMilitar").value="";
     }else{
     
     	document.getElementById("libretaMilitar").value=$("#cedula").val();
     		$("#libreta").show();
     };

	});

	$(document).on("change","#estadoCivil",function(event){
  /* funcion  se activa cuando hay un cambio en el campo estadoCivil  se utiliza para si es Soltero,Divorciado ó Viudo esconda el campo de tiempo de casado */
     if ( document.getElementById("estadoCivil").value=="Soltero (a)" || document.getElementById("estadoCivil").value=="Divorciado (a)" ||
     	document.getElementById("estadoCivil").value=="Viudo (a)" 
     	) {
     	document.getElementById("tiempoCasados").value=" ";
     	$("#tiempoCasado").hide();
     	
     
     }else{
     
     		$("#tiempoCasado").show();

     };

	});


});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionpersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

<div class="col-md-3"></div>
<div class="col-md-6">
	<p class="note">Los campos con <span class="required">*</span> son requeridos</p>
	<div class="col-md-12">
		<div class="col-md-4" >
		<?php echo $form->labelEx($model,'cc'); ?>
		<?php echo $form->textField($model,'cc',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'cedula')); ?>
		<?php echo $form->error($model,'cc'); ?>
	</div>

	<div class="col-md-8">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'nombre', 'style'=>"text-transform:uppercase;", 'placeholder'=>" Apellidos Nombres EJ:HURTADO JUAN")); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	</div>
	
	<div class="col-md-12">
		<div class="col-md-4">
			<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fechaNacimiento != '') {
	                                    $model->fechaNacimiento = date('d-m-Y', strtotime($model->fechaNacimiento));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaNacimiento',
	                                    'value' => $model->fechaNacimiento,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaNacimiento,
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
	                                    <?php echo $form->error($model,'fechaNacimiento'); ?>
		</div>



		<div class="col-md-4" >
			<?php echo $form->labelEx($model,'lugarNacimiento'); ?>
			<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->lugarNacimiento !='') {
                             $value = ($model->lugarNacimiento);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'lugarNacimiento', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'lugarNacimiento',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarMunicipio'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_lugarNacimiento").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_lugarNacimiento").val(0); }'
                             ),
                         ));

			?>
			<?php echo $form->error($model,'lugarNacimiento'); ?>
		</div>

		<div  class="col-md-4">
			<?php echo $form->labelEx($model,'sexo'); ?>
			<?php echo $form->dropDownList($model,'sexo',array(''=>'','Masculino' => 'Masculino', 'Femenino' => 'Femenino'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control', 'id'=>'sexo')); ?>
			<?php echo $form->error($model,'sexo'); ?>
		</div>

	</div>
	
	
<div class="col-md-12">
	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'rh'); ?>
		<?php echo $form->dropDownList($model,'rh',array(''=>'','0-' => '0-', '0+' => '0+',
			'A-' => 'A-', 'A+' => 'A+',
			'B-' => 'B-', 'B+' => 'B+',
			'AB-' => 'AB-', 'AB+' => 'AB+'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'rh')); ?>
		<?php echo $form->error($model,'rh'); ?>
	</div>

	<div  class="col-md-4" id="decisionEstadoCivil">
		<?php echo $form->labelEx($model,'estadoCivil'); ?>
		<?php echo $form->dropDownList($model,'estadoCivil',array(''=>'',
			'Soltero (a)' => 'Soltero (a)', 'Divorciado (a)' => 'Divorciado (a)',	'Casado (a)' => 'Casado (a)',	'Viudo (a)' => 'Viudo (a)',
			'Union Libre'=>'Union Libre'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'estadoCivil')); ?>
		<?php echo $form->error($model,'estadoCivil'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'numeroHijos'); ?>
		<?php echo $form->dropDownList($model,'numeroHijos',array('0'=>'0','1'=>'1','2'=>'2','3'=>'3',
			'4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12',
			'13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20',
			'21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28',
			'29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36',
			'37'=>'37','38'=>'38','39'=>'39','40'=>'40',
						),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'numeroHijos')); ?>
		<?php echo $form->error($model,'numeroHijos'); ?>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'direccionResidencia'); ?>
		<?php echo $form->textField($model,'direccionResidencia',array('id'=>'direccionResidencia','size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'direccionResidencia'); ?>
	</div>
	
	<div class="col-md-6"  id="tiempoCasado">
		<?php echo $form->labelEx($model,'tiempoCasado'); ?>
		<?php echo $form->textField($model,'tiempoCasado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'tiempoCasados','placeholder'=>" TIEMPO EN MESES EJ: 3 MESES")); ?>
		<?php echo $form->error($model,'tiempoCasado'); ?>
	</div>
	</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control', 'id'=>'barrio','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>



	<div class="col-md-4">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php /*este metodo de abajo funciona para buscar todos los municipio que tiene y asi poder listarlos por
        			letras*/
		
      		if ($model->municipio !='') {
                             $value = ($model->municipio);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'municipio', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'municipio',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarMunicipio'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_municipio").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_municipio").val(0); }'
                             ),
                         ));
      		
		?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'telefono')); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'celular')); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>
</div>
<div class="col-md-12" id="libreta">
	<div class="col-md-7">
		<?php echo $form->labelEx($model,'numero de libretaMilitar'); ?>
		<?php echo $form->textField($model,'libretaMilitar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'libretaMilitar')); ?>
		<?php echo $form->error($model,'libretaMilitar'); ?>
	</div>

	<div class="col-md-5">
		<?php echo $form->labelEx($model,'claseLibretaMilitar'); ?>
		<?php echo $form->dropDownList($model,'claseLibretaMilitar',array(''=>'','Primera' => 'Primera', 'Segunda' => 'Segunda',  'En Tramites' => 'En Tramites'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'claseLibretaMilitar')); ?>
		<?php echo $form->error($model,'claseLibretaMilitar'); ?>
	</div>
	
</div>
<div class="col-md-12">
	<div class="col-md-7">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'correo')); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>
</div>
	<div class="buttons col-md-10" align="center">
	<br>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Siguiente >>', array("class"=>"btn btn-primary btn-large")); ?>

		 <br><br><br>
	</div>
</div>
<div class="col-md-3"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->