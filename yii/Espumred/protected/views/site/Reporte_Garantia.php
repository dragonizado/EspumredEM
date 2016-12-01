<style media="screen">
	.footermediaQuery{
		position:fixed;
		width:100%;
		bottom:0px;
	}
	.footermediaQuerym{
		margin-top:9.5%;
	}
	.caja{
		box-shadow: 4px 4px 4px rgba(0,0,0,0.05) !important;
	}
	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td
	{
		padding: 8px !important;
		line-height: 1.42857143 !important;
		vertical-align: top !important;
		/*border-top: 1px solid #ddd !important;*/
	}

	.table-bordered>thead>tr>th,
	.table-bordered>tbody>tr>th,
	.table-bordered>tfoot>tr>th,
	.table-bordered>thead>tr>td,
	.table-bordered>tbody>tr>td,
	.table-bordered>tfoot>tr>td
	{
    border: 1px solid #ddd;
	}
	.table-striped>tbody>tr:nth-child(odd)>td,
	.table-striped>tbody>tr:nth-child(odd)>th
	{
    background-color: rgba(243, 103, 22, 0.11) !important;
	}
	.radius{
		border-radius: 3px;
		margin-right: 4px;
	}
	.hidden{
		display:none;
	}
</style>
<div class="panel" style="margin-left:70px;margin-right:70px;">
	<div class="panel-body">
		<center><h3>REPORTE DE GARANTÍAS</h3></center>
	</div>
</div>
<div class="panel" style="margin-left:70px;margin-right:70px;">
	<div class="panel-body">
		<div id="contenido1">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					   <label for="exampleInputName2">Nombre Cliente:</label>
					   <input type="text" class="form-control" id="clientname" placeholder="Jane Doe">
					   <?php 

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
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Barrio:</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="La estrella">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Producto:</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Sensaflex C30 plus edición 40 años">
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Cédula o Nit:</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="123456789">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Telefono Fijo:</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="123456">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Almacén de compra</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Almacen">
					</div>

				</div>
				<div class="col-md-4">
 					<div class="form-group">
			    		<label for="exampleInputEmail2">Dirección:</label>
			    		<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Carrera 24 sur 82 EE # 115">
			  		</div>
			  		<div class="form-group">
						<label for="exampleInputEmail2">Fecha de Compra:</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="14/09/2016">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Nombre del Tecnico</label>
						<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Tecnico">
					</div>

				</div>
			</div>	
			<center><div class="btn btn-primary" id="btns1">Siguiente</div></center>
		</div>
		<div id="contenido2" style="display:none;">
		<h3><center>Motivo (Lo Manifestado por el Cliente)</center></h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Hundimiento</label>
						<input type="checkbox" class="form-control motivo" id="hundimiento1" value="hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Suelta</label>
						<input type="checkbox" class="form-control motivo" id="Tela_suelta1" value="tela Suelta">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Falso Imperfecto</label>
						<input type="checkbox" class="form-control motivo" id="hundimiento1" value="hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Pillow Suelto</label>
						<input type="checkbox" class="form-control motivo" id="Tela_suelta1" value="tela Suelta">
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Mal de tierra</label>
						<input type="checkbox" class="form-control motivo" id="mal_tierra1" value="mal de tierra">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Mal Olor</label>
						<input type="checkbox" class="form-control motivo" id="mal_olor1" value="mal olor">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Imperfecta</label>
						<input type="checkbox" class="form-control motivo" id="mal_tierra1" value="mal de tierra">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Medida Incorrecta</label>
						<input type="checkbox" class="form-control motivo" id="mal_olor1" value="mal olor">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Desconocido</label>
						<input type="checkbox" class="form-control motivo" id="desconocido1" value="desconocido">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Contaminado</label>
						<input type="checkbox" class="form-control motivo" id="contaminado1" value="Hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Manchas</label>
						<input type="checkbox" class="form-control motivo" id="desconocido1" value="desconocido">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Oxidada</label>
						<input type="checkbox" class="form-control motivo" id="contaminado1" value="Hundimiento">
					</div>
				</div>
			</div>
			<center><div class="btn btn-primary" id="btna1">Atras</div><span> &nbsp; &nbsp; &nbsp;</span><div class="btn btn-primary" id="btns2">Siguiente</div></center>
		</div>
		<div id="contenido3" style="display:none;">
		<h3><center>RESULTADO DE LA VISITA (Evaluación del Ténico)</center></h3>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Hundimiento</label>
						<input type="checkbox" class="form-control motivo" id="hundimiento1" value="hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Suelta</label>
						<input type="checkbox" class="form-control motivo" id="Tela_suelta1" value="tela Suelta">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Falso Imperfecto</label>
						<input type="checkbox" class="form-control motivo" id="hundimiento1" value="hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Pillow Suelto</label>
						<input type="checkbox" class="form-control motivo" id="Tela_suelta1" value="tela Suelta">
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Mal de tierra</label>
						<input type="checkbox" class="form-control motivo" id="mal_tierra1" value="mal de tierra">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Mal Olor</label>
						<input type="checkbox" class="form-control motivo" id="mal_olor1" value="mal olor">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Imperfecta</label>
						<input type="checkbox" class="form-control motivo" id="mal_tierra1" value="mal de tierra">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Medida Incorrecta</label>
						<input type="checkbox" class="form-control motivo" id="mal_olor1" value="mal olor">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail2">Desconocido</label>
						<input type="checkbox" class="form-control motivo" id="desconocido1" value="desconocido">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Contaminado</label>
						<input type="checkbox" class="form-control motivo" id="contaminado1" value="Hundimiento">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Manchas</label>
						<input type="checkbox" class="form-control motivo" id="desconocido1" value="desconocido">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail2">Tela Oxidada</label>
						<input type="checkbox" class="form-control motivo" id="contaminado1" value="Hundimiento">
					</div>
				</div>
			</div>
			<center><div class="btn btn-primary" id="btna2">Atras</div><span> &nbsp; &nbsp; &nbsp;</span><div class="btn btn-primary" id="btns3">Siguiente</div></center>
		</div>
		<div id="contenido4" style="display:none;">
		<div class="row" width="500px">
			<center><p width="100%">Seleccionar una de las siguientes imagenes<span style="color:red;">*</span> </p></center>
			<div class="col-md-4" id="img1">
			<img id="colchon1" class="imggarantias" src="/yii/Espumred/images/Esquinero-Parma.png" alt="imagen" width="298" height="200" style="cursor:pointer;">
			</div>
			<div class="col-md-4" id="img2" >
				<img id="colchon2" class="imggarantias" src="/yii/Espumred/images/SOFA.png" alt="imagen" width="298" height="200" style="cursor:pointer;">
			</div>
			<div class="col-md-4" id="img3">
				<img id="colchon3" class="imggarantias" src="/yii/Espumred/images/Sofa-cama-LONDON.png" alt="imagen" width="298" height="200" style="cursor:pointer;">
			</div>
			<center><div class="btn btn-primary" id="btna3">Atras</div><span> &nbsp; &nbsp; &nbsp;</span><div class="btn btn-primary hidden" id="btns4" >Siguiente</div></center>
		</div>
			
		</div>
		<div id="contenido5" style="display:none;">
			<div class="row">	
				<center><p>Se debe identificar en las imagen según sea el caso la ubicación de la garantía.<span style="color:red;">*</span></p></center>
			</div>
			<div id="lienzo" style="width: 500px; height: 500px; background: #fff; boder: 1px solid grey;"></div>
			<br><center><div class="btn btn-primary" id="btns5">Siguiente</div></center>
		</div>
		<div id="contenido6" style="display:none;">
			<div class="row">
				<div class="col-md-12">
					<h3>Observaciones</h3>
					<textarea name="descripcion" id="descripcion" cols="118" rows="10"></textarea>

				</div>
				<center><div class="btn btn-primary " id="btna5">Atras</div><span> &nbsp; &nbsp; &nbsp;</span><div class="btn btn-primary" id="btns6">Siguiente</div></center>
			</div>
		</div> <!-- fin de contenido 4-->
	</div> <!-- fin de panel body-->
</div><!-- fin de panel-->





<script type="text/javascript">
  $(document).ready(function(){
    $('body').css({'background-color':'#EBEEEE'});
    $('.panel').addClass('caja');
    if ($(window).width() >= 820) {
      $('section#Footer').removeClass('footermediaQuerym');
      $('section#Footer').addClass('footermediaQuery');
    }
    $(window).resize(function(){
       if ($(window).width() >= 820) {
         $('section#Footer').removeClass('footermediaQuerym');
         $('section#Footer').addClass('footermediaQuery');
       }else if($(window).width() <= 766){
          $('section#Footer').removeClass('footermediaQuery');
          $('section#Footer').addClass('footermediaQuerym');

       }

     });
    
    

  });

	//acciones del canvas
  function canvasactions(img){
  		var conten = img;
    	$('#canvas').mousedown(function(e){
	      pulsado = true;
	      movimientos.push([e.pageX - this.offsetLeft,
	          e.pageY - this.offsetTop,
	          false]);
	      repinta(conten);
	    });
	 
	    $('#canvas').mousemove(function(e){
	      if(pulsado){
	          movimientos.push([e.pageX - this.offsetLeft,
	              e.pageY - this.offsetTop,
	              true]);
	        repinta(conten);
	      }
	    });
	 
	    $('#canvas').mouseup(function(e){
	      pulsado = false;
	    });
	 
	    $('#canvas').mouseleave(function(e){
	      pulsado = false;
	    });
	    repinta(conten);
    }

	$(".imggarantias").click(function(){
		var tipo = $(this).attr("id");
		$("#btns4").removeClass("hidden");
		crearLienzo();
		canvasactions(tipo);
		
	});


  // Variables para contener los sucesivos puntos (x,y) por los que va
    // pasando el ratón, y su estado (pulsado/no pulsado)
    var movimientos = new Array();
    var pulsado;
    function crearLienzo() {
          var canvasDiv = document.getElementById('lienzo');
			canvas = document.createElement('canvas');
			canvas.setAttribute('width', 970);
			canvas.setAttribute('height', 500);
			canvas.setAttribute('style', 'border:1px solid grey; cursor:crosshair;');
			canvas.setAttribute('id', 'canvas');
			canvasDiv.appendChild(canvas);
			if(typeof G_vmlCanvasManager != 'undefined') {
			    canvas = G_vmlCanvasManager.initElement(canvas);
			}
			context = canvas.getContext("2d");
			
			
    }


    function repinta(imgs) {
        canvas.width = canvas.width; // Limpia el lienzo
        id = imgs;
          var img = document.getElementById(id);
		 		context.fillStyle = 'red';
		  		context.strokeStyle = "#ff9933";
		  		context.lineJoin = "round";
		  		context.lineWidth = 6;
		  		context.fillStyle = 'white';
		     	context.fillRect(0,0,970,500);
		   		context.drawImage(img,0,0,970,500);
		   		

	  for(var i=0; i < movimientos.length; i++)
	  {     
	    context.beginPath();
	    if(movimientos[i][2] && i){
	      context.moveTo(movimientos[i-1][0], movimientos[i-1][1]);
	     }else{
	      context.moveTo(movimientos[i][0], movimientos[i][1]);
	     }
	     context.lineTo(movimientos[i][0], movimientos[i][1]);
	     context.closePath();
	     context.stroke(); 
	  }
    }

    // Scripts para los botones de siguiente
	
	$("#btns1").click(function(){
		$("#contenido1").slideToggle();
		$("#contenido2").slideToggle();
	}); 

	$("#btns2").click(function(){
		$("#contenido2").slideToggle();
		$("#contenido3").slideToggle();
	});

	$("#btns3").click(function(){
		$("#contenido3").slideToggle();
		$("#contenido4").slideToggle();
	});

	$("#btns4").click(function(){
		$("#contenido4").slideToggle();
		$("#contenido5").slideToggle();
	});

	$("#btns5").click(function(){

		$("#contenido5").slideToggle();
		$("#contenido6").slideToggle();
	});

	// botones de ir atras

	$("#btna1").click(function(){
		$("#contenido1").slideToggle();
		$("#contenido2").slideToggle();
	}); 

	$("#btna2").click(function(){
		$("#contenido2").slideToggle();
		$("#contenido3").slideToggle();
	});

	$("#btna3").click(function(){
		$("#contenido3").slideToggle();
		$("#contenido4").slideToggle();
	});

	$("#btna4").click(function(){
		 //crear el lienzo de la pagina
		$("#contenido4").slideToggle();
		$("#contenido5").slideToggle();
	});
	$("#btna5").click(function(){
		 //crear el lienzo de la pagina
		$("#contenido5").slideToggle();
		$("#contenido6").slideToggle();
	});


	// $("#btns5").click(function(){
	// 	$("#contenido5").slideToggle();
	// 	$("#contenido6").slideToggle();
	// });   

</script>