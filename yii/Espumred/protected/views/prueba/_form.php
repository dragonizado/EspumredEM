<?php


   
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
  'id'=>'prueba-form',
  // Please note: When you enable ajax validation, make sure the corresponding
  // controller action is handling ajax validation correctly.
  // There is a call to performAjaxValidation() commented in generated controller code.
  // See class documentation of CActiveForm for details on this.
  'enableAjaxValidation'=>false,
)); ?>


   <?php echo $form->errorSummary($model); ?>
    
  
      <div class="col-md-12">
  <center><p class="note">Los campos con <span class="required">*</span> son requeridos</p></center>


  <div class="col-md-4 CTX" >      
     <?php echo $form->labelEx($model,'nombre'); ?>
     <?php echo $form->textField($model,'nombre' ,array('size'=>10,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod' , )); ?>
     <?php echo $form->error($model,'nombre'); ?>
  </div>


  <div class="col-md-4 CTX" >      
     <?php echo $form->labelEx($model,'apellido'); ?>
     <?php echo $form->textField($model,'apellido' ,array('size'=>10,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod' , )); ?>
     <?php echo $form->error($model,'apellido'); ?>
  </div>



  <div class="col-md-4 CTX" >      
     <?php echo $form->labelEx($model,'ciudad'); ?>
     <?php echo $form->textField($model,'ciudad' ,array('size'=>10,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod' , )); ?>
     <?php echo $form->error($model,'ciudad'); ?>
  </div>


   
  
   <div class="buttons col-md-24" align="center" style="margin-top:10%;">
         <br><br>
        <td>
       <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
      
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