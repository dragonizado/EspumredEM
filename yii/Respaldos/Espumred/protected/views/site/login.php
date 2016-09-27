<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


	<form class="form-horizontal">
  <fieldset>
    	<br><br>
    <div class="form-group">
      <?php echo $form->labelEx($model,'username' ,array("class"=>"col-lg-2  col-lg-offset-3 control-label")); ?>
      <div class="col-lg-4">
		<?php echo $form->textField($model,'username' ,array('size'=>20,'maxlength'=>30, "class"=>"form-control", "placeholder"=>"Nombre Usuario")); ?>
		<?php echo $form->error($model,'username'); ?>
      </div>
      <div class="col-lg-8">
      </div>
    </div>

    <div class="form-group">
       <?php echo $form->labelEx($model,'password',array("class"=>"col-lg-2 col-lg-offset-3 control-label")); ?>
      <div class="col-lg-4">

			<?php echo $form->passwordField($model,'password' ,array('size'=>10,'maxlength'=>10, "class"=>"form-control" , "placeholder"=>"Password")); ?>
			<?php echo $form->error($model,'password'); ?>
       
        <div class="rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'Recuerdame'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>
      </div>
    </div>
    <br><br><br><br><br>
    <div class="form-group" align="right">
      <div class="col-lg-4 col-lg-offset-3">
         <div class="button">
		<?php echo CHtml::submitButton('Login', array("class"=>"btn btn-primary btn-large")); ?>
		</div>
      </div>
    </div>
  </fieldset>
</form>

<?php $this->endWidget(); ?>
</div><!-- form -->
