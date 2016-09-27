
<script type="text/javascript" >
 $(document).ready(function(){



    $("#buscar").on("click",function (event){
         event.preventDefault();
    	var evaluar= $("#tipodeBusqueda").val();
        var texto= $("#textoBuscar").val();

        if (texto!="") {
            if (evaluar=="Cc") {
                    
             
               
               if (!isNaN(texto)) {
                        // alert(texto);
                        //   var direccion= $("#direccion").val();
                        //    var telefono= $("#telefono").val();
                        //    var valor="0";
                        $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/guardarTexto", {texto: texto,evaluar:evaluar},
                        function(data) {                            
                           document.location.href =("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/buscar");

                        })
                    }else{

                        alert("no es valor numerico")
                }
            ;
            }

                     if(evaluar=="NombreCompleto")  {
                    
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
                              
                               
                                           $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/guardarTexto", {texto: texto, evaluar:evaluar},
                                        function(data) {                            
                                           document.location.href =("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/buscar");

                                        })
                         }else{
                          alert("hay valores numericos y texto porfavor verificar")
                         };
                         
                            
                          };
                        
            };

           }else{
            alert("el campo a buscar esta vacio");
           }; 
           
    });



});
</script>


<div class="col-md-4"></div>
<div class="col-md-4">
     <div >
            tipo de busqueda
            <?php echo CHtml::dropDownList('listname',"", 
              array('Cc' => 'Cc', 'NombreCompleto' => 'NombreCompleto'),array('size'=>1,'maxlength'=>1 ,'id'=>"tipodeBusqueda",'class'=>'form-control','')); ?>
        <br>
    </div>
	<div>
        buscar
		<?php echo CHtml::textField('Text', '',array('id'=>'textoBuscar','size'=>50,'maxlength'=>50 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
	</div>

	<div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	
	</div>
</div>
<div class="col-md-4"></div>
