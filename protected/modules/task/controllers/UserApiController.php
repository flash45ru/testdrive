<?php

class UserApiController extends Controller
{
    public function actionIndex()
    {
        if (Yii::app()->request->requestType !== 'GET') {
            header('Content-type: application/json', true, 405);

            echo json_encode(['message' => Yii::t('app', 'Only GET request')]);
        } else {
            $min_id = 4;
            $max_id = 16;
            $users = Yii::app()->db->createCommand([
                'select' => '*',
                'from' => 'tbl_user',
                'where' => 'id > :min_id and id < :max_id',
                'params' => [':min_id' => $min_id, ':max_id' => $max_id]
            ])->queryAll();
            header('Content-type: application/json', true, 200);

            echo json_encode($users);
        }

        Yii::app()->end();
    }
}
