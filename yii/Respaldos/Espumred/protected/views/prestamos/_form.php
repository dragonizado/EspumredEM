<?php
/* @var $this PrestamosController */
/* @var $model Prestamos */
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
 $(document).ready(function(){

	   mostrarArticulos();
$("#agregarAutoComplete").on("click",function (event){
  /* funcion  se activa cuando dan click en el botn de agregarAutocomplete lo que hace esta funcion
     es tomar los valores que ingresaron en los campos mensionados a continuacion y enviarlo para ser
     agregado al una variable secion , luego de esto borra los campo*/
  event.preventDefault();
   var carritoActual;
  var articulo= $("#NombreArticulo").val();
  var cantidad= $("#cantidadArticulo").val();
  var valor= $("#valorArticulo").val();
  var id = $("#Prestamos_id_Articulo").val();  
  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Prestamos/agregarItem", {articulo: articulo, cantidad:cantidad, valor: valor, id:id},
    function(data) {
      console.log(data);
      var carritoActual = '<?php echo json_encode(Yii::app()->session['Articulo']) ?>';
        document.getElementById("NombreArticulo").value="";
        document.getElementById("cantidadArticulo").value="";
        document.getElementById("valorArticulo").value="";
    })

  /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
  del . done es que hace el ingreso de manera inmediata*/
    .done(mostrarArticulos);


});

  $("#valorArticulo").on("click",function (event){
    /* funcion  se activa cuando dan click en el campo de valorArticulo lo que hace esta funcion
       es tomar  el nombre del articulo y enviarlo a una funcion que gereara el valor del rticulos
       y luego lo asigna al campo */
     event.preventDefault();
    var articulo= $("#NombreArticulo").val();
    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Prestamos/generarValor", {articulo: articulo},
    function(data) {
      console.log(data);
       document.getElementById("valorArticulo").value=data;
    })
    
  });

 /* funcion  se activa cuando dan click en el boton eliminar el que tienen una x en el formulario lo que hace esta funcion
     eliminar el producto que desee*/
		  $(".btnEliminar").live("click",function (event){
		  	var idEliminar=this['id'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Prestamos/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();
		                   	                     
		    });

/* funcion  se activa cuando dan click en el campo valor total lo que hace es ir a una funcion la cual generara el el valor
   total de la carta remisora*/
			 $("#valorTotalCarta").on("click",function (event){
			             event.preventDefault();
			             
			            $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Prestamos/generarTotal", {},
			            function(data) {
			              console.log(data);
			               document.getElementById("valorTotalCarta").value=data;
			            })
			            
			    });
/*esta funcion como su nombre lo dice es para borrar los campos  que se quedan en sesion ya que 
por estan en sesion se autocomplenta cuando le das regresar ala la pagina 
*/
			 function limpiarcampos(){
				  <?php $arrVacio= array();
				  Yii::app()->session['Articulo'] = $arrVacio; ?>

				  document.getElementById("NombreArticulo").value="";
				  document.getElementById("cantidadArticulo").value="";
				  document.getElementById("valorArticulo").value="";
				  document.getElementById("direccion").value="";
				  document.getElementById("telefono").value="";
				  document.getElementById("flete").value="";
				  document.getElementById("direccion").value="";
				  document.getElementById("telefono").value="";
				  document.getElementById("numerofactura").value="";
				  document.getElementById("valorTotalCarta").value="";
				  document.getElementById("numerodebulto").value="";
				  document.getElementById("NombreEmpresa").value="";

			}

  /* funcion la cual muestra los articulos que estan en secion y iingresandolos en un formulario que asu vez
   los ingresa a un div el cual se encuentra en la parte abajo*/ 

function mostrarArticulos() {
    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Prestamos/verArticulos", {},
      function(data) {
        valorTotal=0;
        var articuloActual = data;
        var arrArticuloActual = $.parseJSON(articuloActual);
       // alert(arrArticuloActual);
        arregloCantidad=arrArticuloActual;
        console.log(arrArticuloActual);
        var totalPagarProducto=0;
        var suma=0;


        var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

        for(var i=0; i< arrArticuloActual.length ;i++){
                       suma=suma+totalPagarProducto;
                       form = form+ 
                       "<div width='100%'>"
                         + "<div class='col-md-4 col-xs-4'>"+arrArticuloActual[i][0]+"</div>"
           							 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][1]+"</div>"
           							 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][2]+"</div>"         							 
           							 +"<div align='right'  class='col-md-3 col-xs-2'>"+arrArticuloActual[i][1]*arrArticuloActual[i][2]+"</div>"
           							  +"<button value='enviar' id="+arrArticuloActual[i][3]+"' class='btnEliminar btn'></button>" +"</div>";
                               							
         
       }

      form = form + "</form>";
      $("#agregarProductos").html(form);

    });
}

});
</script>




<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestamos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<div  class="col-md-1"></div>
<div class="col-md-10">


	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-10">
      		<div class="col-md-6">
      		<?php echo $form->labelEx($model,'Nombre Cliente'); ?>
      		<?php/*  este metodo de abajo funciona para buscar todos los clientes que tiene y asi poder listarlos por
      			letras

      		  */?>
      		
      		<?php
      		if ($model->id_Cliente !='') {
                             $value = ($model->id_Cliente);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'id_Cliente', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'NombreCliente',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarCliente'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Prestamos_id_Cliente").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Prestamos_id_Cliente").val(0); }'
                             ),
                         ));
      		?>
    		<?php echo $form->error($model,'id_Cliente'); ?>
      	</div> <!-- fin del div Nombre Cliente -->


      	<div class="col-md-6">
      		<?php echo $form->labelEx($model,'Nombre Usuario'); ?>

      		<?php/*  este metodo de abajo funciona para buscar todos los Usuarios que tiene y asi poder listarlos por
      			letras

      		  */?>
      		
      		<?php
      		if ($model->id_Usuario !='') {
                             $value = ($model->id_Usuario);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'id_Usuario', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'NombreUsuario',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarUsuario'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Prestamos_id_Usuario").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Prestamos_id_Usuario").val(0); }'
                             ),
                         ));
      		?>

      		<?php echo $form->error($model,'id_Usuario'); ?>
      	</div> <!-- fin del div Nombre Usuario -->

	</div>

 

   <div class="col-md-10">
        	<div class="col-md-2">
        		<?php echo $form->labelEx($model,'Ciudad'); ?>
        		<?php/*  este metodo de abajo funciona para buscar todos las ciudades que tiene y asi poder listarlos por
        			letras

        		  */?>
        		
        		<?php
        		if ($model->id_Ciudad !='') {
                               $value = ($model->id_Ciudad);
                           } else {
                               $value = '';
                           }
                           echo $form->hiddenField($model, 'id_Ciudad', array());

                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                               'name' => 'NombreCiudad',
                               'model' => $model,
                               'value' => $value,
                               'htmlOptions'=>array('class'=>'form-control'),
                               'sourceUrl' => $this->createUrl('ListarCiudad'),
                               'options' => array(
                                   'minLength' => '2',
                                   'showAnim' => 'fold',
                                   'select' => 'js:function(event, ui)
                            { jQuery("#Prestamos_id_Ciudad").val(ui.item["id"]); }',
                                   'search' => 'js:function(event, ui)
                            { jQuery("#Prestamos_id_Ciudad").val(0); }'
                               ),
                           ));
        		?>

        		<?php echo $form->error($model,'id_Ciudad'); ?>
        	</div>

          	<div class="col-md-5" >
        		<?php echo $form->labelEx($model,'Nombre Articulo'); ?>
        			<?php/*  este metodo de abajo funciona para buscar todos los Articulo que tiene y asi poder listarlos por
        			letras

        		  */?>
        		
        		<?php
        		if ($model->id_Articulo !='') {
                               $value = ($model->id_Articulo);
                           } else {
                               $value = '';
                           }
                           echo $form->hiddenField($model, 'id_Articulo', array());

                        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                               'name' => 'NombreArticulo',
                               'model' => $model,
                               'value' => $value,
                               'htmlOptions'=>array('class'=>'form-control'),
                               'sourceUrl' => $this->createUrl('ListarArticulo'),
                               'options' => array(
                                   'minLength' => '2',
                                   'showAnim' => 'fold',
                                   'select' => 'js:function(event, ui)
                            { jQuery("#Prestamos_id_Articulo").val(ui.item["id"]); }',
                                   'search' => 'js:function(event, ui)
                            { jQuery("#Prestamos_id_Articulo").val(0); }'
                               ),
                           ));
        		?>
        		<?php echo $form->error($model,'id_Articulo'); ?>
                  
                  
        	</div>

        	<div class="col-md-2">
        		<?php echo $form->labelEx($model,'Cantidad'); ?>
        		<?php echo $form->textField($model,'cantidad',array( 'id'=>"cantidadArticulo", 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
        		<?php echo $form->error($model,'cantidad'); ?>
        	</div>

        	<div class="col-md-2">
        		<?php echo $form->labelEx($model,'Valor'); ?>
        		<?php echo $form->textField($model,'valorUnitario',array('id'=>"valorArticulo" ,'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
        		<?php echo $form->error($model,'valorUnitario'); ?>
        	</div>

        	<div class="col-md-1">
        			<br>
        		 <?php echo CHtml::submitButton('',array("id"=>"agregarAutoComplete", "class"=>"btn form-control")); ?>	
        	</div>

  </div>

<br><br><br><br><br><br><br>
  <div class="container" id="Prestamos_descripcion" >
        <div class="col-md-10">
          <div class="panel panel-default">
      			 <div class="panel-heading col-md-5">
      		        <h3 class="panel-title">Articulos agregados <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Cantidad <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-3">
      		        <h3 class="panel-title">Valor unitario <span class="glyphicon"></span></h3>
      		      </div>
      		      <div class="panel-heading col-md-2">
      		        <h3 class="panel-title">Valor total <span class="glyphicon"></span></h3>
      		      </div>
            
            <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
          </div>  
      </div>
  </div>

	<!-- div>
		<?php //echo $form->labelEx($model,'id_Ciudad'); ?>
		<?php //echo $form->textField($model,'id_Ciudad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id_Ciudad'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'id_Articulo'); ?>
		<?php //echo $form->textField($model,'id_Articulo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id_Articulo'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'valorUnitario'); ?>
		<?php //echo $form->textField($model,'valorUnitario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'valorUnitario'); ?>
	</div>

	

	<div>
		<?php //echo $form->labelEx($model,'cantidad'); ?>
		<?php //echo $form->textField($model,'cantidad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'cantidad'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'consecutivo'); ?>
		<?php //echo $form->textField($model,'consecutivo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'consecutivo'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'descripcion'); ?>
		<?php //echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'descripcion'); ?>
	</div>
 -->

	<div class="buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

</div>
<div  class="col-md-1"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->