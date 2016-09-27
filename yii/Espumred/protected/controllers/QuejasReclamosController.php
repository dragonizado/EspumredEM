<?php

class QuejasReclamosController extends Controller
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
                'actions'=>array('create','view','admin','listarCiudad','listarArticulo','eliminar','update','index',
                'listarUsuario','listarCliente','mostrarPlantilla','agregarItem','verArticulos',
                'generarValor','generarDireccion','generarCedula','generarTelefono','generarTotal','listarEmpresas','actualizar','mostrarplantillaActualizar','generarNuevoCliente'),
                    'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="despacho"'
                
                
            ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCiudad','listarArticulo',
					'listarUsuario','listarCliente','mostrarPlantilla','agregarItem','verArticulos','eliminar',
					'generarValor','generarDireccion','generarTelefono','uploadProfilePicture','Upload','generarCedula','generarTotal','mostrarSastifactorio','eliminar','listarEmpresas','actualizar','mostrarplantillaActualizar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Qreclamos"'
                
        ),
        array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('create','uploadProfilePicture','Upload'),
        'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Asesor"'

        ),
         array('allow', // allow authenticated user to perform 'create' and 'update' actions
        'actions'=>array('create','view','admin'),
        'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="ServicioCliente"'        
                
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
		$this->render('mostrarPlantilla',array( 
			'model'=>$this->loadModel($id),
		));
	}

  public function actionUpload(){
    $model= new QuejasReclamos;
    $this->render('upload',array(
      'model'=>$model,
    ));
  }
  

  //funcion para hacer envio directo a correo electronico  //funcion  //
               public function actionUploadProfilePicture() {
                 
              $modelUsuario=Usuario::model()->findAll();
              $UploadFormModel = new UploadForm; //funcion de envio a correo//
              $arrBusquedad = array();
              $arrBusquedad=Yii::app()->session['quejasreclamos'];    //definir sesion//

            //---------------------------------------------------------------------------------------->
               
                           $correo=$arrBusquedad["Firma"];
                                     
           //---------------------------------------------------------------------------------------->  
                        
              Yii::import("ext.Mailer.*");
              $mail=new PHPMailer();                              
              $mail->SetFrom("espm.ftra.yii@gmail.com","Quejas y Reclamos EM"); //definir correo por el servidor smtp 
              $mail->Subject="Queja y Reclamo por Revisar";  

          /*  funcion de copia de correo asignada para envio de correo electronicos a mas de un destinatario */              
              $mail->addCC('practicante.sistemas@espumasmedellin.com');
         //----------------------------------------------------------------------------------------->
            
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
            
          //-------------------------------------mensaje*------------------------------------------<---------->

            $mail->MsgHtml("<h1>".$inicio."</h1><br>
              <img src='http://www.espumasmedellin.com/home/skin/frontend/default/hellowired/images/logo.gif'><br>
                Se ha diligenciado un formato de Quejas y Reclamos.<br>
                Para visualizarla haz click en el nombre del usuario :<br>
              <br>

                <a href='http://192.168.1.8/yii/espumred'><br>
                  
                            
              <br>
              Att:".$nombre."<br>

                          
              ");

          //------------------------------------------------------------------------------------------------>//

                  $mail->AddAddress($correo,"quejasreclamos");
                  echo $correo;
                  $mail->send();
                  $this->redirect(array('create')); //redireccionado a admin pero con permisos// //
                  }
                     
         //-----------Funcion de crear Quejas y Reclamos--------------//-------------//


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
	  $model=new QuejasReclamos;

    if(isset($_POST['QuejasReclamos']))
    {

      $model->attributes=$_POST['QuejasReclamos'];
      $model->NombreApellido=strtoupper ($model->NombreApellido);
      $model->Empresa=strtoupper ($model->Empresa);
      $model->Hechos=strtoupper ($model->Hechos);
      $model->Documentacion=strtoupper ($model->Documentacion);
      $model->NombreCliente=strtoupper ($model->NombreCliente);
      $model->Lote=strtoupper ($model->Lote);

      $model->id=$model->codigo;
      
      if($model->save())

        Yii::app()->session['quejasreclamos']=$model; //sesion de envio                
        $this->redirect(array('upload'));

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

    if(isset($_POST['QuejasReclamos']))
    {
      $model->attributes=$_POST['QuejasReclamos'];
      {
      $model->attributes=$_POST['QuejasReclamos'];
      $model->NombreApellido=strtoupper ($model->NombreApellido);
      $model->Empresa=strtoupper ($model->Empresa);
      $model->Hechos=strtoupper ($model->Hechos);
      $model->Documentacion=strtoupper ($model->Documentacion);
      $model->NombreCliente=strtoupper ($model->NombreCliente);

      }
      if($model->save())
        $this->redirect(array('admin'));  
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


   /* metodo para hacer es llamar a una vista de errore*/
         public function actionMostrarSastifactorio()
    {
        $model=new QuejasReclamos;
        
         $this->render('Sastifactorio',array(
            'model'=>$model,
        ));
    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//$dataProvider=new CActiveDataProvider('Cartaremisora');

        $dataProvider = new CActiveDataProvider('Cartaremisora', array(
       'criteria' => array('order' => 'consecutivo ASC',  ),
       'pagination' => array('pageSize' => 20,))
      );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


//------------------------------------------------------------
  //funcion para ver el formulario en pdf
public function actionMostrarPlantilla(){
        $model=new QuejasReclamos;
        $arrId = array();
        $arrId=Yii::app()->session['id'];
        var_dump( $arrId[0]);
         #mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->render('mostrarPlantilla',array(
            'model'=>$this->loadModel($arrId[0]),
        ),true));
        # Outputs ready PDF
         $mPDF1->Output();
    }
//--------------------------------------------------------------

    
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new QuejasReclamos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['QuejasReclamos']))
			$model->attributes=$_GET['QuejasReclamos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cartaremisora the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=QuejasReclamos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param Cartaremisora $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='quejasreclamos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

/*metodo para visualizar que articulos se han agregado en sesion*/
 		public function actionVerArticulos(){ 
             if (isset(Yii::app()->session['Articulo'])) {

           echo json_encode(Yii::app()->session['Articulo']);
       	 } 
			
   		 }
   	

    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarPlantillaActualizar($id)
    {
        $model=new QuejasReclamos;
        $this->render('mostrarplantillaActualizar',array(
            'model'=>$this->loadModel($id),
        ));
    }

/*metodo para actualizar la cantidad de articulos que estan en sesion ya que en el fomulario se puede borrar 
  cualquier tipo de articulo
*/
	 public function actionActualizar() {

            $arrArticulos = Yii::app()->session['Articulo'];
            $id=$_POST["idEliminar"];
        	for ($i=0; $i <count($arrArticulos) ; $i++) { 
        		echo $id;
        		if ($arrArticulos[$i][3]."'"===$id) {
        			
        			unset($arrArticulos[$i]);//elimina el valor de la posicion enocntrada 
        			$arrArticulos = array_values($arrArticulos);//ordena el vector 	
        		}
        		
        	}   

        Yii::app()->session['Articulo'] = $arrArticulos;
      
        
        }

/*metodo para capturar los datos de los nuevos clientes
*/

          public function actionEliminar($id)
  {
    $this->loadModel($id)->delete();
    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

}//final de controlador
