<?php


?>




<script type="text/javascript" >
 $(document).ready(function(){


      $("#buscar").on("click",function (event){
         event.preventDefault();
         var id= $("#textoBuscar").val();
        	var tipodeBusqueda= $("#tipodeBusqueda").val();
        	if (tipodeBusqueda=="Referencia") {
        		if (id!="") {
    		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=formacion/cargarFormacion",{id: id},
					    function(data) {
					    	//console.log(data);
					    	 var Espuma = data;
					    	 var array= $.parseJSON(Espuma);
					    	 var arrEspuma = array[0];
					    	 var arrFormacion =array[1];
					    	 console.log(arrFormacion.length);
					    	 var arrDescargo = array[2];
					
                          var form = "<form id='formulariocarrito' method='POST' action='#'>";
                          
 					form = form+                           

							"<br><table class='table table-hover'>"+
							      "<thead>"+
							      "<tr align='center'>"+
							     
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>LOTE</th>"+
							      		
							      	"</tr>"+
							        "<tr>"+
							         "<th>codLote </th>"+
									 "<th>tipoEspuma </th>"+
									 "<th>densidad </th>"+
									 "<th>altura </th>"+
									 "<th>ancho </th>"+
									 "<th>largo </th>"+
									 "<th>peso </th>"+
									 "<th>Fecha Creacion </th>"+
							        "</tr>"+
							      "</thead>"+ "<tbody>";             
							        form = form+ "<tr>"+
							          "<td>"+arrEspuma["codLote"]+"</td>"+
							          "<td>"+arrEspuma["tipoEspuma"]+"</td>"+
							           "<td>"+arrEspuma["densidad"]+"</td>"+
							          "<td>"+arrEspuma["altura"]+"</td>"+
							           "<td>"+arrEspuma["ancho"]+"</td>"+
							          "<td>"+arrEspuma["largo"]+"</td>"+
							          "<td>"+arrEspuma["peso"]+"</td>"+
							          "<td>"+arrEspuma["Fecha_Creacion"]+"</td>"+
							          "</tr>"+
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>BLOQUES FORMADOS</th>"+
							      	"</tr>"+
							          "<tr>"+
							          "<th>consecutivo</th>"+
							          "<th></th>"+
							          "<th>densidad</th>"+
							           "<th>altura</th>"+
							          "<th>ancho</th>"+
							          "<th>largo</th>"+
							          "<th>peso</th>"+							        
							         "<th>Fecha_Creacion</th>"+  
							        "</tr>"+
							      "</thead>"+ "<tbody>";
							    
							      	 for (var i=0; i< arrFormacion.length;i++) {
									  form = form+ "<tr>"+  
							          "<td>"+arrFormacion[i]["cod"]+"</td>"+
							           "<td>"+"     "+"</td>"+
							          "<td>"+arrFormacion[i]["densidad"]+"</td>"+
							          "<td>"+arrFormacion[i]["altura"]+"</td>"+
							           "<td>"+arrFormacion[i]["ancho"]+"</td>"+
							          "<td>"+arrFormacion[i]["largo"]+"</td>"+
							          "<td>"+arrFormacion[i]["peso"]+"</td>"+							          
							           "<td>"+arrFormacion[i]["Fecha_Creacion"]+"</td>"+
							          "</tr>";
							            } 
							         form = form+"<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>KILOS BLOQUE USADO</th>"+
							      	"</tr>"+
							          "<tr>"+
							          "<th >consecutivo</th>"+
							          "<th ></th>"+
							          "<th >cantidadConsumida</th>"+
							           "<th></th>"+
							          "<th >codigosap</th>"+
							          "<th ></th>"+
							          "<th >Fecha_Creacion</th>"+  
							        "</tr>"+
							      "</thead>"+ "<tbody>"							  
									"</thead>"+ "<tbody>";
							      for (var i=0; i< arrDescargo.length;i++) {
									  form = form+ "<tr>"+  
							      
							          "<td align='center'>"+arrDescargo[i]["idCargarespumas"]+"</td>"+
							          "<td>"+"    "+"</td>"+
							          "<td align='center'>"+arrDescargo[i]["cantidadConsumida"]+"</td>"+
							          "<td>"+"    "+"</td>"+
							          "<td align='center'>"+arrDescargo[i]["consecutivo"]+"</td>"+
							          "<td>"+"    "+"</td>"+
							          "<td align='center'>"+arrDescargo[i]["Fecha_Creacion"]+"</td>"+
							          "</tr>";
							              }
                          form = form + "<tr><td></td><td></td><td></td><td></td><td></td></tr>"+"</tbody>"+
							"</table>"+"</form>";                          

                           $("#formulario").html(form);
                             $("#formulario").show();
					        $("#boton").show();
					     })
			}else {
				alert("el campo a buscar esta vacio");
			}

		};

		if (tipodeBusqueda=="TipoBloquesCortados") {
					event.preventDefault();

					var arrEspuma;
					if ( document.getElementById("tipodefecha").value=="Unica Fecha") {
          				var fecha= $("#fechaBuscar").val();
          				var desicion="unica"
          				console.log(desicion);
				     	 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=formacion/tipoBloque",{fecha:fecha,desicion:desicion},
					    function(data) {
					    	console.log(data);
					    	 arrEspuma = $.parseJSON(data);
 				    	 	var suma=0;
				    	  
					    	  var Primera=0;
					    	  var Segunda=0;
					    	  var Rota=0;
							  var resta=0;
					    	  for (var i=0; i< arrEspuma.length;i++) {
					    	  		if (arrEspuma[i]["tipo"]=="Primera") {
									  Primera++;
							        }
							        if (arrEspuma[i]["tipo"]=="Segunda") {
									  Segunda++;
							        }
							        
					    	  };

                           var form = "<form id='formulariocarrito2' method='POST' action='#'>";

 					form = form+                           

							"<br><table class='table table-hover'>"+
							      "<thead>"+
							      "<tr align='center'>"+
							     
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Bloque de Primeras</th>"+
							      		
							      	"</tr>"+
							        "<tr>"+
							         "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
									  "</tr>"+
							      "</thead>"+ "<tbody>";   

							      for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Primera") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["cod"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							      
							          "</tr>"
							          
							          	}
							         }
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Primera+"</td>"+  
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Bloque de Segundas</th>"+
							      	"</tr>"+
							          "<tr>"+
							            "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
							          
							        "</tr>"+
							      "</thead>"+ "<tbody>";

							   
							        for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Segunda") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["cod"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							        
							         "</tr>";
							          	suma++
							          	}
							         }
							       
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Segunda+"</td>";
						
							            
							       
                          form = form + "<td></td>"+"<td></td>"+"<td></td>"+ "<tr><td></td><td></td><td></td><td></td><td></td></tr>"+"</tbody>"+
						"</table>"+"</form>";
                          

                            $("#formulario").html(form);
                             $("#formulario").show();
					       $("#boton").show();

					     



					    	  })


				     }else{
				     	var desicion="varias"
				     	var fechaInicio=$("#fecha1Buscar").val();
				     	var fechaFinal=$("#fecha2Buscar").val();
				     	var mes1=fechaInicio.substr(5,2);
				     	var mes2=fechaFinal.substr(5,2);
				     	var resultado=mes1-mes2;
				     

				     	if (fechaInicio!=fechaFinal&&fechaInicio!=" "&&fechaFinal!=" ") {
				  			
				  			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=formacion/tipoBloque",{fechaInicio:fechaInicio,fechaFinal:fechaFinal,desicion:desicion},
					    function(data) {
					    	//console.log(data);
					    	 arrEspuma = $.parseJSON(data);

					    	 	var suma=0;
				    	  
					    	  var Primera=0;
					    	  var Segunda=0;
					    	  var Rota=0;
							  var resta=0;
					    	  for (var i=0; i< arrEspuma.length;i++) {
					    	  		if (arrEspuma[i]["tipo"]=="Primera") {
									  Primera++;
							        }
							        if (arrEspuma[i]["tipo"]=="Segunda") {
									  Segunda++;
							        }
							        
					    	  };


                           var form = "<form id='formulariocarrito2' method='POST' action='#'>";

 					form = form+                           

							"<br><table class='table table-hover'>"+
							      "<thead>"+
							      "<tr align='center'>"+
							     
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Bloque de Primeras</th>"+
							      		
							      	"</tr>"+
							        "<tr>"+
							         "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
									  "</tr>"+
							      "</thead>"+ "<tbody>";   

							      for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Primera") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["cod"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							      
							          "</tr>"
							          
							          	}
							         }
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Primera+"</td>"+  
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Bloque de Segundas</th>"+
							      	"</tr>"+
							          "<tr>"+
							            "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
							          
							        "</tr>"+
							      "</thead>"+ "<tbody>";

							   
							        for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Segunda") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["cod"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							        
							         "</tr>";
							          	suma++
							          	}
							         }
							       
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Segunda+"</td>";
						
							            
							       
                          form = form + "<td></td>"+"<td></td>"+"<td></td>"+ "<tr><td></td><td></td><td></td><td></td><td></td></tr>"+"</tbody>"+
						"</table>"+"</form>";
                          

                            $("#formulario").html(form);
                            
					       $("#boton").show();
					        $("#formulario").show();
					     
					    	  })


					}else{
						alert("por favor verificar las fechas ingresadas ");
					};

				     };

		};

		if (tipodeBusqueda=="Descuadres") {
					event.preventDefault();
        		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=formacion/descuadre",
					    function(data) {
					    	console.log(data);
					    	 var Espuma = data;
					   	 var suma=0;
					     	  var arrEspuma = $.parseJSON(Espuma);
					
                        var form = "<form id='formulariocarrito2' method='POST' action='#'>";

 					form = form+                           

							"<br><table class='table table-hover'>"+
							      "<thead>"+
							      "<tr align='center'>"+
							     
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Primera</th>"+
							      		
							      	"</tr>"+
							        "<tr>"+
							         "<th>id </th>"+
									 "<th>altura </th>"+
									 "<th>ancho </th>"+
									 "<th>largo </th>"+
									 "<th>densidad </th>"+
									 "<th>codlote </th>"+
									 "<th>Fecha_Creacion </th>"+
						 		  "</tr>"+
							      "</thead>"+ "<tbody>";   

							      for (var i=0; i< arrEspuma.length;i++) {
							      	
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["cod"]+"</td>"+
							          "<td>"+arrEspuma[i]["altura"]+"</td>"+
							          "<td>"+arrEspuma[i]["ancho"]+"</td>"+
							          "<td>"+arrEspuma[i]["largo"]+"</td>"+
							          "<td>"+arrEspuma[i]["densidad"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							   
							          
							          "</tr>"
							         
							          	}
							         
							                   
							        
                          form = form + "<td></td>"+"<td></td>"+"<td></td>"+"</tbody>"+
						"</table>"+"</form>";
                          

                            $("#formulario").html(form);
                            $("#formulario").show();
                            
					       $("#boton").show();
					     })

		};

    });

formulario


$(document).on("change","#tipodeBusqueda",function(event){
		event.preventDefault();
  /* funcion  se activa cuando hay un cambio en el campo sexo el cual si es femenino esconderia los campos de libreta militar y clase de libreta militar*/
     if ( document.getElementById("tipodeBusqueda").value=="Descuadres") {
       	
     	$("#texto").hide();
     	$("#tipofecha").hide();
     	$("#fecha").hide();
  		$("#formulario").hide();

     }else{
  			if (document.getElementById("tipodeBusqueda").value=="TipoBloquesCortados") {
  				$("#texto").hide();
  				$("#tipofecha").show();
  				$("#formulario").hide();
  			}else{
  				$("#texto").show();
  				$("#tipofecha").hide();
  				$("#fecha").hide();
  				$("#formulario").hide();


  			};
     		
     };

	});


$(document).on("change","#tipofecha",function(event){
		event.preventDefault();
  /* funcion  se activa cuando hay un cambio en el campo sexo el cual si es femenino esconderia los campos de libreta militar y clase de libreta militar*/
     if ( document.getElementById("tipodefecha").value=="Unica Fecha") {
          	
     	$("#fecha").show();
     	$("#fecha2").hide();
     	$("#formulario").hide();
     }else{  			
  				$("#fecha").hide();
  				$("#fecha2").show();
  				$("#formulario").hide();
     };

	});


	


});
</script>


<div class="col-md-4"></div>
<div class="col-md-4">
     <div >
            Tipo de Busqueda
            <?php echo CHtml::dropDownList('listname',"", 
              array('Referencia' => 'Referencia','TipoBloquesCortados' => 'TipoBloquesCortados','Descuadres'=>'Bloques Sin Cargar' ),array('size'=>1,'maxlength'=>1 ,'id'=>"tipodeBusqueda",'class'=>'form-control','')); ?>
        <br>
    </div>

    <div id="texto">
        Buscar
		<?php echo CHtml::textField('Text', '',array('id'=>'textoBuscar','size'=>50,'maxlength'=>50 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
	</div>


	<div id="tipofecha" style="display: none">
        Tipo de Fecha
		<?php echo CHtml::dropDownList('listname',"", 
              array(' ' => '---- Tipo de Busqueda ----', 'Unica Fecha' => 'Unica Fecha','Rango Fecha' => 'Rango Fecha'),array('size'=>1,'maxlength'=>1 ,'id'=>"tipodefecha",'class'=>'form-control','')); ?>
	</div>

	
	<div id="fecha" style="display: none">
        Fecha


        	<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->Fecha_Creacion != '') {
	                                    $model->Fecha_Creacion = date('d-m-Y', strtotime($model->Fecha_Creacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'Fecha_Creacion',
	                                    'value' => $model->Fecha_Creacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fechaBuscar'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->Fecha_Creacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		
	</div>


	<div id="fecha2" style="display: none">
			<div class="col-md-6">
		        Fecha Inicio
				  	<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->Fecha_Creacion != '') {
	                                    $model->Fecha_Creacion = date('d-m-Y', strtotime($model->Fecha_Creacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'Fecha_Creacion',
	                                    'value' => $model->Fecha_Creacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha1Buscar'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->Fecha_Creacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
			</div>


			<div class="col-md-6">
		        Fecha Final
				  	<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->Fecha_Creacion != '') {
	                                    $model->Fecha_Creacion = date('d-m-Y', strtotime($model->Fecha_Creacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'Fecha_Creacion',
	                                    'value' => $model->Fecha_Creacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha2Buscar'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->Fecha_Creacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
			</br>
			</br></br>
			</div>
			
	</div>



	<div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	</br></br>
	</div>
</div>
<div class="col-md-4"></div>

<div id="formulario">

	</div>
