<?php
/* @var $this InformacionviviendaController */
/* @var $model Informacionvivienda */
/* @var $form CActiveForm */
$Registro=Yii::app()->session['Registro']; 

?>
<style type="text/css" media="screen">
#imagen{
    background:url(images/casa.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;
  }	

  #imagen2{
    background:url(images/television.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;}

    #imagen3{
    background:url(images/agua.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;}

    #imagen4{
    background:url(images/energia.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;}

      #imagen5{
    background:url(images/techo.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;}

     #imagen6{
    background:url(images/mueble.png);
    background-repeat: no-repeat;
    width: 40px;
    height: 50px;}
</style>
<script type="text/javascript">
  //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=seguridadsocial/create";  
			 
   //          $(this).parent().remove();
 	
});
 	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionvivienda/cargar",
					    function(data) {
					    	console.log(data);
					      var Registro = data;
					      
					        Registros = $.parseJSON(Registro);
					     	
					      		
					     		document.getElementById("numeroDeHabitantes").value=Registros[4]["numeroDeHabitantes"];
					     		document.getElementById("indiceHacimiento").value=Registros[4]["indiceHacimiento"];
					     		document.getElementById("estrato").value=Registros[4]["estrato"];
					     		document.getElementById("tenenciaDeLaVivienda").value=Registros[4]["tenenciaDeLaVivienda"];
					     		document.getElementById("tipoDeVivienda").value=Registros[4]["tipoDeVivienda"];
								document.getElementById("numeroDeHabitacion").value=Registros[4]["numeroDeHabitacion"];
					     		document.getElementById("cocina").value=Registros[4]["cocina"];
					     		document.getElementById("bañoComun").value=Registros[4]["bañoComun"];
								document.getElementById("bañoPrivado").value=Registros[4]["bañoPrivado"];
					     		document.getElementById("sala").value=Registros[4]["sala"];
					     		document.getElementById("comedor").value=Registros[4]["comedor"];
					     		document.getElementById("salaComedor").value=Registros[4]["salaComedor"];
					     		document.getElementById("zonaDeRopa").value=Registros[4]["zonaDeRopa"];
					     		document.getElementById("agua").value=Registros[4]["agua"];
					     		document.getElementById("electricidad").value=Registros[4]["electricidad"];
					     		document.getElementById("gas").value=Registros[4]["gas"];
					     		document.getElementById("telefono").value=Registros[4]["telefono"];
								document.getElementById("internet").value=Registros[4]["internet"];
					     		document.getElementById("televisionPorCable").value=Registros[4]["televisionPorCable"];
					     		document.getElementById("otros").value=Registros[4]["otros"];
								document.getElementById("television").value=Registros[4]["television"];
					     		document.getElementById("equipoDeSonido").value=Registros[4]["equipoDeSonido"];
					     		document.getElementById("lavadora").value=Registros[4]["lavadora"];
					     		document.getElementById("estufa").value=Registros[4]["estufa"];
					     		document.getElementById("dvd").value=Registros[4]["dvd"];
					     		document.getElementById("microondas").value=Registros[4]["microondas"];
								document.getElementById("pc").value=Registros[4]["pc"];
					     		document.getElementById("paredes").value=Registros[4]["paredes"];
					     		document.getElementById("techo").value=Registros[4]["techo"];
								document.getElementById("piso").value=Registros[4]["piso"];
								document.getElementById("nevera").value=Registros[4]["nevera"];
	 				        
			    })

			 }
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionvivienda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



<div class="col-md-2">
</div>

 <div class="col-md-8">
 	

<!-- 	<div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div>
 -->
	 <div class="col-md-12">
	 	
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'numeroDeHabitantes'); ?>
					<?php echo $form->dropDownList($model,'numeroDeHabitantes',array('0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4',
						'5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14',
						'15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20',
						),array('id'=>'numeroDeHabitantes','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
						<?php echo $form->error($model,'numeroDeHabitantes'); ?>
				</div>

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'indiceHacimiento'); ?>
					<?php echo $form->dropDownList($model,'indiceHacimiento',array('0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4',
						'5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14',
						'15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20',
						),array('id'=>'indiceHacimiento','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'indiceHacimiento'); ?>
				</div>

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'estrato'); ?>
					<?php echo $form->dropDownList($model,'estrato',array('0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4',
						'5'=>'5','6'=>'6',
						),array('id'=>'estrato','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'estrato'); ?>
				</div>
			 
				
	</div>
<div class="col-md-12">
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'tipoDeVivienda'); ?>
		<?php echo $form->dropDownList($model,'tipoDeVivienda',array(''=>'','Apartamento'=>'Apartamento','Casa'=>'Casa','Pieza'=>'Pieza',
						),array('id'=>'tipoDeVivienda','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tipoDeVivienda'); ?>
	</div>

	<div  class="col-md-6">
					<?php echo $form->labelEx($model,'tenenciaDeLaVivienda'); ?>
					<?php echo $form->dropDownList($model,'tenenciaDeLaVivienda',array(''=>'','Propia'=>'Propia','Arrendada'=>'Arrendada','Compartida'=>'Compartida',
						),array('id'=>'tenenciaDeLaVivienda','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'tenenciaDeLaVivienda'); ?>
				</div>
	

	
</div>
	<div class="col-md-12" align="center">
		<br>
		<h2>Comodidades de la vivienda</h2>
		<?php echo CHtml::Button('',array("id"=>"imagen", "class"=>"btn form-control")); ?>	
		<br>
	</div>
	<div class="col-md-12">

		<div class="col-md-3">
		<?php echo $form->labelEx($model,'cocina'); ?>
		<?php echo $form->dropDownList($model,'cocina',array('Si'=>'Si','No'=>'No'),array('id'=>'cocina','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cocina'); ?>

	</div>

	<div class="col-md-3">
		<?php echo $form->labelEx($model,'bañoComun'); ?>
		<?php echo $form->dropDownList($model,'bañoComun',array('Si'=>'Si','No'=>'No'),array('id'=>'bañoComun','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'bañoComun'); ?>
	</div>

	<div class="col-md-3">
		<?php echo $form->labelEx($model,'bañoPrivado'); ?>
		<?php echo $form->dropDownList($model,'bañoPrivado',array('Si'=>'Si','No'=>'No'),array('id'=>'bañoPrivado','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'bañoPrivado'); ?>
	</div>
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'sala'); ?>
			<?php echo $form->dropDownList($model,'sala',array('Si'=>'Si','No'=>'No'),array('id'=>'sala','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'sala'); ?>
		</div>
</div>
<div class="col-md-12" >
	

		<div class="col-md-2">
			<?php echo $form->labelEx($model,'comedor'); ?>
			<?php echo $form->dropDownList($model,'comedor',array('Si'=>'Si','No'=>'No'),array('id'=>'comedor','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'comedor'); ?>
		</div>

		<div class="col-md-3">
			<?php echo $form->labelEx($model,'salaComedor'); ?>
			<?php echo $form->dropDownList($model,'salaComedor',array('Si'=>'Si','No'=>'No'),array('id'=>'salaComedor','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'salaComedor'); ?>
		</div>

		<div class="col-md-3">
			<?php echo $form->labelEx($model,'zonaDeRopa'); ?>
			<?php echo $form->dropDownList($model,'zonaDeRopa',array('Si'=>'Si','No'=>'No'),array('id'=>'zonaDeRopa','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'zonaDeRopa'); ?>
		</div>
		<div class="col-md-4">
		<?php echo $form->labelEx($model,'numeroDeHabitacion'); ?>
			<?php echo $form->dropDownList($model,'numeroDeHabitacion',array('0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4',
						'5'=>'5','6'=>'6',
						),array('id'=>'numeroDeHabitacion','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'numeroDeHabitacion'); ?>
		</div>
	</div>


<div class="col-md-12" align="center">
		<br>
		<h2>Servicios de la vivienda</h2>
		<?php echo CHtml::Button('',array("id"=>"imagen2", "class"=>"btn form-control")); ?>	
		<?php echo CHtml::Button('',array("id"=>"imagen3", "class"=>"btn form-control")); ?>
		<?php echo CHtml::Button('',array("id"=>"imagen4", "class"=>"btn form-control")); ?>
		<br>
	</div>

		

	<div class="col-md-12">
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'agua'); ?>
			<?php echo $form->dropDownList($model,'agua',array('Si'=>'Si','No'=>'No'),array('id'=>'agua','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'agua'); ?>
		</div>
	
			<div class="col-md-3">
				<?php echo $form->labelEx($model,'electricidad'); ?>
				<?php echo $form->dropDownList($model,'electricidad',array('Si'=>'Si','No'=>'No'),array('id'=>'electricidad','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'electricidad'); ?>
			</div>

			<div class="col-md-3">
				<?php echo $form->labelEx($model,'gas'); ?>
				<?php echo $form->dropDownList($model,'gas',array('Si'=>'Si','No'=>'No'),array('id'=>'gas','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'gas'); ?>
			</div>

			<div class="col-md-3">
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->dropDownList($model,'telefono',array('Si'=>'Si','No'=>'No'),array('id'=>'telefono','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</div>
			</div>
		<div class="col-md-12">
			<div class="col-md-2">
				<?php echo $form->labelEx($model,'internet'); ?>
				<?php echo $form->dropDownList($model,'internet',array('Si'=>'Si','No'=>'No'),array('id'=>'internet','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'internet'); ?>
			</div>

			<div class="col-md-3">
				<?php echo $form->labelEx($model,'televisionPorCable'); ?>
				<?php echo $form->dropDownList($model,'televisionPorCable',array('Si'=>'Si','No'=>'No'),array('id'=>'televisionPorCable','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'televisionPorCable'); ?>
			</div>
	
			<div class="col-md-3">
				<?php echo $form->labelEx($model,'otros Servicios'); ?>
				<?php echo $form->textField($model,'otros',array('id'=>'otros','size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
				<?php echo $form->error($model,'otros'); ?>
			</div>
	 </div>

	 <div class="col-md-12" align="center">
		<br>
		<h2>Mobilario  de la vivienda</h2>
		<?php echo CHtml::Button('',array("id"=>"imagen6", "class"=>"btn form-control")); ?>	
		<br>
	</div>

 <div class="col-md-12"> 
			<div class="col-md-2">
				<?php echo $form->labelEx($model,'television'); ?>
				<?php echo $form->dropDownList($model,'television',array('Si'=>'Si','No'=>'No'),array('id'=>'television','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'television'); ?>
			</div>

			<div class="col-md-3">
				<?php echo $form->labelEx($model,'equipoDeSonido'); ?>
				<?php echo $form->dropDownList($model,'equipoDeSonido',array('Si'=>'Si','No'=>'No'),array('id'=>'equipoDeSonido','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'equipoDeSonido'); ?>
			</div>

			<div class="col-md-2">
				<?php echo $form->labelEx($model,'lavadora'); ?>
				<?php echo $form->dropDownList($model,'lavadora',array('Si'=>'Si','No'=>'No'),array('id'=>'lavadora','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'lavadora'); ?>
			</div>

			<div class="col-md-2">
				<?php echo $form->labelEx($model,'estufa'); ?>
				<?php echo $form->dropDownList($model,'estufa',array('Si'=>'Si','No'=>'No'),array('id'=>'estufa','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'estufa'); ?>
			</div>

			<div class="col-md-2">
				<?php echo $form->labelEx($model,'nevera'); ?>
				<?php echo $form->dropDownList($model,'nevera',array('Si'=>'Si','No'=>'No'),array('id'=>'nevera','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'nevera'); ?>
			</div>
	
		<div class="col-md-2">
			<?php echo $form->labelEx($model,'dvd'); ?>
			<?php echo $form->dropDownList($model,'dvd',array('Si'=>'Si','No'=>'No'),array('id'=>'dvd','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'dvd'); ?>
		</div>

		<div class="col-md-2">
			<?php echo $form->labelEx($model,'microondas'); ?>
			<?php echo $form->dropDownList($model,'microondas',array('Si'=>'Si','No'=>'No'),array('id'=>'microondas','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'microondas'); ?>
		</div>

		<div class="col-md-2">
			<?php echo $form->labelEx($model,'pc'); ?>
			<?php echo $form->dropDownList($model,'pc',array('Si'=>'Si','No'=>'No'),array('id'=>'pc','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'pc'); ?>
		</div>
</div>


 <div class="col-md-12" align="center">
		<br>
		<h2>Materia  de la vivienda</h2>
		<?php echo CHtml::Button('',array("id"=>"imagen5", "class"=>"btn form-control")); ?>	
		<br>
	</div>

	<div class="col-md-12"> 
		<div class="col-md-2">		
		</div>
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'techo'); ?>
			<?php echo $form->dropDownList($model,'techo',array(''=>'','Barro'=>'Barro','Concreto'=>'Concreto',
				'Eternil'=>'Eternil','Plastico'=>'Plastico','Madera'=>'Madera','Plancha'=>'Plancha',
				'Otros'=>'Otros','No'=>'No'
			),array('id'=>'techo','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'techo'); ?>
		</div>
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'paredes'); ?>
			<?php echo $form->dropDownList($model,'paredes',array(''=>'','Concreto'=>'Concreto','Drywall'=>'Drywall','Madera'=>'Madera'),array('id'=>'paredes','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'paredes'); ?>
		</div>
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'piso'); ?>
			<?php echo $form->dropDownList($model,'piso',array(''=>'','Ceramica'=>'Ceramica','Concreto'=>'Concreto','baldosa'=>'baldosa','Madera'=>'Madera','Arena'=>'Arena'),array('id'=>'piso','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'piso'); ?>
		</div>
		<div class="col-md-1">		
		</div>
	</div>
	<div class="buttons col-md-12" align="center">
	<br><br><br><br>
		 
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>'  : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br><br><br>
	</div>

 </div>
<div class="col-md-2">
</div>

 
<?php $this->endWidget(); ?>

</div><!-- form -->