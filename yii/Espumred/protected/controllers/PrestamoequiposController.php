<?php

class PrestamoequiposController extends Controller
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
				'actions'=>array('create','update', 'view','eliminar', 'update', 'admin','listarClientes','index','ajaxstore'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Comercio"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCliente','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
            ),

            array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCliente','eliminar','index'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Revisoria"'
                            
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
		$model=new Prestamoequipos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Prestamoequipos']))
		{
			$model->attributes=$_POST['Prestamoequipos'];
			
			$model->responsable=strtoupper ($model->responsable);
			//model->Apellido=strtoupper ($model->Apellido);
			//model->Direccion=strtoupper ($model->Direccion);
			//$model->cod=$model->cod;
			if($model->save())
				$this->redirect(array('create'));
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

		if(isset($_POST['Prestamoequipos']))
		{

			$model->attributes=$_POST['Prestamoequipos'];
			$model->observaciones=strtoupper ($model->observaciones);
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$this->render('update',array(
			'model'=>$model,
		));
	}    
	//--------->  //---------->

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
	 * Listar todos los modelos.
	 */
	public function actionIndex($term)
	{

	 $dataProvider = new CActiveDataProvider('Clientes', array(
       'criteria' => array('order' => 'Nombre ASC',  ),
       'pagination' => array('pageSize' => 20,))
      );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
		
		
	}
	public function actionAjaxstore(){
		$AllEmployees = Prestamoequipos::model()->FindAll();
		$contador = 0;
		$link = "prestamoequipos";
		foreach ($AllEmployees as $value) {
					echo '<tr>';
			
					echo '<td>'.$value->equipo_solicitar.'</td>';
					echo '<td>'.$value->responsable.'</td>';
					echo '<td>'.$value->fecha_solicitacion.'</td>';
					echo '<td>'.$value->fecha_prestamo.'</td>';
					echo '<td>'.$value->observaciones.'</td>';
					echo '<td>'.$value->estado.'</td>';

					echo '<td>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/delete&id='.$value->id.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></button></a>';
					echo '</td>';
					echo '</tr>';
		}
		
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$allquejas=Prestamoequipos::model()->FindAll();
		
		
		$this->render('admin',array(
			'allquejas'=>$allquejas,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cliente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Prestamoequipos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='prueba-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}
	
}