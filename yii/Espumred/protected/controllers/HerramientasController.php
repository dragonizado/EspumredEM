<?php

class HerramientasController extends Controller
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
				'actions'=>array('create','update', 'view', 'update', 'admin','index','mostrarHerramientas',
					'mostrarInforme','guardarId','eliminar','mostrarError'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="mantenimiento"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','index','mostrarHerramientas',
					'mostrarInforme','guardarId','eliminar','mostrarError'),
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
		$model=new Herramientas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Herramientas']))
		{
			$model->attributes=$_POST['Herramientas'];
			if($model->save())
				$this->redirect(array('create','id'=>$model->id));
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

		if(isset($_POST['Herramientas']))
		{
			$model->attributes=$_POST['Herramientas'];
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
		$dataProvider=new CActiveDataProvider('Herramientas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Herramientas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Herramientas']))
			$model->attributes=$_GET['Herramientas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Herramientas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Herramientas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Herramientas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='herramientas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	 /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarHerramientas()
    {
        $model=new Herramientas;
        $this->render('mostrarHerramientas',array(
            'model'=>$model,
        ));
    }
    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
    //      public function actionMostrarInforme()
    // {
    //     $model=new Herramientas;
    //     $this->render('mostrarInforme',array(
    //         'model'=>$model,
    //     ));
    // }

         //funcion para redirigir hacia la plantilla detallada de herramientas
      public function actionMostrarInforme(){
        $model=new Herramientas;
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


    
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	  /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Herramientas;
        
         $this->render('error',array(
            'model'=>$model,
        ));
    }
}
