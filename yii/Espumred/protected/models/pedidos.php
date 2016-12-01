<?php 
class pedidos extends CActiveRecord
{
	public function tablename(){
		return 'tbl_pedidos';
	}

	public function rules()
	{
		return array(

		array('
			idtbl_pedidos,
			Cod_Cliente,
			tbl_Bonificacion_idtbl_Bonificacion,
			tbl_Productos_idtbl_Productos,
			Cantidad,
			Val_Unitario,
			Val_Kilo,
			Por_Descuento,
			Val_Descuento,
			Val_Total,
			Fecha_Entrega
			', 'required'),	

		array('
			idtbl_pedidos,
			Cod_Cliente,
			tbl_Bonificacion_idtbl_Bonificacion,
			tbl_Productos_idtbl_Productos,
			Cantidad,
			Por_Descuento,
			Val_Total
			', 'numerical', 'integerOnly'=>true),			
		

		array('idtbl_pedidos,
			Cod_Cliente,
			tbl_Bonificacion_idtbl_Bonificacion,
			tbl_Productos_idtbl_Productos,
			Cantidad,
			Val_Unitario,
			Val_Kilo,
			Por_Descuento,
			Val_Descuento,
			Val_Total,
			Fecha_Entrega', 'safe', 'on'=>'search'), 				 
		// array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),

		);
		
	}


	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		return array(
			'Productos0' => array(self::BELONGS_TO, 'productopedidos', 'tbl_Productos_idtbl_Productos'),
			'Condicionescomerciales0' => array(self::BELONGS_TO, 'Condicionescomerciales', 'condicionescomerciales'),

		);
	}


	public function attributeLabels()
	{
		return array(
			`idtbl_pedidos` => 'Identificacion',
		  `Cod_Cliente` => 'Codigo del cliente',
		  `Obs_Entrega` => 'Observacion del cliente',
		  `tbl_Bonificacion_idtbl_Bonificacion` => 'Bonificacion',
		  `tbl_Productos_idtbl_Productos` => 'Producto',
		  `Descripcion` => 'Descripcion',
		  `Cantidad` => 'Cantidad',
		  `Val_Unitario` => 'Valor Unitario',
		  `Val_Kilo` => 'Valor Kilo',
		  `Por_Descuento` => 'Porcentaje Descuento',
		  `Val_Descuento` => 'Valor descuento',
		  `Val_Total` => 'Valor total',
		  `Fecha_Entrega` => 'Fecha de entrega',
			
		);
	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    //--------------Funcion behaviors para ajustar hora en tiempo real------------//


 //           public function behaviors()
	// {
	//          return array(
	//              'CTimestampBehavior' => array(
	//               'class' => 'zii.behaviors.CTimestampBehavior',
	              
	//               //-------------------------------------//
	//                'createAttribute' => 'fecha',	               
	//                'updateAttribute' => 'fecha',
	                
	//                'setUpdateOnCreate' => true,
	//             ),
	//       );
	// }

}

 ?>