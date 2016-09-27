<?php

class InformacionpersonalController extends Controller
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
				'actions'=>array('create','update', 'view', 'update','updateTodo', 'admin','listarMunicipio','cargar','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','updateTodo','delete','listarMunicipio','cargar','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="talentohumano"'
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
		$model=new Informacionpersonal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionpersonal']))
		{
			$Registro = array();
			Yii::app()->session['Registro']=$Registro;
			$model->attributes=$_POST['Informacionpersonal'];
			//se utiliza strtoupper para que guarde el campo  en mayuscula
			$model->nombre=strtoupper ($model->nombre);
			$model->barrio=strtoupper ($model->barrio);
			$model->direccionResidencia=strtoupper ($model->direccionResidencia);
			
      		$Registro[0]= $model;
      		Yii::app()->session['Registro'] = $Registro;//se crea un array en sesion para conservar los datos hasta el final donde se guardarn
		
			// if($model->save())
			if ($model->cc==""||$model->lugarNacimiento==""||$model->municipio=="") {
			 	//echo "hay un campo requerido en blanco porfavor verificar";
			 	Yii::app()->clientScript->registerScript(1, 'alert("hay un campo requerido en blanco por favor verificar")');
			 	
			}else {
				$cont=0;
				$modelof=Informacionpersonal::model()->findAll();
				for ($i=0; $i <count($modelof) ; $i++) { 
					if ($modelof[$i]["cc"]==$model->cc) {
						$cont=1;
					}
				}

				if ($cont=="0") {
					$this->redirect(array('informacionfamiliar/create','id'=>$model->cc));	
				}else{
					Yii::app()->clientScript->registerScript(1, 'alert("el usuario ya esta creado")');
				
				}
				
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

		if(isset($_POST['Informacionpersonal']))
		{
			$model->attributes=$_POST['Informacionpersonal'];
			if($model->save())
				$this->redirect(array('informacionempleado/actualizar'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}


	public function actionUpdateTodo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionpersonal']))
		{
			
			$model->attributes=$_POST['Informacionpersonal'];
			
			if($model->save())
				 $arrBusquedad = array();
					$arrBusquedad=Yii::app()->session['todo'];
				$modeloInformacionacademica=Informacionacademica::model()->findByPk($arrBusquedad[0]["id"]);
			
				$this->redirect(array('Informacionacademica/updateTodo','id'=>$modeloInformacionacademica->id));
			
		}

		$this->render('updateTodo',array(
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
	
		//funcion original 
		$dataProvider=new CActiveDataProvider('Informacionpersonal');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));


	}

	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Informacionpersonal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Informacionpersonal']))
			$model->attributes=$_GET['Informacionpersonal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionpersonal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Informacionpersonal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionpersonal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='informacionpersonal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarMunicipio($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreMunicipio) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Municipio::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->nombreMunicipio, // label for dropdown list
                'value' => $model->nombreMunicipio, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }

 /*metodo para retornar lo guardado antes de regresar
*/

	 public function actionCargar() {
	 		$Registro=Yii::app()->session['Registro'];
	 		//var_dump($Registro);
	 		 echo CJSON::encode($Registro);
          
            
         }

         
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

}
