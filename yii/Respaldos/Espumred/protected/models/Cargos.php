<?php

/**
 * This is the model class for table "cargos".
 *
 * The followings are the available columns in table 'cargos':
 * @property string $id
 * @property string $nombreCargo
 * @property string $descripcionCargo
 * @property string $codigoSena
 * @property string $nivelCargo
 * @property string $idArea
 *
 * The followings are the available model relations:
 * @property Area $idArea0
 */
class Cargos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cargos';
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
			array('id, nombreCargo, descripcionCargo, codigoSena, nivelCargo, idArea', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombreCargo, descripcionCargo, codigoSena, nivelCargo, idArea', 'safe', 'on'=>'search'),
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
			'idArea0' => array(self::BELONGS_TO, 'Area', 'idArea'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombreCargo' => 'Nombre Cargo',
			'descripcionCargo' => 'Descripcion Cargo',
			'codigoSena' => 'Codigo Sena',
			'nivelCargo' => 'Nivel Cargo',
			'idArea' => 'Id Area',
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
		$criteria->compare('nombreCargo',$this->nombreCargo,true);
		$criteria->compare('descripcionCargo',$this->descripcionCargo,true);
		$criteria->compare('codigoSena',$this->codigoSena,true);
		$criteria->compare('nivelCargo',$this->nivelCargo,true);
		$criteria->compare('idArea',$this->idArea,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cargos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
