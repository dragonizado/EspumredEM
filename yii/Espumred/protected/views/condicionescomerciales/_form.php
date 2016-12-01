<?php

   $Registro=Yii::app()->session['Registro'];
   
?>

<style type="text/css">
.CTX
{
  text-align: center !important;
  margin-top:1%; 
}
.CTX .form-inline input{
  width: 86%;
}
</style>


<div class="form">


<?php $form=$this->beginWidget('CActiveForm', array(
  'id'=>'condicionescomerciales-form',
  // Please note: When you enable ajax validation, make sure the corresponding
  // controller action is handling ajax validation correctly.
  // There is a call to performAjaxValidation() commented in generated controller code.
  // See class documentation of CActiveForm for details on this.
  'enableAjaxValidation'=>false,
)); ?>


   <?php echo $form->errorSummary($model); ?>
    
  
      <div class="col-md-12">
  <center><p class="note">Los campos con <span class="required">*</span> son requeridos</p></center>


  <div class="col-md-4 CTX">
    <?php echo $form->labelEx($model,'NombreCliente*'); ?>
    <?php //echo $form->textField($model,'provedor',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
    <?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
          relacionado con la tabla de municipio que tiene y asi poder listarlos por letras*/
        if ($model->nombreCliente !='') {
                             $value = ($model->nombreCliente);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model,'nombreCliente', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'nombreCliente',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarClientes'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event,ui)
                                 
                          { jQuery("#Condicionescomerciales_nombreCliente").val(ui.item["value"]);
                            $("#cod").val(ui.item["id"]);
                           }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                             ),
                         ));

      ?>
    
    <?php echo $form->error($model,'nombreCliente'); ?>
    </div>

    <div class="col-md-4 CTX" >      
     <?php echo $form->labelEx($model,'Codigo*'); ?>
     <?php echo $form->textField($model,'cod' ,array('size'=>10,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod' ,'readonly' => "readonly" )); ?>
     <?php echo $form->error($model,'cod'); ?>
  </div>
  
   <div>
   
  </div>

  
    <div class="col-md-4 CTX">
      <?php echo $form->labelEx($model,'Nombre Asesor*'); ?>
      <?php echo $form->textField($model,'nombreAsesor' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'nombreAsesor','value'=> Yii::app()->user->Nombre . Yii::app()->user->Apellido,'readonly' => "readonly" )); ?>
      <?php echo $form->error($model,'nombreAsesor'); ?> 
    </div>

    
    <div class="col-md-4 CTX">
     <?php echo $form->labelEx($model,'Tipologia Cliente*'); ?>
     <?php echo $form->textField($model,'TipologiaCliente' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'TipologiaCliente',"style"=>"text-transform:uppercase;" )); ?>
     <?php echo $form->error($model,'TipologiaCliente'); ?>
    </div>        


   <div class="col-md-4 CTX">
         <?php echo $form->labelEx($model,'VigenciaDesde* '); ?>
         <div class="form-inline">
         <?php 
        /*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
                          if ($model->vigenciadesde != '') {
                                      $model->vigenciadesde = date('d-m-Y', strtotime($model->vigenciadesde));
                                  }
                            //forma de mostrar un calendario mas elegante en el formulario.
                                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                      'model' => $model,
                                      'attribute' => 'vigenciadesde',
                                      'value' => $model->vigenciadesde,
                                      'language' => 'es',
                                      'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
                                      'options' => array(
                                          'autoSize' => true,
                                          'defaultDate' => $model->vigenciadesde,
                                          'dateFormat' => 'yy-mm-dd',
                                          'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
                                          'buttonImageOnly' => false,
                                          'buttonText' => 'Fecha',  
                                          'selectOtherMonths' => true,
                                          'showAnim' => 'slide',
                                          'showButtonPanel' => true,
                                          'showOn' => 'button',
                                          'showOtherMonths' => true,
                                          'changeMonth' => 'true',
                                          'changeYear' => 'true',
                                          //'yearRange'=>'1920',
                                          'minDate' => '0Y', //fecha minima
                                          //'maxDate' => "+120Y",//fecha maxima
                                      ),
                                  ));
                  
                                      ?>
                                      <?php echo $form->error($model,'vigenciadesde'); ?>

                                  </div>
                     </div>
                     
          <div class="col-md-4 CTX vhasta hidden">
         <?php echo $form->labelEx($model,'VigenciaHasta* '); ?>
         <div class="form-inline">
         <?php 
        /*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
                          if ($model->vigenciahasta != '') {
                                      $model->vigenciahasta = date('d-m-Y', strtotime($model->vigenciahasta));
                                  }
                            //forma de mostrar un calendario mas elegante en el formulario.
                                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                      'model' => $model,
                                      'attribute' => 'vigenciahasta',
                                      'value' => $model->vigenciahasta,
                                      'language' => 'es',
                                      'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
                                      'options' => array(
                                          'autoSize' => true,
                                          'defaultDate' => $model->vigenciahasta,
                                          'dateFormat' => 'yy-mm-dd',
                                          'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
                                          'buttonImageOnly' => false,
                                          'buttonText' => 'Fecha',  
                                          'selectOtherMonths' => true,
                                          'showAnim' => 'slide',
                                          'showButtonPanel' => true,
                                          'showOn' => 'button',
                                          'showOtherMonths' => true,
                                          'changeMonth' => 'true',
                                          'changeYear' => 'true',
                                          //'yearRange'=>'1920',
                                          'minDate' => '0Y', //fecha minima
                                          //'maxDate' => "+120Y",//fecha maxima
                                      ),
                                  ));
                  
                                      ?>
                                      <?php echo $form->error($model,'vigenciahasta'); ?>

                   
                                  </div>
        </div>

  <div class="col-md-2 CTX">
      <?php echo $form->labelEx($model,'Cambio*'); ?>
       <?php echo $form->checkbox($model,'Cambio' ,array('size'=>2,'maxlength'=>2 ,'class'=>'form-control oblcampos','onclick'=>'validad_campos();','id'=>'Cambio', )); ?>
       <?php echo $form->error($model,'Cambio'); ?>              
  </div>
   
  </tr>

  <div class="col-md-2 CTX ">
      <?php echo $form->labelEx($model,'NegPuntual*'); ?>
       <?php echo $form->checkbox($model,'negPuntual' ,array('size'=>2,'maxlength'=>2 ,'class'=>'form-control oblcampos','onclick'=>'validad_campos();','id'=>'negPuntual', )); ?>
       <?php echo $form->error($model,'negPuntual'); ?>              
  </div>

     

     
  <br><br><br><br><br><br><br>
   <div class="buttons col-md-24" align="center">
         <br><br>
        <td>
        <div id="btnvalidar" class="btn btn-primary btn-large">Validar Datos</div>
       <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large hidden","id" => "btnsiguiente")); ?>
      
      </div>
      
      <?php $this->endWidget(); ?>
     </div>
   <div class="col-md-24">
  
  </div>

 </div><!-- form -->

 <script>

// $(document).on("click","#cod",function(event){
//       event.preventDefault();
      
//             document.getElementById("cod").value=$("#Condicionescomerciales_nombreCliente").val();
 


// });

// $('#cod').click(function(){
//   var codigo = $("#Condicionescomerciales_nombreCliente").val(); 

//   $('#cod').val(codigo);
// });

$("#btnvalidar").click(function(){
  validad_campos();
});

function validad_campos(){
  var p = 0;
  $(".oblcampos").each(function(index){
      if($(this).is(':checked')){
        console.log("El campo "+ $(this).attr("id") + "Ha sido llenado correctamente");
      }else{
        p = p + 1;
      }  
      console.log("El valor de p es:"+ p);
  });
console.log("El valor de p al salir del for es:"+ p);
  if(p == 2 ){
        alert("Tienes que seleccionar si la condicon es Cambio o Neg Puntual.");
        $("#btnvalidar").removeClass("hidden");
        $("#btnsiguiente").addClass("hidden");
      }else{
        $("#btnsiguiente").removeClass("hidden");
        $("#btnvalidar").addClass("hidden");
      }
}

$("#negPuntual").click(function(){
  if($("#negPuntual").is(':checked')){
    $(".vhasta").removeClass("hidden");
  }else{
    $(".vhasta").addClass("hidden");
  }
});

window.onload = cargarPagina;//cargar la primera funcion

  function cargarPagina() {//funcio para cargar pagina cuando se devuelve
      event.preventDefault();
        
            
      var Registros
      var cod = $('#cod').val();
      var nombreCliente = $('#nombreCliente').val();
      var nombreAsesor = $('#nombreAsesor').val();
      var TipologiaCliente = $('#TipologiaCliente').val();
      var vigenciadesde = $('#vigenciadesde').val();
      var vigenciahasta = $('#vigenciahasta').val();
      var Cambio = $('#Cambio').val();
      var negPuntual = $('#negPuntual').val();
      $.ajax({
        url:'<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Condicionescomerciales/cargar',
        data:{cod:cod,
          nombreCliente:nombreCliente,
          nombreAsesor:nombreAsesor,
          TipologiaCliente:TipologiaCliente,
          vigenciadesde:vigenciadesde,
          vigenciahasta:vigenciahasta,
          Cambio:Cambio,
          negPuntual:negPuntual
        },
        dataType: 'json',
        type:'post'
      }).done(function(done){
        alert(done);
      }).error(function(error){console.log("Error al conectar con el servidor")});

      // $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Condicionescomerciales/cargar",
      // function(data) {
      // console.log(data);
      // var Registro = data;
      // var index;
      // Registros = $.parseJSON(Registro);
               
      //   document.getElementById("cod").value=Registros[0]["cod"];
      //   document.getElementById("nombreCliente").value=Registros[0]["nombreCliente"];
      //   document.getElementById("nombreAsesor").value=Registros[0]["nombreAsesor"];
      //   document.getElementById("TipologiaCliente").value=Registros[0]["TipologiaCliente"];
      //   document.getElementById("Condicionescomerciales_vigenciadesde").value=Registros[0]["vigenciadesde"];
      //   document.getElementById("Condicionescomerciales_vigenciahasta").value=Registros[0]["vigenciahasta"];
      //   document.getElementById("Cambio").value=Registros[0]["Cambio"];
      //   document.getElementById("negPuntual").value=Registros[0]["negPuntual"];

                 
      //         });
                          
          }

</script>