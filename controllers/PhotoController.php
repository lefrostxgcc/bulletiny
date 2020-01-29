<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\BulletinsRecord;
use app\models\PhotoForm;
use app\models\PhotoRecord;
use yii\web\UploadedFile;

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

    public function actionAdd($id=1)
    {
        $Photo = new PhotoForm();
        if (Yii::$app->request->isPost)
        {
            if ($Photo->validate())
            {
                $Photo->upload();
                $PhotoRec = new PhotoRecord();
                $PhotoRec->link = $Photo->link;
                $PhotoRec->bull_id = $id;
                $PhotoRec->save();
                return $this->redirect('/photo/index');
            }
        }
        return $this->render('add', ['photo' => $Photo]);
    }

    public function actionTest()
    {
        return $this->render('test');
    }
}
