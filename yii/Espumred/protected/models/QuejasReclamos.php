<?php




class QuejasReclamos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'quejasreclamos';
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
			
	    array('codigo, NombreApellido, Empresa, Hechos, Documentacion, Firma, NombreCliente, Lote', 'required'),

		array('id, codigo, NombreApellido, Empresa, Firma, NombreCliente, Lote', 'length', 'max'=>45),
		array('Fecha', 'safe'),
		array('Documentacion','length','max'=>900),		
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
		array('id, codigo, NombreApellido, Empresa, Documentacion, Fecha, Firma, Hechos, NombreCliente, Lote', 'safe','on'=>'search'),
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
		

      //aqui vienen relaciones de modelos//
		

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'codigo' => 'codigo',
			'NombreApellido' => 'NombreApellido',
			'Empresa' => 'Empresa',
			'Hechos' => 'Hechos',
			'Documentacion' => 'Documentacion',
			'Fecha' => 'Fecha',
			'Firma' => 'Firma',
			'NombreCliente'=>'NombreCliente',
			'Lote'=>'Lote',

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
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('NombreApellido',$this->NombreApellido,true);
		$criteria->compare('Empresa',$this->Empresa,true);
		$criteria->compare('Hechos',$this->Hechos,true);
		$criteria->compare('Documentacion',$this->Documentacion);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Firma',$this->Firma,true);
	    $criteria->compare('NombreCliente',$this->NombreCliente,true);
		$criteria->compare('Lote',$this->Lote,true);


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
	              
	              //-------------------------------------//
	               'createAttribute' => 'Fecha',	               
	               'updateAttribute' => 'Fecha',
	               'setUpdateOnCreate' => true,
	            ),
	      );
	}
}
