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
use layui\widgets\Card;
use layui\widgets\Button;
use layui\widgets\Blockquote;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->modelClass, '\\') ?> */

$this->title = $model-><?= $generator->getNameAttribute() ?>;
$this->params['breadcrumbs'][] = ['label' => <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-view">

    <?= "<?php " ?>Card::begin(["title"=>Html::encode($this->title),"icon"=>"&#xe63c;"])?>

    <?= "<?php " ?>Blockquote::begin()?>

    <div class="layui-btn-group">
        <?= "<?= " ?>Button::widget([
            "text"=><?= $generator->generateString('Update') ?>,
            "icon"=>'&#xe642;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_NORMAL,
            "url"=>['update', <?= $urlParams ?>],
        ]) ?>
        <?= "<?= " ?>Button::widget([
            "text"=><?= $generator->generateString('Delete') ?>,
            "icon"=>'&#xe640;',
            "tag"=>Button::TAG_A,
            "size"=>Button::SIZE_SM,
            "theme"=>Button::THEME_DANGER,
            "url"=>['delete', <?= $urlParams ?>],
            "options"=>[
                'data' => [
                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]
        ]) ?>
    </div>

    <?= "<?php " ?>Blockquote::end()?>

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

    <?= "<?php " ?>Card::end();?>

</div>
