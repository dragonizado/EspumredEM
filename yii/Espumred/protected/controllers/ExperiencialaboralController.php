<?php

class ExperiencialaboralController extends Controller
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
				'actions'=>array('create','update','admin','delete','view','agregarexperiencia','verExperiencia','actualizar','crear'),
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
		$model=new Experiencialaboral;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Experiencialaboral']))
		{
			$model->attributes=$_POST['Experiencialaboral'];
			$arrExperiencia = array();
		    $arrExperiencia = Yii::app()->session['Experiencia'];
		            
			// if($model->save())
			if (empty($arrExperiencia)) {
					$arrExperiencia = array();
					$ccEmpleado= $Registro[0]['cc'];
                    $empresa="No Aplica";
                    $cargo="No Aplica";
                    $funciones="No Aplica";
                    $fecha_inicio="No Aplica";
                    $fecha_retiro="No Aplica";
                    $item = array($ccEmpleado,$empresa,$cargo,$funciones,$fecha_inicio,
                    $fecha_retiro);
                    
                    array_push($arrExperiencia, $item);
				    Yii::app()->session['Experiencia']=$arrExperiencia;
				    var_dump($arrExperiencia);
			}
				$this->redirect(array('contrato/create','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}




public function actionCrear()
	{
		$model=new Experiencialaboral;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Experiencialaboral']))
		{
			$model->attributes=$_POST['Experiencialaboral'];
			
		            
			if($model->save()) {
			$modelEmpleado=Informacionempleado::model()->findByPk($model->cedula);
			$modelEmpleado->experiencialaboral=$model->id;
			$modelEmpleado->save();
				    $this->redirect(array('crear'));
			}
				
		}

		$this->render('crear',array(
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

		if(isset($_POST['Experiencialaboral']))
		{
			$model->attributes=$_POST['Experiencialaboral'];
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
		$dataProvider=new CActiveDataProvider('Experiencialaboral');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Experiencialaboral('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Experiencialaboral']))
			$model->attributes=$_GET['Experiencialaboral'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Experiencialaboral the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Experiencialaboral::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Experiencialaboral $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='experiencialaboral-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	/* *En este metodo se ejecuta la funcion agregar experiencia se inicia una variable de sesion
y dependiendo que familiar  se van guardando en un array*/
	 public function actionAgregarExperiencia() {
	 	$Registro=Yii::app()->session['Registro'];
        $arrExperiencia = array();

           if (isset(Yii::app()->session['Experiencia'])) {
            $arrExperiencia = Yii::app()->session['Experiencia'];
            
        }
           
                    $ccEmpleado= $Registro[0]['cc'];
                    $empresa=strtoupper ($_POST["empresa"]);
                    $cargo=strtoupper($_POST["cargo"]);
                    $funciones=$_POST["funciones"];
                    $fecha_inicio=$_POST["fecha_inicio"];
                    $fecha_retiro=$_POST["fecha_retiro"];
                    $item = array($ccEmpleado,$empresa,$cargo,$funciones,$fecha_inicio,
                    $fecha_retiro);
                    array_push($arrExperiencia, $item);
                   
                  
  		
          Yii::app()->session['Experiencia'] = $arrExperiencia;

        }

        /* *En este metodo para mostrar lel contenido de la variable de sesion */
        public function actionVerExperiencia(){ 
             if (isset(Yii::app()->session['Experiencia'])) {

           echo json_encode(Yii::app()->session['Experiencia']);
       	 } 
			
   		 }

   		  	/*metodo para actualizar la cantidad de articulos que estan en sesion ya que en el fomulario se puede borrar 
  cualquier tipo de articulo
*/
	 public function actionActualizar() {

            $arrExperiencia = Yii::app()->session['Experiencia'];
            $registroExperiencia=$_POST["idEliminar"];
        	for ($i=0; $i <count($arrExperiencia) ; $i++) { 
        		echo $registroExperiencia;
        		if ($arrExperiencia[$i][1]==$registroExperiencia) {
        			unset($arrExperiencia[$i]);//elimina el valor de la posicion enocntrada 
        			$arrExperiencia = array_values($arrExperiencia);//ordena el vector 	
        			$i=count($arrExperiencia);
        		}
        		
        	}   

        Yii::app()->session['Experiencia'] = $arrExperiencia;
      
        

        }

        /*metodo para regresar ala anterio pagina
*/
	 

}
