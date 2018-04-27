<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

/* @var $model \yii\db\ActiveRecord */
$model = new $generator->modelClass();
$safeAttributes = $model->safeAttributes();
if (empty($safeAttributes)) {
    $safeAttributes = $model->attributes();
}

echo "<?php\n";
?>

use metronic\widgets\ActiveForm;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-form">

    <?= "<?php " ?>$form = ActiveForm::begin(['buttons'=>[
        Button::widget([
            "tag"=>Button::TAG_SUBMIT,
            "text"=>"保存",
            "icon"=>'glyphicon glyphicon-floppy-disk',
            "sbold"=>true,
            "color"=>Button::COLOR_BLUE,
        ]),
        Button::widget([
            "tag"=>Button::TAG_A,
            "text"=>'取消',
            "icon"=>'fa fa-mail-reply',
            'url'=>'javascript:window.history.back()',
            "sbold"=>true,
            "color"=>Button::COLOR_BLUE_HOKI,
            'outline'=>true,
        ]),
    ]]); ?>

<?php foreach ($generator->getColumnNames() as $attribute) {
    if (in_array($attribute, $safeAttributes)) {
        echo "    <?= " . $generator->generateActiveField($attribute) . " ?>\n\n";
    }
} ?>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
