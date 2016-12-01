<?php

class PrestamosController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
			), array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create','view','admin','listarCiudad','listarArticulo',
                    'listarUsuario','listarCliente','mostrarPlantillaPrestamos','agregarItem','verArticulos',
                    'generarValor','generarDireccion','generarTelefono','generarTotal','listarEmpresas','actualizar'),
                'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="despacho"'
            ),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCiudad','listarArticulo',
					'listarUsuario','listarCliente','mostrarPlantillaPrestamos','agregarItem','verArticulos',
					'generarValor','generarDireccion','generarTelefono','generarTotal','eliminar','listarEmpresas','actualizar'),
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
		$model=new Prestamos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Prestamos']))
		{
			$model->attributes=$_POST['Prestamos'];

			 $arrArticulos = Yii::app()->session['Articulo'];
            for ($i=0; $i <count($arrArticulos) ; $i++) {
            	 $model->descripcion.= $arrArticulos[$i][0]."-".$arrArticulos[$i][1]."-".$arrArticulos[$i][2]."#";
            	    //se recorrera el arreglo  para asignarle a la descripcion la cantidad de articulos que
                 //seleciono el usuario
            }
           $models = Prestamos::model()->findAll();
           $mayor=0;

           for ($i=0; $i <count($models) ; $i++) {
		           	if ($models[$i]['consecutivo']>$mayor) {
		           		$mayor=$models[$i]['consecutivo'];
		           	}
        		  //se recorrera el arreglo  para crear el consecutivo se crea con el ultimo que este luego se
                    //le suma una unidad
        	}

        	$model->consecutivo=$mayor+1;


			if($model->save())
				//$this->redirect(array('view','id'=>$model->id));
				$this->redirect(array('mostrarPlantillaPrestamos','id'=>$model->id));
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

		if(isset($_POST['Prestamos']))
		{

		$model->attributes=$_POST['Prestamos'];
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
             $this->redirect(array('mostrarPlantillaPrestamos','id'=>$model->id));


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

		  $dataProvider = new CActiveDataProvider('Prestamos', array(
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
		$model=new Prestamos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Prestamos']))
			$model->attributes=$_GET['Prestamos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Prestamos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Prestamos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Prestamos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='prestamos-form')
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

/*metodo para visualizar que articulos se han agregado en sesion*/

 		public function actionVerArticulos(){
             if (isset(Yii::app()->session['Articulo'])) {

           echo json_encode(Yii::app()->session['Articulo']);
       	 }

   		 }

/* metodo para hacer el llamado ala vista mostrarplantillaPrestamos.php*/
   		 public function actionMostrarPlantillaPrestamos($id)
	{
		$model=new Cartaremisora;
		$this->render('mostrarPlantillaPrestamos',array(
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


    public function actionEliminar($id)
  {
    $this->loadModel($id)->delete();
    $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
  }

}
