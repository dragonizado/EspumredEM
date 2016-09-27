<?php

class IngresopersonalController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update','adminpersonal', 'admin','index','menu','ingreso',
					'index2','newPhoto','guardar_foto','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="porteria"'
			),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'update','adminpersonal', 'admin','index','menu','ingreso',
					'index2','newPhoto','guardar_foto','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="recepcion"'
			),

			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view', 'update','adminpersonal' ,'admin','index','menu','ingreso','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="ingresopersonal"'
			),


			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','view', 'update','adminpersonal' ,'admin','index','menu','ingreso','eliminar'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="talentohumano"'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Ingresopersonal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ingresopersonal']))
		{
			$model->attributes=$_POST['Ingresopersonal'];
			$model->estado="Confirmacion";
			if($model->save())
				$this->redirect(array('site/index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}


	/* funcion menu porteria*/

	public function actionMenu()
	{
		$model=new Ingresopersonal;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		// if(isset($_POST['Ingresopersonal']))
		// {
		// 	$model->attributes=$_POST['Ingresopersonal'];
		// 	if($model->save())
		// 		$this->redirect(array('view','id'=>$model->cc));
		// }

		$this->render('menu',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Ingresopersonal']))
		{
			$model->attributes=$_POST['Ingresopersonal'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Ingresopersonal;
		$dataProvider=new CActiveDataProvider('Ingresopersonal');
		$this->render('index',array(
			'dataProvider'=>$model->search2(),
		));
	}


	// public function actionIndex2()
	// {
	// 	$dataProvider=new CActiveDataProvider('Ingresopersonal');
	// 	$this->render('index-2',array(
	// 		'dataProvider'=>$dataProvider,
	// 	));
	// }


	// public function actionnewPhoto()
	// {
	// 	$model=new Ingresopersonal();
	// 	$this->render('newPhoto',array(
	// 		'model'=>$model,
	// 	));
	// }


	public function actionIndex2()
	{
		$this->render('index-2');
	}

	public function actionNewPhoto()
	{
		$this->render('test2');
	}

	public function actionSaveJpg()
	{
		$this->render('saveJpg');
	}

    public function actionGuardar_foto()
    {
      $this->render('guardar_foto');
    }


     public function actionFotos()
    {
    	  $img = "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCAFwAcIDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD6itV/CtGFMAVXt0XjA4q/Eh44rJuysiJPUljUip1HOAetMVOAAKnVQOtJLqTsKKd3oAHUUoGK0S1sLcUHJ5p4poAx0p9WS2IRkYopaBSEKDgUAd8UcU4HjtRYVxRkE88VHdyiK2klJ+6pOakGSMgVna8/+iCEHmZgnHp3/SnfS6AyQfLtFDH72WP1PNYEZa51/OSVgT9TW/ettUKo4ArF0JGkkurvg73IX3ApKNrIl66I7PRVAtvOA5kYn+n9K0wwzj1qraxCGBEH8IAq0uR2qrFeQ5RinfSkBJHI6UtA9xQO/ehcAYNHJ4NBXI60n2GkAIzTsE80gAFOzR6FCLgUY3daUYpDjHFK3Ua0DGDTiM00c+tKucU2mMOvUdaXBFAGKWpAUcij2FIRxwaUA9c0mrCGkZFN24FPJyKbzmpsOwY9OaYw5qQdMmkI4zVeQIYetNZQe1SHgc9KTk9KHpsMg246VG6k85qw5IHqajINFrq7EkVyMU1hxUxUDjNRkc1OtgIGUelRlcDg4qywBqJlxzS1egyqy+nWo2XuasMhAzTCAaVtdSrFRkz1qB4AeAODV5lxUbLiiVkIzJbJDk469agksI2HGa1mU8VE8ec1DuF7mHJpYYnANRtpJADAVuGIntQ0YUcVGqGnoc+1iV4IqF7UqMit+SNWGcVRmhAz71m1zFIyGhIHzUxowRjtWk8QPOKrvCPSs2rsoz/IHrRVww89aKrkfcd/M6y2XjPpV+Lp0qrbrgAEVcQCuy1zGSuyWPjBNTdqjA6YqQdMVfKZ9bC8j2pw69eKaD64pQauwmO7UopAc8UoOaaEnYUcUopKcADxSJE6mnAE9KUgDvQRgDmiwhRkCsXVW82/gTOREpc/jwK2w2F5/CucaRpru6uD0V/LH0H/ANemxdTM1q58mCSUdlIH1pfDdqVgtkI5ZgSP1NZ3iCTe8FuDkyyAYz2rp9CgAkA/55oP1/8A1U7N6jR0AXAGKeFA60gA6CnAEnmmXYFBPJNPApoApw7ZpAhevSgUvAoB9KLDuAHalAGKAaUgelK/caDHHFNyKfSUrj2EA75pecdaOBSnkdKYxKKO1P8AlIwKTeo7DSMdDSj+VDU5cDpQwsN57flTTT+vFNIPahbitYTFBoJ9qO2aGA2ilxxz1pPrUlIYR3x2phHGcVIwpmMdaWoiFwegFRlassMmo3HNG+oXITimlR3pxGDSGhqwELrxjFRFRnp0qyRzzUZWpt1KWxWZc8dKYyEVZZc9qjZexqWri0ZWYYNMK+lWNueoqNgc+lDAiKc9KRlGMYqXBzimlaljKrw9TnioHt1ftmrxGQQaZsHOBWbXULmabFfWonsGI4atNx6CmFcHnioki90ZX2F/7oorU2mip+YWLceRjB6VbU8VThPHWrKPxmu3YzkWVPGTTwx454quH6Yp284471otTNsn3A9acCKrq5A5pRLyO1USWQwpQeag8z0pyvnkGnYVyfNLg1HuOetKGHc0rEjxgc0uaZketG4UBfQLuVYLSWYnARSa5y33JYJvJ3OC7fU81pa/OFsxBnmdgmPYnmsu9mEaYU9B0pivYwH/ANL8QRoRlYF3H6k//WruNDjAhaUjG9uPoP8AJrgfDs5u5bvUSCMyMi57hTivQ9NVorOJGwGCjP1pWKiaAK8ZNP5J4qtu7g04S7aorcs9v50oAx7VAJOeuKkD+9AWJMijAPtURbPFKJM96TH0JQcUvJqMMKUPip31KQ8N604FaiL+mKA3PWnYaJD1py7SOahLetLuwKLX1KJcDnmgHGMio93vShvWiw9th+McNQKaWyeTQGyalrQVx4BzTe5zQG4xTSeetIGx/BAApCO1N3elBelfQVrjmBA60g5HNIWyMUmcVQAfamkDuKXcKaSPwqeoDSAMYphUk5p4NNLAdaG76ICHGeT+NMYY6c1ISDUdJjWg0jtSFccU5unWmE4JotdD8hjLx1qNhxzUpIxyajZsZFLZCIiKaVBFSHgdBTCfWpaKGlMYprLUme+aTbnvxUCZAymmY71OwAHrUZFJjWhEUB7VGUHcVORim4qGrivYg8v3oqfAooHcjiYg7SKnVgO9U43xxU4cdq6/JmcrXLKkHnmnhu1VQ/vTvMNaJWMm9Szkdc0vFVxJinLLnqOKYrk4O2nbuRVffz6YqQOOpp7IRKGB56CpAwPAbmq280qvzmhMVyx5uOKPMHT3qDcCcnrSbz1JouguZerTLNqdvDniFWkP48D+tY+uXfk200o6qp4qwLgXF9eXYbhW8pf+A9f1NYPiKYyRpbKfmmkVfwpeYnoX/DcHl2drDtGZSCw+pya72OQBQK4/QU23cUQ58uMt/T/GuoD44xQty1ct+YO1LvB6VVEhA9DSiQY60yi1vB70oY461WEoJx3p/netIpFgOc9aUSHuareaCcAnNKHxzmgNiyJAOtO8wHnNVRKKcHB60DLJk9DSq/NVgwpd3Oc0DRYEnGD+NL5marbs8Zo3npmgdyyGA704SYqqHIzzSiQ89eaBljzMninb+McVV388cUvmEd80nqOxY8z0oL89arbzgg0CQjpU2EWPM5pd+eM1WZyaN5xg0mgLO7n6UF+Kr+aabuPTNGwE+8464phlxxmoix7mkyD3ov3C+hMZB9aa7578VEWpC3pQxbjyfekJHrUZfFIWB5zRa4Di9MLY6mmPIKYz7u+KFYpakhbNMbkc03cfWmlhnmpbAB360MBjGelMYjPBxTWcdjU7sTHZx1pS+RxiombNN3UrXESE96ZnP400saTcB3qEik9BSQaTvTCx+lKGB5qWhC7R70UZ/wBoUUXQWZnxPkAGplY5xVSFzgZNWR7da63ZGcnbclVsHpmnbz61DuJ6UcnvTTZlcn8wmnB8dfxqEE9M07J6GqTES7gehpwkPrUKmnK3bNNagTK/FOD+9RAilp2FuSh/Wor64W2tJZ2IARSf0o+hrK8Sux04wZwZ3WMY9zU7agZloWh09N5G+TMjH3Y5/rWFcy/adZgizny1Ln+VbV0wRRGP4VrA0oCfVLu6PIV9gJ9BTV7JE6Hb6Cv+smwAchQfYCtvzPyrJ0eIQ2MfXc2XP41f3Z4xSWqNYrSxPvGOtG41DkU7J6E0y9iXeB3pd5Pc1COvrTw1A0SDIO4GneYSMGo88YoBwOlIdiQOw54p4kB68VDkY4pVGRk0AWFcdjmlDmoFIzgd6cGz0ouMl3nHFAkqLdjntS9aBkm+lDnpUQJxmlB5oKJt5o8ztiotxxg0ZFAibfTS5pmc0meetKwEm7jpQG6nNRkk9KTkUMESlx60F/eoTxyKUH1qWFiQsT3xTC5HvSZ9DTHJxgik9gSHByeaTzCfWo/rRmjm0sFh5k/Gm72zimkgUhPpRcH2Atg0hkphzTeaEkGpIZMjJpm/1phJpKl92A8v70wmjvTW69elKwhSwHFN3e9MJBGe9NJOOaTAkLkdD1qMyc0xjmm596j1Ae0maUN3zUVGeKTbHexLv/2/0oqLA9KKzEV4skYxVhSMdOarwmrAFdzVzGoxRThz1xzTeM8U7GDg4oWhndDtuKUA556UAtxS5GDVBd9RV6cU8KMcn8aaPfFOXOD/AEqkFxSvPAo+bjNOpM+pppoBawdamMup21t/DGrSt9eg/nW9254rmZH8/U7y43ZVdsa+2Bz/ADpX0JZQ1e48qGWTP3EJrP8ADcDtp6sxw1w2c+5NLr8mbRogcGYhB71r6FahWtYeyjdj6CpfcfkdRboI4UjH8IAqQdcUKM8ingAdqZohDzgYp3PpSjFLzQWhAewpy4/GgAYz0peB6UDQoP0oz602VGI+Q4NOUHHzUhgAeop9IBgU4D15oYJCA9geRS8jtRilAOeDSKsIo7E96fxSbc9+aAPXvS2GC5I57U7NGQKCozkHmnsOwhbB607OaaUyc04AYzRa4BwcjNGMcYoAz3oOcUW1EJkil+8OlLgcGlqbsYwjBAoHPFO+tGD2oeiCw3OByOaYxJOCKkbPpTCOelTbqgG49KCMEjNLgqODig4xkd6QhvUUmO1KcdqMU07jeowjmmsoxUhHGTTcflSfkTaxERxTeOalIz0phHNLYYzrSFRT9pNNIxRshEeOOlMKipj0poBGcVOwIgMZHNNIx3qZgSOmKjI96T1FuMooII6iiosAUUUU7AVYiAKsA8j0qrC2Ccc1YDYrrMZ6skozSdBS0WuZ3sxw4p6kAE4yajU4NPHJ45p3AeDT+n0NMDdiKfn0NUh2uOFLTSeBmlyPWnuCGXEghgeVuiKSa5a3JFiZWB3TFpCfqa2fEd00Gmukf+smIjX3J4rJuCIoUi9AB+VK9nYW5z2qMZ7+0tlOcN5hH0rrtChDTNIwGUUKPauQtgLjXJpjk+UAg9BXc6JHttzIRjexNLqOPc1F4pxGKaDk0uCD1oZohw46ingcc03vTs44oKsHHTFKMHr2pB704AntQxgPWlXntSAbeCKeOF9DSKsJg0oyOaTOKCc9qQDhnqacCMdqYCeRmlz2NJMqw/FITxx3pN2OtOGM4p3QCDg4NG4A0uPajBPIHNAxcg9DilxxwKaFI608Z7VO2gxMHtikbinDg5pGI6miIhAfUdKUc8dKBjHIoGQ3A4pegxelJS98UdulMBDyKbgjrTzTCCTSYrAcHrTQMcmnDk9eaRl44FSAwjHek5p+cj3plK4Dd+WwBxSkcdaXCgelNJyMYoD1Gn2pjAk5p4HbPFNPBwKGLYbgetNbrTzzTWo6CG4oxSmkqW9LDGFajYdqmIzTWAXk0WQtyFl79qbjFSY4+tNPsKnQLBu9qKTd7D8qKOULmfBxzU688+1VoiQOTU6Pk9K6r66GE9ycDjmimg8807IxmmZ2FFPTOaYPWlTr1oYEmecU9SMDmoxj8acpAGDyaq/YF5kg9qUD06U0NjnFKGNNN7DZgeInM2o2NqDwjGVh9Bx/OqWoSgKzH+EZp8k4u9cu3HK2yrED79T/AErN124EVnMQcFgVH1NT1JexT0Eb45rpgcyuSPzr0Gwi8m0ijxyFGa4/QbXEFvFt6kZx+tduo2qBnpSWrLiSACjBzzSKcinjPpVGiDB7U4DI4NIT2pVPpSGhQD1pwJBpvOcYpee1BQuSTinUxQwOWp/bJHFTcELijBpB7UZqblLVjlKjrSEgmkFL0OTSvoAqnPFO57cU1fUUp3A5Bp3sh7jw3qKXgdqZvxxQrtkg0rjQ457UoyO+aAaXqam7uNMTrTWOeM048d6aR6daafcethUPYmnUwjB4pwOaAQd/ahSG6UdeKAAOlF7CeoHJ4OCKQHtTjkimDg89qLiQEc03JJ4pxwRTCRmpYIQ5B6ik/WlzR+NJsYg6U3pn0oznjNI3y0J6AIeKYafnPUU33FG6FuJnikpcA0H0o9RDTzxTaU8cUlILNbhTXAI5pT0zTWJIIoWgK5G2RwtJ9OaVgSp5xmmDKj+tS/MHYdsb1opOPU0VVxWMqM5NWEAPPeqqD3JqdGHQitnuc03cmDrnAPNOB6gmogACQf4qk7gcVaIHjgetOpq/rS55ximO48E0pbH400H2peDjvS3GtCRWPTBPFLI4jjZzwFBNItZ3iG5e30mcp94rtH1PFNCMTTiDbS3fe4lZyf0H6CsfXpDLJbWwHMkgJ+grdEYt7KOEdFQCubMyXniARoSRbpz9TSWiV/6uK51mgqPtCJj7iZzXTKMd6w9CiB3zDvhfyrcp76mkdh2KU8c00GndetOxYoOad05poAFLjmkyh2eetOAz1FMHXOKeOKQxWIHWlG4d6YOTyKcOlJ7DTshR06UuAR70nHal/GodwXkAIHGce9KDxjGaTk8AUnPWky0PXgdMZpNw/KlwDTTz7CjmfUELy3PpThyetMHcU5SOmKFcB2T3NKSc4xSYHY0cg8il1AcaaTmgZHNHJpoPUM+9O5FMAb0p2DS2AWlpgyO1Lg+v1pNjWoH5QcGoQ7ggMM81KR9RikZQefShPqIXt0phHJNPxjrTWIzikwQwUHAHSjtRUtsYwjk9KQ084A60wmhBew3mjrxSnrxSZNUAgGD1oOKDxSd6RIjfSm0pPbFJQ30AbnHBOc03f7dDTnH8WOlNPTnikuwbDC34CmHB605h3ptDuMT8aKNn+0KKm6FoZKHBqVfm61AjZqZSBxiup6nLLXUnwBj2pwYE4qJTzinKcNnjFUZa7EwzTwc1CCc08DmmVuSdKUHFNHrS0r6jSaJAO2f1rC8Tzl3srEDPmy72H+yvNbak1zV4Tc+I3Y9LWEKPq1DegN6hdSqV6EYHNc7oS+ZeXd0TnfJgH6Vr6tOILeWXP3VJFUNAtsWEfUPLj8zRchJnb6JbrDZoc8v85/GtKq9sgijSMZwBirHSmlZHQLS7hSfhSgntRcaHindOtM9BTqCloOBB6U4AZ5po4pVBB60hocT6ClHTnNGMUUtwDjvSgDPWkHuKAwzg8UikO3E8A04jjHfFIvqB+dOySOnNK+oxhUjjtSquByKeFz1pCPek1qO4gA9KBn8KUAHg0d8VIXEU8U8EdM0zAHagDLA0XC9h3B6UHjoOaMd84oJ/Gpu7gLye5FAPOKAT0NAHoKBhgdqXijGaTbg9aew9GBGR1pvPcjinEe9NpIXoIx496aADy1OIGaaRyaT2ATpkUgwetGccetKOKXQBpA7AU0gU/PpTT60XGhpxmjHvSZx1GaCTTegPyEbHrTacVOM0w9KLi3Agd+aaaXGKSmybAelNbG3PalOMc0x8kYB4oSCwz2xTc9gOaU9OaYTUsfUOaKXj1oqbMNDEj6Y9KeD71HGc9qlWut2RyyJIzzT9xPrUeQg/rSq2ec/hRcy2Jk55FSBs8YJqFG4qVW4yae5VtSRfc07NRg9CKkByORQAMwRSx6AZrk9OuTdtd32eJZmVT/srx/St/Wrr7Hpdxcf3Yzj64rndOi+zaZBGT/ACfqeTRqLfQyvFN2q26WxJzPIEra0SFWktYCOF+b8hXPauVuNWtbfGdmZD/Suu8PwA3BlxxGgUfU1DCO50qHAqUduagXJ+lS5OMirNkPpQcU0HP40tMrcdmnAim45oUY60DJOacB60wZHSnAjpSGh+R27UE56U0Yo3DOBQ0CHr6460Mqk+/rSB8U4HjgcVLLQ5cdjTxwCTUffngU/nPXikMUHPtSY7mgdelOJHaob7hcQc80DPSk70pO36UNuwARjrQpB4p2cimkY5qdAEYkHikz7UdKax9KPMEPGRyDmlUk/SmDAGaUHI6UDH7sH0pN+TSZHp0pCTj6VO+o7ik5PTFIKaT2pM8daNhD8ZwfyphJzjPFKSSOaTH0przATj0oyelGe1JzzjNJ6gGRjFMY9s0pyD0NMPNSMDkDNNDZGe4pSTjFRdHIqtxEmc0h549KBSZoeiCwZ4wKT2oo607ITQjEDBNRk8mntgDJqM5YZzRewWGt09KjP1p2WxhqaTSvcQbvaikoqRGJCeAcDmpVJ71VjkXGM1OH/Ous55u7JM8804e1R5HbFOzxiixmiaM571IDg81XVttSq+P/rUw6k6kY6809GGKgVgeO9SKQDjOaYWMbxfMzWkFlGMm5nRG9l6n+VUrl/KXbnoMU7WJmuPENtbjlbeFpW+pOB/WqOpXAXeSeFBNILaGJYMbzXbmYniLCD+td/4cj22ryHrJIT+A4rz/wAKxl4Zr1sjznZ69M0qH7PYwxk87QT9ajrb5jiXl4zT1x0ByKiGCKkDKOCKs2Hg44p4qMEdc0/I9abBDs9BTgKZmnKR3oKuPzzS8GmnB6Uo65FAx+cCgEEUg6daQHHFIB456CnAetNwRzmlXnrSbGOzxgU8fWmYGO1KOmN2KhsoeaU9Mmm5x3yaOo9qTYXDPf0pTzScUZFTuxiAkHk0/IPWm4U9aQkDvxUsALAcjFMpQM89KCKT8hifjS596Sg9sUrjHBucDpS5A4BpgODxSk5NNMQ44BppGSaCeMUZAP1prUAPTFJ260pJNJnjmkrDAnHPWkyRzS00g/jS2EIW9hTcikx60MRSuGgx3xwozTFz1PWn49elJ71SuhoTJ9aKKKq7eovQKD60hIHJNN3HnP4UgEckiowfQ05umc5NQlueBikIcx6kU3PWjdkUlJ3EFFJiis+YfOfCa/tJ/ELJ26jBj/rmKev7S/xEHC6hB/36FfPIuZM/65/zqRblh/y2b866uSX9Mzly9j6DX9pf4j/9BC3z/wBchS/8NN/EfODqNv8AhCK+e1unIyJX/Ol+0Pnd5z/nVcsu5Hu31R9CD9pv4k9f7Rt8e8Qo/wCGnviSAR/aFvz3MIr56NxLn/XPj/epfPlK8TPnHrQoy7guXsfQo/ag+JgOf7Rtj/2xFH/DUXxK6jULb8IhXz1582P9a+frS+bMwx5r/nT5ZXvcXunu5/aM+IBvJL86hB5sqhSfKHQVBcftB+PLqNkk1CHD5B/djpXhpknIz5zfnQJJ/wDnq351Sg9xrl6o9vs/j/450+Bbe3vYQi4HMYrZ/wCGrficECLe2oAHQxCvncvcf892596C1x2mb86hwvoK8b7H0P8A8NYfE4YH2y0P/bIUv/DWfxNxzdWnH/TOvnbNx/z2b86MXHaZsn3pqFuo+Zdj6L/4a2+Jq9bi0Oe/l0o/a3+JmAPtFrx/0zFfOR+0f89mz9aTF2ekxH40+R2/4JSkl0PpH/hrn4l8fvrTj/YoH7XXxLIA8+1x3wlfN+Lo/wDLZqXZdHkTGhQ0td/ePmT3PpFf2vPiUDzNa8f7NP8A+GvviT/ftD9Vr5r8q7I/1rce9KIL3tMfWlyO+7+8Lo+lB+1/8RzyTa8e1O/4a/8AiL3Fqfw/+tXzWbe/PImNIIL/ALynn3pqHm/vFzLc+mR+2F8RO62h/D/61SD9sP4hYx5dp/3zXzJ9n1AdJWoEV8f+WrfnRyPq3947rsfTqfth/EAHmK0+mKf/AMNi/ED/AJ4Wh/DH9K+YFW9BwZG/OpAl6Tw7fnU+z6tv7x8yPp5f2x/Ho4+zWjf5+lO/4bJ8d4wbK0+v+RXzB5V8P+Wh/OjbekY3n86Xs/N/ePmR9Rf8NleOV/5cbT8P/wBVKP2yvG3awtCK+XQt8Bjeadtvcf6wj8al0/N/eNNbn1GP2yfGp/5cLT/P4UD9svxqODp9pXy6FvgPv/rSf6aQQX/WpVG+t394cyPqT/hsrxoP+Yfac0g/bM8ad9Nsz+dfLg+3DrIaCL4cl81Xsuzf3iUvI+pj+2b4z/6BdnxSj9s7xjxnSbP86+WP9NUbt55ozfH+Lil7G3V/eU5I+qP+GzfGIOf7Js6Vf2z/ABeMn+xrM5/2jXyuDff3j+JpA9/2JoVLu394KSPqz/htHxbx/wASOyx/vGgfto+KyedCs+f9o18p+Zfj+NvzpN99nG80/Zdmw509D6vH7aPivaP+JHZf99Gj/htLxSP+YDZf99GvlIPfY5c/nTfNvlOCzUey82HMux9YH9tLxR38P2Q+jmnf8NqeJu3h2z/7+Gvk0T3pOC7UhuL0fxtSdFW3Yc3kfWJ/bS8TZBPh+yx/vGlP7aXiPv4csv8Avs5r5NW4uh8240Nc3R5Lmp9lpux8yT2PrL/htLxAeB4btOnXzDmnL+2jr4wD4btOOuZDXyYLu6xkOaBdXePvtVKlZbsOZPofWf8Aw2jrxOD4Zsx/20alH7Z2tnp4at/+/hxXyWLq6wQS2ad9pvQPvNQ6durBtM+tP+GzNaYY/wCEbtQfUyGlH7ZesYw3hm2+vmn86+S/td3n7xo+1XmPvE1Dpu+7C67H1p/w2VqwJz4agI/66daD+2Pqjnjw1APfzDXyaLu8Awck0q3t4R39aPZNdQXKtT6x/wCGxdS6Dw5EffzKVf2wb9jz4diH/bWvk37Zdg8E4pVvrnOGOCKbg+49LbH1n/w1/ff9C/F/39NFfJ/2649XorP2T/mYtOxzaEU7f6VECBwKXcMjNdhiyUMQOaUNnvTFYmk3YNBFyYNzgk0obB9qiB96cGA70XewEm7NODjAFRZGKVX45p3BonB/GlBHpUKyc8/pS+YoHBoTDQmDDGM8ilznvUCvn6U5HAPJphZEwHFLk+tMU+lOGD1oW+oxwHc08EccU09OKVDzii7AkwnanrsHSmoqkc07aoH0oQ7WRIVz93FKMbcZGaQcU7APU0AOHSglQMUoIqPLF9uOKQ7dyQc07AzjFNGakHPWhsLdhqx4OSOtTJCOc01Ebr+VS8j5qBsiEYJxj6VIIVA6UpyeRwaVQ2OTSemoxAqr1pQq44Ao256jvShfSpv1Y+gm0elMaJVG4CpdppCucj1ovcEiAqMZA+tJ8uAOQam2CmshHSjV6h5MikUDHGKRI8DIbIqR42bknNKI/lGOaG+4tBoUMeOlISOgFSLEB1Jp3lgDOM0r2Q2iJowo4pu1Sf6VKc4yB3pg245OTRe2w0huznkcUjIMZFSqR0pGQdjS1YmiuVGckUbBUzIvBz1pCEA+aqu9irEPlj0FL5akcipMAjgUmAR6VN3sJakflp2GKVVAPSnEY4oAB6nFO72QWS3G7AeoFAWnEDqKAalu40xu0elKFHUYpSc80nNF2IQ49KRsHgUowR1prbhT1eoxCQP4aFKk54pdxIwabnjNS27jTH/Sim7z60VN5DuzmF+tL9TTFYHindK1TdrmTQ7OO+acrHvTKDgd6d2lqQPLe9OBBxzUYzTs9MiqBkmRRux0FMBHWngjFJsPQcDxSbsnINNJpO/NPYETqAeCcUi/eGDSAjFJuGcClcET7u5NPDDrzUAXK5DYqSJuMEiqAmDEinpzzmoxUir70MZMrY4py8Hnnj0qLOOM5NSoOfvUncLWJExTiDng1GHCnnvTwRnrRezCw4AgcHpTh0pMD1oWgFqrCg09WwOabinoBjGKTHawqsScVMpGOaQLhee1OBz35pXuVoxeOtFAxk4o7UpSewWsLgY5NAOD60Uhz2pbhYczUnvSEetHeldjtYM4o4IoPNB96LiYhxjgdaRTxxTsUDgeuKV7DSE+tLQKD0olJrULJjWU46ioxhT8wqUL15puzDbiadxrQGKkbe5ppGO+RTwqk8c4pCu0UN33FsRgZ4zQ64GDQOvNKfmPXii9lcY0qSME0wqwFSyAHkdaaRkc1HNcLJkefzpc54xTgDjpmmE89KtyVwQpGBkUnWl96QjmobtsCWovGKb3oo7UJ6XHtoNbHTpTMkcE5pxwQc8Uw4Pen5gtBWbAzikBB4pp69eKMHsetS5Ax/FFMy3tRU8zCxywYkjHT1p+SeTxVdWI4U1IH+lbO/Uz1sTbu1L3xUQxnIp+8HGTTTuiB4PtRzUZcd2pwPrVrQWw7PGCafuyMCo6Wi99wJM5FC9eaj/GnK3rTHYk7/SlB96YHGaUkk8Ueo7EgJx1p6Eg+9RA4HX8KerHqKV9QLSNwMipA3cVWWQg4NTKRTCxLvNTJyuagBBFPEpXAofmMlzk8jpUgIxnvVfzQTwQAfWhriNOrD86S1Gy0nu1OGc4qot3D0Dr+dP+1QkYEi/XNGokWgTTkLZyDVVbqH/noPzqQXERHEq/nT2AtpKSMEUuVHIxVVZ4v+ei/nT1ni3f6wfnU2bKuiwpbGSacDkZAqqbmPp5i4+tKl3Gp/1q4+tS7i3LDbuoNKCcc1CZ4mGVkHHvQlzEBy4/OjVjJyKMVXNym7h1/Onm4jxw65+tA+hL1oJA5NVmuUHAZfzpBcIVOXX65qLWC1izuz0xTVYFjVcSJwQ6/nThOvTeKVmxlgMM49aXco71U85A33x+dBmUnO5fzpa9RFo+oOKaZQCBioRcRkcsMfWm+Ymchhj601qhk5fBwDTNxzg9DULSqT94UGVCOWH50WYEhJB6mhWI5WozMmPvD86BMmPvClqwRNuDcZ/GkY9qgLrz8w/Ol81MY3j86eoPYkBPY00nPamCVAfvr+dBmj/vj86TDSxIppOnaovPj/vigzxYyHH5076AtCRiBzQDkVX+0IRyQPxoFwg4JGPrS6DsSsQOTULnkEEUx5k/vjH1phljOSGGaFcZLu4zQGyOpquZRnIYUGcAcsMfWgRPu96KgFwuPvj86Kz5V3KOYjyeKecDnOarqxz7U/ea0bfUyZMG9M07d61Ard8mnB88CrQvIlz83PIqUEYBAqvuFPzxzjimnyktE+QeCKXIBxVcMe/enbuapSuOxNSim7+gpapC9RyrnntTwQOBUYbbx60dT1poCXPNSpyPpUA2jvTwcVOwyQPyMjmrEbbhVVSD2qeNwOBTTC6LAqtfajb2ERkmbp2onuRBGZH4A5rhdZ1OW9nZnY7AflFJtoe5d1HxZcysVtiY1rJk1q/f71w/51DZafdalL5VvGWz6V0cHgO6KBpnwcdAKlRcguonPjWL4cCdsfWl/tm+/wCfh/zrpR4ClPJfH1FH/CBP2fp7UcnkPm1ObGtagFx9pbH1oGuX+eLp/wA66H/hBZM9TSnwKx5DfpS9mr7Bc5469qI/5en/ADpRr2pYx9qf863j4Hk7HinL4EduAx+tHJ5BdHPDXdSB/wCPp/xNKdc1Adbls/WujPw/mxw/6Uv/AAr+fHX8cU1Dq0FznP7f1PGBdOPoaUeINSH/AC8t+ddAPAUgBOaZ/wAIHN6mlyp9AujC/t/Uu9y3504eINUHP2p/zrdHgG4PJP6U1vAs+7HP5Uci7DujF/4SHUzz9obj3pD4h1Lp9pf862m8DXA55A96b/whU45IpezW4zI/4SHU+v2lgfY0f8JHqY5Fy+frWr/whz0DwdJ3o5EFzLXxFqS9bljTh4i1EDH2hua0R4SkHUCkbwk443UOKuFzPHiLUc/8fLdKU+ItQx/x8tn61ePhSTrjik/4Rcjr0o5LIGUx4i1Eci5Y0h8Qakf+XlqunwuR60L4Z55FSoWewin/AMJBfjk3LUDxBqA6XL/hVz/hGhyNvH1o/wCEdA/hxz60cuth3Kh17UDg/aXB+tH9vagP+XljVz/hHRnO39aP+EfX0OaXINO5UOt35PNy1J/bV8f+Xlqu/wBgr0x+tIdBXH3eaOUCn/bN70Fw350v9tX5H/Hw1V7zTmsz8xJBq3Y6OLqES7iAfSp5R3I/7XvAeLh6cdXuzybh81b/ALBjzjJoOhxg/fNFkwKf9q3fXz3pRql1jPnt+dWv7DQc7zR/YsQ53mkMq/2nd/8APd6T+0bkjmd/xNXDo8fZj+dJ/ZKdiaVkwKv9oXP/AD1NFW/7Ljopcq7ASjg8mnBjjmo1cZwadnPGapu5DQ/d27UoOBnNR5A70taR0IJVOeTTg3bNQ7u3ejeexp7sL3ZYDEe9O37h0qAPkAg0qtjq2KEtQLYyvJGBTg245Bx61W83I5oWT3NXd3JLm4UfSq4l45qQSDFNSQ9yUdakH1qEMCOtPVsVT13AnXGM5qZWAAqnv9KkRx3NS4tbBtsUfEl0Y7URIAN/FcWyNNMI16k10viWTMqKGyAM1hacN18pPripb6spM9C8K6TBY2aybAXbkmuhj2M3IGBWRp8xSFVz1FXklyM7qp6BbqWSUDYCjilUR7jxxUAcGlEgA61NgsTSRqBuA4qIJnpStOGXk0zzV7NRcZKIRj5sU5I1Q9M1EJge+aTzMNkGhBYshgeuOtSBgenaqTTDqWpBOCOHqWtB26stF0JKgc0bVyAVAqi9yinhqUXynq1LULF9mCjp0qBpAzAkVWe/XnnNQvejPAo1elx2LzsGPAwKiYgdgc1nm97b8fjTTeqMZbNO2gFyXZjOKgLLnGOKrteKx+9VdrvknNC1QF93TsOahZhyf0qobs5qJrnPejzYF4yDoRULzA846VSa6A5L9aja5U/xUtgsi60wxwOaYZeeapm5THBzUbXXOQ1JNoDRMg9s00yKe3NZ/wBp/wBqmNde5o1Dc0RJTDKueSBWd9pbPDU1pznJajVPcNDRMqZphuEFZ5uM876Z5uf4qL3G9SHW3EiA1Z0SfFmF9DWdqDF061JpMhEDAHoaS6h0Nk3B5PH1pnnDuTVEzds0okGeTS0WgFvz/UUhl96qmQZyKb5nPWlvqMteYc5zS+dk8gVVMmaDITSsBaE6Y5BoqtvPqPzopfMCMN2PNKH7ZquHwcUu/wB6tkssb29Bj1pRJ61X3+hpC59aZNrlguSOPxpwkqtv96N5z1pq7DyLe8cGjfnoM1V808ilWX1qlpoxFvf68UoYjvVQzZwM0CcDPNNO4F4TYpyzDmqIm9+tHnAd6G7iNHzwTUgn98iszzwelAuPQ1V7oDVFwOlO84DFZRuO4z+dL9pHXJzS1Gyrrkpeb6Cs7S3/ANMB96l1CYyOSaq6c+LkEetJoaPRra4HljnoKsC5yPvcCuchvCigE9qkN+e54+tVa4joBeBejDmnLernJYVzf21ic7jik/tAg8n9aT12KudI14G/iHFRm8UHG6ueGpYHDU1tR9/pS2YrHSG/RRgNSfb0A4bmuZbUMgDNMbUWBADHFG4eR0xv1P8AFTDfIDya5v8AtE9dxpjXxY8sTS5ewzpGvl6iozfjPJFc8b49AT+dRvfZ4yadnYLnSPqAIHIqJtQ4xurnftxH8VI14Sepo5bAzdN6vcnNMN8DxzisP7W2OtN+1MP4jQ4jvc3Deqe2KY17kdRisZrlietNNwTyT096VhJs1ze56kVG14c9ayzOexpvmN1LU0tAuabXWeh5ppue9Z3mE96QSf7RpbMEaBuPQfrSG47cVQ8w9yaQye5zS9Bl9rg4BGKb55zk1S8zB5JpS4zigC35p60hlz1NVA56Zo35zikBa808896aZsVX3AcUbqSVg3FnYlTS6dKFRhUUjDaaZaOQWANFhmgXwcmgOar7z3ahWOeSaSGWvMPQ0m4VXL59aXfjjsRSQXuWC5PpS7+cdKrb8dc0/dkUNdhk+6ioMj1NFGoaEYckZI5pd3tUYJ9aX3PNMhjt564o385pmfel4qlohbDg5HNL5hPQVGW5xSZOMEUutwJC560m71NM344pN1VqK1iXd6Ub2qLPbOKQsc8ChJiv2JhJjg0eYe9QbsUFzVB0J/MPTNHmGq+9sUhdqOViXmWvOI4ppmOPSq+800yZzmq8hjbiTJJqKzbbNSSnPamQHDZ96m1mM2RdEAUfamx/9eqG8gUhlOKqwi99qbnBxTDdN1zVTzD0NNLH1ojqFy39oPrQbg9jVPcw6Ggu3pzTaB6blz7Scc00z57mqm80helonqGiLfn0hnOKq7u3Ipd5z1qrIV+pZE59aQzHqKr7vSkz6ilYosGajzsnrVctik3HHFG4FnzTSebz1qDJozmk3bYdybzD1FAkyag3Y604EYyKFe4XJvMB70nmnpmot1GTU7giXzD60vmGoc0Z4yKdk9Qv2J95x1o3j0qIN6UbjUivYk30pfvURbH1ozg5pMrclDml3VFuzSjPakNEu7Bo3Y71HntQM0a9RD2bIxUdu+JCO1OzUMZxJU3Gi6D3o3e1MBNA4pgSZzRTAxpcnP0qWhj+ppcg00HNKD6UgXYUlvWij8BRVXKGZ5zS5yKbkDvzQeuRSTIauL3pCaDjqcc0m5emeBTUrCFJAOKTdn2puVoyMelO/ULCkHPWkJOeaRm5xSZHei/ckUkGjI6CkpuQelPmFYdz60DFN6d6M1V+oAeCeKM0Z7HvTc00wQpJzSEigkDvTTjqDTugInPUU2HHenPgDJpsRGKm+o0TZFJnNISMDNJx6+9W3fYL9hxYjtSFqbuHSgt6UXsSxxfAppbjvTcjPFKTmjmKsKGI680Ag88U0+tHH4UnK4DiwzjFGeR6U0c0Yo5heY7ee1Juwc03NLTbGtRS2eKUMMe9N4Oe1HOOtS3cNxSxz7U7PFNyDwRSHrRcB+RRkAZppPNJmmm2Ow8MT2NLnFMBOeaBjHtSv1Ak5FAbFNBwcUh4NK4WH7hyaXPQkUwYzilyepNJPuA4tjtS5HU0zIx1peB1pNjHg84FKAO1RggDIPSn7gRn0qbgOBApc9OOlMDAcGlDA9DQyhTg1GpIkA9ak+XvUOQJM5pNgWwTj0pQajDDFODClcBw9KcOuaZn3oBGcGnzDSuPyPenD60zIPFKCARkilcOUfxRTS30oqdR8ohHFHA70A0GqbsS0JgcUh44xS89qQjuaExDcDtR0ooI7VVwEzntSGlpueaCUKabmlOKQ007CsA6dKKKSndthsHvRkd6CcU1ucc0Jha4HBpDSdBzSk8e1VfQRDIeKaDgdKc3Q4qPtU3KsOD5FG4elM45xSZFHMBJuFBeoyaTNO7C1iTzB6UeYPSo6KLhoSbxQZPSoxQT2zTuBJ5g7ik3+1R/Q0uaExbD/M9qPM9qZk+1A4FF7h6knmD0o8welR8mj8aXNcPUkDgUGQZ6Uyk4ob1uPQl3j05o3DtUXfmilzPoMlD9qduGetQ9aX6U1J7BYl3gDrQWzUZIxg0A4NTuBIGxxQW+lN460DGOaV7jHgml8w9hTMijNK76AO3A9qXzMDAFMoqQJA/PzClD46DFR8Udaq7YyTzM8Ypp5ORSY5xmlHJz6VLY7WJFfjtTg/PQVEDyDjilBGc4o3YJXJQ9ODHOaj5pwIxTbGPL0qsSeaZSk45pbDsSbh7UUzIoqR2ZYP0FN5pRkdvegiq20M2hp9KQ/XilJ7A80hBxzTS0AaeTTec048dKa2c8UAKcnpTSD6UZ9BS5o1ENoHNGc0VWwO3UQ57Ug3Z5p1NbBpbEadBWJHbNMJ6Gg5pPmzwM1SbGg7HIpGJxwM0bjjFN68ZouwsNODStGAOMc0hGO/Wn5+WgZGYuwpphPqKkJP0pORTQrEZiyevSl8rHen5oNAEflepoMXuKk96OtG4WI/KIHBpPJOcg1Lj2oJ5oTCxEYj60vkk8Zp4pffmnoBEYSOM0eUQKkyCaXFLYNyLyzjBIpfKbtjinn3o6NigLIZ5RPejyiPSpOg4NHSi4yPy2o8s9yKk70nNSFhmyjYcU+imMaE4680vl5NOzRSTCwmw/Q0bcdaU9aFpAhAuaXb7Upxnil6UMBAp6ZpRGT3pcjOcZoBwCRUpAhPLOKcIxmnKcjmjkDjnNPYaDZ70ohFAPOadn1o1HuNEeBTggx2pR64pRnPNK47gEHoKdsBo7072p+YWARijZz0FLmgZJ61NncaDYKKdz7UVd0Vof/9k=";
          $UploadForm = new UploadForm;
          $UploadForm->image =$img;
          $file = "images/fotos/example.jpg";         
          if ($UploadForm->image->saveAs($file)){
        //             	$dataProvider=new CActiveDataProvider('Informacionempleado');
								// $this->render('index',array(
								// 	'dataProvider'=>$dataProvider,
								// 	'id'=>$model->id;
								// ));
                         //$this->redirect(array('index','id'=>$model->id));             
          			echo "dio";
                  	 }else{
                  	 	   echo 'error';
                  	 	};
          
    }


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Ingresopersonal('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ingresopersonal']))
			$model->attributes=$_GET['Ingresopersonal'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}


	public function actionAdminpersonal()
	{
		$model=new Ingresopersonal('search3');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Ingresopersonal']))
			$model->attributes=$_GET['Ingresopersonal'];

		$this->render('adminFiltro',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Ingresopersonal the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Ingresopersonal::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Ingresopersonal $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ingresopersonal-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



	/*funcion ingreso para redirecionar a la confrimacion de visitantes que ingresaran*/

	public function actionIngreso($id)
	{
		$model=Ingresopersonal::model()->findByPk($id);
	// 	$this->redirect(array('view','id'=>$model->cc));
	// }
		//var_dump($model);

			Yii::app()->session['Ingreso']=$model;
		
		$this->redirect(array('registropersonal/create'));
	}

		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('adminpersonal'));
	}
}
