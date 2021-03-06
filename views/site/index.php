<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Объявления</h1>

        <p class="lead">Здесь размещены самые новые объявления.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <?php foreach($bulletins as $bull) { ?>
            <div class="col-sm-6 col-md-4 col-ld-3">
                <a href="/site/view-bulletin?id=<?=$bull->id?>"
                    class="thumbnail">
                    <img src='<?=$bull->getAvatar()?>'
                        style="height: 200px;"
                    alt="no" title="Подробнее" />
                </a>
                <p><?=$bull->title?></p>
                <p>Цена: <strong><?=$bull->price?></strong></p>
                <p>Город: <strong><?=$bull->city?></strong></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
