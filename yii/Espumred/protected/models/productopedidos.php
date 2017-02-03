<?php 
class Productopedidos extends CActiveRecord
{
	public function tablename(){
		return 'tbl_productos';
	}

	public function rules()
	{
		return array(

		array('idtbl_Productos,descripcion', 'required'),	

		array('idtbl_Productos', 'numerical', 'integerOnly'=>true),			
		

		array('idtbl_Productos,descripcion', 'safe', 'on'=>'search'), 				 
		// array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),

		);
		
	}


	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		return array(
			'Productos' => array(self::HAS_MANY, 'pedidos', 'tbl_Productos_idtbl_Productos'),

		);
	}


	public function attributeLabels()
	{
		return array(
			`idtbl_Productos` => 'Identificacion',
		    `descripcion` => 'Codigo del cliente',	
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