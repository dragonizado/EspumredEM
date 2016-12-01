<?php



class Condicionescomerciales extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condicionescomerciales';
	}
     
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod, nombreAsesor, nombreCliente, TipologiaCliente, Cambio, negPuntual,vigenciadesde', 'required'),
			array('cod', 'numerical', 'integerOnly'=>true),
			array('cod, nombreAsesor, nombreCliente, TipologiaCliente, Cambio, negPuntual,vigenciadesde, vigenciahasta', 'length', 'max'=>45),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cod, nombreAsesor, nombreCliente, TipologiaCliente, Cambio, negPuntual,vigenciadesde, vigenciahasta', 'safe', 'on'=>'search'),
			//array('id','default','value'=>Yii::app()->utils->guid,'setOnEmpty'=>false,'on'=>'insert'),
			
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTA: es posible que necesite ajustar el nombre de la relación y la relacionada
       // Nombre de clase para las relaciones generadas automáticamente a continuación.
		return array(
			'clientes' => array(self::HAS_MANY, 'Observaciones', 'condicionescomerciales'),
			'descripcion0' => array(self::HAS_MANY, 'Descripcion', 'codigo'),
			'clientes0' => array(self::HAS_MANY, 'Clientes', 'nombreCliente') ,   
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(

			//'id' => 'ID',
			'cod' => 'Codigo',
			'nombreAsesor' => 'NombreAsesor',
			'nombreCliente' => 'NombreCliente',
			'TipologiaCliente' => 'TipologiaCliente',
			'Cambio' => 'Cambio',
			'negPuntual' => 'negPuntual',
			'vigenciadesde' => 'vigenciadesde',
			'vigenciahasta' => 'vigenciahasta',
					


			
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
         

        //$criteria->compare('id',$this->id,true);
		$criteria->compare('cod',$this->cod,true);
		$criteria->compare('nombreAsesor',$this->nombreAsesor,true);
		$criteria->compare('nombreCliente',$this->nombreCliente,true);
		$criteria->compare('TipologiaCliente',$this->TipologiaCliente,true);
		$criteria->compare('Cambio',$this->Cambio,true);
		$criteria->compare('negPuntual',$this->negPuntual,true);
		$criteria->compare('vigenciadesde',$this->vigenciadesde,true);
		$criteria->compare('vigenciahasta',$this->vigenciahasta,true);


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
