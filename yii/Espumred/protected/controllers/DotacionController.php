<?php

class DotacionController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','eliminar','cargar','listarCamisa','listarCalzado','ListarPantalon',
					'ListarDelantal','ListarOverol','ListarBotas','ListarTenis','ListarOtrasDotaciones','generarExcel','cargarActualizar','generarExcelEmpleado','updateTodo'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="talentohumano"'
			),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','update', 'view', 'admin','eliminar','cargar','listarCamisa','listarCalzado','ListarPantalon',
                    'ListarDelantal','ListarOverol','ListarBotas','ListarTenis','ListarOtrasDotaciones','generarExcel','cargarActualizar','generarExcelEmpleado','updateTodo'),
                'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
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
		$model=new Dotacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Dotacion']))
		{
			$model->attributes=$_POST['Dotacion'];
			$Registro =Yii::app()->session['Registro'];
      		$Registro[7]= $model;
      		Yii::app()->session['Registro'] = $Registro;
			//if($model->save())
				$this->redirect(array('informacionempleado/create','id'=>$model->id));
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

		if(isset($_POST['Dotacion']))
		{
			$model->attributes=$_POST['Dotacion'];
			if($model->save())
				$this->redirect(array('informacionempleado/actualizar'));
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
		$dataProvider=new CActiveDataProvider('Dotacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Dotacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Dotacion']))
			$model->attributes=$_GET['Dotacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Dotacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Dotacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Dotacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='dotacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	 /*metodo para retornar lo guardado antes de regresar
*/

	 public function actionCargar() {
	 		$Registro=Yii::app()->session['Registro'];
	 		//var_dump($Registro);
	 		 echo CJSON::encode($Registro);
          
            
         }

         	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCamisa($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="CAMISA") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCalzado($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="CALZADO") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarPantalon($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="PANTALON") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarDelantal($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="DELANTAL") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarOverol($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="OVEROL") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }


            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de dotaciones que ingreso referente al tipo seleccionado.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarOtrasDotaciones($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulosdedotacion::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        	if ($model->tipoDotacion=="OTROS") {
        	
            $arr[] = array(
                'label' => $model->nombre, // label for dropdown list
                'value' => $model->nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
            }
        }
        echo CJSON::encode($arr);
    }


//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcel()
    {
        
        $model=Informacionempleado::model()->findAll();
        Yii::app()->request->sendFile("Dotacion.xls",
            $this->renderPartial('excel',array('model'=>$model,),true)
            );
    
    }

//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcelEmpleado()
    {
        
        $model=Informacionempleado::model()->findAll();
        Yii::app()->request->sendFile("DotacionEmpleado.xls",
            $this->renderPartial('excelEmpleado',array('model'=>$model,),true)
            );
    
    }

    //funcion para generar ecxel de informacion empleado
    public function actionCargarActualizar()
    {
      $Registro = array();
         $camisa=$_POST['camisa'];
         $calsado=$_POST['calsado'];
         $pantalon=$_POST['pantalon'];
         $delantal=$_POST['delantal'];
         $overol=$_POST['overol'];
         $otrasDotaciones=$_POST['otrasDotaciones'];

        $modeloDotacion=Articulosdedotacion::model()->findAll();
    

        for ($i=0; $i <count($modeloDotacion) ; $i++) { 
              
                if ($modeloDotacion[$i]["id"]=== $camisa){
                     $Registro[0]= $modeloDotacion[$i]["nombre"];
                }

                 
                   if($modeloDotacion[$i]["id"]===$calsado){
                    $Registro[1]=$modeloDotacion[$i]["nombre"];

                   }
                    
                    if($modeloDotacion[$i]["id"]===$pantalon){
                        $Registro[2]=$modeloDotacion[$i]["nombre"];

                    }
                    if($modeloDotacion[$i]["id"]===$delantal){
                        $Registro[3]=$modeloDotacion[$i]["nombre"];

                    }
                    if($modeloDotacion[$i]["id"]===$overol){
                        $Registro[4]=$modeloDotacion[$i]["nombre"];

                    }
                    if($modeloDotacion[$i]["id"]===$otrasDotaciones){
                        $Registro[5]=$modeloDotacion[$i]["nombre"];

                    }

                }
            
        echo CJSON::encode($Registro);
    
    }


      public function actionUpdateTodo($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Dotacion']))
        {
            
            $model->attributes=$_POST['Dotacion'];
            
            if($model->save()){
                $arrBusquedad = array();
                $arrBusquedad=Yii::app()->session['todo'];
                $modeloEmpleado=Informacionempleado::model()->findByPk($arrBusquedad[5]["cc"]);
                $this->redirect(array('Informacionempleado/updateTodo','id'=>$modeloEmpleado->id));
            }
        }

        $this->render('updateTodo',array(
            'model'=>$model,
        ));
    }

        public function actionEliminar($id)
    {
        $this->loadModel($id)->delete();
        $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

}
