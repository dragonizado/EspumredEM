<?php 

class Funtions_Global{
	
	public function notifyMe($titulo,$cuerpo) {
        echo "<script>";
        echo "notifyMedos('".$titulo."','".$cuerpo."');";
        echo "</script>";
    }

    public function notifyMeD($titulo,$cuerpo) {
        echo "<script>";
		echo "function  notifyMedos()  {" ;
    	echo 	'if  (!("Notification"  in  window))  {' ;  
        echo 		'alert("Este navegador no soporta notificaciones de escritorio");'  ;
    	echo 	'}else  if  (Notification.permission  ===  "granted")  {';
        echo 		'var  options  =   {';
        echo     		"body:   '".$cuerpo."',";
        echo     		'icon:   "/yii/espumred/images/logoredondo2.png",';
        echo     		'dir :   "ltr"';
        echo 		'};';
        echo 		"var  notification  =  new  Notification('".$titulo."', options);";
    	echo 	"}else  if  (Notification.permission  !==  'denied')  {";
        echo 		"Notification.requestPermission(function (permission)  {";
        echo     		"if  (!('permission'  in  Notification))  {";
        echo         		"Notification.permission  =  permission;";
        echo     		"}";
        echo    			'if  (permission  ===  "granted")  {';
        echo         		"var  options  =   {";
        echo             		'body:   "Descripci&Oacute;n o cuerpo de la notificaci&Oacute;n",';
        echo         			'icon:   "/yii/espumred/images/logoredondo2.png",';
        echo        			'dir :   "ltr"';
        echo         		'};';   
        echo         		'var  notification  =  new  Notification("Hola :D", options);';
        echo     		'} '; 
        echo 		'});'; 
    	echo 	'}';
		echo '}';
        echo  "notifyMedos();";
        echo "</script>";
    }

}

 ?>