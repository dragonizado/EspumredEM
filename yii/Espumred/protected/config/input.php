<?php 

if(isset($_POST['cmd'])){
		$v = $_POST['cmd'];
		switch ($v) {
			case 'old':
				rename('index.php','old.php');
				header('/yii/Espumred');
				break;

				case 'New':
				rename('old.php','index.php');
				header('/yii/Espumred');
				break;
			
			default:
				echo "You are Crazy";
				break;
		}
	}else{
		// $protocolo = 'http://';
		// $hosting = $_SERVER['HTTP_HOST'];
	 // 	$url_hots = $protocolo.$hosting."/";

	 	header('/yii');
 	}

 ?>