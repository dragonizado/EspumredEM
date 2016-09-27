<?php

/**
 * This is the model class for table "experiencialaboral".
 *
 * The followings are the available columns in table 'experiencialaboral':
 * @property string $id
 * @property string $cedula
 * @property string $empresa
 * @property string $cargo
 * @property string $funciones
 * @property string $fecha_inicio
 * @property string $fecha_retiro
 */
class Experiencialaboral extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'experiencialaboral';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id, cedula, empresa, cargo, funciones, fecha_inicio, fecha_retiro', 'required'),
			array('id,empresa', 'length', 'max'=>50),
			array('cedula,cargo', 'length', 'max'=>20),
			array('funciones', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cedula, empresa, cargo, funciones, fecha_inicio, fecha_retiro', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'cedula' => 'Cedula',
			'empresa' => 'Empresa',
			'cargo' => 'Cargo',
			'funciones' => 'Funciones',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_retiro' => 'Fecha Retiro',
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
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('funciones',$this->funciones,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_retiro',$this->fecha_retiro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		 $arrExperiencia=Yii::app()->session['Experiencialaboral'];

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('cedula',$arrExperiencia["cedula"],true);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('funciones',$this->funciones,true);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_retiro',$this->fecha_retiro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Experiencialaboral the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
