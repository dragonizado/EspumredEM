<?php
/* @var $this CargarespumasController */
/* @var $model Cargarespumas */
/* @var $form CActiveForm */
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

 $(document).ready(function() {
 //funcion para hacer automaticamente la cantidad de kilo
		 $(document).on("click", "#kilo", function (event){
		 	event.preventDefault();
		 	
		 	 var densidad=$("#densidad").val();
		 	 var altura=$("#altura").val();
		 	 var ancho=$("#ancho").val();
		 	 var largo=$("#largo").val();
		 	 densidad=densidad/100;
		 	 var kilos=(altura*ancho*largo)*densidad;
		 	 document.getElementById("kilo").value=kilos;
		 		// var idEliminar=this['value'];
					//document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionvivienda/create";  
					 
		   //          $(this).parent().remove();
		 	
		});
 });
mostrarArticulos();
	function myFunction() {
				  
				  event.preventDefault();
				  	
				  var largo= $("#largo").val();
				  var ancho= $("#ancho").val();
				  var cantidad= $("#cantidad").val();
				  var cod= $("#codlote").val();
				  var tipo= $("#tipo").val();
				  var desicion;
				 
				 if (cod!="" && largo>0 && largo!="" && cantidad>0 && cantidad!="") {
				  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/agregarEspumas", {largo:largo, ancho: ancho, cantidad:cantidad, cod: cod,tipo:tipo},
				    function(data) {
				      console.log(data);
				      //var carritoActual = '<?php echo json_encode(Yii::app()->session['Familiar']) ?>';
				       desicion=data;
				       Registros = $.parseJSON(desicion);
				     
				        

				    if (Registros[0]!="excede") {
				        document.getElementById("largo").value="";
				        document.getElementById("ancho").value="";
				        document.getElementById("cantidad").value="";
				        var campo = document.getElementById('codlote');
						campo.readOnly = true; // Se añade el atributo
				    }else{
				    	var campo = document.getElementById('codlote');
						campo.readOnly = false; // Se quita el atributo
				    	alert("LA CANTIDAD DE KILOS INGRESADOS EXCEDE LA CANTIDAD DE KILOS DISPONIBLES");
				    };
				       
				        
				        
			    })

				// /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
				//   del . done es que hace el ingreso de manera inmediata*/
				    .done(mostrarArticulos);

				  }else{
				  	alert("ALGUNOS CAMPOS ESTÁN VACIO O CON VALOR 0");

				  };

		
		}

//funcion para mostrar en pantalla las referencia familiares que ingreso
		 function mostrarArticulos() {
		    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/verCargarEspumas", {},
		      function(data) {
		        valorTotal=0;
		        var Espumas = data;
		        var arrEspumas = $.parseJSON(Espumas);
		       // alert(arrEspumas);
		        arregloCantidad=arrEspumas;
		        console.log(arrEspumas);
		       


		        var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

		        for(var i=0; i< arrEspumas.length ;i++){
		                      
		                       form = form+ 
		                       "<div width='100%'>"
		                         + "<div class='col-md-2 col-xs-2'>"+arrEspumas[i][0]+"</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>"+arrEspumas[i][1]+"</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp"+arrEspumas[i][10]+"</div>"         							 
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp"+arrEspumas[i][2]+
		           							 "</div>"
		           							 +"<div align='left'  class='col-md-2 col-xs-2'>&nbsp&nbsp&nbsp&nbsp"+arrEspumas[i][9]+
		           							 "</div>"
		           							 +"<div align='left'  class='col-md-1 col-xs-2'>&nbsp&nbsp&nbsp&nbsp"+arrEspumas[i][6]+
		           							 "</div>"
		           							  

		           							  +"<button value='"+arrEspumas[i][0]+"' id="
		                           			 +arrEspumas[i][0]+" class='btnEliminar btn'></button>" +"</div>";
		                        // +"<div class='col-md-1'><button name='eliminar' class='btnEliminar' ></button><div>"+ 
		       }

		      form = form + "</form>";
		      $("#agregarProductos").html(form);

		    });
		}

//funcion para eliminar las referencia familiares que desean
 $(document).on("click", ".btnEliminar", function (event){
 	event.preventDefault();
 		var idEliminar=this['value'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();
 		mostrarArticulos();
 		var campo = document.getElementById('codlote');
	   campo.readOnly = false; // Se quita el atributo
});





</script>
<div class="form">




<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargarespumas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="col-md-12">


	<?php echo $form->errorSummary($model); ?>
<div class="col-md-12">
	
	<div class="col-md-4" id="codigo">
		<?php echo $form->labelEx($model,'Cod Formacion'); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->codlote !='') {
                             $value = ($model->codlote);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'codlote', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'codlote',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarFormacion'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Cargarespumas_codlote").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Cargarespumas_codlote").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'codlote'); ?>
	</div>


		<div class="col-md-4">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('id'=>'cantidad','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

    <div class="col-md-4">
		<?php echo $form->labelEx($model,'codigosap'); ?>
		<?php echo $form->textField($model,'codigosap',array('id'=>'codigosap','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codigosap'); ?>
	</div>
	
</div>
<div class="col-md-12">


	<div class="col-md-4">
		<?php echo $form->labelEx($model,'ancho'); ?>
		<?php echo $form->dropDownList($model,'ancho',array(
				'1'=>'1',
				'1.1'=>'1.1',
				'1.2'=>'1.2',
				'1.3'=>'1.3',
				'1.4'=>'1.4',
				'1.5'=>'1.5',
				'1.6'=>'1.6',
				'1.7'=>'1.7',
				'1.8'=>'1.8',
				'1.9'=>'1.9',
				'2'=>'2',
				),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'ancho')); ?>
		<?php echo $form->error($model,'ancho'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'largo'); ?>
		<?php echo $form->textField($model,'largo',array('id'=>'largo','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'largo'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model,'tipo',array(
				'Primera'=>'Primera',
				'Transición'=>'Transición',
				'Segunda'=>'Segunda',
				'Rota'=>'Rota',
				),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'tipo')); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>
	<!-- <div class="col-md-4">
		<?php //echo $form->labelEx($model,'cantidadKilo'); ?>
		<?php //echo $form->textField($model,'cantidadKilo',array('id'=>'kilo','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'cantidadKilo'); ?>
	</div> -->

	</div>
</div>


<div class="col-md-12">
<br><br>
	<div align="center" class="buttons">
<?php echo CHtml::button('',array("id"=>"agregarAutoComplete", "class"=>" form-control", "onclick"=>"myFunction()")); ?>	</div></br>

<div class="container" id="Cartaremisora_descripcion" >
       
          <div class="panel panel-default">
      			 <div class="panel-heading col-md-2 align='center'">
      		        <h3 class="panel-title">consecutivo <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2 ">
      		        <h3 class="panel-title">largo<span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">altura <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">ancho <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">densidad <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">kilo <span class="glyphicon"></span></h3>
      		      </div>
      		    
            
            <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
          </div>  
      
  </div>


	<br>
	<div class="buttons" align="center">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br>
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->