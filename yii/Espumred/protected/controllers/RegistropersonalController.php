<?php

class RegistropersonalController extends Controller
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
				'actions'=>array('create','update', 'view', 'update', 'admin','index','menu','ingreso'
					,'guardar_foto','guardar','guardarId','menu'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="porteria"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','index','menu','ingreso'
					,'guardar_foto','guardar','guardarId','menu'),
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


	 public function actionGuardar_foto()
    {
      $this->render('guardar_foto');
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Registropersonal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registropersonal']))
		{
			$model->attributes=$_POST['Registropersonal'];
			$hora=date("g:i A");
			$fecha = date("d-m-Y");
			$registro=Yii::app()->session['Ingreso'];
			$model->nombre=$registro['nombre']." ".$registro['apellidos'];
			$model->horaingreso=$hora;
			$model->fecha=$fecha;
			$model->estado="Ingreso";
			$modeloIngres=Ingresopersonal::model()->findByPk($registro['id']);
			$modeloIngres->estado=$model->estado;
			$modeloIngres->save();
			
			if($model->save())
				$this->redirect(array('site/index','id'=>$model->cc));
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

		if(isset($_POST['Registropersonal']))
		{
			$model->attributes=$_POST['Registropersonal'];
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
		$model=new Registropersonal;
		$dataProvider=new CActiveDataProvider('Registropersonal');
		$this->render('index',array(
			'dataProvider'=>$model->search2(),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Registropersonal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Registropersonal']))
			$model->attributes=$_GET['Registropersonal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Registropersonal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Registropersonal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Registropersonal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registropersonal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
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




	//funcion para guardar la id en secion 
      public function actionGuardar(){
      	ini_set('date.timezone','America/Bogota'); 
      	$hora=date("g:i A");
      	echo $hora;
		$arrId = Yii::app()->session['id'];
        $model=Registropersonal::model()->findByPk($arrId);
        $model->horasalida=$hora;
        $model->estado="Salida";
        if($model->save()){
        		$this->redirect(array('site/index'));
        	}else{

        		echo "error";
        	}
			
        
    }


  
}
