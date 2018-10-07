<?php

use yii\helpers\Html;
?>

<p>Bạn đã nhập với những thông tin như sau:</p>

<ul>
    <li><label for="Name">Name</label>: <?= Html::encode($model->name)?></li>
    <li><label for="Email">Email</label>: <?= Html::encode($model->email)?></li>
</ul>