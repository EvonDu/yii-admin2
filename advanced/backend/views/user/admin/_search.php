<?php

use metronic\widgets\SearchBar;

/* @var $this yii\web\View */
/* @var $model common\models\admin\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?= SearchBar::widget([
    'model'=>$model,
    'field'=> 'username'
])?>
