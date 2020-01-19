<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class PhotoController extends Controller
{
    public function actionIndex($id=1)
    {
        return $this->render('index');
    }
}
