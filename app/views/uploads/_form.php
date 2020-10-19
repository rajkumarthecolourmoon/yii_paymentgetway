<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Uploads */
/* @var $form yii\widgets\ActiveForm */
?>
<?php if (Yii::$app->session->hasFlash('success')) {
    ?>
    <div class="alert alert-success">
        add successfully
    </div>
    <?php
} elseif (Yii::$app->session->hasFlash('danger')) {
    ?>
    <div class="alert alert-danger">
      alerdy exits
    </div>
    <?php
}
?>
<div class="uploads-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="form-group">
    <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <input type="text" name="subject" class="form-control">
</div>
<div class="form-group">
    <input type="text" name="class" class="form-control">
</div>
    <div class="form-group">
    <input type="submit" name="submit" value="submit" class="btn btn-success">

    </div>

    <?php ActiveForm::end(); ?>

</div>
