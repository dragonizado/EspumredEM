<?php

/**
 * This is the model class for table "ingresopersonal".
 *
 * The followings are the available columns in table 'ingresopersonal':
  * @property string $id
  * @property string $nombre
  * @property string $apellidos
 * @property string $area
 * @property string $pertenencia
  * @property string $observacion
 * @property string $estado
 * @property string $fecha
 * @property string $hora
 * @property string $idusuario
  * @property string $asunto
 * @property string $nombreempresa
 */
class Ingresopersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ingresopersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre', 'required'),
			array('id,apellidos, nombre, area, fecha,asunto,nombreempresa, hora,estado', 'length', 'max'=>45),
			array('idusuario', 'length', 'max'=>50),
			array('pertenencia,observacion', 'length', 'max'=>202),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,apellidos, nombre, area, pertenencia, observacion, asunto,nombreempresa, fecha, hora,estado,idusuario', 'safe', 'on'=>'search'),
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
			'apellidos'=>'Apellidos',
			'area' => 'Area',
			'pertenencia' => 'Pertenencia',
			'observacion' => 'Observacion',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'estado'=>'Estado',
			'idusuario'=>'Id Usuario',
			'asunto'=>'Asunto',
			'nombreempresa'=>'Nombre Empresa',
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
		$criteria->compare('area',$this->area,true);
		$criteria->compare('pertenencia',$this->pertenencia,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('idusuario',$this->idusuario,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('nombreempresa',$this->nombreempresa,true);
		$criteria->compare('apellidos',$this->apellidos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}



	public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		ini_set('date.timezone','America/Bogota'); 
		$fecha = date("Y-m-d");
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('pertenencia',$this->pertenencia,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha',$fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('estado',"Confirmacion",true);
		$criteria->compare('idusuario',$this->idusuario,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('nombreempresa',$this->nombreempresa,true);
		$criteria->compare('apellidos',$this->apellidos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function search3()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		ini_set('date.timezone','America/Bogota'); 
		$hora=date("g:i A");
		$fecha = date("Y-m-d");
		$Usuario=Yii::app()->user->id;
		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('pertenencia',$this->pertenencia,true);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('estado','Confirmacion',true);
		$criteria->compare('idusuario',$Usuario,true);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('nombreempresa',$this->nombreempresa,true);
		$criteria->compare('apellidos',$this->apellidos,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ingresopersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
