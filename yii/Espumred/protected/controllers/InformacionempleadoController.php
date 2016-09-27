<?php

class InformacionempleadoController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="talentohumano"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
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
	 * Crea un nuevo modelo. De la creación tiene éxito, el navegador será redirigido a la página de "vista".
	 */
	public function actionCreate()
	{
		$model=new Informacionempleado;

		// Habilitar la línea siguiente si es necesaria la validación de AJAX
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionempleado']))
		{
			$model->attributes=$_POST['Informacionempleado'];  //antes de !="" se agrega  && $model['id'] se aumento experiencialaboral
			if ($model['area']!="" && $model['cargo']!="" ){
			// var_dump($model['area']);
			// var_dump($model['cargo']);
			
			
			$Registro = array();
			$Registro=Yii::app()->session['Registro'];
			 $modelInformacionPersonal=new Informacionpersonal;
			 $modelInformacionPersonal=$Registro[0];
// echo $modelInformacionPersonal['cc'];
// 			 var_dump($modelInformacionPersonal);

			 
			  $modelInformacionPersonal->save();
			
			
			//familiar
			$arrFamiliar = Yii::app()->session['Familiar'];
			$id;
			$modelFamiliar=new Informacionfamiliar;
                  
                  
			for ($i=0; $i <count($arrFamiliar) ; $i++) { //se agrego un mas(+) de mas
			 $modelFamiliar=new Informacionfamiliar;		
			 $modelFamiliar->ccEmpleado=$arrFamiliar[$i][0];
			 $modelFamiliar->nombreFamiliar=$arrFamiliar[$i][1];
			 $modelFamiliar->parantesco=$arrFamiliar[$i][2];
			 $modelFamiliar->fechaDeNacimiento=$arrFamiliar[$i][3];
			 $modelFamiliar->edad=$arrFamiliar[$i][4];
			 $modelFamiliar->escolaridad=$arrFamiliar[$i][5];
			 $modelFamiliar->ocupacion=$arrFamiliar[$i][6];
			 $modelFamiliar->viveConEmpleado=$arrFamiliar[$i][7];
			 $modelFamiliar->dependeDelEmpleado=$arrFamiliar[$i][8];
			 if ( $modelFamiliar->save()) {

			 	
			 		echo "guardo";
			 }else{
			 		echo "no guardo";
			 		var_dump($modelFamiliar);
			 }
			
			
			 }
			 			
			//informacion academica

			$modelInformacionAcademica=new Informacionacademica;
			$modelInformacionAcademica=$Registro[1];
			$modelInformacionAcademica->save();

			///estado estundiantil

			$modelEstadoEstudiantil=new Estadoestudiantil;
			$modelEstadoEstudiantil=$Registro[2];
    		$modelEstadoEstudiantil->save();
      		
      		///seguridad social

			$modelSeguridadSocial=new Seguridadsocial;
			$modelSeguridadSocial=$Registro[3];
    		$modelSeguridadSocial->save();
    		///informacion vivienda

			$modelInformacionVivienda=new Informacionvivienda;
			$modelInformacionVivienda=$Registro[4];
    		$modelInformacionVivienda->save();

      		///informacion economica
			$modelInformacionEconomica=new Informacioneconomica;
			$modelInformacionEconomica=$Registro[5];
    		$modelInformacionEconomica->save();

    		///Contrato
			$modelContrato=new Contrato;
			$modelContrato=$Registro[6];
    		$modelContrato->save();

      		///dotacion
			$modelDotacion=new Dotacion;
			$modelDotacion=$Registro[7];
    		$modelDotacion->save();	
   //   	
    		
    		//experiencia laboral


			 $arrExperiencia = Yii::app()->session['Experiencia'];
			 $id;
			 $modelExperiencialaboral=new Experiencialaboral;

			 for ($i=0; $i <count($arrExperiencia) ; $i++) { 
			 $modelExperiencialaboral=new Experiencialaboral;		
			 $modelExperiencialaboral->cedula=$arrExperiencia[$i][0];
			 $modelExperiencialaboral->empresa=$arrExperiencia[$i][1];
			 $modelExperiencialaboral->cargo=$arrExperiencia[$i][2];
			 $modelExperiencialaboral->funciones=$arrExperiencia[$i][3];
			 $modelExperiencialaboral->fecha_inicio=$arrExperiencia[$i][4];
			 $modelExperiencialaboral->fecha_retiro=$arrExperiencia[$i][5];
		
			 if ( $modelExperiencialaboral->save()) { 	
			 		echo "guardo";
			 }else{
			 		echo "no guardo";
			 		var_dump($modelExperiencialaboral);
			}
			
            
			}
			
			$model->id=$modelInformacionPersonal["cc"];  //---->envio con cc
			$model->informacionFamiliar=$modelFamiliar["id"];
			$model->InformacionEconomica=$modelInformacionEconomica["id"]; 
			$model->informacionAcademica=$modelInformacionAcademica["id"];
			$model->informacionPersonal=$modelInformacionPersonal["cc"];//---->//envio con cc
			$model->InformacionVivienda=$modelInformacionVivienda["id"];  
			$model->estadoEstudiantil=$modelEstadoEstudiantil["id"];
			$model->seguridadSocial=$modelSeguridadSocial["id"];
			$model->contrato=$modelContrato["id"];
			$model->dotacion=$modelDotacion["id"];
			$model->experiencialaboral=$modelExperiencialaboral["id"];
           
			if($model->save()){             
				$this->redirect(array('view','id'=>$model->id));
			
			}
			
			}else{
				var_dump($model['area']);
				var_dump($model['cargo']);
				var_dump("esta vacio");
			
			    $this->redirect(array('Informacionempleado/mostrarErrorEmpleado'));
			}	

		}

		$this->render('create',array(
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

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save())
			$this->redirect(array('informacionempleado/actualizar'));
		}

		$this->render('update',array(
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
		
		$dataProvider = new CActiveDataProvider('Informacionempleado', array(
       'criteria' => array('order' => 'informacionPersonal ASC'),
       
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
		$model=new Informacionempleado('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Informacionempleado']))
		$model->attributes=$_GET['Informacionempleado'];

		$this->render('admin',array(
			'model'=>$model,
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
		$model=Informacionempleado::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='informacionempleado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
//funcion para cargar la imagen y ponerle la identificacion del empleado
	public function actionUploadProfilePicture() {
            $UploadForm = new UploadForm;
            $model=Informacionempleado::model()->findByPk($_POST['UploadForm']["idProducto"]);
            
            if (isset($_POST['UploadForm'])) {
                
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
					
					//Returns main model image
					
					 
					
                    //$UploadForm->image = EUploadedImage::getInstance($UploadForm,'image');
                    // $UploadForm->image->maxWidth = 180;
                    // $UploadForm->image->maxHeight = 180;
                    // $UploadForm->image->thumb = array(
                    //     'maxWidth' => 65,
                    //     'maxHeight' => 65,
                    //     'dir' => 'thumbs',
                    //     'prefix' => 't_',
                    // );
                    
                    $fileExtension = explode(".",$UploadForm->image->name);
                    $file = "images/fotos/".$_POST['UploadForm']["idProducto"].".jpg";
                    
                    if ($UploadForm->image->saveAs($file)){
        //             	$dataProvider=new CActiveDataProvider('Informacionempleado');
								// $this->render('index',array(
								// 	'dataProvider'=>$dataProvider,
								// 	'id'=>$model->id;
								// ));
                         $this->redirect(array('index','id'=>$model->id));             
                  	 }else{
                  	 	   echo 'error';
                  	 	};
                     
                  } else{

            	$this->render('errorImagen',array('model'=>$model));
            	
            	};
            }            
                
        }

		
	  /* metodo para hacer es llamar a una vista de errores*/
         public function actionMostrarErrorImagen()
    {
        $model=new Informacionpersonal;
        
         $this->render('errorImagen',array(
            'model'=>$model,
        ));
    }

     /* metodo para hacer es llamar a una vista de errore*/
         public function actionMostrarErrorEmpleado()
    {
        $model=new Informacionpersonal;
        
         $this->render('errorEmpleado',array(
            'model'=>$model,
        ));
    }
	
//funcion para redirigir hacia la plantilla de hoja de vida
      public function actionMostrarPlantilla(){
        $model=new Informacionempleado;
        $arrId = array();
        $arrId=Yii::app()->session['id'];
        var_dump( $arrId[0]);
         # mPDF
         $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->render('mostrarPlantilla',array(
            'model'=>$this->loadModel($arrId[0]),
        ),true));
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

//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcel()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("InformacionEmpleados.xls",
			$this->renderPartial('excel',array('model'=>$model,),true)
			);
	

	}
	//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcelCuenta()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("CuentasBancarias.xls",
			$this->renderPartial('excelCuenta',array('model'=>$model,),true)
			);
	
	}

//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcelCarnet()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("Carnetizacion.xls",
			$this->renderPartial('excelCarnet',array('model'=>$model,),true)
			);
	
	}

	/**
	 * Lists un models.
	 */
	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionBuscar()  //*//
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];  
		
		//funcion original 
		 if ($arrBusquedad[1]=="Cc") {
		 	 	 $modelEmpleado=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	 	if (!empty($modelEmpleado)) {
		 	 // $model=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(
                  
                    'criteria' => array(
                    'condition' => 'id ="' .$arrBusquedad[0]. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
            }else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};
		 }else{
		 	$id="";
		 		$model=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) { 
		 		  if ($model[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Informacionempleado::model()->findByPk($id);
		 	if (!empty($modelEmpleado)) {
 
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(
                  
                    'criteria' => array(
                    'condition' => 'informacionPersonal ="' .$id. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
				}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};

		 }
			
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));


	}

	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionActualizarVista()
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['actualizar'];  
		$modelEmpleado=new Informacionempleado;
		$modeloInformacionpersonal= new Informacionpersonal;
		$modeloInformacionfamiliar= new Informacionfamiliar;
		$modeloInformacionacademica= new Informacionacademica;
		$modeloEstadoestudiantil= new Estadoestudiantil;
		$modeloSeguridadsocial= new Seguridadsocial;
		$modeloInformacionvivienda= new Informacionvivienda;
		$modeloInformacioneconomica= new Informacioneconomica;
		$modeloContrato= new Contrato;
		$modeloDotacion= new Dotacion;
		$modeloExperiencialaboral= new Experiencialaboral;
		
		 if ($arrBusquedad[1]=="Cc") {  //se cambia la primera C a minuscula // //
		
		 	$id=$arrBusquedad[0];
		 	 $modelEmpleado=Informacionempleado::model()->findByPk($id);
		 	//actualizar contrato
		 	 	if (!empty($modelEmpleado)) {
		 	 		# code...
		 	 		//actualizar informacion empleado
		 	 		if ($arrBusquedad[2]=="Informacionempleado") {
					  	$this->redirect(array('Informacionempleado/update','id'=>$modelEmpleado->id));
				 	
					}
						//actualizar contrato		 	 	
				if ($arrBusquedad[2]=="Contrato") {
					 $modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$this->redirect(array('contrato/update','id'=>$modeloContrato->id));
				 	
					}

								//actualizar dotacion
				if ($arrBusquedad[2]=="Dotacion") {
					 $modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					$this->redirect(array('dotacion/update','id'=>$modeloDotacion->id));
					
					}
		
					//actualizar informacionPersonal
					if ($arrBusquedad[2]=="Informacionpersonal") {
					 $modeloInformacionpersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$this->redirect(array('informacionpersonal/update','id'=>$modeloInformacionpersonal->cc));
					}

				//actualizar informacionFamiliar
					if ($arrBusquedad[2]=="Informacionfamiliar") {
						$familiar=Informacionfamiliar::model()->findByPk($modelEmpleado['informacionFamiliar']);
						$arrFamiliar=Informacionfamiliar::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('informacionfamiliar/admin'));
					 
					
					}

			   //actualizar experiencia laboral
					if ($arrBusquedad[2]=="Experiencialaboral") {
						$experiencia=Experiencialaboral::model()->findByPk($modelEmpleado['experiencialaboral']);
						// $arrFamiliar=Experiencialaboral::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Experiencialaboral']="";
					    Yii::app()->session['Experiencialaboral']=$experiencia;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('Experiencialaboral/admin'));
					 
					
					}


				//actualizar informacionAcademica
				if ($arrBusquedad[2]=="Informacionacademica") {
					 $modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
					$this->redirect(array('informacionacademica/update','id'=>$modeloInformacionacademica->id));
					
					}

				//actualizar estadoEstudiantil
				if ($arrBusquedad[2]=="Estadoestudiantil") {
					 $modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
					$this->redirect(array('estadoEstudiantil/update','id'=>$modeloEstadoestudiantil->id));
					
					}

				//actualizar Seguridadsocial
				if ($arrBusquedad[2]=="Seguridadsocial") {
					 $modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
					$this->redirect(array('seguridadSocial/update','id'=>$modeloSeguridadsocial->id));
					
					}

					//actualizar InformacionVivienda
				if ($arrBusquedad[2]=="Informacionvivienda") {
					 $modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
					$this->redirect(array('informacionVivienda/update','id'=>$modeloInformacionVivienda->id));
					
					}

						//actualizar InformacionEconomica
				if ($arrBusquedad[2]=="Informacioneconomica") {
					 $modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					$this->redirect(array('informacionEconomica/update','id'=>$modeloInformacionEconomica->id));
					
					}

					//actualizar Experiencia Laboral
				if ($arrBusquedad[2]=="Experiencialaboral") {
					 $modeloExperiencialaboral=Experiencialaboral::model()->findByPk($modelEmpleado["experiencialaboral"]);
					$this->redirect(array('experiencialaboral/update','id'=>$modeloExperiencialaboral->id));
					
					}

					if ($arrBusquedad[2]=="Todo") {
						 $arrBusquedad = array();
       					 
						$modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
						$modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
						$modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
						$modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
						$modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					 	$modeloInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					 	$modeloExperiencialaboral=Experiencialaboral::model()->findByPk($modelEmpleado["experiencialaboral"]);
					 	array_push($arrBusquedad, $modeloInformacionacademica,$modeloEstadoestudiantil, $modeloSeguridadsocial,$modeloInformacionVivienda,
					 		$modeloInformacionEconomica,$modeloInformacionPersonal,$modeloContrato,$modeloDotacion,$modeloExperiencialaboral);
						Yii::app()->session['todo']=$arrBusquedad;
					$this->redirect(array('Informacionpersonal/updateTodo','id'=>$modeloInformacionPersonal->cc));
					
					}

				
					}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};
			
			
		          }else{



		 		$id="";
		 		$modelEmpleado=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($modelEmpleado) ; $i++) { 
		 		  if ($modelEmpleado[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$modelEmpleado[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Informacionempleado::model()->findByPk($id);

		 		 if (!empty($modelEmpleado)) {
	
		 	//actualizar contrato
				if ($arrBusquedad[2]=="Contrato") {
					 $modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$this->redirect(array('contrato/update','id'=>$modeloContrato->id));
				 	
					}

								//actualizar dotacion
				if ($arrBusquedad[2]=="Dotacion") {
					 $modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					$this->redirect(array('dotacion/update','id'=>$modeloDotacion->id));
					
					}
		
					//actualizar informacionPersonal
					if ($arrBusquedad[2]=="Informacionpersonal") {
					 $modeloInformacionpersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$this->redirect(array('informacionpersonal/update','id'=>$modeloInformacionpersonal->cc));
					}

				//actualizar informacionFamiliar
					if ($arrBusquedad[2]=="Informacionfamiliar") {
						$familiar=Informacionfamiliar::model()->findByPk($modelEmpleado['informacionFamiliar']);
						$arrFamiliar=Informacionfamiliar::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('informacionfamiliar/admin'));
					 
					
					}

			   //actualizar experiencia laboral
					if ($arrBusquedad[2]=="Experiencialaboral") {
						$experiencia=Experiencialaboral::model()->findByPk($modelEmpleado['experiencialaboral']);
						//$arrExperiencia=Experiencialaboral::model()->findAllByAttributes(array('cedula'=>$experiencia["cedula"]));
						Yii::app()->session['Experiencialaboral']="";
					    Yii::app()->session['Experiencialaboral']=$experiencia;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('Experiencialaboral/admin'));
					 
					
					}

				//actualizar informacionAcademica
				if ($arrBusquedad[2]=="Informacionacademica") {
					 $modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
					$this->redirect(array('informacionacademica/update','id'=>$modeloInformacionacademica->id));
					
					}

				//actualizar estadoEstudiantil
				if ($arrBusquedad[2]=="Estadoestudiantil") {
					 $modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
					$this->redirect(array('estadoEstudiantil/update','id'=>$modeloEstadoestudiantil->id));
					
					}

				//actualizar Seguridadsocial
				if ($arrBusquedad[2]=="Seguridadsocial") {
					 $modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
					$this->redirect(array('seguridadSocial/update','id'=>$modeloSeguridadsocial->id));
					
					}

					//actualizar InformacionVivienda
				if ($arrBusquedad[2]=="Informacionvivienda") {
					 $modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
					$this->redirect(array('informacionVivienda/update','id'=>$modeloInformacionVivienda->id));
					
					}

						//actualizar InformacionEconomica
				if ($arrBusquedad[2]=="Informacioneconomica") {
					 $modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					$this->redirect(array('informacionEconomica/update','id'=>$modeloInformacionEconomica->id));
					
					}
					}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
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
		 if ($arrBusquedad[1]=="Cc") {  //se cambia la primera C en minuscula // //
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
        $model=new Informacionpersonal;
        
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
        $model=new Informacionpersonal;
        
         $this->render('actualizar',array(
            'model'=>$model,
        ));
    }


    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarRetiro()
    {
        $model=new Informacionpersonal;
        
         $this->render('mostrarRetiro',array(
            'model'=>$model,
        ));
    }


      /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Informacionpersonal;
        
         $this->render('error',array(
            'model'=>$model,
        ));
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de area especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarArea($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreArea) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Area::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->nombreArea, // label for dropdown list
                'value' => $model->nombreArea, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de cargo especifico.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCargo($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreCargo) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Cargos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->nombreCargo, // label for dropdown list
                'value' => $model->nombreCargo, // value for input field
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
        $model=Informacionfamiliar::model()->findAll();;
        $cedula=$_POST["texto"];
        for ($i=0; $i <count( $model) ; $i++) { 
        	 if ($model[$i]["ccEmpleado"]==$cedula) {
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

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save()){
				
				$this->redirect(array('informacionEmpleado/Actualizar','id'=>$model->id));
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
	}

}

