<?php

/**
 * This is the model class for table "descargoespumas".
 *
 * The followings are the available columns in table 'descargoespumas':
 * @property string $id
 * @property string $numeroLote
 * @property string $cantidadConsumida
 * @property string $codsap
 * @property string $Fecha_Creacion
 * @property string $idCargarespumas
 * @property string $Fecha_Modificacion
 * @property string $altura
 * @property string $ancho
 * @property string $largo
 * @property string $densidad
 *
 * The followings are the available model relations:
 * @property Cargarespumas $idCargarespumas0
 */
class Descargoespumas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'descargoespumas';
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
			array('id, numeroLote, cantidadConsumida, consecutivo, idCargarespumas, altura, ancho, largo, densidad', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numeroLote, cantidadConsumida, consecutivo, Fecha_Creacion, idCargarespumas, Fecha_Modificacion, altura, ancho, largo, densidad', 'safe', 'on'=>'search'),
			array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),
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
			'idCargarespumas0' => array(self::BELONGS_TO, 'Formacion', 'idCargarespumas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numeroLote' => 'Numero Lote',
			'cantidadConsumida' => 'Cantidad Consumida',
			'consecutivo' => 'Consecutivo',
			'Fecha_Creacion' => 'Fecha Creacion',
			'idCargarespumas' => 'Id Cargarespumas',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'altura' => 'Altura',
			'ancho' => 'Ancho',
			'largo' => 'Largo',
			'densidad' => 'Densidad',
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
		$criteria->compare('numeroLote',$this->numeroLote,true);
		$criteria->compare('cantidadConsumida',$this->cantidadConsumida,true);
		$criteria->compare('consecutivo',$this->consecutivo,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('idCargarespumas',$this->idCargarespumas,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('densidad',$this->densidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Descargoespumas the static model class
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
