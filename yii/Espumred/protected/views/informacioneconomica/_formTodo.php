<?php
/* @var $this InformacioneconomicaController */
/* @var $model Informacioneconomica */
/* @var $form CActiveForm */

?>
<script type="text/javascript" >

$(document).ready(function() {

 	

	///////////////////// cambio para ingresos
		$(document).on("change","#primerIngreso",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			    var suma=parseInt(document.getElementById("segundoIngreso").value)+parseInt(document.getElementById("otrosIngresos").value);
			  var cantidadElementos = parseInt(document.getElementById("primerIngreso").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalIngresos").value=suma;

		});
		$(document).on("change","#segundoIngreso",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   var suma=parseInt(document.getElementById("primerIngreso").value)+parseInt(document.getElementById("otrosIngresos").value);
			  var cantidadElementos = parseInt(document.getElementById("segundoIngreso").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalIngresos").value=suma;

		});
		$(document).on("change","#otrosIngresos",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   var suma=parseInt(document.getElementById("primerIngreso").value)+parseInt(document.getElementById("segundoIngreso").value);
			  var cantidadElementos = parseInt(document.getElementById("otrosIngresos").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalIngresos").value=suma;

		});

///////////////////// cambio para gasto////////////////////////////////////////////////////////////

		$(document).on("change","#arriendo",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			    var suma=

			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value);
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			 
			  var cantidadElementos = parseInt(document.getElementById("arriendo").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#serviciosPublicos",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
				    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("internet").value);
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("serviciosPublicos").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});
		$(document).on("change","#internet",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("internet").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#telefonia",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   	    var suma=
			    parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("telefonia").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#cable",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			  	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("cable").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#alimentacion",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			  	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("alimentacion").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		/*********/

		$(document).on("change","#transporte",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("transporte").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#celular",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			 	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);

			  var cantidadElementos = parseInt(document.getElementById("celular").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});
		$(document).on("change","#educacion",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			  	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("educacion").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#vehiculo",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("vehiculo").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#prestacionesComercial",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			    	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("prestacionesComercial").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#prestamosBancario",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			  	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("prestamosBancario").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		/********/



		$(document).on("change","#hipoteca",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			    	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value)+
			    parseInt(document.getElementById("recreacion").value);
			   
			  var cantidadElementos = parseInt(document.getElementById("hipoteca").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
         
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("change","#vestidoYCalzado",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			   	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("recreacion").value);
			  var cantidadElementos = parseInt(document.getElementById("vestidoYCalzado").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});
		$(document).on("change","#recreacion",function(event){
			event.preventDefault();
			  var cantidadElementos =0;
			  	    var suma=
			     parseInt(document.getElementById("arriendo").value)+
			    parseInt(document.getElementById("serviciosPublicos").value)+
			    parseInt(document.getElementById("internet").value)+
			    parseInt(document.getElementById("telefonia").value)+
			    parseInt(document.getElementById("cable").value)+
			    parseInt(document.getElementById("alimentacion").value)+
			    parseInt(document.getElementById("transporte").value)+
			    parseInt(document.getElementById("celular").value)+
			    parseInt(document.getElementById("educacion").value)+
			    parseInt(document.getElementById("vehiculo").value)+
			    parseInt(document.getElementById("prestacionesComercial").value)+
			    parseInt(document.getElementById("prestamosBancario").value)+
			    parseInt(document.getElementById("hipoteca").value)+
			    parseInt(document.getElementById("vestidoYCalzado").value);
			  var cantidadElementos = parseInt(document.getElementById("recreacion").value);
             //esta document.getElementsByName muestra cuantas Productos hay 
          
            suma=suma+cantidadElementos;
            
                
            document.getElementById("totalGastos").value=suma;

		});

		$(document).on("click","#saldoFinal",function(event){
			event.preventDefault();
			  
			     var suma=
			     parseInt(document.getElementById("totalIngresos").value)-
			     parseInt(document.getElementById("totalGastos").value);
            	document.getElementById("saldoFinal").value=suma;

		});

		

		

  });

  
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacioneconomica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
	
<div class="col-md-12">
	
<!-- 
	<div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->
	<div class="col-md-5">
		<div class="col-md-12">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'primerIngreso'); ?>
				<?php echo $form->textField($model,'primerIngreso',array('id'=>'primerIngreso','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'primerIngreso'); ?>
			</div>

			<div class="col-md-6">
				<?php echo $form->labelEx($model,'segundoIngreso'); ?>
				<?php echo $form->textField($model,'segundoIngreso',array('id'=>'segundoIngreso','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'segundoIngreso'); ?>
			</div>

					
			</div>
	<div class="col-md-12">
					<div class="col-md-6">

				<?php echo $form->labelEx($model,'otrosIngresos'); ?>
				<?php echo $form->textField($model,'otrosIngresos',array('id'=>'otrosIngresos','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'otrosIngresos'); ?>
				
			</div>
			
		
	
			

		</div>
	
</div>
<div class="col-md-7">
		<div class="col-md-12">

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'arriendo'); ?>
					<?php echo $form->textField($model,'arriendo',array('id'=>'arriendo','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'arriendo'); ?>
				</div>

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'serviciosPublicos'); ?>
					<?php echo $form->textField($model,'serviciosPublicos',array('id'=>'serviciosPublicos','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'serviciosPublicos'); ?>
				</div>

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'internet'); ?>
					<?php echo $form->textField($model,'internet',array('id'=>'internet','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'internet'); ?>
				</div>
				</div>

			  <div class="col-md-12">
						<div class="col-md-4">
							<?php echo $form->labelEx($model,'telefonia'); ?>
							<?php echo $form->textField($model,'telefonia',array('id'=>'telefonia','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
							<?php echo $form->error($model,'telefonia'); ?>
						</div>
							<div class="col-md-4">
								<?php echo $form->labelEx($model,'cable'); ?>
								<?php echo $form->textField($model,'cable',array('id'=>'cable','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
								<?php echo $form->error($model,'cable'); ?>
							</div>

					<div class="col-md-4">
						<?php echo $form->labelEx($model,'alimentacion'); ?>
						<?php echo $form->textField($model,'alimentacion',array('id'=>'alimentacion','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
						<?php echo $form->error($model,'alimentacion'); ?>
					</div>
								
			  </div>

	  <div class="col-md-12">
			


			<div class="col-md-4">
				<?php echo $form->labelEx($model,'transporte'); ?>
				<?php echo $form->textField($model,'transporte',array('id'=>'transporte','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'transporte'); ?>
			</div>

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'celular'); ?>
				<?php echo $form->textField($model,'celular',array('id'=>'celular','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'celular'); ?>
			</div>

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'educacion'); ?>
				<?php echo $form->textField($model,'educacion',array('id'=>'educacion','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'educacion'); ?>
			</div>
	</div>

	<div class="col-md-12">
			

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'vehiculo'); ?>
				<?php echo $form->textField($model,'vehiculo',array('id'=>'vehiculo','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'vehiculo'); ?>
			</div>

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'prestacionesComercial'); ?>
				<?php echo $form->textField($model,'prestacionesComercial',array('id'=>'prestacionesComercial','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'prestacionesComercial'); ?>
			</div>
			<div class="col-md-4">
				<?php echo $form->labelEx($model,'prestamosBancario'); ?>
				<?php echo $form->textField($model,'prestamosBancario',array('id'=>'prestamosBancario','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'prestamosBancario'); ?>
			</div>
	</div>

	<div class="col-md-12">
			

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'hipoteca'); ?>
				<?php echo $form->textField($model,'hipoteca',array('id'=>'hipoteca','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'hipoteca'); ?>
			</div>

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'vestido Y Calzado'); ?>
				<?php echo $form->textField($model,'vestidoYCalzado',array('id'=>'vestidoYCalzado','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'vestidoYCalzado'); ?>
			</div>

			<div class="col-md-4">
				<?php echo $form->labelEx($model,'recreacion'); ?>
				<?php echo $form->textField($model,'recreacion',array('id'=>'recreacion','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'recreacion'); ?>
			</div>
	</div>

	

</div>

<div class="col-md-12">
		<div class="col-md-5">
				<br>
				<div class="col-md-5">

				<?php echo $form->labelEx($model,'totalIngresos'); ?>
				<?php echo $form->textField($model,'totalIngresos',array('id'=>'totalIngresos','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'totalIngresos'); ?>
				
			</div>
		</div>
		<div class="col-md-7">
			<br>
		<div class="col-md-4">
			<?php echo $form->labelEx($model,'totalGastos'); ?>
			<?php echo $form->textField($model,'totalGastos',array('id'=>'totalGastos','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'totalGastos'); ?>
		</div>
		<div class="col-md-4">

				<?php echo $form->labelEx($model,'saldoFinal'); ?>
				<?php echo $form->textField($model,'saldoFinal',array('id'=>'saldoFinal','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'saldoFinal'); ?>
			</div>

	</div>
	
	
</div>

	<div align="center" class="buttons">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
			 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>'  : 'Siguiente >>', array("class"=>"btn btn-primary btn-large")); ?>
		</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->