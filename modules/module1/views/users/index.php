<?php
use yii\helpers\Html;
?>

<table border="2">
<?php foreach ($users as $user): ?>
<tr>
    <td>
        <?= Html::encode("{$user->id}") ?>
    </td>
    <td>
        <?= Html::encode("{$user->login}") ?>
    </td>
    <td>
        <?= Html::encode("{$user->isAdmin}") ?>
    </td>
    <td>
        <?= Html::encode("{$user->email}") ?>
    </td>
</tr>
<?php endforeach; ?>

</table>