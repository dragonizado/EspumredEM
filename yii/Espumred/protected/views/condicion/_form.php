<?php

$Registro=Yii::app()->session['Registro'];

?>
<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=descripcion/create";  			 
        //$(this).parent().remove();
});

window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicion/cargar",
					    function(data) {
					    console.log(data);
					      var Registro = data;
					      var index
					        Registros = $.parseJSON(Registro);
					     
					document.getElementById("descripcion").value=Registros[1]["descripcion"];
					document.getElementById("referencia").value=Registros[1]["referencia"];
					document.getElementById("referencia1").value=Registros[1]["referencia1"];
				    document.getElementById("referencia2").value=Registros[1]["referencia2"];
					document.getElementById("referencia3").value=Registros[1]["referencia3"];
				    document.getElementById("referencia4").value=Registros[1]["referencia4"];
					document.getElementById("referencia5").value=Registros[1]["referencia5"];
					document.getElementById("referencia6").value=Registros[1]["referencia6"];
					document.getElementById("referencia7").value=Registros[1]["referencia7"];
					document.getElementById("referencia8").value=Registros[1]["referencia8"];
				    document.getElementById("referencia9").value=Registros[1]["referencia9"];
					document.getElementById("referencia10").value=Registros[1]["referencia10"];
				    document.getElementById("referencia11").value=Registros[1]["referencia11"];
					document.getElementById("referencia12").value=Registros[1]["referencia12"];
					document.getElementById("referencia13").value=Registros[1]["referencia13"];
					document.getElementById("referencia14").value=Registros[1]["referencia14"];
					document.getElementById("referencia15").value=Registros[1]["referencia15"];
				    document.getElementById("referencia16").value=Registros[1]["referencia16"];
					document.getElementById("referencia17").value=Registros[1]["referencia17"];
				    document.getElementById("referencia18").value=Registros[1]["referencia18"];
					document.getElementById("referencia19").value=Registros[1]["referencia19"];
					document.getElementById("referencia20").value=Registros[1]["referencia20"];
					document.getElementById("referencia21").value=Registros[1]["referencia21"];
					document.getElementById("referencia22").value=Registros[1]["referencia22"];
				    document.getElementById("referencia23").value=Registros[1]["referencia23"];
					document.getElementById("referencia24").value=Registros[1]["referencia24"];
				    document.getElementById("referencia25").value=Registros[1]["referencia25"];
					document.getElementById("referencia26").value=Registros[1]["referencia26"];
					document.getElementById("referencia27").value=Registros[1]["referencia27"];
					document.getElementById("referencia28").value=Registros[1]["referencia28"];
					document.getElementById("referencia29").value=Registros[1]["referencia29"];
				    document.getElementById("referencia30").value=Registros[1]["referencia30"];
					document.getElementById("referencia31").value=Registros[1]["referencia31"];
				    document.getElementById("referencia32").value=Registros[1]["referencia32"];
					document.getElementById("referencia33").value=Registros[1]["referencia33"];					       					   					 
					document.getElementById("precioanterior").value=Registros[1]["precioanterior"];
					document.getElementById("precioanterior1").value=Registros[1]["precioanterior1"];
					document.getElementById("precioanterior2").value=Registros[1]["precioanterior2"];
				    document.getElementById("precioanterior3").value=Registros[1]["precioanterior3"];
					document.getElementById("precioanterior4").value=Registros[1]["precioanterior4"];
				    document.getElementById("precioanterior5").value=Registros[1]["precioanterior5"];
				    document.getElementById("precioanterior6").value=Registros[1]["precioanterior6"];
					document.getElementById("precioanterior7").value=Registros[1]["precioanterior7"];
					document.getElementById("precioanterior8").value=Registros[1]["precioanterior8"];
				    document.getElementById("precioanterior9").value=Registros[1]["precioanterior9"];
					document.getElementById("precioanterior10").value=Registros[1]["precioanterior10"];
				    document.getElementById("precioanterior11").value=Registros[1]["precioanterior11"];
					document.getElementById("precioanterior12").value=Registros[1]["precioanterior12"];
					document.getElementById("precioanterior13").value=Registros[1]["precioanterior13"];
					document.getElementById("precioanterior14").value=Registros[1]["precioanterior14"];
					document.getElementById("precioanterior15").value=Registros[1]["precioanterior15"];
				    document.getElementById("precioanterior16").value=Registros[1]["precioanterior16"];
					document.getElementById("precioanterior17").value=Registros[1]["precioanterior17"];
				    document.getElementById("precioanterior18").value=Registros[1]["precioanterior18"];
					document.getElementById("precioanterior19").value=Registros[1]["precioanterior19"];
					document.getElementById("precioanterior20").value=Registros[1]["precioanterior20"];
					document.getElementById("precioanterior21").value=Registros[1]["precioanterior21"];
					document.getElementById("precioanterior22").value=Registros[1]["precioanterior22"];
				    document.getElementById("precioanterior23").value=Registros[1]["precioanterior23"];
					document.getElementById("precioanterior24").value=Registros[1]["precioanterior24"];
				    document.getElementById("precioanterior25").value=Registros[1]["precioanterior25"];
					document.getElementById("precioanterior26").value=Registros[1]["precioanterior26"];
					document.getElementById("precioanterior27").value=Registros[1]["precioanterior27"];
					document.getElementById("precioanterior28").value=Registros[1]["precioanterior28"];
					document.getElementById("precioanterior29").value=Registros[1]["precioanterior29"];
				    document.getElementById("precioanterior30").value=Registros[1]["precioanterior30"];
					document.getElementById("precioanterior31").value=Registros[1]["precioanterior31"];
				    document.getElementById("precioanterior32").value=Registros[1]["precioanterior32"];
					document.getElementById("precioanterior33").value=Registros[1]["precioanterior33"];
					document.getElementById("nuevoprecio").value=Registros[1]["nuevoprecio"];
					document.getElementById("nuevoprecio1").value=Registros[1]["nuevoprecio1"];
				    document.getElementById("nuevoprecio2").value=Registros[1]["nuevoprecio2"];
					document.getElementById("nuevoprecio3").value=Registros[1]["nuevoprecio3"];
				    document.getElementById("nuevoprecio4").value=Registros[1]["nuevoprecio4"];
					document.getElementById("nuevoprecio5").value=Registros[1]["nuevoprecio5"];
					document.getElementById("nuevoprecio6").value=Registros[1]["nuevoprecio6"];
					document.getElementById("nuevoprecio7").value=Registros[1]["nuevoprecio7"];
					document.getElementById("nuevoprecio8").value=Registros[1]["nuevoprecio8"];
				    document.getElementById("nuevoprecio9").value=Registros[1]["nuevoprecio9"];
					document.getElementById("nuevoprecio10").value=Registros[1]["nuevoprecio10"];
				    document.getElementById("nuevoprecio11").value=Registros[1]["nuevoprecio11"];
					document.getElementById("nuevoprecio12").value=Registros[1]["nuevoprecio12"];
					document.getElementById("nuevoprecio13").value=Registros[1]["nuevoprecio13"];
					document.getElementById("nuevoprecio14").value=Registros[1]["nuevoprecio14"];
					document.getElementById("nuevoprecio15").value=Registros[1]["nuevoprecio15"];
				    document.getElementById("nuevoprecio16").value=Registros[1]["nuevoprecio16"];
					document.getElementById("nuevoprecio17").value=Registros[1]["nuevoprecio17"];
				    document.getElementById("nuevoprecio18").value=Registros[1]["nuevoprecio18"];
					document.getElementById("nuevoprecio19").value=Registros[1]["nuevoprecio19"];
					document.getElementById("nuevoprecio20").value=Registros[1]["nuevoprecio20"];
					document.getElementById("nuevoprecio21").value=Registros[1]["nuevoprecio21"];
					document.getElementById("nuevoprecio22").value=Registros[1]["nuevoprecio22"];
				    document.getElementById("nuevoprecio23").value=Registros[1]["nuevoprecio23"];
					document.getElementById("nuevoprecio24").value=Registros[1]["nuevoprecio24"];
				    document.getElementById("nuevoprecio25").value=Registros[1]["nuevoprecio25"];
					document.getElementById("nuevoprecio26").value=Registros[1]["nuevoprecio26"];
					document.getElementById("nuevoprecio27").value=Registros[1]["nuevoprecio27"];
					document.getElementById("nuevoprecio28").value=Registros[1]["nuevoprecio28"];
					document.getElementById("nuevoprecio29").value=Registros[1]["nuevoprecio29"];
				    document.getElementById("nuevoprecio30").value=Registros[1]["nuevoprecio30"];
					document.getElementById("nuevoprecio31").value=Registros[1]["nuevoprecio31"];
				    document.getElementById("nuevoprecio32").value=Registros[1]["nuevoprecio32"];
					document.getElementById("nuevoprecio33").value=Registros[1]["nuevoprecio33"];
					document.getElementById("precioanterior").value=Registros[1]["precioanterior"];
					document.getElementById("precioanterior1").value=Registros[1]["precioanterior1"];
					document.getElementById("precioanterior2").value=Registros[1]["precioanterior2"];
				    document.getElementById("precioanterior3").value=Registros[1]["precioanterior3"];
					document.getElementById("precioanterior4").value=Registros[1]["precioanterior4"];
				    document.getElementById("precioanterior5").value=Registros[1]["precioanterior5"];
				    document.getElementById("precioanterior6").value=Registros[1]["precioanterior6"];
					document.getElementById("precioanterior7").value=Registros[1]["precioanterior7"];
					document.getElementById("precioanterior8").value=Registros[1]["precioanterior8"];
				    document.getElementById("precioanterior9").value=Registros[1]["precioanterior9"];
					document.getElementById("precioanterior10").value=Registros[1]["precioanterior10"];
				    document.getElementById("precioanterior11").value=Registros[1]["precioanterior11"];
					document.getElementById("precioanterior12").value=Registros[1]["precioanterior12"];
					document.getElementById("precioanterior13").value=Registros[1]["precioanterior13"];
					document.getElementById("precioanterior14").value=Registros[1]["precioanterior14"];
					document.getElementById("precioanterior15").value=Registros[1]["precioanterior15"];
				    document.getElementById("precioanterior16").value=Registros[1]["precioanterior16"];
					document.getElementById("precioanterior17").value=Registros[1]["precioanterior17"];
				    document.getElementById("precioanterior18").value=Registros[1]["precioanterior18"];
					document.getElementById("precioanterior19").value=Registros[1]["precioanterior19"];
					document.getElementById("precioanterior20").value=Registros[1]["precioanterior20"];
					document.getElementById("precioanterior21").value=Registros[1]["precioanterior21"];
					document.getElementById("precioanterior22").value=Registros[1]["precioanterior22"];
				    document.getElementById("precioanterior23").value=Registros[1]["precioanterior23"];
					document.getElementById("precioanterior24").value=Registros[1]["precioanterior24"];
				    document.getElementById("precioanterior25").value=Registros[1]["precioanterior25"];
					document.getElementById("precioanterior26").value=Registros[1]["precioanterior26"];
					document.getElementById("precioanterior27").value=Registros[1]["precioanterior27"];
					document.getElementById("precioanterior28").value=Registros[1]["precioanterior28"];
					document.getElementById("precioanterior29").value=Registros[1]["precioanterior29"];
				    document.getElementById("precioanterior30").value=Registros[1]["precioanterior30"];
					document.getElementById("precioanterior31").value=Registros[1]["precioanterior31"];
				    document.getElementById("precioanterior32").value=Registros[1]["precioanterior32"];
					document.getElementById("precioanterior33").value=Registros[1]["precioanterior33"];                    
                    document.getElementById("piefactura").value=Registros[1]["piefactura"];
					document.getElementById("piefactura1").value=Registros[1]["piefactura1"];
					document.getElementById("piefactura2").value=Registros[1]["piefactura2"];
				    document.getElementById("piefactura3").value=Registros[1]["piefactura3"];
					document.getElementById("piefactura4").value=Registros[1]["piefactura4"];
				    document.getElementById("piefactura5").value=Registros[1]["piefactura5"];
				    document.getElementById("piefactura6").value=Registros[1]["piefactura6"];
					document.getElementById("piefactura7").value=Registros[1]["piefactura7"];
					document.getElementById("piefactura8").value=Registros[1]["piefactura8"];
				    document.getElementById("piefactura9").value=Registros[1]["piefactura9"];
					document.getElementById("piefactura10").value=Registros[1]["piefactura10"];
				    document.getElementById("piefactura11").value=Registros[1]["piefactura11"];
					document.getElementById("piefactura12").value=Registros[1]["piefactura12"];
					document.getElementById("piefactura13").value=Registros[1]["piefactura13"];
					document.getElementById("piefactura14").value=Registros[1]["piefactura14"];
					document.getElementById("piefactura15").value=Registros[1]["piefactura15"];
				    document.getElementById("piefactura16").value=Registros[1]["piefactura16"];
					document.getElementById("piefactura17").value=Registros[1]["piefactura17"];
				    document.getElementById("piefactura18").value=Registros[1]["piefactura18"];
					document.getElementById("piefactura19").value=Registros[1]["piefactura19"];
					document.getElementById("piefactura20").value=Registros[1]["piefactura20"];
					document.getElementById("piefactura21").value=Registros[1]["piefactura21"];
					document.getElementById("piefactura22").value=Registros[1]["piefactura22"];
				    document.getElementById("piefactura23").value=Registros[1]["piefactura23"];
					document.getElementById("piefactura24").value=Registros[1]["piefactura24"];
				    document.getElementById("piefactura25").value=Registros[1]["piefactura25"];
					document.getElementById("piefactura26").value=Registros[1]["piefactura26"];
					document.getElementById("piefactura27").value=Registros[1]["piefactura27"];
					document.getElementById("piefactura28").value=Registros[1]["piefactura28"];
					document.getElementById("piefactura29").value=Registros[1]["piefactura29"];
				    document.getElementById("piefactura30").value=Registros[1]["piefactura30"];
					document.getElementById("piefactura31").value=Registros[1]["piefactura31"];
				    document.getElementById("piefactura32").value=Registros[1]["piefactura32"];
					document.getElementById("piefactura33").value=Registros[1]["piefactura33"];

                    document.getElementById("rebate").value=Registros[1]["rebate"];
					document.getElementById("rebate1").value=Registros[1]["rebate1"];
					document.getElementById("rebate2").value=Registros[1]["rebate2"];
				    document.getElementById("rebate3").value=Registros[1]["rebate3"];
					document.getElementById("rebate4").value=Registros[1]["rebate4"];
				    document.getElementById("rebate5").value=Registros[1]["rebate5"];
				    document.getElementById("rebate6").value=Registros[1]["rebate6"];
					document.getElementById("rebate7").value=Registros[1]["rebate7"];
					document.getElementById("rebate8").value=Registros[1]["rebate8"];
				    document.getElementById("rebate9").value=Registros[1]["rebate9"];
					document.getElementById("rebate10").value=Registros[1]["rebate10"];
				    document.getElementById("rebate11").value=Registros[1]["rebate11"];
					document.getElementById("rebate12").value=Registros[1]["rebate12"];
					document.getElementById("rebate13").value=Registros[1]["rebate13"];
					document.getElementById("rebate14").value=Registros[1]["rebate14"];
					document.getElementById("rebate15").value=Registros[1]["rebate15"];
				    document.getElementById("rebate16").value=Registros[1]["rebate16"];
					document.getElementById("rebate17").value=Registros[1]["rebate17"];
				    document.getElementById("rebate18").value=Registros[1]["rebate18"];
					document.getElementById("rebate19").value=Registros[1]["rebate19"];
					document.getElementById("rebate20").value=Registros[1]["rebate20"];
					document.getElementById("rebate21").value=Registros[1]["rebate21"];
					document.getElementById("rebate22").value=Registros[1]["rebate22"];
				    document.getElementById("rebate23").value=Registros[1]["rebate23"];
					document.getElementById("rebate24").value=Registros[1]["rebate24"];
				    document.getElementById("rebate25").value=Registros[1]["rebate25"];
					document.getElementById("rebate26").value=Registros[1]["rebate26"];
					document.getElementById("rebate27").value=Registros[1]["rebate27"];
					document.getElementById("rebate28").value=Registros[1]["rebate28"];
					document.getElementById("rebate29").value=Registros[1]["rebate29"];
				    document.getElementById("rebate30").value=Registros[1]["rebate30"];
					document.getElementById("rebate31").value=Registros[1]["rebate31"];
				    document.getElementById("rebate32").value=Registros[1]["rebate32"];
					document.getElementById("rebate33").value=Registros[1]["rebate33"];

                    document.getElementById("rebate").value=Registros[1]["rebate"];
					document.getElementById("rebate1").value=Registros[1]["rebate1"];
					document.getElementById("rebate2").value=Registros[1]["rebate2"];
				    document.getElementById("rebate3").value=Registros[1]["rebate3"];
					document.getElementById("rebate4").value=Registros[1]["rebate4"];
				    document.getElementById("rebate5").value=Registros[1]["rebate5"];
				    document.getElementById("rebate6").value=Registros[1]["rebate6"];
					document.getElementById("rebate7").value=Registros[1]["rebate7"];
					document.getElementById("rebate8").value=Registros[1]["rebate8"];
				    document.getElementById("rebate9").value=Registros[1]["rebate9"];
					document.getElementById("rebate10").value=Registros[1]["rebate10"];
				    document.getElementById("rebate11").value=Registros[1]["rebate11"];
					document.getElementById("rebate12").value=Registros[1]["rebate12"];
					document.getElementById("rebate13").value=Registros[1]["rebate13"];
					document.getElementById("rebate14").value=Registros[1]["rebate14"];
					document.getElementById("rebate15").value=Registros[1]["rebate15"];
				    document.getElementById("rebate16").value=Registros[1]["rebate16"];
					document.getElementById("rebate17").value=Registros[1]["rebate17"];
				    document.getElementById("rebate18").value=Registros[1]["rebate18"];
					document.getElementById("rebate19").value=Registros[1]["rebate19"];
					document.getElementById("rebate20").value=Registros[1]["rebate20"];
					document.getElementById("rebate21").value=Registros[1]["rebate21"];
					document.getElementById("rebate22").value=Registros[1]["rebate22"];
				    document.getElementById("rebate23").value=Registros[1]["rebate23"];
					document.getElementById("rebate24").value=Registros[1]["rebate24"];
				    document.getElementById("rebate25").value=Registros[1]["rebate25"];
					document.getElementById("rebate26").value=Registros[1]["rebate26"];
					document.getElementById("rebate27").value=Registros[1]["rebate27"];
					document.getElementById("rebate28").value=Registros[1]["rebate28"];
					document.getElementById("rebate29").value=Registros[1]["rebate29"];
				    document.getElementById("rebate30").value=Registros[1]["rebate30"];
					document.getElementById("rebate31").value=Registros[1]["rebate31"];
				    document.getElementById("rebate32").value=Registros[1]["rebate32"];
					document.getElementById("rebate33").value=Registros[1]["rebate33"];
                    
                    document.getElementById("Dias").value=Registros[1]["Dias"];
					document.getElementById("Dias1").value=Registros[1]["Dias1"];
					document.getElementById("Dias2").value=Registros[1]["Dias2"];
				    document.getElementById("Dias3").value=Registros[1]["Dias3"];
					document.getElementById("Dias4").value=Registros[1]["Dias4"];
				    document.getElementById("Dias5").value=Registros[1]["Dias5"];
				    document.getElementById("Dias6").value=Registros[1]["Dias6"];
					document.getElementById("Dias7").value=Registros[1]["Dias7"];
					document.getElementById("Dias8").value=Registros[1]["Dias8"];
				    document.getElementById("Dias9").value=Registros[1]["Dias9"];
					document.getElementById("Dias10").value=Registros[1]["Dias10"];
				    document.getElementById("Dias11").value=Registros[1]["Dias11"];
					document.getElementById("Dias12").value=Registros[1]["Dias12"];
					document.getElementById("Dias13").value=Registros[1]["Dias13"];
					document.getElementById("Dias14").value=Registros[1]["Dias14"];
					document.getElementById("Dias15").value=Registros[1]["Dias15"];
				    document.getElementById("Dias16").value=Registros[1]["Dias16"];
					document.getElementById("Dias17").value=Registros[1]["Dias17"];
				    document.getElementById("Dias18").value=Registros[1]["Dias18"];
					document.getElementById("Dias19").value=Registros[1]["Dias19"];
					document.getElementById("Dias20").value=Registros[1]["Dias20"];
					document.getElementById("Dias21").value=Registros[1]["Dias21"];
					document.getElementById("Dias22").value=Registros[1]["Dias22"];
				    document.getElementById("Dias23").value=Registros[1]["Dias23"];
					document.getElementById("Dias24").value=Registros[1]["Dias24"];
				    document.getElementById("Dias25").value=Registros[1]["Dias25"];
					document.getElementById("Dias26").value=Registros[1]["Dias26"];
					document.getElementById("Dias27").value=Registros[1]["Dias27"];
					document.getElementById("Dias28").value=Registros[1]["Dias28"];
					document.getElementById("Dias29").value=Registros[1]["Dias29"];
				    document.getElementById("Dias30").value=Registros[1]["Dias30"];
					document.getElementById("Dias31").value=Registros[1]["Dias31"];
				    document.getElementById("Dias32").value=Registros[1]["Dias32"];
					document.getElementById("Dias33").value=Registros[1]["Dias33"];
                    
                    document.getElementById("Dias").value=Registros[1]["Dias"];
					document.getElementById("Dias1").value=Registros[1]["Dias1"];
					document.getElementById("Dias2").value=Registros[1]["Dias2"];
				    document.getElementById("Dias3").value=Registros[1]["Dias3"];
					document.getElementById("Dias4").value=Registros[1]["Dias4"];
				    document.getElementById("Dias5").value=Registros[1]["Dias5"];
				    document.getElementById("Dias6").value=Registros[1]["Dias6"];
					document.getElementById("Dias7").value=Registros[1]["Dias7"];
					document.getElementById("Dias8").value=Registros[1]["Dias8"];
				    document.getElementById("Dias9").value=Registros[1]["Dias9"];
					document.getElementById("Dias10").value=Registros[1]["Dias10"];
				    document.getElementById("Dias11").value=Registros[1]["Dias11"];
					document.getElementById("Dias12").value=Registros[1]["Dias12"];
					document.getElementById("Dias13").value=Registros[1]["Dias13"];
					document.getElementById("Dias14").value=Registros[1]["Dias14"];
					document.getElementById("Dias15").value=Registros[1]["Dias15"];
				    document.getElementById("Dias16").value=Registros[1]["Dias16"];
					document.getElementById("Dias17").value=Registros[1]["Dias17"];
				    document.getElementById("Dias18").value=Registros[1]["Dias18"];
					document.getElementById("Dias19").value=Registros[1]["Dias19"];
					document.getElementById("Dias20").value=Registros[1]["Dias20"];
					document.getElementById("Dias21").value=Registros[1]["Dias21"];
					document.getElementById("Dias22").value=Registros[1]["Dias22"];
				    document.getElementById("Dias23").value=Registros[1]["Dias23"];
					document.getElementById("Dias24").value=Registros[1]["Dias24"];
				    document.getElementById("Dias25").value=Registros[1]["Dias25"];
					document.getElementById("Dias26").value=Registros[1]["Dias26"];
					document.getElementById("Dias27").value=Registros[1]["Dias27"];
					document.getElementById("Dias28").value=Registros[1]["Dias28"];
					document.getElementById("Dias29").value=Registros[1]["Dias29"];
				    document.getElementById("Dias30").value=Registros[1]["Dias30"];
					document.getElementById("Dias31").value=Registros[1]["Dias31"];
				    document.getElementById("Dias32").value=Registros[1]["Dias32"];
					document.getElementById("Dias33").value=Registros[1]["Dias33"];

					document.getElementById("Sesenta").value=Registros[1]["Sesenta"];
					document.getElementById("Sesenta1").value=Registros[1]["Sesenta1"];
					document.getElementById("Sesenta2").value=Registros[1]["Sesenta2"];
				    document.getElementById("Sesenta3").value=Registros[1]["Sesenta3"];
					document.getElementById("Sesenta4").value=Registros[1]["Sesenta4"];
				    document.getElementById("Sesenta5").value=Registros[1]["Sesenta5"];
				    document.getElementById("Sesenta6").value=Registros[1]["Sesenta6"];
					document.getElementById("Sesenta7").value=Registros[1]["Sesenta7"];
					document.getElementById("Sesenta8").value=Registros[1]["Sesenta8"];
				    document.getElementById("Sesenta9").value=Registros[1]["Sesenta9"];
					document.getElementById("Sesenta10").value=Registros[1]["Sesenta10"];
				    document.getElementById("Sesenta11").value=Registros[1]["Sesenta11"];
					document.getElementById("Sesenta12").value=Registros[1]["Sesenta12"];
					document.getElementById("Sesenta13").value=Registros[1]["Sesenta13"];
					document.getElementById("Sesenta14").value=Registros[1]["Sesenta14"];
					document.getElementById("Sesenta15").value=Registros[1]["Sesenta15"];
				    document.getElementById("Sesenta16").value=Registros[1]["Sesenta16"];
					document.getElementById("Sesenta17").value=Registros[1]["Sesenta17"];
				    document.getElementById("Sesenta18").value=Registros[1]["Sesenta18"];
					document.getElementById("Sesenta19").value=Registros[1]["Sesenta19"];
					document.getElementById("Sesenta20").value=Registros[1]["Sesenta20"];
					document.getElementById("Sesenta21").value=Registros[1]["Sesenta21"];
					document.getElementById("Sesenta22").value=Registros[1]["Sesenta22"];
				    document.getElementById("Sesenta23").value=Registros[1]["Sesenta23"];
					document.getElementById("Sesenta24").value=Registros[1]["Sesenta24"];
				    document.getElementById("Sesenta25").value=Registros[1]["Sesenta25"];
					document.getElementById("Sesenta26").value=Registros[1]["Sesenta26"];
					document.getElementById("Sesenta27").value=Registros[1]["Sesenta27"];
					document.getElementById("Sesenta28").value=Registros[1]["Sesenta28"];
					document.getElementById("Sesenta29").value=Registros[1]["Sesenta29"];
				    document.getElementById("Sesenta30").value=Registros[1]["Sesenta30"];
					document.getElementById("Sesenta31").value=Registros[1]["Sesenta31"];
				    document.getElementById("Sesenta32").value=Registros[1]["Sesenta32"];
					document.getElementById("Sesenta33").value=Registros[1]["Sesenta33"];
                    
                    document.getElementById("Treinta").value=Registros[1]["Treinta"];
					document.getElementById("Treinta1").value=Registros[1]["Treinta1"];
					document.getElementById("Treinta2").value=Registros[1]["Treinta2"];
				    document.getElementById("Treinta3").value=Registros[1]["Treinta3"];
					document.getElementById("Treinta4").value=Registros[1]["Treinta4"];
				    document.getElementById("Treinta5").value=Registros[1]["Treinta5"];
				    document.getElementById("Treinta6").value=Registros[1]["Treinta6"];
					document.getElementById("Treinta7").value=Registros[1]["Treinta7"];
					document.getElementById("Treinta8").value=Registros[1]["Treinta8"];
				    document.getElementById("Treinta9").value=Registros[1]["Treinta9"];
					document.getElementById("Treinta10").value=Registros[1]["Treinta10"];
				    document.getElementById("Treinta11").value=Registros[1]["Treinta11"];
					document.getElementById("Treinta12").value=Registros[1]["Treinta12"];
					document.getElementById("Treinta13").value=Registros[1]["Treinta13"];
					document.getElementById("Treinta14").value=Registros[1]["Treinta14"];
					document.getElementById("Treinta15").value=Registros[1]["Treinta15"];
				    document.getElementById("Treinta16").value=Registros[1]["Treinta16"];
					document.getElementById("Treinta17").value=Registros[1]["Treinta17"];
				    document.getElementById("Treinta18").value=Registros[1]["Treinta18"];
					document.getElementById("Treinta19").value=Registros[1]["Treinta19"];
					document.getElementById("Treinta20").value=Registros[1]["Treinta20"];
					document.getElementById("Treinta21").value=Registros[1]["Treinta21"];
					document.getElementById("Treinta22").value=Registros[1]["Treinta22"];
				    document.getElementById("Treinta23").value=Registros[1]["Treinta23"];
					document.getElementById("Treinta24").value=Registros[1]["Treinta24"];
				    document.getElementById("Treinta25").value=Registros[1]["Treinta25"];
					document.getElementById("Treinta26").value=Registros[1]["Treinta26"];
					document.getElementById("Treinta27").value=Registros[1]["Treinta27"];
					document.getElementById("Treinta28").value=Registros[1]["Treinta28"];
					document.getElementById("Treinta29").value=Registros[1]["Treinta29"];
				    document.getElementById("Treinta30").value=Registros[1]["Treinta30"];
					document.getElementById("Treinta31").value=Registros[1]["Treinta31"];
				    document.getElementById("Treinta32").value=Registros[1]["Treinta32"];
					document.getElementById("Treinta33").value=Registros[1]["Treinta33"];
					                    
                    document.getElementById("Ocho").value=Registros[1]["Ocho"];
					document.getElementById("Ocho1").value=Registros[1]["Ocho1"];
					document.getElementById("Ocho2").value=Registros[1]["Ocho2"];
				    document.getElementById("Ocho3").value=Registros[1]["Ocho3"];
					document.getElementById("Ocho4").value=Registros[1]["Ocho4"];
				    document.getElementById("Ocho5").value=Registros[1]["Ocho5"];
				    document.getElementById("Ocho6").value=Registros[1]["Ocho6"];
					document.getElementById("Ocho7").value=Registros[1]["Ocho7"];
					document.getElementById("Ocho8").value=Registros[1]["Ocho8"];
				    document.getElementById("Ocho9").value=Registros[1]["Ocho9"];
					document.getElementById("Ocho10").value=Registros[1]["Ocho10"];
				    document.getElementById("Ocho11").value=Registros[1]["Ocho11"];
					document.getElementById("Ocho12").value=Registros[1]["Ocho12"];
					document.getElementById("Ocho13").value=Registros[1]["Ocho13"];
					document.getElementById("Ocho14").value=Registros[1]["Ocho14"];
					document.getElementById("Ocho15").value=Registros[1]["Ocho15"];
				    document.getElementById("Ocho16").value=Registros[1]["Ocho16"];
					document.getElementById("Ocho17").value=Registros[1]["Ocho17"];
				    document.getElementById("Ocho18").value=Registros[1]["Ocho18"];
					document.getElementById("Ocho19").value=Registros[1]["Ocho19"];
					document.getElementById("Ocho20").value=Registros[1]["Ocho20"];
					document.getElementById("Ocho21").value=Registros[1]["Ocho21"];
					document.getElementById("Ocho22").value=Registros[1]["Ocho22"];
				    document.getElementById("Ocho23").value=Registros[1]["Ocho23"];
					document.getElementById("Ocho24").value=Registros[1]["Ocho24"];
				    document.getElementById("Ocho25").value=Registros[1]["Ocho25"];
					document.getElementById("Ocho26").value=Registros[1]["Ocho26"];
					document.getElementById("Ocho27").value=Registros[1]["Ocho27"];
					document.getElementById("Ocho28").value=Registros[1]["Ocho28"];
					document.getElementById("Ocho29").value=Registros[1]["Ocho29"];
				    document.getElementById("Ocho30").value=Registros[1]["Ocho30"];
					document.getElementById("Ocho31").value=Registros[1]["Ocho31"];
				    document.getElementById("Ocho32").value=Registros[1]["Ocho32"];
					document.getElementById("Ocho33").value=Registros[1]["Ocho33"];
                    
                    document.getElementById("Otro").value=Registros[1]["Otro"];
					document.getElementById("Otro1").value=Registros[1]["Otro1"];
					document.getElementById("Otro2").value=Registros[1]["Otro2"];
				    document.getElementById("Otro3").value=Registros[1]["Otro3"];
					document.getElementById("Otro4").value=Registros[1]["Otro4"];
				    document.getElementById("Otro5").value=Registros[1]["Otro5"];
				    document.getElementById("Otro6").value=Registros[1]["Otro6"];
					document.getElementById("Otro7").value=Registros[1]["Otro7"];
					document.getElementById("Otro8").value=Registros[1]["Otro8"];
				    document.getElementById("Otro9").value=Registros[1]["Otro9"];
					document.getElementById("Otro10").value=Registros[1]["Otro10"];
				    document.getElementById("Otro11").value=Registros[1]["Otro11"];
					document.getElementById("Otro12").value=Registros[1]["Otro12"];
					document.getElementById("Otro13").value=Registros[1]["Otro13"];
					document.getElementById("Otro14").value=Registros[1]["Otro14"];
					document.getElementById("Otro15").value=Registros[1]["Otro15"];
				    document.getElementById("Otro16").value=Registros[1]["Otro16"];
					document.getElementById("Otro17").value=Registros[1]["Otro17"];
				    document.getElementById("Otro18").value=Registros[1]["Otro18"];
					document.getElementById("Otro19").value=Registros[1]["Otro19"];
					document.getElementById("Otro20").value=Registros[1]["Otro20"];
					document.getElementById("Otro21").value=Registros[1]["Otro21"];
					document.getElementById("Otro22").value=Registros[1]["Otro22"];
				    document.getElementById("Otro23").value=Registros[1]["Otro23"];
					document.getElementById("Otro24").value=Registros[1]["Otro24"];
				    document.getElementById("Otro25").value=Registros[1]["Otro25"];
					document.getElementById("Otro26").value=Registros[1]["Otro26"];
					document.getElementById("Otro27").value=Registros[1]["Otro27"];
					document.getElementById("Otro28").value=Registros[1]["Otro28"];
					document.getElementById("Otro29").value=Registros[1]["Otro29"];
				    document.getElementById("Otro30").value=Registros[1]["Otro30"];
					document.getElementById("Otro31").value=Registros[1]["Otro31"];
				    document.getElementById("Otro32").value=Registros[1]["Otro32"];
					document.getElementById("Otro33").value=Registros[1]["Otro33"];
					    })				   										        
			        			  
			        }

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


<table class="col-md-33" align="center" >
<tbody>

  <td>
	<div align="center" class="buttons">
			<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		  <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

 <br><br>

      <table class="table table-bordered "  >
      
      
            <td colspan="">
               

			<td colspan="">
			
            
			<td colspan="">
		

		    <td colspan="">
		    

		    <td colspan="">
		    

		    <td colspan="2">
		    <center>DCTO COMERCIAL<center>
		    
		    <td colspan="4">
		    <center>DCTO FINANCIERO<center>

		    <td colspan="1">
		    <center>OTRO<center>


           <tr>
             <tr>


         <td colspan="0">
           <center>REG<center>
  
         <td colspan="1">
           <center>DESCRIPCION<center>


		<td colspan="1">
		    <center>REFERENCIA<center>	

		<td colspan="1">
		    <center>PRECIO ANTERIOR<center>

		<td colspan="1">
		    <center>NUEVO PRECIO<center>

		<td colspan="1">
		  <center>PIE FACTURA<center>

		<td colspan="1">
		 <center>REBATE<center>

		<td colspan="1">
	      
	      <center>% Dias<center>
		
		<td colspan="1">
		<center>2/60<center>
		

		<td colspan="1">
		<center>5/30<center>
		

		<td colspan="1">
		<center>8/8<center>
		
                  
		<td colspan="1">   	                  
		  <?php echo $form->textfield($model,'Otro34',array('size'=>1,'id'=>"Otro34",'maxlength'=>45,'class'=>'form-control','placeholder'=>"Ej:8/8")); ?>
		  <?php echo $form->error($model,'Otro34'); ?>	
		

        </tr>
            <tr>
                                      

      <!---empieza el valor del formulario-->                                


        <td colspan="0">
         <center>1<center>

         <td colspan="1">
           KG ESPUMAS D12
        
		<td colspan="1">   	                  
		    <?php echo $form->textfield($model,'referencia',array('size'=>1,'id'=>"referencia",'maxlength'=>45,'class'=>'form-control'  ,'style'=>"text-transform:uppercase;")); ?>
		    <?php echo $form->error($model,'referencia'); ?>
	     </div>

		<td colspan="1">
		     <?php echo $form->textField($model,'precioanterior',array('size'=>1,'maxlength'=>45 ,'id'=>'precioanterior','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior'); ?>
	         </div>

		<td colspan="1">
		     <?php echo $form->textField($model,'nuevoprecio',array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio','class'=>'form-control')); ?>
		     <?php echo $form->error($model,'nuevoprecio'); ?>
	      </div>
		<td colspan="1">
		    <?php echo $form->textfield($model,'piefactura',array('size'=>1,'maxlength'=>15 ,'id'=>'piefactura','class'=>'form-control')); ?>
		    <?php echo $form->error($model,'piefactura'); ?>
	       </div>  
		<td colspan="1">
		    <?php echo $form->textfield($model,'rebate',array('size'=>1,'maxlength'=>15 ,'id'=>'rebate','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'rebate'); ?>
	    </div>

		<td colspan="0">
	        <?php echo $form->textfield($model,'Dias',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias','class'=>'form-control')); ?>
		    <?php echo $form->error($model,'Dias'); ?>
	    </div>
		<td colspan="0">
		    <?php echo $form->textfield($model,'Sesenta',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Sesenta'); ?>
	    </div>

		<td colspan="0">
           <?php echo $form->textfield($model,'Treinta',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Treenta'); ?>
	    </div>

              
		<td colspan="0">
	      <?php echo $form->textfield($model,'Ocho',array('size'=>0,'maxlength'=>2,'id'=>'Ocho','class'=>'form-control')); ?>
		  <?php echo $form->error($model,'Ocho'); ?>
	    </div>


		<td colspan="0">
		   <?php echo $form->textfield($model,'Otro',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Otro'); ?>
	    </div>


			</tr>
                <tr>
			
             <td colspan="0">
         <center>2<center>

         <td colspan="1">
            KG ESPUMA D18 KG
        
		<td colspan="1">   	
              <?php echo $form->textfield($model,'referencia1',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia1'); ?>
	        </div>  
		<td colspan="1">
		      <?php echo $form->textfield($model,'precioanterior1',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior1'); ?>
	        </div>      
		<td colspan="1">
		      <?php echo $form->textfield($model,'nuevoprecio1',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio1'); ?>
	        </div>   
		<td colspan="1">
		         <?php echo $form->textfield($model,'piefactura1',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura1'); ?>
	        </div>       
		<td colspan="1">
	           <?php echo $form->textfield($model,'rebate1',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate1'); ?>
	        </div>   
		               
		<td colspan="1">
		      <?php echo $form->textfield($model,'Dias1',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias1'); ?>
	        </div>   
		                
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta1',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta1'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'Treinta1',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta1'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho1',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho1'); ?>
	        </div>   

		<td colspan="1">
            <?php echo $form->textfield($model,'Otro1',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro1'); ?>
	        </div>   

        			</tr>
                <tr>

         <td colspan="0">
         <center>3<center>

         <td colspan="1">
            KG ESPUMA TAPYCOL
        
		<td colspan="1">   	
                  <?php echo $form->textfield($model,'referencia2',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia2'); ?>
	        </div>   
		<td colspan="1">
		             <?php echo $form->textfield($model,'precioanterior2',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior2','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior2'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio2',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio2'); ?>
	        </div>   
		              
		<td colspan="1">
		          <?php echo $form->textfield($model,'piefactura2',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura2'); ?>
	        </div>        
		<td colspan="1">
		           <?php echo $form->textfield($model,'rebate2',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate2'); ?>
	        </div>      
		<td colspan="1">     
		   <?php echo $form->textfield($model,'Dias2',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias2'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'Sesenta2',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta2'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->textfield($model,'Treinta2',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta3','class'=>'form-control')); ?>
		     <?php echo $form->error($model,'Treinta2'); ?>
	        </div>   

		<td colspan="1">		    
               <?php echo $form->textfield($model,'Ocho2',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho3','class'=>'form-control')); ?>
		       <?php echo $form->error($model,'Ocho2'); ?>
	           </div>   
		<td colspan="1">
            <?php echo $form->textfield($model,'Otro2',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro3','class'=>'form-control')); ?>
		       <?php echo $form->error($model,'Otro2'); ?>

	           </div>   
             </tr>
                   <tr>

         <td colspan="0">
         <center>4<center>

         <td colspan="1">
           KG ESPUMA D20
        
		<td colspan="1">   	
                 
            <?php echo $form->textfield($model,'referencia3',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio3'); ?>
	        </div>   
		<td colspan="1">
		           <?php echo $form->textfield($model,'precioanterior3',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior3'); ?>
	        </div>   
		<td colspan="1">
		          <?php echo $form->textfield($model,'nuevoprecio3',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio3'); ?>
	        </div>   

		<td colspan="1">
                  <?php echo $form->textfield($model,'piefactura3',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura3'); ?>
	        </div>   
		             
		<td colspan="1">

		            <?php echo $form->textfield($model,'rebate3',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate3'); ?>
	        </div>       

		<td colspan="1">
	          <?php echo $form->textfield($model,'Dias3',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias3'); ?>
	        </div>   
		<td colspan="1">
		       <?php echo $form->textfield($model,'Sesenta3',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta3'); ?>
	        </div>   

		<td colspan="1">
		 
               <?php echo $form->textfield($model,'Treinta3',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta3'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'Ocho3',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho3'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Otro3',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho4','class'=>'form-control')); ?>
		    <?php echo $form->error($model,'Otro3'); ?>

	        </div>   
            </tr>
                   <tr>

        <td colspan="0">
         <center>5<center>

         <td colspan="1">
            KG ESPUMA D23 P23
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia4',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia4'); ?>
	        </div>   
            
		<td colspan="1">
		   
              <?php echo $form->textfield($model,'precioanterior4',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior4'); ?>
	        </div>   
		<td colspan="1">
		    
                <?php echo $form->textfield($model,'nuevoprecio4',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio4'); ?>
	        </div>   
		<td colspan="1">
                <?php echo $form->textfield($model,'piefactura4',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura4'); ?>
	        </div>   

		<td colspan="1">
		       
             <?php echo $form->textfield($model,'rebate4',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate4'); ?>
	        </div>   
		<td colspan="1">
	           <?php echo $form->textfield($model,'Dias4',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias4'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta4',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta4'); ?>
	        </div>   

		<td colspan="1">
	             <?php echo $form->textfield($model,'Treinta4',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta4'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Ocho4',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho4'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Otro4',array('size'=>0,'maxlength'=>2,'id'=>'Otro5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro4'); ?>
	        </div>   

        </tr>
             <tr>
        
        <td colspan="0">
         <center>6<center>

         <td colspan="1">
            KG ESPUMA D26 P26
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia5',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio1'); ?>
	        </div>   
           
		<td colspan="1">
		   <?php echo $form->textfield($model,'precioanterior5',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior5'); ?>
	        </div>   
              
		<td colspan="1">
		   <?php echo $form->textfield($model,'nuevoprecio5',array('size'=>0,'maxlength'=>45,'id'=>'nuevoprecio5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio5'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura5',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura5'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'rebate5',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate5'); ?>
	        </div>   

		<td colspan="1">
	         <?php echo $form->textfield($model,'Dias5',array('size'=>0,'maxlength'=>45 ,'id'=>'Dias5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias5'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta5',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta5'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'Treinta5',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta5'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'Ocho5',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho5'); ?>
	        </div>   

		<td colspan="1">
                 <?php echo $form->textfield($model,'Otro5',array('size'=>0,'maxlength'=>2,'id'=>'Otro5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro5'); ?>
		      
	        </div>   
        </tr>
             <tr>
        
        <td colspan="0">
         <center>7<center>

         <td colspan="1">
            KG ESPUMA D30
        
		<td colspan="1">   	
             <?php echo $form->textfield($model,'referencia6',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia6'); ?>
	        </div>   
            
		<td colspan="1">
		     <?php echo $form->textfield($model,'precioanterior6',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior6'); ?>
	        </div>   
              
		<td colspan="1">
		      <?php echo $form->textfield($model,'nuevoprecio6',array('size'=>0,'maxlength'=>45,'id'=>'nuevoprecio6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio6'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'piefactura6',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura6'); ?>
	        </div>   
		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate6',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate6'); ?>
	        </div>   

		<td colspan="1">
	            <?php echo $form->textfield($model,'Dias6',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias6'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta6',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta6'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'Treinta6',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta6'); ?>
	        </div>   

		<td colspan="1">
		   <?php echo $form->textfield($model,'Ocho6',array('size'=>0,'maxlength'=>2,'id'=>'Ocho6','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho6'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Otro6',array('size'=>0,'maxlength'=>2,'id'=>'Otro6','class'=>'form-control')); ?>
		    <?php echo $form->error($model,'Otro6'); ?>
	        </div>   

           </tr>
              <tr>

        <td colspan="0">
         <center>8<center>

         <td colspan="1">
        KG ESPUMA D30 TERMO
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia7',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia7','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia7'); ?>
	        </div>   
               
		<td colspan="1">
                 <?php echo $form->textfield($model,'precioanterior7',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior7'); ?>
	        </div>   
		   
		<td colspan="1">
		         <?php echo $form->textfield($model,'nuevoprecio7',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio7'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->textfield($model,'piefactura7',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura7'); ?>
	        </div>   
             
		<td colspan="1">
                   <?php echo $form->textfield($model,'rebate7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate7'); ?>
	        </div>   
		      
		<td colspan="1">
	         <?php echo $form->textfield($model,'Dias7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias7'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta7'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Treinta7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta7'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho7'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Otro7',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro7'); ?>
	        </div>

		</tr>
		   <tr>

		<td colspan="0">
         <center>9<center>

         <td colspan="1">
            KG ESPUMA D40
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia8',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia8'); ?>
	        </div>   
            
		<td colspan="1">
		     <?php echo $form->textfield($model,'precioanterior8',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior8'); ?>
	        </div>   
               
		<td colspan="1">
               <?php echo $form->textfield($model,'nuevoprecio8',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio8'); ?>
	        </div>   
		   
		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura8',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura8'); ?>
	        </div>   
               

		<td colspan="1">
                <?php echo $form->textfield($model,'rebate8',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate8'); ?>
	        </div>   
		   
		<td colspan="1">
	          <?php echo $form->textfield($model,'Dias8',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias8'); ?>
	        </div>   
		
		<td colspan="1">
		       <?php echo $form->textfield($model,'Sesenta8',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta8'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Treinta8',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta8'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'Ocho8',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho8'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro8',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro8'); ?>
	        </div>   
        </tr>
          <tr>

        <td colspan="0">
         <center>10<center>

         <td colspan="1">
            KG ESPUMA D40 VISCO
        
		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia9',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia9'); ?>
	        </div>   
		<td colspan="1">
		      <?php echo $form->textfield($model,'precioanterior9',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior9'); ?>
	        </div>   
                
		<td colspan="1">
		         <?php echo $form->textfield($model,'nuevoprecio9',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio9'); ?>
	        </div>   
                
		<td colspan="1">
		       <?php echo $form->textfield($model,'piefactura9',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura9'); ?>
	        </div>   
		<td colspan="1">
	           <?php echo $form->textfield($model,'rebate9',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate9'); ?>
	        </div>   
		<td colspan="1">
	          <?php echo $form->textfield($model,'Dias9',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias9'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->textfield($model,'Sesenta9',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta9'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Treinta9',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta9'); ?>
	        </div>   

		<td colspan="1">
		        <?php echo $form->textfield($model,'Ocho9',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho9'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Otro9',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro9'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>11<center>

         <td colspan="1">
            KG VISCOELASTICA D55
        
		<td colspan="1">   	
                <?php echo $form->textfield($model,'referencia10',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia10'); ?>
	        </div>   
		<td colspan="1">
                  <?php echo $form->textfield($model,'precioanterior10',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior10'); ?>
	        </div>   
		<td colspan="1">
		         <?php echo $form->textfield($model,'nuevoprecio10',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio10'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'piefactura10',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura10'); ?>
	        </div>   

		<td colspan="1">
	            <?php echo $form->textfield($model,'rebate10',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate10'); ?>
	        </div>   

		<td colspan="1">
	            <?php echo $form->textfield($model,'Dias10',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias10'); ?>
	        </div>   
		
		<td colspan="1">
               <?php echo $form->textfield($model,'Sesenta10',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta10'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Treinta10',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta10'); ?>
	        </div>   

		<td colspan="1">
                   <?php echo $form->textfield($model,'Ocho10',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho10'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Otro10',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro10'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>12<center>

         <td colspan="1">
            KG ESPUMA D60
        
		<td colspan="1">   	
                <?php echo $form->textfield($model,'referencia11',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia11'); ?>
	        </div>   
          
		<td colspan="1">
               <?php echo $form->textfield($model,'precioanterior11',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior11'); ?>
	        </div>   
              
		<td colspan="1">
                <?php echo $form->textfield($model,'nuevoprecio11',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio11'); ?>
	        </div>   

		<td colspan="1">
	          <?php echo $form->textfield($model,'piefactura11',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura11'); ?>
	        </div>   

		<td colspan="1">
		         <?php echo $form->textfield($model,'rebate11',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate11'); ?>
	        </div>   

		<td colspan="1">
	            <?php echo $form->textfield($model,'Dias11',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias11'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta11',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta11'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Treinta11',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta11'); ?>
	        </div>   

		<td colspan="1">
	         <?php echo $form->textfield($model,'Ocho11',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho11'); ?>
	        </div>   

		<td colspan="1">      
                <?php echo $form->textfield($model,'Otro11',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro11'); ?>
	        </div>   
        </tr>
          <tr>

        <td colspan="0">
         <center>13<center>

         <td colspan="1">
            KG CONTINUA D12
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia12',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia12'); ?>
	        </div>   
            
		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior12',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior12'); ?>
	        </div>   
              
		<td colspan="1">
		   <?php echo $form->textfield($model,'nuevoprecio12',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio12'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'piefactura12',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura12'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'rebate12',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate12'); ?>
	        </div>   

		<td colspan="1">
	              <?php echo $form->textfield($model,'Dias12',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias12'); ?>
	        </div>   
		
		<td colspan="1">
               <?php echo $form->textfield($model,'Sesenta12',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta12'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Treinta12',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta12'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Ocho12',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho12'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro12',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro12'); ?>

	        </div>   
		</tr>
		  <tr>
        
        <td colspan="0">
         <center>14<center>

         <td colspan="1">
             KG CONTINUA D18
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia13',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia13'); ?>
	        </div>   
            
		<td colspan="1">
		      <?php echo $form->textfield($model,'precioanterior13',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior13'); ?>
	        </div>   
              
		<td colspan="1">
		       <?php echo $form->textfield($model,'nuevoprecio13',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio13'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura13',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura13'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate13',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate13'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Dias13',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias13'); ?>
	        </div>   
		
		<td colspan="1">
                  <?php echo $form->textfield($model,'Sesenta13',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta13'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Treinta13',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta13'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Ocho13',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho13'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Otro13',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro13'); ?>
	        </div>   

		</tr>
		  <tr>

		<td colspan="0">
         <center>15<center>

         <td colspan="1">
              KG CONTINUA D20
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia14',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia14'); ?>
	        </div>   
            
		<td colspan="1">
		   <?php echo $form->textfield($model,'precioanterior14',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior14'); ?>
	        </div>   
              
		<td colspan="1">
		    <?php echo $form->textfield($model,'nuevoprecio14',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio14'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura14',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura14'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'rebate14',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate14'); ?>
	        </div>    

		<td colspan="1">
	       <?php echo $form->textfield($model,'Dias14',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias14'); ?>
	        </div>   
		
		<td colspan="1">
		       <?php echo $form->textfield($model,'Sesenta14',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta14'); ?>
	        </div>   

		<td colspan="1">
	          <?php echo $form->textfield($model,'Treinta14',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta14'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Ocho14',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho14'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Otro14',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro14'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>16<center>

         <td colspan="1">
                KG CONTINUA D30
        
		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia15',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia15'); ?>
	        </div>   
          
		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior15',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior15'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->textfield($model,'nuevoprecio15',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio15'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura15',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura15'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'rebate15',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate15'); ?>
	        </div>   
		<td colspan="1">
	           <?php echo $form->textfield($model,'Dias15',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias15'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta15',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta15'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'Treinta15',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta15'); ?>
	        </div>   

		<td colspan="1">
	         <?php echo $form->textfield($model,'Ocho15',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho15'); ?>
	        </div>   

		<td colspan="1">
		         <?php echo $form->textfield($model,'Otro15',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro15'); ?>
	        </div>   

		</tr>
		  <tr>

		<td colspan="0">
         <center>17<center>

         <td colspan="1">
                KG CONTINUA D30 TERMO
        
		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia16',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia16'); ?>
	        </div>   
           
		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior16',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior16'); ?>
	        </div>   
              
		<td colspan="1">
		   <?php echo $form->textfield($model,'nuevoprecio16',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio16'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura16',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura16'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate16',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate16'); ?>
	        </div>   

		<td colspan="1">
	          <?php echo $form->textfield($model,'Dias16',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias16'); ?>
	        </div>    
		
		<td colspan="1">
                    <?php echo $form->textfield($model,'Sesenta16',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta16'); ?>
	        </div>   

		<td colspan="1">
		            <?php echo $form->textfield($model,'Treinta16',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta16'); ?>
	        </div>   

		<td colspan="1">
                    <?php echo $form->textfield($model,'Ocho16',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho16'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'Otro16',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro16'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>18<center>

         <td colspan="1">
               KG CONTINUA D40
        
		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia17',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia17'); ?>
	        </div>   
            
		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior17',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior17'); ?>
	        </div>   
              
		<td colspan="1">
		    <?php echo $form->textfield($model,'nuevoprecio17',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio17'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->textfield($model,'piefactura17',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura17'); ?>
	        </div>   

		<td colspan="1">
		        <?php echo $form->textfield($model,'rebate17',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate17'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Dias17',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias17'); ?>
	        </div>   
		
		<td colspan="1">
		     <?php echo $form->textfield($model,'Sesenta17',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta17'); ?>
	        </div>   

		<td colspan="1">
	                 <?php echo $form->textfield($model,'Treinta17',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta17'); ?>
	        </div>   
		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho17',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho17'); ?>
	        </div>   

		<td colspan="1">
		        <?php echo $form->textfield($model,'Otro17',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro17'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>19<center>

         <td colspan="1">
                 KG CONTINUA D60
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia18',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia18'); ?>
	        </div>   
            
		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior18',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior18'); ?>
	        </div>   
              
		<td colspan="1">
		    <?php echo $form->textfield($model,'nuevoprecio18',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio18'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura18',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura18'); ?>
	        </div>   
		<td colspan="1">
		        <?php echo $form->textfield($model,'rebate18',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate18'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Dias18',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias18'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Sesenta18',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta18'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Treinta18',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta18'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Ocho18',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho18'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro18',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro18'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>20<center>

         <td colspan="1">
                 KG CASSATA
        
		<td colspan="1">   	
                  <?php echo $form->textfield($model,'referencia19',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia19'); ?>
	        </div>   
            
		<td colspan="1">
		   <?php echo $form->textfield($model,'precioanterior19',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior19'); ?>
	        </div>   
		<td colspan="1">
		   <?php echo $form->textfield($model,'nuevoprecio19',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio19'); ?>
	        </div>   

		<td colspan="1">
		   <?php echo $form->textfield($model,'piefactura19',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura19'); ?>
	        </div>   

		<td colspan="1">
		          <?php echo $form->textfield($model,'rebate19',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate19'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Dias19',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias19'); ?>
	        </div>   
		
		<td colspan="1">
	             <?php echo $form->textfield($model,'Sesenta19',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta19'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta19',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta19'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Ocho19',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho19'); ?>
	        </div>   

		<td colspan="1">            
                <?php echo $form->textfield($model,'Otro19',array('size'=>0,'maxlength'=>2,'id'=>'Ocho5','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro19'); ?>
	        </div>   
        </tr>
          <tr>

        <td colspan="0">
         <center>21<center>

         <td colspan="1">
               KG CUEROS
        
		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia20',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia20'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior20',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior20'); ?>
	        </div>   
              
		<td colspan="1">
		      <?php echo $form->textfield($model,'nuevoprecio20',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio20'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'piefactura20',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura20'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate20',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate20'); ?>
	        </div>   

		<td colspan="1">
                  <?php echo $form->textfield($model,'Dias20',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias20'); ?>
	        </div>   
		
		<td colspan="1">
		     <?php echo $form->textfield($model,'Sesenta20',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta20'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta20',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta20'); ?>
	        </div>   

		<td colspan="1">
	          <?php echo $form->textfield($model,'Ocho20',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho20'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'Otro20',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho20'); ?>
	        </div>   
		</tr>
          <tr>

        <td colspan="0">
         <center>22<center>

         <td colspan="1">
                 KG RETAL
        
		<td colspan="1">   	
                <?php echo $form->textfield($model,'referencia21',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia21'); ?>
	        </div>   
           
		<td colspan="1">
		       <?php echo $form->textfield($model,'precioanterior21',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior21'); ?>
	        </div>   
              
		<td colspan="1">
                 <?php echo $form->textfield($model,'nuevoprecio21',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio21'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'piefactura21',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura21'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'rebate21',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate21'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias21',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias21'); ?>
	        </div>   
		
		<td colspan="1">
		      <?php echo $form->textfield($model,'Sesenta21',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta21'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Treinta21',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta21'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Ocho21',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho21'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro21',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro21'); ?>
	        </div> 
	    

		</tr>
		  <tr>

		<td colspan="0">
         <center>23<center>

         <td colspan="1">
                 KG TRITURADO
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia22',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia22'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'precioanterior22',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior22'); ?>
	        </div>   
              
		<td colspan="1">
		     <?php echo $form->textfield($model,'nuevoprecio22',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio22'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'piefactura22',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura22'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'rebate22',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate22'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias22',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias22'); ?>
	        </div>   
		
		<td colspan="1">
             <?php echo $form->textfield($model,'Sesenta22',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta22'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta22',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta22'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Ocho22',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho22'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro22',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro22'); ?>
	        </div> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>24<center>

         <td colspan="1">
                KG SEGUNDA
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia23',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia23'); ?>
	        </div>   
     
		<td colspan="1">
	          <?php echo $form->textfield($model,'precioanterior23',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior23'); ?>
	        </div>   
              
		<td colspan="1">
                 <?php echo $form->textfield($model,'nuevoprecio23',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio23'); ?>
	        </div>   

		<td colspan="1">
		        <?php echo $form->textfield($model,'piefactura23',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura23'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate23',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate23'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias23',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias23'); ?>
	        </div>   
		
		<td colspan="1">
               <?php echo $form->textfield($model,'Sesenta23',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta23'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Treinta23',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta23'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Ocho23',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho23'); ?>
	        </div>   

		<td colspan="1">
            <?php echo $form->textfield($model,'Otro23',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro23'); ?>
	        </div> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>25<center>

         <td colspan="1">
                UND COLCHONES
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia24',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia24'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'precioanterior24',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior24'); ?>
	        </div>   
              
		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio24',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio24'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'piefactura24',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura24'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate24',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate24'); ?>
	        </div>   

		<td colspan="1">
                   <?php echo $form->textfield($model,'Dias24',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias24'); ?>
	        </div>   
		
		<td colspan="1">
               <?php echo $form->textfield($model,'Sesenta24',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta24'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Treinta24',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta24'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Ocho24',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho24'); ?>
	        </div>   

		<td colspan="1">
		   <?php echo $form->textfield($model,'Otro24',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro24'); ?>
	        </div>   

		</tr>
		 <tr>

		<td colspan="0">
         <center>26<center>

         <td colspan="1">
                  UND COLCHONETAS
        
		<td colspan="1">   	
              <?php echo $form->textfield($model,'referencia25',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia25'); ?>
	        </div>   
     
		<td colspan="1">
               <?php echo $form->textfield($model,'precioanterior25',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior25'); ?>
	        </div>   
              
		<td colspan="1">
            <?php echo $form->textfield($model,'nuevoprecio25',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio25'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'piefactura25',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura25'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'rebate25',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate25'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias25',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias25'); ?>
	        </div>   
		
		<td colspan="1">
	          <?php echo $form->textfield($model,'Sesenta25',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta25'); ?>
	        </div>   

		<td colspan="1">
            <?php echo $form->textfield($model,'Treinta25',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta25'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Ocho25',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho25'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro25',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro25'); ?>
	        </div>   
		</tr>
		  <tr>
		<td colspan="0">
         <center>27<center>

         <td colspan="1">
               UND ALMOHADAS
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia26',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia26'); ?>
	        </div>   
		<td colspan="1">
	          <?php echo $form->textfield($model,'precioanterior26',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior26'); ?>
	        </div>   
              
		<td colspan="1">
		     <?php echo $form->textfield($model,'nuevoprecio26',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio26'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'piefactura26',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura26'); ?>
	        </div>   

		<td colspan="1">
                 <?php echo $form->textfield($model,'rebate26',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate26'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias26',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias26'); ?>
	        </div>   
		
		<td colspan="1">
              <?php echo $form->textfield($model,'Sesenta26',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta26'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta26',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta26'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Ocho26',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho26'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Otro26',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro26'); ?>
	        </div> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>28<center>

         <td colspan="1">
              UND MODULOS
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia27',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia27'); ?>
	        </div>   
        
		<td colspan="1">
	         <?php echo $form->textfield($model,'precioanterior27',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior27'); ?>
	        </div>   
              
		<td colspan="1">
             <?php echo $form->textfield($model,'nuevoprecio27',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio27'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->textfield($model,'piefactura27',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura27'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'rebate27',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate27'); ?>
	        </div>   

		<td colspan="1">
	         <?php echo $form->textfield($model,'Dias27',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias'); ?>
	        </div>   
		
		<td colspan="1">
            <?php echo $form->textfield($model,'Sesenta27',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta27'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'Treinta27',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta27'); ?>
	        </div>   

		<td colspan="1">
           <?php echo $form->textfield($model,'Ocho27',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho27'); ?>
	        </div>   

		<td colspan="1">
		       <?php echo $form->textfield($model,'Otro27',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro27'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>29<center>

         <td colspan="1">
                UND SUDADEROS
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia28',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia28'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'precioanterior28',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior28'); ?>
	        </div>   
              
		<td colspan="1">
               <?php echo $form->textfield($model,'nuevoprecio28',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio28'); ?>
	        </div>   

		<td colspan="1">
	          <?php echo $form->textfield($model,'piefactura28',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura28'); ?>
	        </div>   

		<td colspan="1">
             <?php echo $form->textfield($model,'rebate28',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate28'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Dias28',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias28'); ?>
	        </div>   
		
		<td colspan="1">
              <?php echo $form->textfield($model,'Sesenta28',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta28'); ?>
	        </div>   

		<td colspan="1">
		         <?php echo $form->textfield($model,'Treinta28',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta28'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho28',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho28'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro28',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro28'); ?>
	        </div>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>30<center>

         <td colspan="1">
                UND MUEBLES
        
		<td colspan="1">   	
               <?php echo $form->textfield($model,'referencia29',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia29'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'precioanterior29',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior29'); ?>
	        </div>   
              
		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio29',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'piefactura29',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'rebate29',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Dias29',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias29'); ?>
	        </div>   
		
		<td colspan="1">
              <?php echo $form->textfield($model,'Sesenta29',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta29'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta29',array('size'=>1,'maxlength'=>2 ,'id'=>'Treinta30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta29'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Ocho29',array('size'=>1,'maxlength'=>2 ,'id'=>'Ocho30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho29'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'Otro29',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro29'); ?>
	        </div>   
		</tr>
		 <tr>
		<td colspan="0">
         <center>31<center>

         <td colspan="1">
                UND COMBOS
        
		<td colspan="1">   	
              <?php echo $form->textfield($model,'referencia30',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia30'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'precioanterior30',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior31'); ?>
	        </div>   
              
		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio30',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio30'); ?>
	        </div>   

		<td colspan="1">
                 <?php echo $form->textfield($model,'piefactura30',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura31'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate30',array('size'=>0,'maxlength'=>45,'id'=>'rebate31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Dias30',array('size'=>0,'maxlength'=>1 ,'id'=>'Dias31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias30'); ?>
	        </div>   
		
		<td colspan="1">
                 <?php echo $form->textfield($model,'Sesenta30',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta30'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Treinta30',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta30'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho30',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho30'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->textfield($model,'Otro30',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro31','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Otro30'); ?>

	     </div>   
		</tr>
		  <tr>
         
        <td colspan="0">
         <center>32<center>

         <td colspan="1">
                 UND BASE CAMAS
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia31',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia31'); ?>
	        </div>   

		<td colspan="1">
                   <?php echo $form->textfield($model,'precioanterior31',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior31'); ?>
	        </div>   
              
		<td colspan="1">
		     <?php echo $form->textfield($model,'nuevoprecio31',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'piefactura31',array('size'=>0,'maxlength'=>45 ,'id'=>'piefactura32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'rebate31',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate31'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Dias31',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias31'); ?>
	        </div>   
		
		<td colspan="1">
           <?php echo $form->textfield($model,'Sesenta31',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta31',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta31'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho31',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho31'); ?>
	        </div>   

		<td colspan="1">
		      <?php echo $form->textfield($model,'Otro30',array('size'=>0,'maxlength'=>2 ,'id'=>'Ocho31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro30'); ?>
	       </div>

		</tr>
		  <tr>

		<td colspan="0">
         <center>33<center>

         <td colspan="1">
               UND OTROS
        
		<td colspan="1">   	
                <?php echo $form->textfield($model,'referencia32',array('size'=>0,'maxlength'=>45 ,'id'=>'referencia33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia32'); ?>
	        </div>   

		<td colspan="1">
                  <?php echo $form->textfield($model,'precioanterior32',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior32'); ?>
	        </div>   
              
		<td colspan="1">
                 <?php echo $form->textfield($model,'nuevoprecio32',array('size'=>0,'maxlength'=>45 ,'id'=>'nuevoprecio33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio32'); ?>
	        </div>   

		<td colspan="1">
	               <?php echo $form->textfield($model,'piefactura32',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura32'); ?>
	        </div> 
	               

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate32',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate32'); ?>
	        </div>   

		<td colspan="1">
	               <?php echo $form->textfield($model,'Dias32',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias32'); ?>
	        </div>   
		<td colspan="1">
	          <?php echo $form->textfield($model,'Sesenta32',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta32'); ?>
	        </div>   

		<td colspan="1">
		  <?php echo $form->textfield($model,'Treinta32',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta32'); ?>
	        </div>   

		<td colspan="1">
		     <?php echo $form->textfield($model,'Ocho32',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho32'); ?>
	        </div> 

		<td colspan="1">
             <?php echo $form->textfield($model,'Otro32',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro32'); ?>
	        </div> 



		</tr>
		  <tr>
        
        <td colspan="0">
         <center>34<center>

         <td colspan="1">
                   <?php echo $form->textfield($model,'descripcion',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'descripcion'); ?>
	        </div> 

		<td colspan="1">   	
                   <?php echo $form->textfield($model,'referencia33',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia33'); ?>
	        </div> 
            
		<td colspan="1">
		        <?php echo $form->textfield($model,'precioanterior33',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior33'); ?>
	        </div> 
              
		<td colspan="1">
		      <?php echo $form->textfield($model,'nuevoprecio33',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio33'); ?>
	        </div> 

		<td colspan="1">
		       <?php echo $form->textfield($model,'piefactura33',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura33'); ?>
	        </div> 

		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate33',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate33'); ?>
	        </div> 

		<td colspan="1">
               <?php echo $form->textfield($model,'Dias33',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias33'); ?>
	        </div> 
		
		<td colspan="1">
		         <?php echo $form->textfield($model,'Sesenta33',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta33'); ?>
	        </div>   

		<td colspan="1">
		   <?php echo $form->textfield($model,'Treinta33',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta33'); ?>
	        </div> 

		<td colspan="1">
		      <?php echo $form->textfield($model,'Ocho33',array('size'=>0,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho33'); ?>
	        </div> 

		<td colspan="1">
             <?php echo $form->textfield($model,'Otro33',array('size'=>0,'maxlength'=>2,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro33'); ?>
	      </div>  


	        </div> 
	        </div>   
			</td>
        </tr>
      </tbody>
    </table>

  <table class="table table-bordered ">

<p id="demo"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->