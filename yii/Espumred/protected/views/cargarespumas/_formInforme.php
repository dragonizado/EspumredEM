
<script type="text/javascript" >
 $(document).ready(function(){



      $("#buscar").on("click",function (event){
         event.preventDefault();
         var id= $("#textoBuscar").val();
        	var tipodeBusqueda= $("#tipodeBusqueda").val();
        	if (tipodeBusqueda=="Referencia") {
        		if (id!="") {
    		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/cargar",{id: id},
					    function(data) {
					    	console.log(data);
					    	 var Espuma = data;
					    	  var arrEspuma = $.parseJSON(Espuma);
					
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
							          "<td>"+arrEspuma[1]["codLote"]+"</td>"+
							          "<td>"+arrEspuma[1]["tipoEspuma"]+"</td>"+
							           "<td>"+arrEspuma[1]["densidad"]+"</td>"+
							          "<td>"+arrEspuma[1]["altura"]+"</td>"+
							           "<td>"+arrEspuma[1]["ancho"]+"</td>"+
							          "<td>"+arrEspuma[1]["largo"]+"</td>"+
							          "<td>"+arrEspuma[1]["peso"]+"</td>"+
							          "<td>"+arrEspuma[1]["Fecha_Creacion"]+"</td>"+
							          "</tr>"+
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>FORMACIONES</th>"+
							      	"</tr>"+
							          "<tr>"+
							          "<th>cod</th>"+
							          "<th>altura</th>"+
							          "<th>ancho</th>"+
							          "<th>largo</th>"+
							          "<th>peso</th>"+
							           "<th>Fecha_Creacion</th>"+
							       				         
							        "</tr>"+
							      "</thead>"+ "<tbody>"
							      + "<tr>"+
							          "<td>"+arrEspuma[2]["cod"]+"</td>"+
							          "<td>"+arrEspuma[2]["altura"]+"</td>"+
							           "<td>"+arrEspuma[2]["ancho"]+"</td>"+
							          "<td>"+arrEspuma[2]["largo"]+"</td>"+
							          "<td>"+arrEspuma[2]["peso"]+"</td>"+
							          "<td>"+arrEspuma[2]["Fecha_Creacion"]+"</td>"+
							          "</tr>"+
							           "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>BLOQUES FORMADOS</th>"+
							      	"</tr>"+
							          "<tr>"+
							          "<th>consecutivo</th>"+
							          "<th>altura</th>"+
							          "<th>ancho</th>"+
							          "<th>largo</th>"+
							          "<th>peso</th>"+
							         "<th>codigosap</th>"+
							          "<th>tipo</th>"+
							          "<th>Fecha_Creacion</th>"+  
							        "</tr>"+
							      "</thead>"+ "<tbody>"
							    
							      	
							  
							      + "<tr>"+
							          "<td>"+arrEspuma[0]["id"]+"</td>"+
							          "<td>"+arrEspuma[0]["altura"]+"</td>"+
							           "<td>"+arrEspuma[0]["ancho"]+"</td>"+
							          "<td>"+arrEspuma[0]["largo"]+"</td>"+
							          "<td>"+arrEspuma[0]["cantidadKilo"]+"</td>"+
							          "<td>"+arrEspuma[0]["codigosap"]+"</td>"+
							          "<td>"+arrEspuma[0]["tipo"]+"</td>"+
							          "<td>"+arrEspuma[0]["Fecha_Creacion"]+"</td>"+
							          "</tr>"+
							            
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>KILOS BLOQUE USADO</th>"+
							      	"</tr>"+
							          "<tr>"+
							          "<th>consecutivo</th>"+
							          "<th>cantidadConsumida</th>"+
							          "<th>codigosap</th>"+
							         
							          "<th>Fecha_Creacion</th>"+  
							        "</tr>"+
							      "</thead>"+ "<tbody>"							  
									"</thead>"+ "<tbody>";
							      for (var i=4; i< arrEspuma[3];i++) {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["idCargarespumas"]+"</td>"+
							          "<td>"+arrEspuma[i]["cantidadConsumida"]+"</td>"+
							          "<td>"+arrEspuma[i]["codsap"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							          "</tr>";
							              }
                          form = form + "<tr><td></td><td></td><td></td><td></td><td></td></tr>"+"</tbody>"+
							"</table>"+"</form>";
                          

                           $("#formulario").html(form);
                            
					        $("#boton").show();
					     })
			}else {
				alert("el campo a buscar esta vacio");
			}

		};

		if (tipodeBusqueda=="TipoBloquesCortados") {
					event.preventDefault();
        		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/tipoBloque",
					    function(data) {
					    	console.log(data);
					   	 var Espuma = data;
					   	 var suma=0;

					    	  var arrEspuma = $.parseJSON(Espuma);
					    	  var Primera=0;
					    	  var Segunda=0;
							  var Transición=0;
							  var Rota=0;
							  var resta=0;
					    	  for (var i=0; i< arrEspuma.length;i++) {
					    	  		if (arrEspuma[i]["tipo"]=="Primera") {
									  Primera++;
							        }
							        if (arrEspuma[i]["tipo"]=="Segunda") {
									  Segunda++;
							        }
							        if (arrEspuma[i]["tipo"]=="Transición") {
									  Transición++;
							        }
							        if (arrEspuma[i]["tipo"]=="Rota") {
									  Rota++;
							        }
					    	  };

					    	  if (Primera==0 && Segunda==0 &&Transición==0&&Rota>0) {
					    	  		Rota=100;
					    	  };
					    	   if (Primera==0 && Segunda==0 &&Transición>0&&Rota==0) {
					    	  		Transición=100;
					    	  };
					    	   if (Primera==0 && Segunda>0 &&Transición==0&&Rota==0) {
					    	  		Segunda=100;
					    	  };

					    	   if (Primera>0 && Segunda==0 &&Transición==0&&Rota==0) {
					    	  		Primera=100;
					    	  };

					    	   if (Primera==0 && Segunda==0 &&Transición>0&&Rota>0) {

					    	  		Transición=100-Transición*10; 
					    	  		resta=100-Transición;
					    	  		Rota=resta;
					    	  };

					    	     if (Primera==0 && Segunda>0 &&Transición==0&&Rota>0) {

					    	  		Segunda=100-Segunda*10; 
					    	  		resta=100-Segunda;
					    	  		Rota=resta;
					    	  };

					    	     if (Primera>0 && Segunda==0 &&Transición==0&&Rota>0) {

					    	  		Primera=100-Primera*10; 
					    	  		resta=100-Primera;
					    	  		Rota=resta;
					    	  };

					    	   if (Primera==0 && Segunda>0 &&Transición>0&&Rota==0) {
					    	  		Transición=100-Transición*10;  
					    	  		resta=100-Transición;
					    	  		Transición=resta;
					    	  };

					    	  

					    	   if (Primera>0 && Segunda==0 &&Transición>0&&Rota==0) {
					    	  		Primera=100-Primera*10;  
					    	  		resta=100-primea;
					    	  		Transición=resta;
					    	  };

					    	    if (Primera>0 && Segunda>0 &&Transición==0&&Rota==0) {
					    	  		Primera=100-Primera*10;  
					    	  		resta=100-Primera;
					    	  		Segunda=resta;
					    	  };

					    	  
					    	   if (Primera>0 && Segunda>0 &&Transición>0&&Rota==0) {
					    	  		Primera=100-Primera*10;  
					    	  		Segunda=Segunda*10;
					    	  		Transición=Transición*10;  
					    	  };
					    	    if (Primera>0 && Segunda>0 &&Transición==0&&Rota>0) {
					    	  		Primera=100-Primera*10;  
					    	  		Segunda=Segunda*10;
					    	  		Rota=Rota*10; 
					    	  };
					    	     if (Primera>0 && Segunda==0 &&Transición>0&&Rota>0) {
					    	  		Primera=100-Primera*10;  
					    	  		Transición=Transición*10;
					    	  		Rota=Rota*10; 
					    	  };
					    	  if (Primera==0 && Segunda>0 &&Transición==0&&Rota>0) {
					    	  		Segunda=100-Segunda*10;  
					    	  		Transición=Transición*10;
					    	  		Rota=Rota*10; 
					    	  };
					    	  if (Primera>0 && Segunda>0 &&Transición>0&&Rota>0) {
					    	  		suma=Primera+Transición+Rota+Segunda;
					    	  		suma=Math.round(suma);
					    	  		Primera=(100*Primera)/suma; 
					    	  		Primera=Math.round(Primera); 
					    	  		Transición=(100*Transición)/suma;
					    	  		Transición=Math.round(Transición);
					    	  		Rota=(100*Rota)/suma; 
					    	  		Rota=Math.round(Rota);
					    	  		Segunda=(100*Segunda)/suma; 
					    	  		Segunda=Math.round(Segunda);
					    	  };


					
                           var form = "<form id='formulariocarrito2' method='POST' action='#'>";

 					form = form+                           

							"<br><table class='table table-hover'>"+
							      "<thead>"+
							      "<tr align='center'>"+
							     
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Primera</th>"+
							      		
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
							      
							          "<td>"+arrEspuma[i]["id"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							      
							          "</tr>"
							          
							          	}
							         }
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Primera+"%</td>"+  
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Segunda</th>"+
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
							      
							          "<td>"+arrEspuma[i]["id"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							        
							         "</tr>";
							          	suma++
							          	}
							         }
							       
							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Segunda+"%</td>"+  
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Transición</th>"+
							      	"</tr>"+
							          "<tr>"+
							             "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
							        "</tr>"+
							      "</thead>"+ "<tbody>";
						
							      for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Transición") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["id"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							          "</tr>";
							          	suma++
							          	}
							         }
							        

							                   
							        form = form+"</tbody>"+"<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Transición+"%</td>"+  
							          "<thead>"+
							           "<tr>"+
							      		"<th colspan='12' class'col-md-2' align='center'  style='COLOR: #000000; BACKGROUND-COLOR: #f36815'>Rota</th>"+
							      	"</tr>"+
							          "<tr>"+
							           "<th>cod </th>"+
									 "<th>lote </th>"+
									 "<th>Fecha_Creacion </th>"+
									 "<th>total </th>"+
							       				         
							        "</tr>"+
							      "</thead>"+ "<tbody>";
							      
							       for (var i=0; i< arrEspuma.length;i++) {
							      	if (arrEspuma[i]["tipo"]=="Rota") {
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["id"]+"</td>"+
							          "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							         
							          "</tr>";
							          	}
							         }     
							            
							       
                          form = form + "<td></td>"+"<td></td>"+"<td></td>"+"<td>"+Rota+"%</td>"+ "<tr><td></td><td></td><td></td><td></td><td></td></tr>"+"</tbody>"+
						"</table>"+"</form>";
                          

                            $("#formulario").html(form);
                            
					       $("#boton").show();
					     })

		};

		if (tipodeBusqueda=="Descuadres") {
					event.preventDefault();
        		   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=cargarespumas/descuadre",
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
									 "<th>cantidadKilo </th>"+
									 "<th>codlote </th>"+
									 "<th>tipo </th>"+
									 "<th>codigosap </th>"+
									 "<th>Fecha_Creacion </th>"+
						 		  "</tr>"+
							      "</thead>"+ "<tbody>";   

							      for (var i=0; i< arrEspuma.length;i++) {
							      	
									  form = form+ "<tr>"+  
							      
							          "<td>"+arrEspuma[i]["id"]+"</td>"+
							          "<td>"+arrEspuma[i]["altura"]+"</td>"+
							          "<td>"+arrEspuma[i]["ancho"]+"</td>"+
							          "<td>"+arrEspuma[i]["largo"]+"</td>"+
							          "<td>"+arrEspuma[i]["densidad"]+"</td>"+
							          "<td>"+arrEspuma[i]["cantidadKilo"]+"</td>"+
							           "<td>"+arrEspuma[i]["codlote"]+"</td>"+
							          "<td>"+arrEspuma[i]["tipo"]+"</td>"+
							           "<td>"+arrEspuma[i]["codigosap"]+"</td>"+
							           "<td>"+arrEspuma[i]["Fecha_Creacion"]+"</td>"+
							   
							          
							          "</tr>"
							         
							          	}
							         
							                   
							        
                          form = form + "<td></td>"+"<td></td>"+"<td></td>"+"</tbody>"+
						"</table>"+"</form>";
                          

                            $("#formulario").html(form);
                            
					       $("#boton").show();
					     })

		};

    });


$(document).on("change","#tipodeBusqueda",function(event){
		event.preventDefault();
  /* funcion  se activa cuando hay un cambio en el campo sexo el cual si es femenino esconderia los campos de libreta militar y clase de libreta militar*/
     if ( document.getElementById("tipodeBusqueda").value=="Descuadres"||document.getElementById("tipodeBusqueda").value=="TipoBloquesCortados") {
     	formulario
     	
     	$("#texto").hide();
     }else{
  
     		$("#texto").show();
     };

	});


});
</script>


<div class="col-md-4"></div>
<div class="col-md-4">
     <div >
            tipo de busqueda
            <?php echo CHtml::dropDownList('listname',"", 
              array('Referencia' => 'Referencia','TipoBloquesCortados' => 'TipoBloquesCortados','Descuadres'=>'Bloques Sin Cargar' ),array('size'=>1,'maxlength'=>1 ,'id'=>"tipodeBusqueda",'class'=>'form-control','')); ?>
        <br>
    </div>
	<div id="texto">
        buscar
		<?php echo CHtml::textField('Text', '',array('id'=>'textoBuscar','size'=>50,'maxlength'=>50 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
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
