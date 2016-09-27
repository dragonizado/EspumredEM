<?php

$Registro=Yii::app()->session['Registro'];

 
?>

<style type="text/css">
	table { 
    border-collapse: collapse;
}
</style>



</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'descripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



<table class="col-md-33" align="center" >
<tbody>


<div class="col-md-12">

  <td>
	<div align="center" class="buttons">
			<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		  <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>



<br><br>

<table class="table table-bordered" >
      

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
		 <center>Otro<center>


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
	        <?php echo $form->checkbox($model,'Dias',array('size'=>0,'maxlength'=>1 ,'id'=>'Dias','class'=>'form-control')); ?>
		    <?php echo $form->error($model,'Dias'); ?>
	    </div>
		<td colspan="0">
		    <?php echo $form->checkbox($model,'Sesenta',array('size'=>0,'maxlength'=>1 ,'id'=>'Sesenta','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Sesenta'); ?>
	    </div>

		<td colspan="0">
           <?php echo $form->checkbox($model,'Treinta',array('size'=>0,'maxlength'=>1 ,'id'=>'Treinta','class'=>'form-control')); ?>
		   <?php echo $form->error($model,'Treenta'); ?>
	    </div>

              
		<td colspan="0">
	      <?php echo $form->checkbox($model,'Ocho',array('size'=>0,'maxlength'=>1,'id'=>'Ocho','class'=>'form-control')); ?>
		  <?php echo $form->error($model,'Ocho'); ?>
	    </div>


		<td colspan="0">
		   <?php echo $form->checkbox($model,'Otro',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
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
		      <?php echo $form->checkbox($model,'Dias1',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias1'); ?>
	        </div>   
		                
		<td colspan="1">
		      <?php echo $form->checkbox($model,'Sesenta1',array('size'=>0,'maxlength'=>2 ,'id'=>'Sesenta1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta1'); ?>
	        </div>   

		<td colspan="1">
		    <?php echo $form->checkbox($model,'Treinta1',array('size'=>0,'maxlength'=>2 ,'id'=>'Treinta1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta1'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->checkbox($model,'Ocho1',array('size'=>0,'maxlength'=>1 ,'id'=>'Ocho1','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho1'); ?>
	        </div>   

		<td colspan="1">


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
              <?php echo $form->textfield($model,'nuevoprecio2',array('size'=>0,'maxlength'=>1 ,'id'=>'nuevoprecio3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio2'); ?>
	        </div>   
		              
		<td colspan="1">
		          <?php echo $form->textfield($model,'piefactura2',array('size'=>0,'maxlength'=>1 ,'id'=>'piefactura3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura2'); ?>
	        </div>        
		<td colspan="1">
		           <?php echo $form->textfield($model,'rebate2',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate2'); ?>
	        </div>      
		<td colspan="1">     
		   <?php echo $form->checkbox($model,'Dias2',array('size'=>0,'maxlength'=>1 ,'id'=>'Dias3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias2'); ?>
	        </div>   
		<td colspan="1">
		     <?php echo $form->checkbox($model,'Sesenta2',array('size'=>0,'maxlength'=>1 ,'id'=>'Sesenta3','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta2'); ?>
	        </div>   
		<td colspan="1">
		    <?php echo $form->checkbox($model,'Treinta2',array('size'=>0,'maxlength'=>1 ,'id'=>'Treinta3','class'=>'form-control')); ?>
		     <?php echo $form->error($model,'Treinta2'); ?>
	        </div>   

		<td colspan="1">		    
               <?php echo $form->checkbox($model,'Ocho2',array('size'=>0,'maxlength'=>1 ,'id'=>'Ocho3','class'=>'form-control')); ?>
		       <?php echo $form->error($model,'Ocho2'); ?>
	           </div>   
		<td colspan="1">

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
	          <?php echo $form->checkbox($model,'Dias3',array('size'=>0,'maxlength'=>2 ,'id'=>'Dias4','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias3'); ?>
	        </div>   
		<td colspan="1">
		       <?php echo $form->checkbox($model,'Sesenta3',array('size'=>0,'maxlength'=>2 ,'id'=>'SEsenta4','class'=>'form-control')); ?>
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
	             <?php echo $form->textfield($model,'Treinta4',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
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
               <?php echo $form->textfield($model,'referencia5',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
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
               <?php echo $form->textfield($model,'precioanterior29',array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior29'); ?>
	        </div>   
              
		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio29',array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'piefactura29',array('size'=>1,'maxlength'=>45 ,'id'=>'piefactura','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'rebate29',array('size'=>0,'maxlength'=>45 ,'id'=>'rebate30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate29'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Dias29',array('size'=>1,'maxlength'=>2 ,'id'=>'Dias30','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias29'); ?>
	        </div>   
		
		<td colspan="1">
              <?php echo $form->textfield($model,'Sesenta29',array('size'=>1,'maxlength'=>2 ,'id'=>'Sesenta30','class'=>'form-control')); ?>
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
              <?php echo $form->textfield($model,'referencia30',array('size'=>1,'maxlength'=>45 ,'id'=>'referencia31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia30'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'precioanterior30',array('size'=>0,'maxlength'=>45 ,'id'=>'precioanterior31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior31'); ?>
	        </div>   
              
		<td colspan="1">
              <?php echo $form->textfield($model,'nuevoprecio30',array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio30'); ?>
	        </div>   

		<td colspan="1">
                 <?php echo $form->textfield($model,'piefactura30',array('size'=>1,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura31'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate30',array('size'=>1,'maxlength'=>45,'id'=>'rebate31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Dias30',array('size'=>0,'maxlength'=>1 ,'id'=>'Dias31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias30'); ?>
	        </div>   
		
		<td colspan="1">
                 <?php echo $form->textfield($model,'Sesenta30',array('size'=>1,'maxlength'=>2 ,'id'=>'Sesenta31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta30'); ?>
	        </div>   

		<td colspan="1">
               <?php echo $form->textfield($model,'Treinta30',array('size'=>1,'maxlength'=>2 ,'id'=>'Treinta31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta30'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho30',array('size'=>1,'maxlength'=>2 ,'id'=>'Ocho31','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho30'); ?>
	        </div>   
		<td colspan="1">
		
		</tr>
		  <tr>
         
        <td colspan="0">
         <center>32<center>

         <td colspan="1">
                 UND BASE CAMAS
        
		<td colspan="1">   	
                 <?php echo $form->textfield($model,'referencia31',array('size'=>1,'maxlength'=>45 ,'id'=>'referencia32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia31'); ?>
	        </div>   

		<td colspan="1">
                   <?php echo $form->textfield($model,'precioanterior31',array('size'=>1,'maxlength'=>45 ,'id'=>'precioanterior32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior31'); ?>
	        </div>   
              
		<td colspan="1">
		     <?php echo $form->textfield($model,'nuevoprecio31',array('size'=>1,'maxlength'=>45 ,'id'=>'piefactura32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'piefactura31',array('size'=>1,'maxlength'=>45 ,'id'=>'piefactura32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'rebate31',array('size'=>1,'maxlength'=>45 ,'id'=>'rebate32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate31'); ?>
	        </div>   

		<td colspan="1">
	           <?php echo $form->textfield($model,'Dias31',array('size'=>1,'maxlength'=>2 ,'id'=>'Dias32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias31'); ?>
	        </div>   
		
		<td colspan="1">
           <?php echo $form->textfield($model,'Sesenta31',array('size'=>1,'maxlength'=>2 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta31'); ?>
	        </div>   

		<td colspan="1">
              <?php echo $form->textfield($model,'Treinta31',array('size'=>0,'maxlength'=>1 ,'id'=>'Treinta32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Treinta31'); ?>
	        </div>   

		<td colspan="1">
                <?php echo $form->textfield($model,'Ocho31',array('size'=>1,'maxlength'=>2 ,'id'=>'Ocho32','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Ocho31'); ?>
	        </div>   

		<td colspan="1">
		
		</tr>
		  <tr>

		<td colspan="0">
         <center>33<center>

         <td colspan="1">
               UND OTROS
        
		<td colspan="1">   	
                <?php echo $form->textfield($model,'referencia32',array('size'=>1,'maxlength'=>45 ,'id'=>'referencia33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia32'); ?>
	        </div>   

		<td colspan="1">
                  <?php echo $form->textfield($model,'precioanterior32',array('size'=>1,'maxlength'=>45 ,'id'=>'precioanterior33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior32'); ?>
	        </div>   
              
		<td colspan="1">
                 <?php echo $form->textfield($model,'nuevoprecio32',array('size'=>1,'maxlength'=>45 ,'id'=>'nuevoprecio33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio32'); ?>
	        </div>   

		<td colspan="1">
	               <?php echo $form->textfield($model,'piefactura32',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura32'); ?>
	        </div> 
	               

		<td colspan="1">
               <?php echo $form->textfield($model,'rebate32',array('size'=>1,'maxlength'=>45 ,'id'=>'rebate33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'rebate32'); ?>
	        </div>   

		<td colspan="1">
	               <?php echo $form->textfield($model,'Dias32',array('size'=>1,'maxlength'=>2 ,'id'=>'Dias33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Dias32'); ?>
	        </div>   
		<td colspan="1">
	          <?php echo $form->textfield($model,'Sesenta32',array('size'=>1,'maxlength'=>2 ,'id'=>'Sesenta33','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Sesenta32'); ?>
	        </div>   

		<td colspan="1">
		  <?php echo $form->checkbox($model,'Treinta32',array('size'=>1,'maxlength'=>2 ,'id'=>'Treinta33','class'=>'form-control')); ?>
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
                   <?php echo $form->textfield($model,'referencia33',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'referencia33'); ?>
	        </div> 

		<td colspan="1">   	
                   <?php echo $form->textfield($model,'precioanterior33',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'precioanterior33'); ?>
	        </div> 
            
		<td colspan="1">
		        <?php echo $form->textfield($model,'nuevoprecio33',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'nuevoprecio33'); ?>
	        </div> 
              
		<td colspan="1">
		      <?php echo $form->textfield($model,'piefactura33',array('size'=>0,'maxlength'=>45,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'piefactura33'); ?>
	        </div> 

		<td colspan="1">
		       <?php echo $form->textfield($model,'rebate33',array('size'=>0,'maxlength'=>45 ,'id'=>'Otro','class'=>'form-control')); ?>
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
		      <?php echo $form->textfield($model,'Otro33',array('size'=>0,'maxlength'=>1 ,'id'=>'Otro','class'=>'form-control')); ?>
		      <?php echo $form->error($model,'Otro33'); ?>
	        </div> 

		<td colspan="1">
              


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