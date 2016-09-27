   <?php
                           $familiar=Yii::app()->session['arrFamiliar']; 
                          $arrFamiliar=array();
                            for ($i=0; $i <count($familiar); $i++) { 

                                  $titulo=$i;
                                  $valor=$i;
                            $item = (object)array('titulo'=>$familiar[$i]['descripcion'], 'valor'=>$familiar[$i]['descripcion']);
                                    array_push($arrFamiliar,$item);
                           
                                
                            }
                           
                             $data =$arrFamiliar;
                             //echo $data[0];

                           
                          ?>

<script type="text/javascript">

   $("#buscar").on("click",function (event){
          
           alert("");
            
    });

function onCambioDeOpcion(combobox) {
    alert("Seleccionaste: " + combobox[combobox.selectedIndex].text + " \nSu valor es: " + combobox.value);
  }
</script>
<div class="col-md-4"></div>
<div class="col-md-4">
    
            <select class=" form-control select_autor" name="autor" onchange="onCambioDeOpcion(this)" >
            <option selected="selected">Seleccione Descripcion</option>
           <?php 
              for($i=0; $i<count($data); $i++)
              {
              ?>
                  <option id="combo"value="<?php echo $data[$i]->valor ?>"><?php echo $data[$i]->titulo ?></option>
              <?php
              }
              ?>
           </select>
            <div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
  
  </div>  </div><div class="col-md-4"></div>