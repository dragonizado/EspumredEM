<?php

class RegistroController extends Controller
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
				'actions'=>array('create','update', 'view', 'update', 'admin', 'listarHerramientas', 'listarMecanico','agregarMecanicos',"verRegistros",),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="mantenimiento"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin', 'listarHerramientas', 'listarMecanico','eliminar'),
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
		$model=new Registro;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Registro']))
		{
			$Mecanicos = array();
			$Mecanicos=Yii::app()->session['Mecanicos'];
			for ($i=0; $i <count($Mecanicos) ; $i++) {
				$model=new Registro; 
				$model->idMecanico=$Mecanicos[$i][5];
				$model->tipo=$Mecanicos[$i][2];
				$model->descripcion=$Mecanicos[$i][6];
				$model->cantidad=$Mecanicos[$i][0];
				$model->ubicacion=$Mecanicos[$i][1];
				$model->save();

			}
			Yii::app()->session['Mecanicos']="";
			// $model->attributes=$_POST['Registro'];
			// if($model->save())
				$this->redirect(array('site/index'));
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

		if(isset($_POST['Registro']))
		{
			$model->attributes=$_POST['Registro'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idMecanico));
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
		$dataProvider=new CActiveDataProvider('Registro');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Registro('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Registro']))
			$model->attributes=$_GET['Registro'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Registro the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Registro::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Registro $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registro-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarHerramientas($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Herramientas::model()->findAll($criteria);
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
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarMecanico($term) {
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

    
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	 public function actionAgregarMecanicos() {
        $arrMecanicos = array();
        $contador=0;
        if (isset(Yii::app()->session['Mecanicos'])&&Yii::app()->session['Mecanicos']!="") {
            $arrMecanicos = Yii::app()->session['Mecanicos'];
            
        }
     
                    $cantidad= $_POST["cantidad"];
                    $ubicacion=$_POST["ubicacion"];
                    $tipo=$_POST["tipo"];
                    $descripcion=$_POST["descripcion"];
                    $idMecanico=$_POST["idMecanico"];
                    $Registro_idMecanico=$_POST["Registro_idMecanico"];
                    $Registro_descripcion=$_POST["Registro_descripcion"];
                   
                    $item = array($cantidad,$ubicacion,$tipo,$descripcion,$idMecanico,$Registro_idMecanico
					,$Registro_descripcion);
                    array_push($arrMecanicos, $item);
                   
                  
  		
          Yii::app()->session['Mecanicos'] = $arrMecanicos;

        }

/* *En este metodo para mostrar lel contenido de la variable de sesion */
        public function actionVerRegistros(){ 
             if (isset(Yii::app()->session['Mecanicos'])) {

           echo json_encode(Yii::app()->session['Mecanicos']);
       	 } 
			
   		 }


}
