<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\str\models\Jobtypes */

$this->title = 'Create Jobtypes';
$this->params['breadcrumbs'][] = ['label' => 'Jobtypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jobtypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
