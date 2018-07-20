<?php
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>

<ul>
	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
	<li><label>Address</label>: <?= Html::encode($model->addr) ?></li>
	<li><label>Phone</label>: <?= Html::encode($model->phone) ?></li>
	<li><label>Age</label>: <?= Html::encode($model->age) ?></li>
	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>