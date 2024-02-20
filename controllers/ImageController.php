<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use yii\web\UploadedFile;

class ImageController extends Controller
{
   public function actionImagecrop(){
  return $this->render('imagecrop');
  }

  public function actionUploadimage(){
    if (Yii::$app->request->isAjax) {
      $data = Yii::$app->request->post('image');

      $image_array_1 = explode(";", $data);
      $image_array_2 = explode(",", $image_array_1[1]);
      $data = base64_decode($image_array_2[1]);

      $image_name = 'upload/' . 'image_' .time() . '.png';

      file_put_contents($image_name, $data);

      echo Yii::$app->request->baseUrl . '/' . $image_name;
  }
  }
}