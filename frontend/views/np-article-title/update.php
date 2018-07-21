<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NpArticleTitle */

$this->title = 'Update Np Article Title: ' . $model->tid;
$this->params['breadcrumbs'][] = ['label' => 'Np Article Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tid, 'url' => ['view', 'id' => $model->tid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="np-article-title-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
