<?php

/**
 * This is the model class for table "informacionpersonal".
 *
 * The followings are the available columns in table 'informacionpersonal':
 * @property integer $cc
 * @property string $nombre
 * @property string $fechaNacimiento
 * @property string $lugarNacimiento
 * @property string $sexo
 * @property string $rh
 * @property string $estadoCivil
 *@property string $tiempoCasado
 * @property string $numeroHijos
 * @property string $direccionResidencia
 * @property string $barrio
 * @property string $municipio
 * @property string $telefono
 * @property string $celular
 * @property string $libretaMilitar
 * @property string $claseLibretaMilitar
 *
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 * @property Informacionfamiliar[] $informacionfamiliars
 * @property Municipio $municipio0
 */
class Informacionpersonal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacionpersonal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cc', 'required'),
			array('cc', 'numerical', 'integerOnly'=>true),
			array('nombre, fechaNacimiento, lugarNacimiento, sexo, rh, estadoCivil,tiempoCasado, numeroHijos, direccionResidencia, barrio, municipio, telefono, celular, libretaMilitar, claseLibretaMilitar', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cc, nombre, fechaNacimiento, lugarNacimiento, sexo, rh, estadoCivil, numeroHijos,tiempoCasado, direccionResidencia, barrio, municipio, telefono, celular, libretaMilitar, claseLibretaMilitar', 'safe', 'on'=>'search'),
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
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'informacionPersonal'),
			'informacionfamiliars' => array(self::HAS_MANY, 'Informacionfamiliar', 'ccEmpleado'),
			'municipio0' => array(self::BELONGS_TO, 'Municipio', 'municipio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cc' => 'Cc',
			'nombre' => 'Nombre',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'lugarNacimiento' => 'Lugar Nacimiento',
			'sexo' => 'Sexo',
			'rh' => 'Rh',
			'estadoCivil' => 'Estado Civil',
			'tiempoCasado'=>'Tiempo Casado',
			'numeroHijos' => 'Numero Hijos',
			'direccionResidencia' => 'Direccion Residencia',
			'barrio' => 'Barrio',
			'municipio' => 'Municipio',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'libretaMilitar' => 'Libreta Militar',
			'claseLibretaMilitar' => 'Clase Libreta Militar',
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

		$criteria->compare('cc',$this->cc);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('lugarNacimiento',$this->lugarNacimiento,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('rh',$this->rh,true);
		$criteria->compare('estadoCivil',$this->estadoCivil,true);
		$criteria->compare('tiempoCasado',$this->tiempoCasado,true);
		$criteria->compare('numeroHijos',$this->numeroHijos,true);
		$criteria->compare('direccionResidencia',$this->direccionResidencia,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('libretaMilitar',$this->libretaMilitar,true);
		$criteria->compare('claseLibretaMilitar',$this->claseLibretaMilitar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionpersonal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
