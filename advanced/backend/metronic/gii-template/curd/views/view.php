<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();

echo "<?php\n";
?>

use yii\helpers\Html;
use yii\widgets\DetailView;
use metronic\widgets\Portlet;
use metronic\widgets\Button;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view row">

    <?= "<?php " ?>Portlet::begin(["title"=>Html::encode($this->title), "icon"=>'glyphicon glyphicon-eye-open','actions'=> [
        ["text"=>"更新", "icon"=>'glyphicon glyphicon-pencil', "color"=>Button::COLOR_GREEN, "url"=>['update', 'id' => $model->id]],
        ["text"=>"删除" ,"icon"=>'glyphicon glyphicon-trash', "color"=>Button::COLOR_RED, "url"=>['delete', 'id' => $model->id], 'options'=>[
            'data'=>[
                'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ]
        ]],
        ["text"=>"返回", "icon"=>'fa fa-mail-reply', "color"=>Button::COLOR_BLUE_HOKI, "url"=>"javascript:window.history.back()"],
    ]]);?>

    <?= "<?= " ?>DetailView::widget([
        'model' => $model,
        'attributes' => [
<?php
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        echo "            '" . $name . "',\n";
    }
} else {
    foreach ($generator->getTableSchema()->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
    }
}
?>
        ],
    ]) ?>

    <?= "<?php " ?>Portlet::end();?>

</div>
