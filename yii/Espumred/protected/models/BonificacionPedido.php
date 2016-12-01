<?php 
class BonificacionPedido extends CActiveRecord
{
	public function tablename(){
		return 'tbl_Producto';
	}

	public function rules()
	{
		return array(

		array('idtbl_Bonificacion', 'required'),	

		array('Codigo,Cantidad', 'numerical', 'integerOnly'=>true),			
		
		// array('idtbl_Productos,descripcion', 'safe', 'on'=>'search'), 				 
		// array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),
		);
		
	}


	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		return array(
			'Bonificacion' => array(self::HAS_MANY, 'pedidos', 'tbl_Bonificacion_idtbl_Bonificacion'),
		);
	}


	public function attributeLabels()
	{
		return array(
			`idtbl_Bonificacion` => 'Identificacion',
		    `Codigo` => 'Codigo del cliente',	
		    `Cantidad` => 'Cantidad',	
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