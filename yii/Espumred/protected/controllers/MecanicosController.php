<?php

class MecanicosController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','mostrarMecanico','listarNombre','cargar',
					'mostrarDetalle','guardarid','eliminar','mostrarError'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="mantenimiento"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','mostrarMecanico','listarNombre','cargar',
					'mostrarDetalle','guardarid','eliminar','mostrarError'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
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
		$model=new Mecanicos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Mecanicos']))
		{
			$model->attributes=$_POST['Mecanicos'];
			$modeloMecanico=Mecanicos::model()->findAll();
			for ($i=0; $i <count($modeloMecanico) ; $i++) { 
					if ($model["cc"]==$modeloMecanico[$i]["cc"]) {
						$this->redirect(array('Mecanicos/mostrarError'));
					}
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->cc));
			
			
			
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

		if(isset($_POST['Mecanicos']))
		{
			$model->attributes=$_POST['Mecanicos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cc));
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
		$dataProvider=new CActiveDataProvider('Mecanicos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Mecanicos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Mecanicos']))
			$model->attributes=$_GET['Mecanicos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Mecanicos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Mecanicos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Mecanicos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='mecanicos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	 /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarMecanico()
    {
        $model=new Mecanicos;
        $this->render('mostrarVista',array(
            'model'=>$model,
        ));
    }


       /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarNombre($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(Nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Mecanicos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
               'label' => $model->Nombre." ".$model->Apellido, // label for dropdown list
                'value' => $model->Nombre." ".$model->Apellido,  // value for input field
                'cc' => $model->cc, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }


     public function actionCargar() {


           // Yii::app()->session['Cliente'] ="";
            $arrCliente = array();
            $id=$_POST["id"];
             $modeloRegistro=Registro::model()->findAll();
            

                       for ($i=0; $i <count($modeloRegistro); $i++) { 

                       if ($modeloRegistro[$i]['idMecanico']==$id) {
                        	$modelHerramienta=Herramientas::model()->findByPk($modeloRegistro[$i]['descripcion']);

                       	$item = array($modeloRegistro[$i] ["tipo"], $modelHerramienta["descripcion"], $modelHerramienta["nombre"],
                       		$modelHerramienta["marca"],$modeloRegistro[$i] ["cantidad"],$modeloRegistro[$i] ["ubicacion"]);
                              array_push($arrCliente,$item );
                             
                       	                   }

                     }

             echo CJSON::encode($arrCliente);
           

        }

        //funcion para redirigir hacia la plantilla detallada del mecanico
      public function actionMostrarDetalle(){
        $model=new Mecanicos;
       $arrId = array();
        $arrId=Yii::app()->session['id'];
       
         # mPDF
         $mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->render('mostrarDetalle',array(
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

    	public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	 /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Mecanicos;
        
         $this->render('error',array(
            'model'=>$model,
        ));
    }


    /* metodo vista para leer excel.php*/
         public function actionMostrarExcel()
    {

        	Yii::import("ext.Mailer.*");
         $this->render('error',array(
            'model'=>$model,
        ));
    }

   

}
