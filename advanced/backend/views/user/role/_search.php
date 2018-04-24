<?php

use metronic\widgets\SearchBar;

/* @var $this yii\web\View */
/* @var $model common\models\auth\AuthItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?= SearchBar::widget([
    'model'=>$model,
    'field'=> 'description'
])?>
