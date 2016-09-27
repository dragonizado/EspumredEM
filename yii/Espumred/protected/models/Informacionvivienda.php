<?php

/**
 * This is the model class for table "informacionvivienda".
 *
 * The followings are the available columns in table 'informacionvivienda':
 * @property string $id
 * @property string $numeroDeHabitantes
 * @property string $indiceHacimiento
 * @property string $estrato
 * @property string $tenenciaDeLaVivienda
 * @property string $tipoDeVivienda
 * @property string $numeroDeHabitacion
 * @property string $cocina
 * @property string $bañoComun
 * @property string $bañoPrivado
 * @property string $sala
 * @property string $comedor
 * @property string $salaComedor
 * @property string $zonaDeRopa
 * @property string $agua
 * @property string $electricidad
 * @property string $gas
 * @property string $telefono
 * @property string $internet
 * @property string $televisionPorCable
 * @property string $otros
 * @property string $television
 * @property string $equipoDeSonido
 * @property string $lavadora
 * @property string $estufa
 * @property string $dvd
 * @property string $microondas
 * @property string $pc
 * @property string $paredes
 * @property string $techo
 * @property string $piso
 * @property string $nevera
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 */
class Informacionvivienda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'informacionvivienda';
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
			array('id, numeroDeHabitantes, indiceHacimiento, estrato, tenenciaDeLaVivienda, tipoDeVivienda, numeroDeHabitacion, cocina, bañoComun,
			 bañoPrivado, sala, comedor, salaComedor, zonaDeRopa, agua, electricidad, gas, telefono, internet, televisionPorCable, otros, television, 
			 equipoDeSonido, lavadora, estufa, dvd, microondas, pc,  piso,techo,paredes,nevera', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, numeroDeHabitantes, indiceHacimiento, estrato, tenenciaDeLaVivienda, tipoDeVivienda, 
				numeroDeHabitacion, cocina, bañoComun, bañoPrivado, sala, comedor, salaComedor, zonaDeRopa, 
				agua, electricidad, gas, telefono, internet, televisionPorCable, otros, television, equipoDeSonido, 
				lavadora, estufa, dvd, microondas, pc, piso,techo,paredes,nevera', 'safe', 'on'=>'search'),
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
			'informacionempleados' => array(self::HAS_MANY, 'Informacionempleado', 'InformacionVivienda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'numeroDeHabitantes' => 'Numero De Habitantes',
			'indiceHacimiento' => 'Indice Hacimiento',
			'estrato' => 'Estrato',
			'tenenciaDeLaVivienda' => 'Tenencia De La Vivienda',
			'tipoDeVivienda' => 'Tipo De Vivienda',
			'numeroDeHabitacion' => 'Numero De Habitacion',
			'cocina' => 'Cocina',
			'bañoComun' => 'Baño Comun',
			'bañoPrivado' => 'Baño Privado',
			'sala' => 'Sala',
			'comedor' => 'Comedor',
			'salaComedor' => 'Sala Comedor',
			'zonaDeRopa' => 'Zona De Ropa',
			'agua' => 'Agua',
			'electricidad' => 'Electricidad',
			'gas' => 'Gas',
			'telefono' => 'Telefono',
			'internet' => 'Internet',
			'televisionPorCable' => 'Television Por Cable',
			'otros' => 'Otros',
			'television' => 'Television',
			'equipoDeSonido' => 'Equipo De Sonido',
			'lavadora' => 'Lavadora',
			'estufa' => 'Estufa',
			'dvd' => 'Dvd',
			'microondas' => 'Microondas',
			'pc' => 'Pc',
			'piso'=>'Piso',
			'techo'=>'Techo',
			'paredes'=>'Paredes',
			'nevera'=>'Nevera',
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
		$criteria->compare('numeroDeHabitantes',$this->numeroDeHabitantes,true);
		$criteria->compare('indiceHacimiento',$this->indiceHacimiento,true);
		$criteria->compare('estrato',$this->estrato,true);
		$criteria->compare('tenenciaDeLaVivienda',$this->tenenciaDeLaVivienda,true);
		$criteria->compare('tipoDeVivienda',$this->tipoDeVivienda,true);
		$criteria->compare('numeroDeHabitacion',$this->numeroDeHabitacion,true);
		$criteria->compare('cocina',$this->cocina,true);
		$criteria->compare('bañoComun',$this->bañoComun,true);
		$criteria->compare('bañoPrivado',$this->bañoPrivado,true);
		$criteria->compare('sala',$this->sala,true);
		$criteria->compare('comedor',$this->comedor,true);
		$criteria->compare('salaComedor',$this->salaComedor,true);
		$criteria->compare('zonaDeRopa',$this->zonaDeRopa,true);
		$criteria->compare('agua',$this->agua,true);
		$criteria->compare('electricidad',$this->electricidad,true);
		$criteria->compare('gas',$this->gas,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('internet',$this->internet,true);
		$criteria->compare('televisionPorCable',$this->televisionPorCable,true);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('television',$this->television,true);
		$criteria->compare('equipoDeSonido',$this->equipoDeSonido,true);
		$criteria->compare('lavadora',$this->lavadora,true);
		$criteria->compare('estufa',$this->estufa,true);
		$criteria->compare('dvd',$this->dvd,true);
		$criteria->compare('microondas',$this->microondas,true);
		$criteria->compare('pc',$this->pc,true);
		$criteria->compare('piso',$this->piso,true);
		$criteria->compare('techo',$this->techo,true);
		$criteria->compare('paredes',$this->paredes,true);
		$criteria->compare('nevera',$this->nevera,true);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionvivienda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
