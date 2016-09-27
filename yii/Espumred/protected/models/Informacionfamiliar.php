<?php

/**
 * This is the model class for table "informacionfamiliar".
 *
 * The followings are the available columns in table 'informacionfamiliar':
 * @property string $id
 * @property integer $ccEmpleado
 * @property string $nombreFamiliar
 * @property string $parantesco
 * @property string $fechaDeNacimiento
 * @property string $edad
 * @property string $escolaridad
 * @property string $ocupacion
 * @property string $viveConEmpleado
 * @property string $dependeDelEmpleado
 *
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 */
class Informacionfamiliar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacionfamiliar';
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
			array('ccEmpleado', 'numerical', 'integerOnly'=>true),
			array('id, nombreFamiliar, parantesco, fechaDeNacimiento, edad, escolaridad, ocupacion, viveConEmpleado, dependeDelEmpleado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ccEmpleado, nombreFamiliar, parantesco, fechaDeNacimiento, edad, escolaridad, ocupacion, viveConEmpleado, dependeDelEmpleado', 'safe', 'on'=>'search'),
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
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'informacionFamiliar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ccEmpleado' => 'Cc Empleado',
			'nombreFamiliar' => 'Nombre Familiar',
			'parantesco' => 'Parantesco',
			'fechaDeNacimiento' => 'Fecha De Nacimiento',
			'edad' => 'Edad',
			'escolaridad' => 'Escolaridad',
			'ocupacion' => 'Ocupacion',
			'viveConEmpleado' => 'Vive Con Empleado',
			'dependeDelEmpleado' => 'Depende Del Empleado',
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
		$criteria->compare('ccEmpleado',$this->ccEmpleado);
		$criteria->compare('nombreFamiliar',$this->nombreFamiliar,true);
		$criteria->compare('parantesco',$this->parantesco,true);
		$criteria->compare('fechaDeNacimiento',$this->fechaDeNacimiento,true);
		$criteria->compare('edad',$this->edad,true);
		$criteria->compare('escolaridad',$this->escolaridad,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('viveConEmpleado',$this->viveConEmpleado,true);
		$criteria->compare('dependeDelEmpleado',$this->dependeDelEmpleado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
		public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		 $arrFamiliar=Yii::app()->session['Familiar'];

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('ccEmpleado',$arrFamiliar[0]["ccEmpleado"],true);
		$criteria->compare('nombreFamiliar',$this->nombreFamiliar,true);
		$criteria->compare('parantesco',$this->parantesco,true);
		$criteria->compare('fechaDeNacimiento',$this->fechaDeNacimiento,true);
		$criteria->compare('edad',$this->edad,true);
		$criteria->compare('escolaridad',$this->escolaridad,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('viveConEmpleado',$this->viveConEmpleado,true);
		$criteria->compare('dependeDelEmpleado',$this->dependeDelEmpleado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
		
	    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionfamiliar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
