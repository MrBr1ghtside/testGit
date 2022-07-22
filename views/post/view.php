<?php
    $this->title = $model->title;
?>

<article>
    <p> <?= date('d.m.Y',$model->created_at) ?></p>
    <h1><?= $model->title ?></h1>
    <p><?= $model->text ?></p>
</article>
