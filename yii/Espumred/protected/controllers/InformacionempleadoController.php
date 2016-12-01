<?php

class InformacionempleadoController extends Controller
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
				'actions'=>array('create','update', 'view', 'admin','Ajaxstore','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','guardarId2','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','AjaxPaginations'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="talentohumano"'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','guardarId2','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','AjaxPaginations'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="admin"'
                ),

			    array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'view', 'admin','eliminar','ejemplo','uploadProfilePicture','mostrarPlantilla',
					'guardarId','guardarId2','generarExcel','generarExcelCarnet','generarExcelCuenta','mostrarEmpleado','buscar','guardarTexto',
					'listarArea','listarCargo','mostrarRetiro','buscarRetiro','actualizar','actualizarVista','guardarTextoActualizar',
					'buscarFamiliar','mostrarFamiliar','mostrarError','mostrarErrorEmpleado','AjaxPaginations','administrator'),
				'users'=>array('@'),
                'expression'=>'Yii::app()->user->rol==="Test"'
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

	public function actionAdministrator()
	{
		$this->render('administrator');
	}
	/**
	 * Crea un nuevo modelo. De la creación tiene éxito, el navegador será redirigido a la página de "vista".
	 */
	public function actionCreate()
	{
		$model=new Informacionempleado;

		// Habilitar la línea siguiente si es necesaria la validación de AJAX
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionempleado']))
		{
			$model->attributes=$_POST['Informacionempleado'];  //antes de !="" se agrega  && $model['id']------------
			if ($model['area']!="" && $model['cargo']!=""){
				$Registro = array();
				$Registro=Yii::app()->session['Registro'];

				//personal
				$modelInformacionPersonal=new Informacionpersonal;
				$modelInformacionPersonal=$Registro[0];
				// var_dump($modelInformacionPersonal);
				$modelInformacionPersonal->save();
				
				
				//familiar
				$arrFamiliar = Yii::app()->session['Familiar'];
				$id;
				$modelFamiliar=new Informacionfamiliar;

                 //0
				for ($i=0; $i <count($arrFamiliar) ; $i++) { 
					$modelFamiliar=new Informacionfamiliar;		
					$modelFamiliar->ccEmpleado=$arrFamiliar[$i][0];
					$modelFamiliar->nombreFamiliar=$arrFamiliar[$i][1];
					$modelFamiliar->parantesco=$arrFamiliar[$i][2];
					$modelFamiliar->fechaDeNacimiento=$arrFamiliar[$i][3];
					$modelFamiliar->edad=$arrFamiliar[$i][4];
					$modelFamiliar->escolaridad=$arrFamiliar[$i][5];
					$modelFamiliar->ocupacion=$arrFamiliar[$i][6];
					$modelFamiliar->viveConEmpleado=$arrFamiliar[$i][7];
					$modelFamiliar->dependeDelEmpleado=$arrFamiliar[$i][8];
					$modelFamiliar->save();
				}
			 
			
				//informacion academica
				$modelInformacionAcademica=new Informacionacademica;
				$modelInformacionAcademica=$Registro[1];
				$modelInformacionAcademica->save();

				///estado estundiantil
				$modelEstadoEstudiantil=new Estadoestudiantil;
				$modelEstadoEstudiantil=$Registro[2];
	    		$modelEstadoEstudiantil->save();
      		
	      		//seguridad social
				$modelSeguridadSocial=new Seguridadsocial; 
				$modelSeguridadSocial=$Registro[3];
	    		$modelSeguridadSocial->save();

	    		//informacion vivienda
				$modelInformacionVivienda=new Informacionvivienda;
				$modelInformacionVivienda=$Registro[4];
	    		$modelInformacionVivienda->save();

	      		//informacion economica
				$modelInformacionEconomica=new Informacioneconomica;
				$modelInformacionEconomica=$Registro[5];
	    		$modelInformacionEconomica->save();

	    		//Contrato
				$modelContrato=new Contrato;
				$modelContrato=$Registro[6];
	    		$modelContrato->save();

	      		//dotacion
				$modelDotacion=new Dotacion;
				$modelDotacion=$Registro[7];
	    		$modelDotacion->save();
		
	    		//experiencia laboral
				$arrExperiencia = Yii::app()->session['Experiencia'];
				$id;
				$modelExperiencialaboral=new Experiencialaboral;

				for ($i=0; $i <count($arrExperiencia) ; $i++) { 
					$modelExperiencialaboral=new Experiencialaboral;		
					$modelExperiencialaboral->cedula=$arrExperiencia[$i][0];
					$modelExperiencialaboral->empresa=$arrExperiencia[$i][1];
					$modelExperiencialaboral->cargo=$arrExperiencia[$i][2];
					$modelExperiencialaboral->funciones=$arrExperiencia[$i][3];
					$modelExperiencialaboral->fecha_inicio=$arrExperiencia[$i][4];
					$modelExperiencialaboral->fecha_retiro=$arrExperiencia[$i][5];
			 		$modelExperiencialaboral->save();
				}
				//id  nombre de los modelos estan en mayuscula y se pondran en minuscula $modelInformacionEconomica
				$model->id=$modelInformacionPersonal["cc"];// si por algo se cambia a cc
				$model->informacionFamiliar=$modelFamiliar["id"];//Familiar
				$model->InformacionEconomica=$modelInformacionEconomica["id"];   //se volvio a cambiar a I mayuscula  ------            
				$model->informacionAcademica=$modelInformacionAcademica["id"];
				$model->informacionPersonal=$modelInformacionPersonal["cc"];//cc  //  // ----------->
				$model->InformacionVivienda=$modelInformacionVivienda["id"];  // se cambia a I mayuscula pero es i minuscula ------->
				$model->estadoEstudiantil=$modelEstadoEstudiantil["id"];
				$model->seguridadSocial=$modelSeguridadSocial["id"];
				$model->contrato=$modelContrato["id"];
				$model->dotacion=$modelDotacion["id"];
				$model->experiencialaboral=$modelExperiencialaboral["id"];
				// echo $model->id;
				var_dump($model);
           		$resultado = $model->save();
				if($resultado == true){             //id   //dependiendo se quita cc   
					$this->redirect(array('view','id'=>$model->id));
					//$this->var_dump(['informacionempleado']); -----------por si algo queda pendiente su activacion
					//var_dump($modelinformacionpersonal);exit   //id
				}else{
				    echo "<h1>Error al guardar la informacion</h1>";
				    echo "<br>";
				    echo "<br>";
				  
				    echo "<h3>Enviar el siguiente informe al correo <strong>practicante.sistemas@espumasmedellin.com</strong></h3>";
				    echo "<br>";
				    echo "<br>";
				    echo "<br>";
				    echo "<br>";
				    var_dump($model);
				}
			}else{
				echo "Hay informacion sin llenar";

				echo "<h1>Error al guardar la informacion</h1>";
				    echo "<br>";
				    echo "<br>";
				   
				    echo "<h3>Enviar el siguiente informe al correo </h3> <strong>practicante.sistemas@espumasmedellin.com</strong>";
				    echo "<br>";
				    echo "<br>";
				    echo "<br>";
				    echo "<br>";
				    var_dump($model);
			}	
		}else{
			$this->render('create',array('model'=>$model,));
		}

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

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save())
			$this->redirect(array('informacionempleado/actualizar'));
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
	 * Funcion para crear las tarjetas con la informacion de los empleados y tambien hacer la paginacion.
	 */

	public function ActionAjaxPaginations(){

		$allEmployees = informacionempleado::model()->FindAll();
		$num_total_registros = 0;

		foreach ($allEmployees as $value) {
			$num_total_registros = $num_total_registros + 1;
		}

		if ($allEmployees) {
		    //numero de registros por página
		    $rowsPerPage = 18;
		    //por defecto mostramos la página 1
		    $pageNum = 1;
		    // si $_GET['page'] esta definido, usamos este número de página
		    if(isset($_GET['page'])) {
		        sleep(1);
		        $pageNum = $_GET['page'];
		    }

		    //contando el desplazamiento
		    $offset = ($pageNum - 1) * $rowsPerPage;
		    $total_paginas = ceil($num_total_registros / $rowsPerPage);
		    $criteria = new CDbCriteria;
		    $criteria->limit = $rowsPerPage;
		    $criteria->offset= $offset;
		    $criteria->order = 'informacionPersonal ASC' ;
		    $allEmployeesfinal = informacionempleado::model()->with('informacionPersonal0','area0','contrato0','cargo0')->FindAll($criteria);
		    foreach ($allEmployeesfinal as $value) {
		    	echo '<div class="panel caja" style="width:350px;">';
				echo	'<div class="panel-body">';
				echo		'<center><img src="'.Yii::app()->baseUrl.'/images/fotos/'.$value->informacionPersonal.'.jpg" alt="No hay Foto" width="120px" height="154.66px"></center>';
				echo 		'<br>';
				echo		'<p>';
				echo			'<strong>Cc:  </strong>'.$value->informacionPersonal.' <br>';
				echo			'<strong>Nombre Empleado: </strong> '.$value->informacionPersonal0->nombre.'<br>';
				echo			'<strong>Codigo Nomina:</strong> '.$value->codigoNomina.'<br>';
				echo			'<strong>Estado:</strong> '.$value->estado.'<br>';
				echo			'<strong>Carnet:</strong> '.$value->carnet.'<br>';
				echo			'<strong>Area:</strong> '.$value->area0->nombreArea.'<br>';
				echo			'<strong>Cargo:</strong> '.$value->cargo0->nombreCargo.'<br>';
				echo			'<strong>Fecha de inicio del contrato:</strong> <br> '.$value->contrato0->fechaIngreso.'<br>';
				echo		'</p>';
				echo		'<center><input id="'.$value->id.'" class="pdf form-control" target="_blank" type="submit" name="yt1" value="verHojaVida"></center>';
				echo	'</div>';
				echo'</div>';
		    }
		    
		  
		    // echo $num_total_registros;
		    // echo "<br>";
		    // echo  $total_paginas;

		 //    if ($total_paginas > 1) {
			    echo '<nav>';
			    echo '<ul class="pagination">';
			    // if ($pageNum != 1){
			        echo '<li><a aria-label="Previous" data="'.($pageNum-1).'"><span aria-hidden="true">&laquo;</span></a></li>';
			        for ($i=1;$i<=$total_paginas;$i++) {
			            if ($pageNum == $i){
			                //si muestro el índice de la página actual, no coloco enlace
			                echo '<li class="active" ><a>'.$i.'<span class="sr-only">(current)</span></a></li>';
			            }else{
			                //si el índice no corresponde con la página mostrada actualmente,
			                //coloco el enlace para ir a esa página
			                echo '<li><a class="paginateitem" onclick="indexpage('.$i.')" data="'.$i.'">'.$i.'</a></li>';
			         	}
			         }
			         if ($pageNum != $total_paginas){
			             echo '<li><a aria-label="Next" data="'.($pageNum+1).'"><span aria-hidden="true">&raquo;</span></a></li>';
			         echo '</ul>';
			          echo '</nav>';
			    }
			// }
	  // 	}
       
    	}	
	}

	public function actionIndex()
	{
		
		$dataProvider = new CActiveDataProvider('Informacionempleado', array(
       'criteria' => array('order' => 'informacionPersonal ASC'),
       
       'pagination' => array('pageSize' => 20,))
      );

		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionAjaxstore(){
		$AllEmployees = Informacionempleado::model()->FindAll();
		$contador = 0;
		$link = "informacionempleado";
		foreach ($AllEmployees as $value) {
					echo '<tr>';
					echo '<td>'.$value->id.'</td>';
					echo '<td>'.$value->codigoNomina.'</td>';
					echo '<td>'.$value->estado.'</td>';
					echo '<td>'.$value->carnet.'</td>';
					echo '<td>'.$value->informacionAcademica.'</td>';
					echo '<td>'.$value->informacionPersonal.'</td>';
					echo '<td>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/delete&id='.$value->id.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></button></a>';
					echo '</td>';
					echo '</tr>';
		}
		
	}

	public function actionAjaxstore2(){
		$AllEmployees = Informacionempleado::model()->with('informacionPersonal0')->FindAll();
		$contador = 0;
		$link = "informacionempleado";
		foreach ($AllEmployees as $value) {
					echo '<tr>';
					echo '<td>'.$value->id.'</td>';
					// echo '<td>'.$value->codigoNomina.'</td>';
					// echo '<td>'.$value->estado.'</td>';
					// echo '<td>'.$value->carnet.'</td>';
					// echo '<td>'.$value->informacionAcademica.'</td>';
					echo '<td>'.$value->informacionPersonal.'</td>';
					echo '<td>'.$value->informacionPersonal0->nombre.'</td>';
					echo '<td>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/view&id='.$value->id.'" ><button class="btn-info radius" style=""data-toggle="tooltip" data-placement="bottom" title="Más detalles"><i class="fa fa-search" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/update&id='.$value->id.'" ><button class="radius btn-success" style=""data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>';
					echo '<a href="'.Yii::app()->baseUrl.'/index.php?r='.$link.'/EliminarEMP&id='.$value->id.'" ><button class="radius btn-danger" style=""data-toggle="tooltip" data-placement="bottom" title="Eliminar"><i class="fa fa-times" aria-hidden="true"></i></button></a>';
					echo '</td>';
					echo '</tr>';
		}
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
	$allquejas=InformacionEmpleado::model()->findAll();	
		
		// $model=new Informacionempleado('search');
		// $model->unsetAttributes();  // clear any default values
		// if(isset($_GET['Informacionempleado']))
		// $model->attributes=$_GET['Informacionempleado'];

		// $this->render('admin',array('model'=>$model,));
		$this->render('admin',array(  
		'allquejas'=>$allquejas,
		
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Informacionempleado the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Informacionempleado::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    
	public function actionEliminarEMP(){
		 $id =$_GET['id'] ;
		 
		$model = Informacionempleado::model()->findByPk($id);

		// foreach( $this->loadModel($id)->contrato0 as $c)
  //        $c->delete();

            //delete location_parent

 	// 	foreach( $this->loadModel($id)->estadoEstudiantil0 as $c)
  //        $c->delete();

  //    	foreach( $this->loadModel($id)->informacionAcademica0 as $c)
  //        $c->delete();

  //    	foreach( $this->loadModel($id)->informacionEconomica as $c)
  //        $c->delete();

  //    	foreach( $this->loadModel($id)->informacionFamiliar0 as $c)
  //        $c->delete();

  //    	foreach( $this->loadModel($id)->informacionPersonal0 as $c)
  //        $c->delete();

  //    foreach( $this->loadModel($id)->informacionVivienda as $c)
  //        $c->delete();

  //    foreach( $this->loadModel($id)->seguridadSocial0 as $c)
  //        $c->delete();
     
  //    foreach( $this->loadModel($id)->dotacion as $c)
  //        $c->delete();

  //           $this->loadModel($id)->delete();
			
		// var_dump($model);
		// 	exit;
		
		
		$informacionAcademica = Informacionacademica::model()->findByPk($model->informacionAcademica);
		// 	var_dump($model);
		// 	echo "<br><br><br>---------------------------------------------------------------------------<br><br><br>";
		// 	var_dump($informacionAcademica);
			
		$informacionPersonal = InformacionPersonal::model()->findByPk($model->informacionPersonal);
		$informacionFamiliar = Informacionfamiliar::model()->findByPk($model->informacionFamiliar);
		$InformacionVivienda = Informacionvivienda::model()->findByPk($model->InformacionVivienda);
		$InformacionEconomica = Informacioneconomica::model()->findByPk($model->InformacionEconomica);
		$estadoEstudiantil = Estadoestudiantil::model()->findByPk($model->estadoEstudiantil);
		$seguridadSocial = Seguridadsocial::model()->findByPk($model->seguridadSocial);
		// $area = Area::model()->findByPk($model->area);
		$contrato = Contrato::model()->findByPk($model->contrato);
		$dotacion = Dotacion::model()->findByPk($model->dotacion);
		// $cargo = Cargos::model()->findByPk($model->cargo);
		$experiencialaboral = Experiencialaboral::model()->findByPk($model->experiencialaboral);

		if($model->delete()){
			if($informacionAcademica->delete()){
				if($informacionFamiliar->delete()){
					if ($InformacionVivienda->delete()) {
					   if ($InformacionEconomica->delete()) {
							if ($estadoEstudiantil->delete()) {
								if ($seguridadSocial->delete()) {
									if ($contrato->delete()) {
										if ($dotacion->delete()) {
												if ($experiencialaboral->delete()) {
														if ($informacionPersonal->delete()) {
															$this->redirect('admin');
														}else{
															echo "No se pudo eliminar registro de Informacion empleado";
														}
													}else{
														echo"No se pudo eliminar registro de Informacion Experiencia laboral";
													}	# code...
													# code...
											}else{
												echo"No se pudo eliminar registro de dotacion";
											}	# code...
										}else{

											echo"No se pudo eliminar contrato";
										}	# code...
										# code...
								}else{
								    echo"No se pudo eliminar registro de informacion Seguridad social";
								}	# code...
							}else{
								echo"No sepudo eliminar registro de informacion Estado estudiantil";
							}	# code...
						}else{
                           echo"Nose pudo eliminar registro de informacion Economica";

						}	# code...
					}else{
                      echo"No se pudo eliminar el registro de informacion Vivienda";

					}
				}else{
					echo "No se pudo eliminar el registro de informacion familiar.";
				}
			}else{
				echo "No se pudo eliminar el registro de informacion personal.";
			}
		}else{
			echo "No se pudo eliminar el registro de informacion academica.";
		}

	}

	/**
	 * Performs the AJAX validation.
	 * @param Informacionempleado $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='informacionempleado-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
//funcion para cargar la imagen y ponerle la identificacion del empleado
	public function actionUploadProfilePicture() {
            $UploadForm = new UploadForm;
            $model=Informacionempleado::model()->findByPk($_POST['UploadForm']["idProducto"]);
            
            if (isset($_POST['UploadForm'])) {
                
                 if ($UploadForm->validate()) {
                    $UploadForm->image = CUploadedFile::getInstance($UploadForm, 'image');
                    
                  foreach($UploadForm->image as $img){
					    //retun url to full image
					    echo $img->getUrl();
					 
					    //return url to proportionally resized image by width
					    echo $img->getUrl('300x');
					 
					    //return url to proportionally resized image by height
					    echo $img->getUrl('x300');
					 
					    //return url to resized and cropped (center) image by width and height
					    echo $img->getUrl('200x300');

					    echo $img->getPath('400x300');
					    $UploadForm->image =$img;
					}
					
					//Returns main model image
					
					 
					
                    //$UploadForm->image = EUploadedImage::getInstance($UploadForm,'image');
                    // $UploadForm->image->maxWidth = 180;
                    // $UploadForm->image->maxHeight = 180;
                    // $UploadForm->image->thumb = array(
                    //     'maxWidth' => 65,
                    //     'maxHeight' => 65,
                    //     'dir' => 'thumbs',
                    //     'prefix' => 't_',
                    // );
                    
                    $fileExtension = explode(".",$UploadForm->image->name);
                    $file = "images/fotos/".$_POST['UploadForm']["idProducto"].".jpg";
                    
                    if ($UploadForm->image->saveAs($file)){
        //             	$dataProvider=new CActiveDataProvider('Informacionempleado');
								// $this->render('index',array(
								// 	'dataProvider'=>$dataProvider,
								// 	'id'=>$model->id;
								// ));
                         $this->redirect(array('index','id'=>$model->id));             
                  	 }else{
                  	 	   echo 'error';
                  	 	};
                     
                  } else{

            	$this->render('errorImagen',array('model'=>$model));
            	
            	};
            }            
                
        }

		
	  /* metodo para hacer es llamar a una vista de errores*/
         public function actionMostrarErrorImagen()
    {
        $model=new Informacionpersonal;
        
         $this->render('errorImagen',array(
            'model'=>$model,
        ));
    }

     /* metodo para hacer es llamar a una vista de errore*/
         public function actionMostrarErrorEmpleado()
    {
        $model=new Informacionpersonal;
        
         $this->render('errorEmpleado',array(
            'model'=>$model,
        ));
    }
	
//funcion para redirigir hacia la plantilla de hoja de vida
      public function actionMostrarPlantilla(){
        $model=new Informacionempleado;
        $arrId = array();
        $arrId=Yii::app()->session['id'];
        var_dump( $arrId[0]);
   
         # mPDF
         $mPDF1 = Yii::app()->ePdf->mpdf();
        
         

        $mPDF1->WriteHTML($this->render('mostrarPlantilla',array(
            'model'=>$this->loadModel($arrId[0]),
        ),true));
        # Outputs ready PDF
        $mPDF1->Output();
        
		   
    }
//funcion para guardar la id en secion 
      public function actionGuardarId(){
      	Yii::app()->session['id']="";
        $arrId = array();
        $id= $_POST["id"];        
        array_push($arrId, $id);
        Yii::app()->session['id']=$arrId;
        //var_dump($arrId);
    }

     public function actionGuardarId2(){
      	Yii::app()->session['id']="";
        $arrId = array();
        $id= $_GET["id"];        
        array_push($arrId, $id);
        Yii::app()->session['id']=$arrId;
        //var_dump($arrId);
        $this->redirect(Yii::app()->request->baseUrl.'/index.php?r=informacionEmpleado/mostrarPlantilla');
       
    }

//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcel()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("InformacionEmpleados.xls",
			$this->renderPartial('excel',array('model'=>$model,),true)
			);
	

	}
	//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcelCuenta()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("CuentasBancarias.xls",
			$this->renderPartial('excelCuenta',array('model'=>$model,),true)
			);
	
	}

//funcion para generar ecxel de informacion empleado
    public function actionGenerarExcelCarnet()
	{
		
		$model=Informacionempleado::model()->findAll();
		Yii::app()->request->sendFile("Carnetizacion.xls",
			$this->renderPartial('excelCarnet',array('model'=>$model,),true)
			);
	
	}

	/**
	 * Lists un models.
	 */
	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionBuscar()  //*//
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];  
		
		//funcion original 
		 if ($arrBusquedad[1]=="Cc") {
		 	 	 $modelEmpleado=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	 	if (!empty($modelEmpleado)) {
		 	 // $model=Informacionempleado::model()->findByPk($arrBusquedad[0]);
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(
                  
                    'criteria' => array(
                    'condition' => 'id ="' .$arrBusquedad[0]. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
            }else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};
		 }else{
		 	$id="";
		 		$model=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) { 
		 		  if ($model[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Informacionempleado::model()->findByPk($id);
		 	if (!empty($modelEmpleado)) {
 
		 	$dataProvider = new CActiveDataProvider('informacionEmpleado', array(
                  
                    'criteria' => array(
                    'condition' => 'informacionPersonal ="' .$id. '"',                    
                    
                	),
                    'pagination' => array(
                    'pageSize' => 20,
                	),
            	)
            );
				}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};

		 }
			
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));


	}

	//accion que se utiliza para buscar empleado y redirigiendolo ala vista view 
	public function actionActualizarVista()
	{
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['actualizar'];  
		$modelEmpleado=new Informacionempleado;
		$modeloInformacionpersonal= new Informacionpersonal;
		$modeloInformacionfamiliar= new Informacionfamiliar;
		$modeloInformacionacademica= new Informacionacademica;
		$modeloEstadoestudiantil= new Estadoestudiantil;
		$modeloSeguridadsocial= new Seguridadsocial;
		$modeloInformacionvivienda= new Informacionvivienda;
		$modeloInformacioneconomica= new Informacioneconomica;
		$modeloContrato= new Contrato;
		$modeloDotacion= new Dotacion;
		$modeloExperiencialaboral= new Experiencialaboral;
		
		 if ($arrBusquedad[1]=="Cc") {  //se cambia la primera C a minuscula // //
		
		 	$id=$arrBusquedad[0];
		 	 $modelEmpleado=Informacionempleado::model()->findByPk($id);
		 	//actualizar contrato
		 	 	if (!empty($modelEmpleado)) {
		 	 		# code...
		 	 		//actualizar informacion empleado
		 	 		if ($arrBusquedad[2]=="Informacionempleado") {
					  	$this->redirect(array('Informacionempleado/update','id'=>$modelEmpleado->id));
				 	
					}
						//actualizar contrato		 	 	
				if ($arrBusquedad[2]=="Contrato") {
					 $modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$this->redirect(array('contrato/update','id'=>$modeloContrato->id));
				 	
					}

								//actualizar dotacion
				if ($arrBusquedad[2]=="Dotacion") {
					 $modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					$this->redirect(array('dotacion/update','id'=>$modeloDotacion->id));
					
					}
		
					//actualizar informacionPersonal
					if ($arrBusquedad[2]=="Informacionpersonal") {
					 $modeloInformacionpersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$this->redirect(array('informacionpersonal/update','id'=>$modeloInformacionpersonal->cc));
					}

				//actualizar informacionFamiliar
					if ($arrBusquedad[2]=="Informacionfamiliar") {
						$familiar=Informacionfamiliar::model()->findByPk($modelEmpleado['informacionFamiliar']);
						$arrFamiliar=Informacionfamiliar::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('informacionfamiliar/admin'));
					 
					
					}

			   //actualizar experiencia laboral
					if ($arrBusquedad[2]=="Experiencialaboral") {
						$experiencia=Experiencialaboral::model()->findByPk($modelEmpleado['experiencialaboral']);
						// $arrFamiliar=Experiencialaboral::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Experiencialaboral']="";
					    Yii::app()->session['Experiencialaboral']=$experiencia;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('Experiencialaboral/admin'));
					 
					
					}


				//actualizar informacionAcademica
				if ($arrBusquedad[2]=="Informacionacademica") {
					 $modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
					$this->redirect(array('informacionacademica/update','id'=>$modeloInformacionacademica->id));
					
					}

				//actualizar estadoEstudiantil
				if ($arrBusquedad[2]=="Estadoestudiantil") {
					 $modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
					$this->redirect(array('estadoEstudiantil/update','id'=>$modeloEstadoestudiantil->id));
					
					}

				//actualizar Seguridadsocial
				if ($arrBusquedad[2]=="Seguridadsocial") {
					 $modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
					$this->redirect(array('seguridadSocial/update','id'=>$modeloSeguridadsocial->id));
					
					}

					//actualizar InformacionVivienda
				if ($arrBusquedad[2]=="Informacionvivienda") {
					 $modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
					$this->redirect(array('informacionVivienda/update','id'=>$modeloInformacionVivienda->id));
					
					}

						//actualizar InformacionEconomica
				if ($arrBusquedad[2]=="Informacioneconomica") {
					 $modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					$this->redirect(array('informacionEconomica/update','id'=>$modeloInformacionEconomica->id));
					
					}

					//actualizar Experiencia Laboral
				if ($arrBusquedad[2]=="Experiencialaboral") {
					 $modeloExperiencialaboral=Experiencialaboral::model()->findByPk($modelEmpleado["experiencialaboral"]);
					$this->redirect(array('experiencialaboral/update','id'=>$modeloExperiencialaboral->id));
					
					}

					if ($arrBusquedad[2]=="Todo") {
						 $arrBusquedad = array();
       					 
						$modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
						$modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
						$modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
						$modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
						$modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					 	$modeloInformacionPersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					 	$modeloExperiencialaboral=Experiencialaboral::model()->findByPk($modelEmpleado["experiencialaboral"]);
					 	array_push($arrBusquedad, $modeloInformacionacademica,$modeloEstadoestudiantil, $modeloSeguridadsocial,$modeloInformacionVivienda,
					 		$modeloInformacionEconomica,$modeloInformacionPersonal,$modeloContrato,$modeloDotacion,$modeloExperiencialaboral);
						Yii::app()->session['todo']=$arrBusquedad;
					$this->redirect(array('Informacionpersonal/updateTodo','id'=>$modeloInformacionPersonal->cc));
					
					}

				
					}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};
			
			
		          }else{



		 		$id="";
		 		$modelEmpleado=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($modelEmpleado) ; $i++) { 
		 		  if ($modelEmpleado[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$modelEmpleado[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $modelEmpleado=Informacionempleado::model()->findByPk($id);

		 		 if (!empty($modelEmpleado)) {
	
		 	//actualizar contrato
				if ($arrBusquedad[2]=="Contrato") {
					 $modeloContrato=Contrato::model()->findByPk($modelEmpleado["contrato"]);
					 	$this->redirect(array('contrato/update','id'=>$modeloContrato->id));
				 	
					}

								//actualizar dotacion
				if ($arrBusquedad[2]=="Dotacion") {
					 $modeloDotacion=Dotacion::model()->findByPk($modelEmpleado["dotacion"]);
					$this->redirect(array('dotacion/update','id'=>$modeloDotacion->id));
					
					}
		
					//actualizar informacionPersonal
					if ($arrBusquedad[2]=="Informacionpersonal") {
					 $modeloInformacionpersonal=Informacionpersonal::model()->findByPk($modelEmpleado["informacionPersonal"]);
					 	$this->redirect(array('informacionpersonal/update','id'=>$modeloInformacionpersonal->cc));
					}

				//actualizar informacionFamiliar
					if ($arrBusquedad[2]=="Informacionfamiliar") {
						$familiar=Informacionfamiliar::model()->findByPk($modelEmpleado['informacionFamiliar']);
						$arrFamiliar=Informacionfamiliar::model()->findAllByAttributes(array('ccEmpleado'=>$familiar["ccEmpleado"]));
						Yii::app()->session['Familiar']="";
					    Yii::app()->session['Familiar']=$arrFamiliar;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('informacionfamiliar/admin'));
					 
					
					}

			   //actualizar experiencia laboral
					if ($arrBusquedad[2]=="Experiencialaboral") {
						$experiencia=Experiencialaboral::model()->findByPk($modelEmpleado['experiencialaboral']);
						//$arrExperiencia=Experiencialaboral::model()->findAllByAttributes(array('cedula'=>$experiencia["cedula"]));
						Yii::app()->session['Experiencialaboral']="";
					    Yii::app()->session['Experiencialaboral']=$experiencia;
					//$modeloInformacionfamiliar=Informacionfamiliar::model()->findByPk($modelEmpleado["informacionFamiliar"]);
					$this->redirect(array('Experiencialaboral/admin'));
					 
					
					}

				//actualizar informacionAcademica
				if ($arrBusquedad[2]=="Informacionacademica") {
					 $modeloInformacionacademica=Informacionacademica::model()->findByPk($modelEmpleado["informacionAcademica"]);
					$this->redirect(array('informacionacademica/update','id'=>$modeloInformacionacademica->id));
					
					}

				//actualizar estadoEstudiantil
				if ($arrBusquedad[2]=="Estadoestudiantil") {
					 $modeloEstadoestudiantil=Estadoestudiantil::model()->findByPk($modelEmpleado["estadoEstudiantil"]);
					$this->redirect(array('estadoEstudiantil/update','id'=>$modeloEstadoestudiantil->id));
					
					}

				//actualizar Seguridadsocial
				if ($arrBusquedad[2]=="Seguridadsocial") {
					 $modeloSeguridadsocial=Seguridadsocial::model()->findByPk($modelEmpleado["seguridadSocial"]);
					$this->redirect(array('seguridadSocial/update','id'=>$modeloSeguridadsocial->id));
					
					}

					//actualizar InformacionVivienda
				if ($arrBusquedad[2]=="Informacionvivienda") {
					 $modeloInformacionVivienda=InformacionVivienda::model()->findByPk($modelEmpleado["InformacionVivienda"]);
					$this->redirect(array('informacionVivienda/update','id'=>$modeloInformacionVivienda->id));
					
					}

						//actualizar InformacionEconomica
				if ($arrBusquedad[2]=="Informacioneconomica") {
					 $modeloInformacionEconomica=InformacionEconomica::model()->findByPk($modelEmpleado["InformacionEconomica"]);
					$this->redirect(array('informacionEconomica/update','id'=>$modeloInformacionEconomica->id));
					
					}
					}else{
						$this->redirect(array('Informacionempleado/mostrarError'));
					};

		 }
		
	 }
	

//accion que se utiliza para buscar empleado y Actualizar empleado 
public function actionBuscarRetiro()
	{
		$model=new Informacionempleado;
		 $arrBusquedad = array();
		 $arrBusquedad= Yii::app()->session['texto'];  
		$id="";
		//funcion original 
		 if ($arrBusquedad[1]=="Cc") {  //se cambia la primera C en minuscula // //
		 	$id=$arrBusquedad[0];
		 	 $model=Informacionempleado::model()->findByPk($id);
		 	
		
		 }else{
		 	$id="";
		 		$model=Informacionpersonal::model()->findAll();
		 		for ($i=0; $i <count($model) ; $i++) { 
		 		  if ($model[$i]["nombre"]==$arrBusquedad[0]) {
		 				$id=$model[$i]["cc"];
		 			
		 			}
		 			
		 		};
		 		 $model=Informacionempleado::model()->findByPk($id);

		 }
		

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save())
			$this->redirect(array('informacionEmpleado/index'));
		}
	
		$model=$this->loadModel($id);
		$this->render('update',array(
			'model'=>$model,
		));


	}

	//funcion para guardar el texto de evaluacion de busqueda	 
	public function actionGuardarTexto()
	{
		 $texto= strtoupper($_POST["texto"]); 
		  $tipoBUsquedad= $_POST["evaluar"];
		
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad);
		//funcion original 
		Yii::app()->session['texto']=$arrBusquedad;


	}

	//funcion para guardar el texto de evaluacion de busquedad	 
	public function actionGuardarTextoActualizar()
	{
		 $texto= strtoupper($_POST["texto"]); 
		  $tipoBUsquedad= $_POST["evaluar"];
		  $vistaCtualizar=$_POST["evaluarVista"];
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad, $vistaCtualizar);
		//funcion original 
		Yii::app()->session['actualizar']=$arrBusquedad;


	}

//funcion para guardar el texto de evaluacion de busqueda
	public function actionGuardarTextoActualizar2()
	{
		  $vistaCtualizar=$_POST["evaluarVista"];
        $arrBusquedad = array();
            
        array_push($arrBusquedad, $texto,$tipoBUsquedad, $vistaCtualizar);
		//funcion original 
		Yii::app()->session['actualizar']=$arrBusquedad;


	}


   /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarEmpleado()
    {
        $model=new Informacionpersonal;
        
         $this->render('mostrarEmpleado',array(
            'model'=>$model,
        ));
    }

          public function actionMostrarFamiliar()
    {
        
        
         $this->render('_vistaFamiliar');
        
      
    }
     /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionActualizar() {
        $model=new Informacionpersonal;
        
         $this->render('actualizar',array(
            'model'=>$model,
        ));
    }


    /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarRetiro()
    {
        $model=new Informacionpersonal;
        
         $this->render('mostrarRetiro',array(
            'model'=>$model,
        ));
    }


      /* metodo para hacer el llamado ala vista mostrarplantillaActualizar.php*/
         public function actionMostrarError()
    {
        $model=new Informacionpersonal;
        
         $this->render('error',array(
            'model'=>$model,
        ));
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de area especifica.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarArea($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreArea) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Area::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->nombreArea, // label for dropdown list
                'value' => $model->nombreArea, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);
    }

            	    /**En este metodo se ejecuta la funcion autocompletar del formulario, el cual
        tiene un campo de asignacion el tipo de cargo especifico.
        este metodo es llamado desde el campo en el formulario.*/
    public function actionListarCargo($term) {
        $criteria = new CDbCriteria;
        $criteria->condition = "LOWER(nombreCargo) like LOWER(:term)";
        $criteria->params = array(':term'=> '%'.$_GET['term'].'%');
        $criteria->limit = 30;
        $models = Cargos::model()->findAll($criteria);
        $arr = array();
        foreach ($models as $model) {
        
        	
            $arr[] = array(
                'label' => $model->nombreCargo, // label for dropdown list
                'value' => $model->nombreCargo, // value for input field
                'id' => $model->id, // return valufrom autocomplete
            );
    
        }
        echo CJSON::encode($arr);
    }

//metodo para buscar todos los familiares que tienen la persona 
             public function actionBuscarFamiliar()
    {
    	Yii::app()->session['arrFamiliar']=""; 
    	$arrFamiliar=array();
        $model=Informacionfamiliar::model()->findAll();;
        $cedula=$_POST["texto"];
        for ($i=0; $i <count( $model) ; $i++) { 
        	 if ($model[$i]["ccEmpleado"]==$cedula) {
        	 array_push($arrFamiliar,$model[$i]);
       		}
        }
      Yii::app()->session['arrFamiliar']=  $arrFamiliar ;
       
    }


    public function actionUpdateTodo($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Informacionempleado']))
		{
			
			$model->attributes=$_POST['Informacionempleado'];
			
			if($model->save()){
				
				$this->redirect(array('informacionEmpleado/Actualizar','id'=>$model->id));
			}
		}

		$this->render('updateTodo',array(
			'model'=>$model,
		));
	}


		public function actionEliminar($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

}

