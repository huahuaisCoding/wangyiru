<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\NpArticleTitle */

$this->title = 'Create Np Article Title';
$this->params['breadcrumbs'][] = ['label' => 'Np Article Titles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="np-article-title-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
