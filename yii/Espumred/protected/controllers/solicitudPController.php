<?php

class solicitudPController extends Controller
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
            //permisos de Revisoria
             array('allow',
            'actions'=>array('view','admin','GenerarExcel','detalles'),
				    'users'=>array('*'),
                     'expression'=>'Yii::app()->user->rol==="Revisoria"'

			),
             //permisos de Asesor
            array('allow', // Permite al usuario autenticado a realizar "crean" y acciones "actualización"
				'actions'=>array('create','view', 'admin','send','Test',
					'buscar','mostrarError','regresar','centro','Enviar','mail','updateTodo','Upload','detalles','ListarClientes','ListarClientescod','ListarProductos','ListarCodProductos','AjaxPageControl', 'Ajaxcalculator','Consultid','UpdateAtrr'),
				    'users'=>array('*'),
                    'expression'=>'Yii::app()->user->rol==="Asesor" or Yii::app()->user->rol==="Test"'
            ),


			array('deny',// deny all users
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


    public function actionRev($id)
    {

      $this->render('rev',array(
			'model'=>$this->loadModel($id),
		));

    }

    public function actionUpload(){
		$model= new Observaciones;
		$this->render('upload',array(
			'model'=>$model,
		));
	}


	 public function actionCreate()
	 {


	   }

     public function actionUpdateAtrr(){
      if(isset($_GET['Tajax']) && $_GET['Tajax'] === 'Dragonizado'){
        if($_GET['dens'] != "" && $_GET['anch'] != "" && $_GET['larg'] != "" && $_GET['cali'] != ""){
          $model = Productopedidos::model()->find(array("condition"=>"idtbl_Productos = '".$_GET['cod']."'"));
          $model->ancho = $_GET['anch'];
          $model->largo = $_GET['larg'];
          $model->calibre = $_GET['cali'];
          $model->densidad = $_GET['dens'];
          try {
            $model->save();
            echo json_encode("Se han guardado correctamente");
          } catch (Exception $e) {
            echo json_encode("No se pudo guardar los atributos del producto");
          }
          
        }else{
          echo "Hay campos sin llenar";
        }
      }else{
        echo "<span style='color:red; font-size:24;'>ERROR ACCESO DENEGADO.</span> <br> Se ha realizado una solicitud desconocida para el servidor.";
      }
     }

       public function actionMail()
       {
       		if(isset($_POST['Formyiis'])){
       			$this->renderPartial('page2');
       		}else{
       			echo "No vienes del formulario de registro.";
       		}

        }

        public function actionAjaxPageControl(){
        	if(isset($_GET["Tajax"])){
        		if($_GET["Tajax"] === "Dragonizado"){
              $response = array();
        			if($_GET["type"] === "1"){
        				$response = array("formulario" => $this->frmidproduct(),"frmhtml" => $this->frmEspumas());
                echo json_encode($response);
        			}else if($_GET["type"] === "2"){
        				$response = array("formulario" => $this->frmidproduct(),"frmhtml" => $this->frmColchones());
                echo json_encode($response);
        			}else if($_GET["type"] === "3"){
        				$response = array("formulario" => $this->frmidproduct(),"frmhtml" => $this->frmMuebles());
                echo json_encode($response);
        			}else if($_GET["type"] === "4"){
        				$response = array("formulario" => $this->frmidproduct(),"frmhtml" => $this->frmOtros());
                echo json_encode($response);
        			}else if($_GET["type"] === "0"){
                echo json_encode("alert('Valor incorrecto en el campo Tipo de Pedido, recarga la pagina para solicionar el problema.')");
        			}else{
        				echo "<span style='color:red; font-size:24;'>ERROR 0000.</span> <br> Se ha alterado la estructura HTML, el servidor no puede procesar esta solicitud.";
        			}
        		}else{
        			echo "<span style='color:red; font-size:24;'>ERROR 500.</span> <br> Se ha realizado una solicitud desconocida para el servidor.";
        		}
        	}else{
        		echo "<span style='color:red; font-size:24;'>ERROR ACCESO DENEGADO.</span> <br> Se ha realizado una solicitud desconocida para el servidor.";
        	}

        }

				public function actionConsultid(){
					$model = new Pedidos;
					$criteria = new CDbCriteria;
					if(Pedidos::model()->findAll())
					{
						$criteria->select='max(idtbl_pedidos) AS idtbl_pedidos';
						$consul = $model->model()->find($criteria);
						return $consul["idtbl_pedidos"] + 1;
					}else{
						$criteria->select='max(idtbl_pedidos) AS idtbl_pedidos';
						$consul = $model->model()->find($criteria);
						return $consul["idtbl_pedidos"] + 1;
					}

				}

        public function actionAjaxcalculator(){
          if (isset($_GET["Tajax"])) {
            if ($_GET["Tajax"] === "Dragonizado") {
              if (isset($_GET["term"]) && isset($_GET["V"])) {
                setlocale(LC_MONETARY, 'en_US');
                $cadena = $_GET["term"];
                $var_id = $_GET["V"];
                $consul = Productopedidos::model()->findAll(array("condition"=>"idtbl_Productos = '".$var_id."'"));
                $cadena_xplode = explode(" ", $cadena);
                if($cadena_xplode[0] === "LAM"){
                  $densidad = str_replace(",", ".",$consul[0]["densidad"]);
                  $ancho = str_replace(",", ".",$consul[0]["ancho"]);
                  $largo =  str_replace(",", ".",$consul[0]["largo"]);
                  $calibre = str_replace(",", ".",$consul[0]["calibre"]);
                  $valor_kilo = $_GET["vlk"];
                  $cantidad = $_GET["cant"];
                  $por_descuento = $_GET["por_des"];
                  $valor_unitario = $this->calcularValor_unitario($valor_kilo,$densidad,$ancho,$largo,$calibre);
                  $valor_unitariof = money_format('%!.3n', $valor_unitario);
                  $descuento = $this->calcularValor_descuento($valor_unitario,$cantidad,$por_descuento);
                  $descuentof = money_format('%!.3n', $descuento) ;
                  $valor_total_p = $this->calcularValor_total($valor_unitario,$cantidad,$descuento);
                  $valor_total_pf = money_format('%!.3n', $valor_total_p);
									$response = array(
										"valor_unitario"=>$valor_unitario,
                    "valor_descuento"=>$descuento,
                    "valor_total"=>$valor_total_p,
                    //Valor de money_format
                    "valor_unitariof"=>$valor_unitariof,
										"valor_descuentof"=>$descuentof,
										"valor_totalf"=>$valor_total_pf,
                    //fin del valor money_format
										"valor_densidad"=>$densidad,
										"valor_ancho"=>$ancho,
										"valor_largo"=>$largo,
										"valor_calibre"=>$calibre,);
									echo json_encode($response);

                }else if($cadena_xplode[0] === "E.CON"){
                    echo "No hay formulas asociadas a esta solicitud.";
                }else{
                  $valor_unitario = $_GET["vuni"];
                  $cantidad = $_GET["cant"];
                  $por_descuento = $_GET["por_des"];
                  $densidad = "Null";
                  $ancho = "Null";
                  $largo =  "Null";
                  $calibre = "Null";
                  $valor_unitariof = money_format('%!.3n', $valor_unitario);
                  $descuento = $this->calcularValor_descuento($valor_unitario,$cantidad,$por_descuento);
                  $descuentof = money_format('%!.3n', $descuento);
                  $valor_total_p = $this->calcularValor_total($valor_unitario,$cantidad,$descuento);
                  $valor_total_pf = money_format('%!.3n', $valor_total_p);
                  $response = array(
                    "valor_unitario"=>$valor_unitario,
                    "valor_descuento"=>$descuento,
                    "valor_total"=>$valor_total_p,
                    //Valor de money_format
                    "valor_unitariof"=>$valor_unitariof,
                    "valor_descuentof"=>$descuentof,
                    "valor_totalf"=>$valor_total_pf,
                    //fin del valor money_format
                    "valor_densidad"=>$densidad,
                    "valor_ancho"=>$ancho,
                    "valor_largo"=>$largo,
                    "valor_calibre"=>$calibre,);
                  echo json_encode($response);
                }

            }else{
                echo "<span style='color:red; font-size:24;'>ERROR 0000.</span> <br> El servidor no puede procesar esta solicitud, porque no se pudo validad el origen de la misma.";
              }
            }else{
              echo "<span style='color:red; font-size:24;'>ERROR 500.</span> <br> Se ha realizado una solicitud desconocida para el servidor.";
            }
          }else{
           echo "<span style='color:red; font-size:24;'>ERROR ACCESO DENEGADO.</span> <br> Se ha realizado una solicitud desconocida para el servidor.";
          }

        }

        public function calcularValor_unitario($vk,$den,$anc,$lar,$cal){
          $valor_kilo = $vk;
          $valor_densidad = $den;
          $valor_ancho = $anc;
          $valor_largo = $lar;
          $valor_calibre = $cal;
          $valor_total = $valor_kilo * $valor_densidad * $valor_ancho * $valor_largo * $valor_calibre;
          return $valor_total;
        }

        public function calcularValor_descuento($vlunit,$can,$pordes){
          $valor_unitario = $vlunit;
          $valor_cantidad = $can;
          $valor_descuento = $pordes;
					$op1 = $valor_unitario * $valor_cantidad;
          $valor_total = $op1 * $valor_descuento / 100;
          return $valor_total;
        }

        public function calcularValor_total($vu,$can,$des){
          $valor_unitario = $vu;
          $valor_cantidad = $can;
          $valor_descuento = $des;

          $valor_total = $valor_unitario * $valor_cantidad - $valor_descuento;

          return $valor_total;
        }


        public function actionListarClientescod($term) {

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
                'id' => $model->nombreCliente, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);

    }
    public function actionListarClientes($term) {

        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreCliente) like LOWER(:term) order by 'nombreCliente' ASC";
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

    public function actionListarProductos($term) {

        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(descripcion) like LOWER(:term) order by 'descripcion' ASC";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = productopedidos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->descripcion, // label for dropdown list
                'value' => $model->descripcion, // value for input field
                'id' => $model->idtbl_Productos, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);

    }

    public function actionListarCodProductos($term) {

        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(idtbl_Productos) like LOWER(:term) order by 'idtbl_Productos' ASC";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = productopedidos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
            $arr[] = array(
                'label' => $model->descripcion, // label for dropdown list
                'value' => $model->idtbl_Productos, // value for input field
                'id' => $model->idtbl_Productos, // return valufrom autocomplete
            );
        }
        echo CJSON::encode($arr);

    }

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */

//--------------------------------------------------------------------//

	public function actionUpdate($id)
	{


		$this->render('update',array(
			'model'=>$model,

		));
	}
//---------------------------------------------------------------------

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

		$dataProvider = new CActiveDataProvider('Observaciones', array(
       'criteria' => array('order' => 'condicionescomerciales ASC'),

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


		$this->render('admin',array(
			'allobservaciones'=>$allobservaciones,

		));
	}




	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionempleado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Observaciones::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'La pagina solicitada no exite.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionempleado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='observaciones-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    //funcion para hacer envio directo a correo electronico  //funcion  //
	public function actionUploadProfilePicture() {
			$this->renderPartial('formato');
	     }

 public function actionTest(){
 	// $this->actionUploadProfilePicture();
 	$this->render('form2');
 	// $this->renderPartial('page');
 }








//funcion para envio de correo
    public function actionSend($id)

	{
		$this->render('send',array(
			'model'=>$this->loadModel($id),
		));

    }


	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view
	public function actionBuscar()
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];

		//funcion original
		 if ($arrBusquedad[1]=="cod") {
		 	 	 $modelEmpleado=Observaciones::model()->findByPk($arrBusquedad[0]);
		 	 	if (!empty($modelEmpleado)) {
		 	 // $model=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array( //--->definir variable

                    'criteria' => array(
                    'condition' => 'id ="' .$arrBusquedad[0]. '"',

                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
            }else{
						$this->redirect(array('Observaciones/mostrarError'));
					};
		 }else{
		 	$id="";
		 		$model=Condicionescomerciales::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) {
		 		  if ($model[$i]["nombreCliente"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cod"];

		 			}

		 		};
		 		 $modelEmpleado=Observaciones::model()->findByPk($id);
		 	if (!empty($modelEmpleado)) {

		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(  //------>definir variable

                    'criteria' => array(
                    'condition' => 'condicionescomerciales ="' .$id. '"',

                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
				}else{
						$this->redirect(array('Observaciones/mostrarError'));
					};

		 }


		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));

	}

    //funciones para renderizar los campos del formulario dependiendo el pedido.
    //ids de los campos del formulario (grupos incluyendo labels).
    // numero de orden = group-no
    // codigo producto = group-cp
    // descripcion = group-de
    // cantidad = group-ca 
    // valor kilo = group-vk
    // porcentaje descuento = group-pd
    // valor descuento = group-vd
    // valor unitario = group-vu
    // valor total = group-vt
    // fecha de entrega = group-fe


    public function frmEspumas(){
      $responseespumas = array("disabled"=>array('value_unitf','value_descountf','amountf'),"oculto"=>array('value_unit','value_descount','amount'));
      return $responseespumas;
    }

    public function frmColchones(){
    	$responsecolchones = array("disabled"=>array('value_descountf','amountf'),"oculto"=>array('group-vk','value_descount','value_unitf','amount'));
      return $responsecolchones;
    }

    public function frmMuebles(){
    	$responsemueble = array("disabled"=>array('value_descountf','amountf'),"oculto"=>array('group-vk','value_descount','value_unitf','amount'));
      return $responsemueble;
    }

		public function frmidproduct(){
			return '<span id="n_ord_p" class="hidden">'.$this->actionConsultid().'</span>';
		}


    public function frmOtros(){
    	$responseotros = array("oculto"=>array('group-vk','value_unitf','value_descountf','amountf'));
      return $responseotros;
    }







      /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Observaciones;

         $this->render('error',array(
            'model'=>$model,
        ));
    }


}
