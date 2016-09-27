<?php

/**
 * This is the model class for table "productocostos".
 *
 * The followings are the available columns in table 'productocostos':
 * @property string $cod
 * @property string $nombre
 * @property string $medidas
 * @property string $calibre
 * @property string $precioMayoristas
 * @property string $precioCorreria
 * @property string $tipo
 */
class Productocostos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productocostos';
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
			array('cod, nombre, medidas, calibre, precioMayoristas, precioCorreria,tipo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod, nombre, medidas, calibre, precioMayoristas, precioCorreria,tipo', 'safe', 'on'=>'search'),
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
			'cod' => 'Cod',
			'nombre' => 'Nombre',
			'medidas' => 'Medidas',
			'calibre' => 'Calibre',
			'precioMayoristas' => 'Precio Mayoristas',
			'precioCorreria' => 'Precio Correria',
			'tipo'=>'Tipo'
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('medidas',$this->medidas,true);
		$criteria->compare('calibre',$this->calibre,true);
		$criteria->compare('precioMayoristas',$this->precioMayoristas,true);
		$criteria->compare('precioCorreria',$this->precioCorreria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productocostos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
