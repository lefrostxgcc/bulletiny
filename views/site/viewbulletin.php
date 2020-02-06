<div class="row">
    <div class="col-lg-6 col-md-6">
        <h3><?=$bulletin->title?></h3>
        <p>
            <img src="/<?=$bulletin->getAvatar()?>" alt="ava"
            style="height: 400px;" />
        </p>
        <p><?=$bulletin->info?></p>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="row">
            Цена <strong><?=$bulletin->price?></strong>
        </div>
        <div class="row">
            Город: <strong><?=$bulletin->city?></strong>
        </div>
        <div class="row">
            Контактная информация: <strong><?=$bulletin->contacts?></strong>
        </div>
        <div class="row">
            Дата публикации: <strong><?=$bulletin->date_pub?></strong>
        </div>
    </div>
</div>



