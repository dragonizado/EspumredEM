<?php

/**
 * This is the model class for table "formacion".
 *
 * The followings are the available columns in table 'formacion':
 * @property string $cod
 * @property string $codlote
 * @property string $altura
 * @property string $ancho
 * @property string $largo
 * @property string $peso
 * @property string $cantidad
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
  * @property string $fecha_validacion
 * @property string $densidad
 * @property string $consumido
 * @property string $tipo
 * The followings are the available model relations:
 * @property Lote $codlote0
 */
class Formacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod', 'required'),
			array('cod, codlote, altura, ancho, largo, densidad ,peso, cantidad ,consumido, tipo, fecha_validacion', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod, codlote, altura, ancho, largo, peso, cantidad, Fecha_Creacion,consumido,tipo,Fecha_Modificacion, fecha_validacion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cod' => 'Cod',
			'codlote' => 'Codlote',
			'altura' => 'Altura',
			'ancho' => 'Ancho',
			'largo' => 'Largo',
			'peso' => 'Peso',
			'densidad'=>'densidad',
			'cantidad' => 'Cantidad',
			'consumido'=>'Consumido',
			'tipo'=>'Tipo',
			'Fecha_Creacion' => 'Fecha Creacion',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'fecha_validacion'=>'Fecha Validacion',
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

		$criteria->compare('cod',$this->cod,true);
		$criteria->compare('codlote',$this->codlote,true);
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('consumido',$this->consumido,true);
		$criteria->compare('densidad',$this->densidad,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('fecha_validacion',$this->fecha_validacion,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formacion the static model class
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
