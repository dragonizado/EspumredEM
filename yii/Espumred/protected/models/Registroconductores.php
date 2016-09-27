<?php

/**
 * This is the model class for table "registroconductores".
 *
 * The followings are the available columns in table 'registroconductores':
 * @property string $cc
 * @property string $nombre
 * @property string $cargo
  * @property string $eps
 * @property string $afp
 * @property string $arl
 * @property string $vigenciaSeguridad
 */
class Registroconductores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'registroconductores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cc, nombre, cargo, eps, afp, arl', 'required'),
			array('cc', 'length', 'max'=>15),
			array('nombre, cargo, eps, afp, arl,vigenciaSeguridad,', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cc, nombre, cargo, eps, afp, arl,vigenciaSeguridad', 'safe', 'on'=>'search'),
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
			'cc' => 'Cc',
			'nombre' => 'Nombre',
			'cargo' => 'Cargo',
			'eps' => 'Eps',
			'afp' => 'Afp',
			'arl' => 'Arl',
			'vigenciaSeguridad'=>'Vigencia Seguridad ',
			
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('eps',$this->eps,true);
		$criteria->compare('afp',$this->afp,true);
		$criteria->compare('arl',$this->arl,true);
		$criteria->compare('vigenciaSeguridad',$this->vigenciaSeguridad,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Registroconductores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
