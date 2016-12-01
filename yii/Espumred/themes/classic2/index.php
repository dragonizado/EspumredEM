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
				<p>No estas autorizado para estar aqui.</p>
			</div>
		</div>
		<div></div>
	</div>	
</body>
</html>