<?php


class Observaciones extends CActiveRecord
{
 
	/**
	 * @return string the associated database table name
	 */

	public function tableName()
	{
		return 'observaciones';//.... aqui viene (;)......
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(

		//array('id', 'required'),          //es comentario pero se va a activar  // //-----------		
		array('gerente_comercial, gerente_cartera, gerente_general, correo, fecha, NombreCliente, NombreAsesor,fechautorizacion, fechautorizacion1, fechautorizacion2', 'length', 'max'=>45),				
		array('observaciones', 'length', 'max'=>900),

		// array('fecha, fechautorizacion, fechautorizacion1, fechautorizacion2', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
		array('id, observaciones, gerente_comercial, gerente_cartera, gerente_general, fechautorizacion,
			fechautorizacion1,fechautorizacion2 correo, fecha, codigo, NombreAsesor', 'safe', 'on'=>'search'), 				 
		// array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),

		);
		
	}
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		return array(
			'descripcion0' => array(self::BELONGS_TO, 'Descripcion', 'descripcion'),
			'Condicionescomerciales0' => array(self::BELONGS_TO, 'Condicionescomerciales', 'condicionescomerciales'),
			'condicion0' => array(self::BELONGS_TO, 'Condicion', 'condicion'),
			'gerentecomercial0' => array(self::BELONGS_TO, 'Gerente', 'gerente_comercial'),
			'gerentecartera0' => array(self::BELONGS_TO, 'Gerente', 'gerente_cartera'),
			'gerentegeneral0' => array(self::BELONGS_TO, 'Gerente', 'gerente_general'),

		);
	}
		
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID', //se pondra minuscula pero es en mayuscula ID
			'fecha' => 'Fecha',
			'gerente_comercial' => 'Gerente_Comercial',
			'gerente_cartera' => 'Gerente_Cartera',
			'gerente_general' => 'Gerente_General',
			'fechautorizacion' => 'Fecha Autorizacion',
			'fechautorizacion1' => 'Fechautorizacion1',
			'fechautorizacion2' => 'Fechautorizacion2',
			'correo' => 'Correo Electronico',
			'NombreCliente' => 'Nombre Cliente',
			'NombreAsesor'=>'NombreAsesor',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		
		$criteria->compare('id',$this->id,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('gerente_comercial',$this->gerente_comercial,true);
		$criteria->compare('gerente_cartera',$this->gerente_cartera,true);
		$criteria->compare('gerente_general',$this->gerente_general);
		$criteria->compare('fechautorizacion',$this->fechautorizacion,true);
		$criteria->compare('fechautorizacion1',$this->fechautorizacion1,true);
		$criteria->compare('fechautorizacion2',$this->fechautorizacion2,true);
		$criteria->compare('NombreCliente',$this->NombreCliente,true);
		$criteria->compare('NombreAsesor',$this->NombreAsesor,true);


		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionempleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    //--------------Funcion behaviors para ajustar hora en tiempo real------------//


           public function behaviors()
	{
	         return array(
	             'CTimestampBehavior' => array(
	              'class' => 'zii.behaviors.CTimestampBehavior',
	              
	              //-------------------------------------//
	               'createAttribute' => 'fecha',	               
	               'updateAttribute' => 'fecha',
	                
	               'setUpdateOnCreate' => true,
	            ),
	      );
	}
}