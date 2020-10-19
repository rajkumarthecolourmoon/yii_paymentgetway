<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UniformPayments */

$this->title = 'Create Uniform Payments';
$this->params['breadcrumbs'][] = ['label' => 'Uniform Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uniform-payments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
