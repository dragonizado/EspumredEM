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
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','regresar','Centro','Enviar','mail','Aceptacion','updateTodo','Upload',),
				    'users'=>array('@'),
                    'expression'=>'Yii::app()->user->rol==="Comercio"'
			),

			array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"//
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado'),
				    'users'=>array('@'),
                    'expression'=>'Yii::app()->user->rol==="admin"'

            ),
            //permisos de Gerentes
            array('allow',
            'actions'=>array('update', 'view','admin','actualizar','Aceptacion'),   
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="Gerente"'


             ),
            //permisos de Revisoria
             array('allow',
            'actions'=>array('view','admin'),					
				    'users'=>array('*'),
                     'expression'=>'Yii::app()->user->rol==="Revisoria"'
                                        
			),
             //permisos de Asesor
            array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"
				'actions'=>array('create','view', 'admin','send','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarComercial','listarCartera','listarGeneral','mostrarRetiro','buscarRetiro','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','regresar','centro','Enviar','mail','updateTodo','Upload'),
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="Asesor"' 
            ),

              array('allow',
            'actions'=>array('update', 'view','admin','actualizar','Aceptacion'),   
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="GerenteComercial"'
            ),
            
            array('allow',
            'actions'=>array('update', 'view','admin','actualizar','Aceptacion'),   
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="GerenteCartera"'
            ),
             array('allow',
            'actions'=>array('update', 'view','admin'),   
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="ServicioCliente"'        

			),			
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


			$model->id=$modelInformacionPersonal["id"]; 
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
		$model=new Observaciones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Observaciones']))
			$model->attributes=$_GET['Observaciones'];

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

           //funcion para hacer envio directo a correo electronico  //funcion  //
	             public function actionUploadProfilePicture() {
				         
					    $modelUsuario=Usuario::model()->findAll();
					    $UploadFormModel = new UploadForm; //funcion de envio a correo//
				       	$arrBusquedad = array();
						$arrBusquedad=Yii::app()->session['observaciones'];    //definir sesion//

                   //---------------------------------------------------------------------------------------->
   
                           $correo=$arrBusquedad["correo"];
                           //$correo=$arrBusquedad["mail1"];
                           //$correo=$arrBusquedad["mail2"];
                           //$correo=$arrBusquedad("auxiliar.sistemas@espumasmedellin.com");
                           //$correo=$arrBusquedad("sistemas@espumasmedellin.com");
                           
				   //---------------------------------------------------------------------------------------->  
                        
					    Yii::import("ext.Mailer.*");
					    $mail=new PHPMailer();                              
					    $mail->SetFrom("espm.ftra.yii@gmail.com","Condicion Comercial Espumas Medellin");
					    $mail->Subject="CONDICION COMERCIAL POR APROBAR";  
                        
	           /*funcion de copia de correo asignada para envio de correo electronicos a mas de un destinatario*/     					
                        
                        $mail->addCC('jefe.cartera@espumasmedellin.com');
                        $mail->addCC('gerente.comercial@espumasmedellin.com');
                        $mail->addCC('practicante.sistemas@espumasmedellin.com'); 
	                    $mail->addCC('gercomercial@espumasmedellin.com');
	                    $mail->addCC('auxiliar.control@espumasmedellin.com');

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
							<img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
						    Se ha diligenciado una condicion comercial.<br>
						    Por favor, visualizarla y darle aceptacion dando click en el nombre del Asesor:<br>
							<br>

						    <a href='http://192.168.1.8/yii/espumred'><br>
						      
						                                  
						    <br>
							Att: ".$nombre."<br>

						");
												      
                   //------------------------------------------------------------------------------------------------>//

						$mail->AddAddress($correo,"observaciones");				
						echo $correo;
				        $mail->send();
			            $this->redirect(array('admin')); 

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
      public function actionMostrarPlantilla(){

        $model=new Observaciones;
        $arrId=Yii::app()->session['id'];
         # mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf('', '','', '','', '',
        	'', '','', '','P');

        $mPDF1->WriteHTML($this->render('_vistaInforme',array(
            'model'=>$model,
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
