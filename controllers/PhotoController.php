<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use \app\models\BulletinsRecord;

class PhotoController extends Controller
{
    public function actionIndex($id=1)
    {
        $currBulletin = BulletinsRecord::find()
            ->where($id)
            ->one();
        return $this->render('index',
            ['currBulletin' => $currBulletin]);
    }
}
