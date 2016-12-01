<?php

		$protocolo = 'http://';
		$hosting = $_SERVER['HTTP_HOST'];
	 	$url_hots = $protocolo.$hosting."/";
	 	function start(){
	 		echo '<form action="/yii/required.php" method="post">';
	 		echo '<label for="cmd">Ingresa un Comando</label><br>';
	 		echo '<input type="text" id="cmd" name="cmd">';
	 		echo '<input type="submit" >';
	 		echo '</form>';

	 		return true;
	 	}
 	
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
 				<img src="<?php echo $url_hots;?>yii/Espumred/themes/classic2/img/logoredondo.png">
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
	 	var tecla = key.key;
      if(tecla == 'o'){
        $('.text ').html('<p><?php echo (start())? "Good yea." : "Parece que estas perdido.";?></p>');
      }
	if(tecla == 'p'){
        $('.text').html('<?php ;?><p>No hay nada aquí.</p>');
      }
	 });


	
 });
 </script>
</html>
