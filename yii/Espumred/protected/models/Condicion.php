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
			array('id, descripcion, referencia, referencia1, referencia2, referencia3, referencia4, referencia5, referencia6, referencia7, referencia8, referencia9, referencia10, referencia11, referencia12, referencia13, referencia14, referencia15, referencia16, referencia17, referencia18, referencia19, referencia20, referencia21, referencia22, referencia23, referencia24, referencia25, referencia26, referencia27, referencia28, referencia29, referencia30, referencia31, referencia32,  referencia33, 
			 precioanterior, precioanterior1, precioanterior2, precioanterior3, precioanterior4, precioanterior5, precioanterior6, precioanterior7, precioanterior8, precioanterior9, precioanterior10, precioanterior11, precioanterior12, precioanterior13, precioanterior14, precioanterior16, precioanterior17, precioanterior18, precioanterior19, precioanterior20, precioanterior21, 
			 precioanterior22, precioanterior23, precioanterior24, precioanterior25,  precioanterior26, precioanterior27,  precioanterior28, precioanterior29, precioanterior30, 
			 precioanterior31, precioanterior32, precioanterior33, nuevoprecio, nuevoprecio1, nuevoprecio2, nuevoprecio3, nuevoprecio4, nuevoprecio5, nuevoprecio6, nuevoprecio7, nuevoprecio8, nuevoprecio9, nuevoprecio10, nuevoprecio11, nuevoprecio12, nuevoprecio13, nuevoprecio14, nuevoprecio15, nuevoprecio16, nuevoprecio17, nuevoprecio18, nuevoprecio19, nuevoprecio20, nuevoprecio21, nuevoprecio22, nuevoprecio23, nuevoprecio24, nuevoprecio25, nuevoprecio26, nuevoprecio27, nuevoprecio28, nuevoprecio29, nuevoprecio30, nuevoprecio31, nuevoprecio32, nuevoprecio33,   
			 piefactura, piefactura1, piefactura2, piefactura3, piefactura4, piefactura5, piefactura6, piefactura7, piefactura8, piefactura9, piefactura10, piefactura11, piefactura12, piefactura13, piefactura14,piefactura15,piefactura16,piefactura17,piefactura18, piefactura19,piefactura20,piefactura21,  
			 piefactura22, piefactura23, piefactura24, piefactura25, piefactura26, piefactura27, piefactura28, piefactura29 piefactura30, piefactura31, piefactura32,
			 rebate, rebate1, rebate2, rebate3, rebate4, rebate5, rebate6, rebate7, rebate8, rebate9, rebate10, rebate11, rebate12, rebate13, rebate14, rebate15, rebate16, rebate17, rebate18, rebate19, rebate20, rebate21, rebate22, rebate23, 
			 rebate24, rebate25, rebate26, rebate27, rebate28, rebate29, rebate30, rebate31, rebate32, rebate33, 
			 Dias, Dias1, Dias2, Dias3, Dias4, Dias5, Dias6, Dias7, Dias8, Dias9, Dias10, Dias11, Dias12, Dias13,Dias14,Dias15,Dias16,Dias17,Dias18,Dias19,Dias20,Dias21, 
			 Dias22,Dias23,Dias24,Dias25,Dias26,Dias27,Dias28,Dias29,Dias30,Dias31,Dias32,Dias33,
			 Sesenta,Sesenta1,Sesenta2,Sesenta3,Sesenta4,Sesenta5,Sesenta6,Sesenta7,Sesenta8,Sesenta9,Sesenta10,Sesenta11,Sesenta12,Sesenta13,Sesenta14,Sesenta15,
			 Sesenta16,Sesenta17,Sesenta18,Sesenta19,Sesenta20,Sesenta21,Sesenta22,Sesenta23,Sesenta24,Sesenta25,Sesenta26,Sesenta27,Sesenta28,Sesenta29,Sesenta30,  
			 Sesenta31,Sesenta32,Sesenta33,
			 Treinta,Treinta1, Treinta2, Treinta3, Treinta4, Treinta5, Treinta6, Treinta7, Treinta8, 
			 Treinta9, Treinta10, Treinta11, Treinta12, Treinta13, Treinta14, Treinta15, Treinta16, Treinta17, Treinta18, Treinta19, Treinta20, 
			 Treinta21, Treinta22, Treinta23, Treinta24, Treinta25, Treinta26, Treinta27, Treinta28, Treinta29, Treinta30, Treinta31, Treinta32,
			 Treinta33, 
			 Ocho, Ocho1, Ocho2, Ocho3, Ocho4, Ocho5, Ocho6, Ocho7, Ocho8, Ocho9, Ocho10, Ocho11, Ocho12, Ocho13, Ocho14, 
			 Ocho15, Ocho16, Ocho17, Ocho18, Ocho19, Ocho20, Ocho21, Ocho22, Ocho23, Ocho24,
			 Ocho25, Ocho26, Ocho27, Ocho28, Ocho29, Ocho30, Ocho31, Ocho32, Ocho33,  
			 Otro, Otro1, Otro2,Otro3,Otro4,Otro5,Otro6,Otro7,Otro8,Otro9,Otro10,Otro11,Otro12,Otro13,Otro14,Otro15,Otro16,Otro17,Otro18,Otro19,
			 Otro20,Otro21,Otro22,Otro23,Otro24,Otro25,Otro26,Otro27,Otro28,Otro29,Otro30,Otro31,Otro32,Otro33,Otro34'
          
         ,'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.

			array('id,descripcion, referencia, referencia1, referencia2, referencia3, referencia4, referencia5, referencia6, referencia7, referencia8, referencia9, referencia10, referencia11, referencia12, referencia13, referencia14, referencia15, referencia16, referencia17, referencia18, referencia19, referencia20, referencia21, referencia22, referencia23, referencia24, referencia25, referencia26, referencia27, referencia28, referencia29, referencia30, referencia31, referencia32,  referencia33, 
       precioanterior, precioanterior1, precioanterior2, precioanterior3, precioanterior4, precioanterior5, precioanterior6, precioanterior7, precioanterior8, precioanterior9, precioanterior10, precioanterior11, precioanterior12, precioanterior13, precioanterior14, precioanterior16, precioanterior17, precioanterior18, precioanterior19, precioanterior20, precioanterior21, 
       precioanterior22, precioanterior23, precioanterior24, precioanterior25,  precioanterior26, precioanterior27,  precioanterior28, precioanterior29, precioanterior30, 
       precioanterior31, precioanterior32, precioanterior33, nuevoprecio, nuevoprecio1, nuevoprecio2, nuevoprecio3, nuevoprecio4, nuevoprecio5, nuevoprecio6, nuevoprecio7, nuevoprecio8, nuevoprecio9, nuevoprecio10, nuevoprecio11, nuevoprecio12, nuevoprecio13, nuevoprecio14, nuevoprecio15, nuevoprecio16, nuevoprecio17, nuevoprecio18, nuevoprecio19, nuevoprecio20, nuevoprecio21, nuevoprecio22, nuevoprecio23, nuevoprecio24, nuevoprecio25, nuevoprecio26, nuevoprecio27, nuevoprecio28, nuevoprecio29, nuevoprecio30, nuevoprecio31, nuevoprecio32, nuevoprecio33,   
       piefactura, piefactura1, piefactura2, piefactura3, piefactura4, piefactura5, piefactura6, piefactura7, piefactura8, piefactura9, piefactura10, piefactura11, piefactura12, piefactura13, piefactura14,piefactura15,piefactura16,piefactura17,piefactura18, piefactura19,piefactura20,piefactura21,  
       piefactura22, piefactura23, piefactura24, piefactura25, piefactura26, piefactura27, piefactura28, piefactura29 piefactura30, piefactura31, piefactura32,
       rebate, rebate1, rebate2, rebate3, rebate4, rebate5, rebate6, rebate7, rebate8, rebate9, rebate10, rebate11, rebate12, rebate13, rebate14, rebate15, rebate16, rebate17, rebate18, rebate19, rebate20, rebate21, rebate22, rebate23, 
       rebate24, rebate25, rebate26, rebate27, rebate28, rebate29, rebate30, rebate31, rebate32, rebate33, 
       Dias, Dias1, Dias2, Dias3, Dias4, Dias5, Dias6, Dias7, Dias8, Dias9, Dias10, Dias11, Dias12, Dias13,Dias14,Dias15,Dias16,Dias17,Dias18,Dias19,Dias20,Dias21, 
       Dias22,Dias23,Dias24,Dias25,Dias26,Dias27,Dias28,Dias29,Dias30,Dias31,Dias32,Dias33,
       Sesenta,Sesenta1,Sesenta2,Sesenta3,Sesenta4,Sesenta5,Sesenta6,Sesenta7,Sesenta8,Sesenta9,Sesenta10,Sesenta11,Sesenta12,Sesenta13,Sesenta14,Sesenta15,
       Sesenta16,Sesenta17,Sesenta18,Sesenta19,Sesenta20,Sesenta21,Sesenta22,Sesenta23,Sesenta24,Sesenta25,Sesenta26,Sesenta27,Sesenta28,Sesenta29,Sesenta30,  
       Sesenta31,Sesenta32,Sesenta33,
       Treinta,Treinta1, Treinta2, Treinta3, Treinta4, Treinta5, Treinta6, Treinta7, Treinta8, 
       Treinta9, Treinta10, Treinta11, Treinta12, Treinta13, Treinta14, Treinta15, Treinta16, Treinta17, Treinta18, Treinta19, Treinta20, 
       Treinta21, Treinta22, Treinta23, Treinta24, Treinta25, Treinta26, Treinta27, Treinta28, Treinta29, Treinta30, Treinta31, Treinta32,
       Treinta33, 
       Ocho, Ocho1, Ocho2, Ocho3, Ocho4, Ocho5, Ocho6, Ocho7, Ocho8, Ocho9, Ocho10, Ocho11, Ocho12, Ocho13, Ocho14, 
       Ocho15, Ocho16, Ocho17, Ocho18, Ocho19, Ocho20, Ocho21, Ocho22, Ocho23, Ocho24,
       Ocho25, Ocho26, Ocho27, Ocho28, Ocho29, Ocho30, Ocho31, Ocho32, Ocho33, 
       Otro, Otro1, Otro2,Otro3,Otro4,Otro5,Otro6,Otro7,Otro8,Otro9,Otro10,Otro11,Otro12,Otro13,Otro14,Otro15,Otro16,Otro17,Otro18,Otro19,
       Otro20,Otro21,Otro22,Otro23,Otro24,Otro25,Otro26,Otro27,Otro28,Otro29,Otro30,Otro31,Otro32,Otro33,Otro34',  'safe', 'on'=>'search'),
       
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
			'informacionempleados' => array(self::HAS_MANY, 'Observaciones', 'condicion'),
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
			'referencia' => 'Referencia',
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
			
            
            'precioanterior' => 'precioanterior',
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
			      'precioanterior23' => 'precioanterior21',
            'precioanterior24' => 'precioanterior21',
            'precioanterior25' => 'precioanterior21',
            'precioanterior26' => 'precioanterior21',
            'precioanterior27' => 'precioanterior21',
            'precioanterior28' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',
            'precioanterior21' => 'precioanterior21',

            'nuevoprecio' => 'nuevoprecio',
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
            
            'piefactura' => 'piefactura',
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

          'rebate' => 'rebate',
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
          'rebate17' => 'rebate',
          'rebate18' => 'rebate',
          'rebate19' => 'rebate',
          'rebate20' => 'rebate',
          'rebate22' => 'rebate',
          'rebate23' => 'rebate',
          'rebate24' => 'rebate',
          'rebate25' => 'rebate',
          'rebate26' => 'rebate',
          'rebate27' => 'rebate',
          'rebate28' => 'rebate',
          'rebate29' => 'rebate',
          'rebate30' => 'rebate',
          'rebate31' => 'rebate',
          'rebate32' => 'rebate',
          'rebate33' => 'rebate',
          
          'Dias' => 'Dias',
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

          'Treinta' => 'Treinta',
          'Treinta1' => 'Treinta',
          'Treinta2' => 'Treinta',
          'Treinta3' => 'Treinta',
          'Treinta4' => 'Treinta',
          'Treinta5' => 'Treinta',
          'Treinta6' => 'Treinta',
          'Treinta7' => 'Treinta',
          'Treinta8' => 'Treinta',
          'Treinta9' => 'Treinta',
          'Treinta10' => 'Treinta',
          'Treinta11' => 'Treinta',
          'Treinta12' => 'Treinta',
          'Treinta13' => 'Treinta',
          'Treinta14' => 'Treinta',
          'Treinta14' => 'Treinta',
          'Treinta16' => 'Treinta',
          'Treinta17' => 'Treinta',
          'Treinta18' => 'Treinta',
          'Treinta19' => 'Treinta',
          'Treinta20' => 'Treinta',
          'Treinta21' => 'Treinta',
          'Treinta22' => 'Treinta',
          'Treinta23' => 'Treinta',
          'Treinta24' => 'Treinta',
          'Treinta25' => 'Treinta',
          'Treinta26' => 'Treinta',
          'Treinta27' => 'Treinta',
          'Treinta28' => 'Treinta',
          'Treinta29' => 'Treinta',
          'Treinta30' => 'Treinta',
          'Treinta31' => 'Treinta',
          'Treinta32' => 'Treinta',
          'Treinta33' => 'Treinta',

          'Sesenta' => 'Sesenta',
          'Sesenta1' => 'Sesenta',
          'Sesenta2' => 'Sesenta',
          'Sesenta3' => 'Sesenta',
          'Sesenta4' => 'Sesenta',
          'Sesenta5' => 'Sesenta',
          'Sesenta6' => 'Sesenta',
          'Sesenta7' => 'Sesenta',
          'Sesenta8' => 'Sesenta',
          'Sesenta9' => 'Sesenta',
          'Sesenta10' => 'Sesenta',
          'Sesenta11' => 'Sesenta',
          'Sesenta12' => 'Sesenta',
          'Sesenta13' => 'Sesenta',
          'Sesenta14' => 'Sesenta',
          'Sesenta15' => 'Sesenta',
          'Sesenta16' => 'Sesenta',
          'Sesenta17' => 'Sesenta',
          'Sesenta18' => 'Sesenta',
          'Sesenta19' => 'Sesenta',
          'Sesenta20' => 'Sesenta',
          'Sesenta21' => 'Sesenta',
          'Sesenta22' => 'Sesenta',
          'Sesenta23' => 'Sesenta',
          'Sesenta24' => 'Sesenta',
          'Sesenta25' => 'Sesenta',
          'Sesenta26' => 'Sesenta',
          'Sesenta27' => 'Sesenta',
          'Sesenta28' => 'Sesenta',
          'Sesenta29' => 'Sesenta',
          'Sesenta30' => 'Sesenta',
          'Sesenta31' => 'Sesenta',
          'Sesenta32' => 'Sesenta',
          'Sesenta33' => 'Sesenta',

          'Ocho' => 'Ocho',
          'Ocho1' => 'Ocho',
          'Ocho2' => 'Ocho',
          'Ocho3' => 'Ocho',
          'Ocho4' => 'Ocho',
          'Ocho5' => 'Ocho',
          'Ocho6' => 'Ocho',
          'Ocho7' => 'Ocho',          
          'Ocho8' => 'Ocho',
          'Ocho9' => 'Ocho',
          'Ocho10' => 'Ocho',
          'Ocho11' => 'Ocho',
          'Ocho12' => 'Ocho',
          'Ocho13' => 'Ocho',
          'Ocho14' => 'Ocho',
          'Ocho15' => 'Ocho',
          'Ocho16' => 'Ocho',
          'Ocho17' => 'Ocho',
          'Ocho18' => 'Ocho',
          'Ocho19' => 'Ocho',
          'Ocho20' => 'Ocho',
          'Ocho21' => 'Ocho',
          'Ocho22' => 'Ocho',
          'Ocho23' => 'Ocho',          
          'Ocho24' => 'Ocho',
          'Ocho25' => 'Ocho',
          'Ocho26' => 'Ocho',
          'Ocho27' => 'Ocho',
          'Ocho28' => 'Ocho',
          'Ocho29' => 'Ocho',
          'Ocho30' => 'Ocho',
          'Ocho32' => 'Ocho',
          'Ocho33' => 'Ocho',
          'Ocho34' => 'Ocho',

          'Otro' => 'Otro',
          'Otro1' => 'Otro',
          'Otro2' => 'Otro',
          'Otro3' => 'Otro',
          'Otro4' => 'Otro',
          'Otro5' => 'Otro',
          'Otro6' => 'Otro',
          'Otro7' => 'Otro',
          'Otro8' => 'Otro',
          'Otro9' => 'Otro',
          'Otro10' => 'Otro',
          'Otro11' => 'Otro',
          'Otro12' => 'Otro',
          'Otro13' => 'Otro',
          'Otro14' => 'Otro',
          'Otro15' => 'Otro',
          'Otro16' => 'Otro',
          'Otro17' => 'Otro',
          'Otro18' => 'Otro',
          'Otro19' => 'Otro',
          'Otro20' => 'Otro',
          'Otro21' => 'Otro',
          'Otro22' => 'Otro',
          'Otro23' => 'Otro',
          'Otro24' => 'Otro',
          'Otro25' => 'Otro',
          'Otro26' => 'Otro',
          'Otro27' => 'Otro',
          'Otro28' => 'Otro',
          'Otro29' => 'Otro',
          'Otro30' => 'Otro',
          'Otro31' => 'Otro',
          'Otro32' => 'Otro',
          'Otro33' => 'Otro',
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

		$criteria=new CDbCriteria;

    $criteria->compare('id',$this->id,true);
    $criteria->compare('descripcion',$this->descripcion,true);
    $criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('referencia1',$this->referencia1,true);
		$criteria->compare('referencia2',$this->referencia2,true);
		$criteria->compare('referencia3',$this->referencia3,true);
		$criteria->compare('referencia4',$this->referencia4,true);
		$criteria->compare('referencia5',$this->referencia5,true);
		$criteria->compare('referencia6',$this->referencia6,true);
		$criteria->compare('referencia7',$this->referencia7,true);
		$criteria->compare('referencia8',$this->referencia8,true);
		$criteria->compare('referencia9',$this->referencia9,true);
		$criteria->compare('referencia10',$this->referencia10,true);
		$criteria->compare('referencia11',$this->referencia11,true);
		$criteria->compare('referencia12',$this->referencia12,true);
		$criteria->compare('referencia13',$this->referencia13,true);
		$criteria->compare('referencia14',$this->referencia14,true);
		$criteria->compare('referencia15',$this->referencia15,true);
		$criteria->compare('referencia16',$this->referencia16,true);
		$criteria->compare('referencia17',$this->referencia17,true);
		$criteria->compare('referencia18',$this->referencia18,true);
		$criteria->compare('referencia19',$this->referencia19,true);
		$criteria->compare('referencia20',$this->referencia20,true);
		$criteria->compare('referencia21',$this->referencia21,true);
		$criteria->compare('referencia22',$this->referencia22,true);
		$criteria->compare('referencia23',$this->referencia23,true);
		$criteria->compare('referencia24',$this->referencia24,true);
		$criteria->compare('referencia25',$this->referencia25,true);
		$criteria->compare('referencia26',$this->referencia26,true);
		$criteria->compare('referencia27',$this->referencia27,true);
		$criteria->compare('referencia28',$this->referencia28,true);
		$criteria->compare('referencia29',$this->referencia29,true);
		$criteria->compare('referencia30',$this->referencia30,true);
		$criteria->compare('referencia31',$this->referencia31,true);
		$criteria->compare('referencia32',$this->referencia32,true);
		$criteria->compare('referencia33',$this->referencia33,true);
		
    $criteria->compare('precioanterior',$this->precioanterior,true);
		$criteria->compare('precioanterior1',$this->referencia1,true);
		$criteria->compare('precioanterior2',$this->referencia2,true);
		$criteria->compare('precioanterior3',$this->referencia3,true);
		$criteria->compare('precioanterior4',$this->referencia4,true);
		$criteria->compare('precioanterior5',$this->referencia5,true);
		$criteria->compare('precioanterior6',$this->referencia6,true);
        
		
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
