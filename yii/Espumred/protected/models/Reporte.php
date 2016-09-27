<?php

/**
 * This is the model class for table "reporte".
 *
 * The followings are the available columns in table 'reporte':
 * @property string $id
 * @property string $fechaFormacion
 * @property string $fechaCorte
 * @property string $codSap
 * @property string $lote
 * @property string $tipoEspumas
 * @property string $densidad
 * @property string $color
 * @property string $ancho
 * @property string $alto
 * @property string $largo
 * @property string $kilo
 * @property string $metroConforme
 * @property string $metroNoConforme
 * @property string $kiloConforme
 * @property string $kiloNoConforme
 * @property string $motivo
 */
class Reporte extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reporte';
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
			array('id, fechaFormacion, fechaCorte, codSap, lote, tipoEspumas, densidad, color, ancho, alto, largo, kilo, metroConforme, metroNoConforme, kiloConforme, kiloNoConforme, motivo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fechaFormacion, fechaCorte, codSap, lote, tipoEspumas, densidad, color, ancho, alto, largo, kilo, metroConforme, metroNoConforme, kiloConforme, kiloNoConforme, motivo', 'safe', 'on'=>'search'),
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
			'fechaFormacion' => 'Fecha Formacion',
			'fechaCorte' => 'Fecha Corte',
			'codSap' => 'Cod Sap',
			'lote' => 'Lote',
			'tipoEspumas' => 'Tipo Espumas',
			'densidad' => 'Densidad',
			'color' => 'Color',
			'ancho' => 'Ancho',
			'alto' => 'Alto',
			'largo' => 'Largo',
			'kilo' => 'Kilo',
			'metroConforme' => 'Metro Conforme',
			'metroNoConforme' => 'Metro No Conforme',
			'kiloConforme' => 'Kilo Conforme',
			'kiloNoConforme' => 'Kilo No Conforme',
			'motivo' => 'Motivo',
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
		$criteria->compare('fechaFormacion',$this->fechaFormacion,true);
		$criteria->compare('fechaCorte',$this->fechaCorte,true);
		$criteria->compare('codSap',$this->codSap,true);
		$criteria->compare('lote',$this->lote,true);
		$criteria->compare('tipoEspumas',$this->tipoEspumas,true);
		$criteria->compare('densidad',$this->densidad,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('alto',$this->alto,true);
		$criteria->compare('largo',$this->largo,true);
		$criteria->compare('kilo',$this->kilo,true);
		$criteria->compare('metroConforme',$this->metroConforme,true);
		$criteria->compare('metroNoConforme',$this->metroNoConforme,true);
		$criteria->compare('kiloConforme',$this->kiloConforme,true);
		$criteria->compare('kiloNoConforme',$this->kiloNoConforme,true);
		$criteria->compare('motivo',$this->motivo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reporte the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
