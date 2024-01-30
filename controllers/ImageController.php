<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;

class ImageController extends Controller
{
   public function actionImagecrop(){
    return $this->render('imagecrop' );
  }
}