<?php

/**
 * This is the model class for table "vehiculo".
 *
 * The followings are the available columns in table 'vehiculo':
 * @property string $placa
 * @property string $modelo
 * @property string $propietario
 * @property string $conductor
 * @property string $ayudante
  * @property string $rtm
   * @property string $soat
 */
class Vehiculo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehiculo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('placa', 'required'),
			array('placa', 'length', 'max'=>25),
			array('modelo, propietario, conductor, ayudante,rtm,soat', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('placa, modelo, propietario, conductor, ayudante,rtm,soat', 'safe', 'on'=>'search'),
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
			'placa' => 'Placa',
			'modelo' => 'Modelo',
			'propietario' => 'Propietario',
			'conductor' => 'Conductor',
			'ayudante' => 'Ayudante',
			'rtm'=>'Rtm',
			'soat'=>'Soat',
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

		$criteria->compare('placa',$this->placa,true);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('propietario',$this->propietario,true);
		$criteria->compare('conductor',$this->conductor,true);
		$criteria->compare('ayudante',$this->ayudante,true);
		$criteria->compare('rtm',$this->rtm,true);
		$criteria->compare('soat',$this->soat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehiculo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
