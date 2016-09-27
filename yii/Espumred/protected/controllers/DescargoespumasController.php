<?php

class DescargoespumasController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','index','eliminar','listarBloques', 'cargarCantidad','registro', 'guardar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="corte"'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','eliminar','listarBloques', 'cargarCantidad','registro', 'guardar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="T8"'
			),

	array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','index','eliminar','listarBloques', 'cargarCantidad','registro', 'guardar'),
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
		$model=new Descargoespumas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

				if(isset($_POST['Descargoespumas']))
				{
					$arrEspuma = array();
					// $model->attributes=$_POST['Descargoespumas'];
					 $arrEspuma=Yii::app()->session['Descargoespumas'];
					
					for ($i=0; $i <10 ; $i++) { 

						if ($arrEspuma[$i][0]!=0) {
															
								 $id = trim($arrEspuma[$i][0], " \t.");
				   				 $Formacion=Formacion::model()->findByPk($id);
								 $model=new Descargoespumas;
							     $model->numeroLote=$Formacion["codlote"];
							     $model->cantidadConsumida=$arrEspuma[$i][1];
							     $model->consecutivo=$arrEspuma[0][2];
							     $model->idCargarespumas=$Formacion["cod"];
							     $model->altura=$Formacion["altura"];
							     $model->ancho=$Formacion["ancho"];
							     $model->largo=$Formacion["largo"];
								 $model->densidad=$Formacion["densidad"];
								 //var_dump($model->numeroLote);
								$Formacion->consumido="Si";			// echo "es menor o igual"								
								$Formacion->save();
								$model->save();
								//$this->redirect(array('site/index','id'=>$model->id));
											 //var_dump($model->id);
					}
				}
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

		if(isset($_POST['Descargoespumas']))
		{
			$model->attributes=$_POST['Descargoespumas'];
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
		$dataProvider=new CActiveDataProvider('Descargoespumas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Descargoespumas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Descargoespumas']))
			$model->attributes=$_GET['Descargoespumas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Descargoespumas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Descargoespumas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Descargoespumas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='descargoespumas-form')
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

	  /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al id del bloque  que ingreso.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarBloques($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(cod) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Formacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->cod, // label for dropdown list
                'value' => $model->cod, // value for input field
                'idCargarespumas' => $model->cod, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }

	public function actionGuardar() {
		$model=new Descargoespumas;
		 $arrEspuma = array();
		 //se hace este arreglo con los pos que se envian desde el _fom se piensa asi para poder crear los registros
		$item = array($_POST['idCargarespumas1'], $_POST['cantidadConsumida1'], $_POST['consecutivo']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas2'], $_POST['cantidadConsumida2']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas3'], $_POST['cantidadConsumida3']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas4'], $_POST['cantidadConsumida4']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas5'], $_POST['cantidadConsumida5']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas6'], $_POST['cantidadConsumida6']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas7'], $_POST['cantidadConsumida7']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas8'], $_POST['cantidadConsumida8']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas9'], $_POST['cantidadConsumida9']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas10'], $_POST['cantidadConsumida10']);
		array_push($arrEspuma,$item );
		Yii::app()->session['Descargoespumas']=$arrEspuma;

		$decision=array( );
		$decision[0]="ok";
		 for ($i=0; $i <10 ; $i++) { 
				$id = trim($arrEspuma[$i][0], " \t.");// este metodo se usa para eliminar cualquie espacio enblaco que tenga la variable
	   			$models=Formacion::model()->findByPk($id);
	   			$model=Descargoespumas::model()->findByAttributes(array('idCargarespumas'=>$id));
	   			$peso=$arrEspuma[0][1]-$model["cantidadConsumida"];
	   			if ($models["peso"]<$arrEspuma[$i][1]&&$arrEspuma[$i][1]!="0"&&$arrEspuma[$i][1]>$peso&&$peso>0) {
					$$decision[0]="pesoextra";		
					$decision[1]=$id;		
					echo CJSON::encode($decision);					
					$i=11;
				}

				if ($peso==0) {
					$decision[0]="es cero";
					$decision[1]=$id;
					echo CJSON::encode($decision);	
					$i=11;
				}
		}
	
		 if ($decision[0]=="ok") {
		  	echo CJSON::encode($decision);
		 }
       
    }



    public function actionCargarcantidad() {
		$model=new Descargoespumas;
		$arrEspuma = array();
		 //se hace este arreglo con los pos que se envian desde el _fom se piensa asi para poder crear los registros
		$item = array($_POST['idCargarespumas1'], $_POST['cantidadConsumida1'], $_POST['consecutivo']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas2'], $_POST['cantidadConsumida2']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas3'], $_POST['cantidadConsumida3']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas4'], $_POST['cantidadConsumida4']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas5'], $_POST['cantidadConsumida5']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas6'], $_POST['cantidadConsumida6']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas7'], $_POST['cantidadConsumida7']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas8'], $_POST['cantidadConsumida8']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas9'], $_POST['cantidadConsumida9']);
		array_push($arrEspuma,$item );
		$item = array($_POST['idCargarespumas10'], $_POST['cantidadConsumida10']);
		array_push($arrEspuma,$item );
		Yii::app()->session['Descargoespumas']=$arrEspuma;

		//$models=Formacion::model()->findByPk($arrEspuma[0][0]);
				
		$decision=array( );
		
		 for ($i=0; $i <10 ; $i++) { 
				$id = trim($arrEspuma[$i][0], " \t.");
	   			$models=Formacion::model()->findByPk($id);
	   		if ($arrEspuma[$i][0]!=" ") {
					array_push($decision,$models["peso"]);
			 }else{
			 	$item=0;
			 	array_push($decision,$item);
			 }
	
		}
		echo CJSON::encode($decision);
        
    }

    public function actionRegistro() {


             $arrEspuma = array();
             $idCargarespumas=$_POST["idCargarespumas"];
             $modeloDescargo=Descargoespumas::model()->findAll();
             $modeloCargoEspuma=Cargarespumas::model()->findByPk($idCargarespumas);
              $suma=0;
              $resta=0;
              $contador=3;
             
             
             for ($i=0; $i <count($modeloDescargo) ; $i++) { 
             	if ($modeloDescargo[$i]["idCargarespumas"]==$idCargarespumas) {
                   	$suma=$suma+$modeloDescargo[$i]["cantidadConsumida"];	
                   		$contador++;
             	}
              }
              $resta=$modeloCargoEspuma["cantidadKilo"];
              $resta=$resta-$suma;
              array_push($arrEspuma,$modeloCargoEspuma,$resta,$contador);

              for ($i=0; $i <count($modeloDescargo) ; $i++) { 
             	if ($modeloDescargo[$i]["idCargarespumas"]==$idCargarespumas) {
                    array_push($arrEspuma,$modeloDescargo[$i]);
                   		
             	}
              }

              echo CJSON::encode($arrEspuma);
           
           

        }
}
