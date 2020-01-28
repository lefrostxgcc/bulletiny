<?php

use yii\helpers\Html;

$this->title = 'Фото';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <a class="btn btn-default"
        href='/photo/add?id=<?=$currBulletin->id?>'>
        Добавить фото
    </a>
</div>

<div class="row">
    <?php foreach ($currBulletin->photo as $photo_) { ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <a class="thumbnail">
            <img src="/<?=$photo_->link?>" alt="no_photo" />
            <p>
                <?=$photo_->info?>
            </p>
        </a>
        <div class="btn-group">
            <button type="button"
                class="btn btn-default dropdown-toggle"
                data-toggle="dropdown">
                Управление <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Информация</a></li>
                <li><a href="#">Сделать главной</a></li>
                <li class="divider" role='separator'></li>
                <li><a href="#">Удалить фото</a></li>
            </ul>
        </div>
    </div>
    <?php } ?>
</div>
