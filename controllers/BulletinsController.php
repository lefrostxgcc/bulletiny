<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\BulletinsForm;
use app\models\BulletinsRecord;

class BulletinsController extends Controller
{
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
            return $this->redirect('/site/login');

        $wait_bulletins = $this->getBulletins('wait');
        $public_bulletins = $this->getBulletins('public');
        $delete_bulletins = $this->getBulletins('delete');
        return $this->render('index',
            ['wait_bulletins'=>$wait_bulletins,
                'public_bulletins'=>$public_bulletins,
                'delete_bulletins'=>$delete_bulletins]);
    }

    private function getBulletins($status='wait')
    {
        $currSession = Yii::$app->session;
        $bulletins =  BulletinsRecord::find()
            ->where(['user_id'=>$currSession['__id']])
            ->andWhere(['status'=>$status])
            ->all();
        return $bulletins;
    }

    public function actionAddbulletin($id=-1)
    {
        if (Yii::$app->user->isGuest)
            return $this->redirect('/site/login');
        $currSession = Yii::$app->session;
        $new_bull = new BulletinsForm();
        if ($id > 0)
        {
            $currRecord = BulletinsRecord::find()
                ->where(['id' => $id])
                ->one();
            $new_bull->setCurrForm($currRecord);
        }
        if ($new_bull->load(Yii::$app->request->post()))
        if ($new_bull->validate())
        {
            if ($id > 0)
                $newRecord = BulletinsRecord::find()
                ->where(['id' => $id])
                ->one();
            else
                $newRecord = new BulletinsRecord();
            $newRecord->setNewRecord($new_bull, $currSession['__id']);
            $newRecord->save();
            return $this->redirect('/bulletins/index');
        }
        return $this->render('add', ['model'=>$new_bull]);
    }

    public function actionPublic($id = 1)
    {
        $this->setStatus($id, 'public');
    }

    public function actionDelete($id=1)
    {
        $this->setStatus($id, 'delete');
    }

    public function actionWait($id=1)
    {
        $this->setStatus($id);
    }

    private function setStatus($id=1, $status='wait')
    {
        $currBulletin = BulletinsRecord::find()
            ->where(['id' => $id])
            ->one();
        if ($status == 'public')
            $currBulletin->setPublic();
        elseif ($status == 'delete')
            $currBulletin->setDelete();
        elseif ($status == 'wait')
            $currBulletin->setWait();
        $currBulletin->save();
        $this->redirect('/bulletins/index');
    }
}
