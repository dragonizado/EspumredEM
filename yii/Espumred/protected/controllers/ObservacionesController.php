<?php

class ObservacionesController extends Controller
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
			
			array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"
				'actions'=>array('create','update', 'view', 'admin','send','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarComercial','listarCartera','listarGeneral','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','regresar','Centro','Enviar','mail','Aceptacion','updateTodo','Upload','detalles'),
				    'users'=>array('@'),
                    'expression'=>'Yii::app()->user->rol==="Comercio"'
			),

			array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"//
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','detalles'),
				    'users'=>array('@'),
                    'expression'=>'Yii::app()->user->rol==="admin"'

            ),
            array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"//
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','upload','MostrarPlantilla','detalles','test','aceptarcondicion'),
				    'users'=>array('@'),
                    'expression'=>'Yii::app()->user->rol==="Test" || Yii::app()->user->rol==="Cartera"'

            ),
            //permisos de Gerentes
        //     array('allow',
        //     'actions'=>array('update', 'view','admin','actualizar','Aceptacion','detalles','aceptarcondicion'),   
				    // 'users'=>array('*'),
        //             'expression'=>'Yii::app()->user->rol==="Gerente"'


        //      ),
            //permisos de Revisoria
             array('allow',
            'actions'=>array('view','admin','GenerarExcel','detalles'),					
				    'users'=>array('*'),
                     'expression'=>'Yii::app()->user->rol==="Revisoria"'
                                        
			),
             //permisos de Asesor
            array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"
				'actions'=>array('create','view', 'admin','send','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarComercial','listarCartera','listarGeneral','mostrarRetiro','buscarRetiro','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','regresar','centro','Enviar','mail','updateTodo','Upload','detalles'),
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="Asesor"' 
            ),

              array('allow',
            'actions'=>array('update', 'view','admin','actualizar','Aceptacion','detalles','aceptarcondicion'),   
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="GerenteComercial" || Yii::app()->user->rol==="GerenteCartera" || Yii::app()->user->rol==="Gerente"  '
            ),
            
   //          array('allow',
   //          'actions'=>array('update', 'view','admin','actualizar','Aceptacion','detalles','aceptarcondicion'),   
			// 	    'users'=>array('*'),
   //                  'expression'=>'Yii::app()->user->rol==="GerenteCartera"'
   //          ),
   //           array('allow',
   //          'actions'=>array('update', 'view','admin'),   
			// 	    'users'=>array('*'),
   //                  'expression'=>'Yii::app()->user->rol==="ServicioCliente"'        

			// ),			
			array('deny',// deny all users
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
    

    public function actionRev($id)
    {

      $this->render('rev',array(
			'model'=>$this->loadModel($id),
		));

    }

    public function actionUpload(){
		$model= new Observaciones;
		$this->render('upload',array(
			'model'=>$model,
		));
	}

	public function actionAceptacion()
	{
		$model= new Observaciones;
		$this->render('Aceptacion',array(
			'model'=>$model,
		));
	}

	public function ActionAceptarcondicion(){
		
		$fecha = date('Y-m-d');
		if(isset($_GET['iden'])){
			$id = $_GET['iden'];
			$nombre = $_GET['nombre'];
			$roll = Yii::app()->user->rol;
			$condicion = Observaciones::model()->findByPk($id);
			if($roll === "GerenteComercial"){
				$condicion->gerente_comercial = $nombre ; 
				$condicion->fechautorizacion = $fecha;
				if($condicion['gerente_cartera'] == ""){
					echo "Esta vacio el gerente cartera no ha firmado";
				}else{
					$this->SendEmailGG();
				}
			}elseif ($roll === "Gerente") {
				$condicion->gerente_general = $nombre ;
				$condicion->fechautorizacion2 = $fecha;
			}elseif ($roll === "GerenteCartera") {
				$condicion->gerente_cartera = $nombre ;
				$condicion->fechautorizacion1 = $fecha;
				if($condicion['gerente_comercial'] == ""){
					echo "Esta vacio el gerente comercial no ha firmado";
				}else{
					$this->SendEmailGG();
				}
			}elseif ($roll === "Test") {
				if($condicion['gerente_comercial'] == ""){
					echo "Esta vacio el gerente Comercial no ha firmado";
				}else{
					echo "Ejecutar la accion de enviar correo al gerente general";
					$this->SendEmailGG();
				}
			}
			$condicion->update();
			// echo "condicion aceptada";
		}elseif(isset($_GET['idren'])){
			$idren = $_GET['idren'];
			$dess = "CONDICIÓN RECHAZADA";
			$roll = Yii::app()->user->rol;
			$condicions = Observaciones::model()->findByPk($idren);
			if($roll === "GerenteComercial"){
				$condicions->gerente_comercial = $dess ; 
				$condicions->fechautorizacion = $fecha;
			}elseif ($roll === "Gerente") {
				$condicions->gerente_general = $dess ;
				$condicions->fechautorizacion2 = $fecha;
			}elseif ($roll === "GerenteCartera") {
				$condicions->gerente_cartera = $dess ;
				$condicions->fechautorizacion1 = $fecha;
			}elseif ($roll === "Test") {
				// echo "yes it is work";
			}
			$condicions->update();
			// echo "codicion rechazada" ;
		}else{
			echo "Error al conectar con el servidor.";
			echo "<br>";
			echo $fecha;
		}
		
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */

	 public function actionCreate()
	 {
		$model=new Observaciones;

		//Habilitar la línea siguiente si es necesaria la validación de AJAX 
		 //$this->performAjaxValidation($model);

		  if(isset($_POST['Observaciones']))
		   {
			$model->attributes=$_POST['Observaciones'];
			if ($model['observaciones']!="") {
		
		
			 $Registro = array();
			 $Registro=Yii::app()->session['Registro'];
			 $modelInformacionPersonal=new Condicionescomerciales;
			 $modelInformacionPersonal=$Registro[0];
			 $repuesta = $modelInformacionPersonal->save();
			 
			 
			// Descripcion
			$arrFamiliar = Yii::app()->session['Familiar'];
			$id;
			$modelFamiliar=new Descripcion;
			
          
	        for ($i=0; $i <count($arrFamiliar) ; $i++) { 
            
             $modelFamiliar=new Descripcion;		
			 $modelFamiliar->codigo=$arrFamiliar[$i][0];
			
             			 					             			 
			 if ( $modelFamiliar->save()) {
			 	
			 		echo "guardo";
			 }else{              
			 		//echo "no guardo";
			 		//var_dump($modelFamiliar);

			 }
			 
			 }			
             $modelCondicion=new Condicion;
			 $modelCondicion=$Registro[1];
			 $modelCondicion->save();


			// $model->id=$modelInformacionPersonal["id"]; 
			$model->descripcion=$modelFamiliar["id"];
            $model->condicionescomerciales=$modelInformacionPersonal["id"]; 
			$model->condicion=$modelCondicion["id"];
						
			if($model->save()){ 

			    Yii::app()->session['observaciones']=$model;				            
				$this->redirect(array('upload'));
				
			 }
			
			}else{
				
				var_dump($model['observaciones']);
				var_dump($model['fecha']);
				                
				var_dump("esta vacio"); 
			    $this->redirect(array('observaciones/mostrarErrorEmpleado'));
			   
			}	

		}

		$this->render('create',array(							
			'model'=>$model,
		));


	   }

       public function actionMail()

       {                 
        $model=new Observaciones;
         $this->render('mail',array(
            'model'=>$model,
        ));

        }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */

//--------------------------------------------------------------------//	
	
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		if(isset($_POST['Observaciones']))
		{
			
			 $model->attributes=$_POST['Observaciones'];
             {
             $model->attributes=$_POST['Observaciones'];	  
             $model->fechautorizacion=$model->fechautorizacion;
             $model->fechautorizacion1=$model->fechautorizacion1;
             $model->fechautorizacion2=$model->fechautorizacion2;
             $model->id=$model->id;
             }
			
			if($model->save())
			$this->redirect(array('observaciones/admin')); 
		}
         
		$this->render('update',array(
			'model'=>$model,
			
		));
	}
//---------------------------------------------------------------------

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
		
		$dataProvider = new CActiveDataProvider('Observaciones', array(
       'criteria' => array('order' => 'condicionescomerciales ASC'),
       
       'pagination' => array('pageSize' => 20,))
      );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$roll = Yii::app()->user->rol;
		$nameAsesor = Yii::app()->user->Nombre . Yii::app()->user->Apellido;

		// echo $nameAsesor; 

		// exit;

		if ($roll === "Asesor") {
			$allobservaciones=Observaciones::model()->findAll(array("condition" => "nombreAsesor = '".$nameAsesor."'","group"=>"nombreCliente","order"=>"fecha desc"));
			
		}else{
			$allobservaciones=Observaciones::model()->findAll(array("group"=>"nombreCliente","order"=>"fecha desc"));	
		}

	

     
		//$model=new Observaciones('search');
		//$model->unsetAttributes();  // clear any default values
		//if(isset($_GET['Observaciones']))
			//$model->attributes=$_GET['Observaciones'];

		$this->render('admin',array(
			'allobservaciones'=>$allobservaciones,
			
		));
	}

	public function actionDetalles($nc){
		$roll = Yii::app()->user->rol;
		$nameAsesor = Yii::app()->user->Nombre . Yii::app()->user->Apellido;
		$clientname = $nc;
		if ($roll === "Asesor") {
			$allobservaciones=Observaciones::model()->findAll(array("condition" => "nombreAsesor = '".$nameAsesor."' and nombreCliente = '".$clientname."'","order"=>"fecha desc"));
		}elseif($roll === "Gerente"){
			$allobservaciones=Observaciones::model()->findAll(array("condition" => "nombreCliente = '".$clientname."' and gerente_comercial != 'CONDICIÓN RECHAZADA' and gerente_cartera != 'CONDICIÓN RECHAZADA'","order"=>"fecha desc"));
		}else{
			$allobservaciones=Observaciones::model()->findAll(array("condition" => "nombreCliente = '".$clientname."'","order"=>"fecha desc"));
		}
		$this->render('admin',array(
			'allobservaciones'=>$allobservaciones,'detalles'=>'1'
			
		));
	}



	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionempleado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Observaciones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionempleado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='observaciones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function SendEmailGG() 
	{  
		Yii::import("ext.Mailer.*");
		$mail=new PHPMailer();
		$mail->IsSMTP(); 
		$mail->Host = "74.125.141.108"; // Servidores SMTP
		$mail->SMTPAuth = true;   // activar la identificacín SMTP
		$mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
		$mail->Port = 587; // Puerto de conexion con gmail
		$mail->SMTPSecure = "tls";	
		$mail->Username = "espm.ftra.yii@gmail.com";
		$mail->Password = "Espumas2016";


		                   
		$mail->SetFrom("espm.ftra.yii@gmail.com","Condicion Comercial Espumas Medellin");
		$mail->Subject="CONDICION COMERCIAL POR APROBAR";  

		/*funcion de copia de correo asignada para envio de correo electronicos a mas de un destinatario*/     					

		$mail->AddAddress('raul.vergara@espumasmedellin.com');
		$mail->AddBCC('gercomercial@espumasmedellin.com');
		$mail->AddBCC('auxiliar.control@espumasmedellin.com');
		$mail->AddBCC('practicante.sistemas@espumasmedellin.com');


		//linea de testing
		// $mail->AddAddress('practicante.sistemas@espumasmedellin.com');

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

		$mail->MsgHtml("<h1>".$inicio."</h1><br>
		
		Se ha diligenciado una condicion comercial.<br>
		<img src='http://190.85.125.226/yii/espumred/images/logo.gif'><br>
		<br>
		          
		<br>
		<a href='http://190.85.125.226/yii/espumred'>Ir a ESPUMRED</a><br>

		");
						      
		//------------------------------------------------------------------------------------------------>//

		// $mail->AddAddress($correo,"observaciones");				

		if($mail->send() == false){
			// $this->redirect(array('admin'),array('notification'=>array('titulo'=>'Error al Enviar','cuerpo'=>'Error al enviar el correo de confirmación')));
			return false;
		}else{
			// $this->redirect(array('admin'),array('notification'=>array('titulo'=>'Exito al Crear','cuerpo'=>'El formato se ha guardado con exito.')));
			return false;
		}


		}  


           //funcion para hacer envio directo a correo electronico  //funcion  //
	             public function actionUploadProfilePicture() {
				         
					    $modelUsuario=Usuario::model()->findAll();
					    $UploadFormModel = new UploadForm; 
					         // activ//funcion de envio a correo//
				       	$arrBusquedad = array();
						$arrBusquedad=Yii::app()->session['observaciones'];

                   //---------------------------------------------------------------------------------------->
   
                           $correo=$arrBusquedad["correo"];
                           
				   //---------------------------------------------------------------------------------------->  
                        
					    Yii::import("ext.Mailer.*");
					    $mail=new PHPMailer();
					    $mail->IsSMTP(); 
						$mail->Host = "74.125.141.108"; // Servidores SMTP
						$mail->SMTPAuth = true;   // activar la identificacín SMTP
						$mail->SMTPDebug  = 1; //actival el modo debug del correo para ver los detalles de la conexion
						$mail->Port = 587; // Puerto de conexion con gmail
						$mail->SMTPSecure = "tls";	
						$mail->Username = "espm.ftra.yii@gmail.com";
						$mail->Password = "Espumas2016";


						                           
					    $mail->SetFrom("espm.ftra.yii@gmail.com","Condicion Comercial Espumas Medellin");
					    $mail->Subject="CONDICION COMERCIAL POR APROBAR";  
                        
	           /*funcion de copia de correo asignada para envio de correo electronicos a mas de un destinatario*/     					
                        
                        $mail->AddAddress('gerente.cartera@espumasmedellin.com');
                        // $mail->AddAddress('gerente.comercial@espumasmedellin.com');
                        $mail->AddAddress('contador2@espumasmedellin.com');
                        // $mail->AddAddress('raul.vergara@espumasmedellin.com');
	                    $mail->AddBCC('gercomercial@espumasmedellin.com');
	                    $mail->AddBCC('auxiliar.control@espumasmedellin.com');
	           			$mail->AddBCC('practicante.sistemas@espumasmedellin.com');


	           			//linea de testing
	           			// $mail->AddAddress('practicante.sistemas@espumasmedellin.com');

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
						$nombre=Yii::app()->user->name;
						for ($i=0; $i <count($modelUsuario) ; $i++) { 
							if ($modelUsuario[$i]["NombreUsuario"]==$nombre) {
								$nombre=$modelUsuario[$i]["Nombre"].$modelUsuario[$i]["Apellido"];
								
							}
						}

                    //-------------------------------------mensaje*----------------------------->

						$mail->MsgHtml("<h1>".$inicio."</h1><br>
							<img src='http://190.85.125.226/yii/espumred/images/logo.gif'><br>
						    Se ha diligenciado una condicion comercial.<br>
						    Por favor, visualizarla y darle aceptacion dando click en el nombre del Asesor:<br>
							<br>
				                          
						    <br>
							Att: <a href='http://190.85.125.226/yii/espumred'> ".$nombre." </a><br>

						");
												      
                   //------------------------------------------------------------------------------------------------>//

						$mail->AddAddress($correo,"observaciones");				
				        
				        if($mail->send() == false){
							$this->redirect(array('admin'),array('notification'=>array('titulo'=>'Error al Enviar','cuerpo'=>'Error al enviar el correo de confirmación')));
						}else{
							$this->redirect(array('admin'),array('notification'=>array('titulo'=>'Exito al Crear','cuerpo'=>'El formato se ha guardado con exito.')));
						}
			             

                     }  

         public function actionTest(){
         	Funtions_Global::notifyMeD('Exito al Crear','El formato se ha guardado con exito.');
         }



	  /* metodo para hacer es llamar a una vista de errores*/
         public function actionMostrarErrorImagen()
    {
        $model=new Condicionescomerciales;
        
         $this->render('errorImagen',array(
            'model'=>$model,
            
        ));
    }


     /* metodo para hacer es llamar a una vista de errore*/
         public function actionMostrarErrorEmpleado()
    {
        $model=new Condicionescomerciales;
        
         $this->render('errorEmpleado',array(
            'model'=>$model,
        ));
    }
	
//funcion para redirigir hacia la plantilla de condiciones comerciales y mostrarla en pdf
      public function actionMostrarPlantilla($id){



  //     	$this->render('view',array(
		// 	'model'=>$this->loadModel($id),
		// ));
		// Yii::setPathOfAlias('theme', Yii::app()->theme->baseUrl);
		

      	// $directorio = Yii::app()->request->baseUrl;
        // $arrId=Yii::app()->session['id'];
         # mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf('', '','', '','', '',
        	'', '','', '','P');
        // $mPDF1->AddPage('L');
        // $mPDF1->WriteHTML($this->render('_vistaPlantillahead',array('model'=>$this->loadModel($id)),true));
        // $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot') . '/themes/classic2/css/bootstrap.min.css');
        // $mPDF1->WriteHTML($stylesheet, 1);
        $mPDF1->WriteHTML($this->render('_vistaPlantillapdf',array('model'=>$this->loadModel($id)),true));
        // $mPDF1->WriteHTML($this->render('_vistaPlantillafooter',array('model'=>$this->loadModel($id)),true));
        # Outputs ready PDF
         $mPDF1->Output();

  
		        
    }


    
//funcion para guardar la id en secion 
      public function actionGuardarId(){
      	Yii::app()->session['id']="";
        $arrId = array();
        $id= $_POST["id"];        
        array_push($arrId, $id);
        Yii::app()->session['id']=$arrId;
        //var_dump($arrId);
    }

//funcion para envio de correo
    public function actionSend($id)

	{
		$this->render('send',array(
			'model'=>$this->loadModel($id),
		));
		
    } 
		
		
	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionBuscar()
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];  
		
		//funcion original 
		 if ($arrBusquedad[1]=="cod") {
		 	 	 $modelEmpleado=Observaciones::model()->findByPk($arrBusquedad[0]);
		 	 	if (!empty($modelEmpleado)) {
		 	 // $model=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array( //--->definir variable
                  
                    'criteria' => array(
                    'condition' => 'id ="' .$arrBusquedad[0]. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
            }else{
						$this->redirect(array('Observaciones/mostrarError'));
					};
		 }else{
		 	$id="";
		 		$model=Condicionescomerciales::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) { 
		 		  if ($model[$i]["nombreCliente"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cod"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Observaciones::model()->findByPk($id);
		 	if (!empty($modelEmpleado)) {
 
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(  //------>definir variable
                  
                    'criteria' => array(
                    'condition' => 'condicionescomerciales ="' .$id. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
				}else{
						$this->redirect(array('Observaciones/mostrarError'));
					};

		 }
			
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));

	}
    
	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionCentro()
	{
		$arrBusquedad = array();
		$arrBusquedad= Yii::app()->session['centro'];  
		$modelEmpleado=new Observaciones;
		$modeloCondicionescomerciales= new Condicionescomerciales;
		$modeloDescripcion= new Descripcion;
		
		
		 if ($arrBusquedad[1]=="TipologiaCliente") {  
		
		 	$id=$arrBusquedad[0];
		 	 $modelObservaciones=Observaciones::model()->findByPk($id);
		 	//actualizar contrato
		 	 	if (!empty($modelEmpleado)) {
		 	 		# code...
		 	 		//actualizar Observaciones
		 	 		if ($arrBusquedad[2]=="Observaciones") {
					  	$this->redirect(array('Observaciones/updateTodo','id'=>$modelEmpleado->id));
				 	
					}
						

					//actualizar Condiciones Comerciales
					if ($arrBusquedad[2]=="Condicionescomerciales") {
					 $modeloCondicionescomerciales=Condicionescomerciales::model()->findByPk($modelEmpleado["condicionescomerciales"]);
					 	$this->redirect(array('condicionescomerciales/update','id'=>$modeloCondicionescomerciales->cod));
					}

				//actualizar Descripcion
					if ($arrBusquedad[2]=="Descripcion") {
						$familiar=Descripcion::model()->findByPk($modelEmpleado['descripcion']);
						$arrFamiliar=Descripcion::model()->findAllByAttributes(array('codigo'=>$familiar["codigo"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('descripcion/admin'));
					 
					}

					if ($arrBusquedad[2]=="Todo") {
						 $arrBusquedad = array();
       					 
						$modeloDescripcion=Descripcion::model()->findByPk($modelEmpleado["descripcion"]);
						$modeloCondicionescomerciales=Condicionescomerciales::model()->findByPk($modelEmpleado["condicionescomerciales"]);
						
					 	array_push($arrBusquedad, $modeloDescripcion,$modeloCondicionescomerciales);
						Yii::app()->session['todo']=$arrBusquedad;
					$this->redirect(array('Condicionescomerciales/updateTodo','id'=>$modeloCondicionescomerciales->cod));
                    array_push($arrBusquedad, $modeloDescripcion,$modeloCondicionescomerciales);
						Yii::app()->session['todo']=$arrBusquedad;
					$this->redirect(array('Condicionescomerciales/updateTodo','id'=>$modeloInformacionPersonal->cod));

					
					}

				
					}else{
						$this->redirect(array('Observaciones/mostrarError'));
					};
			
		 }else{


		 		$id="";
		 		$modelEmpleado=Condicionescomerciales::model()->findAll();
		 		for ($i=0; $i <count($modelEmpleado) ; $i++) { 
		 		  if ($modelEmpleado[$i]["nombreCliente"]==$arrBusquedad[0]) {
		 				$id=$modelEmpleado[$i]["cod"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Observaciones::model()->findByPk($id);

		 		 if (!empty($modelEmpleado)) {
	
		 	//actualizar contrato
					
					}
		
					//actualizar informacionPersonal
					if ($arrBusquedad[2]=="Condicionescomerciales") {
					 $modeloCondicionescomerciales=Condicionescomerciales::model()->findByPk($modelEmpleado["condicionescomerciales"]);
					 	$this->redirect(array('condicionescomerciales/update','id'=>$modeloCondicionescomerciales->cod));
					}

				//actualizar informacionFamiliar
					if ($arrBusquedad[2]=="Descripcion") {
						$familiar=Descripcion::model()->findByPk($modelEmpleado['descripcion']);
						$arrFamiliar=Descripcion::model()->findAllByAttributes(array('codigo'=>$familiar["codigo"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('descripcion/admin'));
					 
					
					
					
					//}
					}else{
						$this->redirect(array('Observaciones/mostrarError'));
					};

		 }
		
	 }
	

//accion que se utiliza para buscar empleado y Actualizar empleado 
public function actionBuscarRetiro()
	{
		$model=new Informacionempleado;
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];  
		$id="";
		//funcion original 
		 if ($arrBusquedad[1]=="Cc") {  
		 	$id=$arrBusquedad[0];
		 	 $model=Informacionempleado::model()->findByPk($id);
		 	
		
		 }else{
		 	$id="";
		 		$model=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) { 
		 		  if ($model[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $model=Informacionempleado::model()->findByPk($id);

		 }
		

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save())
			$this->redirect(array('informacionEmpleado/index'));
		}
	
		$model=$this->loadModel($id);
		$this->render('update',array(
			'model'=>$model,
		));


	}

	//funcion para guardar el texto de evaluacion de busqueda	 
	public function actionGuardarTexto()
	{
		 $texto= strtoupper($_POST["texto"]); 
		  $tipoBUsquedad= $_POST["evaluar"];
		
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad);
		//funcion original 
		Yii::app()->session['texto']=$arrBusquedad;


	}

	//funcion para guardar el texto de evaluacion de busquedad	 
	public function actionGuardarTextoActualizar()
	{
		 $texto= strtoupper($_POST["texto"]); 
		  $tipoBUsquedad= $_POST["evaluar"];
		  $vistaCtualizar=$_POST["evaluarVista"];
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad, $vistaCtualizar);
		//funcion original 
		Yii::app()->session['actualizar']=$arrBusquedad;

	}


//funcion para guardar el texto de evaluacion de busqueda
	public function actionGuardarTextoActualizar2()
	{
		  $vistaCtualizar=$_POST["evaluarVista"];
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad, $vistaCtualizar);
		//funcion original 
		Yii::app()->session['actualizar']=$arrBusquedad;


	}


   /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarEmpleado()
    {
        $model=new Condicionescomerciales;
        
         $this->render('mostrarEmpleado',array(
            'model'=>$model,
        ));
    }

          public function actionMostrarFamiliar()
    {
        
        
         $this->render('_vistaFamiliar');
        
      
    }
     /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionActualizar() {
        $model=new Observaciones;
        
         $this->render('admin',array(
            'model'=>$model,
        ));
    }


    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionGenerarExcel()
    {
        
    $model=Observaciones::model()->findAll();
		Yii::app()->request->sendFile("CondicionComercial.xls",
			$this->renderPartial('excel',array('model'=>$model,),true)       
        );


    }

      /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Observaciones;
        
         $this->render('error',array(
            'model'=>$model,
        ));
    }


        /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de area especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarComercial($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(gerenteComercial) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Comercial::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->gerenteComercial, // label for dropdown list
                'value' => $model->gerenteComercial, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);
    }

    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de area especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCartera($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(gerenteCartera) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models =Cartera::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->gerenteCartera, // label for dropdown list
                'value' => $model->gerenteCartera, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);          	

    }
    
    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de area especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarGeneral($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreGerente) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Gerente::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->nombreGerente, // label for dropdown list
                'value' => $model->nombreGerente, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);          	

}

//metodo para buscar todos los familiares que tienen la persona 
             public function actionBuscarFamiliar()
    {
    	Yii::app()->session['arrFamiliar']=""; 
    	$arrFamiliar=array();
        $model=Descripcion::model()->findAll();;
        $cedula=$_POST["texto"];
        for ($i=0; $i <count( $model) ; $i++) { 
        	 if ($model[$i]["codigo"]==$cedula) {
        	 array_push($arrFamiliar,$model[$i]);
       		}
        }
      Yii::app()->session['arrFamiliar']=  $arrFamiliar ;
       
    }

                 public function actionUpdateTodo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Observaciones']))
		{
			
			$model->attributes=$_POST['Observaciones'];
			
			if($model->save()){
				
				$this->redirect(array('Observaciones/Actualizar','id'=>$model->id));        //definir variable
			}
		}

		$this->render('updateTodo',array(
			'model'=>$model,
		));
	}

		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		
		{
			
		}
	}

}
