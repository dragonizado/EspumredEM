<?php

/**
 * This is the model class for table "area".
 *
 * The followings are the available columns in table 'area':
 * @property string $idArea
 * @property string $nombreArea
 * @property string $descripcionArea
 * @property string $cargo
 *
 * The followings are the available model relations:
 * @property Cargos[] $cargoses
 * @property Informacionempleado[] $informacionempleados
 */
class Area extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idArea, cargo', 'required'),
			array('idArea, nombreArea, descripcionArea, cargo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idArea, nombreArea, descripcionArea, cargo', 'safe', 'on'=>'search'),
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
			'cargoses' => array(self::HAS_MANY, 'Cargos', 'idArea'),
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'area'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idArea' => 'Id Area',
			'nombreArea' => 'Nombre Area',
			'descripcionArea' => 'Descripcion Area',
			'cargo' => 'Cargo',
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

		$criteria->compare('idArea',$this->idArea,true);
		$criteria->compare('nombreArea',$this->nombreArea,true);
		$criteria->compare('descripcionArea',$this->descripcionArea,true);
		$criteria->compare('cargo',$this->cargo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Area the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
