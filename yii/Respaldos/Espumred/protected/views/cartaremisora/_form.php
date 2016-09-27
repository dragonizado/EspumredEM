<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */
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
    
     limpiarcampos();
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
  var id = $("#Cartaremisora_idArticulo").val();  
  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/agregarItem", {articulo: articulo, cantidad:cantidad, valor: valor, id:id},
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
    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/generarValor", {articulo: articulo},
    function(data) {
      console.log(data);
       document.getElementById("valorArticulo").value=data;
    })
    
  });

  /* funcion  se activa cuando dan click en el boton eliminar el que tienen una x en el formulario lo que hace esta funcion
     eliminar el producto que desee*/
		  $(".btnEliminar").live("click",function (event){
		  	var idEliminar=this['id'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();
		                   	                     
		    });

/* funcion  se activa cuando dan click en el campo valor total lo que hace es ir a una funcion la cual generara el el valor
   total de la carta remisora*/
 $("#valorTotalCarta").on("click",function (event){
             event.preventDefault();
             
            $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/generarTotal", {},
            function(data) {
              console.log(data);
               document.getElementById("valorTotalCarta").value=data;
            })
            
    });
/* funcion  se activa cuando dan click en el campo ciudad lo que hace es ir a varias funciones  funcion la cual generara  y traera
    la direccion y el numero telefonico del usuario*/

    $("#NombreCiudad").on("click",function (event){
             event.preventDefault();
             var cliente= $("#NombreCliente").val();
              var direccion= $("#direccion").val();
               var telefono= $("#telefono").val();
               var valor="0";
                valor=$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/generarNuevoCliente", {cliente: cliente, direccion:direccion , telefono:telefono},
            function(data) {
              console.log(data);
                     if (data=="1") {
                       $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/generarDireccion", {cliente: cliente},
                        function(data) {
                          console.log(data);
                           document.getElementById("direccion").value=data;
                        })
                          $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/generarTelefono", {cliente: cliente},
                        function(data) {
                          console.log(data);
                           document.getElementById("telefono").value=data;
                        })

                  };               

               
            })
          
            

             
               
           
            
    });

/*funcion para limpiar los campo no permitiendo regresar para complementar los mismos valore e permitiendo no
  acomplace los datos de sesion de otras clases*/
function limpiarcampos(){
  <?php $arrVacio= array();
  Yii::app()->session['Articulo'] = $arrVacio; ?>

  document.getElementById("NombreArticulo").value="";
  document.getElementById("cantidadArticulo").value="";
  document.getElementById("valorArticulo").value="";
  document.getElementById("direccion").value="";
  document.getElementById("telefono").value="";
  document.getElementById("Flete_Pagadero").value="";
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
    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Cartaremisora/verArticulos", {},
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

           							  +"<button value='enviar' id="
                           			 +arrArticuloActual[i][3]+"' class='btnEliminar btn'></button>" +"</div>";
                        // +"<div class='col-md-1'><button name='eliminar' class='btnEliminar' ></button><div>"+ 
       }

      form = form + "</form>";
      $("#agregarProductos").html(form);

    });
}

});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cartaremisora-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-1"></div>
<div class="col-md-10">
	<p class="note">Los campos con <span class="required">*</span> con obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-10">
      		<div class="col-md-6">
      		<?php echo $form->labelEx($model,'Nombre Cliente'); ?>
      		<?php/*  este metodo de abajo funciona para buscar todos los clientes que tiene y asi poder listarlos por
      			letras

      		  */?>
      		
      		<?php
      		if ($model->idCliente !='') {
                             $value = ($model->idCliente);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'idCliente', array());

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
                          { jQuery("#Cartaremisora_idCliente").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Cartaremisora_idCliente").val(0); }'
                             ),
                         ));
      		?>
    		<?php echo $form->error($model,'idCliente'); ?>
      	</div> <!-- fin del div Nombre Cliente -->


      	<div class="col-md-6">
      		<?php echo $form->labelEx($model,'Nombre Usuario'); ?>

      		<?php/*  este metodo de abajo funciona para buscar todos los Usuario que tiene y asi poder listarlos por
      			letras

      		  */?>
      		
      		<?php
      		if ($model->idUsuario =='') {
                             $value = ($model->idUsuario);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'idUsuario', array());

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
                          { jQuery("#Cartaremisora_idUsuario").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Cartaremisora_idUsuario").val(0); }'
                             ),
                         ));
      		?>

      		<?php echo $form->error($model,'idUsuario'); ?>
      	</div> <!-- fin del div Nombre Usuario -->

	</div>

  <div class="col-md-10">
        	<div class="col-md-6" >
        		<?php echo $form->labelEx($model,'Nombre Articulo'); ?>
        			<?php/*  este metodo de abajo funciona para buscar todos los Articulo que tiene y asi poder listarlos por
        			letras

        		  */?>
        		
        		<?php
        		if ($model->idArticulo !='') {
                               $value = ($model->idArticulo);
                           } else {
                               $value = '';
                           }
                           echo $form->hiddenField($model, 'idArticulo', array());

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
                            { jQuery("#Cartaremisora_idArticulo").val(ui.item["id"]); }',
                                   'search' => 'js:function(event, ui)
                            { jQuery("#Cartaremisora_idArticulo").val(0); }'
                               ),
                           ));
        		?>
        		<?php echo $form->error($model,'idArticulo'); ?>
                  
                  
        	</div>

        	<div class="col-md-2">
        		<?php echo $form->labelEx($model,'Cantidad'); ?>
        		<?php echo $form->textField($model,'Cantidad_Articulo',array( 'id'=>"cantidadArticulo", 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
        		<?php echo $form->error($model,'Cantidad_Articulo'); ?>
        	</div>

        	<div class="col-md-3">
        		<?php echo $form->labelEx($model,'Valor'); ?>
        		<?php echo $form->textField($model,'Valor_Unitario_Articulo',array('id'=>"valorArticulo" ,'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
        		<?php echo $form->error($model,'Valor_Unitario_Articulo'); ?>
        	</div>

        	<div class="col-md-1">
        			<br>
        		 <?php echo CHtml::submitButton('',array("id"=>"agregarAutoComplete", "class"=>"btn form-control")); ?>	
        	</div>

  </div>

<br><br><br><br><br><br><br>
  <div class="container" id="Cartaremisora_descripcion" >
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


<div class="col-md-10">
    	<div class="col-md-6">
    		<?php echo $form->labelEx($model,'Direccion'); ?>
    		<?php echo $form->textField($model,'Direccion',array('id'=>"direccion",'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
    		<?php echo $form->error($model,'Direccion'); ?>
    	</div>

    	<div class="col-md-6">
    		<?php echo $form->labelEx($model,'Telefono'); ?>
    		<?php echo $form->textField($model,'Telefono',array('id'=>"telefono" ,'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
    		<?php echo $form->error($model,'Telefono'); ?>
    	</div>
</div>
<br><br><br><br>
  <div class="col-md-10">
        	<div class="col-md-4">
        		<?php echo $form->labelEx($model,'Ciudad'); ?>
        		<?php/*  este metodo de abajo funciona para buscar todos las Ciudad que tiene y asi poder listarlos por
        			letras

        		  */?>
        		
        		<?php
        		if ($model->Ciudad !='') {
                               $value = ($model->Ciudad);
                           } else {
                               $value = '';
                           }
                           echo $form->hiddenField($model, 'Ciudad', array());

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
                            { jQuery("#Cartaremisora_Ciudad").val(ui.item["id"]); }',
                                   'search' => 'js:function(event, ui)
                            { jQuery("#Cartaremisora_Ciudad").val(0); }'
                               ),
                           ));
        		?>

        		<?php echo $form->error($model,'Ciudad'); ?>
        	</div>

        	<div class="col-md-4">
        		<?php echo $form->labelEx($model,'Flete_Pagadero'); ?>
        <?php echo $form->dropDownList($model,'Flete_Pagadero',array(''=>'','Esp.med'=>'Esp.med','Su destino'=>'Su destino',
      ),array('size'=>1,'maxlength'=>1 ,'id'=>'Flete_Pagadero','class'=>'form-control')); ?>
        		<?php echo $form->error($model,'Flete_Pagadero'); ?>
        	</div>

        	<div class="col-md-4">
        		<?php echo $form->labelEx($model,'Numero_Factura'); ?>
        		<?php echo $form->textField($model,'Numero_Factura',array('id'=>"numerofactura",'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
        		<?php echo $form->error($model,'Numero_Factura'); ?>
        	</div>

    </div>

	<div class="col-md-10">

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'Valor_Total'); ?>
		<?php echo $form->textField($model,'Valor_Total',array('id'=>"valorTotalCarta",'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Valor_Total'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'Numero_Bultos'); ?>
		<?php echo $form->textField($model,'Numero_Bultos',array('id'=>"numerodebulto",'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Numero_Bultos'); ?>
	</div>



	<div  class="col-md-4">
		<?php echo $form->labelEx($model,'EmpresaTrasportadora'); ?>
		<?php/*  este metodo de abajo funciona para buscar todos los Empresa que tiene y asi poder listarlos por
              letras

              */?>

			<?php
		if ($model->Empresa !='') {
                       $value = ($model->Empresa);
                   } else {
                       $value = '';
                   }
                   echo $form->hiddenField($model, 'Empresa', array());

                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                       'name' => 'NombreEmpresa',
                       'model' => $model,
                       'value' => $value,
                       'htmlOptions'=>array('class'=>'form-control'),
                       'sourceUrl' => $this->createUrl('ListarEmpresas'),
                       'options' => array(
                           'minLength' => '2',
                           'showAnim' => 'fold',
                           'select' => 'js:function(event, ui)
                    { jQuery("#Cartaremisora_Empresa").val(ui.item["id"]); }',
                           'search' => 'js:function(event, ui)
                    { jQuery("#Cartaremisora_Empresa").val(0); }'
                       ),
                   ));
		?>


		<?php echo $form->error($model,'Empresa'); ?>
	</div>

	<div  style="display: none" >
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>10000,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div style="display: none">
		<?php echo $form->labelEx($model,'consecutivo'); ?>
		<?php echo $form->textField($model,'consecutivo',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'consecutivo'); ?>
	</div>
</div>
<br><br><br><br><br><br><br><br>

	<div class="buttons col-md-10" align="center">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br>
	</div>

</div>
<?php $this->endWidget(); ?>
<div class="col-md-1"></div>

</div><!-- form -->










