<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'name')->label('Your name') ?>
	<?= $form->field($model, 'addr')->label('Your address') ?>
	<?= $form->field($model, 'phone')->label('Your phone') ?>
	<?= $form->field($model, 'age')->label('Your age') ?>
	<?= $form->field($model, 'email')->label('Your email') ?>

	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
	</div>
<?php $form = ActiveForm::end(); ?>