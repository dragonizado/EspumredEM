<?php

class CondicionController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','eliminar','cargar','updateTodo'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','cargar','updateTodo'),
				'users'=>array('*'),
                'expression'=>'Yii::app()->user->rol==="Comercio"'
			),
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                    'actions'=>array('create','update', 'view', 'admin','eliminar','cargar','updateTodo'),
                    'users'=>array('*'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Condicion;

		
		if(isset($_POST['Condicion']))
		{
			$model->attributes=$_POST['Condicion'];
               $Registro=Yii::app()->session['Registro'];		

			     $referencia=$model->referencia;
                    $referencia1=$model->referencia1;
                    $referencia2=$model->referencia2;
                    $referencia3=$model->referencia3;
                    $referencia3=$model->referencia3;
                    $referencia4=$model->referencia4;
                    $referencia5=$model->referencia5;
                    $referencia6=$model->referencia6;
                    $referencia7=$model->referencia7;
                    $referencia8=$model->referencia8;
                    $referencia9=$model->referencia9;
                    $referencia10=$model->referencia10;
                    $referencia11=$model->referencia11;
                    $referencia12=$model->referencia12;
                    $referencia13=$model->referencia13;
                    $referencia14=$model->referencia14;
                    $referencia15=$model->referencia15;
                    $referencia16=$model->referencia16;
                    $referencia17=$model->referencia17;
                    $referencia18=$model->referencia18;
                    $referencia19=$model->referencia19;
                    $referencia20=$model->referencia20;
                    $referencia21=$model->referencia21;
                    $referencia22=$model->referencia22;
                    $referencia23=$model->referencia23;
                    $referencia24=$model->referencia24;
                    $referencia25=$model->referencia25;
                    $referencia26=$model->referencia26;
                    $referencia27=$model->referencia27;
                    $referencia28=$model->referencia28;
                    $referencia29=$model->referencia29;
                    $referencia30=$model->referencia30;
                    $referencia31=$model->referencia31;
                    $referencia32=$model->referencia32;
                    $referencia33=$model->referencia33;
                    
                    $precioanterior = $model->precioanterior;
                    $precioanterior1 = $model->precioanterior1;
                    $precioanterior2 = $model->precioanterior2;
                    $precioanterior3 = $model->precioanterior3;
                    $precioanterior4 = $model->precioanterior4;
                    $precioanterior5 = $model->precioanterior5;
                    $precioanterior6 = $model->precioanterior6;
                    $precioanterior7 = $model->precioanterior7;
                    $precioanterior8 = $model->precioanterior8;
                    $precioanterior9 = $model->precioanterior9;
                    $precioanterior10 = $model->precioanterior10;
                    $precioanterior11 = $model->precioanterior11;
                    $precioanterior12 = $model->precioanterior12;
                    $precioanterior13 = $model->precioanterior13;
                    $precioanterior14 = $model->precioanterior14;
                    $precioanterior15 = $model->precioanterior15;
                    $precioanterior16 = $model->precioanterior16;
                    $precioanterior17 = $model->precioanterior17;
                    $precioanterior18 = $model->precioanterior18;
                    $precioanterior19 = $model->precioanterior19;
                    $precioanterior20 = $model->precioanterior20;
                    $precioanterior21 = $model->precioanterior21;
                    $precioanterior22 = $model->precioanterior22;
                    $precioanterior23 = $model->precioanterior23;
                    $precioanterior24 = $model->precioanterior24;
                    $precioanterior25 = $model->precioanterior25;
                    $precioanterior26 = $model->precioanterior26;
                    $precioanterior27 = $model->precioanterior27;
                    $precioanterior28 = $model->precioanterior28;
                    $precioanterior29 = $model->precioanterior29;
                    $precioanterior30 = $model->precioanterior30;
                    $precioanterior31 = $model->precioanterior31;
                    $precioanterior32 = $model->precioanterior32;
                    $precioanterior33 = $model->precioanterior33;
                    
                    $nuevoprecio =$model->nuevoprecio;
                    $nuevoprecio1 =$model->nuevoprecio1;
                    $nuevoprecio2 =$model->nuevoprecio2;
                    $nuevoprecio3 =$model->nuevoprecio3;
                    $nuevoprecio4 =$model->nuevoprecio4;
                    $nuevoprecio5 =$model->nuevoprecio5;
                    $nuevoprecio6 =$model->nuevoprecio6;
                    $nuevoprecio7 =$model->nuevoprecio7;
                    $nuevoprecio8 =$model->nuevoprecio8;
                    $nuevoprecio9 =$model->nuevoprecio9;
                    $nuevoprecio10 =$model->nuevoprecio10;
                    $nuevoprecio11 =$model->nuevoprecio11;
                    $nuevoprecio12 =$model->nuevoprecio12;
                    $nuevoprecio13 =$model->nuevoprecio13;
                    $nuevoprecio14 =$model->nuevoprecio14;
                    $nuevoprecio15 =$model->nuevoprecio15;
                    $nuevoprecio16 =$model->nuevoprecio16;
                    $nuevoprecio17 =$model->nuevoprecio17;
                    $nuevoprecio18 =$model->nuevoprecio18;
                    $nuevoprecio19 =$model->nuevoprecio19;
                    $nuevoprecio20 =$model->nuevoprecio20;
                    $nuevoprecio21 =$model->nuevoprecio21;
                    $nuevoprecio22 =$model->nuevoprecio22;
                    $nuevoprecio23 =$model->nuevoprecio23;
                    $nuevoprecio24 =$model->nuevoprecio24;
                    $nuevoprecio25 =$model->nuevoprecio25;
                    $nuevoprecio26 =$model->nuevoprecio26;
                    $nuevoprecio27 =$model->nuevoprecio27;
                    $nuevoprecio28 =$model->nuevoprecio28;
                    $nuevoprecio29 =$model->nuevoprecio29;
                    $nuevoprecio30 =$model->nuevoprecio30;
                    $nuevoprecio31 =$model->nuevoprecio31;
                    $nuevoprecio32 =$model->nuevoprecio32;
                    $nuevoprecio33 =$model->nuevoprecio33;
                    
                    $piefactura =$model->piefactura;
                    $piefactura1 =$model->piefactura1;
                    $piefactura2 =$model->piefactura2;
                    $piefactura3 =$model->piefactura3;
                    $piefactura4 =$model->piefactura4;
                    $piefactura5 =$model->piefactura5;
                    $piefactura6 =$model->piefactura6;
                    $piefactura7 =$model->piefactura7;
                    $piefactura8 =$model->piefactura8;
                    $piefactura9 =$model->piefactura9;
                    $piefactura10 =$model->piefactura10;
                    $piefactura11 =$model->piefactura11;
                    $piefactura12 =$model->piefactura12;
                    $piefactura13 =$model->piefactura13;
                    $piefactura14 =$model->piefactura14;
                    $piefactura15 =$model->piefactura15;
                    $piefactura16 =$model->piefactura16;
                    $piefactura17 =$model->piefactura17;
                    $piefactura18 =$model->piefactura18;
                    $piefactura19 =$model->piefactura19;
                    $piefactura20 =$model->piefactura20;
                    $piefactura21 =$model->piefactura21;
                    $piefactura22 =$model->piefactura22;
                    $piefactura23 =$model->piefactura23;
                    $piefactura24 =$model->piefactura24;
                    $piefactura25 =$model->piefactura25;
                    $piefactura26 =$model->piefactura26;
                    $piefactura27 =$model->piefactura27;
                    $piefactura28 =$model->piefactura28;
                    $piefactura29 =$model->piefactura29;
                    $piefactura30 =$model->piefactura30;
                    $piefactura31 =$model->piefactura31;
                    $piefactura32 =$model->piefactura32;
                    $piefactura33 =$model->piefactura33;
                    
                    $rebate =$model->rebate;
                    $rebate1 =$model->rebate1;
                    $rebate2 =$model->rebate2;
                    $rebate3 =$model->rebate3;
                    $rebate4 =$model->rebate4;
                    $rebate5 =$model->rebate5;
                    $rebate6 =$model->rebate6;
                    $rebate7 =$model->rebate7;
                    $rebate8 =$model->rebate8;
                    $rebate9 =$model->rebate9;
                    $rebate10 =$model->rebate10;
                    $rebate11 =$model->rebate11;
                    $rebate12 =$model->rebate12;
                    $rebate13 =$model->rebate13;
                    $rebate14 =$model->rebate14;
                    $rebate15 =$model->rebate15;
                    $rebate16 =$model->rebate16;
                    $rebate17 =$model->rebate17;
                    $rebate18 =$model->rebate18;
                    $rebate19 =$model->rebate19;
                    $rebate20 =$model->rebate20;
                    $rebate21 =$model->rebate21;
                    $rebate22 =$model->rebate22;
                    $rebate23 =$model->rebate23;
                    $rebate24 =$model->rebate24;
                    $rebate25 =$model->rebate25;
                    $rebate26 =$model->rebate26;
                    $rebate27 =$model->rebate27;
                    $rebate28 =$model->rebate28;
                    $rebate29 =$model->rebate29;
                    $rebate30 =$model->rebate30;
                    $rebate31 =$model->rebate31;
                    $rebate32 =$model->rebate32;
                    $rebate33 =$model->rebate33;

                    $Dias =$model->Dias;   
                    $Dias1 =$model->Dias1;
                    $Dias2 =$model->Dias2;
                    $Dias3 =$model->Dias3;
                    $Dias4 =$model->Dias4;
                    $Dias5 =$model->Dias5;
                    $Dias6 =$model->Dias6;
                    $Dias7 =$model->Dias7;
                    $Dias8 =$model->Dias8;
                    $Dias9 =$model->Dias9;
                    $Dias10 =$model->Dias10;
                    $Dias11 =$model->Dias11;
                    $Dias12 =$model->Dias12;
                    $Dias13 =$model->Dias13;
                    $Dias14 =$model->Dias14;
                    $Dias15 =$model->Dias15;
                    $Dias16 =$model->Dias16;
                    $Dias17 =$model->Dias17;
                    $Dias18 =$model->Dias18;
                    $Dias19 =$model->Dias19;
                    $Dias20 =$model->Dias20;
                    $Dias21 =$model->Dias21;
                    $Dias22 =$model->Dias22;
                    $Dias23 =$model->Dias23;
                    $Dias24 =$model->Dias24;
                    $Dias25 =$model->Dias25;
                    $Dias26 =$model->Dias26;
                    $Dias27 =$model->Dias27;
                    $Dias28 =$model->Dias28;
                    $Dias29 =$model->Dias29;
                    $Dias30 =$model->Dias30;
                    $Dias31 =$model->Dias31;
                    $Dias32 =$model->Dias32;
                    $Dias33 =$model->Dias33;

                    $Sesenta =$model->Sesenta;
                    $Sesenta1 =$model->Sesenta1;
                    $Sesenta2 =$model->Sesenta2;
                    $Sesenta3 =$model->Sesenta3;
                    $Sesenta4 =$model->Sesenta4;
                    $Sesenta5 =$model->Sesenta5;
                    $Sesenta6 =$model->Sesenta6;
                    $Sesenta7 =$model->Sesenta7;
                    $Sesenta8 =$model->Sesenta8;
                    $Sesenta9 =$model->Sesenta9;
                    $Sesenta10 =$model->Sesenta10;
                    $Sesenta11 =$model->Sesenta11;
                    $Sesenta12 =$model->Sesenta12;
                    $Sesenta13 =$model->Sesenta13;
                    $Sesenta14 =$model->Sesenta14;
                    $Sesenta15 =$model->Sesenta15;
                    $Sesenta16 =$model->Sesenta16;
                    $Sesenta17 =$model->Sesenta17;
                    $Sesenta18 =$model->Sesenta18;
                    $Sesenta19 =$model->Sesenta19;
                    $Sesenta20 =$model->Sesenta20;
                    $Sesenta21 =$model->Sesenta21;
                    $Sesenta22 =$model->Sesenta22;
                    $Sesenta23 =$model->Sesenta23;
                    $Sesenta24 =$model->Sesenta24;
                    $Sesenta25 =$model->Sesenta25;
                    $Sesenta26 =$model->Sesenta26;
                    $Sesenta27 =$model->Sesenta27;
                    $Sesenta28 =$model->Sesenta28;
                    $Sesenta29 =$model->Sesenta29;
                    $Sesenta30 =$model->Sesenta30;
                    $Sesenta31 =$model->Sesenta31;
                    $Sesenta32 =$model->Sesenta32;
                    $Sesenta33 =$model->Sesenta33;

			        $Treinta =$model->Treinta;
			        $Treinta1 =$model->Treinta1;
			        $Treinta2 =$model->Treinta2;
			        $Treinta3 =$model->Treinta3;
			        $Treinta4 =$model->Treinta4;
			        $Treinta5 =$model->Treinta5;
			        $Treinta6 =$model->Treinta6;
			        $Treinta7 =$model->Treinta7;
			        $Treinta8 =$model->Treinta8;
			        $Treinta9 =$model->Treinta9;
			        $Treinta10 =$model->Treinta10;
			        $Treinta11 =$model->Treinta11;
			        $Treinta12 =$model->Treinta12;
			        $Treinta13 =$model->Treinta13;
			        $Treinta14 =$model->Treinta14;
			        $Treinta15 =$model->Treinta15;
			        $Treinta16 =$model->Treinta16;
			        $Treinta17 =$model->Treinta17;
			        $Treinta18 =$model->Treinta18;
			        $Treinta19 =$model->Treinta19;
			        $Treinta20 =$model->Treinta20;
			        $Treinta21 =$model->Treinta21;
			        $Treinta22 =$model->Treinta22;
			        $Treinta23 =$model->Treinta23;
			        $Treinta24 =$model->Treinta24;
			        $Treinta25 =$model->Treinta25;
			        $Treinta26 =$model->Treinta26;
			        $Treinta27 =$model->Treinta27;
			        $Treinta28 =$model->Treinta28;
			        $Treinta29 =$model->Treinta29;
			        $Treinta30 =$model->Treinta30;
			        $Treinta31 =$model->Treinta31;
			        $Treinta32 =$model->Treinta32;
			        $Treinta33 =$model->Treinta33;
			        
			        $Ocho =$model->Ocho;
			        $Ocho1 =$model->Ocho1;
			        $Ocho2 =$model->Ocho2;
			        $Ocho3 =$model->Ocho3;
			        $Ocho4 =$model->Ocho4;
			        $Ocho5 =$model->Ocho5;
			        $Ocho6 =$model->Ocho6;
			        $Ocho7 =$model->Ocho7;
			        $Ocho8 =$model->Ocho8;
			        $Ocho9 =$model->Ocho9;
			        $Ocho10 =$model->Ocho10;
			        $Ocho11 =$model->Ocho11;
			        $Ocho12 =$model->Ocho12;
			        $Ocho13 =$model->Ocho13;
			        $Ocho14 =$model->Ocho14;
			        $Ocho15 =$model->Ocho15;
			        $Ocho16 =$model->Ocho16;
			        $Ocho17 =$model->Ocho17;
			        $Ocho18 =$model->Ocho18;
			        $Ocho19 =$model->Ocho19;
			        $Ocho20 =$model->Ocho20;
			        $Ocho21 =$model->Ocho21;
			        $Ocho22 =$model->Ocho22;
			        $Ocho23 =$model->Ocho23;
			        $Ocho24 =$model->Ocho24;
			        $Ocho25 =$model->Ocho25;
			        $Ocho26 =$model->Ocho26;
			        $Ocho27 =$model->Ocho27;
			        $Ocho28 =$model->Ocho28;
			        $Ocho29 =$model->Ocho29;
			        $Ocho30 =$model->Ocho30;
			        $Ocho31 =$model->Ocho31;
			        $Ocho32 =$model->Ocho32;
			        $Ocho33 =$model->Ocho33;

			        $Otro =$model->Otro;
			        $Otro1 =$model->Otro1;
			        $Otro2 =$model->Otro2;
			        $Otro3 =$model->Otro3;
			        $Otro4 =$model->Otro4;
			        $Otro5 =$model->Otro5;
			        $Otro6 =$model->Otro6;
			        $Otro7 =$model->Otro7;
			        $Otro8 =$model->Otro8;
			        $Otro9 =$model->Otro9;
			        $Otro10 =$model->Otro10;
			        $Otro11 =$model->Otro11;
			        $Otro12 =$model->Otro12;
			        $Otro13 =$model->Otro13;
			        $Otro14 =$model->Otro14;
			        $Otro15 =$model->Otro15;
			        $Otro16 =$model->Otro16;
			        $Otro17 =$model->Otro17;
			        $Otro18 =$model->Otro18;
			        $Otro19 =$model->Otro19;
			        $Otro20 =$model->Otro20;
			        $Otro21 =$model->Otro21;
                       $Otro22 =$model->Otro22;
			        $Otro23 =$model->Otro23;
			        $Otro24 =$model->Otro24;
			        $Otro25 =$model->Otro25;
			        $Otro26 =$model->Otro26;
			        $Otro27 =$model->Otro27;
			        $Otro28 =$model->Otro28;
			        $Otro29 =$model->Otro29;
			        $Otro30 =$model->Otro30;
			        $Otro31 =$model->Otro31;
			        $Otro32 =$model->Otro32;
			        $Otro33 =$model->Otro33;

      		$Registro[1]= $model;
      		Yii::app()->session['Registro'] = $Registro;
               
			//if($model->save())
				$this->redirect(array('observaciones/create','id'=>$model->id));
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

		if(isset($_POST['Condicion']))
		{
			$model->attributes=$_POST['Condicion'];
			if($model->save())
				$this->redirect(array('update'));
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

		if(isset($_POST['Condicion']))
		{
			
			$model->attributes=$_POST['Condicion'];
			
			if($model->save()){
				 $arrBusquedad = array();
				$arrBusquedad=Yii::app()->session['todo'];
				$modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($arrBusquedad[1]["id"]);
			
				$this->redirect(array('observaciones/updateTodo','id'=>$modeloEstadoestudiantil->id));
			}
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
		$dataProvider=new CActiveDataProvider('Condicion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Condicion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Condicion']))
			$model->attributes=$_GET['Condicion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionacademica the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Condicion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionacademica $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='condicion-form')
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
       
                     
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

}
