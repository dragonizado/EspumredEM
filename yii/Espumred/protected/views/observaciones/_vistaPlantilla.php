<?php 

$modeloInformacionPersonal=Condicionescomerciales::model()->findByPk($model['condicionescomerciales']);
$modeloCondicion=Condicion::model()->findByPk($model['condicion']);
$id="0";

?>

<style type="text/css">

</style>

<!--cabecera-->

 	      
    <table class="table table-bordered" >
    	<thead>
		<td class="col-md-2"><img type="button" value="electr&oacute;nico" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px"> 

		<td class="col-md-6" align="center"><center>CONDICIONES COMERCIALES DEL CLIENTE<center>
			
		<td class="col-md-2" align="center">Codigo: FGC-01<br>Version:05<br>Fecha: 04/02/2016</td>
	</thead>

        
<!-- empieza el cuerpo del formulario Condiciones Comerciales-->


<table  class="table table-bordered  "  >
<thead>

			<td colspan="4">
			Nombre del Asesor:    <?php echo $modeloInformacionPersonal["nombreAsesor"]; ?>
			</td>
            <td coldspan="4" >
			Cod:                   <?php echo $modeloInformacionPersonal["cod"]; ?>
			</tr>
			<td colspan="4">
			Nombre del Cliente:       <?php echo $model["NombreCliente"]; ?>
            <td colspan="4">
            Tipologia del Cliente:     <?php echo $modeloInformacionPersonal["TipologiaCliente"]; ?>

            <td colspan="4">        
			Cambio:                   <?php echo $modeloInformacionPersonal["Cambio"]; ?>
			                
			</td>

            <td colspan="4" >
			Neg Puntual:                <?php echo $modeloInformacionPersonal["negPuntual"]; ?>
            <td colspan="4">
			Vigencia Desde:             <?php echo $modeloInformacionPersonal["vigenciadesde"]; ?>       
			</td> 
            <td colspan="4">
			Vigencia Hasta:            <?php echo $modeloInformacionPersonal["vigenciahasta"]; ?>

             <tr>
                <tr>
         	
        
 

       <table class="table table-bordered" >
              <thead>

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
                  <?php echo $modeloCondicion["referencia"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["precioanterior"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["nuevoprecio"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["piefactura"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["rebate"]; ?>  

		<td colspan="1">
	                 <?php echo $modeloCondicion["Dias"]; ?>  

		<td colspan="1">
		            <?php echo $modeloCondicion["Sesenta"]; ?>  

		<td colspan="1">
		            <?php echo $modeloCondicion["Treinta"]; ?>  
              
		<td colspan="1">
                     <?php echo $modeloCondicion["Ocho"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["Otro"]; ?>  


			</tr>
                <tr>
			
             <td colspan="0">
         <center>2<center>


         <td colspan="1">
            KG ESPUMA D18 KG
        
		<td colspan="1">   	
                      <?php echo $modeloCondicion["referencia1"]; ?>  

		<td colspan="1">
		              <?php echo $modeloCondicion["precioanterior1"]; ?>  
 
		<td colspan="1">
		              <?php echo $modeloCondicion["nuevoprecio1"]; ?>  
 
		<td colspan="1">
		              <?php echo $modeloCondicion["piefactura1"]; ?>  
 
		<td colspan="1">
	           <?php echo $modeloCondicion["rebate1"]; ?>  
            
		<td colspan="1">
		          <?php echo $modeloCondicion["Dias1"]; ?>  

		                
		<td colspan="1">
		         <?php echo $modeloCondicion["Sesenta1"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["Treinta1"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Ocho1"]; ?>  

		<td colspan="1">
               <?php echo $modeloCondicion["Otro1"]; ?>  


        			</tr>
                <tr>

         <td colspan="0">
         <center>3<center>

         <td colspan="1">
            KG ESPUMA TAPYCOL
        
		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia2"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["precioanterior2"]; ?>  
   

		<td colspan="1">
		              <?php echo $modeloCondicion["nuevoprecio2"]; ?>  

		<td colspan="1">
		             <?php echo $modeloCondicion["piefactura2"]; ?>  
  
		<td colspan="1">
		              <?php echo $modeloCondicion["rebate2"]; ?>  

		<td colspan="1">
	                <?php echo $modeloCondicion["Dias2"]; ?>  

		
		<td colspan="1">
		            <?php echo $modeloCondicion["Sesenta2"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["Treinta2"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Ocho2"]; ?>  

		<td colspan="1">
			
                 <?php echo $modeloCondicion["Otro2"]; ?>  


               </tr>
                   <tr>

         <td colspan="0">
         <center>4<center>

         <td colspan="1">
           KG ESPUMA D20
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia3"]; ?>  

            
		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior3"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["nuevoprecio3"]; ?>  
  

		<td colspan="1">
                 <?php echo $modeloCondicion["piefactura3"]; ?>  

		             
		<td colspan="1">
                   <?php echo $modeloCondicion["rebate3"]; ?>  

		<td colspan="1">
	            <?php echo $modeloCondicion["Dias3"]; ?>  

		<td colspan="1">
		       <?php echo $modeloCondicion["Sesenta3"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Treinta3"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["Ocho3"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["Otro3"]; ?>  

            </tr>
                   <tr>

        <td colspan="0">
         <center>5<center>

         <td colspan="1">
            KG ESPUMA D23 P23
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia4"]; ?>  

            
		<td colspan="1">
		       <?php echo $modeloCondicion["precioanterior4"]; ?>  

              
		<td colspan="1">
		      <?php echo $modeloCondicion["nuevoprecio4"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["piefactura4"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["rebate4"]; ?>  


		<td colspan="1">
	             <?php echo $modeloCondicion["Dias4"]; ?>  

		
		<td colspan="1">
                <?php echo $modeloCondicion["Sesenta4"]; ?>  


		<td colspan="1">
	            <?php echo $modeloCondicion["Treinta4"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Ocho4"]; ?>  

		<td colspan="1">

               <?php echo $modeloCondicion["Otro4"]; ?>  


        </tr>
             <tr>
        
        <td colspan="0">
         <center>6<center>

         <td colspan="1">
            KG ESPUMA D26 P26
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia5"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["precioanterior5"]; ?>  

              
		<td colspan="1">
		      <?php echo $modeloCondicion["nuevoprecio5"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["piefactura5"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["rebate5"]; ?>  


		<td colspan="1">
	           <?php echo $modeloCondicion["Dias5"]; ?>  

		
		<td colspan="1">
		      <?php echo $modeloCondicion["Sesenta5"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["Treinta5"]; ?>  


		<td colspan="1">
		      <?php echo $modeloCondicion["Ocho5"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Otro5"]; ?>  

        </tr>
             <tr>
        
        <td colspan="0">
         <center>7<center>

         <td colspan="1">
            KG ESPUMA D30
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia6"]; ?>  
              
            
		<td colspan="1">
		          <?php echo $modeloCondicion["precioanterior6"]; ?>  
              
		<td colspan="1">
		           <?php echo $modeloCondicion["nuevoprecio6"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["piefactura7"]; ?>  
		<td colspan="1">
		          <?php echo $modeloCondicion["rebate6"]; ?>  
                 
		<td colspan="1">
	            <?php echo $modeloCondicion["Dias6"]; ?>  
		
		<td colspan="1">
		        <?php echo $modeloCondicion["Sesenta6"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["Treinta6"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["Ocho6"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Otro6"]; ?>  
           </tr>
              <tr>

        <td colspan="0">
         <center>8<center>

         <td colspan="1">
        KG ESPUMA D30 TERMO
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia7"]; ?>  
               
		<td colspan="1">
                 <?php echo $modeloCondicion["precioanterior7"]; ?>  
		   
		<td colspan="1">
		         <?php echo $modeloCondicion["nuevoprecio7"]; ?>  
		<td colspan="1">
		        <?php echo $modeloCondicion["piefactura7"]; ?>  
             
		<td colspan="1">
                 <?php echo $modeloCondicion["rebate7"]; ?>  
		      
		<td colspan="1">
	              <?php echo $modeloCondicion["Dias7"]; ?>  
		
		<td colspan="1">
                 <?php echo $modeloCondicion["Sesenta7"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Treinta7"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["Ocho7"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["Otro7"]; ?>  
		</tr>
		   <tr>

		<td colspan="0">
         <center>9<center>

         <td colspan="1">
            KG ESPUMA D40
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia8"]; ?>  
            
		<td colspan="1">
		       <?php echo $modeloCondicion["precioanterior8"]; ?>  
               
		<td colspan="1">
                <?php echo $modeloCondicion["nuevoprecio8"]; ?>  
		   
		<td colspan="1">
		      <?php echo $modeloCondicion["piefactura8"]; ?>  
               

		<td colspan="1">
                <?php echo $modeloCondicion["rebate8"]; ?>  
		   
		<td colspan="1">
	          <?php echo $modeloCondicion["Dias8"]; ?>  
		
		<td colspan="1">
		       <?php echo $modeloCondicion["Sesenta8"]; ?>  

		<td colspan="1">
		     <?php echo $modeloCondicion["Treinta8"]; ?>  

		<td colspan="1">
		      <?php echo $modeloCondicion["Ocho8"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["Otro8"]; ?>  
        </tr>
          <tr>

        <td colspan="0">
         <center>10<center>

         <td colspan="1">
            KG ESPUMA D40 VISCO
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia9"]; ?>  
		<td colspan="1">
		        <?php echo $modeloCondicion["precioanterior9"]; ?>  
                
		<td colspan="1">
		       <?php echo $modeloCondicion["nuevoprecio9"]; ?>  
                
		<td colspan="1">
		       <?php echo $modeloCondicion["piefactura9"]; ?>  
		<td colspan="1">
	           <?php echo $modeloCondicion["rebate9"]; ?>  
		<td colspan="1">
	            <?php echo $modeloCondicion["Dias9"]; ?>  
		<td colspan="1">
		         <?php echo $modeloCondicion["Sesenta9"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["Treinta9"]; ?>  
		        
		<td colspan="1">
		         <?php echo $modeloCondicion["Ocho9"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["Otro9"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>11<center>

         <td colspan="1">
            KG VISCOELASTICA D55
        
		<td colspan="1">   	
                   <?php echo $modeloCondicion["referencia10"]; ?>  
		<td colspan="1">
                   <?php echo $modeloCondicion["precioanterior10"]; ?>  
		<td colspan="1">
		           <?php echo $modeloCondicion["nuevoprecio10"]; ?>  

		<td colspan="1">
                   <?php echo $modeloCondicion["piefactura10"]; ?>  

		<td colspan="1">
	               <?php echo $modeloCondicion["rebate10"]; ?>  
 
		<td colspan="1">
	              <?php echo $modeloCondicion["Dias10"]; ?>  

		<td colspan="1">
               <?php echo $modeloCondicion["Sesenta10"]; ?>  


		<td colspan="1">
               <?php echo $modeloCondicion["Treinta10"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Ocho10"]; ?>  

		<td colspan="1">
		       <?php echo $modeloCondicion["Otro10"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>12<center>

         <td colspan="1">
            KG ESPUMA D60
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia11"]; ?>  

          
		<td colspan="1">
                 <?php echo $modeloCondicion["precioanterior11"]; ?>  

              
		<td colspan="1">
                <?php echo $modeloCondicion["nuevoprecio11"]; ?>  


		<td colspan="1">
	             <?php echo $modeloCondicion["piefactura11"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["rebate11"]; ?>  


		<td colspan="1">
	              <?php echo $modeloCondicion["Dias11"]; ?>  

		
		<td colspan="1">
		        <?php echo $modeloCondicion["Sesenta11"]; ?>  


		<td colspan="1">
		            <?php echo $modeloCondicion["Treinta11"]; ?>  


		<td colspan="1">
	              <?php echo $modeloCondicion["Ocho11"]; ?>  

		<td colspan="1">      
                 <?php echo $modeloCondicion["Otro11"]; ?>  

        </tr>
          <tr>

        <td colspan="0">
         <center>13<center>

         <td colspan="1">
            KG CONTINUA D12
        
		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia12"]; ?>  
           
		<td colspan="1">
		            <?php echo $modeloCondicion["precioanterior12"]; ?>  

           
		<td colspan="1">
		        <?php echo $modeloCondicion["nuevoprecio12"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["piefactura12"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["rebate12"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Dias12"]; ?>  

		
		<td colspan="1">
               <?php echo $modeloCondicion["Sesenta12"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Treinta12"]; ?>  

		<td colspan="1">
                <?php echo $modeloCondicion["Ocho12"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["Otro12"]; ?>  

		</tr>
		  <tr>
        
        <td colspan="0">
         <center>14<center>

         <td colspan="1">
               KG CONTINUA D18

		<td colspan="1">   	
               <?php echo $modeloCondicion["referencia13"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior13"]; ?>  
        
		<td colspan="1">
		      <?php echo $modeloCondicion["nuevoprecio13"]; ?>  


		<td colspan="1">
		     <?php echo $modeloCondicion["piefactura13"]; ?>  


		<td colspan="1">
               <?php echo $modeloCondicion["rebate13"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Dias13"]; ?>  

		
		<td colspan="1">
                  <?php echo $modeloCondicion["Sesenta13"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Treinta13"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Ocho13"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Otro13"]; ?>  


		</tr>
		  <tr>

		<td colspan="0">
         <center>15<center>

         <td colspan="1">
                 KG CONTINUA D20
        
		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia14"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["precioanterior14"]; ?>  

              
		<td colspan="1">
		      <?php echo $modeloCondicion["nuevoprecio14"]; ?>  

		<td colspan="1">
		      <?php echo $modeloCondicion["piefactura14"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["rebate14"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Dias14"]; ?>  

		
		<td colspan="1">
                 <?php echo $modeloCondicion["Sesenta14"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Treinta14"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Ocho14"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["Otro14"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>16<center>

         <td colspan="1">
                    KG CONTINUA D30

		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia15"]; ?>  

          
		<td colspan="1">
		             <?php echo $modeloCondicion["precioanterior15"]; ?>  

		<td colspan="1">
		              <?php echo $modeloCondicion["nuevoprecio15"]; ?>  

		<td colspan="1">
		             <?php echo $modeloCondicion["piefactura15"]; ?>  


		<td colspan="1">
		           <?php echo $modeloCondicion["rebate15"]; ?>  

		<td colspan="1">
                    <?php echo $modeloCondicion["Dias15"]; ?>  

		
		<td colspan="1">
                    <?php echo $modeloCondicion["Sesenta15"]; ?>  


		<td colspan="1">
                   <?php echo $modeloCondicion["Treinta15"]; ?>  


		<td colspan="1">
                   <?php echo $modeloCondicion["Ocho15"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Otro15"]; ?>  


		</tr>
		  <tr>

		<td colspan="0">
         <center>17<center>

         <td colspan="1">
                  KG CONTINUA D30 TERMO
        
		<td colspan="1">   	
               <?php echo $modeloCondicion["referencia16"]; ?>  

           
		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior16"]; ?>  

              
		<td colspan="1">
		        <?php echo $modeloCondicion["nuevoprecio16"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["piefactura16"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["rebate16"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Dias16"]; ?>  

		
		<td colspan="1">
                   <?php echo $modeloCondicion["Sesenta16"]; ?>  


		<td colspan="1">
                    <?php echo $modeloCondicion["Treinta16"]; ?>  


		<td colspan="1">
                    <?php echo $modeloCondicion["Ocho16"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Otro16"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>18<center>

         <td colspan="1">
                    KG CONTINUA D40

        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia17"]; ?>  

            
		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior17"]; ?>  

              
		<td colspan="1">
		          <?php echo $modeloCondicion["nuevoprecio17"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["piefactura17"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["rebate17"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Dias17"]; ?>  

		
		<td colspan="1">
                  <?php echo $modeloCondicion["Sesenta17"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Treinta17"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Ocho17"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["Otro17"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>19<center>

         <td colspan="1">
                    KG CONTINUA D60
        
		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia18"]; ?>  

            
		<td colspan="1">
		            <?php echo $modeloCondicion["precioanterior18"]; ?>  

              
		<td colspan="1">
		           <?php echo $modeloCondicion["nuevoprecio18"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["piefactura18"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["rebate18"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Dias18"]; ?>  

		
		<td colspan="1">
                  <?php echo $modeloCondicion["Sesenta18"]; ?>  


		<td colspan="1">
	                <?php echo $modeloCondicion["Treinta18"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Ocho18"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["Otro18"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>20<center>

         <td colspan="1">
                KG CASSATA
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia19"]; ?>  

            
		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior19"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["nuevoprecio19"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["piefactura19"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["rebate19"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["Dias19"]; ?>  

		
		<td colspan="1">
	              <?php echo $modeloCondicion["Sesenta19"]; ?>  


		<td colspan="1">
	              <?php echo $modeloCondicion["Treinta19"]; ?>  


		<td colspan="1">
	               <?php echo $modeloCondicion["Ocho19"]; ?>  


		<td colspan="1">            
                  <?php echo $modeloCondicion["Otro19"]; ?>  

        </tr>
          <tr>

        <td colspan="0">
         <center>21<center>

         <td colspan="1">
                KG CUEROS
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia20"]; ?>  


		<td colspan="1">
		           <?php echo $modeloCondicion["precioanterior20"]; ?>  

              
		<td colspan="1">
		          <?php echo $modeloCondicion["nuevoprecio20"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["piefactura20"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["rebate20"]; ?>  


		<td colspan="1">
               <?php echo $modeloCondicion["Dias20"]; ?>  

		
		<td colspan="1">
                <?php echo $modeloCondicion["Sesenta20"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["Treinta20"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["Ocho20"]; ?>  

		<td colspan="1">
		       <?php echo $modeloCondicion["Otro20"]; ?>  

		</tr>
          <tr>

        <td colspan="0">
         <center>22<center>

         <td colspan="1">
                KG RETAL
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia21"]; ?>  

           
		<td colspan="1">
		         <?php echo $modeloCondicion["precioanterior21"]; ?>  

              
		<td colspan="1">
                 <?php echo $modeloCondicion["nuevoprecio21"]; ?>  


		<td colspan="1">
                 <?php echo $modeloCondicion["piefactura21"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["rebate21"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Dias21"]; ?>  

		
		<td colspan="1">
	            <?php echo $modeloCondicion["Sesenta21"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["Treinta21"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["Ocho21"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["Otro21"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>23<center>

         <td colspan="1">
                 KG TRITURADO
        
		<td colspan="1">   	
              <?php echo $modeloCondicion["referencia22"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["precioanterior22"]; ?>  

              
		<td colspan="1">
		       <?php echo $modeloCondicion["nuevoprecio22"]; ?>  


		<td colspan="1">
		       <?php echo $modeloCondicion["piefactura22"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["rebate22"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Dias22"]; ?>  

		
		<td colspan="1">
                <?php echo $modeloCondicion["Sesenta22"]; ?>  


		<td colspan="1">
                <?php echo $modeloCondicion["Treinta22"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["Ocho22"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["Otro22"]; ?>  

		</tr>
		  <tr>

		<td colspan="0">
         <center>24<center>

         <td colspan="1">
                 KG SEGUNDAS
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia23"]; ?>  

     
		<td colspan="1">
	             <?php echo $modeloCondicion["precioanterior23"]; ?>  

              
		<td colspan="1">
                <?php echo $modeloCondicion["nuevoprecio23"]; ?>  


		<td colspan="1">
		        <?php echo $modeloCondicion["piefactura23"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["rebate23"]; ?>  


		<td colspan="1">
                  <?php echo $modeloCondicion["Dias23"]; ?>  

		
		<td colspan="1">
		          <?php echo $modeloCondicion["Sesenta23"]; ?>  


		<td colspan="1">
		          <?php echo $modeloCondicion["Treinta23"]; ?>  


		<td colspan="1">
		         <?php echo $modeloCondicion["Ocho23"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Otro23"]; ?>   
		</tr>
		  <tr>

		<td colspan="0">
         <center>25<center>

         <td colspan="1">
                UND COLCHONES
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia24"]; ?>  

		<td colspan="1">
                <?php echo $modeloCondicion["precioanterior24"]; ?>  
              
		<td colspan="1">
                  <?php echo $modeloCondicion["nuevoprecio24"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["piefactura24"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["rebate24"]; ?>  

		<td colspan="1">
                <?php echo $modeloCondicion["Dias24"]; ?>  
		
		<td colspan="1">
                 <?php echo $modeloCondicion["Sesenta24"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["Treinta24"]; ?>  

		<td colspan="1">
	               <?php echo $modeloCondicion["Ocho24"]; ?>  

		<td colspan="1">
		        <?php echo $modeloCondicion["Otro24"]; ?>  

		</tr>
		 <tr>

		<td colspan="0">
         <center>26<center>

         <td colspan="1">
                    UND COLCHONETAS
        
		<td colspan="1">   	
                <?php echo $modeloCondicion["referencia25"]; ?>  
     
		<td colspan="1">
                 <?php echo $modeloCondicion["precioanterior25"]; ?>  
              
		<td colspan="1">
                 <?php echo $modeloCondicion["nuevoprecio25"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["piefactura25"]; ?>  

		<td colspan="1">
		         <?php echo $modeloCondicion["rebate25"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Dias25"]; ?>  
		
		<td colspan="1">
                   <?php echo $modeloCondicion["Sesenta25"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Treinta25"]; ?>  

		<td colspan="1">
                  <?php echo $modeloCondicion["Ocho25"]; ?>  

		<td colspan="1">
		          <?php echo $modeloCondicion["Otro25"]; ?>  

		</tr>
		  <tr>
		<td colspan="0">
         <center>27<center>

         <td colspan="1">
                  UND ALMOHADAS
        
		<td colspan="1">   	
                 <?php echo $modeloCondicion["referencia26"]; ?>  
		<td colspan="1">
	             <?php echo $modeloCondicion["precioanterior26"]; ?>  
              
		<td colspan="1">
		         <?php echo $modeloCondicion["nuevoprecio26"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["piefactura26"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["rebate26"]; ?>  

		<td colspan="1">
                 <?php echo $modeloCondicion["Dias26"]; ?>  
		
		<td colspan="1">
                   <?php echo $modeloCondicion["Sesenta26"]; ?>  

		<td colspan="1">
                   <?php echo $modeloCondicion["Treinta26"]; ?>  

		<td colspan="1">
                   <?php echo $modeloCondicion["Ocho26"]; ?>  

		<td colspan="1">
		           <?php echo $modeloCondicion["Otro26"]; ?>  
		</tr>
		  <tr>

		<td colspan="0">
         <center>28<center>

         <td colspan="1">
                   UND MÓDULOS
        
		<td colspan="1">   	
                  <?php echo $modeloCondicion["referencia27"]; ?>  
        
		<td colspan="1">
	              <?php echo $modeloCondicion["precioanterior27"]; ?>  
              
		<td colspan="1">
                     <?php echo $modeloCondicion["nuevoprecio27"]; ?> 
                 
		<td colspan="1">
		            <?php echo $modeloCondicion["piefactura27"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["rebate27"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["Dias27"]; ?> 
		
		<td colspan="1">
                    <?php echo $modeloCondicion["Sesenta27"]; ?> 

		<td colspan="1">
	                <?php echo $modeloCondicion["Treinta27"]; ?> 

		<td colspan="1">
                   <?php echo $modeloCondicion["Ocho27"]; ?> 

		<td colspan="1">
		              <?php echo $modeloCondicion["Otro27"]; ?> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>29<center>

         <td colspan="1">
                  UND SUDADEROS
        
		<td colspan="1">   	
                    <?php echo $modeloCondicion["referencia28"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["precioanterior28"]; ?> 
              
		<td colspan="1">
                     <?php echo $modeloCondicion["nuevoprecio28"]; ?> 

		<td colspan="1">
	                  <?php echo $modeloCondicion["piefactura28"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["rebate28"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["Dias28"]; ?> 
		
		<td colspan="1">
                     <?php echo $modeloCondicion["Sesenta28"]; ?> 

		<td colspan="1">
	                  <?php echo $modeloCondicion["Treinta28"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["Ocho28"]; ?> 

		<td colspan="1">
		           <?php echo $modeloCondicion["Otro28"]; ?> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>30<center>

         <td colspan="1">
                  UND MUEBLES
        
		<td colspan="1">   	
                   <?php echo $modeloCondicion["referencia29"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["precioanterior29"]; ?> 
              
		<td colspan="1">
                      <?php echo $modeloCondicion["nuevoprecio29"]; ?> 

		<td colspan="1">
                      <?php echo $modeloCondicion["piefactura29"]; ?> 

		<td colspan="1">
                       <?php echo $modeloCondicion["rebate29"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["Dias29"]; ?> 
		
		<td colspan="1">
	                 <?php echo $modeloCondicion["Sesenta29"]; ?> 

		<td colspan="1">
	                  <?php echo $modeloCondicion["Treinta29"]; ?> 

		<td colspan="1">
	                  <?php echo $modeloCondicion["Ocho29"]; ?> 

		<td colspan="1">
		            <?php echo $modeloCondicion["Otro29"]; ?> 

		</tr>
		 <tr>
		<td colspan="0">
         <center>31<center>

         <td colspan="1">
              UND COMBOS
        
		<td colspan="1">   	
                   <?php echo $modeloCondicion["referencia30"]; ?> 

		<td colspan="1">
	                 <?php echo $modeloCondicion["precioanterior30"]; ?> 
              
		<td colspan="1">
                      <?php echo $modeloCondicion["nuevoprecio30"]; ?> 

		<td colspan="1">
                      <?php echo $modeloCondicion["piefactura30"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["rebate30"]; ?> 

		<td colspan="1">
                       <?php echo $modeloCondicion["Dias30"]; ?> 
		
		<td colspan="1">
                      <?php echo $modeloCondicion["Sesenta30"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["Treinta30"]; ?> 

		<td colspan="1">
	                  <?php echo $modeloCondicion["Ocho30"]; ?> 

		<td colspan="1">
		              <?php echo $modeloCondicion["Otro30"]; ?> 
		</tr>
		  <tr>
         
        <td colspan="0">
         <center>32<center>

         <td colspan="1">
                 UND BASE CAMAS
        
		<td colspan="1">   	
                     <?php echo $modeloCondicion["referencia31"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["precioanterior31"]; ?> 
              
		<td colspan="1">
		            <?php echo $modeloCondicion["nuevoprecio31"]; ?> 

		<td colspan="1">
                       <?php echo $modeloCondicion["piefactura31"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["rebate31"]; ?> 

		<td colspan="1">
                  <?php echo $modeloCondicion["Dias31"]; ?> 
		
		<td colspan="1">
	                 <?php echo $modeloCondicion["Sesenta31"]; ?> 

		<td colspan="1">
                    <?php echo $modeloCondicion["Treinta31"]; ?> 

		<td colspan="1">
		             <?php echo $modeloCondicion["Ocho31"]; ?> 

		<td colspan="1">
		             <?php echo $modeloCondicion["Otro31"]; ?> 
		</tr>
		  <tr>

		<td colspan="0">
         <center>33<center>

         <td colspan="1">
                 UND OTROS
        
		<td colspan="1">   	
                   <?php echo $modeloCondicion["referencia32"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["precioanterior32"]; ?> 
              
		<td colspan="1">
                      <?php echo $modeloCondicion["nuevoprecio32"]; ?> 

		<td colspan="1">
	                <?php echo $modeloCondicion["piefactura32"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["rebate32"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["Dias32"]; ?> 
		<td colspan="1">
	                   <?php echo $modeloCondicion["Sesenta32"]; ?> 
		<td colspan="1">
                     <?php echo $modeloCondicion["Treinta32"]; ?> 
		<td colspan="1">
                     <?php echo $modeloCondicion["Ocho32"]; ?> 
		<td colspan="1">
                      <?php echo $modeloCondicion["Otro32"]; ?> 
		</tr>
		  <tr>
        
        <td colspan="0">
         <center>34<center>

         <td colspan="1">
                        <?php echo $modeloCondicion["descripcion"]; ?>
        
		<td colspan="1">   	
                       <?php echo $modeloCondicion["referencia33"]; ?> 
            
		<td colspan="1">
		               <?php echo $modeloCondicion["precioanterior33"]; ?> 
              
		<td colspan="1">
		            <?php echo $modeloCondicion["nuevoprecio33"]; ?> 

		<td colspan="1">
		             <?php echo $modeloCondicion["piefactura33"]; ?> 

		<td colspan="1">
		              <?php echo $modeloCondicion["rebate33"]; ?> 

		<td colspan="1">
                   <?php echo $modeloCondicion["Dias33"]; ?> 

		<td colspan="1">
                     <?php echo $modeloCondicion["Sesenta33"]; ?> 

		<td colspan="1">
                       <?php echo $modeloCondicion["Treinta33"]; ?> 

		<td colspan="1">
                   <?php echo $modeloCondicion["Ocho33"]; ?> 

		<td colspan="1">
                      <?php echo $modeloCondicion["Otro33"]; ?> 
			</td>
        </tr>
      </tbody>
    </table>



  <table class="table table-bordered ">
    <thead>
  <td colspan="25">
    
        Observaciones:  <?php echo $model["observaciones"];?>
        
    </thead>    
         </td>
       </tr>
      </tbody>
   </table>
    
    Firma Asesor: <?php echo $modeloInformacionPersonal["nombreAsesor"];?><td>
   
    <td class="col-md-20">
    Fecha: <?php echo $model["fecha"];?>

    <?php
     /* @var $this ArticulosPrestamoClienteController */
    /* @var $model ArticulosPrestamoCliente */
   /* @var $form CActiveForm */
    ?>
    <br><br>
    <table class="col-md-2" align="center">
	<tr>


     Autorizaciones:
     <br><br>
     


	   <td class="col-md-4">

       <center><?php echo $model["gerente_comercial"];?><center>
       __________________________________
		Gerente Comercial
		<center>fecha autorizacion:  <?php echo $model["fechautorizacion"];?>  
	                             
		

		<td class="col-md-4">

		<center><?php echo $model["gerente_cartera"];?><center>
		________________________________
		Gerente Cartera
		<center>fecha autorizacion:  <?php echo $model["fechautorizacion1"];?>  

	

		<td class="col-md-4"><br>
	    	
		
        <center><?php echo $model["gerente_general"];?><center>
         __________________________________  
		<center>Gerente General<center>
		fecha autorizacion:     <?php echo $model["fechautorizacion2"];?>  


   <br><br>

   </tr>	
 <tr>
 </table>
<!--input type="button" name="imprimir" value="Imprimir P&aacute;gina" onclick="window.print();"-->

