<?php
    use yii\helpers\Html;

    $this->title = 'Список постов';
?>

<div class="row">
    <h3>
        <?= Html::a($model['title'], ['post/view', 'id' => $model['id']]) ?>
    </h3>
    <p><?= $model->lead ?></p>
</div>