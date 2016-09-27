<?php

class LoteController extends Controller
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
				'actions'=>array('create','update', 'view','admindescargo','admin','delete','cargarMedida','eliminar','listarEspumas','guardar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="corte"'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view','admindescargo','admin','delete','cargarMedida','eliminar','listarEspumas','guardar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="T8"'
			),
					array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view','admindescargo','admin','delete','cargarMedida','eliminar','listarEspumas','guardar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="noticorte"'
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
		$model=new Lote;
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lote']))
		{
			$model->attributes=$_POST['Lote'];
			$fecha=date("Y/m/d");
			$model->fecha_validacion=$fecha;
			if($model->save()){
			  $arrLote = array();
			   $arr = array();    		
 			  array_push($arrLote,$model ["codLote"], $model["densidad"], $model["altura"],
              $model["ancho"],$model ["largo"],$model ["peso"]);
				Yii::app()->session['registro'] = $arrLote;
				Yii::app()->session['formacion'] = $arr;
				$this->redirect(array('site/index'));
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

		if(isset($_POST['Lote']))
		{
			$model->attributes=$_POST['Lote'];
				if($model->save()){
					$this->redirect(array('formacion/create','id'=>$model->codLote));
				}
			
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
		$dataProvider=new CActiveDataProvider('Lote');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Lote('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lote']))
			$model->attributes=$_GET['Lote'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionAdmindescargo()
	{
		$model=new Lote('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lote']))
			$model->attributes=$_GET['Lote'];

		$this->render('admin_descargo',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Lote the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Lote::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Lote $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lote-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionCargarMedida()
	{

					$descripcion= $_POST["descripcion"];
                    $tipoEspuma=$_POST["tipoEspuma"];
                    $modeloEspumas=Espumas::model()->findAll();    
                    // var_dump($modeloEspumas);
                    // for ($i=0; $i <count($modeloEspumas) ; $i++) { 
                    // 	echo $modeloEspumas[$i]["tipo"]."*";
                    // 	echo $tipoEspuma."*------";
                    // 	if ($modeloEspumas[$i]["tipo"]==$tipoEspuma) {
                    // 		echo "dio".$i;
                    // 	}
                    // }

       				$modeloEspumas=Espumas::model()->findByAttributes(array('tipo'=>$tipoEspuma,'descripcion'=>$descripcion));           
       				echo CJSON::encode($modeloEspumas);
                 
	}


	public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


		    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al tipo de espumas 
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarEspumas($term) {
          
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(descripcion) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Espumas::model()->findAll($criteria);
        $arr = array();
        $tipo=Yii::app()->session['TipoEspumas'] ;
        foreach ($models as $model) {
        	if ($model->tipo==$tipo) {
        	
            $arr[] = array(
                'label' => $model->descripcion, // label for dropdown list
                'value' => $model->descripcion, // value for input field
                'id' => $model->descripcion, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }

    public function actionGuardar()
	{
		  $id=$_POST["tipoEspuma"];
			Yii::app()->session['TipoEspumas'] = $id;
			echo $id;
	}

}
