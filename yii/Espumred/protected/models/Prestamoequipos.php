<?php

 class Prestamoequipos extends CActiveRecord{

/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prestamoequipos';
	}

  /**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('equipo_solicitar, responsable' ,'required'),		
		array('equipo_solicitar, responsable, fecha_prestamo, fecha_solicitacion,estado', 'length', 'max'=>45),
		array('fecha_solicitacion, fecha_prestamo, firma', 'safe'),	
		
		array('observaciones','length', 'max'=>900),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
        array('id,equipo_solicitar, responsable, observaciones,fecha_prestamo, fecha_solicitacion,estado', 'safe', 'on'=>'search'),
		);
	}

/**
	 * @return array relational rules.
	 */
	/*public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		
		return array(
			'clientes' => array(self::HAS_MANY, 'Condicionescomerciales', 'nombreCliente'),

		);
	}
*/

/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(

		'id'=>'id', 
		'equipo_solicitar'=>'equipo_solicitar', 
		'responsable'=>'responsable', 
		'observaciones'=>'observaciones',
		'fecha_prestamo'=>'fecha_prestamo', 
		'fecha_solicitacion'=>'fecha_solicitacion',
		'estado'=>'estado',


		);
	}

public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('equipo_solicitar',$this->equipo_solicitar,true);
		$criteria->compare('responsable',$this->responsable,true);
		$criteria->compare('observaciones',$this->observaciones,true);
	    $criteria->compare('fecha_prestamo',$this->fecha_prestamo,true);
		$criteria->compare('fecha_solicitacion',$this->fecha_solicitacion,true);
		$criteria->compare('estado',$this->estado,true);

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

	         public function behaviors()
	{
	         return array(
	             'CTimestampBehavior' => array(
	              'class' => 'zii.behaviors.CTimestampBehavior',
	               'createAttribute' => 'fecha_solicitacion',
	               'updateAttribute' => 'fecha_prestamo',
	             'setUpdateOnCreate' => false,
	            ),
	      );
	}




}


