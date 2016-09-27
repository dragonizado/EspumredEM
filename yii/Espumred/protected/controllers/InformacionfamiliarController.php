<?php

class InformacionfamiliarController extends Controller
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
				'actions'=>array('create','createNuevo','update','updateTodo', 'view', 'admin','eliminar','action','agregarFamiliar','verFamiliar','actualizar','regresar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','createNuevo','update','updateTodo', 'view', 'admin','eliminar','action','agregarFamiliar','verFamiliar','actualizar','regresar'),
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
		
		$model=new Informacionfamiliar;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionfamiliar']))
		{

			$model->attributes=$_POST['Informacionfamiliar'];


			// $arrFamiliar = Yii::app()->session['Familiar'];
			// for ($i=0; $i <count($arrFamiliar) ; $i++) { 
			//  $model=new Informacionfamiliar;	
			//  $model->ccEmpleado=$arrFamiliar[$i][0];
			//  $model->nombreFamiliar=$arrFamiliar[$i][1];
			//  $model->parantesco=$arrFamiliar[$i][2];
			//  $model->fechaDeNacimiento=$arrFamiliar[$i][3];
			//  $model->edad=$arrFamiliar[$i][4];
			//  $model->escolaridad=$arrFamiliar[$i][5];
			//  $model->ocupacion=$arrFamiliar[$i][6];
			//  $model->viveConEmpleado=$arrFamiliar[$i][7];
			//  $model->dependeDelEmpleado=$arrFamiliar[$i][8];
			//  $model->save();
			// }
			// Yii::app()->session['Familiar']="";
			$arrFamiliar = array();
		    $arrFamiliar = Yii::app()->session['Familiar'];
		            
		        
			if (empty($arrFamiliar)) {
					$arrFamiliar = array();
					$ccEmpleado= $model->ccEmpleado;
                    $nombreFamiliar="No Aplica";
                    $parantesco="No Aplica";
                    $fechaDeNacimiento="No Aplica";
                    $edad="No Aplica";
                    $escolaridad="No Aplica";
                    $ocupacion="No Aplica";
                    $viveConEmpleado="No Aplica";
                    $dependeDelEmpleado="No Aplica";
                    $item = array($ccEmpleado,$nombreFamiliar,$parantesco,$fechaDeNacimiento,$edad,
                    $escolaridad,$ocupacion,$viveConEmpleado,$dependeDelEmpleado);
                    array_push($arrFamiliar, $item);
				    Yii::app()->session['Familiar']=$arrFamiliar;
				    var_dump($arrFamiliar);
			}
			$this->redirect(array('informacionacademica/create','id'=>$model->id));
		}


		$this->render('create',array(
			'model'=>$model,
		));
	}


	//funcion para crear un nuevo efamiliar desde el update
	public function actionCreateNuevo()
	{
		$model=new Informacionfamiliar;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		

		if(isset($_POST['Informacionfamiliar'])){
	
				$model->attributes=$_POST['Informacionfamiliar'];
			if($model->save())
				$this->redirect(array('Informacionfamiliar/createNuevo'));
		}

		$this->render('createNuevo',array(
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

		if(isset($_POST['Informacionfamiliar']))
		{
			$model->attributes=$_POST['Informacionfamiliar'];
			if($model->save())
				$this->redirect(array('Informacionfamiliar/admin'));
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

		if(isset($_POST['Informacionfamiliar']))
		{
			
			$model->attributes=$_POST['Informacionfamiliar'];
			
			if($model->save())
			$this->redirect(array('informacionacademica/updateTodo'));
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
		$dataProvider=new CActiveDataProvider('Informacionfamiliar');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Informacionfamiliar('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Informacionfamiliar']))
			$model->attributes=$_GET['Informacionfamiliar'];

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
		$model=Informacionfamiliar::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='informacionfamiliar-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}/* *En este metodo se ejecuta la funcion agregar familiar se inicia una variable de sesion
y dependiendo que familiar  se van guardando en un array*/
	 public function actionAgregarFamiliar() {
        $arrFamiliar = array();
        $contador=0;
        if (isset(Yii::app()->session['Familiar'])) {
            $arrFamiliar = Yii::app()->session['Familiar'];
            
        }
     
                    $ccEmpleado= $_POST["ccEmpleado"];
                    $nombreFamiliar=strtoupper ($_POST["nombreFamiliar"]);
                    $parantesco=$_POST["parantesco"];
                    $fechaDeNacimiento=$_POST["fechaDeNacimiento"];
                    $edad=$_POST["edad"];
                    $escolaridad=$_POST["escolaridad"];
                    $ocupacion=strtoupper ($_POST["ocupacion"]);
                    $viveConEmpleado=$_POST["viveConEmpleado"];
                    $dependeDelEmpleado=$_POST["dependeDelEmpleado"];
                    $item = array($ccEmpleado,$nombreFamiliar,$parantesco,$fechaDeNacimiento,$edad,
                    $escolaridad,$ocupacion,$viveConEmpleado,$dependeDelEmpleado);
                    array_push($arrFamiliar, $item);
                   
                  
  		
          Yii::app()->session['Familiar'] = $arrFamiliar;

        }

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
            $nombreFamiliar=$_POST["idEliminar"];
        	for ($i=0; $i <count($arrFamiliar) ; $i++) { 
        		echo $nombreFamiliar;
        		if ($arrFamiliar[$i][1]==$nombreFamiliar) {

        			unset($arrFamiliar[$i]);//elimina el valor de la posicion enocntrada 
        			$arrFamiliar = array_values($arrFamiliar);//ordena el vector 	
        		}
        		
        	}   

        Yii::app()->session['Familiar'] = $arrFamiliar;
      
        

        }

        /*metodo para regresar ala anterio pagina
*/
	 public function actionRegresar() {
	 		$model= new Informacionfamiliar;
	 		// $Registro =Yii::app()->session['Registro'];
    //   		$contador=count($Registro);
    //   		$Registro[$contador-1]="";
    //   		Yii::app()->session['Registro'] = $Registro;
    //         $arrFamiliar = Yii::app()->session['Familiar'];
         	$this->redirect(array('informacionpersonal/create','id'=>$model->id));

        }



		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


}
