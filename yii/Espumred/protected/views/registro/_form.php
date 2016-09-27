<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
        //$model=new Mecanicos;

/*$archivo= fopen("/Users/sistemas/Documents/prueba2.txt", "r")
or die("problema al abrir prueba2.txt");
$id="";
$cuerpo="";
$cont="0";
while (!feof($archivo)) {
    $atraer=fgets($archivo);
    // for ($i=0; $i <count($atraer) ; $i++) { 
    //    if ($atraer=="*"&&$cont!="0") {
    //        $cuerpo=$cuerpo.$atraer[$i];
    //        $cont++;
    //    }else{

    //     $id=$id.$atraer[$i];
    //    }
    // }
    //  //$saltodelinea= n12br($traer);
    //  echo $id.$cuerpo."<br>";
    $ejemplo = strlen($atraer);

}*/
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
     mostrarArticulos();

// funcion que inica al darle clic al boton de agregar el cual tiene un icono de ingreso
        function myFunction() {
                  
                  event.preventDefault();
                  var carritoActual;
                  var cantidad= $("#cantidad").val();
                  var ubicacion= $("#ubicacion").val();
                  var tipo= $("#tipo").val();
                  var descripcion = $("#descripcion").val();  
                  var idMecanico= $("#idMecanico").val();
                  var Registro_idMecanico=$("#Registro_idMecanico").val();
                  var Registro_descripcion=$("#Registro_descripcion").val();
                  //  alert(cantidad);
                  // alert(ubicacion);
                  // alert(tipo);
                  // alert(descripcion);
                  // alert(idMecanico);
                  // alert(Registro_idMecanico);
                  // alert(Registro_descripcion);
                
                  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Registro/agregarMecanicos", {cantidad: cantidad, ubicacion:ubicacion, tipo: tipo, descripcion:descripcion,idMecanico: idMecanico,Registro_idMecanico:Registro_idMecanico,Registro_descripcion:Registro_descripcion},
                    function(data) {
                      console.log(data);
                      //var carritoActual = '<?php echo json_encode(Yii::app()->session['Familiar']) ?>';
                        document.getElementById("cantidad").value="";
                        document.getElementById("ubicacion").value="";
                        document.getElementById("tipo").value="";
                        document.getElementById("descripcion").value="";
                        document.getElementById("idMecanico").value="";
                                              
                })

                // // /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
                // //   del . done es que hace el ingreso de manera inmediata*/
                    .done(mostrarArticulos);

        
        }

//funcion para mostrar en pantalla las referencia familiares que ingreso
         function mostrarArticulos() {
            $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Registro/VerRegistros", {},
              function(data) {
                valorTotal=0;
                var Mecanicos = data;
                var arrMecanicos = $.parseJSON(Mecanicos);
               // alert(arrMecanicos);
                arregloCantidad=arrMecanicos;
                console.log(arrMecanicos);
               


                var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

                for(var i=0; i< arrMecanicos.length ;i++){
                             
                               form = form+ 
                               "<div width='100%'>"
                                 + "<div class='col-md-3 col-xs-4'>"+arrMecanicos[i][4]+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrMecanicos[i][3]+"</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrMecanicos[i][0]+"</div>"                                     
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrMecanicos[i][1]+
                                             "</div>"
                                             +"<div align='right'  class='col-md-2 col-xs-2'>"+arrMecanicos[i][2]+
                                             "</div>"
                                             
                                              

                                              +"<button value='"+arrMecanicos[i][4]+"' id="
                                             +arrMecanicos[i][4]+" class='btnEliminar btn'></button>" +"</div>";
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
            
             $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Informacionfamiliar/Actualizar", {idEliminar: idEliminar},
                 function(data) {
                  console.log(data);             
             })      
            $(this).parent().remove();
    
});



</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


<div class="col-md-12">
	
	<?php echo $form->errorSummary($model); ?>


		<div class="col-md-4">
		<?php echo $form->labelEx($model,'Mecanico'); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->idMecanico !='') {
                             $value = ($model->idMecanico);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'idMecanico', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'idMecanico',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('listarMecanico'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Registro_idMecanico").val(ui.item["cc"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Registro_idMecanico").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'idMecanico'); ?>
	</div>



		<div class="col-md-4">
		<?php echo $form->labelEx($model,'Herramienta'); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->descripcion !='') {
                             $value = ($model->descripcion);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'descripcion', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'descripcion',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarHerramientas'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Registro_descripcion").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Registro_descripcion").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

    <div class="col-md-4">
        <?php echo $form->labelEx($model,'Cantidad'); ?>
        <?php echo $form->textField($model,'cantidad',array('size'=>45,'maxlength'=>45,'class'=>'form-control','id'=>'cantidad')); ?>
        <?php echo $form->error($model,'cantidad'); ?>
    </div>

    <div class="col-md-4">
        <?php echo $form->labelEx($model,'Ubicacion'); ?>
        <?php echo $form->textField($model,'ubicacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control','id'=>'ubicacion')); ?>
        <?php echo $form->error($model,'ubicacion'); ?>
    </div>


    <div class="col-md-4">
        <?php echo $form->labelEx($model,'tipo'); ?>
        <?php echo $form->dropDownList($model,'tipo',array(''=>'','Herramienta Personal' => 'Herramienta Personal', 'Herramienta Planta' => 'Herramienta Planta'
        ),array('size'=>1,'maxlength'=>1,'class'=>'form-control','id'=>"tipo")); ?>
        <?php echo $form->error($model,'tipo'); ?>
    </div>

   
	
</div>



<div class="col-md-12">
     <div align="center" class="buttons">
<?php echo CHtml::button('',array("id"=>"agregarAutoComplete", "class"=>" form-control", "onclick"=>"myFunction()")); ?>    </div>
<div class="container" id="Cartaremisora_descripcion" >
       </br></br>
          <div class="panel panel-default">
                 <div class="panel-heading col-md-4">
                    <h3 class="panel-title">Mecanicco <span class="glyphicon"></span></h3>
                  </div>
                  <div class="panel-heading col-md-2">
                    <h3 aling="center" class="panel-title">Herramienta <span class="glyphicon"></span></h3>
                  </div>
                  <div class="panel-heading col-md-2">
                    <h3 class="panel-title">Cantidad <span class="glyphicon"></span></h3>
                  </div>
                  <div class="panel-heading col-md-2">
                    <h3 class="panel-title">Ubicacion <span class="glyphicon"></span></h3>
                  </div>
                  <div class="panel-heading col-md-2">
                    <h3 class="panel-title">tipo <span class="glyphicon"></span></h3>
                  </div>
                          
            <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
          </div>  
      
  </div>
 </div>


  <br>
    <div align="center" class="buttons">
         <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
    </div>
    <br>
<?php $this->endWidget(); ?>
</div><!-- form -->

