<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Calc App';
?>
<div class="site-index">

    <div class="body-content">

        <?php $form = ActiveForm::begin(['id' => 'calc-form', 'method' => 'post']); ?>
        <?=$form->field($model, 'number', [
            'inputOptions' => [
                'placeholder' => 'Enter numbers',
                'pattern' => "[0-9^]{1,}",
                'required' => true
            ],
        ])->label("Please enter numbers");?>
        <?=$form->field($model, 'button', [
            'inputOptions' => [
                'type' => 'submit',
                'class' => 'btn btn-primary',
                'value' => $model->button1
            ]
        ])->label(false);?>
        <?=$form->field($model, 'button', [
            'inputOptions' => [
                'type' => 'submit',
                'class' => 'btn btn-secondary',
                'value' => $model->button2
            ]
        ])->label(false);?>
        <?=$form->field($model, 'button', [
            'inputOptions' => [
                'type' => 'submit',
                'class' => 'btn btn-info',
                'value' => $model->button3
            ]
        ])->label(false);?>
        <?php ActiveForm::end(); ?>
        <?php if ($result !== false): ?>
            <p>Result: <?=$result?></p>
            <p>Button: <?=$model->button?></p>
        <?php endif; ?>


    </div>
</div>
