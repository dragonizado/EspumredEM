<?php

/**
 * This is the model class for table "informacioneconomica".
 *
 * The followings are the available columns in table 'informacioneconomica':
 * @property string $id
 * @property string $primerIngreso
 * @property string $segundoIngreso
 * @property string $otrosIngresos
 * @property string $totalIngresos
 * @property string $arriendo
 * @property string $serviciosPublicos
 * @property string $internet
 * @property string $telefonia
 * @property string $cable
 * @property string $alimentacion
 * @property string $transporte
 * @property string $celular
 * @property string $educacion
 * @property string $vehiculo
 * @property string $prestacionesComercial
 * @property string $prestamosBancario
 * @property string $hipoteca
 * @property string $vestidoYCalzado
 * @property string $recreacion
 * @property string $saldoFinal
 * @property string $totalGastos
 *
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 */
class Informacioneconomica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacioneconomica';
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
			array('id, primerIngreso, segundoIngreso, otrosIngresos, totalIngresos, arriendo, serviciosPublicos, internet, telefonia, cable, alimentacion, transporte, celular, educacion, vehiculo, prestacionesComercial, prestamosBancario, hipoteca, vestidoYCalzado, recreacion, saldoFinal,totalGastos', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, primerIngreso, segundoIngreso, otrosIngresos, totalIngresos, arriendo, serviciosPublicos, internet, telefonia, cable, alimentacion, transporte, celular, educacion, vehiculo, prestacionesComercial, prestamosBancario, hipoteca, vestidoYCalzado, recreacion  ,saldoFinal,totalGastos', 'safe', 'on'=>'search'),
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
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'InformacionEconomica'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'primerIngreso' => 'Primer Ingreso',
			'segundoIngreso' => 'Segundo Ingreso',
			'otrosIngresos' => 'Otros Ingresos',
			'totalIngresos' => 'Total Ingresos',
			'arriendo' => 'Arriendo',
			'serviciosPublicos' => 'Servicios Publicos',
			'internet' => 'Internet',
			'telefonia' => 'Telefonia',
			'cable' => 'Cable',
			'alimentacion' => 'Alimentacion',
			'transporte' => 'Transporte',
			'celular' => 'Celular',
			'educacion' => 'Educacion',
			'vehiculo' => 'Vehiculo',
			'prestacionesComercial' => 'Prestaciones Comercial',
			'prestamosBancario' => 'Prestamos Bancario',
			'hipoteca' => 'Hipoteca',
			'vestidoYCalzado' => 'Vestido Ycalzado',
			'recreacion' => 'Recreacion',
			'saldoFinal'=>'Saldo Final',
			'totalGastos'=>'Total Gastos',
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
		$criteria->compare('primerIngreso',$this->primerIngreso,true);
		$criteria->compare('segundoIngreso',$this->segundoIngreso,true);
		$criteria->compare('otrosIngresos',$this->otrosIngresos,true);
		$criteria->compare('totalIngresos',$this->totalIngresos,true);
		$criteria->compare('arriendo',$this->arriendo,true);
		$criteria->compare('serviciosPublicos',$this->serviciosPublicos,true);
		$criteria->compare('internet',$this->internet,true);
		$criteria->compare('telefonia',$this->telefonia,true);
		$criteria->compare('cable',$this->cable,true);
		$criteria->compare('alimentacion',$this->alimentacion,true);
		$criteria->compare('transporte',$this->transporte,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('educacion',$this->educacion,true);
		$criteria->compare('vehiculo',$this->vehiculo,true);
		$criteria->compare('prestacionesComercial',$this->prestacionesComercial,true);
		$criteria->compare('prestamosBancario',$this->prestamosBancario,true);
		$criteria->compare('hipoteca',$this->hipoteca,true);
		$criteria->compare('vestidoYCalzado',$this->vestidoYCalzado,true);
		$criteria->compare('recreacion',$this->recreacion,true);
		$criteria->compare('saldoFinal',$this->saldoFinal,true);
		$criteria->compare('totalGastos',$this->totalGastos,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacioneconomica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
