<?php

/**
 * This is the model class for table "facturacion".
 *
 * The followings are the available columns in table 'facturacion':
 * @property string $id
 * @property string $provedor
 * @property string $numeroFactura
 * @property string $valorFactura
 * @property string $consecutivo
 * @property string $idUsuario
 * @property string $observacion
 * @property string $estado
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
  * @property string $Fecha_Vencimiento
 * @property string $Fecha_Envio
  * @property string $Fecha_Pagado
  * @property string $correoelectronico
 */
class Facturacion extends CActiveRecord
{
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'facturacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),
			array('id, provedor, numeroFactura, valorFactura, consecutivo, idUsuario, estado,
			correoelectronico, Fecha_Vencimiento,Fecha_Envio,Fecha_Pagado', 'length', 'max'=>45),
			array('observacion', 'length', 'max'=>900),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, provedor, numeroFactura, valorFactura, consecutivo, observacion,idUsuario, estado,
			correoelectronico, Fecha_Creacion, Fecha_Modificacion,Fecha_Vencimiento
		,Fecha_Envio,Fecha_Pagado', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'provedor' => 'Provedor',
			'numeroFactura' => 'Numero Factura',
			'valorFactura' => 'Valor Factura',
			'consecutivo' => 'Consecutivo',
			'idUsuario' => 'Id Usuario',
			'observacion'=>'Observacion',
			'estado' => 'Estado',
			'Fecha_Creacion' => 'Fecha Creacion',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'Fecha_Vencimiento'=>'Fecha Vencimiento',
			'Fecha_Envio'=>'Fecha Envio',
			'Fecha_Pagado'=>'Fecha Pagado',
			'correoelectronico'=>'Correo Electronico',
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
		$criteria->compare('provedor',$this->provedor,true);
		$criteria->compare('numeroFactura',$this->numeroFactura,true);
		$criteria->compare('valorFactura',$this->valorFactura,true);
		$criteria->compare('consecutivo',$this->consecutivo,true);
		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('observacion',$this->estado,true);
		$criteria->compare('estado',"$this->estado",true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('Fecha_Vencimiento',$this->Fecha_Vencimiento,true);
		$criteria->compare('Fecha_Envio',$this->Fecha_Envio,true);
		$criteria->compare('Fecha_Pagado',$this->Fecha_Pagado,true);
		$criteria->compare('correoelectronico',$this->correoelectronico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function searchfiltro()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		if (Yii::app()->user->name=="UsuarioFacturaPoblado") {
				$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('provedor',$this->provedor,true);
		$criteria->compare('numeroFactura',$this->numeroFactura,true);
		$criteria->compare('valorFactura',$this->valorFactura,true);
		$criteria->compare('consecutivo',$this->consecutivo,true);
		$criteria->compare('idUsuario',"86",true);
		$criteria->compare('observacion',$this->estado,true);
		$criteria->compare('estado',"Recibido",true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('Fecha_Vencimiento',$this->Fecha_Vencimiento,true);
		$criteria->compare('Fecha_Envio',$this->Fecha_Envio,true);
		$criteria->compare('Fecha_Pagado',$this->Fecha_Pagado,true);
		$criteria->compare('correoelectronico',$this->correoelectronico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
			# code...
		}
		
		if (Yii::app()->user->name=="UsuarioFacturaEstrella"||Yii::app()->user->name=="facturaCompras") {
				$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('provedor',$this->provedor,true);
		$criteria->compare('numeroFactura',$this->numeroFactura,true);
		$criteria->compare('valorFactura',$this->valorFactura,true);
		$criteria->compare('consecutivo',$this->consecutivo,true);
		$criteria->compare('idUsuario',"85",true);
		$criteria->compare('observacion',$this->estado,true);
		$criteria->compare('estado',"Recibido",true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('Fecha_Vencimiento',$this->Fecha_Vencimiento,true);
		$criteria->compare('Fecha_Envio',$this->Fecha_Envio,true);
		$criteria->compare('Fecha_Pagado',$this->Fecha_Pagado,true);
		$criteria->compare('correoelectronico',$this->correoelectronico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
			# code...
		}else{
				$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('provedor',$this->provedor,true);
		$criteria->compare('numeroFactura',$this->numeroFactura,true);
		$criteria->compare('valorFactura',$this->valorFactura,true);
		$criteria->compare('consecutivo',$this->consecutivo,true);
		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('observacion',$this->estado,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('Fecha_Vencimiento',$this->Fecha_Vencimiento,true);
		$criteria->compare('Fecha_Envio',$this->Fecha_Envio,true);
		$criteria->compare('Fecha_Pagado',$this->Fecha_Pagado,true);
		$criteria->compare('correoelectronico',$this->correoelectronico,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));


		}
	
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Facturacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

			public function behaviors()
{
              return array(
             'CTimestampBehavior' => array(
              'class' => 'zii.behaviors.CTimestampBehavior',
               'createAttribute' => 'Fecha_Creacion',
               'updateAttribute' => 'Fecha_Modificacion',
             'setUpdateOnCreate' => true,
            ),
      );
}
}
