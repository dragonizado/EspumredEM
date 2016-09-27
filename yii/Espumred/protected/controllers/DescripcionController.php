<?php

class DescripcionController extends Controller
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
				'actions'=>array('create','createNuevo','update','updateTodo', 'view', 'admin','eliminar','AgregarFamiliar','VerFamiliar','action','actualizar','regresar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createNuevo','update','updateTodo', 'view', 'admin','eliminar','AgregarFamiliar','VerFamiliar','action','actualizar','regresar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Comercio"'
			),

            array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createNuevo','update','updateTodo', 'view', 'admin','eliminar','AgregarFamiliar','VerFamiliar','action','actualizar','regresar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Asesor"'

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

	public function actionAction()
	{
		echo "string";
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	 public function actionCreate()
	{

     	$model=new Descripcion;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Descripcion']))
		{

			$model->attributes=$_POST['Descripcion'];


		    $arrFamiliar = array();
		    $arrFamiliar = Yii::app()->session['Familiar'];
		            
		        
				    if (empty($arrFamiliar)) {
                         $arrFamiliar = array();

                         $codigo= $model->codigo;
                                             
                    $item = array($codigo);
                    array_push($arrFamiliar, $item);
                        Yii::app()->session['Familiar']=$arrFamiliar;
                        var_dump($arrFamiliar);

                    array_push($arrFamiliar, $item);
				    Yii::app()->session['Familiar']=$arrFamiliar;
				    var_dump($arrFamiliar);
			}
			$this->redirect(array('condicion/create','id'=>$model->id));
		}



		$this->render('create',array(
			'model'=>$model,
		));
	}


	//funcion para crear una nueva descripcion desde el update
	public function actionCreateNuevo()
	{
		$model=new Descripcion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		

		if(isset($_POST['Descripcion'])){
	
				$model->attributes=$_POST['Descripcion'];
			if($model->save())
				$this->redirect(array('Descripcion/createNuevo'));
		}

		$this->render('createNuevo',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated----------->
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Descripcion']))
		{
			$model->attributes=$_POST['Descripcion'];
			if($model->save())
				$this->redirect(array('Descripcion/admin'));
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

		if(isset($_POST['Descripcion']))
		{
			
			$model->attributes=$_POST['Descripcion'];
			
			if($model->save())
			$this->redirect(array('observaciones/updateTodo'));  //buscar posicion para actualizar todo //updatetodo
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
		$dataProvider=new CActiveDataProvider('Descripcion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Descripcion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Descripcion']))
			$model->attributes=$_GET['Descripcion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionfamiliar the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Descripcion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionfamiliar $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='descripcion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		
	}/* *En este metodo se ejecuta la funcion agregar familiar se inicia una variable de sesion
    y dependiendo que familiar  se van guardando en un array*/

/* *En este metodo para mostrar lel contenido de la variable de sesion */
        public function actionVerFamiliar(){ 
             if (isset(Yii::app()->session['Familiar'])) {

           echo json_encode(Yii::app()->session['Familiar']);
       	 } 
			
   		 }

   	/*metodo para actualizar la cantidad de articulos que estan en sesion ya que en el fomulario se puede borrar 
  cualquier tipo de articulo
*/
	 public function actionActualizar() {

             $arrFamiliar = Yii::app()->session['Familiar'];
             $referencia=$_POST["idEliminar"];
        	 for ($i=0; $i <count($arrFamiliar) ; $i++) { 
        	 echo $referencia;       //--------------------->hay que definirlo
        		if ($arrFamiliar[$i][1]==$referencia) {   //--------------------------->hay que definirlo

        			unset($arrFamiliar[$i]);//elimina el valor de la posicion encontrada 
        			$arrFamiliar = array_values($arrFamiliar);//ordena el vector 	
        		}
        		
        	}   

        Yii::app()->session['Familiar'] = $arrFamiliar;
      
        
        }

        /*metodo para regresar ala anterior pagina
*/
	 public function actionRegresar() {
	 		$model= new Descripcion;
	 		// $Registro =Yii::app()->session['Registro'];
    //   		$contador=count($Registro);
    //   		$Registro[$contador-1]="";
    //   		Yii::app()->session['Registro'] = $Registro;
    //         $arrFamiliar = Yii::app()->session['Familiar'];
         	$this->redirect(array('condicionescomerciales/create','id'=>$model->id));

        }



		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}



}
