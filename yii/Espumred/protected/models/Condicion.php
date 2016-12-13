<?php

/**
 * This is the model class for table "informacionacademica".
 *
 * The followings are the available columns in table 'informacionacademica':
 * @property string $id
 * @property string $nombreEmpleado
 * @property string $escolaridad
 * @property string $tituloObtenido
 * @property string $institucion
 * @property string $primerCurso
 * @property string $segundoCurso
 * @property string $tercerCurso
 *
 * The followings are the available model relations:
 * @property Informacionempleado[] $informacionempleados
 */
class Condicion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'condicion';
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
			array('id, descripcion, 
       referencia, referencia1, referencia2, referencia3, referencia4, referencia5, referencia6, referencia7, referencia8, referencia9, referencia10, referencia11, referencia12, referencia13, referencia14, referencia15, referencia16, referencia17, referencia18, referencia19, referencia20, referencia21, referencia22, referencia23, referencia24, referencia25, referencia26, referencia27, referencia28, referencia29, referencia30, referencia31, referencia32,  referencia33,referencia34 
			 precioanterior, precioanterior1, precioanterior2, precioanterior3, precioanterior4, precioanterior5, precioanterior6, precioanterior7, precioanterior8, precioanterior9, precioanterior10, precioanterior11, precioanterior12, precioanterior13, precioanterior14, precioanterior16, precioanterior17, precioanterior18, precioanterior19, precioanterior20, precioanterior21, precioanterior22, precioanterior23, precioanterior24, precioanterior25,  precioanterior26, precioanterior27,  precioanterior28, precioanterior29, precioanterior30, precioanterior31, precioanterior32, precioanterior33,precioanterior34 
       nuevoprecio, nuevoprecio1, nuevoprecio2, nuevoprecio3, nuevoprecio4, nuevoprecio5, nuevoprecio6, nuevoprecio7, nuevoprecio8, nuevoprecio9, nuevoprecio10, nuevoprecio11, nuevoprecio12, nuevoprecio13, nuevoprecio14, nuevoprecio15, nuevoprecio16, nuevoprecio17, nuevoprecio18, nuevoprecio19, nuevoprecio20, nuevoprecio21, nuevoprecio22, nuevoprecio23, nuevoprecio24, nuevoprecio25, nuevoprecio26, nuevoprecio27, nuevoprecio28, nuevoprecio29, nuevoprecio30, nuevoprecio31, nuevoprecio32, nuevoprecio33,nuevoprecio34   
			 piefactura, piefactura1, piefactura2, piefactura3, piefactura4, piefactura5, piefactura6, piefactura7, piefactura8, piefactura9, piefactura10, piefactura11, piefactura12, piefactura13, piefactura14,piefactura15,piefactura16,piefactura17,piefactura18, piefactura19,piefactura20,piefactura21, piefactura22, piefactura23, piefactura24, piefactura25, piefactura26, piefactura27, piefactura28, piefactura29 piefactura30, piefactura31, piefactura32,piefactura33,piefactura34,
       rebate, rebate1, rebate2, rebate3, rebate4, rebate5, rebate6, rebate7, rebate8, rebate9, rebate10, rebate11, rebate12, rebate13, rebate14, rebate15, rebate16, rebate17, rebate18, rebate19, rebate20, rebate21, rebate22, rebate23, rebate24, rebate25, rebate26, rebate27, rebate28, rebate29, rebate30, rebate31, rebate32, rebate33,rebate34 
       Dias, Dias1, Dias2, Dias3, Dias4, Dias5, Dias6, Dias7, Dias8, Dias9, Dias10, Dias11, Dias12, Dias13,Dias14,Dias15,Dias16,Dias17,Dias18,Dias19,Dias20,Dias21, Dias22,Dias23,Dias24,Dias25,Dias26,Dias27,Dias28,Dias29,Dias30,Dias31,Dias32,Dias33,Dias34,
			 Sesenta,Sesenta1,Sesenta2,Sesenta3,Sesenta4,Sesenta5,Sesenta6,Sesenta7,Sesenta8,Sesenta9,Sesenta10,Sesenta11,Sesenta12,Sesenta13,Sesenta14,Sesenta15, Sesenta16,Sesenta17,Sesenta18,Sesenta19,Sesenta20,Sesenta21,Sesenta22,Sesenta23,Sesenta24,Sesenta25,Sesenta26,Sesenta27,Sesenta28,Sesenta29,Sesenta30, Sesenta31,Sesenta32,Sesenta33,Sesenta34,
			 Treinta,Treinta1, Treinta2, Treinta3, Treinta4, Treinta5, Treinta6, Treinta7, Treinta8, Treinta9, Treinta10, Treinta11, Treinta12, Treinta13, Treinta14, Treinta15, Treinta16, Treinta17, Treinta18, Treinta19, Treinta20, Treinta21, Treinta22, Treinta23, Treinta24, Treinta25, Treinta26, Treinta27, Treinta28, Treinta29, Treinta30, Treinta31, Treinta32, Treinta33, Treinta34,
			 Ocho, Ocho1, Ocho2, Ocho3, Ocho4, Ocho5, Ocho6, Ocho7, Ocho8, Ocho9, Ocho10, Ocho11, Ocho12, Ocho13, Ocho14, Ocho15, Ocho16, Ocho17, Ocho18, Ocho19, Ocho20, Ocho21, Ocho22, Ocho23, Ocho24, Ocho25, Ocho26, Ocho27, Ocho28, Ocho29, Ocho30, Ocho31, Ocho32, Ocho33, Ocho34 
			 Otro, Otro1, Otro2,Otro3,Otro4,Otro5,Otro6,Otro7,Otro8,Otro9,Otro10,Otro11,Otro12,Otro13,Otro14,Otro15,Otro16,Otro17,Otro18,Otro19, Otro20,Otro21,Otro22,Otro23,Otro24,Otro25,Otro26,Otro27,Otro28,Otro29,Otro30,Otro31,Otro32,Otro33,Otro34,Otro35,Otro36'
         ,'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
      // ALTER TABLE `condicion` ADD `referencia35` VARCHAR(45) NOT NULL AFTER `precioanterior34`;
      // ALTER TABLE `condicion` ADD `precioanterior35` VARCHAR(45) NOT NULL AFTER `precioanterior34`;
      // ALTER TABLE `condicion` ADD `nuevoprecio35` VARCHAR(45) NOT NULL AFTER `nuevoprecio34`;
      // ALTER TABLE `condicion` ADD `piefactura35` VARCHAR(45) NOT NULL AFTER `piefactura34`;
      // ALTER TABLE `condicion` ADD `rebate35` VARCHAR(45) NOT NULL AFTER `rebate34`;
      // ALTER TABLE `condicion` ADD `Dias35` VARCHAR(45) NOT NULL AFTER `Dias34`;
      // ALTER TABLE `condicion` ADD `Sesenta35` VARCHAR(45) NOT NULL AFTER `Sesenta34`;
      // ALTER TABLE `condicion` ADD `Treinta35` VARCHAR(45) NOT NULL AFTER `Treinta34`;
      // ALTER TABLE `condicion` ADD `Ocho35` VARCHAR(45) NOT NULL AFTER `Ocho34`;
      // ALTER TABLE `condicion` ADD `Otro35` VARCHAR(45) NOT NULL AFTER `Otro34`;
      
       
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
			'Observaciones0' => array(self::HAS_MANY, 'Observaciones', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
      
			'id' => 'ID',
      'descripcion' => 'descripcion',
			'referencia1' => 'Referencia1',
			'referencia2' => 'Referencia2',
			'referencia3' => 'Referencia3',
			'referencia4' => 'Referencia4',
			'referencia5' => 'Referencia5',
			'referencia6' => 'Referencia6',
			'referencia7' => 'Referencia7',
			'referencia8' => 'Referencia8',
			'referencia9' => 'Referencia9',
			'referencia10' => 'Referencia11',
			'referencia12' => 'Referencia12',
			'referencia13' => 'Referencia13',
			'referencia14' => 'Referencia14',
			'referencia15' => 'Referencia15',
			'referencia16' => 'Referencia16',
			'referencia17' => 'Referencia17',
			'referencia18' => 'Referencia18',
			'referencia19' => 'Referencia19',
			'referencia20' => 'Referencia20',
			'referencia21' => 'Referencia21',
			'referencia22' => 'Referencia22',
			'referencia23' => 'Referencia23',
			'referencia24' => 'Referencia24',
			'referencia25' => 'Referencia25',
			'referencia26' => 'Referencia26',
			'referencia27' => 'Referencia27',
			'referencia28' => 'Referencia28',
			'referencia29' => 'Referencia29',
			'referencia30' => 'Referencia30',
			'referencia31' => 'Referencia31',
			'referencia32' => 'Referencia32',
			'referencia33' => 'Referencia33',
      'referencia34' => 'Referencia34',
			
            
            
            'precioanterior1' => 'precioanterior1',
            'precioanterior2' => 'precioanterior2',
            'precioanterior3' => 'precioanterior3',
            'precioanterior4' => 'precioanterior4',
            'precioanterior5' => 'precioanterior5',
            'precioanterior6' => 'precioanterior6',
            'precioanterior7' => 'precioanterior7',
            'precioanterior8' => 'precioanterior8',
            'precioanterior9' => 'precioanterior9',
            'precioanterior10' => 'precioanterior10',
            'precioanterior11' => 'precioanterior11',
            'precioanterior12' => 'precioanterior12',
            'precioanterior13' => 'precioanterior13',
            'precioanterior14' => 'precioanterior14',
            'precioanterior15' => 'precioanterior15',
            'precioanterior16' => 'precioanterior16',
            'precioanterior17' => 'precioanterior17',
            'precioanterior18' => 'precioanterior18',
            'precioanterior19' => 'precioanterior19',
            'precioanterior20' => 'precioanterior20',
            'precioanterior21' => 'precioanterior21',
            'precioanterior22' => 'precioanterior22',
			      'precioanterior23' => 'precioanterior23',
            'precioanterior24' => 'precioanterior24',
            'precioanterior25' => 'precioanterior25',
            'precioanterior26' => 'precioanterior26',
            'precioanterior27' => 'precioanterior27',
            'precioanterior28' => 'precioanterior28',
            'precioanterior29' => 'precioanterior29',
            'precioanterior30' => 'precioanterior30',
            'precioanterior31' => 'precioanterior31',
            'precioanterior32' => 'precioanterior32',
            'precioanterior33' => 'precioanterior33',
            'precioanterior34' => 'precioanterior34',

            'nuevoprecio1' => 'nuevoprecio1',
            'nuevoprecio2' => 'nuevoprecio2',
            'nuevoprecio3' => 'nuevoprecio3',
            'nuevoprecio4' => 'nuevoprecio4',
            'nuevoprecio5' => 'nuevoprecio5',
            'nuevoprecio6' => 'nuevoprecio6',
            'nuevoprecio7' => 'nuevoprecio7',
            'nuevoprecio8' => 'nuevoprecio8',
            'nuevoprecio9' => 'nuevoprecio9',
            'nuevoprecio10' => 'nuevoprecio10',
            'nuevoprecio11' => 'nuevoprecio11',
            'nuevoprecio12' => 'nuevoprecio12',
            'nuevoprecio13' => 'nuevoprecio13',
            'nuevoprecio14' => 'nuevoprecio14',
            'nuevoprecio15' => 'nuevoprecio15',
            'nuevoprecio16' => 'nuevoprecio16',
            'nuevoprecio17' => 'nuevoprecio17',
            'nuevoprecio18' => 'nuevoprecio18',
            'nuevoprecio19' => 'nuevoprecio19',
            'nuevoprecio20' => 'nuevoprecio20',
            'nuevoprecio21' => 'nuevoprecio21',
            'nuevoprecio22' => 'nuevoprecio22',
            'nuevoprecio23' => 'nuevoprecio23',
            'nuevoprecio24' => 'nuevoprecio24',
            'nuevoprecio25' => 'nuevoprecio25',
            'nuevoprecio26' => 'nuevoprecio26',
            'nuevoprecio27' => 'nuevoprecio27',
            'nuevoprecio28' => 'nuevoprecio28',
            'nuevoprecio29' => 'nuevoprecio29',
            'nuevoprecio30' => 'nuevoprecio30',
            'nuevoprecio31' => 'nuevoprecio31',
            'nuevoprecio32' => 'nuevoprecio32',
            'nuevoprecio33' => 'nuevoprecio33',
            'nuevoprecio34' => 'nuevoprecio34',

            
            'piefactura1' => 'piefactura1',
            'piefactura2' => 'piefactura2',
            'piefactura3' => 'piefactura3',
            'piefactura4' => 'piefactura4',
            'piefactura5' => 'piefactura5',
            'piefactura6' => 'piefactura6',
            'piefactura7' => 'piefactura7',
            'piefactura8' => 'piefactura8',
            'piefactura9' => 'piefactura9',
           'piefactura10' => 'piefactura10',
           'piefactura11' => 'piefactura11',
           'piefactura12' => 'piefactura12',
           'piefactura13' => 'piefactura13',
           'piefactura14' => 'piefactura14',
           'piefactura15' => 'piefactura15',
           'piefactura16' => 'piefactura16',
           'piefactura17' => 'piefactura17',
           'piefactura18' => 'piefactura18',
           'piefactura19' => 'piefactura19',
           'piefactura20' => 'piefactura20',
           'piefactura21' => 'piefactura21',
          'piefactura22' => 'piefactura22',
          'piefactura23' => 'piefactura23',
          'piefactura24' => 'piefactura24',
          'piefactura25' => 'piefactura25',
          'piefactura26' => 'piefactura26',
          'piefactura27' => 'piefactura27',
          'piefactura28' => 'piefactura28',
          'piefactura29' => 'piefactura29',
          'piefactura30' => 'piefactura30',
          'piefactura31' => 'piefactura31',
          'piefactura32' => 'piefactura32',
          'piefactura33' => 'piefactura33',
          'piefactura34' => 'piefactura34',


          'rebate1' => 'rebate1',
          'rebate2' => 'rebate2',
          'rebate3' => 'rebate3',
          'rebate4' => 'rebate4',
          'rebate5' => 'rebate5',
          'rebate6' => 'rebate6',
          'rebate7' => 'rebate7',
          'rebate8' => 'rebate8',
          'rebate9' => 'rebate9',
          'rebate10' => 'rebate10',
          'rebate11' => 'rebate11',
          'rebate12' => 'rebate12',
          'rebate13' => 'rebate13',
          'rebate14' => 'rebate14',
          'rebate15' => 'rebate15',
          'rebate16' => 'rebate16',
          'rebate17' => 'rebate17',
          'rebate18' => 'rebate18',
          'rebate19' => 'rebate19',
          'rebate20' => 'rebate20',
          'rebate21' => 'rebate21',
          'rebate22' => 'rebate22',
          'rebate23' => 'rebate23',
          'rebate24' => 'rebate24',
          'rebate25' => 'rebate25',
          'rebate26' => 'rebate26',
          'rebate27' => 'rebate27',
          'rebate28' => 'rebate28',
          'rebate29' => 'rebate29',
          'rebate30' => 'rebate30',
          'rebate31' => 'rebate31',
          'rebate32' => 'rebate32',
          'rebate33' => 'rebate33',
          'rebate34' => 'rebate34',

          
          'Dias1' => 'Dias1',
          'Dias2' => 'Dias2',
          'Dias3' => 'Dias3',
          'Dias4' => 'Dias4',
          'Dias5' => 'Dias5',
          'Dias6' => 'Dias6',
          'Dias7' => 'Dias7',
          'Dias8' => 'Dias8',
          'Dias9' => 'Dias9',
          'Dias10' => 'Dias10',
          'Dias11' => 'Dias11',
          'Dias12' => 'Dias12',
          'Dias13' => 'Dias13',
          'Dias14' => 'Dias14',
          'Dias15' => 'Dias15',
          'Dias16' => 'Dias16',
          'Dias17' => 'Dias17',
          'Dias18' => 'Dias18',
          'Dias19' => 'Dias19',
          'Dias20' => 'Dias20',
          'Dias21' => 'Dias21',
          'Dias22' => 'Dias22',
          'Dias23' => 'Dias23',
          'Dias24' => 'Dias24',
          'Dias25' => 'Dias25',
          'Dias26' => 'Dias26',
          'Dias27' => 'Dias27',
          'Dias28' => 'Dias28',
          'Dias29' => 'Dias29',
          'Dias30' => 'Dias30',
          'Dias31' => 'Dias31',
          'Dias32' => 'Dias32',
          'Dias33' => 'Dias33',
          'Dias34' => 'Dias34',


          'Treinta1' => 'Treinta1',
          'Treinta2' => 'Treinta2',
          'Treinta3' => 'Treinta3',
          'Treinta4' => 'Treinta4',
          'Treinta5' => 'Treinta5',
          'Treinta6' => 'Treinta6',
          'Treinta7' => 'Treinta7',
          'Treinta8' => 'Treinta8',
          'Treinta9' => 'Treinta9',
          'Treinta10' => 'Treinta10',
          'Treinta11' => 'Treinta11',
          'Treinta12' => 'Treinta12',
          'Treinta13' => 'Treinta13',
          'Treinta14' => 'Treinta14',
          'Treinta14' => 'Treinta15',
          'Treinta16' => 'Treinta16',
          'Treinta17' => 'Treinta17',
          'Treinta18' => 'Treinta18',
          'Treinta19' => 'Treinta19',
          'Treinta20' => 'Treinta20',
          'Treinta21' => 'Treinta21',
          'Treinta22' => 'Treinta22',
          'Treinta23' => 'Treinta23',
          'Treinta24' => 'Treinta24',
          'Treinta25' => 'Treinta25',
          'Treinta26' => 'Treinta26',
          'Treinta27' => 'Treinta27',
          'Treinta28' => 'Treinta28',
          'Treinta29' => 'Treinta29',
          'Treinta30' => 'Treinta30',
          'Treinta31' => 'Treinta31',
          'Treinta32' => 'Treinta32',
          'Treinta33' => 'Treinta33',
          'Treinta34' => 'Treinta34',


          'Sesenta1' => 'Sesenta1',
          'Sesenta2' => 'Sesenta2',
          'Sesenta3' => 'Sesenta3',
          'Sesenta4' => 'Sesenta4',
          'Sesenta5' => 'Sesenta5',
          'Sesenta6' => 'Sesenta6',
          'Sesenta7' => 'Sesenta7',
          'Sesenta8' => 'Sesenta8',
          'Sesenta9' => 'Sesenta9',
          'Sesenta10' => 'Sesenta10',
          'Sesenta11' => 'Sesenta11',
          'Sesenta12' => 'Sesenta12',
          'Sesenta13' => 'Sesenta13',
          'Sesenta14' => 'Sesenta14',
          'Sesenta15' => 'Sesenta15',
          'Sesenta16' => 'Sesenta16',
          'Sesenta17' => 'Sesenta17',
          'Sesenta18' => 'Sesenta18',
          'Sesenta19' => 'Sesenta19',
          'Sesenta20' => 'Sesenta20',
          'Sesenta21' => 'Sesenta21',
          'Sesenta22' => 'Sesenta22',
          'Sesenta23' => 'Sesenta23',
          'Sesenta24' => 'Sesenta24',
          'Sesenta25' => 'Sesenta25',
          'Sesenta26' => 'Sesenta26',
          'Sesenta27' => 'Sesenta27',
          'Sesenta28' => 'Sesenta28',
          'Sesenta29' => 'Sesenta29',
          'Sesenta30' => 'Sesenta30',
          'Sesenta31' => 'Sesenta31',
          'Sesenta32' => 'Sesenta32',
          'Sesenta33' => 'Sesenta33',
          'Sesenta34' => 'Sesenta34',


          'Ocho1' => 'Ocho1',
          'Ocho2' => 'Ocho2',
          'Ocho3' => 'Ocho3',
          'Ocho4' => 'Ocho4',
          'Ocho5' => 'Ocho5',
          'Ocho6' => 'Ocho6',
          'Ocho7' => 'Ocho7',          
          'Ocho8' => 'Ocho8',
          'Ocho9' => 'Ocho9',
          'Ocho10' => 'Ocho10',
          'Ocho11' => 'Ocho11',
          'Ocho12' => 'Ocho12',
          'Ocho13' => 'Ocho13',
          'Ocho14' => 'Ocho14',
          'Ocho15' => 'Ocho15',
          'Ocho16' => 'Ocho16',
          'Ocho17' => 'Ocho17',
          'Ocho18' => 'Ocho18',
          'Ocho19' => 'Ocho19',
          'Ocho20' => 'Ocho20',
          'Ocho21' => 'Ocho21',
          'Ocho22' => 'Ocho22',
          'Ocho23' => 'Ocho23',          
          'Ocho24' => 'Ocho24',
          'Ocho25' => 'Ocho25',
          'Ocho26' => 'Ocho26',
          'Ocho27' => 'Ocho27',
          'Ocho28' => 'Ocho28',
          'Ocho29' => 'Ocho29',
          'Ocho30' => 'Ocho30',
          'Ocho31' => 'Ocho31',
          'Ocho32' => 'Ocho32',
          'Ocho33' => 'Ocho33',
          'Ocho34' => 'Ocho34',

          
          'Otro1' => 'Otro1',
          'Otro2' => 'Otro2',
          'Otro3' => 'Otro3',
          'Otro4' => 'Otro4',
          'Otro5' => 'Otro5',
          'Otro6' => 'Otro6',
          'Otro7' => 'Otro7',
          'Otro8' => 'Otro8',
          'Otro9' => 'Otro9',
          'Otro10' => 'Otro10',
          'Otro11' => 'Otro11',
          'Otro12' => 'Otro12',
          'Otro13' => 'Otro13',
          'Otro14' => 'Otro14',
          'Otro15' => 'Otro15',
          'Otro16' => 'Otro16',
          'Otro17' => 'Otro17',
          'Otro18' => 'Otro18',
          'Otro19' => 'Otro19',
          'Otro20' => 'Otro20',
          'Otro21' => 'Otro21',
          'Otro22' => 'Otro22',
          'Otro23' => 'Otro23',
          'Otro24' => 'Otro24',
          'Otro25' => 'Otro25',
          'Otro26' => 'Otro26',
          'Otro27' => 'Otro27',
          'Otro28' => 'Otro28',
          'Otro29' => 'Otro29',
          'Otro30' => 'Otro30',
          'Otro31' => 'Otro31',
          'Otro32' => 'Otro32',
          'Otro33' => 'Otro33',
          'Otro34' => 'Otro34',
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


		
	
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Informacionacademica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
