<?php

$form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => false,
        ),
    'htmlOptions' => array(
        'style' => 'border: solid 1px gray; padding: 20px; background: #eee; border-radius: 4px; margin-top: 10px;'
    )
    ));
/* @var $model User */
/* @var $form CActiveForm */
?>
<?php $this->widget('application.extensions.hello.HelloWidget', array(
    'username' => 'Борис'
)); ?>
    <div class="row">
        <?php echo $send; ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php
$this->endWidget();
?>