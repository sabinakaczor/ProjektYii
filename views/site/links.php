<?php
/**
 * Created by PhpStorm.
 * User: sabina
 * Date: 06.07.18
 * Time: 11:57
 */

use yii\helpers\Html;

$this->title = "Ważne linki";
$this->params['breadcrumbs'][] = $this->title;

?>
<div>
    <h2> <?= Html::encode($this->title) ?> </h2>
    <ul>
        <li><a href="https://www.yiiframework.com/forum/">Forum</a></li>
        <li><a href="https://www.yiiframework.com/doc/guide/2.0/pl">Przewodnik po Yii 2.0</a></li>
    </ul>
</div>
