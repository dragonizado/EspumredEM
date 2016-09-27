<?php

$arrFamiliar=array();
   $data =$item = (object)array('titulo'=>0, 'valor'=>0);


 
?>

<script type="text/javascript" >
 $(document).ready(function(){



    $("#buscar").on("click",function (event){
         event.preventDefault();
    	var evaluar= $("#tipodeBusqueda").val();
        var evaluarVista= $("#actualizar").val();
        var texto= $("#textoBuscar").val();

        if (texto!="" && evaluarVista!="") {
            if (evaluar=="Cod") {
                    
            
               if (!isNaN(texto)) {
                        // alert(texto);
                        //   var direccion= $("#direccion").val();
                        //    var telefono= $("#telefono").val();
                        //    var valor="0";
                        
               
                        $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/guardarTextoActualizar", {texto: texto,evaluar:evaluar,evaluarVista:evaluarVista},
                        function(data) {                            
                           document.location.href =("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/actualizarVista");
                           
                        })
                    }else{

                        alert("no es valor numerico");
                }
            
            };
                if(evaluar=="Nombre Cliente")  {
                    
                    var indicador=0;
                    for (var i =0 ; i <texto.length; i++) {

                        if (isFinite(texto[i])) {
                            if (texto[i]!=" ") {
                               indicador=1;
                            };
                         
                        
                         };
                    };
                      
                    if (isFinite(texto)) {  
                            alert("hay valores numericos porfavor ingrese solo texto");
                        }else{
                         
                         if (indicador=="0") {
                             
                              $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/guardarTextoActualizar", {texto: texto,evaluar:evaluar,evaluarVista:evaluarVista},
                                                  function(data) {                            
                                                     document.location.href =("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/actualizarVista");

                               })
                         }else{
                          alert("hay valores numericos y texto porfavor verificar")
                         };
                         
                            
                          };
                        
                };


           }else{
            alert("el campo a buscar ? a actualizar esta vacio");
           }; 
           
    });







$(document).on("change","#actualizar",function(event){
      event.preventDefault();
      var evaluarVista= $("#actualizar").val();
      if (evaluarVista=="Condicionescomerciales") {
               $("#element").show();
                
      }else{
                  $("#element").hide();

      };

        
    });


});
</script>


<div class="col-md-4"></div>
<div class="col-md-4">
     <div >
            Tipo de busqueda
            <?php echo CHtml::dropDownList('listname',"", 
              array('Cod' => 'Cod', 'nombreCliente' => 'nombreCliente'),array('size'=>1,'maxlength'=>1 ,'id'=>"tipodeBusqueda",'class'=>'form-control','')); ?>
        <br>
    </div>

    <div>
        Que desea actualizar
        <?php echo CHtml::dropDownList('sexo',"",array(''=>'',


    'Condicionescomerciales'=>'Condiciones Comerciales',
    'Descripcion'=>'Descripcion',
    'Observaciones'=>'Observaciones',
    'Todo'=>'Todo',),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control', 'id'=>'actualizar')); ?>
     
    </div>  

    <div>
        Buscar
        <?php echo CHtml::textField('Text', '',array('id'=>'textoBuscar','size'=>50,'maxlength'=>50 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
    </div>


 
	<div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	
	</div>
</div>
<div class="col-md-4"></div>



