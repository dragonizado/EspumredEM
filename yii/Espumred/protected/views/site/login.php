<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

// $this->pageTitle=Yii::app()->name . ' - Login';
// $this->breadcrumbs=array(
//url('/yii/espumred/images/back.jpg') !important;
// 	'Login',
// );
?>

<style media="screen">
  body{
    background-image: url('<?php echo Yii::app()->baseUrl;?>/images/back6.png') !important;
    background-size: 100% 100%;
    height: 100vh;

    /*background-position:center;*/
    /*background-repeat: no-repeat;        */
    /*position: relative; */
  }

  header{
    display: none;
  }

  .footermediaQuery{
    position:fixed;
    width:100%;
    bottom:0px;
  }
  .footermediaQuerym{
    margin-top:9.5%;
  }
  .caja{
    box-shadow: 4px 4px 4px rgba(0,0,0,0.05) !important;
    max-width: 400px;
    /*margin-left:36%; */
    /*margin-top: 12%;*/
    margin-top: 2%;
  }

  .caja hr{
    margin-bottom: 0px !important;
  }

  .btn-su{
    margin-left:35%;
  }

  .caja .panel-body{
    display:block !important;
  }
  .table>thead>tr>th,
  .table>tbody>tr>th,
  .table>tfoot>tr>th,
  .table>thead>tr>td,
  .table>tbody>tr>td,
  .table>tfoot>tr>td
  {
    padding: 8px !important;
    line-height: 1.42857143 !important;
    vertical-align: top !important;
    /*border-top: 1px solid #ddd !important;*/
  }

  .table-bordered>thead>tr>th,
  .table-bordered>tbody>tr>th,
  .table-bordered>tfoot>tr>th,
  .table-bordered>thead>tr>td,
  .table-bordered>tbody>tr>td,
  .table-bordered>tfoot>tr>td
  {
    border: 1px solid #ddd;
  }
  .table-striped>tbody>tr:nth-child(odd)>td,
  .table-striped>tbody>tr:nth-child(odd)>th
  {
    background-color: rgba(243, 103, 22, 0.11) !important;
  }
  .radius{
    border-radius: 3px;
    margin-right: 4px;
  }
</style>

<div class="form">
  <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
      'validateOnSubmit'=>true,
    )));
  ?>
<form>
  <div class="row">
    <div class="col-md-3 hidden-xs"></div>
    <div class="col-md-6" align="center">
      <a href="<?php echo Yii::app()->createUrl("site/index"); ?>"><img src="<?php echo Yii::app()->baseUrl;?>/images/logoredondo2.png" width="122px" height="122px" alt="Cargando contenido.." style=" margin-top:10%; z-index:9999;"></a>
      <div class="panel caja">
    <div class="panel-head" style="text-align:center;">
      <h3>Iniciar Sesión</h3>
    </div>
    <hr>
    <div class="panel-body">
      <p id="textErrormayus" ></p>
      <div >
          <!-- <?# echo $form->labelEx($model,'Nombre Usuario*'); ?> -->
        <?php
        if(isset($_GET['user'])){
        echo $form->textField($model,'username' ,array('size'=>20,'maxlength'=>30, "class"=>"form-control", "placeholder"=>"Nombre Usuario","value"=>$_GET['user']));

        }else{
        echo $form->textField($model,'username' ,array('size'=>20,'maxlength'=>30, "class"=>"form-control", "placeholder"=>"Nombre Usuario"));
        }
        ?>
        <?php echo $form->error($model,'username'); ?>
      </div><br>

      <div >
        <!-- <?# echo $form->labelEx($model,'password'); ?> -->
        <?php
        if(isset($_GET['pass'])){
         echo $form->passwordField($model,'password' ,array('size'=>20,'maxlength'=>20, "class"=>"form-control" , "placeholder"=>"Contraseña", "onkeyup"=>"detectmayus(event);", "value" => $_GET['pass']));
        }else{
         echo $form->passwordField($model,'password' ,array('size'=>20,'maxlength'=>20, "class"=>"form-control" , "placeholder"=>"Contraseña", "onkeyup"=>"detectmayus(event);"));
        }
         ?>
        <?php echo $form->error($model,'password'); ?>

        <div class="row">
          <div class="col-md-6 col-xs-6" >
            <div class="rememberMe">
              <?php echo $form->checkBox($model,'rememberMe'); ?>
              <?php echo $form->label($model,'Recuerdame'); ?>
              <?php echo $form->error($model,'rememberMe'); ?>
            </div>

          </div>
          <div class="col-md-6 col-xs-6" align="right" style="margin-top:2.5%;">
            <a href="<?php echo Yii::app()->createUrl("site/answers"); ?>" style="margin-right:10%;">¿Necesitas ayuda?</a>
          </div>

        </div>

      </div>
      <br>
      <div class="row">
        <div class="col-md-3 hidden-xs"></div>
        <div class="col-md-6 col-xs-12" align="center">
          <div class="button">
            <?php echo CHtml::submitButton('Iniciar sesión', array("class"=>"btn btn-primary btn-large")); ?>
          </div>
        </div>
        <div class="col-md-3 hidden-xs"></div>
      </div>
    </div>
  </div>
    </div>
    <div class="col-md-3 hidden-xs"></div>
  </div>

</form>
<br><br>
  <?php $this->endWidget(); ?>
</div><!-- form -->

      <p style="color:white; font-size:24px; text-align:center; margin-top:30%;">ESPUMRED</p>

<script type="text/javascript">
    var bloqstatus = false;
  $(document).ready(function(){
    // $('body').css({'background-color':'#EBEEEE'});
    $('#Footer').remove();
    // $('header').remove();
    // $('html').keyup(function(e){
    //   if(e.key == "CapsLock"){
    //         if(bloqstatuss == true){
    //           bloqstatus = falses;
    //         }else if(bloqstatus == false){
    //           bloqstatus = true;
    //         }
    //       }
    //       if(bloqstatus == true){
    //         $('#textErrormayus').text('Alerta Bloq Mayús está activo');
    //       }else{
    //          $('#textErrormayus').text(' ');
    //       }
    // });

    // if ($(window).width() >= 820) {
    //   $('section#Footer').removeClass('footermediaQuerym');
    //   $('section#Footer').addClass('footermediaQuery');
    // }

    // $(window).resize(function(){
    //    if ($(window).width() >= 820) {
    //      $('section#Footer').removeClass('footermediaQuerym');
    //      $('section#Footer').addClass('footermediaQuery');
    //    }else if($(window).width() <= 766){
    //       $('section#Footer').removeClass('footermediaQuery');
    //       $('section#Footer').addClass('footermediaQuerym');

    //    }

    //  });

  });
  function detectmayus(e){
    var hola = CapsLock.isOn();
    if (hola == true){
      $('#textErrormayus').text('Alerta Bloq Mayús está activo');
    }else{
      $('#textErrormayus').text(' ');
    }
  }
</script>
