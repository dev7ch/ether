<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var object $model Contains the model object based on DynamicModel yii class. */
/* @var $this \luya\web\View */
/* @var $form \yii\widgets\ActiveForm */

?>

<?php if (Yii::$app->session->getFlash('contactform_success')): ?>
    <div class="alert alert-success">The form has been submited successfull.</div>
<?php else: ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="field half">
        <?= $form->field($model, 'name'); ?>
    </div>
    <div class="field half">
    <?= $form->field($model, 'email'); ?>
    </div>
    <div class="field">
        <?= $form->field($model, 'message')->textarea(); ?>
    </div>
    <ul class="actions">
        <li>
            <?= Html::submitButton('Submit', ['class' => 'button special']) ?>
        </li>
    </ul>
    <?php ActiveForm::end(); ?>
<?php endif; ?>


