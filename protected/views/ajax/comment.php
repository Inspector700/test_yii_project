<div id="ajaxresult" style="display:none"></div>

<div class="form" id="CommentFormBlock">

<?php 
$form=$this->beginWidget('CActiveForm', array(
    'id'=>'comment',
    'enableAjaxValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true, 'validateOnChange'=>false),
)); ?>

    <p class="note">Поля, отмеченные <span class="required">*</span>, обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'author'); ?>
        <?php echo $form->textField($model,'author'); ?>
        <?php echo $form->error($model,'author'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

        <div class="row">
        <?php echo $form->labelEx($model,'body'); ?>
        <?php echo $form->textArea($model,'body', array('cols'=>60, 'rows'=>5)); ?>
        <?php echo $form->error($model,'body'); ?>
    </div>
 
    <div class="row buttons">
        <?php

                echo CHtml::ajaxSubmitButton('Отправить', '',
                    array(
                        'type' => 'POST',
                        'update' => '#ajaxresult',
                    ),
                    array(
                        'type' => 'submit',
                    ));


                ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->