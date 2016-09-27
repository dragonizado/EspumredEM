<?php


class CondicionescomercialesController extends Controller
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
				'actions'=>array('create','update', 'view', 'update','updateTodo', 'admin','listarClientes','cargar','eliminar'),
				'users'=>array('*'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','updateTodo','delete','listarClientes','cargar','eliminar'),
				'users'=>array('*'),
                'expression'=>'Yii::app()->user->rol==="Comercio"'

			),
			 array('allow',
			 'actions'=>array('create','update', 'view', 'update','updateTodo', 'admin','listarClientes','cargar'),
			 'users'=>array('*'),
			 'expression'=>'Yii::app()->user->rol=="Asesor"'

            ),


            array('allow',
			 'actions'=>array('admin'),
			 'users'=>array('*'),
			 'expression'=>'Yii::app()->user->rol=="Revisoria"'
			),

            //),
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


		$model=new Condicionescomerciales;


		if(isset($_POST['Condicionescomerciales']))

		{

			$Registro = array();
			Yii::app()->session['Registro']=$Registro;
			$model->attributes=$_POST['Condicionescomerciales'];

			//se utiliza strtoupper para que guarde el campo en mayuscula

			$model->nombreAsesor=strtoupper ($model->nombreAsesor);
			//$model->TipologiaCliente=strtoupper ($model->TipologiaCliente);

      		$Registro[0]= $model;
      		Yii::app()->session['Registro'] = $Registro;//se crea un array en sesion para conservar los datos hasta el final donde se guardaran

			// if($model->save())
			                            //nombreAsesor
			if ($model->cod==""||$model->nombreCliente=="") {

			 	//echo "hay un campo requerido en blanco porfavor verificar";
			 	Yii::app()->clientScript->registerScript(1, 'alert("hay un campo requerido en blanco por favor verificar")');


			}else {
				$cont=0;
				$modelof=Condicionescomerciales::model()->findAll();
				for ($i=0; $i <count($modelof) ; $i++) {
					if ($modelof[$i]["id"]==$model->id) {
						$cont=1;     //id          //id
					}
				}

				if ($cont=="0") {                                          //cod
					$this->redirect(array('descripcion/create','id'=>$model->cod));
									echo"no envio condiciones comerciales";
				}else{

					Yii::app()->clientScript->registerScript(1, 'alert("Por Favor, Asignar Una Tipologia de Cliente Distinta")');

				}

			}

		}

		$this->render('admin',array(
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

		if(isset($_POST['Condicionescomerciales']))
		{
			$model->attributes=$_POST['Condicionescomerciales'];
			if($model->save())
				$this->redirect(array('condicionescomerciales/admin'));//---redireccion---------//(observaciones/actualizar));
		}

		$this->render('updateTodo',array(
			'model'=>$model,
		));
	}

	public function actionUpdateTodo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Condicionescomerciales']))
		{

			$model->attributes=$_POST['Condicionescomerciales'];

			if($model->save())
				$arrBusquedad = array();
				$arrBusquedad=Yii::app()->session['todo'];
				$modeloDescripcion=Descripcion::model()->findByPk($arrBusquedad[0]["id"]);

				$this->redirect(array('Descripcion/updateTodo','id'=>$modeloDescripcion->id));

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
		$dataProvider=new CActiveDataProvider('Condicionescomerciales');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$var_allconditions = Condicionescomerciales::model()->findAll();
		// $allconditions = "";
		// foreach ($allconditions as $value) {
		// 	$allconditions .=
		// }
		// $model=new Condicionescomerciales('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['Condicionescomerciales']))
		// 	$model->attributes=$_GET['Condicionescomerciales'];

		// $this->render('admin',array('model'=>$model, ));
		// $this->render('admin',array('model'=>$model,'allconditions' => $var_allconditions, ));
		$this->render('admin',array('allconditions' => $var_allconditions, ));
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
		$model=Condicionescomerciales::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='condicionescomerciales-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarClientes($term) {

        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreCliente) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Clientes::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->nombreCliente, // label for dropdown list
                'value' => $model->nombreCliente, // value for input field
                'id' => $model->cod, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);

    }


     /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCodigo($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(cod) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Clientes::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->cod, // label for dropdown list
                'value' => $model->cod, // value for input field
                'id' => $model->cod, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }



 /*metodo para retornar lo guardado antes de regresar
*/

	 public function actionCargar() {

	 		echo "estoy en el metodo de cargar";
	 		$cod = $_POST['nombreCliente'];
	 		echo $cod;
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
