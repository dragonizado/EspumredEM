<?php

$Registro=Yii::app()->session['Registro'];

?>
<script type="text/javascript">
$(document).ready(function(){
	dataload();
});

	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=descripcion/create";  			 
        //$(this).parent().remove();
});

 function dataload(){
 	var Registros;
 	$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicion/cargar",
 		function(data){
 			console.log(data);
 				var Registro = data;
 				var Index;
 				Registros = $.parseJSON(Registro);
 				for (var i = 1 ; i <= 34; i++) {
			 		$("#referencia"+i).val(Registros[1]["referencia"+i]);
			 		$("#precioanterior"+i).val(Registros[1]["precioanterior"+i]);
			 		$("#nuevoprecio"+i).val(Registros[1]["nuevoprecio"+i]);
			 		$("#piefactura"+i).val(Registros[1]["piefactura"+i]);
			 		$("#rebate"+i).val(Registros[1]["rebate"+i]);
			 		$("#Dias"+i).val(Registros[1]["Dias"+i]);
			 		$("#Sesenta"+i).val(Registros[1]["Sesenta"+i]);
			 		$("#Treinta"+i).val(Registros[1]["Treinta"+i]);
			 		$("#Ocho"+i).val(Registros[1]["Ocho"+i]);
			 		$("#Otro"+i).val(Registros[1]["Otro"+i]);
			 	}
 		});
 	
 }

function format(input)
{
	var num = input.value.replace(/\./g,'');
	if(!isNaN(num))
	{
		num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
		num = num.split('').reverse().join('').replace(/^[\.]/,'');
		input.value = num;
	}else{ 
		alert('Solo se permiten numeros');
		input.value = input.value.replace(/[^\d\.]*/g,'');
	}
}			     
					

$(window).scroll(function(e)
		{
			// console.log($(this).scrollTop());
			if ($(this).scrollTop() > 300){
				var otrPor1 = $("#Otro1").val();
				var otrDia1 = $("#Otro2").val();
				$('.cien').addClass("fixed");
				$('.cien').removeClass("hidden");
				$('#otrPor').html(otrPor1);
				$('#otrDia').html(otrDia1);
			} else {
				$('.cien').removeClass("fixed");
				$('.cien').addClass("hidden");
			}
		});

</script>

<!-- <div class="form"> -->

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicion-form',
	
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
 <style>
td.colcentro{
	padding-top:41px !important;
}

.condicionesinputtable{
	/*border: none;*/
	width: 100%;
}

.condicionesinputtable:focus{
	border: 2px solid #ff5d00;
}
tr:has( .condicionesinputtable:focus){
	background-color: blue;
} 

table thead tr td{
	background-color: #BFBFBF;
}


/*
.fixed{
	position: absolute;
	margin-left: 5%; 
}*/
.fixed{
	position: fixed;
}
.hidden{
	display: none;
}
.cien{
	top:0px;
	/*width: 100%;*/
	/*left:0px;*/
	/*height: 100px;*/
	/*background-color: blue;*/
}


@media (min-width: 1200px){
	.cien{
		width: 1141px;
	}
}


@media (min-width: 992px) and (max-width: 1200px){
	.cien{
		width: 942px;
	}
}

@media (max-width: 979px) and (min-width: 768px){
	.cien{
		width: 700px;
	}
}

@media(max-width: 768px){
	.cien{
		display: none;
	}
}

 </style>

	<table  class="table cien table-bordered fixed hidden" style="max-width:1141px;">
	<thead>
		<tr align="center">
			<td rowspan="3" class="colcentro" width="43">REG</td>
			<td rowspan="3" class="colcentro" width="249">DESCRIPCIÓN</td>
			<td rowspan="3" class="colcentro" width="117">REFERENCIA</td>
			<td rowspan="3" class="colcentro" width="171">PRECIO ANTERIOR</td>
			<td rowspan="3" class="colcentro" width="146">NUEVO PRECIO</td>
			<td colspan="2" rowspan="2" width="99">DCTO COMERCIAL</td>
			<td colspan="4" width="177">DCTO FINANCIERO</td>
			<td colspan="1" width="61">OTRO</td>
		</tr>
		<tr align="center">
			<td width="49">%</td>
			<td>2</td>
			<td>5</td>
			<td>8</td>
			<td id="otrPor"></td>
		</tr>
		<tr align="center">
			<td>PIE <br> FACTURA</td>
			<td>REBATE</td>
			<td width="49">DIAS</td>
			<td>60</td>
			<td>30</td>
			<td>08</td>
			<td id="otrDia"></td>
		</tr>
	</thead>
	
</table>
<div style="margin-bottom:25px;">
	<div align="left"  style="width:50%; display:inline-block; padding-left:10px;" class="buttons" style>
		<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
	</div>
	<div align="right" style="width:49%;  display:inline-block " class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="table-responsive">
 <table  class="table table-bordered ">
	<thead>
		<tr align="center">
			<td rowspan="3" class="colcentro">REG</td>
			<td rowspan="3" class="colcentro">DESCRIPCIÓN</td>
			<td rowspan="3" class="colcentro">REFERENCIA</td>
			<td rowspan="3" class="colcentro">PRECIO ANTERIOR</td>
			<td rowspan="3" class="colcentro">NUEVO PRECIO</td>
			<td colspan="2" rowspan="2">DCTO COMERCIAL</td>
			<td colspan="4">DCTO FINANCIERO</td>
			<td colspan="1">OTRO</td>
		</tr>
		<tr align="center">
			<td>%</td>
			<td>2</td>
			<td>5</td>
			<td>8</td>
			<td><?php 
			echo $form->textfield($model,'Otro1',array('size'=>1,'maxlength'=>2 ,'id'=>'Otro1','class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   	echo $form->error($model,'Otro'); 
			 ?></td>
		</tr>
		<tr align="center">
			<td>PIE <br> FACTURA</td>
			<td>REBATE</td>
			<td>DIAS</td>
			<td>60</td>
			<td>30</td>
			<td>08</td>
			<td><?php 
			echo $form->textfield($model,'Otro2',array('size'=>1,'maxlength'=>2 ,'id'=>'Otro2','class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   	echo $form->error($model,'Otro'); 
			 ?></td>
		</tr>
	</thead>
	<tbody>
		<?php 
			$description = array(
				'KG ESPUMA D12 ',         
				'KG ESPUMA D18  KG',
				'KG ESPUMA TAPYCOL',
				'KG ESPUMA D20' ,                
				'KG ESPUMA D23 - P23 ', 
				'KG ESPUMA D26 - P26',   
				'KG ESPUMA D30',        
				'KG ESPUMA D30 TERMO',  
				'KG ESPUMA D40 ',     
				'KG ESPUMA D40 VISCO ',    
				'KG VISCOELASTICA D55 ',   
				'KG ESPUMA RA-300',
				'KG ESPUMA D60 ',
				'KG CONTINUA D12',             
				'KG CONTINUA D18 ' ,      
				'KG CONTINUA D20' ,         
				'KG CONTINUA D30 ' ,         
				'KG CONTINUA D30 TERMO ',
				'KG CONTINUA D40 ' ,           
				'KG CONTINUA D60',               
				'KG CONTINUA RA-300',
				'KG CASSATA',                       
				'KG CUEROS',                        
				'KG RETAL ',                      
				'KG TRITURADO ',                   
				'KG SEGUNDAS',                   
				'UND COLCHONES',           
				'UND COLCHONETAS',             
				'UND ALMOHADAS',                
				'UND MÓDULOS',                      
				'UND SUDADEROS ' ,    
				'UND MUEBLES',         
				'UND COMBOS',                       
				'UND BASE CAMAS ', 
				 
			      
			);

			$count = 1;
			$otrocount = 3;
			foreach ($description as $value) {
				echo "<tr>";
				echo	"<td>".$count."</td>";
				echo	"<td>".$value."</td>";
				echo	"<td>";
							echo $form->textfield($model,'referencia'.$count,array('size'=>1,'id'=>"referencia".$count,'maxlength'=>45,'class'=>'condicionesinputtable'  ,'style'=>"text-transform:uppercase;" ,"autocomplete"=>"off"));
		    				echo $form->error($model,'referencia'); 
				echo	"</td>";
				echo	"<td>";
				 			echo $form->textField($model,'precioanterior'.$count,array('size'=>1,'maxlength'=>45 ,'id'=>'precioanterior'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off", "onkeyup"=>"format(this)", "onchange"=>"format(this)")); 
		      	 			echo $form->error($model,'precioanterior'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textField($model,'nuevoprecio'.$count,array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off","onkeyup"=>"format(this)", "onchange"=>"format(this)")); 
		     				echo $form->error($model,'nuevoprecio'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'piefactura'.$count,array('size'=>1,'maxlength'=>15 ,'id'=>'piefactura'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		    				echo $form->error($model,'piefactura'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'rebate'.$count,array('size'=>1,'maxlength'=>15 ,'id'=>'rebate'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   					echo $form->error($model,'rebate'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'Dias'.$count,array('size'=>1,'maxlength'=>2 ,'id'=>'Dias'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		    				echo $form->error($model,'Dias'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'Sesenta'.$count,array('size'=>1,'maxlength'=>2 ,'id'=>'Sesenta'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   					echo $form->error($model,'Sesenta'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'Treinta'.$count,array('size'=>1,'maxlength'=>2 ,'id'=>'Treinta'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   					echo $form->error($model,'Treenta'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'Ocho'.$count,array('size'=>1,'maxlength'=>2,'id'=>'Ocho'.$count,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		  					echo $form->error($model,'Ocho'); 
				echo	"</td>";
				echo	"<td>";
							echo $form->textfield($model,'Otro'.$otrocount,array('size'=>1,'maxlength'=>2 ,'id'=>'Otro'.$otrocount,'class'=>'condicionesinputtable',"autocomplete"=>"off")); 
		   					echo $form->error($model,'Otro'); 
				echo	"</td>";
				echo	"</tr>";
		 		$count++;
		 		$otrocount++;
			}
		 ?>
	</tbody>
</table>
</div>

<div align="left"  style="width:50%; display:inline-block; padding-left:10px;" class="buttons" style>
		<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
</div>
<div align="right" style="width:49%;  display:inline-block " class="buttons">
	  <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
</div>

<p id="demo"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->