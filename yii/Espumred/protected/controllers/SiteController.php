<?php

class SiteController extends Controller
{
	public $layout='//layouts/main';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		

		if(Yii::app()->user->isGuest){
			$this->actionLogin();

		}else{
			$this->render('index');
			
		}
		 
	}

	public function actionRecuperacion()
	{	
		//En esta parte se declaran las variables con los valores que vienen desde el ajax.
		$frm_usuario = $_GET['user'];
		// $frm_correo = $_GET['email'];
		// usuarios con sus contraseñas
		$usandpss = array(
		'MartinE'=>array('123456','En actualizacion'),
		'Usuariocorte'=>array('corte','En actualizacion'),
		'UsuarioFactura'=>array('factura','En actualizacion'),
		'UsuarioCostos'=>array('costos','En actualizacion'),
		'UsuarioEx'=>array('costos','En actualizacion'),
		'ReneMorales'=>array('2b3576a91563129f1713a10851ea06d2','En actualizacion'),
		'UsuarioMayorista'=>array('costos','En actualizacion'),
		'Lopezl'=>array('recepcion','En actualizacion'),
		'Marinl'=>array('compras','En actualizacion'),
		'Wsanchez'=>array('mtto','En actualizacion'),
		'Ctrujillo'=>array('sistemas','En actualizacion'),
		'Rmorales'=>array('admin','En actualizacion'),
		'AdrianaV'=>array('humano','En actualizacion'),
		'YeidyG'=>array('humano','En actualizacion'),
		'LeonardoM'=>array('seguridad','En actualizacion'),
		'Sgsst'=>array('seguridad','En actualizacion'),
		'AdminFacturaSistemas'=>array('factura','En actualizacion'),
		'UsuarioFacturaGeneral'=>array('factura','En actualizacion'),
		'DiegoEM'=>array('factura','En actualizacion'),
		'Thumano'=>array('humano','En actualizacion'),
		'vehiculo'=>array('admin','En actualizacion'),
		'UsuarioDespachos'=>array('despachos','En actualizacion'),
		'PorteriaEM'=>array('porteriaestrella','En actualizacion'),
		'JavierMoreno'=>array('espumas','En actualizacion'),
		'prueba'=>array('admin','En actualizacion'),
		'TalentohumanoEM'=>array('talentohumanoESPUMAS','practicante.administrativo@espumasmedellin.com'),
		'UsuarioFacturaEstrella'=>array('factura','En actualizacion'),
		'UsuarioFacturaPoblado'=>array('factura','En actualizacion'),
		'Crua'=>array('almacen','En actualizacion'),
		'CarlosTrujillo'=>array('espumas','En actualizacion'),
		'FacturaCompras'=>array('compras','En actualizacion'),
		'Herramientas'=>array('mtto','En actualizacion'),
		'Test'=> array('987654321','practicante.sistemas@espumasmedellin.com'),
		'Gcomercial'=>array('gerentecomercial','gerente.comercial@espumasmedellin.com'),
		'Gcartera'=>array('gerentecartera','gerente.cartera@espumasmedellin.com'),
		'Ggeneral'=>array('gerentegeneral','raul.vergara@espumasmedellin.com'),
		'Nsanchez'=>array('nsanchez','gercomercial@espumasmedellin.com','Revisoria'),
		'Wauditoria'=>array('wilmerauditoria','En actualizacion'),
		'recepcionEM'=>array('RecepcionEM','En actualizacion'),
		'KATHEAH'=>array('JULIETA0116','En actualizacion'),
		'JARBOLEDA'=>array('RAQUEL2016','En actualizacion'),
		'JBAENA'=>array('CLIG23TH','En actualizacion'),
		'OSERNA'=>array('ESPUMASED40','En actualizacion'),
		'AORTIZ'=>array('ORTIZ1234','En actualizacion'),
		'ACORTES'=>array('CORTES123','En actualizacion'),
		'APINEDA'=>array('DRESER123','En actualizacion'),
		'CCHAURA'=>array('TONY123','En actualizacion'),
		'CDELRIO'=>array('PELUCHE2016','En actualizacion'),
		'JHURTADO'=>array('MAVAL0512','En actualizacion'),
		'GARBELAEZ'=>array('PICOROCHO','En actualizacion'),
		'NCASTRO'=>array('15.450.198','En actualizacion'),
		'ESANCHEZ'=>array('ALEJUAN','En actualizacion'),
		'GCARDENAS'=>array('GUSTAVO0418','En actualizacion'),
		'EGUTIERREZ'=>array('ESPUMAS2015','En actualizacion'),
		'ServClienteEM'=>array('ServicioalCliente','En actualizacion'),
		'WilCanaveral'=>array('wica7587','auxiliar.control@espumasmedellin.com'),
		'Jpuerta'=>array('Espumas2016','gestiondocumental@espumasmedellin.com'),
		'Auditoria'=>array('nmorenosa001','auditor@espumasmedellin.com'),
		'OPANESSO'=>array('panesso001','oliver.panesso@espumasmedellin.com'),
		'ANA_MILENA'=>array('Espumas2016','analista.cartera@espumasmedellin.com'),
		'ALEJANDRO_RA'=>array('Espumas2016','cartera@espumasmedellin.com'),
		'GERCOMERCIAL'=>array('GERCOMERCIAL','gercomercial@espumasmedellin.com'),
		'ESNEIDER'=>array('Cambio2017',' coordinador.viajero@espumasmedellin.com'),
		);


		
		if(isset($usandpss[$frm_usuario])){
			$exp = "/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/";
			if(preg_match($exp,$usandpss[$frm_usuario][1])){
				$this->EnviaraCorreo($usandpss[$frm_usuario][1],$frm_usuario,$usandpss[$frm_usuario][0]);	//Esta parte enviara el correo
				Funtions_Global::notifyMe('Correo enviado','Se ha enviado un correo para recuperar la contraseña');
				// $this->EnviaraCorreo($frm_correo,$frm_usuario,$usandpss[$frm_usuario]);	//Esta parte enviara el correo
			}else{
				echo "<style>.caja{max-width:none !important;}</style><p>En estos momentos el usuario <strong>".$frm_usuario."</strong> no se encuentra asociado a un correo. <br>Haz <a href=' ".Yii::app()->createUrl('site/peticiones')." '>click aqui</a> Para solicitar una actualización de datos.</p> <br> <a href=' ".Yii::app()->createUrl('site/recuperacionp')." '>Volver</a>";
			}
			
		}else{
			echo "<p>El usuario ingresado es incorrecto</p><br><a href=' ".Yii::app()->createUrl('site/recuperacionp')." '>Volver</a>";
		}

		// echo "La clave de acceso al sistema para el usuario <strong>".$frm_usuario."</strong> es: <strong>".$usandpss[$frm_usuario]."</strong><br>";
		// echo"La clave para el usuario <strong>".$frm_usuario."</strong> va a ser enviada al correo ".$frm_correo;
	}
    public function actionRecuperacionP(){
    	$this->render('form');
    }

    public function actionAnswers(){
    	$this->render('_answers');
    }

    public function actionNGarantia(){
    	$this->render('Reporte_Garantia');
    }

    public function EnviaraCorreo($email,$user,$pass){  	
        $correo=$email;
		Yii::import("ext.Mailer.*");
		$mail=new PHPMailer(); 

		//Conexion con el servidor de gmail.
		$mail->IsSMTP(); 
		$mail->Host = "74.125.141.108"; // Servidores SMTP
		$mail->SMTPAuth = true;   // activar la identificacín SMTP
		$mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
		$mail->Port = 587; // Puerto de conexion con gmail
		$mail->SMTPSecure = "tls";	
		$mail->Username = "espm.ftra.yii@gmail.com";
		$mail->Password = "Espumas2016";
		

		                         
		// $mail->From = "espm.ftra.yii@gmail.com";
		$mail->SetFrom('espm.ftra.yii@gmail.com', utf8_decode('Recuperacion contraseña'));
		// $mail->FromName = utf8_decode('Recuperacion contraseña');
		$mail->Subject=utf8_decode("Recuperación de Contraseña Espumred");  
				                       
        /*funcion de copia de correo asignada para envio de correo electronicos a mas de un destinatario*/     					
        // $mail->addCC('practicante.sistemas@espumasmedellin.com'); 
        // $mail->addCC($correo); 
        $mail->AddAddress($correo);
       //-----------------------horario de envio de correo------------------->
		date_default_timezone_set('UTC'); ////
		$hora=date("H")-5;
					
		if ($hora>12) {
			if ($hora>18) {
				$inicio="Buenas Noches"; 
			}else{
				$inicio="Buenas Tardes"; 
			}
		}else{
			$inicio="Buenos Dias";
		}
        //-------------------------------------mensaje*----------------------------->
		$mail->MsgHtml(utf8_decode("<h1>".$inicio."</h1><br>
			<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
			Se ha solicitado un recordatorio de contraseña para el siguiente usuario ".$user.".<br>
			La clave de acceso al sistema para el usuario <strong>".$user."</strong> es: <strong>".$pass."</strong><br>
			Para iniciar sesión ingresa en el siguiente link <a href='http://192.168.1.8/yii/espumred/index.php?r=site/login&user=".$user."&pass=".$pass."'>ir a Espumred</a>
			<br>                          
		"));
									

		// 							"<h1>".$inicio."</h1><br>
		// 	<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
		// 	Se ha solicitado un restablecimiento de contrase&ntilde;a para el siguiente usuario ".$user.".<br>
		// 	La clave de acceso al sistema para el usuario <strong>".$user."</strong> es: <strong>".$pass."</strong><br>
		// 	Para iniciar sesi&oacute;n ingresa en el siguiente link <a href='http://192.168.1.8/yii/espumred/index.php?r=site/login&user=".$user."&pass=".$pass."'>ir a Espumred</a>
		// 	<br>                          
		// "		      
        //------------------------------------------------------------------------------------------------>//
		$mail->AddAddress($correo);				
		$response = $mail->send();
		if($response){
			$this->info($correo,$user);
		   	echo "<style>.caja{max-width:none !important;}</style><p>Se ha enviado la contraseña al correo: <strong>".$email."</strong></p><br><a href=' ".Yii::app()->createUrl('site/login')." '>Aceptar</a>";
		}else{
		   	echo "No envio el correo";
		}
		// $this->redirect(array('site')); 
	}  
    
    public function actionPeticiones(){
	$this->render('formpeticiones');	
    }
    public function actionEnviopeticiones(){
    	Yii::import("ext.Mailer.*");
    	$suge =$_GET['sugerencia'];
    	$title =$_GET['frm_titulo'];
    	$area =$_GET['frm_area']; 
		$mail=new PHPMailer(); 

		$mail->IsSMTP(); 
		$mail->Host = "74.125.141.108"; // Servidores SMTP
		$mail->SMTPAuth = true;   // activar la identificacín SMTP
		$mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
		$mail->Port = 587; // Puerto de conexion con gmail
		$mail->SMTPSecure = "tls";	
		$mail->Username = "espm.ftra.yii@gmail.com";
		$mail->Password = "Espumas2016";



		$mail->SetFrom("espm.ftra.yii@gmail.com",$title." ".$area);
		$mail->Subject="Fallo en el aplicativo";  
		$mail->addCC('practicante.sistemas@espumasmedellin.com'); 
		//-----------------------horario de envio de correo------------------->
		date_default_timezone_set('UTC'); ////
		$hora=date("H")-5;
					
		if ($hora>12) {
			if ($hora>18) {
				$inicio="Buenas Noches"; 
			}else{
				$inicio="Buenas Tardes"; 
			}
		}else{
			$inicio="Buenos Dias";
		}
		//-------------------------------------mensaje*----------------------------->
		$mail->MsgHtml(utf8_decode("<h1>".$inicio."</h1><br>
			".$suge."<br>  
			<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>                       
		"));

		// $mail->AddAddress($correo);				
		$response = $mail->send();
		if($response){
		   	echo "<center><p>Se ha enviado el informe.</p><br><a href=' ".Yii::app()->createUrl('site/login')." ' class='btn btn-success'>Aceptar</a></center>";
		}else{
		   	echo "<p>No se ha podido enviar el informe.</p>";
		}

    }

    public function info($var_correo,$var_usuario){
    	Yii::import("ext.Mailer.*");
    	$correo =$var_correo;
    	$usuario =$var_usuario; 
		$mail=new PHPMailer(); 
		
		$mail->IsSMTP(); 
		$mail->Host = "74.125.141.108"; // Servidores SMTP
		$mail->SMTPAuth = true;   // activar la identificacín SMTP
		$mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
		$mail->Port = 587; // Puerto de conexion con gmail
		$mail->SMTPSecure = "tls";	
		$mail->Username = "espm.ftra.yii@gmail.com";
		$mail->Password = "Espumas2016";


			                          
		$mail->SetFrom("espm.ftra.yii@gmail.com",utf8_decode("Solicitud de recordatorio"));
		$mail->Subject="Solicitud de Recordatorio para el usuario ".$usuario;  
		$mail->addCC('practicante.sistemas@espumasmedellin.com'); 
		// $mail->addCC('sistemas@espumasmedellin.com');
		//-----------------------horario de envio de correo------------------->
		date_default_timezone_set('UTC'); ////
		$hora=date("H")-5;
					
		if ($hora>12) {
			if ($hora>18) {
				$inicio="Buenas Noches"; 
			}else{
				$inicio="Buenas Tardes"; 
			}
		}else{
			$inicio="Buenos Dias";
		}
		//-------------------------------------mensaje*----------------------------->
		$mail->MsgHtml(utf8_decode("<h1>".$inicio."</h1><br>
			<p>El usuario identificado con el correo <strong>".$correo."</strong> ha solicitado un recordatorio de contraseña para la cuenta <br>
			<strong>".$usuario."</strong></p><br>
			<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>                       
		"));

		// $mail->AddAddress($correo);				
		$mail->send();

    }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{

			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}