<?php

/**
 * This is the model class for table "mecanicos".
 *
 * The followings are the available columns in table 'mecanicos':
 * @property string $cc
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
 *
 * The followings are the available model relations:
 * @property Registro $registro
 */
class Mecanicos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mecanicos';
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
			array('cc, Nombre, Apellido, Direccion', 'length', 'max'=>45),
			array('Telefono', 'length', 'max'=>20),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cc, Nombre, Apellido, Direccion, Telefono, Fecha_Creacion, Fecha_Modificacion', 'safe', 'on'=>'search'),
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
			'registro' => array(self::HAS_ONE, 'Registro', 'idMecanico'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cc' => 'Cc',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Fecha_Creacion' => 'Fecha Creacion',
			'Fecha_Modificacion' => 'Fecha Modificacion',
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

		$criteria->compare('cc',$this->cc,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Mecanicos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

		public function behaviors()
{
              return array(
             'CTimestampBehavior' => array(
              'class' => 'zii.behaviors.CTimestampBehavior',
               'createAttribute' => 'Fecha_Creacion',
               'updateAttribute' => 'Fecha_Modificacion',
             'setUpdateOnCreate' => true,
            ),
      );
}
}
