<?php

use yii\helpers\Html;

$this->title = 'Фото';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
    <a class="btn btn-default" href='/photo/add'>
        Добавить фото
    </a>
</div>

<div class="row">
    <?php foreach ($currBulletin->photo as $photo_) { ?>
    <div class="col-sm-6 col-md-4 col-lg-3">
        <a class="thumbnail">
            <img src="<?=$photo_->link?>" alt="no_photo" />
            <p>
                <?=$photo_->info?>
            </p>
        </a>
    </div>
    <?php } ?>
</div>
