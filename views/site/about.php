<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'O stronie';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Ten widok można zmieniać edytując plik:
    </p>

    <code><?= __FILE__ ?></code>
</div>
