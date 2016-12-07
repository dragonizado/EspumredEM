<?php

/**
 * This is the model class for table "tbl_pedidos".
 *
 * The followings are the available columns in table 'tbl_pedidos':
 * @property integer $idtbl_pedidos
 * @property integer $Cod_Cliente
 * @property string $Obs_Entrega
 * @property integer $tbl_Bonificacion_idtbl_Bonificacion
 * @property integer $tbl_Productos_idtbl_Productos
 * @property string $Descripcion
 * @property integer $Cantidad
 * @property double $Val_Unitario
 * @property double $Val_Kilo
 * @property integer $Por_Descuento
 * @property double $Val_Descuento
 * @property integer $Val_Total
 * @property string $Fecha_Entrega
 *
 * The followings are the available model relations:
 * @property TblBonificacion $tblBonificacionIdtblBonificacion
 * @property TblProductos $tblProductosIdtblProductos
 */
class Pedidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_pedidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cod_Cliente, tbl_Productos_idtbl_Productos, Cantidad, Val_Unitario, Val_Kilo, Por_Descuento, Val_Descuento, Val_Total, Fecha_Entrega', 'required'),
			array('Cod_Cliente, tbl_Bonificacion_idtbl_Bonificacion, tbl_Productos_idtbl_Productos, Cantidad, Por_Descuento, Val_Total', 'numerical', 'integerOnly'=>true),
			array('Val_Unitario, Val_Kilo, Val_Descuento', 'numerical'),
			array('Obs_Entrega', 'length', 'max'=>100),
			array('Descripcion', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idtbl_pedidos, Cod_Cliente, Obs_Entrega, tbl_Bonificacion_idtbl_Bonificacion, tbl_Productos_idtbl_Productos, Descripcion, Cantidad, Val_Unitario, Val_Kilo, Por_Descuento, Val_Descuento, Val_Total, Fecha_Entrega', 'safe', 'on'=>'search'),
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
			'tblBonificacionIdtblBonificacion' => array(self::BELONGS_TO, 'TblBonificacion', 'tbl_Bonificacion_idtbl_Bonificacion'),
			'tblProductosIdtblProductos' => array(self::BELONGS_TO, 'TblProductos', 'tbl_Productos_idtbl_Productos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtbl_pedidos' => 'Numero de Pedido',
			'Cod_Cliente' => 'Codigo Cliente',
			'Obs_Entrega' => 'Observacion de Entrega',
			'tbl_Bonificacion_idtbl_Bonificacion' => 'Bonificacion',
			'tbl_Productos_idtbl_Productos' => 'Productos',
			'Descripcion' => 'Descripcion',
			'Cantidad' => 'Cantidad',
			'Val_Unitario' => 'Valor Unitario',
			'Val_Kilo' => 'Valor Kilo',
			'Por_Descuento' => 'Porcentaje Descuento',
			'Val_Descuento' => 'Valor Descuento',
			'Val_Total' => 'Valor Total',
			'Fecha_Entrega' => 'Fecha Entrega',
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

		$criteria->compare('idtbl_pedidos',$this->idtbl_pedidos);
		$criteria->compare('Cod_Cliente',$this->Cod_Cliente);
		$criteria->compare('Obs_Entrega',$this->Obs_Entrega,true);
		$criteria->compare('tbl_Bonificacion_idtbl_Bonificacion',$this->tbl_Bonificacion_idtbl_Bonificacion);
		$criteria->compare('tbl_Productos_idtbl_Productos',$this->tbl_Productos_idtbl_Productos);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Cantidad',$this->Cantidad);
		$criteria->compare('Val_Unitario',$this->Val_Unitario);
		$criteria->compare('Val_Kilo',$this->Val_Kilo);
		$criteria->compare('Por_Descuento',$this->Por_Descuento);
		$criteria->compare('Val_Descuento',$this->Val_Descuento);
		$criteria->compare('Val_Total',$this->Val_Total);
		$criteria->compare('Fecha_Entrega',$this->Fecha_Entrega,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pedidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
