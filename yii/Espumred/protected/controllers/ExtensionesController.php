<?php

class ExtensionesController extends Controller
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
				'actions'=>array('mostrarExtensiones','cargar','listarExtension','listarArea'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','mostrarExtenciones','index','listarExtension','listarArea','cargar','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="adminSistema"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','mostrarExtenciones','index','listarExtension','listarArea','cargar','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Extensiones;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Extensiones']))
		{
			$model->attributes=$_POST['Extensiones'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Extensiones']))
		{
			$model->attributes=$_POST['Extensiones'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		$dataProvider = new CActiveDataProvider('Extensiones', array(
       'criteria' => array('order' => 'id ASC',  ),
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
		$model=new Extensiones('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Extensiones']))
			$model->attributes=$_GET['Extensiones'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Extensiones the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Extensiones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Extensiones $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='Extensiones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	  /* metodo para hacer el llamado ala vista mostrarExtensiones.php*/
         public function actionMostrarExtensiones() {
        $model=new Extensiones;
        
         $this->render('mostrarExtensiones',array(
            'model'=>$model,
        ));
    }


              	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el nombre de las extencion especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarExtension($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Extensiones::model()->findAll($criteria);
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

      	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el nombre del area especifica.
        este metodo es llamado desde el campo en el formulario.*/
     public function actionListarArea($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(area) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Extensiones::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->area, // label for dropdown list
                'value' => $model->area, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);
    }


    public function actionCargar() {


           // Yii::app()->session['Cliente'] ="";
            $arrCliente = array();
            $id=$_POST["id"];
            $modeloExtensiones=Extensiones::model()->findAll();
            

                       for ($i=0; $i <count($modeloExtensiones); $i++) { 

                       if ($modeloExtensiones[$i]['id']==$id) {
                              array_push($arrCliente,$modeloExtensiones[$i] );
                             $i=count($modeloExtensiones);
                       	 }

                     }

             echo CJSON::encode($arrCliente);
           

        }



        

        
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


}
