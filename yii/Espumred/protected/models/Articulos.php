<?php

/**
 * This is the model class for table "articulos".
 *
 * The followings are the available columns in table 'articulos':
 * @property string $id
 * @property string $Nombre_Articulo
 * @property string $Descripcion
 * @property integer $Valor
 * @property string $Fecha_Creacion
 * @property string $Fecha_Modificacion
 *
 * The followings are the available model relations:
 * @property Cartaremisora[] $cartaremisoras
 * @property Prestamos[] $prestamoses
 */
class Articulos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articulos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id, Nombre_Articulo, Descripcion, Valor', 'required'),
			array('Valor', 'numerical', 'integerOnly'=>true),
			array('id, Nombre_Articulo, Descripcion', 'length', 'max'=>45),
			array('Fecha_Creacion, Fecha_Modificacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Nombre_Articulo, Descripcion, Valor, Fecha_Creacion, Fecha_Modificacion', 'safe', 'on'=>'search'),
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
			'cartaremisoras' => array(self::HAS_MANY, 'Cartaremisora', 'idArticulo'),
			'prestamoses' => array(self::HAS_MANY, 'Prestamos', 'id_Articulo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Nombre_Articulo' => 'Nombre Articulo',
			'Descripcion' => 'Descripcion',
			'Valor' => 'Valor',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('Nombre_Articulo',$this->Nombre_Articulo,true);
		$criteria->compare('Descripcion',$this->Descripcion,true);
		$criteria->compare('Valor',$this->Valor);
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
	 * @return Articulos the static model class
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
