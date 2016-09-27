<?php

class CargarespumasController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','eliminar','mostrarInforme','cargar',
					'agregarEspumas','verCargarEspumas','listarFormacion','actualizar','tipoBloque','descuadre'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="corte"'
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
		$model=new Cargarespumas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cargarespumas']))
		{
			$CargarEspumas=Yii::app()->session['CargarEspumas'];
			for ($i=0; $i <count($CargarEspumas) ; $i++) { 
				$model=new Cargarespumas;
				$model->id=$CargarEspumas[$i][4].$CargarEspumas[$i][0];
				$model->altura=$CargarEspumas[$i][10];
				$model->ancho=$CargarEspumas[$i][2];
				$model->largo=$CargarEspumas[$i][1];
				$model->densidad=$CargarEspumas[$i][9];
				$model->cantidadKilo=$CargarEspumas[$i][6];
				$model->codlote=$CargarEspumas[$i][11];
				$model->tipo=$CargarEspumas[$i][12];
					$model->save();
				
				}
					$arrayName = array();
					Yii::app()->session['CargarEspumas']=$arrayName;
					$this->redirect(array('create','id'=>$model->id));

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

		if(isset($_POST['Cargarespumas']))
		{
			$model->attributes=$_POST['Cargarespumas'];
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
		$dataProvider=new CActiveDataProvider('Cargarespumas');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cargarespumas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cargarespumas']))
			$model->attributes=$_GET['Cargarespumas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cargarespumas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cargarespumas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cargarespumas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cargarespumas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	    public function actionMostrarInforme()
    {
        $model=new Cargarespumas;
        
         $this->render('informe',array(
            'model'=>$model,
        ));
    }
/*esta funcion carga los datos de las espuma como lote, formacion, cantidad de bloque y descargo de espuma*/
     public function actionCargar() {


           // Yii::app()->session['Cliente'] ="";
            $arrEspuma = array();
            $id=$_POST["id"];
             $modeloCargoEspuma=Cargarespumas::model()->findByPk($id);
             $modeloLote=Lote::model()->findByPk($modeloCargoEspuma["codlote"]);
             $modeloDescargo=Descargoespumas::model()->findAll();
             $modeloFormacion=Formacion::model()->findAll();
             $contador="4";
             array_push($arrEspuma,$modeloCargoEspuma,$modeloLote);
             $rest = substr($id, 0, -2);  
             for ($i=0; $i <count($modeloFormacion) ; $i++) { 
             	if ($modeloFormacion[$i]["cod"]==$rest) {
                   		array_push($arrEspuma,$modeloFormacion[$i]);
                   		$i=count($modeloFormacion);
             	}
              }

              for ($i=0; $i <count($modeloDescargo) ; $i++) { 
             	if ($modeloDescargo[$i]["idCargarespumas"]==$id) {
             		
              		$contador++;
              	
             	}
              }
              
            	array_push($arrEspuma,$contador);
             for ($i=0; $i <count($modeloDescargo) ; $i++) { 
             	if ($modeloDescargo[$i]["idCargarespumas"]==$id) {
             		
              		array_push($arrEspuma,$modeloDescargo[$i]);
              	
             	}
              }

              echo CJSON::encode($arrEspuma);
            //var_dump($modeloCargoEspuma);
           

        }

/*esta funcion carga los datos de las bloque por su tipo que no se han consumido 
en su totalidad*/

        public function actionTipoBloque() {
        	  // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
        date_default_timezone_set('UTC');
        //Imprimimos la fecha actual dandole un formato
       

          
           $arrEspuma = array();
             $modeloCargoEspuma=Cargarespumas::model()->findAll();
             for ($i=0; $i <count($modeloCargoEspuma) ; $i++) { 
             	$rest = substr($modeloCargoEspuma[$i]["Fecha_Creacion"], 0, -9);
             	
             	if (date("Y-m-d")==$rest) {
             	
                    array_push($arrEspuma,$modeloCargoEspuma[$i]);
             	}

             }



      echo CJSON::encode($arrEspuma);
    //         //var_dump($modeloCargoEspuma);
           

        }



        /*esta funcion carga los datos de las bloque que no se han consumido 
en su totalidad*/

     public function actionDescuadre() {        
           $arrEspuma = array();
             $modeloCargoEspuma=Cargarespumas::model()->findAll();
             $modeloDescargo=Descargoespumas::model()->findAll();
             for ($i=0; $i <count($modeloCargoEspuma) ; $i++) { 
             	$suma=0;
             	$cont=0;
             	$resta=0;
             	for ($j=0; $j <count($modeloDescargo) ; $j++) { 
             		if ($modeloDescargo[$j]['idCargarespumas']==$modeloCargoEspuma[$i]['id']) {
             		$suma=$suma+$modeloDescargo[$j]['cantidadConsumida'];
             		$cont=1;
             		}
             	}
          
             	if ((float) $suma<(float) $modeloCargoEspuma[$i]['cantidadKilo']) {
             		$resta=$modeloCargoEspuma[$i]['cantidadKilo']-$suma;
             		$modeloCargoEspuma[$i]["cantidadKilo"]=$resta;
             		  array_push($arrEspuma,$modeloCargoEspuma[$i]);
             	}

             	


             }



      echo CJSON::encode($arrEspuma);
    //         //var_dump($modeloCargoEspuma);
           

}


        	/* *En este metodo se ejecuta la funcion agregar formacion se inicia una variable de sesion
y dependiendo que formacion  se van guardando en un array*/
	 public function actionAgregarEspumas() {
        $arrEspumas = array();
   		$contador=01;
        $suma=0;
        $pesoTotal=0;
        $primerSuma=0;
        if (isset(Yii::app()->session['CargarEspumas'])) {
            $arrEspumas = Yii::app()->session['CargarEspumas'];
            if (empty($arrEspumas)) {
        	
        	}else{
        	   $contador=count($arrEspumas);
               $suma=$arrEspumas[$contador-1][7];
               $primerSuma=$suma;
             	$contador++;

        	}
            
        }
        		$largo= $_POST["largo"];
                $ancho=$_POST["ancho"];
                $cantidad=$_POST["cantidad"]; 
                $cod=$_POST["cod"];
                $tipo=$_POST["tipo"];
        		$modeloFormacion=Formacion::model()->findByPk($cod);
          		$modeloLote=lote::model()->findByPk($modeloFormacion["codlote"]);
          		

                for ($i=0; $i <$cantidad ; $i++) { 

                	$peso=($largo*$ancho*$modeloLote["altura"])*($modeloLote["densidad"]);
                	 // $peso=round($peso, 2)*100;
           			$pesoTotal=(float)$modeloFormacion["peso"];
          		
                     if ($contador<10) {
                           $id= "0".$contador;
                         }else{
                         	  $id= $contador;
                         }
                     $suma=$suma+$peso;
                     $item = array($id,$largo,$ancho,$cantidad,$cod,$contador,$peso,$suma,$pesoTotal,
                     	$modeloLote["densidad"],$modeloFormacion["altura"],$modeloFormacion["codlote"],$tipo);
                     array_push($arrEspumas, $item);
                     $contador++;
                }

                if ($suma<=$pesoTotal) {
                		Yii::app()->session['CargarEspumas'] = $arrEspumas;
                		$arrdecicion = array();
						array_push($arrdecicion,"noexcede");
						echo CJSON::encode($arrdecicion);
					}else{
						$arrdecicion = array();
						array_push($arrdecicion,"excede",$pesoTotal,$primerSuma,$peso,$suma);
						// $arrdecicion[0]="excede";
						// $arrdecicion[1]=$pesoTotal;
						// $arrdecicion[2]=$suma;
					echo CJSON::encode($arrdecicion);
					}
				
          		


        }


/* *En este metodo para mostrar los contenido de la variable de sesion */
        public function actionVerCargarEspumas(){ 
             if (isset(Yii::app()->session['CargarEspumas'])) {

           echo json_encode(Yii::app()->session['CargarEspumas']);
       	 } 
			
   		 }


   		     /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al municipio que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarFormacion($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(codLote) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Formacion::model()->findAll($criteria);
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

     public function actionActualizar() {

            $arrformacion = Yii::app()->session['CargarEspumas'];
            $cod=$_POST["idEliminar"];
        	for ($i=0; $i <count($arrformacion) ; $i++) { 
        		echo $cod;
        		if ($arrformacion[$i][0]==$cod) {
        			unset($arrformacion[$i]);//elimina el valor de la posicion enocntrada 
        			$arrformacion = array_values($arrformacion);//ordena el vector 	
        		}
        		
        	}   

        
        	for ($i=0; $i <count($arrformacion) ; $i++) { 
        		if ($i<9) {
        		$arrformacion[$i][0]="0".($i+1);	
        		}else{
        			$arrformacion[$i][0]=$i+1;	

        		}       		
        	}   

        Yii::app()->session['CargarEspumas'] = $arrformacion;
      
        

        }

	public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

}
