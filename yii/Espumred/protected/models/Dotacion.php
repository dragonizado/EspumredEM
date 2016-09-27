<?php

/**
 * This is the model class for table "dotacion".
 *
 * The followings are the available columns in table 'dotacion':
 * @property string $id
 * @property string $camisa
 * @property string $calzado
 * @property string $pantalon
 * @property string $delantal
 * @property string $overol
 * @property string $otrasDotaciones
 *
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 */
class Dotacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dotacion';
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
			array('id, camisa, calzado, pantalon, delantal, overol, otrasDotaciones', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, camisa, calzado, pantalon, delantal, overol, otrasDotaciones', 'safe', 'on'=>'search'),
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
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'dotacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'camisa' => 'Camisa',
			'calzado' => 'Calzado',
			'pantalon' => 'Pantalon',
			'delantal' => 'Delantal',
			'overol' => 'Overol',
			'otrasDotaciones' => 'Otras Dotaciones',
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
		$criteria->compare('camisa',$this->camisa,true);
		$criteria->compare('calzado',$this->calzado,true);
		$criteria->compare('pantalon',$this->pantalon,true);
		$criteria->compare('delantal',$this->delantal,true);
		$criteria->compare('overol',$this->overol,true);
		$criteria->compare('otrasDotaciones',$this->otrasDotaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dotacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
