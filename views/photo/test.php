<h2>ТЕСТ</h2>

<input type="text" class="form-control" style="display:none"
    name="testfield" id="testfield" />

<button type="button" id="tb" class="btn btn-success">
    Показать
</button>

<?php
$script = <<< JS
$("#tb").on(
    "click",
    function()
    {
        if ($("#testfield").is(":hidden"))
        {
            $("#testfield").show();
            $(this).html("Скрыть");
        }
        else
        {
            $("#testfield").hide();
            $(this).html("Показать")
        }
    }
);
JS;

$this->registerJs($script, yii\web\View::POS_READY);
