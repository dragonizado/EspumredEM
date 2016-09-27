<?php

class FormacionController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','delete','agregarFormacion','cargar','actualizar','mostrarInforme','cargar',
					'verInformacion','verFormacion','eliminar','crear','cargarFormacion','tipoBloque','descuadre'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="corte"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','delete','agregarFormacion','cargar','actualizar','mostrarInforme','cargar',
					'verInformacion','verFormacion','eliminar','crear','cargarFormacion','tipoBloque','descuadre'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="T8"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','delete','agregarFormacion','cargar','actualizar','mostrarInforme','cargar',
					'verInformacion','verFormacion','eliminar','crear','cargarFormacion','tipoBloque','descuadre'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="noticorte"'
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
		$model=new Formacion;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Formacion']))
		{
					$formaciones=Yii::app()->session['formacion'];
					$models=lote::model()->findByPk($formaciones[0][1]);  
					//verifica la cantida de kilos que se pueden cortar verificar array de la funcion agregar formacion
					if ($formaciones[count($formaciones)-1][6]==$formaciones[count($formaciones)-1][7]) {

							for ($i=0; $i <count($formaciones) ; $i++) { 
						$model=new Formacion;
						$model->cod=$formaciones[$i][1].$formaciones[$i][0];
						$model->codlote=$formaciones[$i][1];
						$model->altura=$formaciones[$i][8];
						$model->ancho=$formaciones[$i][2];
						$model->largo=$formaciones[$i][3];
						$model->peso=$formaciones[$i][4];
						$model->tipo=$formaciones[$i][9];
						$fecha=date("Y/m/d");
						$model->fecha_validacion=$fecha;
						$model->consumido="No";
						$model->densidad=$models["densidad"];
						//var_dump($model->Fecha_Modificacion);
						$model->save();
						
					}
					// guarda en el lote el estado de cortado para que no aparezca en los bloques que faltan por cortar
					Yii::app()->session['formacion']="";
				    $models->cortado="Si";
				    $models->save();
					 $this->redirect(array('site/index'));
				
				
				}else{
					Yii::app()->user->setFlash('success', "Debe consumir la totalidad de espuma!");
					
					//$this->redirect(array('thing/view', 'id' => 1));
					//var_dump("jvashjsvaaghs");

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

		if(isset($_POST['Formacion']))
		{
			$model->attributes=$_POST['Formacion'];
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
		$dataProvider=new CActiveDataProvider('Formacion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Formacion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Formacion']))
			$model->attributes=$_GET['Formacion'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Formacion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Formacion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Formacion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='formacion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/* *En este metodo se ejecuta la funcion agregar formacion se inicia una variable de sesion
y dependiendo que formacion  se van guardando en un array*/
	 public function actionAgregarFormacion() {
        $arrFormacion = array();
        $arrLote=array();
        $contador=01;
        $suma=0;
        $pesoTotal=0;
        $primerSuma=0;
         //Se hace este if para verificar que no haya más registro de este lote
        if (isset(Yii::app()->session['formacion'])) {
        	  $arrFormacion = Yii::app()->session['formacion'];
        	if (empty($arrFormacion)) {
        	
        	}else{
        	   $contador=count($arrFormacion);
               $suma=$arrFormacion[$contador-1][6];
               $primerSuma=$suma;
             	$contador++;

        	}
          
 
        }
        			$arrLote =  Yii::app()->session['registro'];
                     $cod= "f".$contador;
                      $codlote=$arrLote["codLote"];
                      $cantidad=$_POST["cantidad"];
                      $ancho=$arrLote["ancho"];
                      $largo=$_POST["largo"];
                      $tipo=$_POST["tipo"];
                      $altura=$arrLote["altura"];
					               
                    for ($i=0; $i <$cantidad ; $i++) { 
                    	 $peso=($arrLote["altura"]*$ancho*$largo)*($arrLote["densidad"]/100);
                    	 $peso=round($peso, 2)*100;
                         $pesoTotal= (float) $arrLote["peso"];
                         if ($contador<10) {
                           $cod= "0".$contador;
                         }else{
                         	  $cod= $contador;
                         }
                    	 $suma=$suma+$peso;
                    	 $item = array($cod,$codlote,$ancho,$largo,$peso,$contador,$suma,$pesoTotal,$altura,$tipo);
                    	array_push($arrFormacion, $item);
                    	$contador++;
                    }
                    	
                   	if ($suma<=$pesoTotal && $suma>"0") {
                		Yii::app()->session['formacion'] = $arrFormacion;
                		$arrdecicion = array();
						array_push($arrdecicion,"noexcede");
						echo CJSON::encode($arrdecicion);
					}else{
						$arrdecicion = array();
						array_push($arrdecicion,"excede",$pesoTotal,$primerSuma,$peso);
						// $arrdecicion[0]="excede";
						// $arrdecicion[1]=$pesoTotal;
						// $arrdecicion[2]=$suma;
					echo CJSON::encode($arrdecicion);
					}
				

        }


/* *En este metodo para mostrar los contenido de la variable de sesion */
        public function actionVerFormacion(){ 
             if (isset(Yii::app()->session['formacion'])) {

           		echo json_encode(Yii::app()->session['formacion']);
       	 	} else{

    
       	 	}
			
   		 }

   		 /*metodo para actualizar la cantidad de foraciones que estan en sesion ya que en el fomulario se puede borrar 
  cualquier tipo de foraciones
*/
	 public function actionActualizar() {

            $arrformacion = Yii::app()->session['formacion'];
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

        Yii::app()->session['formacion'] = $arrformacion;
      
        

        }

        
		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	//esta funcion se usa para poder cargar los daatos del lote
	public function actionCargar($id)
	{
		$arr=array();
		Yii::app()->session['formacion']=$arr;
		$modelLote=Lote::model()->findByPk($id);
		Yii::app()->session['registro'] = $modelLote;
		$model=new Formacion;
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('create'));
		//$this->redirect('index.php?r=formacion/create',array('model'=>$model,));
		
	}


	    public function actionMostrarInforme()
    {
        $model=new Cargarespumas;
        
         $this->render('informe',array(
            'model'=>$model,
        ));
    }


    public function actionCargarFormacion() {

            $arrEspuma = array();
            $arrformacion = array();
             $arrdescargo = array();
             $id=$_POST["id"];
             $modeloLote=Lote::model()->findByPk($id);
             $modeloDescargo=Descargoespumas::model()->findAll(array('order' => 'idCargarespumas ASC'));
             $modeloFormacion=Formacion::model()->findAll(array('order' => 'cod ASC'));
             for ($i=0; $i <count($modeloFormacion) ; $i++) { 
             	if ($modeloFormacion[$i]["codlote"]==$id) {
                    		array_push($arrformacion,$modeloFormacion[$i]);
                    		
             	}
              }

                          	
             for ($i=0; $i <count($modeloDescargo) ; $i++) { 
             	if ($modeloDescargo[$i]["numeroLote"]==$id) {
             		
              		array_push($arrdescargo,$modeloDescargo[$i]);
              	
             	}
              }
              
             array_push($arrEspuma,$modeloLote,$arrformacion,$arrdescargo);
              echo CJSON::encode($arrEspuma);        
        }



/*esta funcion carga los datos de las bloque por su tipo que no se han consumido 
en su totalidad*/

        public function actionTipoBloque() {
        	  // Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1  
         $desicion=$_POST["desicion"];
         
        
         $arrEspuma = array();
         if ($desicion=="unica") {
         $fecha=$_POST["fecha"];
         $modeloCargoEspuma=Formacion::model()->findAllByAttributes(array('fecha_validacion'=>$fecha));
         echo CJSON::encode($modeloCargoEspuma);
         }else{
   		       $fechaInicio=$_POST["fechaInicio"];
   		       $fechaFinal=$_POST["fechaFinal"];
   		       $fecha=$fechaInicio;

   		       $j=1;
   	       for ($i=0; $i <$j; $i++) { 
   	 	        	 
				// // echo $nuevafecha;
   	 	       		if ($fecha==$fechaFinal) {
   	 	       			   $modeloCargoEspuma=Formacion::model()->findAllByAttributes(array('fecha_validacion'=>$fecha));
   	 	       			    for ($k=0; $k <count($modeloCargoEspuma); $k++) { 
   		       			 	 array_push($arrEspuma,$modeloCargoEspuma[$k]);
   		       			 }  	 	       			 
   		       			   echo CJSON::encode($arrEspuma);
   		       			   //var_dump($fecha);
   	 	       			$i=$j;
   		       		}else{
   		       			 $modeloCargoEspuma=Formacion::model()->findAllByAttributes(array('fecha_validacion'=>$fecha));
   		       			 for ($k=0; $k <count($modeloCargoEspuma); $k++) { 
   		       			 	 array_push($arrEspuma,$modeloCargoEspuma[$k]);
   		       			 }
   	 	       			
   	       			$j++;
			    
    	       		}
    	       	  $nuevafecha = strtotime ( '+1 day' , strtotime ( $fecha ) ) ;
			     $nuevafecha = date ( 'Y-m-j' , $nuevafecha );	
			     $fecha=$nuevafecha;	
    	       		 
   		       		
   	       }

        }
    


     
    //         //var_dump($modeloCargoEspuma);
           

        }



        /*esta funcion carga los datos de las bloque que no se han consumido 
en su totalidad*/

     public function actionDescuadre() {        
           $arrEspuma = array();
           	 $modeloFormacion=Formacion::model()->findAllByAttributes(array('consumido'=>"No"));
            //   $modeloFormacion=Formacion::model()->findAll(array('order' => 'cod ASC'));
            // $modeloDescargo=Descargoespumas::model()->findAll();
        
             
            //  	for ($j=0; $j <count($modeloFormacion) ; $j++) { 
            //  		if ($modeloFormacion[$j]['consumido']=="No") {
            //  		 array_push($arrEspuma,$modeloFormacion[$j]);
            //  		}
            //  	}


      echo CJSON::encode($modeloFormacion);
   // var_dump($modeloFormacion);
           

}





}
