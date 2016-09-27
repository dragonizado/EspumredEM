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
class Comercial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comercial';
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
			array('id, gerenteComercial', 'required'),
			array('id, gerenteComercial, correo, fechaCreacion,fechaModificacion', 'length', 'max'=>45),
			array('FechaCreacion, FechaModificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gerenteComercial, correo, fechaCreacion, fechaModificacion', 'safe', 'on'=>'search'),
		
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
			'comercial0' => array(self::HAS_MANY, 'Observaciones', 'gerente_comercial'),
				
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'gerenteComercial' => 'Nombre',
			'correo' => 'Correo',
			'fechaCreacion' => 'Fecha Creacion',
			'fechaModificacion' => 'Fecha Modificacion',
			
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
		$criteria->compare('gerenteComercial',$this->gerenteComercial,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('fechaModificacion',$this->fechaModificacion,true);

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