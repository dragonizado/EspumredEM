<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */

    $UploadFormModel = new UploadFormFactura;

    $id=Yii::app()->user->id;
    $factura=Facturacion::model()->findAll();
    $factura=count($factura)+1;

    $UploadFormModel->id = $factura;


?>


<style type="text/css">



     .btnImagen{
    background:url(images/Adjunto.jpg);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


</style>

<script type="text/javascript" >

//funcion para eliminar las referencia familiares que desean
 $(document).on("click", ".btnImagen", function (event){
    event.preventDefault();
        var id=this['value'];
    
            //window.open("<?php echo Yii::app()->request->baseUrl ?>/images/Facturas/"+id+"");
              $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=facturacion/verImagen", {id: id},
                  function(data) {
                 console.log(data); 
                   var Imagen = data;
               	   // var arrImagen = $.parseJSON(Imagen);
               	   // console.log(arrImagen);
               	   // var fruta = new Array();
                window.open("<?php echo Yii::app()->request->baseUrl ?>/"+Imagen);	//
               	    
               	   	
               	   
               	    

               	            	   
              		

             })      
            
    
});


//funcion para mostrar campos si esta estudiando actualmente y si no esconderlo
  $(document).on("click", "#buscar", function (event){
 	event.preventDefault();
		 	var provedor=$("#provedor").val();
		 	var Nombre=$("#nombre").val();
		 	var valorFactura=$("#valorFactura").val();
		 	var Fecha1=$("#Fecha_Creacion").val();
		 	var Fecha=$("#Fecha_Modificacion").val();

 	   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=facturacion/verRegistros", {provedor:provedor,Nombre:Nombre,valorFactura:valorFactura,Fecha1:Fecha1,Fecha:Fecha},
             function(data) {
            //     valorTotal=0;
               var Factura = data;
               var arrFactura = $.parseJSON(Factura);
            //    // alert(arrMecanicos);
            
              console.log(arrFactura);
               


                var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

                for(var i=0; i<arrFactura.length;i++){
                            var   res =  arrFactura[i][8].slice(0, 10);
							
                               form = form+ 
                               "<div width='100%'>"
                                
                                             +"<div align='right'  class='col-md-1 col-xs-1'>"+arrFactura[i][4]+"</div>"
                                              +"<div align='right'  class='col-md-1 col-xs-2'>"+arrFactura[i][2]+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrFactura[i][1]+"</div>"                                     
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrFactura[i][3]+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+res+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrFactura[i][7]+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+
                                             "<button value='"+arrFactura[i][0]+"' id="+arrFactura[i][0]+" class='btnImagen btn'></button>" 
                                             +"</div>"+
                                            

                                            "</div>";
                                // +"<div class='col-md-1'><button name='eliminar' class='btnImagen' ></button><div>"+ 
               }

              form = form + "</form>";
              $("#agregarProductos").html(form);

             });
 	
 
	});



		$(document).on("click","#nombre",function(event){
			event.preventDefault();
			
            document.getElementById("nombre").value=$("#Facturacion_provedor").val();
              document.getElementById("nombreoculto").value=$("#provedor").val();
		});


		$(document).on("click","#provedor",function(event){
			event.preventDefault();
			
            document.getElementById("provedor").value=$("#nombreoculto").val();
             document.getElementById("Facturacion_provedor").value=$("#nombre").val();

		});
  </script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facturacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



<div class="col-md-2"></div>
<div class="col-md-8">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="col-md-4">
		<?php echo $form->labelEx($model,'provedor*'); ?>
		<?php //echo $form->textField($model,'provedor',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php //echo $form->textField($model,'provedor',array()); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->provedor !='') {
                             $value = ($model->provedor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'provedor', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'provedor',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarProveedor'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'provedor'); ?>
	</div>


	<div class="col-md-4">
			<?php echo $form->labelEx($model,'nombre*'); ?>
		<?php //echo $form->textField($model,'provedor',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php //echo $form->textField($model,'provedor',array()); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->provedor !='') {
                             $value = ($model->provedor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'provedor', array('id'=>'nombreoculto'));

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'provedor',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control','id'=>'nombre'),
                             'sourceUrl' => $this->createUrl('ListarProveedor2'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#nombreoculto").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#nombreoculto").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'provedor'); ?>
		
	</div>


	<div class="col-md-4">
		<?php echo $form->labelEx($model,'valorFactura*'); ?>
		<?php echo $form->textField($model,'valorFactura',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'valorFactura')); ?>
		<?php echo $form->error($model,'valorFactura'); ?>
	</div>



	<div class="col-md-5">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'Fecha_Creacion','placeholder'=>"Ej: 2010-10-10")); ?>
		<?php echo $form->error($model,'Fecha_Creacion'); ?>
	</div>

	<div class="col-md-2">
		<br><br>
		<?php echo $form->labelEx($model,'y: '); ?>
		
	</div>
	<div class="col-md-5">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha_Modificacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'Fecha_Modificacion','placeholder'=>"Ej: 2010-10-10")); ?>
		<?php echo $form->error($model,'Fecha_Modificacion'); ?>
		<br>
	</div>



	<!-- <div class="col-md-4">
		<?php //echo $form->labelEx($model,'Fecha_Creacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Creacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Creacion'); ?>
	</div>

	<div class="col-md-4">
		<?php //echo $form->labelEx($model,'Fecha_Modificacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Modificacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Modificacion'); ?>
		<br>
	</div> -->



<div align="center" class="buttons">

		 <?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary btn-large",'id'=>'buscar')); ?>
	</div>
<?php $this->endWidget(); ?>



</div>
<div class="col-md-2"></div>
</div><!-- form -->
<div class="col-md-12">
	

<div id="target" style="overflow: scroll; width: 1200px; height: 400px;">
		<div class="container" id="Cartaremisora_descripcion" >
		       </br></br>
		          <div class="panel panel-default">
		                 <div class="panel-heading col-md-1">
		                    <h3 class="panel-title">Con.<span class="glyphicon"></span></h3>
		                  </div>
		                  <div class="panel-heading col-md-2" >
		                    <h3 aling="center" class="panel-title">#Fac.<span class="glyphicon"></span></h3>
		                  </div>
		                  <div class="panel-heading col-md-2">
		                    <h3 aling="center" class="panel-title">Nombre Provedor <span class="glyphicon"></span></h3>
		                  </div>
		                  <div class="panel-heading col-md-2">
		                    <h3 class="panel-title">Valor<span class="glyphicon"></span></h3>
		                  </div>
		                  <div class="panel-heading col-md-2">
		                    <h3 class="panel-title">Fecha   <span class="glyphicon"></span></h3>
		                  </div>
		                   <div class="panel-heading col-md-2">
		                    <h3 class="panel-title">Estado   <span class="glyphicon"></span></h3>
		                  </div>
		                  <div class="panel-heading col-md-1">
		                    <h3 class="panel-title">Adjunto <span class="glyphicon"></span></h3>
		                  </div>
		                          
		            <div class="panel-body ">
		              <div id="agregarProductos"></div>
		            </div>
		          </div>  
		      
		  </div>
</div>
<div id="log"></div>

	</div>