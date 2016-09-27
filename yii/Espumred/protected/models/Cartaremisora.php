<?php

/**
 * This is the model class for table "cartaremisora".
 *
 * The followings are the available columns in table 'cartaremisora':
 * @property string $id
 * @property string $idArticulo
 * @property string $idCliente
 * @property string $idUsuario
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Ciudad
 * @property string $Flete_Pagadero
 * @property string $Numero_Factura
 * @property integer $Cantidad_Articulo
 * @property integer $Valor_Unitario_Articulo
 * @property integer $Valor_Total
 * @property string $Numero_Bultos
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
 * @property string $descripcion
 * @property integer $consecutivo
 * @property string $Empresa
 *
 * The followings are the available model relations:
 * @property Articulos $idArticulo0
 * @property Cliente $idCliente0
 * @property Usuario $idUsuario0
 * @property Ciudad $ciudad
 * @property Empresa $empresa
 */
class Cartaremisora extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cartaremisora';
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
			array('Telefono, Cantidad_Articulo, Valor_Unitario_Articulo, Valor_Total, consecutivo', 'numerical', 'integerOnly'=>true),
			array('id, idArticulo, idCliente, idUsuario, Direccion, Ciudad, Flete_Pagadero, Numero_Factura, Numero_Bultos, Empresa', 'length', 'max'=>45),
			array('descripcion', 'length', 'max'=>10000),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, idArticulo, idCliente, idUsuario, Direccion, Telefono, Ciudad, Flete_Pagadero, Numero_Factura, Cantidad_Articulo, Valor_Unitario_Articulo, Valor_Total, Numero_Bultos, Fecha_Creacion, Fecha_Modificacion, descripcion, consecutivo, Empresa', 'safe', 'on'=>'search'),
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
			'idArticulo0' => array(self::BELONGS_TO, 'Articulos', 'idArticulo'),
			//'idCliente0' => array(self::BELONGS_TO, 'Cliente', 'idCliente'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
			'ciudad' => array(self::BELONGS_TO, 'Ciudad', 'Ciudad'),
			'empresa' => array(self::BELONGS_TO, 'Empresa', 'Empresa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idArticulo' => 'Id Articulo',
			'idCliente' => 'Id Cliente',
			'idUsuario' => 'Id Usuario',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Ciudad' => 'Ciudad',
			'Flete_Pagadero' => 'Flete Pagadero',
			'Numero_Factura' => 'Numero Factura',
			'Cantidad_Articulo' => 'Cantidad Articulo',
			'Valor_Unitario_Articulo' => 'Valor Unitario Articulo',
			'Valor_Total' => 'Valor Total',
			'Numero_Bultos' => 'Numero Bultos',
			'Fecha_Creacion' => 'Fecha Creacion',
			'Fecha_Modificacion' => 'Fecha Modificacion',
			'descripcion' => 'Descripcion',
			'consecutivo' => 'Consecutivo',
			'Empresa' => 'Empresa',
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
		$criteria->compare('idArticulo',$this->idArticulo,true);
		$criteria->compare('idCliente',$this->idCliente,true);
		$criteria->compare('idUsuario',$this->idUsuario,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('Flete_Pagadero',$this->Flete_Pagadero,true);
		$criteria->compare('Numero_Factura',$this->Numero_Factura,true);
		$criteria->compare('Cantidad_Articulo',$this->Cantidad_Articulo);
		$criteria->compare('Valor_Unitario_Articulo',$this->Valor_Unitario_Articulo);
		$criteria->compare('Valor_Total',$this->Valor_Total);
		$criteria->compare('Numero_Bultos',$this->Numero_Bultos,true);
		$criteria->compare('Fecha_Creacion',$this->Fecha_Creacion,true);
		$criteria->compare('Fecha_Modificacion',$this->Fecha_Modificacion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('consecutivo',$this->consecutivo);
		$criteria->compare('Empresa',$this->Empresa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cartaremisora the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
/*
esta funcion de behavoir lo que hace es buscar un archivo en componen behavior el cual esta el 
codigo fuente para poder tomar la fecha_creacion y fecha_modificacion y igualarla ala  hora del sistema del sistema 
*/
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
