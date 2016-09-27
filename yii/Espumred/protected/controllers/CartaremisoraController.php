<?php

class CartaremisoraController extends Controller
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
                'actions'=>array('create','view','admin','listarCiudad','listarArticulo','eliminar','update','index',
                    'listarUsuario','listarCliente','mostrarPlantilla','agregarItem','verArticulos',
                    'generarValor','generarDireccion','generarCedula','generarTelefono','generarTotal','listarEmpresas','actualizar','mostrarplantillaActualizar','generarNuevoCliente'),
                    'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="despacho"'
            ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCiudad','listarArticulo',
					'listarUsuario','listarCliente','mostrarPlantilla','agregarItem','verArticulos','eliminar',
					'generarValor','generarDireccion','generarTelefono','generarCedula','generarTotal','eliminar','listarEmpresas','actualizar','mostrarplantillaActualizar'),
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
		$model=new Cartaremisora;


		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cartaremisora']))
		{
			$model->attributes=$_POST['Cartaremisora'];
            $arrArticulos = Yii::app()->session['Articulo'];
            $arrCliente = Yii::app()->session['Cliente'];
           

      if ($model->idArticulo==""||$model->idCliente==""||$model->idUsuario==""||
        $model->Direccion==""||$model->Telefono==""||$model->Ciudad==""||
        $model->Empresa=="") {
        //echo "hay un campo requerido en blanco porfavor verificar";
      
        Yii::app()->clientScript->registerScript(1, 'alert("hay un campo requerido en blanco por favor verificar")');
        
      }else {
      
      
            if ($arrCliente[0][1]!=="na") {
              $modeloCliente = new Cliente ;
              $modeloCliente->id=$arrCliente[0][0];
              $modeloCliente->CC=$arrCliente[0][0];
              $modeloCliente->Nombre=$arrCliente[0][1];
              $modeloCliente->Apellido=$arrCliente[0][2]; 
              $modeloCliente->Telefono=$arrCliente[0][3];
              $modeloCliente->Direccion=$arrCliente[0][4];
              if ($modeloCliente->save()) {
                 echo "guardo";
              }
              

           
            }
              
           
            for ($i=0; $i <count($arrArticulos) ; $i++) { 
            	 $model->descripcion.= $arrArticulos[$i][0]."-".$arrArticulos[$i][1]."-".$arrArticulos[$i][2]."#";
                  //se recorrera el arreglo  para asignarle a la descripcion la cantidad de articulos que 
                 //seleciono el usuario
            }
           $models = Cartaremisora::model()->findAll();
           $mayor=0;

           for ($i=0; $i <count($models) ; $i++) { 
		           	if ($models[$i]['consecutivo']>$mayor) {
		           		$mayor=$models[$i]['consecutivo'];
		           	}
                     //se recorrera el arreglo  para crear el consecutivo se crea con el ultimo que este luego se 
                    //le suma una unidad
        		 
        	}
            
            $model->idCliente=$arrCliente[0][0];
           	$model->consecutivo=$mayor+1;
            //var_dump($model);
        	
			
              if($model->save())
			// // // // // //$this->redirect(array('view','id'=>$model->id));
			 	$this->redirect(array('mostrarPlantilla','id'=>$model->id));

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
      if(isset($_POST['Cartaremisora']))
        {
            $model->attributes=$_POST['Cartaremisora'];
              $arrArticulos = array();
             $j=0;
             $variable=1;
             $k=0;
             $campo="";

             for ($i=0; $i <$variable ; $i++) { 
                $variable++;
                $d=$model->descripcion[$i];
             if ($d!=="-" && $d!=="#" ) {
                     $campo.=$model->descripcion[$i];
                }                               
                if ($d==="-") {
                    $arrArticulos[$j][$k]=$campo;
                    $campo="";
                    $k++;
                 }
                 if ($d==="#") {
                  $arrArticulos[$j][$k]=$campo;
                  $campo="";
                  $j++;
                  $k=0;
                  
                }
                if (!isset($model->descripcion[$i+1])) {
                    $variable=0;
                }

               }                             

          Yii::app()->session['Articulo'] = $arrArticulos;
          
             if($model->save())
             $this->redirect(array('mostrarPlantilla','id'=>$model->id));
			 
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
		//$dataProvider=new CActiveDataProvider('Cartaremisora');

        $dataProvider = new CActiveDataProvider('Cartaremisora', array(
       'criteria' => array('order' => 'consecutivo ASC',  ),
       'pagination' => array('pageSize' => 20,))
      );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cartaremisora('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cartaremisora']))
			$model->attributes=$_GET['Cartaremisora'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cartaremisora the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cartaremisora::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}


	/**
	 * Performs the AJAX validation.
	 * @param Cartaremisora $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cartaremisora-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	/**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al cliente que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/

	   public function actionListarCliente($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(Nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Cliente::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->Nombre." ".$model->Apellido, // label for dropdown list
                'value' => $model->Nombre." ".$model->Apellido, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }

	/**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion ala ciudad que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/

	   public function actionListarCiudad($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(NombreCiudad) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Ciudad::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->NombreCiudad, // label for dropdown list
                'value' => $model->NombreCiudad, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }



    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al Articulo que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/

	   public function actionListarArticulo($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(Nombre_Articulo) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Articulos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->Nombre_Articulo, // label for dropdown list
                'value' => $model->Nombre_Articulo, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }

    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al usuario que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/

	   public function actionListarUsuario($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(Nombre) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Usuario::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->Nombre, // label for dropdown list
                'value' => $model->Nombre, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }


    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion al empresa que ingreso este dato.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarEmpresas($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(NombreEmpresa) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Empresa::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->NombreEmpresa, // label for dropdown list
                'value' => $model->NombreEmpresa, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);
    }

/**En este metodo se ejecuta la funcion agregar item se inicia una variable de sesion
y dependiendo que articulo se ingresaron busca si hay repetidos y aumenta el numero de cantidad
.*/
    public function actionAgregarItem() {
        $arrArticulos = array();
        $contador=0;
        if (isset(Yii::app()->session['Articulo'])) {
            $arrArticulos = Yii::app()->session['Articulo'];
            
        }
            for ($i=0; $i <count($arrArticulos) ; $i++) { 
                $articulo=$_POST["articulo"];
                $cantidadArticulo=$_POST["cantidad"];
                $valor=$_POST["valor"];
                $id=$_POST["id"];

                if ($id==$arrArticulos[$i][3]) {
                    //echo $cantidadArticulo;.<
                    $arrArticulos[$i][1]=$arrArticulos[$i][1]+$cantidadArticulo;
                    $contador=1;
                        echo $arrArticulos[$i][1];
                }
                
            }
            if ($contador==0) {
                    $articulo=$_POST["articulo"];
                    $cantidadArticulo=$_POST["cantidad"];
                    $valor=$_POST["valor"];
                    $id=$_POST["id"];
                    $item = array($articulo,$cantidadArticulo,$valor,$id);
                    array_push($arrArticulos, $item);
                    echo "contador 0";
                    

            }

          Yii::app()->session['Articulo'] = $arrArticulos;

        }


/**En este metodo se ejecuta la funcion generar valor metodo para buscar el valor del articulo
ya que el articulo por medio del autocompletar muestra en el nombre
.*/
        public function actionGenerarValor() {
        
        	$articulo=$_POST["articulo"];
        	$valor;
        	$models = Articulos::model()->findAll();
        	for ($i=0; $i <count($models) ; $i++) { 

        		if ($models [$i]["Nombre_Articulo"]==$articulo) {
        				$valor=($models [$i]["Valor"]);
        		}
        	}
         echo $valor;
        }

/**En este metodo se ejecuta la funcion generar total metodo para buscar el valor total del articulo
 operacion sencilla de multiplicacion de cantida*valor
.*/
         public function actionGenerarTotal() {
        	if (isset(Yii::app()->session['Articulo'])) {
            $arrArticulos = Yii::app()->session['Articulo'];
			
       		 }
       		 $Total=0;
        	for ($i=0; $i <count($arrArticulos) ; $i++) { 
        		$Total=$Total+($arrArticulos[$i][2]*$arrArticulos[$i][1]);
        	}       
         echo $Total;
        }
        
/**En este metodo se ejecuta la funcion generar Direccion metodo para buscar la Direccion del cliente
ya que esa informacion esta en el modelo del cliente
.*/
                public function actionGenerarDireccion() {
        
        	$cliente=$_POST["cliente"];
        	$nombre_cliente;
        	$models = Cliente::model()->findAll();
        	for ($i=0; $i <count($models) ; $i++) { 

        		if ($models [$i]["Nombre"]." ".$models [$i]["Apellido"]==$cliente) {
        				$nombre_cliente=($models [$i]["Direccion"]);
        				
        		}
        	}
        	
         echo $nombre_cliente;
  

        }
/**En este metodo se ejecuta la funcion generar Telefono metodo para buscar el Telefono del cliente
ya que esa informacion esta en el modelo del cliente
.*/
              public function actionGenerarTelefono() {
        
        	$cliente=$_POST["cliente"];
            $cedula=$_POST["cedula"];
        	$nombre_cliente;
        	$telefono;
        	$models = Cliente::model()->findAll();
        	for ($i=0; $i <count($models) ; $i++) { 

        		if ($models [$i]["Nombre"]." ".$models [$i]["Apellido"]==$cliente) {
        				
        				$telefono=($models [$i]["Telefono"]);
        		}
        	}

            $arrCliente = array();
            $valor="na";
            $item = array($cedula,$valor);
            array_push($arrCliente, $item);
            Yii::app()->session['Cliente'] = $arrCliente;
        
         echo $telefono;
  

        }

        /**En este metodo se ejecuta la funcion generar cedula metodo para buscar la cedula del cliente
ya que esa informacion esta en el modelo del cliente
.*/
              public function actionGenerarCedula() {
        
            $cliente=$_POST["cliente"];
            $cedula;
            $models = Cliente::model()->findAll();
            for ($i=0; $i <count($models) ; $i++) { 

                if ($models [$i]["Nombre"]." ".$models [$i]["Apellido"]==$cliente) {
                        
                        $cedula=($models [$i]["CC"]);
                }
            }

          
        
         echo $cedula;
  

        }

/*metodo para visualizar que articulos se han agregado en sesion*/
 		public function actionVerArticulos(){ 
             if (isset(Yii::app()->session['Articulo'])) {

           echo json_encode(Yii::app()->session['Articulo']);
       	 } 
			
   		 }


/* metodo para hacer el llamado ala vista mostrarplantilla.php*/
   		 public function actionMostrarPlantilla($id)
	{
		$model=new Cartaremisora;
		$this->render('mostrarPlantilla',array(
			'model'=>$this->loadModel($id),
		));
	}


    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarPlantillaActualizar($id)
    {
        $model=new Cartaremisora;
        $this->render('mostrarplantillaActualizar',array(
            'model'=>$this->loadModel($id),
        ));
    }

/*metodo para actualizar la cantidad de articulos que estan en sesion ya que en el fomulario se puede borrar 
  cualquier tipo de articulo
*/
	 public function actionActualizar() {

            $arrArticulos = Yii::app()->session['Articulo'];
            $id=$_POST["idEliminar"];
        	for ($i=0; $i <count($arrArticulos) ; $i++) { 
        		echo $id;
        		if ($arrArticulos[$i][3]."'"===$id) {
        			
        			unset($arrArticulos[$i]);//elimina el valor de la posicion enocntrada 
        			$arrArticulos = array_values($arrArticulos);//ordena el vector 	
        		}
        		
        	}   

        Yii::app()->session['Articulo'] = $arrArticulos;
      
        

        }

/*metodo para capturar los datos de los nuevos clientes
*/
         public function actionGenerarNuevoCliente() {


           Yii::app()->session['Cliente'] ="";
            $arrCliente = array();
            $cliente=$_POST["cliente"];
            $telefono=$_POST["telefono"];
            $direccion=$_POST["direccion"];
            $cedula=$_POST["cedula"];
            $nombre="";
            $apellido="";
            $identificador="0";
            $cont="0";
            $valor="1";
            $variable="0";

                       for ($i=0; $i <$valor; $i++) { 

                          if ($cliente[$i]!="*" && $cont==0) {
                            $nombre.=$cliente[$i];
                           }else{
                            if ($cliente[$i]=="*") {
                                 $cont="1";
                            }else{
                                $apellido.=$cliente[$i];
                            }
                            $cont="1";
                           

                         }
                        $valor++;
                         if (!isset($cliente[$i+1])) {
                            $valor=0;
                        }
                       
                      }

            $item = array($cedula,$nombre,$apellido,$telefono,$direccion);
            array_push($arrCliente, $item);
            Yii::app()->session['Cliente'] = $arrCliente;
            //var_dump($arrCliente);
              $modeloCliente = Cliente::model()->findAll();
              for ($i=0; $i <count($modeloCliente) ; $i++) { 
                  if ($modeloCliente[$i]["CC"]==$cedula) {
                       echo "2" ;
                  }
              }
                if (empty($cedula)) {
                   echo "1";
                }

         //    if (!empty($cedula)) {
         //                # code...
                   
         //            for ($i=0; $i <count($cliente) ; $i++) { 

         //                if ($models [$i]["CC"]==$cedula) {
                                
         //                        $identificador="1";
         //                }
         //            } 

         //        if ($identificador=="0") {
         //            for ($i=0; $i <$valor; $i++) { 

         //                  if ($cliente[$i]!="*" && $cont==0) {
         //                    $nombre.=$cliente[$i];
         //                   }else{
         //                    if ($cliente[$i]=="*") {
         //                         $cont="1";
         //                    }else{
         //                        $apellido.=$cliente[$i];
         //                    }
         //                    $cont="1";
                           

         //                 }
         //                $valor++;
         //                 if (!isset($cliente[$i+1])) {
         //                    $valor=0;
         //                }
                       
         //              }

         //              // echo $nombre."----".$apellido;


                   
         //                   $modeloCliente = new Cliente ;
         //                   $modeloCliente->id=$cedula;
         //                   $modeloCliente->CC=$cedula;
         //                   $modeloCliente->Nombre=$nombre;
         //                   $modeloCliente->Apellido=$apellido;
         //            //    echo  $models->Nombre;
         //                   $modeloCliente->Telefono=$telefono;
         //                   $modeloCliente->Direccion=$direccion;
         //                   $modeloCliente->save();
                           
                          
         //            // echo  count($cliente);
         //                $arrCliente = array();
                       
                     
                       
         //                     $item = array($nombre,$apellido);
         //                     array_push($arrCliente, $item);
         //                //var_dump($arrCliente);
         //             Yii::app()->session['Cliente'] = $arrCliente;
         //                echo "1";
         //             }  
         //             echo($identificador) ;
                      
         // }else{

         //         echo "7";
         // }


        }
          public function actionEliminar($id)
  {
    $this->loadModel($id)->delete();
    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

}//final de controlador
