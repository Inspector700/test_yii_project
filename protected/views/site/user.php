
<?php

/* @var $this SiteController */
/* @var $model User */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Users';
$this->breadcrumbs = array(
    'Users',
);
?>

<h1>User list</h1>
<?php $this->widget('application.extensions.hello.HelloWidget', array(
    'username' => 'Борис'
)); ?>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email'); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'password2'); ?>
        <?php echo $form->passwordField($model, 'password2'); ?>
        <?php echo $form->error($model, 'password2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'activate'); ?>
        <?php echo $form->checkBox($model, 'activate'); ?>
        <?php echo $form->error($model, 'activate'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

        <?php $this->endWidget(); ?>

</div></form>


