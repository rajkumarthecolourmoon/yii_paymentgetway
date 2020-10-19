<?php
// print_r($paramList);die();
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

 <?php
 $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'options' => ['name' => 'f1'], 'action' => PAYTM_TXN_URL, 'method' => 'post']);
                   ?>
   <table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' .$name.'" value="' .$value. '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
    <?php ActiveForm::end(); ?>

</div>
