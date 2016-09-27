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
 * @property string $InformacionVivienda
 * @property string $InformacionEconomica
 * @property string $estadoEstudiantil
 * @property string $seguridadSocial
 * @property string $area
 * @property string $experiencialaboral
 * @property string $cargo
 * @property string $contrato
 * @property string $vehiculo
 * @property string $contactoEmergencia
 * @property string $telefonoContacto
 * @property string $dotacion
 * @property string $motivoRetiro
 * @property string $numeroCuenta
 * @property string $fechaFinazacionRetiro
 *
 * The followings are the available model relations:
 * @property Area $area0
 * @property Contrato $contrato0
 * @property Estadoestudiantil $estadoEstudiantil0
 * @property Informacionacademica $informacionAcademica0
 * @property Informacioneconomica $informacionEconomica
 * @property Informacionfamiliar $informacionFamiliar0
 * @property Informacionpersonal $informacionPersonal0
 * @property Informacionvivienda $informacionVivienda
 * @property Seguridadsocial $seguridadSocial0
 */
class Informacionempleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacionempleado';    //.... aqui viene (;)......;;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id', 'required'),            //es comentario pero se va a activar  // //-----------
			array('informacionPersonal', 'numerical', 'integerOnly'=>true),
			array('id, codigoNomina, estado, carnet, fechaFinalizacionRetiro,informacionAcademica, informacionFamiliar,
				numeroCuenta, InformacionVivienda, InformacionEconomica, estadoEstudiantil, seguridadSocial, area,cargo, 
				contrato, vehiculo, contactoEmergencia, telefonoContacto,dotacion
				,motivoRetiro,experiencialaboral', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, codigoNomina, estado, carnet, fechaFinalizacionRetiro,informacionAcademica, informacionPersonal,
				numeroCuenta, informacionFamiliar, InformacionVivienda, InformacionEconomica, estadoEstudiantil, seguridadSocial,
				 area,cargo, contrato, vehiculo, contactoEmergencia, telefonoContacto,dotacion,
				 motivoRetiro,experiencialaboral', 'safe', 'on'=>'search'),
			//array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'), //Es comentario pero se va a activar

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
			'area0' => array(self::BELONGS_TO, 'Area', 'area'),
			'cargo' => array(self::BELONGS_TO, 'Cargo', 'cargo'),
			'contrato0' => array(self::BELONGS_TO, 'Contrato', 'contrato'),
			'estadoEstudiantil0' => array(self::BELONGS_TO, 'Estadoestudiantil', 'estadoEstudiantil'),
			'informacionAcademica0' => array(self::BELONGS_TO, 'Informacionacademica', 'informacionAcademica'),
			'informacionEconomica' => array(self::BELONGS_TO, 'Informacioneconomica', 'InformacionEconomica'),
			'informacionFamiliar0' => array(self::BELONGS_TO, 'Informacionfamiliar', 'informacionFamiliar'),
			'informacionPersonal0' => array(self::BELONGS_TO, 'Informacionpersonal', 'informacionPersonal'),
			'informacionVivienda' => array(self::BELONGS_TO, 'Informacionvivienda', 'InformacionVivienda'),
			'seguridadSocial0' => array(self::BELONGS_TO, 'Seguridadsocial', 'seguridadSocial'),
			'dotacion' => array(self::BELONGS_TO, 'Dotacion', 'dotacion'),


		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID', //se pondra minuscula pero es en mayuscula ID
			'codigoNomina' => 'Codigo Nomina',
			'estado' => 'Estado',
			'carnet' => 'Carnet',
			'informacionAcademica' => 'Informacion Academica',
			'informacionPersonal' => 'Informacion Personal',
			'informacionFamiliar' => 'Informacion Familiar',
			'InformacionVivienda' => 'Informacion Vivienda',
			'InformacionEconomica' => 'Informacion Economica',
			'estadoEstudiantil' => 'Estado Estudiantil',
			'seguridadSocial' => 'Seguridad Social',
			'area' => 'Area',
			'contrato' => 'Contrato',
			'vehiculo' => 'Vehiculo',
			'contactoEmergencia' => 'Contacto Emergencia',
			'telefonoContacto' => 'Telefono Contacto',
			'dotacion'=>'Dotacion',
			'motivoRetiro'=>'MotivoRetiro',
			'cargo'=>'Cargo',
			'numeroCuenta'=>'Numero Cuenta',
			'fechaFinalizacionRetiro'=>'Fecha Finalizacion Retiro',
			'experiencialaboral'=>'experiencialaboral',
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
		$criteria->compare('InformacionVivienda',$this->InformacionVivienda,true);
		$criteria->compare('InformacionEconomica',$this->InformacionEconomica,true);
		$criteria->compare('estadoEstudiantil',$this->estadoEstudiantil,true);
		$criteria->compare('seguridadSocial',$this->seguridadSocial,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('contrato',$this->contrato,true);
		$criteria->compare('vehiculo',$this->vehiculo,true);
		$criteria->compare('contactoEmergencia',$this->contactoEmergencia,true);
		$criteria->compare('telefonoContacto',$this->telefonoContacto,true);
		$criteria->compare('dotacion',$this->dotacion,true);
		$criteria->compare('motivoRetiro',$this->motivoRetiro,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('numeroCuenta',$this->numeroCuenta,true);
		$criteria->compare('experiencialaboral',$this->experiencialaboral,true);
		$criteria->compare('fechaFinalizacionRetiro',$this->fechaFinalizacionRetiro,true);

		
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
