
<?php

class FacturacionController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','uploadProfilePicture','upload','informe','updateInfo','mail','prueba',
					'noSubirFoto','aceptar','listarProveedor','listarProveedor2',),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="factura"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','uploadProfilePicture','upload','informe','informeGeneral',
					'updateInfo','mail','prueba','listarProveedor','listarProveedor2','verRegistros','noSubirFoto','verImagen','aceptar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="facturaGeneral"'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','uploadProfilePicture','upload','informe','informeGeneral',
					'updateInfo','mail','prueba','listarProveedor','listarProveedor2','verRegistros','noSubirFoto','verImagen'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="facturaCompras"'
			),


			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','uploadProfilePicture','upload','informe','informeGeneral',
					'updateInfo','mail','prueba','listarProveedor','listarProveedor2','verRegistros','noSubirFoto','verImagen','aceptar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="AdminfacturaGeneral"'
			),

					array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','uploadProfilePicture','upload','informe','updateInfo','mail','prueba',
					'noSubirFoto','aceptar','listarProveedor','listarProveedor2','cargando'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="recepcion"'
			),

			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 
	public function actionCreate()
	{
		$model=new Facturacion;

		if(isset($_POST['Facturacion']))
		{
			$model->attributes=$_POST['Facturacion'];

			if($model->save()){
			
			
			
 			Yii::app()->session['factura']=  $model;				
				$this->redirect(array('upload'));
				
			}
				
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


       public function actionMail()
    {
        $model=new Facturacion;
        
         $this->render('mail',array(
            'model'=>$model,
        ));
    }


       public function actionPrueba()
    {
        $model=new Facturacion;
        
         $this->render('prueba',array(
            'model'=>$model,
        ));
    }
	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Facturacion']))
		{
			$model->attributes=$_POST['Facturacion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdateInfo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Facturacion']))
		{
			$model->attributes=$_POST['Facturacion'];
			if($model->save())
			{


					// Yii::import("ext.Mailer.*");
					// $mail= new PHPMailer();
					// $mail->SetFrom("espm.ftra.yii@gmail.com","Facturacion EM");
					// $mail->Subject="Confirmacion Factura";
					// $mail->MsgHTML("<h1> Hola como estas </h1>");
					// $mail->AddAddress("martinemiliopalacios@gmail.com","Andres");
					
					// if ($mail->Send() ){
					// 	//$this->redirect(array('view','id'=>$model->id));
					// 	var_dump($mail);
					// };


						
						// Yii::import("ext.Mailer.*");
						// $mail=new PHPMailer();
						// $mail->SetFrom("espm.ftra.yii@gmail.com","Facturacion EM");
						// $mail->Subject="Factura";
						// date_default_timezone_set('UTC');
						// $hora=date("H")-5;
						// echo $hora;
						// if ($hora>12) {
						// 	if ($hora>18) {
						// 		$inicio="Buenas Noches"; 
						// 	}else{
						// 		$inicio="Buenas Tardes"; 
						// 	}
							
						// }else{
						// 	$inicio="Buenos Dias";
						// }
						
						// $mail->MsgHtml("<h1>".$inicio."</h1><br>
						// 	<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
						// 	Se encuentra  confirmado la factura ".$model["numeroFactura"]." para asentuar  link <br>
						// 	<br>
						
						// 	<br>
						// 	Att:<br>

							
							

						// 	");
						
						// $mail->AddAddress("practicante.sistemas@espumasmedellin.com","Facturacion");

						
						// $mail->send();
                    	     
                        $this->redirect(array('facturacion/informe'));   

			}
				
		}

		$this->render('updateInfo',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Facturacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Facturacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Facturacion']))
			$model->attributes=$_GET['Facturacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
   
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Facturacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Facturacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Facturacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='facturacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	//funcion para cargar la imagen y ponerle la identificacion del empleado
	public function actionUploadProfilePicture() {
		
		    $arrBusquedad = array();
			$arrBusquedad=Yii::app()->session['factura'];
            $UploadForm = new UploadFormFactura;
            $model= new Facturacion;
            //$modelUsuario= new Usuario;
            $modelUsuario=Usuario::model()->findAll();
            if (isset($_POST['UploadFormFactura'])) {
                
                 if ($UploadForm->validate()) {
                    $UploadForm->image = CUploadedFile::getInstance($UploadForm, 'image');
                    
                  foreach($UploadForm->image as $img){
					    //retun url to full image
					    echo $img->getUrl();
					 
					    //return url to proportionally resized image by width
					    echo $img->getUrl('300x');
					 
					    //return url to proportionally resized image by height
					    echo $img->getUrl('x300');
					 
					    //return url to resized and cropped (center) image by width and height
					    echo $img->getUrl('200x300');

					    echo $img->getPath('400x300');
					    $UploadForm->image =$img;
					}

                    $tipo=$UploadForm->image->name;
                    $tipo = substr($tipo, -3);

                   
                    if ($tipo=="pdf") {
                    	  $file = "images/Facturas/".$_POST['UploadFormFactura']["id"].".pdf";
                    }elseif ($tipo=="jpg") {
                    	$file = "images/Facturas/".$_POST['UploadFormFactura']["id"].".jpg";
                    }else{
                    	$file = "images/Facturas/".$_POST['UploadFormFactura']["id"].".png";
                    }
                    
                    if ($UploadForm->image->saveAs($file)){
                    	$arrBusquedad = array();
						$arrBusquedad=Yii::app()->session['factura'];
						$correo=$arrBusquedad["correoelectronico"];
						Yii::import("ext.Mailer.*");
						$mail=new PHPMailer();
						$mail->SetFrom("espm.ftra.yii@gmail.com","Facturacion EM");
						$mail->Subject="Factura";
						date_default_timezone_set('UTC');
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

						$nombre=Yii::app()->user->name;
						for ($i=0; $i <count($modelUsuario) ; $i++) { 
							if ($modelUsuario[$i]["NombreUsuario"]) {
								$nombre=$modelUsuario[$i]["Nombre"].$modelUsuario[$i][" Apellido"];
							}
						}
						$mail->MsgHtml("<h1>".$inicio."</h1><br>
							<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
							Se ha confirmado entrega de una factura por favor verificar el contenido en recepción.<br>
							<br>
						 

							<br>
							Att:".$nombre."<br>

							
							
							");
						$mail->AddAttachment($file);
						$mail->AddAddress($correo,"Facturacion");

						echo $correo;
						$mail->send();
                    	     
                        $this->redirect(array('create'));             
                  	 }else{
                  	 	   echo 'error';
                  	 	};
                     
                  } else{

            	$this->render('errorImagen',array('model'=>$model));
            	
            	};
            }else{
            	echo "string";
            }            
                
        }

        //funcion para cargar la imagen y ponerle la identificacion del empleado

	          public function actionNoSubirFoto() {
	          	
						$factura=Facturacion::model()->findAll();
					    $factura=count($factura);
					    $modelUsuario=Usuario::model()->findAll();
					    $UploadFormModel = new UploadFormFactura;
					    $UploadFormModel->id =$factura;
				       	$arrBusquedad = array();
						$arrBusquedad=Yii::app()->session['factura'];

						$correo=$arrBusquedad["correoelectronico"]; 
						Yii::import("ext.Mailer.*");
						$mail=new PHPMailer();
						$mail->SetFrom("espm.ftra.yii@gmail.com","Facturacion EM");
						$mail->Subject="Factura";
						date_default_timezone_set('UTC');
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
						$nombre=Yii::app()->user->name;
						for ($i=0; $i <count($modelUsuario) ; $i++) { 
							if ($modelUsuario[$i]["NombreUsuario"]==$nombre) {
								$nombre=$modelUsuario[$i]["Nombre"].$modelUsuario[$i]["Apellido"];
							}
						}
						$mail->MsgHtml("<h1>".$inicio."</h1><br>
							<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
							Se ha confirmado entrega de una factura por favor verificar el contenido en recepcion.<br>
							<br>
							

							<br>
							Att:".$nombre."<br>

						
							");


						$mail->AddAddress($correo,"Facturacion");

						echo $correo;
						$mail->send();
						$this->redirect(array('create'));    
                    	     
                     
                 }

//llama a la vista upload donde se carga el archivo 
        	public function actionUpload(){
		$model= new Facturacion;
		$this->render('upload',array(
			'model'=>$model,
		));
	}

 public function actionCargando(){
  $AllFacturactions = Facturacion::model()->FindAll();
		$link = "facturacion";
		foreach ($AllFacturactions as $value) {
					        echo    '<tr>';
							echo    '<td>'.$value->id.'</td>';
							echo 	'<td>'.$value->provedor.'</td>';
							echo 	'<td>'.$value->numeroFactura.'</td>';
							echo 	'<td>'.$value->valorFactura.'</td>';
							echo 	'<td>'.$value->consecutivo.'</td>';
							echo 	'<td>'.$value->Fecha_Vencimiento.'</td>';
							echo 	'<td>'.$value->estado.'</td>';
							echo 	'<td>'.$value->Fecha_Envio.'</td>';
							echo 	'<td>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
							echo 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/Aceptar&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Aceptar"><i class="fa fa-check" aria-hidden="true"></i></button></a>';
							echo 	'</td>';
							echo '</tr>';
						}


 }

	//llama a la vista de informes de facturas
     public function actionInforme(){

		 $this->render('_vistaInforme');
	}


	//llama a la vista de informes de facturas
      public function actionInformeGeneral(){
      	$model=new Facturacion;
		$this->render('reporte',array(
			'model'=>$model,
		));
	}


//llama a la vista de informes de facturas
      public function actionVerRegistros(){
      	 $provedor= $_POST["provedor"];  
      	 $Nombre= $_POST["Nombre"];  
      	 $valorFactura= $_POST["valorFactura"];  
      	 $Fecha1= $_POST["Fecha1"];  
      	 $Fecha= $_POST["Fecha"];
      	 $conV="";
		 $conF1="";
		 $conF2="";
      	  	  $factura = array();
      	  	   $model = array();
      	  	   if ($valorFactura=="") {
      	  	   		$conV=0;
      	  	   }else{
      	  	   		$conV=1;
      	  	   }
      	  	   if ($Fecha1=="") {
      	  	   		$conF1=0;
      	  	   }else{
      	  	   		$conF1=1;
      	  	   }

				if ($Fecha=="") {
				   	$conF2=0;
				}else{
						$conF2=1;
				}
				

//if para cuando solo ingresa el nombre 
     	 if ($conV==0&&$conF1==0&&$conF2==0) {
      			
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 
					if ($model[$i]["provedor"]==$Nombre) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
			}

      	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
      	 	  // echo "string";
			  echo CJSON::encode($factura);
      	 	    
      	 }

//if cuando el nombre y el valor factura es ingresado
      	  if ($conV==1&&$conF1==0&&$conF2==0&&$Nombre!="") {
      	  		$fechaG=0;
      			
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 
					if ($model[$i]["provedor"]==$Nombre&&$model[$i]["valorFactura"]==$valorFactura
						
						) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
			}

      	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
      	 	  // echo "string";
			  echo CJSON::encode($factura);
      	 	    
      	 }


 //if cuando el nombre y la  fecha es ingresado
      	  if ($conV==0&&$conF1==1&&$conF2==1&&$Nombre!="") {
      	  		$fechaG=0;
      	  		$dias	= (strtotime($Fecha)-strtotime($Fecha1))/86400;
				$dias 	= abs($dias); $dias = floor($dias);	
		
				// echo $dias;
						
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 

				$Fecha1=$_POST["Fecha1"];
				$fechaComparar=substr($model[$i]["Fecha_Creacion"], 0, 10);
				for ($j=0; $j <$dias+1 ; $j++) { 
					
			 		
			 	// 	 echo $Fecha1;
			 	// 	echo "---";
					// echo $fechaComparar."--";
			
					if ($model[$i]["provedor"]==$Nombre&&$fechaComparar==$Fecha1
						
						) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
					$nuevafecha = strtotime ( '+1 days' , strtotime ( $Fecha1 ) ) ;
			 		$Fecha1 = date ( 'Y-m-d' , $nuevafecha );
				}
					
			 }

   //    	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
   //    	 	  // echo "string";
			echo CJSON::encode($factura);

			
      	 	    
      	 }


      	  //if cuando solo ingresa el valor 
      	  if ($conV==1&&$conF1==0&&$conF2==0&&$Nombre=="") {
      	  	
      			
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 
					if ($model[$i]["valorFactura"]==$valorFactura					
						) {
						$item = array($model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						  array_push($factura,$item);
						
					}
			}
			
						 	
      	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
      	 	  // echo "string";
			   echo CJSON::encode($factura);
      	 	    
      	 }

      	 //if cuando solo ingresa la fecha 
      	  if ($conV==0&&$conF1==1&&$conF2==1&&$Nombre=="") {
      	  		$fechaG=0;
      	  		$dias	= (strtotime($Fecha)-strtotime($Fecha1))/86400;
				$dias 	= abs($dias); $dias = floor($dias);	
		
				// echo $dias;
						
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 

				$Fecha1=$_POST["Fecha1"];
				$fechaComparar=substr($model[$i]["Fecha_Creacion"], 0, 10);
				for ($j=0; $j <$dias+1 ; $j++) { 
					
			 		
			 	// 	 echo $Fecha1;
			 	// 	echo "---";
					// echo $fechaComparar."--";
			
					if ($fechaComparar==$Fecha1			
						) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
					$nuevafecha = strtotime ( '+1 days' , strtotime ( $Fecha1 ) ) ;
			 		$Fecha1 = date ( 'Y-m-d' , $nuevafecha );
				}
					
			 }

   //    	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
   //    	 	  // echo "string";
			echo CJSON::encode($factura);    
      	 }



      	  //if cuando ingresa la fecha y el valor
      	  if ($conV==1&&$conF1==1&&$conF2==1&&$Nombre=="") {
      	  		$fechaG=0;
      	  		$dias	= (strtotime($Fecha)-strtotime($Fecha1))/86400;
				$dias 	= abs($dias); $dias = floor($dias);	
		
				// echo $dias;
						
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 

				$Fecha1=$_POST["Fecha1"];
				$fechaComparar=substr($model[$i]["Fecha_Creacion"], 0, 10);
				for ($j=0; $j <$dias+1 ; $j++) { 
					
			 		
			 	// 	 echo $Fecha1;
			 	// 	echo "---";
					// echo $fechaComparar."--";
			
					if ($fechaComparar==$Fecha1&&$model[$i]["valorFactura"]==$valorFactura		
						) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
					$nuevafecha = strtotime ( '+1 days' , strtotime ( $Fecha1 ) ) ;
			 		$Fecha1 = date ( 'Y-m-d' , $nuevafecha );
				}
					
			 }

   //    	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
   //    	 	  // echo "string";
			echo CJSON::encode($factura);    
      	 }


      	  //if cuando ingresa la fecha y el valor
      	  if ($conV==1&&$conF1==1&&$conF2==1&&$Nombre!="") {
      	  		$fechaG=0;
      	  		$dias	= (strtotime($Fecha)-strtotime($Fecha1))/86400;
				$dias 	= abs($dias); $dias = floor($dias);	
		
				// echo $dias;
						
      	 		$model=Facturacion::model()->findAll();
			for ($i=0; $i <count($model) ; $i++) { 

				$Fecha1=$_POST["Fecha1"];
				$fechaComparar=substr($model[$i]["Fecha_Creacion"], 0, 10);
				for ($j=0; $j <$dias+1 ; $j++) { 
					
			 		
			 	// 	 echo $Fecha1;
			 	// 	echo "---";
					// echo $fechaComparar."--";
			
					if ($fechaComparar==$Fecha1&&$model[$i]["valorFactura"]==$valorFactura
						&&$model[$i]["provedor"]==$Nombre	
						) {
						$item = array(  $model[$i]['id'],
							  $model[$i]['provedor'],
							  $model[$i]['numeroFactura'],
							  $model[$i]['valorFactura'],
							  $model[$i]['consecutivo'],
							  $model[$i]['idUsuario'],
							  $model[$i]['observacion'],
							  $model[$i]['estado'],
							  $model[$i]['Fecha_Creacion'],
							  $model[$i]['Fecha_Modificacion'],
							  $model[$i]['Fecha_Vencimiento'],
							  $model[$i]['Fecha_Envio'],
							  $model[$i]['Fecha_Pagado'],
							  $model[$i]['correoelectronico']);
						 array_push($factura,$item);
						 	
					}
					$nuevafecha = strtotime ( '+1 days' , strtotime ( $Fecha1 ) ) ;
			 		$Fecha1 = date ( 'Y-m-d' , $nuevafecha );
				}
					
			 }

   //    	 	  // $factura=Facturacion::model()->findByAttributes(array('provedor'=>$Nombre));
   //    	 	  // echo "string";
			echo CJSON::encode($factura);    
      	 }


     }
  //     	$model=new Facturacion;
		// $this->render('reporte',array(
		// 	'model'=>$model,
		// ));



	public function actionListarProveedor($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(id) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Provedoresfacturas::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->id, // label for dropdown list
                'value' => $model->id, // value for input field
                'id' => $model->nombre, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
      
    }
    

    	public function actionListarProveedor2($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Provedoresfacturas::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
      
    }


//metodo para poder buscar la imagen y regresar donde esta ubicada y con que extension
public function actionVerImagen() {
		$id=$_POST["id"];
		// $dir="C:/xampp/htdocs/yii/Espumred/images/Facturas/";  //nombre de la carpeta
		$dir="images/Facturas/".$id;
		 $images = glob("$dir{*.gif,*.jpg,*.png}", GLOB_BRACE);  
		//  foreach($images as $id){  
		//  echo '<img src="'.$id.'" border="0" style="width:100px;float:left;margin:10px;" />';  
		 	
		// }  
		 if (empty($images)) {
		    echo "images/no_disponible.png";

		}else{
			echo ($images[0]);	
		}
		 
      
    }



    //metodo para poder buscar la imagen y regresar donde esta ubicada y con que extension
public function actionAceptar($id) {

	if (Yii::app()->user->rol=='factura') {
		$model=$this->loadModel($id);
		$model->estado="Enviado";
		
		$fecha=date("Y-m-d")." ".(date("H")-6).date(":i:s");
		$model->Fecha_Envio=$fecha;
		$model->save();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('facturacion/informe'));
	}else{
		$model=$this->loadModel($id);
		$model->estado="Contabilizada";
		$fecha=date("Y-m-d")." ".(date("H")-6).date(":i:s");
		$model->Fecha_Pagado=$fecha;
		$model->save();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('facturacion/informe'));
	}
		
		 
      
    }	
}
