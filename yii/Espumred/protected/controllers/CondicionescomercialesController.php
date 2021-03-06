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
		$Observaciones = Observaciones::model()->with('condicion0','Condicionescomerciales0')->findAll(array('condition'=>' gerente_comercial != "" AND  gerente_comercial != "CONDICIÓN RECHAZADA"  AND  gerente_cartera != "" AND gerente_cartera != "CONDICIÓN RECHAZADA" AND gerente_general != "" AND gerente_general != "CONDICIÓN RECHAZADA" AND estado != "Vigente"'));
		// $Observaciones = Observaciones::model()->with('condicion0')->findByPk(30);
		$contador = 0;
		$p = 0;
		$null = "";
		$Condicion_array = array();
		$Condicion_info = array();
		$incremento = 1.10;
		$corseteros_omitidos = 0;	
		foreach ($Observaciones as $value) {
			if($value->Condicionescomerciales0["TipologiaCliente"] == "CORSETERO"){
				$corseteros_omitidos++;
			}else if($value->Condicionescomerciales0["TipologiaCliente"] == "JESUS"){
			//Informacion de la condicion comercial esta es sacada de la tabla de Observaciones
			$Condicion_info["identificador"] = $value->id;
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

			
			if(is_object($value->condicion0)){
				//Referencia
				for ($i = 0; $i < 36; $i++){
					$nombre_R = "referencia".$i;
					if($i == 0){
						$Condicion_array["Referencia"][$i] = ($value->condicion0->referencia == "")? $null:$value->condicion0->referencia; 
					}else{
						$Condicion_array["Referencia"][$i] = ($value->condicion0->$nombre_R == "")? $null:$value->condicion0->$nombre_R; 
						
					}
					
				}

				//Precio anterior

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "precioanterior".$i;
					if($i == 0){
						$Condicion_array["Precio_Anterior"][$i] = ($value->condicion0->precioanterior == "")? "null":$value->condicion0->precioanterior; 
					}else{
						$Condicion_array["Precio_Anterior"][$i] = ($value->condicion0->$nombre_P == "")? "null":$value->condicion0->$nombre_P; 
						
					}
					
				}


				//Condicion precio nuevo.........

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "nuevoprecio".$i;
					if($i == 0){
						$Condicion_array["Nuevo_Precio"][$i] = ($value->condicion0->nuevoprecio == "")? "null":$value->condicion0->nuevoprecio; 
					}else{
						$Condicion_array["Nuevo_Precio"][$i] = ($value->condicion0->$nombre_P == "")? "null":$value->condicion0->$nombre_P; 
						
					}
					
				}

				//Pie Factura

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "piefactura".$i;
					if($i == 0){
						$Condicion_array["Pie_Factura"][$i] = ($value->condicion0->piefactura == "")? $null:$value->condicion0->piefactura; 
					}else{
						$Condicion_array["Pie_Factura"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				// Rebate

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "rebate".$i;
					if($i == 0){
						$Condicion_array["Rebate"][$i] = ($value->condicion0->rebate == "")? $null:$value->condicion0->rebate; 
					}else{
						$Condicion_array["Rebate"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				//dias

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Dias".$i;
					if($i == 0){
						$Condicion_array["Dias"][$i] = ($value->condicion0->Dias == "")? $null:$value->condicion0->Dias; 
					}else{
						$Condicion_array["Dias"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				//60

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Sesenta".$i;
					if($i == 0){
						$Condicion_array["Sesenta"][$i] = ($value->condicion0->Sesenta == "")? $null:$value->condicion0->Sesenta; 
					}else{
						$Condicion_array["Sesenta"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				//30

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Treinta".$i;
					if($i == 0){
						$Condicion_array["Treinta"][$i] = ($value->condicion0->Treinta == "")? $null:$value->condicion0->Sesenta; 
					}else{
						$Condicion_array["Treinta"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				//08

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Ocho".$i;
					if($i == 0){
						$Condicion_array["Ocho"][$i] = ($value->condicion0->Ocho == "")? $null:$value->condicion0->Ocho; 
					}else{
						$Condicion_array["Ocho"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}

				//otros

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Otro".$i;
					if($i == 0){
						$Condicion_array["Otro"][$i] = ($value->condicion0->Otro == "")? $null:$value->condicion0->Otro; 
					}else{
						$Condicion_array["Otro"][$i] = ($value->condicion0->$nombre_P == "")? $null:$value->condicion0->$nombre_P; 
						
					}
					
				}
			}else{
				//Referencia
				for ($i = 0; $i < 36; $i++){
					$nombre_R = "referencia".$i;
					if($i == 0){
						$Condicion_array["Referencia"][$i] = ($value->condicion0["referencia"] == "")? $null:$value->condicion0["referencia"]; 
					}else{
						$Condicion_array["Referencia"][$i] = ($value->condicion0[$nombre_R] == "")? $null:$value->condicion0[$nombre_R]; 
						
					}
					
				}

				//Precio anterior

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "precioanterior".$i;
					if($i == 0){
						$Condicion_array["Precio_Anterior"][$i] = ($value->condicion0["precioanterior"] == "")? "null":$value->condicion0["precioanterior"]; 
					}else{
						$Condicion_array["Precio_Anterior"][$i] = ($value->condicion0[$nombre_P] == "")? "null":$value->condicion0[$nombre_P]; 
						
					}
					
				}


				//Condicion precio nuevo.........

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "nuevoprecio".$i;
					if($i == 0){
						$Condicion_array["Nuevo_Precio"][$i] = ($value->condicion0["nuevoprecio"] == "")? "null":$value->condicion0["nuevoprecio"]; 
					}else{
						$Condicion_array["Nuevo_Precio"][$i] = ($value->condicion0[$nombre_P] == "")? "null":$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//Pie Factura

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "piefactura".$i;
					if($i == 0){
						$Condicion_array["Pie_Factura"][$i] = ($value->condicion0["piefactura"] == "")? $null:$value->condicion0["piefactura"]; 
					}else{
						$Condicion_array["Pie_Factura"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				// Rebate

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "rebate".$i;
					if($i == 0){
						$Condicion_array["Rebate"][$i] = ($value->condicion0["rebate"] == "")? $null:$value->condicion0["rebate"]; 
					}else{
						$Condicion_array["Rebate"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//dias

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Dias".$i;
					if($i == 0){
						$Condicion_array["Dias"][$i] = ($value->condicion0["Dias"] == "")? $null:$value->condicion0["Dias"]; 
					}else{
						$Condicion_array["Dias"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//60

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Sesenta".$i;
					if($i == 0){
						$Condicion_array["Sesenta"][$i] = ($value->condicion0["Sesenta"] == "")? $null:$value->condicion0["Sesenta"]; 
					}else{
						$Condicion_array["Sesenta"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//30

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Treinta".$i;
					if($i == 0){
						$Condicion_array["Treinta"][$i] = ($value->condicion0["Treinta"] == "")? $null:$value->condicion0["Treinta"]; 
					}else{
						$Condicion_array["Treinta"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//08

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Ocho".$i;
					if($i == 0){
						$Condicion_array["Ocho"][$i] = ($value->condicion0["Ocho"] == "")? $null:$value->condicion0["Ocho"]; 
					}else{
						$Condicion_array["Ocho"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}

				//otros

				for ($i = 0; $i < 36; $i++){
					$nombre_P = "Otro".$i;
					if($i == 0){
						$Condicion_array["Otro"][$i] = ($value->condicion0["Otro"] == "")? $null:$value->condicion0["Otro"]; 
					}else{
						$Condicion_array["Otro"][$i] = ($value->condicion0[$nombre_P] == "")? $null:$value->condicion0[$nombre_P]; 
						
					}
					
				}
			}
			
			
			// var_dump($Condicion_array);
			// exit;

			$this->aplAlza($Condicion_array,$Condicion_info,$incremento);
			
			$contador++;
			}
		}

		
		echo "El numero de condiciones con el nuevo alza son: ".$contador."<br>";
		echo "El numero de clientes con condiciones corseteras no afectadas son: ".$corseteros_omitidos."<br>";
	}

	public function corseteros(){
		
	}

	

	public function aplAlza($v,$info,$pord){
		$modelo_Observacion = new Observaciones;
		$modelo_Condicion = new Condicion;

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
		foreach ($v["Nuevo_Precio"] as $key => $value) {
			if($value != "null"){	
				$precio_nuevo_db[$key] = $this->porcentajeplus($value,$pord,3);
				$precio_anterior_db[$key] = $value;
			}else{
				$precio_nuevo_db[$key] = "";
				$precio_anterior_db[$key] = "";
			}
			$referencia_db[$key] = $v["Referencia"][$key];
			$pie_factura_db[$key] = $v["Pie_Factura"][$key];
			$rebate_db[$key] = $v["Rebate"][$key];
			$dias_db[$key] = $v["Dias"][$key];
			$sesenta_db[$key] = $v["Sesenta"][$key];
			$treinta_db[$key] = $v["Treinta"][$key];
			$ocho_db[$key] = $v["Ocho"][$key];
			$otros_db[$key] = $v["Otro"][$key];


			if($key == 0){
				$modelo_Condicion->referencia = $referencia_db[$key]; 
				$modelo_Condicion->precioanterior = $precio_anterior_db[$key]; 
				$modelo_Condicion->nuevoprecio = $precio_nuevo_db[$key]; 
				$modelo_Condicion->piefactura = $pie_factura_db[$key]; 
				$modelo_Condicion->rebate = $rebate_db[$key]; 
				$modelo_Condicion->Dias = $dias_db[$key]; 
				$modelo_Condicion->Sesenta = $sesenta_db[$key]; 
				$modelo_Condicion->Treinta = $treinta_db[$key]; 
				$modelo_Condicion->Ocho = $ocho_db[$key]; 
				$modelo_Condicion->Otro = $otros_db[$key];
			}else{
				$nombre_R = "referencia".$key;
				$nombre_P1 = "precioanterior".$key;
				$nombre_P2 = "nuevoprecio".$key;
				$nombre_P = "piefactura".$key;
				$nombre_Rb = "rebate".$key;
				$nombre_D = "Dias".$key;
				$nombre_60 = "Sesenta".$key;
				$nombre_30 = "Treinta".$key;
				$nombre_08 = "Ocho".$key;
				$nombre_OT = "Otro".$key;
				
				$modelo_Condicion->$nombre_R = $referencia_db[$key];
				$modelo_Condicion->$nombre_P1 = $precio_anterior_db[$key]; 
				$modelo_Condicion->$nombre_P2 = $precio_nuevo_db[$key]; 
				$modelo_Condicion->$nombre_P = $pie_factura_db[$key]; 
				$modelo_Condicion->$nombre_Rb = $rebate_db[$key]; 
				$modelo_Condicion->$nombre_D = $dias_db[$key]; 
				$modelo_Condicion->$nombre_60 = $sesenta_db[$key]; 
				$modelo_Condicion->$nombre_30 = $treinta_db[$key]; 
				$modelo_Condicion->$nombre_08 = $ocho_db[$key]; 
				$modelo_Condicion->$nombre_OT = $otros_db[$key]; 
			}
			 
	
		}

		try {
			$modelo_Condicion->save();
		} catch (CException $ec) {
			echo "Error al guardar la condicion con el alza del ".$pord."%.<br> El id de la consulta es: <strong>".$info["identificador"]."</strong>.<br>".$ec;
			exit;
		}
		
			try {
				$criteria=new CDbCriteria;
     			$criteria->select='max(id) as id';
				$ultima_condicion = Condicion::model()->find($criteria);
				$modelo_Observacion->observaciones = $info["Observaciones"];
				$modelo_Observacion->fecha = $info["Fecha"];
				$modelo_Observacion->gerente_comercial = $info["Gerente_Comercial"];
				$modelo_Observacion->gerente_cartera = $info["Gerente_Cartera"];
				$modelo_Observacion->gerente_general = $info["Gerente_General"];
				$modelo_Observacion->fechautorizacion = $info["Fecha"];
				$modelo_Observacion->fechautorizacion1 = $info["Fecha1"];
				$modelo_Observacion->fechautorizacion2 = $info["Fecha2"];
				$modelo_Observacion->descripcion = $info["Descripcion"];
				$modelo_Observacion->NombreAsesor = $info["Nombre_Asesor"];
				$modelo_Observacion->condicionescomerciales = $info["Condiciones_Comerciales"];
				$modelo_Observacion->correo = $info["Correo"];
				$modelo_Observacion->NombreCliente = $info["Nombre_Cliente"];
				$modelo_Observacion->condicion = $ultima_condicion["id"];
				$modelo_Observacion->estado = "Vigente";
				$modelo_Observacion->save();
			} catch (CException $e) {
				echo "Error al ingresar los valores al sistema <br>.".$e;
				exit;
			}
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
