<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property string $id
 * @property string $Nombre
 * @property string $Apellido
 * @property integer $CC
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
 *
 * The followings are the available model relations:
 * @property Cartaremisora[] $cartaremisoras
 * @property Prestamos[] $prestamoses
 */
class Gerente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gerentes';
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
			array('id, nombreGerente', 'required'),
			array('id, nombreGerente, correo, fecha_creacion,fecha_modificacion', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombreGerente, correo, fecha_creacion, fecha_modificacion', 'safe', 'on'=>'search'),
		
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
			
			'gerentes1' => array(self::HAS_MANY, 'Observaciones', 'gerente_general'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombreGerente' => 'Nombre',
			'correo' => 'Correo',
			'fecha_creacion' => 'Fecha Creacion',
			'fecha_modificacion' => 'Fecha Modificacion',
			
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
		$criteria->compare('nombreGerente',$this->nombreGerente,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('fecha_modificacion',$this->fecha_modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
/*
esta funcion de behavoir lo que hace es buscar un archivo en componen behavior el cual esta el 
codigo fuente para poder tomar la fecha_creacion y fecha_modificacion y igualarla ala  hora del sistema del sistema 
*/
	}