<?php

/**
 * This is the model class for table "cargarespumas".
 *
 * The followings are the available columns in table 'cargarespumas':
 * @property string $id
 * @property string $altura
 * @property string $ancho
 * @property string $largo
 * @property string $densidad
 * @property string $cantidadKilo
 * @property string $codlote
 * @property string $cantidad
 * @property string $Fecha_Creacion
 * @property string $tipo
 * @property string $Fecha_Modificacion
 * @property string $codigosap
 *
 * The followings are the available model relations:
 * @property Lote $codlote0
 * @property Descargoespumas $descargoespumas
 */
class Cargarespumas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cargarespumas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, altura, ancho, largo, densidad, cantidadKilo, codlote, cantidad, tipo,codigosap', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, altura, ancho, largo, densidad, cantidadKilo, codlote, cantidad, Fecha_Creacion, tipo, Fecha_Modificacion,codigosap', 'safe', 'on'=>'search'),
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
			'codlote0' => array(self::BELONGS_TO, 'Lote', 'codlote'),
			'descargoespumas' => array(self::HAS_ONE, 'Descargoespumas', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'altura' => 'Altura',
			'ancho' => 'Ancho',
			'largo' => 'Largo',
			'densidad' => 'Densidad',
			'cantidadKilo' => 'Cantidad Kilo',
			'codlote' => 'Codlote',
			'cantidad' => 'Cantidad',
			'Fecha_Creacion' => 'Fecha Creacion',
			'tipo' => 'Tipo',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'codigosap'=>'Codigosap',
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
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('densidad',$this->densidad,true);
		$criteria->compare('cantidadKilo',$this->cantidadKilo,true);
		$criteria->compare('codlote',$this->codlote,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('codigosap',$this->codigosap,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cargarespumas the static model class
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
