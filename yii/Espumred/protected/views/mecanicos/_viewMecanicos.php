<script type="text/javascript">
 $(document).ready(function(){
    $("#buscar").on("click",function (event){
         event.preventDefault();
         var id= $("#Mecanicos_Nombre").val();
        
    		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=mecanicos/cargar",{id: id},
					    function(data) {
					    	console.log(data);
					    	 var carritoActual = data;
					    	  var arrCarritoActual = $.parseJSON(carritoActual);
                          var form = "<form id='formulariocarrito' method='POST' action='#'>";

                         
 					form = form+                           

							"<table class='table table-hover'>"+
							      "<thead>"+
							        "<tr>"+
							          "<th>Herramienta</th>"+
							          "<th>Tipo</th>"+
							           "<th>Marca</th>"+
							           "<th>Cantidad</th>"+
							           "<th>Ubicacion</th>"+
							        "</tr>"+
							      "</thead>"+ "<tbody>";
                          for(var i=0; i< arrCarritoActual.length;i++){
							        form = form+ "<tr>"+
							          "<td>"+arrCarritoActual[i][2]+"</td>"+
							          "<td>"+arrCarritoActual[i][0]+"</td>"+
							          "<td>"+arrCarritoActual[i][3]+"</td>"+
							          "<td>"+arrCarritoActual[i][4]+"</td>"+
							          "<td>"+arrCarritoActual[i][5]+"</td>"+
							          
							        "</tr>";
                          }
                           
                          form = form + "</tbody>"+
							"</table>"+"</form>";
                          

                           $("#formulario").html(form);
                            
					        $("#boton").show();
					     })

    });

$("#imprimir").on("click",function(event){   
	 event.preventDefault();
	
	var id = $("#Mecanicos_Nombre").val();
	//alert(id);
	 
	 // $this->redirect(array('mostrarPlantilla','id'=>$model->id));
	  // var idProducto = $(this).attr('id');
	  // var nombreProducto = $(this).attr('nombreProducto');
	  // var precioProducto = $(this).attr('precioProducto');
	  // idTienda = $(this).attr('idTienda');

	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=mecanicos/guardarid", {id:id},
	   function(data) {
	   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=mecanicos/mostrarDetalle"); 
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	    })
	  // .done(mostrarProductosEnCarrito);

	});

 });

</script>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mecanicos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	

	<?php echo $form->errorSummary($model); ?>
<div class="col-md-4"></div>
	
<div class="col-md-4">

	<div>
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->Nombre !='') {
                             $value = ($model->Nombre);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'Nombre', array());
                         
                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'Nombre',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('listarNombre'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Mecanicos_Nombre").val(ui.item["cc"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Mecanicos_Nombre").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>


<br>
	
<div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	<br>
	</div>
	<br>


</div>


<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
	<div id="formulario">

	</div>
	<div align="center"  class="buttons"  style="display:none" id="boton">
        <br>
        <?php echo CHtml::submitButton(' imprimir', array("class"=>"btn btn-primary btn-large" ,"id"=>"imprimir")); ?>
	<br>
	</div>
</div><!-- form -->
   

	<br>
