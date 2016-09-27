<?php

class ProductocostosController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','mostrarInforme','cargar','mostrarDetalle',
					'guardarTipo','generarExcelColchones','mostrarPlantilla','Actualizar','cargarProductos','actualizarProductos'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="costo"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','mostrarInforme','cargar','mostrarDetalle',
					'guardarTipo','generarExcelColchones','mostrarPlantilla','Actualizar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="costoMayorista"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','mostrarInforme','cargar','mostrarDetalle',
					'guardarTipo','generarExcelColchones','mostrarPlantilla','Actualizar','cargarProductos','actualizarProductos'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="costoExterno"'
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
		$model=new Productocostos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Productocostos']))
		{
			$model->attributes=$_POST['Productocostos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cod));
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

		if(isset($_POST['Productocostos']))
		{
			$model->attributes=$_POST['Productocostos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cod));
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
		$dataProvider=new CActiveDataProvider('Productocostos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Productocostos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Productocostos']))
			$model->attributes=$_GET['Productocostos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Productocostos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Productocostos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Productocostos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='productocostos-form')
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

	 /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarInforme()
    {
        $model=new Productocostos;
        
         $this->render('_viewInforme',array(
            'model'=>$model,
        ));
    }

      public function actionCargar() {


           // Yii::app()->session['Cliente'] ="";
            $arrCliente = array();
            $tipo=$_POST["tipo"];
             $modeloRegistro=Productocostos::model()->findAll();
            

                       for ($i=0; $i <count($modeloRegistro); $i++) { 

                       if ($modeloRegistro[$i]['tipo']==$tipo) {
                        	  array_push($arrCliente,$modeloRegistro[$i] );
                        }

                     }

             echo CJSON::encode($arrCliente);
           

        }

           //funcion para redirigir hacia la plantilla detallada del mecanico
      public function actionMostrarDetalle(){
        $model=new Productocostos;
      
        $arrDatos = array();
        $tipo=Yii::app()->session['tipo'];
        $modeloRegistro=Productocostos::model()->findAll();

        for ($i=0; $i <count($modeloRegistro); $i++) { 

               if ($modeloRegistro[$i]['tipo']==$tipo) {
              	  array_push($arrDatos,$modeloRegistro[$i] );
              	 
              }

         }
       


    
        Yii::app()->session['DatosProductos']=$arrDatos; 

        # mPDF
         $mPDF1 = Yii::app()->ePdf->mpdf();
         $mPDF1->WriteHTML($this->render('mostrarDetalle',array(
            'model'=>$model,
        ),true));
        # Outputs ready PDF
         $mPDF1->Output();
        var_dump($arrNombres);
        
    }


      //funcion para guardar la id en secion 
      public function actionGuardarTipo(){
      	Yii::app()->session['tipo']="";
      	Yii::app()->session['busquedad']="";
        $tipo= $_POST["tipo"];     
 		if (Yii::app()->user->rol=="costo") {
 		 Yii::app()->session['tipo']=$_POST["tipo"];
       	 Yii::app()->session['busquedad']=$_POST["busquedad"];
 		} 
 		if (Yii::app()->user->rol=="costoMayorista") {
 		 Yii::app()->session['tipo']=$_POST["tipo"];
       	 Yii::app()->session['busquedad']="Mayorista";
 		} 
 		if (Yii::app()->user->rol=="costoExterno") {
 		 Yii::app()->session['tipo']=$_POST["tipo"];
       	 Yii::app()->session['busquedad']="costoExterno";
 		} 
    
        
       
        
    }

    //funcion para redirigir hacia la plantilla de hoja de vida
      public function actionMostrarPlantilla(){

     	$tipo=Yii::app()->session['tipo'];
		$model=Productocostos::model()->findAll();
         # mPDF
	     $mPDF1 = Yii::app()->ePdf->mpdf('utf-8','B3','','',5,5,35,4,9,9,'L');
         //$mPDF1 = Yii::app()->ePdf->mpdf();
        $mPDF1->WriteHTML($this->render('mostrarPlantilla',array(
            'model'=>$model,
        ),true));
        # Outputs ready PDF
         $mPDF1->Output();
 
    }


    //funcion para redirigir hacia la plantilla de hoja de vida
      public function actionActualizar(){

     	 $model=new Productocostos;
        
         $this->render('_viewActualizar',array(
            'model'=>$model,
        ));
 
    }
    //funcion para generar ecxel de informacion productos
    public function actionGenerarExcelColchones()
	{
		$tipo=Yii::app()->session['tipo'];
		$model=Productocostos::model()->findAll();

		if ($tipo=="COLCHONES") {
			Yii::app()->request->sendFile("Colchones.xls",
			$this->renderPartial('excelColchones',array('model'=>$model,),true)
			);
		}

		if ($tipo=="COLCHONETA") {
			Yii::app()->request->sendFile("Colchoneta.xls",
			$this->renderPartial('excelColchonetas',array('model'=>$model,),true)
			);
		}
		
			if ($tipo=="BASE CAMA") {
			Yii::app()->request->sendFile("Basecamas.xls",
			$this->renderPartial('excelBaseCama',array('model'=>$model,),true)
			);
		}


		if ($tipo=="ALMOHADAS Y PROTECTOR") {
			Yii::app()->request->sendFile("Almuadas_Y_Protectores.xls",
			$this->renderPartial('excelAlmuadasProtectores',array('model'=>$model,),true)
			);
		}


			if ($tipo=="COMBO") {
			Yii::app()->request->sendFile("Combo.xls",
			$this->renderPartial('excelCombo',array('model'=>$model,),true)
			);
		}


		if ($tipo=="MUEBLES") {
			Yii::app()->request->sendFile("Muebles.xls",
			$this->renderPartial('excelMuebles',array('model'=>$model,),true,true)
			);
		}
		
	
	}

  //funcion para generar ecxel de informacion productos
    public function actionCargarProductos()
	{
		
		$codigo =$_POST["codigo"];
		$model=Productocostos::model()->findByPk($codigo);
		echo CJSON::encode($model);
		
	
	}
	//funcion para actualizar campos

	   public function actionActualizarProductos(){
		
		$codigo =$_POST["codigo"];
		$model=$this->loadModel($codigo);
		// $model=Productocostos::model()->findByPk($codigo);
		 $model->precioMayoristas=$_POST["precioMayoristas"];
		 $model->precioCorreria=$_POST["precioCorreria"];
		 $model->save();
			
	
	}







}
