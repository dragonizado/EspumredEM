<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */
/* @var $form CActiveForm */

?>
<script type="text/javascript">
  //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=estadoestudiantil/create";  
			 
   //          $(this).parent().remove();
 	
});
 	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=seguridadsocial/cargar",
					    function(data) {
					    	console.log(data);
					      var Registro = data;
					      var index
					        Registros = $.parseJSON(Registro);

						 		document.getElementById("censantias").value=Registros[3]["censantias"];
					     		document.getElementById("afp").value=Registros[3]["afp"];
					     		document.getElementById("eps").value=Registros[3]["eps"];

				        
			    })

			 }
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seguridadsocial-form',
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
		<?php echo $form->labelEx($model,'censantias'); ?>
		<?php echo $form->dropDownList($model,'censantias',
		array(''=>'',
					'CADAC '=>'CADAC',
					'CAJANAL E.I.C.E'=>'CAJANAL E.I.C.E',
					'CAPRECOM '=>'CAPRECOM ',
					'COLFONDOS'=>'COLFONDOS',
					'FONDO DE SOLIDARIDAD PENSIONAL'=>'FONDO DE SOLIDARIDAD PENSIONAL',
					'FONPRECOM'=>'FONPRECOM',
					'HORIZONTE S.A.'=>'HORIZONTE S.A.',
					'INSTITUTO DE SEGUROS SOCIALES'=>' INSTITUTO DE SEGUROS SOCIALES',
					'PENSIONES DE ANTIOQUIA'=>' PENSIONES DE ANTIOQUIA',
					'PORVENIR S.A.'=>'PORVENIR S.A.',
					'PROTECCION S.A.'=>' PROTECCION S.A.',
					'SANTANDER S.A.'=>'SANTANDER S.A.',
					'SKANDIA'=>'SKANDIA',
					'OTRA'=>'OTRA',
					
					
			),array('size'=>1,'maxlength'=>1 ,'id'=>'censantias','class'=>'form-control')); ?>
		<?php echo $form->error($model,'censantias'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'afp'); ?>
		<?php echo $form->dropDownList($model,'afp',
		array(''=>'',
					'CADAC '=>'CADAC',
					'CAJANAL E.I.C.E'=>'CAJANAL E.I.C.E',
					'CAPRECOM '=>'CAPRECOM ',
					'COLFONDOS'=>'COLFONDOS',
					'COLPENSIONES'=>'COLPENSIONES',
					'COLPENSIONES'=>'COLPENSIONES',
					'FONDO DE SOLIDARIDAD PENSIONAL'=>'FONDO DE SOLIDARIDAD PENSIONAL',
					'FONPRECOM'=>'FONPRECOM',
					'HORIZONTE S.A.'=>'HORIZONTE S.A.',
					'INSTITUTO DE SEGUROS SOCIALES'=>' INSTITUTO DE SEGUROS SOCIALES',
					'PENSIONES DE ANTIOQUIA'=>' PENSIONES DE ANTIOQUIA',
					'PORVENIR S.A.'=>'PORVENIR S.A.',
					'PROTECCION S.A.'=>' PROTECCION S.A.',
					'SANTANDER S.A.'=>'SANTANDER S.A.',
					'SKANDIA'=>'SKANDIA',
					'OTRA'=>'OTRA',
					
					
			),array('size'=>1,'maxlength'=>1 ,'id'=>'afp','class'=>'form-control')); ?>
		<?php echo $form->error($model,'afp'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'eps'); ?>
		
		<?php echo $form->dropDownList($model,'eps',
		array(''=>'','BARRANQUILLA SANA E.P.S.'=>'BARRANQUILLA SANA E.P.S.','CAFESALUD'=>'CAFESALUD',
					'CAJANAL '=>'CAJANAL ','CALDAS'=>'CALDAS',
					'CALISALUD'=>'CALISALUD','CAPRECOM'=>'CAPRECOM',
					'COLSEGUROS'=>'COLSEGUROS','COMPESAR'=>'COMPESAR',
					'COMFENALCO'=>'COMFENALCO','CONVIDA'=>'CONVIDA',
					'COOMEVA'=>'COOMEVA','CRUZ BLANCA'=>'CRUZ BLANCA',
					'E.P.S. CONDOR '=>'E.P.S. CONDOR ',
					'EPS SURA'=>'EPS SURA','FAMISANAR'=>'FAMISANAR',
					'HUMANO VIVIR'=>'HUMANO VIVIR','I.S.S'=>'I.S.S','NUEVA EPS'=>"NUEVA EPS",
					'RISARALDA'=>'RISARALDA',' REDSALUD ATENCION HUMANA EPS S.A.'=>' REDSALUD ATENCION HUMANA EPS S.A.',
					'SERVICIO OCCIDENTAL DE SALUD S.A. S.O.S.'=>' SERVICIO OCCIDENTAL DE SALUD S.A. S.O.S.',
					'SALUD COOP'=>'SALUD COOP','SALUD TOTAL'=>'SALUD TOTAL',
					'SALUD VIDA '=>'SALUD VIDA ','SALUD COLMENA'=>'SALUD COLMENA',
					'SALUD COLPATRIA'=>'SALUD COLPATRIA','SANITAS'=>'SANITAS',
					'SELVA SALUD'=>'SELVA SALUD','SOLSALUD'=>'SOLSALUD','UNIMEC'=>'UNIMEC','OTRA'=>"OTRA",


			),array('size'=>1,'maxlength'=>1 ,'id'=>'eps','class'=>'form-control')); ?>
		<?php echo $form->error($model,'eps'); ?>
	</div>


	<div align="center" class="buttons">
		<br>
			<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	</div>
<div class="col-md-4"></div>

<?php $this->endWidget(); ?>

</div><!-- form -->