<div class="row">
    <div class="col-lg-6 col-md-6">
        <h3><?=$bulletin->title?></h3>
        <p>
            <img src="/<?=$bulletin->getAvatar()?>" alt="ava"
            style="height: 400px;" />
        </p>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-hand-down"></i>
                Информация
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Цена:</td>
                        <td>
                            <strong><?=$bulletin->price?></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Город:</td>
                        <td>
                            <strong><?=$bulletin->city?></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Контакты:</td>
                        <td>
                            <strong><?=$bulletin->contacts?></strong>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <?=$bulletin->info?>
        </div>
        <div class="row">
            <hr>
                Дата публикации:
                <span class="badge"><?=$bulletin->date_pub?></span>
            </div>
        </div>
    </div>
</div>



