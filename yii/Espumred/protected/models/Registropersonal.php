<?php

/**
 * This is the model class for table "registropersonal".
 *
 * The followings are the available columns in table 'registropersonal':
 * @property string $id
 * @property string $nombre
 * @property string $estado
 * @property string $horaingreso
 * @property string $horasalida
 * @property string $fecha
 * @property string $observacion
 * @property string $vehiculo
 * @property string $placa
 */
class Registropersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registropersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('cc, nombre, estado, horaingreso, horasalida', 'required'),
			array('id,vehiculo,placa,nombre, estado, horaingreso, horasalida,observacion', 'length', 'max'=>45),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,vehiculo,placa,nombre, estado, horaingreso, horasalida,observacion,fecha', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id'=>'Id',
			'nombre' => 'Nombre',
			'estado' => 'Estado',
			'horaingreso' => 'Horaingreso',
			'horasalida' => 'Horasalida',
			'observacion'=>'Observacion',
			'fecha'=>'Fecha',
			'vehiculo'=>'Vehiculo',
			'placa'=>'Placa',

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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('horaingreso',$this->horaingreso,true);
		$criteria->compare('horasalida',$this->horasalida,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('vehiculo',$this->vehiculo,true);
		$criteria->compare('placa',$this->placa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		ini_set('date.timezone','America/Bogota'); 
		$fecha = date("d-m-Y");
		
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',"Ingreso",true);
		$criteria->compare('horaingreso',$this->horaingreso,true);
		$criteria->compare('horasalida',$this->horasalida,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha',$fecha,true);
		$criteria->compare('vehiculo',$this->vehiculo,true);
		$criteria->compare('placa',$this->placa,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registropersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
