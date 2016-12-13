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
				'actions'=>array('create','update', 'view', 'update','updateTodo', 'admin','listarClientes','cargar','eliminar','alza'),
				'users'=>array('*'),
                'expression'=>'Yii::app()->user->rol==="Test"'
			),
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
			$model->TipologiaCliente=strtoupper ($model->TipologiaCliente);

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

				if ($cont=="0") {                                  
					$this->redirect(array('descripcion/create','id'=>$model->cod));
									
				}else{

					Yii::app()->clientScript->registerScript(1, 'alert("Por Favor, Asignar Una Tipologia de Cliente Distinta")');

				}

			}

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

	public function actionAlza(){
		$Observaciones = Observaciones::model()->with('condicion0')->findAll(array('condition'=>' gerente_comercial != "" AND  gerente_comercial != "CONDICIÓN RECHAZADA"  AND  gerente_cartera != "" AND gerente_cartera != "CONDICIÓN RECHAZADA" AND gerente_general != "" AND gerente_general != "CONDICIÓN RECHAZADA"'));
		// $Observaciones = Observaciones::model()->with('condicion0')->findByPk(30);
		$contador = 0;
		$p = 0;
		$Condicion_array = array();
		$Condicion_info = array();
		$incremento = 1.10;
		
		foreach ($Observaciones as $value) {
			
			echo "el id de  la consulta es: ----------------->".$value->id."<br>";


			//Informacion de la condicion comercial esta es sacada de la tabla de Observaciones
			
			$Condicion_info["Observaciones"] = $value->observaciones;
			$Condicion_info["Fecha"] = $value->fecha;
			$Condicion_info["Gerente_Comercial"] = $value->gerente_comercial;
			$Condicion_info["Gerente_Cartera"] = $value->gerente_cartera;
			$Condicion_info["Gerente_General"] = $value->gerente_general;
			$Condicion_info["Fecha"] = $value->fechautorizacion;
			$Condicion_info["Fecha1"] = $value->fechautorizacion1;
			$Condicion_info["Fecha2"] = $value->fechautorizacion2;
			$Condicion_info["Descripcion"] = $value->descripcion;
			$Condicion_info["Nombre_Asesor"] = $value->NombreAsesor;
			$Condicion_info["Condiciones_Comerciales"] = $value->condicionescomerciales;
			$Condicion_info["Correo"] = $value->correo;
			$Condicion_info["Nombre_Cliente"] = $value->NombreCliente;
			$Condicion_info["Estado"] = $value->estado;
			
			//Referencia

			$Condicion_array["Referencia"][0] = ($value->condicion0->referencia == "")? "null":$value->condicion0->referencia;   
			$Condicion_array["Referencia"][1] = ($value->condicion0->referencia1 == "")? "null":$value->condicion0->referencia1;   
			$Condicion_array["Referencia"][2] = ($value->condicion0->referencia2 == "")? "null":$value->condicion0->referencia2;   
			$Condicion_array["Referencia"][3] = ($value->condicion0->referencia3 == "")? "null":$value->condicion0->referencia3;   
			$Condicion_array["Referencia"][4] = ($value->condicion0->referencia4 == "")? "null":$value->condicion0->referencia4;   
			$Condicion_array["Referencia"][5] = ($value->condicion0->referencia5 == "")? "null":$value->condicion0->referencia5;   
			$Condicion_array["Referencia"][6] = ($value->condicion0->referencia6 == "")? "null":$value->condicion0->referencia6;   
			$Condicion_array["Referencia"][7] = ($value->condicion0->referencia7 == "")? "null":$value->condicion0->referencia7;   
			$Condicion_array["Referencia"][8] = ($value->condicion0->referencia8 == "")? "null":$value->condicion0->referencia8;   
			$Condicion_array["Referencia"][9] = ($value->condicion0->referencia9 == "")? "null":$value->condicion0->referencia9;   
			$Condicion_array["Referencia"][10] = ($value->condicion0->referencia10 == "")? "null":$value->condicion0->referencia10;   
			$Condicion_array["Referencia"][11] = ($value->condicion0->referencia11 == "")? "null":$value->condicion0->referencia11;   
			$Condicion_array["Referencia"][12] = ($value->condicion0->referencia12 == "")? "null":$value->condicion0->referencia12;   
			$Condicion_array["Referencia"][13] = ($value->condicion0->referencia13 == "")? "null":$value->condicion0->referencia13;   
			$Condicion_array["Referencia"][14] = ($value->condicion0->referencia14 == "")? "null":$value->condicion0->referencia14;   
			$Condicion_array["Referencia"][15] = ($value->condicion0->referencia15 == "")? "null":$value->condicion0->referencia15;   
			$Condicion_array["Referencia"][16] = ($value->condicion0->referencia16 == "")? "null":$value->condicion0->referencia16;   
			$Condicion_array["Referencia"][17] = ($value->condicion0->referencia17 == "")? "null":$value->condicion0->referencia17;   
			$Condicion_array["Referencia"][18] = ($value->condicion0->referencia18 == "")? "null":$value->condicion0->referencia18;   
			$Condicion_array["Referencia"][19] = ($value->condicion0->referencia19 == "")? "null":$value->condicion0->referencia19;   
			$Condicion_array["Referencia"][20] = ($value->condicion0->referencia20 == "")? "null":$value->condicion0->referencia20;   
			$Condicion_array["Referencia"][21] = ($value->condicion0->referencia21 == "")? "null":$value->condicion0->referencia21;   
			$Condicion_array["Referencia"][22] = ($value->condicion0->referencia22 == "")? "null":$value->condicion0->referencia22;   
			$Condicion_array["Referencia"][23] = ($value->condicion0->referencia23 == "")? "null":$value->condicion0->referencia23;   
			$Condicion_array["Referencia"][24] = ($value->condicion0->referencia24 == "")? "null":$value->condicion0->referencia24;   
			$Condicion_array["Referencia"][25] = ($value->condicion0->referencia25 == "")? "null":$value->condicion0->referencia25;   
			$Condicion_array["Referencia"][26] = ($value->condicion0->referencia26 == "")? "null":$value->condicion0->referencia26;   
			$Condicion_array["Referencia"][27] = ($value->condicion0->referencia27 == "")? "null":$value->condicion0->referencia27;   
			$Condicion_array["Referencia"][28] = ($value->condicion0->referencia28 == "")? "null":$value->condicion0->referencia28;   
			$Condicion_array["Referencia"][29] = ($value->condicion0->referencia29 == "")? "null":$value->condicion0->referencia29;   
			$Condicion_array["Referencia"][30] = ($value->condicion0->referencia30 == "")? "null":$value->condicion0->referencia30;   
			$Condicion_array["Referencia"][31] = ($value->condicion0->referencia31 == "")? "null":$value->condicion0->referencia31;   
			$Condicion_array["Referencia"][32] = ($value->condicion0->referencia32 == "")? "null":$value->condicion0->referencia32;   
			$Condicion_array["Referencia"][33] = ($value->condicion0->referencia33 == "")? "null":$value->condicion0->referencia33;   
			$Condicion_array["Referencia"][34] = ($value->condicion0->referencia34 == "")? "null":$value->condicion0->referencia34;   
			$Condicion_array["Referencia"][35] = ($value->condicion0->referencia35 == "")? "null":$value->condicion0->referencia35;

			//Precio anterior

			$Condicion_array["Precio_Anterior"][0] = ($value->condicion0->precioanterior == "")? "null":$value->condicion0->precioanterior;   
			$Condicion_array["Precio_Anterior"][1] = ($value->condicion0->precioanterior1 == "")? "null":$value->condicion0->precioanterior1;   
			$Condicion_array["Precio_Anterior"][2] = ($value->condicion0->precioanterior2 == "")? "null":$value->condicion0->precioanterior2;   
			$Condicion_array["Precio_Anterior"][3] = ($value->condicion0->precioanterior3 == "")? "null":$value->condicion0->precioanterior3;   
			$Condicion_array["Precio_Anterior"][4] = ($value->condicion0->precioanterior4 == "")? "null":$value->condicion0->precioanterior4;   
			$Condicion_array["Precio_Anterior"][5] = ($value->condicion0->precioanterior5 == "")? "null":$value->condicion0->precioanterior5;   
			$Condicion_array["Precio_Anterior"][6] = ($value->condicion0->precioanterior6 == "")? "null":$value->condicion0->precioanterior6;   
			$Condicion_array["Precio_Anterior"][7] = ($value->condicion0->precioanterior7 == "")? "null":$value->condicion0->precioanterior7;   
			$Condicion_array["Precio_Anterior"][8] = ($value->condicion0->precioanterior8 == "")? "null":$value->condicion0->precioanterior8;   
			$Condicion_array["Precio_Anterior"][9] = ($value->condicion0->precioanterior9 == "")? "null":$value->condicion0->precioanterior9;   
			$Condicion_array["Precio_Anterior"][10] = ($value->condicion0->precioanterior10 == "")? "null":$value->condicion0->precioanterior10;   
			$Condicion_array["Precio_Anterior"][11] = ($value->condicion0->precioanterior11 == "")? "null":$value->condicion0->precioanterior11;   
			$Condicion_array["Precio_Anterior"][12] = ($value->condicion0->precioanterior12 == "")? "null":$value->condicion0->precioanterior12;   
			$Condicion_array["Precio_Anterior"][13] = ($value->condicion0->precioanterior13 == "")? "null":$value->condicion0->precioanterior13;   
			$Condicion_array["Precio_Anterior"][14] = ($value->condicion0->precioanterior14 == "")? "null":$value->condicion0->precioanterior14;   
			$Condicion_array["Precio_Anterior"][15] = ($value->condicion0->precioanterior15 == "")? "null":$value->condicion0->precioanterior15;   
			$Condicion_array["Precio_Anterior"][16] = ($value->condicion0->precioanterior16 == "")? "null":$value->condicion0->precioanterior16;   
			$Condicion_array["Precio_Anterior"][17] = ($value->condicion0->precioanterior17 == "")? "null":$value->condicion0->precioanterior17;   
			$Condicion_array["Precio_Anterior"][18] = ($value->condicion0->precioanterior18 == "")? "null":$value->condicion0->precioanterior18;   
			$Condicion_array["Precio_Anterior"][19] = ($value->condicion0->precioanterior19 == "")? "null":$value->condicion0->precioanterior19;   
			$Condicion_array["Precio_Anterior"][20] = ($value->condicion0->precioanterior20 == "")? "null":$value->condicion0->precioanterior20;   
			$Condicion_array["Precio_Anterior"][21] = ($value->condicion0->precioanterior21 == "")? "null":$value->condicion0->precioanterior21;   
			$Condicion_array["Precio_Anterior"][22] = ($value->condicion0->precioanterior22 == "")? "null":$value->condicion0->precioanterior22;   
			$Condicion_array["Precio_Anterior"][23] = ($value->condicion0->precioanterior23 == "")? "null":$value->condicion0->precioanterior23;   
			$Condicion_array["Precio_Anterior"][24] = ($value->condicion0->precioanterior24 == "")? "null":$value->condicion0->precioanterior24;   
			$Condicion_array["Precio_Anterior"][25] = ($value->condicion0->precioanterior25 == "")? "null":$value->condicion0->precioanterior25;   
			$Condicion_array["Precio_Anterior"][26] = ($value->condicion0->precioanterior26 == "")? "null":$value->condicion0->precioanterior26;   
			$Condicion_array["Precio_Anterior"][27] = ($value->condicion0->precioanterior27 == "")? "null":$value->condicion0->precioanterior27;   
			$Condicion_array["Precio_Anterior"][28] = ($value->condicion0->precioanterior28 == "")? "null":$value->condicion0->precioanterior28;   
			$Condicion_array["Precio_Anterior"][29] = ($value->condicion0->precioanterior29 == "")? "null":$value->condicion0->precioanterior29;   
			$Condicion_array["Precio_Anterior"][30] = ($value->condicion0->precioanterior30 == "")? "null":$value->condicion0->precioanterior30;   
			$Condicion_array["Precio_Anterior"][31] = ($value->condicion0->precioanterior31 == "")? "null":$value->condicion0->precioanterior31;   
			$Condicion_array["Precio_Anterior"][32] = ($value->condicion0->precioanterior32 == "")? "null":$value->condicion0->precioanterior32;   
			$Condicion_array["Precio_Anterior"][33] = ($value->condicion0->precioanterior33 == "")? "null":$value->condicion0->precioanterior33;   
			$Condicion_array["Precio_Anterior"][34] = ($value->condicion0->precioanterior34 == "")? "null":$value->condicion0->precioanterior34;   
			$Condicion_array["Precio_Anterior"][35] = ($value->condicion0->precioanterior35 == "")? "null":$value->condicion0->precioanterior35;

			//Condicion precio nuevo.........

			$Condicion_array["Nuevo_Precio"][0] = ($value->condicion0->nuevoprecio == "" )? "null":$value->condicion0->nuevoprecio;   
			$Condicion_array["Nuevo_Precio"][1] = ($value->condicion0->nuevoprecio1 == "" )? "null":$value->condicion0->nuevoprecio1;   
			$Condicion_array["Nuevo_Precio"][2] = ($value->condicion0->nuevoprecio2 == "" )? "null":$value->condicion0->nuevoprecio2;   
			$Condicion_array["Nuevo_Precio"][3] = ($value->condicion0->nuevoprecio3 == "" )? "null":$value->condicion0->nuevoprecio3;   
			$Condicion_array["Nuevo_Precio"][4] = ($value->condicion0->nuevoprecio4 == "" )? "null":$value->condicion0->nuevoprecio4;   
			$Condicion_array["Nuevo_Precio"][5] = ($value->condicion0->nuevoprecio5 == "" )? "null":$value->condicion0->nuevoprecio5;   
			$Condicion_array["Nuevo_Precio"][6] = ($value->condicion0->nuevoprecio6 == "" )? "null":$value->condicion0->nuevoprecio6;   
			$Condicion_array["Nuevo_Precio"][7] = ($value->condicion0->nuevoprecio7 == "" )? "null":$value->condicion0->nuevoprecio7;   
			$Condicion_array["Nuevo_Precio"][8] = ($value->condicion0->nuevoprecio8 == "" )? "null":$value->condicion0->nuevoprecio8;   
			$Condicion_array["Nuevo_Precio"][9] = ($value->condicion0->nuevoprecio9 == "" )? "null":$value->condicion0->nuevoprecio9;   
			$Condicion_array["Nuevo_Precio"][10] = ($value->condicion0->nuevoprecio10 == "" )? "null":$value->condicion0->nuevoprecio10;   
			$Condicion_array["Nuevo_Precio"][11] = ($value->condicion0->nuevoprecio11 == "" )? "null":$value->condicion0->nuevoprecio11;   
			$Condicion_array["Nuevo_Precio"][12] = ($value->condicion0->nuevoprecio12 == "" )? "null":$value->condicion0->nuevoprecio12;   
			$Condicion_array["Nuevo_Precio"][13] = ($value->condicion0->nuevoprecio13 == "" )? "null":$value->condicion0->nuevoprecio13;   
			$Condicion_array["Nuevo_Precio"][14] = ($value->condicion0->nuevoprecio14 == "" )? "null":$value->condicion0->nuevoprecio14;   
			$Condicion_array["Nuevo_Precio"][15] = ($value->condicion0->nuevoprecio15 == "" )? "null":$value->condicion0->nuevoprecio15;   
			$Condicion_array["Nuevo_Precio"][16] = ($value->condicion0->nuevoprecio16 == "" )? "null":$value->condicion0->nuevoprecio16;   
			$Condicion_array["Nuevo_Precio"][17] = ($value->condicion0->nuevoprecio17 == "" )? "null":$value->condicion0->nuevoprecio17;   
			$Condicion_array["Nuevo_Precio"][18] = ($value->condicion0->nuevoprecio18 == "" )? "null":$value->condicion0->nuevoprecio18;   
			$Condicion_array["Nuevo_Precio"][19] = ($value->condicion0->nuevoprecio19 == "" )? "null":$value->condicion0->nuevoprecio19;   
			$Condicion_array["Nuevo_Precio"][20] = ($value->condicion0->nuevoprecio20 == "" )? "null":$value->condicion0->nuevoprecio20;   
			$Condicion_array["Nuevo_Precio"][21] = ($value->condicion0->nuevoprecio21 == "" )? "null":$value->condicion0->nuevoprecio21;   
			$Condicion_array["Nuevo_Precio"][22] = ($value->condicion0->nuevoprecio22 == "" )? "null":$value->condicion0->nuevoprecio22;   
			$Condicion_array["Nuevo_Precio"][23] = ($value->condicion0->nuevoprecio23 == "" )? "null":$value->condicion0->nuevoprecio23;   
			$Condicion_array["Nuevo_Precio"][24] = ($value->condicion0->nuevoprecio24 == "" )? "null":$value->condicion0->nuevoprecio24;   
			$Condicion_array["Nuevo_Precio"][25] = ($value->condicion0->nuevoprecio25 == "" )? "null":$value->condicion0->nuevoprecio25;   
			$Condicion_array["Nuevo_Precio"][26] = ($value->condicion0->nuevoprecio26 == "" )? "null":$value->condicion0->nuevoprecio26;   
			$Condicion_array["Nuevo_Precio"][27] = ($value->condicion0->nuevoprecio27 == "" )? "null":$value->condicion0->nuevoprecio27;   
			$Condicion_array["Nuevo_Precio"][28] = ($value->condicion0->nuevoprecio28 == "" )? "null":$value->condicion0->nuevoprecio28;   
			$Condicion_array["Nuevo_Precio"][29] = ($value->condicion0->nuevoprecio29 == "" )? "null":$value->condicion0->nuevoprecio29;   
			$Condicion_array["Nuevo_Precio"][30] = ($value->condicion0->nuevoprecio30 == "" )? "null":$value->condicion0->nuevoprecio30;   
			$Condicion_array["Nuevo_Precio"][31] = ($value->condicion0->nuevoprecio31 == "" )? "null":$value->condicion0->nuevoprecio31;   
			$Condicion_array["Nuevo_Precio"][32] = ($value->condicion0->nuevoprecio32 == "" )? "null":$value->condicion0->nuevoprecio32;   
			$Condicion_array["Nuevo_Precio"][33] = ($value->condicion0->nuevoprecio33 == "" )? "null":$value->condicion0->nuevoprecio33;   
			$Condicion_array["Nuevo_Precio"][34] = ($value->condicion0->nuevoprecio34 == "" )? "null":$value->condicion0->nuevoprecio34;   
			$Condicion_array["Nuevo_Precio"][35] = ($value->condicion0->nuevoprecio35 == "" )? "null":$value->condicion0->nuevoprecio35;

			//Pie Factura

			$Condicion_array["Pie_Factura"][0] = ($value->condicion0->piefactura == "" )? "null":$value->condicion0->piefactura;   
			$Condicion_array["Pie_Factura"][1] = ($value->condicion0->piefactura1 == "" )? "null":$value->condicion0->piefactura1;   
			$Condicion_array["Pie_Factura"][2] = ($value->condicion0->piefactura2 == "" )? "null":$value->condicion0->piefactura2;   
			$Condicion_array["Pie_Factura"][3] = ($value->condicion0->piefactura3 == "" )? "null":$value->condicion0->piefactura3;   
			$Condicion_array["Pie_Factura"][4] = ($value->condicion0->piefactura4 == "" )? "null":$value->condicion0->piefactura4;   
			$Condicion_array["Pie_Factura"][5] = ($value->condicion0->piefactura5 == "" )? "null":$value->condicion0->piefactura5;   
			$Condicion_array["Pie_Factura"][6] = ($value->condicion0->piefactura6 == "" )? "null":$value->condicion0->piefactura6;   
			$Condicion_array["Pie_Factura"][7] = ($value->condicion0->piefactura7 == "" )? "null":$value->condicion0->piefactura7;   
			$Condicion_array["Pie_Factura"][8] = ($value->condicion0->piefactura8 == "" )? "null":$value->condicion0->piefactura8;   
			$Condicion_array["Pie_Factura"][9] = ($value->condicion0->piefactura9 == "" )? "null":$value->condicion0->piefactura9;   
			$Condicion_array["Pie_Factura"][10] = ($value->condicion0->piefactura10 == "" )? "null":$value->condicion0->piefactura10;   
			$Condicion_array["Pie_Factura"][11] = ($value->condicion0->piefactura11 == "" )? "null":$value->condicion0->piefactura11;   
			$Condicion_array["Pie_Factura"][12] = ($value->condicion0->piefactura12 == "" )? "null":$value->condicion0->piefactura12;   
			$Condicion_array["Pie_Factura"][13] = ($value->condicion0->piefactura13 == "" )? "null":$value->condicion0->piefactura13;   
			$Condicion_array["Pie_Factura"][14] = ($value->condicion0->piefactura14 == "" )? "null":$value->condicion0->piefactura14;   
			$Condicion_array["Pie_Factura"][15] = ($value->condicion0->piefactura15 == "" )? "null":$value->condicion0->piefactura15;   
			$Condicion_array["Pie_Factura"][16] = ($value->condicion0->piefactura16 == "" )? "null":$value->condicion0->piefactura16;   
			$Condicion_array["Pie_Factura"][17] = ($value->condicion0->piefactura17 == "" )? "null":$value->condicion0->piefactura17;   
			$Condicion_array["Pie_Factura"][18] = ($value->condicion0->piefactura18 == "" )? "null":$value->condicion0->piefactura18;   
			$Condicion_array["Pie_Factura"][19] = ($value->condicion0->piefactura19 == "" )? "null":$value->condicion0->piefactura19;   
			$Condicion_array["Pie_Factura"][20] = ($value->condicion0->piefactura20 == "" )? "null":$value->condicion0->piefactura20;   
			$Condicion_array["Pie_Factura"][21] = ($value->condicion0->piefactura21 == "" )? "null":$value->condicion0->piefactura21;   
			$Condicion_array["Pie_Factura"][22] = ($value->condicion0->piefactura22 == "" )? "null":$value->condicion0->piefactura22;   
			$Condicion_array["Pie_Factura"][23] = ($value->condicion0->piefactura23 == "" )? "null":$value->condicion0->piefactura23;   
			$Condicion_array["Pie_Factura"][24] = ($value->condicion0->piefactura24 == "" )? "null":$value->condicion0->piefactura24;   
			$Condicion_array["Pie_Factura"][25] = ($value->condicion0->piefactura25 == "" )? "null":$value->condicion0->piefactura25;   
			$Condicion_array["Pie_Factura"][26] = ($value->condicion0->piefactura26 == "" )? "null":$value->condicion0->piefactura26;   
			$Condicion_array["Pie_Factura"][27] = ($value->condicion0->piefactura27 == "" )? "null":$value->condicion0->piefactura27;   
			$Condicion_array["Pie_Factura"][28] = ($value->condicion0->piefactura28 == "" )? "null":$value->condicion0->piefactura28;   
			$Condicion_array["Pie_Factura"][29] = ($value->condicion0->piefactura29 == "" )? "null":$value->condicion0->piefactura29;   
			$Condicion_array["Pie_Factura"][30] = ($value->condicion0->piefactura30 == "" )? "null":$value->condicion0->piefactura30;   
			$Condicion_array["Pie_Factura"][31] = ($value->condicion0->piefactura31 == "" )? "null":$value->condicion0->piefactura31;   
			$Condicion_array["Pie_Factura"][32] = ($value->condicion0->piefactura32 == "" )? "null":$value->condicion0->piefactura32;   
			$Condicion_array["Pie_Factura"][33] = ($value->condicion0->piefactura33 == "" )? "null":$value->condicion0->piefactura33;   
			$Condicion_array["Pie_Factura"][34] = ($value->condicion0->piefactura34 == "" )? "null":$value->condicion0->piefactura34;   
			$Condicion_array["Pie_Factura"][35] = ($value->condicion0->piefactura35 == "" )? "null":$value->condicion0->piefactura35;

			// Rebate

			$Condicion_array["Rebate"][0] = ($value->condicion0->rebate == "" )? "null":$value->condicion0->rebate;   
			$Condicion_array["Rebate"][1] = ($value->condicion0->rebate1 == "" )? "null":$value->condicion0->rebate1;   
			$Condicion_array["Rebate"][2] = ($value->condicion0->rebate2 == "" )? "null":$value->condicion0->rebate2;   
			$Condicion_array["Rebate"][3] = ($value->condicion0->rebate3 == "" )? "null":$value->condicion0->rebate3;   
			$Condicion_array["Rebate"][4] = ($value->condicion0->rebate4 == "" )? "null":$value->condicion0->rebate4;   
			$Condicion_array["Rebate"][5] = ($value->condicion0->rebate5 == "" )? "null":$value->condicion0->rebate5;   
			$Condicion_array["Rebate"][6] = ($value->condicion0->rebate6 == "" )? "null":$value->condicion0->rebate6;   
			$Condicion_array["Rebate"][7] = ($value->condicion0->rebate7 == "" )? "null":$value->condicion0->rebate7;   
			$Condicion_array["Rebate"][8] = ($value->condicion0->rebate8 == "" )? "null":$value->condicion0->rebate8;   
			$Condicion_array["Rebate"][9] = ($value->condicion0->rebate9 == "" )? "null":$value->condicion0->rebate9;   
			$Condicion_array["Rebate"][10] = ($value->condicion0->rebate10 == "" )? "null":$value->condicion0->rebate10;   
			$Condicion_array["Rebate"][11] = ($value->condicion0->rebate11 == "" )? "null":$value->condicion0->rebate11;   
			$Condicion_array["Rebate"][12] = ($value->condicion0->rebate12 == "" )? "null":$value->condicion0->rebate12;   
			$Condicion_array["Rebate"][13] = ($value->condicion0->rebate13 == "" )? "null":$value->condicion0->rebate13;   
			$Condicion_array["Rebate"][14] = ($value->condicion0->rebate14 == "" )? "null":$value->condicion0->rebate14;   
			$Condicion_array["Rebate"][15] = ($value->condicion0->rebate15 == "" )? "null":$value->condicion0->rebate15;   
			$Condicion_array["Rebate"][16] = ($value->condicion0->rebate16 == "" )? "null":$value->condicion0->rebate16;   
			$Condicion_array["Rebate"][17] = ($value->condicion0->rebate17 == "" )? "null":$value->condicion0->rebate17;   
			$Condicion_array["Rebate"][18] = ($value->condicion0->rebate18 == "" )? "null":$value->condicion0->rebate18;   
			$Condicion_array["Rebate"][19] = ($value->condicion0->rebate19 == "" )? "null":$value->condicion0->rebate19;   
			$Condicion_array["Rebate"][20] = ($value->condicion0->rebate20 == "" )? "null":$value->condicion0->rebate20;   
			$Condicion_array["Rebate"][21] = ($value->condicion0->rebate21 == "" )? "null":$value->condicion0->rebate21;   
			$Condicion_array["Rebate"][22] = ($value->condicion0->rebate22 == "" )? "null":$value->condicion0->rebate22;   
			$Condicion_array["Rebate"][23] = ($value->condicion0->rebate23 == "" )? "null":$value->condicion0->rebate23;   
			$Condicion_array["Rebate"][24] = ($value->condicion0->rebate24 == "" )? "null":$value->condicion0->rebate24;   
			$Condicion_array["Rebate"][25] = ($value->condicion0->rebate25 == "" )? "null":$value->condicion0->rebate25;   
			$Condicion_array["Rebate"][26] = ($value->condicion0->rebate26 == "" )? "null":$value->condicion0->rebate26;   
			$Condicion_array["Rebate"][27] = ($value->condicion0->rebate27 == "" )? "null":$value->condicion0->rebate27;   
			$Condicion_array["Rebate"][28] = ($value->condicion0->rebate28 == "" )? "null":$value->condicion0->rebate28;   
			$Condicion_array["Rebate"][29] = ($value->condicion0->rebate29 == "" )? "null":$value->condicion0->rebate29;   
			$Condicion_array["Rebate"][30] = ($value->condicion0->rebate30 == "" )? "null":$value->condicion0->rebate30;   
			$Condicion_array["Rebate"][31] = ($value->condicion0->rebate31 == "" )? "null":$value->condicion0->rebate31;   
			$Condicion_array["Rebate"][32] = ($value->condicion0->rebate32 == "" )? "null":$value->condicion0->rebate32;   
			$Condicion_array["Rebate"][33] = ($value->condicion0->rebate33 == "" )? "null":$value->condicion0->rebate33;   
			$Condicion_array["Rebate"][34] = ($value->condicion0->rebate34 == "" )? "null":$value->condicion0->rebate34;   
			$Condicion_array["Rebate"][35] = ($value->condicion0->rebate35 == "" )? "null":$value->condicion0->rebate35;

			//dias

			$Condicion_array["Dias"][0] = ($value->condicion0->Dias == "" )? "null":$value->condicion0->Dias;   
			$Condicion_array["Dias"][1] = ($value->condicion0->Dias1 == "" )? "null":$value->condicion0->Dias1;   
			$Condicion_array["Dias"][2] = ($value->condicion0->Dias2 == "" )? "null":$value->condicion0->Dias2;   
			$Condicion_array["Dias"][3] = ($value->condicion0->Dias3 == "" )? "null":$value->condicion0->Dias3;   
			$Condicion_array["Dias"][4] = ($value->condicion0->Dias4 == "" )? "null":$value->condicion0->Dias4;   
			$Condicion_array["Dias"][5] = ($value->condicion0->Dias5 == "" )? "null":$value->condicion0->Dias5;   
			$Condicion_array["Dias"][6] = ($value->condicion0->Dias6 == "" )? "null":$value->condicion0->Dias6;   
			$Condicion_array["Dias"][7] = ($value->condicion0->Dias7 == "" )? "null":$value->condicion0->Dias7;   
			$Condicion_array["Dias"][8] = ($value->condicion0->Dias8 == "" )? "null":$value->condicion0->Dias8;   
			$Condicion_array["Dias"][9] = ($value->condicion0->Dias9 == "" )? "null":$value->condicion0->Dias9;   
			$Condicion_array["Dias"][10] = ($value->condicion0->Dias10 == "" )? "null":$value->condicion0->Dias10;   
			$Condicion_array["Dias"][11] = ($value->condicion0->Dias11 == "" )? "null":$value->condicion0->Dias11;   
			$Condicion_array["Dias"][12] = ($value->condicion0->Dias12 == "" )? "null":$value->condicion0->Dias12;   
			$Condicion_array["Dias"][13] = ($value->condicion0->Dias13 == "" )? "null":$value->condicion0->Dias13;   
			$Condicion_array["Dias"][14] = ($value->condicion0->Dias14 == "" )? "null":$value->condicion0->Dias14;   
			$Condicion_array["Dias"][15] = ($value->condicion0->Dias15 == "" )? "null":$value->condicion0->Dias15;   
			$Condicion_array["Dias"][16] = ($value->condicion0->Dias16 == "" )? "null":$value->condicion0->Dias16;   
			$Condicion_array["Dias"][17] = ($value->condicion0->Dias17 == "" )? "null":$value->condicion0->Dias17;   
			$Condicion_array["Dias"][18] = ($value->condicion0->Dias18 == "" )? "null":$value->condicion0->Dias18;   
			$Condicion_array["Dias"][19] = ($value->condicion0->Dias19 == "" )? "null":$value->condicion0->Dias19;   
			$Condicion_array["Dias"][20] = ($value->condicion0->Dias20 == "" )? "null":$value->condicion0->Dias20;   
			$Condicion_array["Dias"][21] = ($value->condicion0->Dias21 == "" )? "null":$value->condicion0->Dias21;   
			$Condicion_array["Dias"][22] = ($value->condicion0->Dias22 == "" )? "null":$value->condicion0->Dias22;   
			$Condicion_array["Dias"][23] = ($value->condicion0->Dias23 == "" )? "null":$value->condicion0->Dias23;   
			$Condicion_array["Dias"][24] = ($value->condicion0->Dias24 == "" )? "null":$value->condicion0->Dias24;   
			$Condicion_array["Dias"][25] = ($value->condicion0->Dias25 == "" )? "null":$value->condicion0->Dias25;   
			$Condicion_array["Dias"][26] = ($value->condicion0->Dias26 == "" )? "null":$value->condicion0->Dias26;   
			$Condicion_array["Dias"][27] = ($value->condicion0->Dias27 == "" )? "null":$value->condicion0->Dias27;   
			$Condicion_array["Dias"][28] = ($value->condicion0->Dias28 == "" )? "null":$value->condicion0->Dias28;   
			$Condicion_array["Dias"][29] = ($value->condicion0->Dias29 == "" )? "null":$value->condicion0->Dias29;   
			$Condicion_array["Dias"][30] = ($value->condicion0->Dias30 == "" )? "null":$value->condicion0->Dias30;   
			$Condicion_array["Dias"][31] = ($value->condicion0->Dias31 == "" )? "null":$value->condicion0->Dias31;   
			$Condicion_array["Dias"][32] = ($value->condicion0->Dias32 == "" )? "null":$value->condicion0->Dias32;   
			$Condicion_array["Dias"][33] = ($value->condicion0->Dias33 == "" )? "null":$value->condicion0->Dias33;   
			$Condicion_array["Dias"][34] = ($value->condicion0->Dias34 == "" )? "null":$value->condicion0->Dias34;   
			$Condicion_array["Dias"][35] = ($value->condicion0->Dias35 == "" )? "null":$value->condicion0->Dias35;

			//60

			$Condicion_array["Sesenta"][0] = ($value->condicion0->Sesenta == "" )? "null":$value->condicion0->Sesenta;   
			$Condicion_array["Sesenta"][1] = ($value->condicion0->Sesenta1 == "" )? "null":$value->condicion0->Sesenta1;   
			$Condicion_array["Sesenta"][2] = ($value->condicion0->Sesenta2 == "" )? "null":$value->condicion0->Sesenta2;   
			$Condicion_array["Sesenta"][3] = ($value->condicion0->Sesenta3 == "" )? "null":$value->condicion0->Sesenta3;   
			$Condicion_array["Sesenta"][4] = ($value->condicion0->Sesenta4 == "" )? "null":$value->condicion0->Sesenta4;   
			$Condicion_array["Sesenta"][5] = ($value->condicion0->Sesenta5 == "" )? "null":$value->condicion0->Sesenta5;   
			$Condicion_array["Sesenta"][6] = ($value->condicion0->Sesenta6 == "" )? "null":$value->condicion0->Sesenta6;   
			$Condicion_array["Sesenta"][7] = ($value->condicion0->Sesenta7 == "" )? "null":$value->condicion0->Sesenta7;   
			$Condicion_array["Sesenta"][8] = ($value->condicion0->Sesenta8 == "" )? "null":$value->condicion0->Sesenta8;   
			$Condicion_array["Sesenta"][9] = ($value->condicion0->Sesenta9 == "" )? "null":$value->condicion0->Sesenta9;   
			$Condicion_array["Sesenta"][10] = ($value->condicion0->Sesenta10 == "" )? "null":$value->condicion0->Sesenta10;   
			$Condicion_array["Sesenta"][11] = ($value->condicion0->Sesenta11 == "" )? "null":$value->condicion0->Sesenta11;   
			$Condicion_array["Sesenta"][12] = ($value->condicion0->Sesenta12 == "" )? "null":$value->condicion0->Sesenta12;   
			$Condicion_array["Sesenta"][13] = ($value->condicion0->Sesenta13 == "" )? "null":$value->condicion0->Sesenta13;   
			$Condicion_array["Sesenta"][14] = ($value->condicion0->Sesenta14 == "" )? "null":$value->condicion0->Sesenta14;   
			$Condicion_array["Sesenta"][15] = ($value->condicion0->Sesenta15 == "" )? "null":$value->condicion0->Sesenta15;   
			$Condicion_array["Sesenta"][16] = ($value->condicion0->Sesenta16 == "" )? "null":$value->condicion0->Sesenta16;   
			$Condicion_array["Sesenta"][17] = ($value->condicion0->Sesenta17 == "" )? "null":$value->condicion0->Sesenta17;   
			$Condicion_array["Sesenta"][18] = ($value->condicion0->Sesenta18 == "" )? "null":$value->condicion0->Sesenta18;   
			$Condicion_array["Sesenta"][19] = ($value->condicion0->Sesenta19 == "" )? "null":$value->condicion0->Sesenta19;   
			$Condicion_array["Sesenta"][20] = ($value->condicion0->Sesenta20 == "" )? "null":$value->condicion0->Sesenta20;   
			$Condicion_array["Sesenta"][21] = ($value->condicion0->Sesenta21 == "" )? "null":$value->condicion0->Sesenta21;   
			$Condicion_array["Sesenta"][22] = ($value->condicion0->Sesenta22 == "" )? "null":$value->condicion0->Sesenta22;   
			$Condicion_array["Sesenta"][23] = ($value->condicion0->Sesenta23 == "" )? "null":$value->condicion0->Sesenta23;   
			$Condicion_array["Sesenta"][24] = ($value->condicion0->Sesenta24 == "" )? "null":$value->condicion0->Sesenta24;   
			$Condicion_array["Sesenta"][25] = ($value->condicion0->Sesenta25 == "" )? "null":$value->condicion0->Sesenta25;   
			$Condicion_array["Sesenta"][26] = ($value->condicion0->Sesenta26 == "" )? "null":$value->condicion0->Sesenta26;   
			$Condicion_array["Sesenta"][27] = ($value->condicion0->Sesenta27 == "" )? "null":$value->condicion0->Sesenta27;   
			$Condicion_array["Sesenta"][28] = ($value->condicion0->Sesenta28 == "" )? "null":$value->condicion0->Sesenta28;   
			$Condicion_array["Sesenta"][29] = ($value->condicion0->Sesenta29 == "" )? "null":$value->condicion0->Sesenta29;   
			$Condicion_array["Sesenta"][30] = ($value->condicion0->Sesenta30 == "" )? "null":$value->condicion0->Sesenta30;   
			$Condicion_array["Sesenta"][31] = ($value->condicion0->Sesenta31 == "" )? "null":$value->condicion0->Sesenta31;   
			$Condicion_array["Sesenta"][32] = ($value->condicion0->Sesenta32 == "" )? "null":$value->condicion0->Sesenta32;   
			$Condicion_array["Sesenta"][33] = ($value->condicion0->Sesenta33 == "" )? "null":$value->condicion0->Sesenta33;   
			$Condicion_array["Sesenta"][34] = ($value->condicion0->Sesenta34 == "" )? "null":$value->condicion0->Sesenta34;   
			$Condicion_array["Sesenta"][35] = ($value->condicion0->Sesenta35 == "" )? "null":$value->condicion0->Sesenta35;

			//30

			$Condicion_array["Treinta"][0] = ($value->condicion0->Treinta == "" )? "null":$value->condicion0->Treinta;   
			$Condicion_array["Treinta"][1] = ($value->condicion0->Treinta1 == "" )? "null":$value->condicion0->Treinta1;   
			$Condicion_array["Treinta"][2] = ($value->condicion0->Treinta2 == "" )? "null":$value->condicion0->Treinta2;   
			$Condicion_array["Treinta"][3] = ($value->condicion0->Treinta3 == "" )? "null":$value->condicion0->Treinta3;   
			$Condicion_array["Treinta"][4] = ($value->condicion0->Treinta4 == "" )? "null":$value->condicion0->Treinta4;   
			$Condicion_array["Treinta"][5] = ($value->condicion0->Treinta5 == "" )? "null":$value->condicion0->Treinta5;   
			$Condicion_array["Treinta"][6] = ($value->condicion0->Treinta6 == "" )? "null":$value->condicion0->Treinta6;   
			$Condicion_array["Treinta"][7] = ($value->condicion0->Treinta7 == "" )? "null":$value->condicion0->Treinta7;   
			$Condicion_array["Treinta"][8] = ($value->condicion0->Treinta8 == "" )? "null":$value->condicion0->Treinta8;   
			$Condicion_array["Treinta"][9] = ($value->condicion0->Treinta9 == "" )? "null":$value->condicion0->Treinta9;   
			$Condicion_array["Treinta"][10] = ($value->condicion0->Treinta10 == "" )? "null":$value->condicion0->Treinta10;   
			$Condicion_array["Treinta"][11] = ($value->condicion0->Treinta11 == "" )? "null":$value->condicion0->Treinta11;   
			$Condicion_array["Treinta"][12] = ($value->condicion0->Treinta12 == "" )? "null":$value->condicion0->Treinta12;   
			$Condicion_array["Treinta"][13] = ($value->condicion0->Treinta13 == "" )? "null":$value->condicion0->Treinta13;   
			$Condicion_array["Treinta"][14] = ($value->condicion0->Treinta14 == "" )? "null":$value->condicion0->Treinta14;   
			$Condicion_array["Treinta"][15] = ($value->condicion0->Treinta15 == "" )? "null":$value->condicion0->Treinta15;   
			$Condicion_array["Treinta"][16] = ($value->condicion0->Treinta16 == "" )? "null":$value->condicion0->Treinta16;   
			$Condicion_array["Treinta"][17] = ($value->condicion0->Treinta17 == "" )? "null":$value->condicion0->Treinta17;   
			$Condicion_array["Treinta"][18] = ($value->condicion0->Treinta18 == "" )? "null":$value->condicion0->Treinta18;   
			$Condicion_array["Treinta"][19] = ($value->condicion0->Treinta19 == "" )? "null":$value->condicion0->Treinta19;   
			$Condicion_array["Treinta"][20] = ($value->condicion0->Treinta20 == "" )? "null":$value->condicion0->Treinta20;   
			$Condicion_array["Treinta"][21] = ($value->condicion0->Treinta21 == "" )? "null":$value->condicion0->Treinta21;   
			$Condicion_array["Treinta"][22] = ($value->condicion0->Treinta22 == "" )? "null":$value->condicion0->Treinta22;   
			$Condicion_array["Treinta"][23] = ($value->condicion0->Treinta23 == "" )? "null":$value->condicion0->Treinta23;   
			$Condicion_array["Treinta"][24] = ($value->condicion0->Treinta24 == "" )? "null":$value->condicion0->Treinta24;   
			$Condicion_array["Treinta"][25] = ($value->condicion0->Treinta25 == "" )? "null":$value->condicion0->Treinta25;   
			$Condicion_array["Treinta"][26] = ($value->condicion0->Treinta26 == "" )? "null":$value->condicion0->Treinta26;   
			$Condicion_array["Treinta"][27] = ($value->condicion0->Treinta27 == "" )? "null":$value->condicion0->Treinta27;   
			$Condicion_array["Treinta"][28] = ($value->condicion0->Treinta28 == "" )? "null":$value->condicion0->Treinta28;   
			$Condicion_array["Treinta"][29] = ($value->condicion0->Treinta29 == "" )? "null":$value->condicion0->Treinta29;   
			$Condicion_array["Treinta"][30] = ($value->condicion0->Treinta30 == "" )? "null":$value->condicion0->Treinta30;   
			$Condicion_array["Treinta"][31] = ($value->condicion0->Treinta31 == "" )? "null":$value->condicion0->Treinta31;   
			$Condicion_array["Treinta"][32] = ($value->condicion0->Treinta32 == "" )? "null":$value->condicion0->Treinta32;   
			$Condicion_array["Treinta"][33] = ($value->condicion0->Treinta33 == "" )? "null":$value->condicion0->Treinta33;   
			$Condicion_array["Treinta"][34] = ($value->condicion0->Treinta34 == "" )? "null":$value->condicion0->Treinta34;   
			$Condicion_array["Treinta"][35] = ($value->condicion0->Treinta35 == "" )? "null":$value->condicion0->Treinta35;

			//08

			$Condicion_array["Ocho"][0] = ($value->condicion0->Ocho == "" )? "null":$value->condicion0->Ocho;   
			$Condicion_array["Ocho"][1] = ($value->condicion0->Ocho1 == "" )? "null":$value->condicion0->Ocho1;   
			$Condicion_array["Ocho"][2] = ($value->condicion0->Ocho2 == "" )? "null":$value->condicion0->Ocho2;   
			$Condicion_array["Ocho"][3] = ($value->condicion0->Ocho3 == "" )? "null":$value->condicion0->Ocho3;   
			$Condicion_array["Ocho"][4] = ($value->condicion0->Ocho4 == "" )? "null":$value->condicion0->Ocho4;   
			$Condicion_array["Ocho"][5] = ($value->condicion0->Ocho5 == "" )? "null":$value->condicion0->Ocho5;   
			$Condicion_array["Ocho"][6] = ($value->condicion0->Ocho6 == "" )? "null":$value->condicion0->Ocho6;   
			$Condicion_array["Ocho"][7] = ($value->condicion0->Ocho7 == "" )? "null":$value->condicion0->Ocho7;   
			$Condicion_array["Ocho"][8] = ($value->condicion0->Ocho8 == "" )? "null":$value->condicion0->Ocho8;   
			$Condicion_array["Ocho"][9] = ($value->condicion0->Ocho9 == "" )? "null":$value->condicion0->Ocho9;   
			$Condicion_array["Ocho"][10] = ($value->condicion0->Ocho10 == "" )? "null":$value->condicion0->Ocho10;   
			$Condicion_array["Ocho"][11] = ($value->condicion0->Ocho11 == "" )? "null":$value->condicion0->Ocho11;   
			$Condicion_array["Ocho"][12] = ($value->condicion0->Ocho12 == "" )? "null":$value->condicion0->Ocho12;   
			$Condicion_array["Ocho"][13] = ($value->condicion0->Ocho13 == "" )? "null":$value->condicion0->Ocho13;   
			$Condicion_array["Ocho"][14] = ($value->condicion0->Ocho14 == "" )? "null":$value->condicion0->Ocho14;   
			$Condicion_array["Ocho"][15] = ($value->condicion0->Ocho15 == "" )? "null":$value->condicion0->Ocho15;   
			$Condicion_array["Ocho"][16] = ($value->condicion0->Ocho16 == "" )? "null":$value->condicion0->Ocho16;   
			$Condicion_array["Ocho"][17] = ($value->condicion0->Ocho17 == "" )? "null":$value->condicion0->Ocho17;   
			$Condicion_array["Ocho"][18] = ($value->condicion0->Ocho18 == "" )? "null":$value->condicion0->Ocho18;   
			$Condicion_array["Ocho"][19] = ($value->condicion0->Ocho19 == "" )? "null":$value->condicion0->Ocho19;   
			$Condicion_array["Ocho"][20] = ($value->condicion0->Ocho20 == "" )? "null":$value->condicion0->Ocho20;   
			$Condicion_array["Ocho"][21] = ($value->condicion0->Ocho21 == "" )? "null":$value->condicion0->Ocho21;   
			$Condicion_array["Ocho"][22] = ($value->condicion0->Ocho22 == "" )? "null":$value->condicion0->Ocho22;   
			$Condicion_array["Ocho"][23] = ($value->condicion0->Ocho23 == "" )? "null":$value->condicion0->Ocho23;   
			$Condicion_array["Ocho"][24] = ($value->condicion0->Ocho24 == "" )? "null":$value->condicion0->Ocho24;   
			$Condicion_array["Ocho"][25] = ($value->condicion0->Ocho25 == "" )? "null":$value->condicion0->Ocho25;   
			$Condicion_array["Ocho"][26] = ($value->condicion0->Ocho26 == "" )? "null":$value->condicion0->Ocho26;   
			$Condicion_array["Ocho"][27] = ($value->condicion0->Ocho27 == "" )? "null":$value->condicion0->Ocho27;   
			$Condicion_array["Ocho"][28] = ($value->condicion0->Ocho28 == "" )? "null":$value->condicion0->Ocho28;   
			$Condicion_array["Ocho"][29] = ($value->condicion0->Ocho29 == "" )? "null":$value->condicion0->Ocho29;   
			$Condicion_array["Ocho"][30] = ($value->condicion0->Ocho30 == "" )? "null":$value->condicion0->Ocho30;   
			$Condicion_array["Ocho"][31] = ($value->condicion0->Ocho31 == "" )? "null":$value->condicion0->Ocho31;   
			$Condicion_array["Ocho"][32] = ($value->condicion0->Ocho32 == "" )? "null":$value->condicion0->Ocho32;   
			$Condicion_array["Ocho"][33] = ($value->condicion0->Ocho33 == "" )? "null":$value->condicion0->Ocho33;   
			$Condicion_array["Ocho"][34] = ($value->condicion0->Ocho34 == "" )? "null":$value->condicion0->Ocho34;   
			$Condicion_array["Ocho"][35] = ($value->condicion0->Ocho35 == "" )? "null":$value->condicion0->Ocho35;

			//otros

			$Condicion_array["Otro"][0] = ($value->condicion0->Otro == "" )? "null":$value->condicion0->Otro;   
			$Condicion_array["Otro"][1] = ($value->condicion0->Otro1 == "" )? "null":$value->condicion0->Otro1;   
			$Condicion_array["Otro"][2] = ($value->condicion0->Otro2 == "" )? "null":$value->condicion0->Otro2;   
			$Condicion_array["Otro"][3] = ($value->condicion0->Otro3 == "" )? "null":$value->condicion0->Otro3;   
			$Condicion_array["Otro"][4] = ($value->condicion0->Otro4 == "" )? "null":$value->condicion0->Otro4;   
			$Condicion_array["Otro"][5] = ($value->condicion0->Otro5 == "" )? "null":$value->condicion0->Otro5;   
			$Condicion_array["Otro"][6] = ($value->condicion0->Otro6 == "" )? "null":$value->condicion0->Otro6;   
			$Condicion_array["Otro"][7] = ($value->condicion0->Otro7 == "" )? "null":$value->condicion0->Otro7;   
			$Condicion_array["Otro"][8] = ($value->condicion0->Otro8 == "" )? "null":$value->condicion0->Otro8;   
			$Condicion_array["Otro"][9] = ($value->condicion0->Otro9 == "" )? "null":$value->condicion0->Otro9;   
			$Condicion_array["Otro"][10] = ($value->condicion0->Otro10 == "" )? "null":$value->condicion0->Otro10;   
			$Condicion_array["Otro"][11] = ($value->condicion0->Otro11 == "" )? "null":$value->condicion0->Otro11;   
			$Condicion_array["Otro"][12] = ($value->condicion0->Otro12 == "" )? "null":$value->condicion0->Otro12;   
			$Condicion_array["Otro"][13] = ($value->condicion0->Otro13 == "" )? "null":$value->condicion0->Otro13;   
			$Condicion_array["Otro"][14] = ($value->condicion0->Otro14 == "" )? "null":$value->condicion0->Otro14;   
			$Condicion_array["Otro"][15] = ($value->condicion0->Otro15 == "" )? "null":$value->condicion0->Otro15;   
			$Condicion_array["Otro"][16] = ($value->condicion0->Otro16 == "" )? "null":$value->condicion0->Otro16;   
			$Condicion_array["Otro"][17] = ($value->condicion0->Otro17 == "" )? "null":$value->condicion0->Otro17;   
			$Condicion_array["Otro"][18] = ($value->condicion0->Otro18 == "" )? "null":$value->condicion0->Otro18;   
			$Condicion_array["Otro"][19] = ($value->condicion0->Otro19 == "" )? "null":$value->condicion0->Otro19;   
			$Condicion_array["Otro"][20] = ($value->condicion0->Otro20 == "" )? "null":$value->condicion0->Otro20;   
			$Condicion_array["Otro"][21] = ($value->condicion0->Otro21 == "" )? "null":$value->condicion0->Otro21;   
			$Condicion_array["Otro"][22] = ($value->condicion0->Otro22 == "" )? "null":$value->condicion0->Otro22;   
			$Condicion_array["Otro"][23] = ($value->condicion0->Otro23 == "" )? "null":$value->condicion0->Otro23;   
			$Condicion_array["Otro"][24] = ($value->condicion0->Otro24 == "" )? "null":$value->condicion0->Otro24;   
			$Condicion_array["Otro"][25] = ($value->condicion0->Otro25 == "" )? "null":$value->condicion0->Otro25;   
			$Condicion_array["Otro"][26] = ($value->condicion0->Otro26 == "" )? "null":$value->condicion0->Otro26;   
			$Condicion_array["Otro"][27] = ($value->condicion0->Otro27 == "" )? "null":$value->condicion0->Otro27;   
			$Condicion_array["Otro"][28] = ($value->condicion0->Otro28 == "" )? "null":$value->condicion0->Otro28;   
			$Condicion_array["Otro"][29] = ($value->condicion0->Otro29 == "" )? "null":$value->condicion0->Otro29;   
			$Condicion_array["Otro"][30] = ($value->condicion0->Otro30 == "" )? "null":$value->condicion0->Otro30;   
			$Condicion_array["Otro"][31] = ($value->condicion0->Otro31 == "" )? "null":$value->condicion0->Otro31;   
			$Condicion_array["Otro"][32] = ($value->condicion0->Otro32 == "" )? "null":$value->condicion0->Otro32;   
			$Condicion_array["Otro"][33] = ($value->condicion0->Otro33 == "" )? "null":$value->condicion0->Otro33;   
			$Condicion_array["Otro"][34] = ($value->condicion0->Otro34 == "" )? "null":$value->condicion0->Otro34;   
			$Condicion_array["Otro"][35] = ($value->condicion0->Otro35 == "" )? "null":$value->condicion0->Otro35;

			// var_dump($value);
			// exit;

			$this->aplAlza($Condicion_array,$Condicion_info,$incremento);
			
			$contador++;
		}

		echo "estas en el controlador de condicones comerciales, en el metodo Alza <br>";
		echo "y el total de las condiciones que cumplen con el criterio es: ". $contador;
	}

	public function aplAlza($v,$info,$pord){
		$referencia_db = array();
		$precio_anterior_db = array();
		$precio_nuevo_db = array();
		$pie_factura_db = array();
		$rebate_db = array();
		$dias_db = array();
		$sesenta_db = array();
		$treinta_db = array();
		$ocho_db = array();
		$otros_db = array();

		echo "<table style='border:1px solid;'>";
		echo "<thead>";
		echo	"<tr>";
		echo		"<td align='center' style='border: 1px solid #030303'>Referencia</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>Precio Anterior</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>Nuevo Precio</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>Pie Factura</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>Rebate</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>Dias</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>60</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>30</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>08</td>";
		echo		"<td align='center' style='border: 1px solid #030303'>otro</td>";
		echo	"</tr>";
		echo "<thead>";
		echo "<tbody>";
		foreach ($v["Nuevo_Precio"] as $key => $value) {
			if($value != "null"){	
				$precio_nuevo_db[$key] = $this->porcentajeplus($value,$pord,3);
				$precio_anterior_db[$key] = $value;
			}else{
				$precio_nuevo_db[$key] = "&nbsp;";
				$precio_anterior_db[$key] = "&nbsp;";
			}

			$referencia_db[$key] = $v["Referencia"][$key];
			$pie_factura_db[$key] = $v["Pie_Factura"][$key];
			$rebate_db[$key] = $v["Rebate"][$key];
			$dias_db[$key] = $v["Dias"][$key];
			$sesenta_db[$key] = $v["Sesenta"][$key];
			$treinta_db[$key] = $v["Treinta"][$key];
			$ocho_db[$key] = $v["Ocho"][$key];
			$otros_db[$key] = $v["Otro"][$key];

			echo "<tr>";
			echo "<td align='center' style='border: 1px solid #030303'>".$referencia_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$precio_anterior_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$precio_nuevo_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$pie_factura_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$rebate_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$dias_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$sesenta_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$treinta_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$ocho_db[$key]."</td>"; 
			echo "<td align='center' style='border: 1px solid #030303'>".$otros_db[$key]."</td>"; 
			echo "<tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}

	public function porcentajeplus($Cantidad,$porcentaje,$decimales){
		return number_format($Cantidad * $porcentaje ,$decimales);
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
