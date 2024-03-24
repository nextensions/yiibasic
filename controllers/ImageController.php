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

      $fileSize = strlen($data); // in bytes
      if ($fileSize > 50000) { // 50 KB = 50000 bytes
          // Resize the image to reduce quality
          $data = $this->resizeImage($data, 0.85); // Change the quality as needed
      }

      $image_name = 'upload/' . 'image_' .time() . '.jpg';

      file_put_contents($image_name, $data);

      echo Yii::$app->request->baseUrl . '/' . $image_name;
  }
  }

  private function resizeImage($data, $quality) {
    $image = imagecreatefromstring($data);
    ob_start();
    imagejpeg($image, null, $quality * 100);
    $data = ob_get_contents();
    ob_end_clean();
    return $data;
}
}