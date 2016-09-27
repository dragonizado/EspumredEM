<?php

/**
 * This is the model class for table "lote".
 *
 * The followings are the available columns in table 'lote':
 * @property string $codLote
 * @property string $tipoEspuma
 * @property string $densidad
 * @property string $altura
 * @property string $ancho
 * @property string $largo
 * @property string $peso
 * @property string $descripcion
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
 * @property string $cortado
  * @property string $fecha_validacion
 *
 * The followings are the available model relations:
 * @property Cargarespumas[] $cargarespumases
 * @property Formacion[] $formacions
 */
class Lote extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lote';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codLote', 'required'),
			array('codLote, tipoEspuma, densidad, altura, ancho, largo, peso, descripcion,cortado,fecha_validacion', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('codLote, tipoEspuma, densidad, altura, ancho, largo, peso, descripcion, Fecha_Creacion, Fecha_Modificacion, cortado,fecha_validacion', 'safe', 'on'=>'search'),
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
			'cargarespumases' => array(self::HAS_MANY, 'Cargarespumas', 'codlote'),
			'formacions' => array(self::HAS_MANY, 'Formacion', 'codlote'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codLote' => 'Cod Lote',
			'tipoEspuma' => 'Tipo Espuma',
			'densidad' => 'Densidad',
			'altura' => 'Altura',
			'ancho' => 'Ancho',
			'largo' => 'Largo',
			'peso' => 'Peso',
			'descripcion' => 'Descripcion',
			'Fecha_Creacion' => 'Fecha Creacion',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'cortado' => 'Cortado',
			'fecha_validacion'=>'fecha_validacion',
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

		$criteria->compare('codLote',$this->codLote,true);
		$criteria->compare('tipoEspuma',$this->tipoEspuma,true);
		$criteria->compare('densidad',$this->densidad,true);
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('cortado',"No",true);
		$criteria->compare('fecha_validacion',$this->fecha_validacion,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


public function search2()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.
		
		$criteria=new CDbCriteria;

		$criteria->compare('codLote',$this->codLote,true);
		$criteria->compare('tipoEspuma',$this->tipoEspuma,true);
		$criteria->compare('densidad',$this->densidad,true);
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('cortado',$this->cortado,true);
		$criteria->compare('fecha_validacion',$this->fecha_validacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lote the static model class
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
