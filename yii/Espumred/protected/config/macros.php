<?php

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title> Acesso Restringido</title>
 </head>
 <style type="text/css">
 .container{
 	display: flex;
 	/*flex-direction:column;*/
 	width: 100%;
 	height: 100%;
 	justify-content: center;
 }

 .text{
 	display: inline-block;
 	align-self: vertical-aling;
 }
 .centro{
 	margin-top: 15%;
 }
 .text p{
 	font-size: 30px;
 }
 .img{
 	display: flex;
 	justify-content: center;
 }
 </style>
 <body>
 	<div class="container">
 		<div></div>
 		<div class="centro">
 			<div class="img">
 				<img src="/yii/Espumred/themes/classic/img/logoredondo.png">
 			</div>
 			<div class="text">
 				<p>Acceso restringido.</p>
 			</div>
 		</div>
 		<div></div>
 	</div>
</body>
<script type="text/javascript" src="Espumred/js/jquery-3.0.0.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
	 $('html').keyup(function(key){
	 	var tecla = key.key
      if(){
        $('.text').html('<p>Nada por aquí.</p>');
      }
	 });
 });
 </script>
</html>
