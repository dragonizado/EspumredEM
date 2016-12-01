<?php

class RecuperacionController extends Controller
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
				'actions'=>array('recuperacion','update', 'view','eliminar', 'update', 'admin','listarClientes','index'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Test"'
                
			),
			array('allow',
				'actions'=>array('Recuperacion'),
				'users'=>array('')
				),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCliente','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
            ),

            array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update', 'admin','listarCliente','eliminar','index'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Revisoria"'
                            
                          
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
	public function actionRecuperacion()
	{	

		$frm_usuario = null;
		$usandpss = array(
		'MartinE'=>'123456',
		'Usuariocorte'=>'corte',
		'UsuarioFactura'=>'factura',
		'UsuarioCostos'=>'costos',
		'UsuarioEx'=>'costos',
		'ReneMorales'=>'2b3576a91563129f1713a10851ea06d2',
		'UsuarioMayorista'=>'costos',
		'Lopezl'=>'recepcion',
		'Marinl'=>'compras',
		'Wsanchez'=>'mtto',
		'Ctrujillo'=>'sistemas',
		'Rmorales'=>'admin',
		'AdrianaV'=>'humano',
		'YeidyG'=>'humano',
		'LeonardoM'=>'seguridad',
		'Sgsst'=>'seguridad',
		'AdminFacturaSistemas'=>'factura',
		'UsuarioFacturaGeneral'=>'factura',
		'DiegoEM'=>'factura',
		'Thumano'=>'humano',
		'vehiculo'=>'admin',
		'UsuarioDespachos'=>'despachos',
		'PorteriaEM'=>'porteriaestrella',
		'JavierMoreno'=>'espumas',
		'prueba'=>'admin',
		'TalentohumanoEM'=>'talentohumanoESPUMAS',
		'UsuarioFacturaEstrella'=>'factura',
		'UsuarioFacturaPoblado'=>'factura',
		'Crua'=>'almacen',
		'CarlosTrujillo'=>'espumas',
		'FacturaCompras'=>'compras',
		'Herramientas'=>'mtto',
		'Test'=>'987654321',
		'Gcomercial'=>'98.565.310',
		'Gcartera'=>'98.587.458',
		'Ggeneral'=>'71.786.696',
		'Nsanchez'=>'SecrComercial',
		'Wauditoria'=>'wilmerauditoria',
		'recepcionEM'=>'RecepcionEM',
		'KATHEAH'=>'JULIETA0116',
		'JARBOLEDA'=>'RAQUEL2016',
		'JBAENA'=>'CLIG23TH',
		'OSERNA'=>'ESPUMASED40',
		'AORTIZ'=>'ORTIZ1234',
		'ACORTES'=>'CORTES123',
		'APINEDA'=>'DRESER123',
		'CCHAURA'=>'TONY123',
		'CDELRIO'=>'PELUCHE2016',
		'JHURTADO'=>'MAVAL0512',
		'GARBELAEZ'=>'PICOROCHO',
		'NCASTRO'=>'15.450.198',
		'ESANCHEZ'=>'ALEJUAN',
		'GCARDENAS'=>'GUSTAVO0418',
		'EGUTIERREZ'=>'ESPUMAS2015',
		'ServClienteEM'=>'ServicioalCliente');


echo $usandpss['Test'];

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

		if(isset($_POST['Clientes']))
		{
			$model->attributes=$_POST['Clientes'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->cod));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}    
	//--------->  //---------->

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
	 * Listar todos los modelos.
	 */
	public function actionIndex($term)
	{

	 $dataProvider = new CActiveDataProvider('Clientes', array(
       'criteria' => array('order' => 'Nombre ASC',  ),
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
		$link = "clientes";
		$Tabla = "";
		$AllClients = Clientes::model()->FindAll();
		foreach ($AllClients as $value) {
					$Tabla .= '<tr>'.
							 	'<td>'.$value->cod.'</td>'.
							 	'<td>'.$value->nombreCliente.'</td>'.
							 	'<td>'.
							 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->cod.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>'.
							 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/update&id='.$value->cod.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Actualizar"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>'.
							 		'<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/eliminar&id='.$value->cod.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></button></a>'.
							 	'</td>'.
							 '</tr>';
						}
		// $model=new Clientes('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['Clientes']))
		// 	$model->attributes=$_GET['Clientes'];

		// $this->render('admin',array(
		// 	'model'=>$model,
		// ));
		$this->render('admin',array(
			'Tabla'=>$Tabla,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cliente the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Clientes::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='clientes-form')
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
	
}
