<?php

/**
 * This is the model class for table "registro".
 *
 * The followings are the available columns in table 'registro':
  * @property string $id
 * @property string $idMecanico
 * @property string $tipo
 * @property string $descripcion
  * @property string $cantidad
  * @property string $ubicacion
 *
 * The followings are the available model relations:
 * @property Mecanicos $idMecanico0
 */
class Registro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registro';
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
			array('id, idMecanico, tipo,descripcion,cantidad,ubicacion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idMecanico, tipo,descripcion,cantidad,ubicacion', 'safe', 'on'=>'search'),
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
			
			'idMecanico0' => array(self::BELONGS_TO, 'Mecanicos', 'idMecanico'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMecanico' => 'Id Mecanico',
			'id' => 'Id',
			'tipo' => 'Tipo',
			'descripcion' => 'Descripcion',
			'cantidad'=>'Cantidad',
			'ubicacion'=>'Ubicacion'

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

		$criteria->compare('idMecanico',$this->idMecanico,true);
		$criteria->compare('id',$this->id,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('ubicacion',$this->ubicacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
