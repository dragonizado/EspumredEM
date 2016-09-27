<?php

/**
 * This is the model class for table "informacionempleado".
 *
 * The followings are the available columns in table 'informacionempleado':
 * @property string $id
 * @property string $codigoNomina
 * @property string $estado
 * @property string $carnet
 * @property string $informacionAcademica
 * @property integer $informacionPersonal
 * @property string $informacionFamiliar
 * @property string $estadoEstudiantil
 * @property string $seguridadSocial
 * @property string $area
 * @property string $contrato
 *
 * The followings are the available model relations:
 * @property Informacionpersonal $informacionPersonal0
 * @property Estadoestudiantil $estadoEstudiantil0
 * @property Seguridadsocial $seguridadSocial0
 * @property Informacionfamiliar $informacionFamiliar0
 * @property Area $area0
 * @property Contrato $contrato0
 * @property Informacionacademica $informacionAcademica0
 */
class Informacionempleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacionempleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('informacionPersonal', 'numerical', 'integerOnly'=>true),
			array('id, codigoNomina, estado, carnet, informacionAcademica, informacionFamiliar, estadoEstudiantil, seguridadSocial, area, contrato', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, codigoNomina, estado, carnet, informacionAcademica, informacionPersonal, informacionFamiliar, estadoEstudiantil, seguridadSocial, area, contrato', 'safe', 'on'=>'search'),
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
			'informacionPersonal0' => array(self::BELONGS_TO, 'Informacionpersonal', 'informacionPersonal'),
			'estadoEstudiantil0' => array(self::BELONGS_TO, 'Estadoestudiantil', 'estadoEstudiantil'),
			'seguridadSocial0' => array(self::BELONGS_TO, 'Seguridadsocial', 'seguridadSocial'),
			'informacionFamiliar0' => array(self::BELONGS_TO, 'Informacionfamiliar', 'informacionFamiliar'),
			'area0' => array(self::BELONGS_TO, 'Area', 'area'),
			'contrato0' => array(self::BELONGS_TO, 'Contrato', 'contrato'),
			'informacionAcademica0' => array(self::BELONGS_TO, 'Informacionacademica', 'informacionAcademica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'codigoNomina' => 'Codigo Nomina',
			'estado' => 'Estado',
			'carnet' => 'Carnet',
			'informacionAcademica' => 'Informacion Academica',
			'informacionPersonal' => 'Informacion Personal',
			'informacionFamiliar' => 'Informacion Familiar',
			'estadoEstudiantil' => 'Estado Estudiantil',
			'seguridadSocial' => 'Seguridad Social',
			'area' => 'Area',
			'contrato' => 'Contrato',
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
		$criteria->compare('codigoNomina',$this->codigoNomina,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('carnet',$this->carnet,true);
		$criteria->compare('informacionAcademica',$this->informacionAcademica,true);
		$criteria->compare('informacionPersonal',$this->informacionPersonal);
		$criteria->compare('informacionFamiliar',$this->informacionFamiliar,true);
		$criteria->compare('estadoEstudiantil',$this->estadoEstudiantil,true);
		$criteria->compare('seguridadSocial',$this->seguridadSocial,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('contrato',$this->contrato,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionempleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
