<?php

namespace app\controllers;

use Yii;
use kartik\mpdf\Pdf;
use Mpdf\Mpdf;
use yii\web\Controller;
use yii\helpers\Url;

class ReportController extends Controller
{
  public $cssInline;
  public $download = false;

  public function actionPdf()
  {

    $params = Yii::$app->params;
    $fontDirs = $params['defaultConfig']['fontDir'];
    $fontData = $params['defaultFontConfig']['fontdata'];

    $stylesheet = file_get_contents(Yii::getAlias('@webroot/css/kv-mpdf-bootstrap-sarabun.min.css'));
    $stylesheetPdf = file_get_contents(Yii::getAlias('@webroot/css/pdf-sarabun.css'));


    // get your HTML raw content without any layouts or scripts
    $content = $this->renderPartial('pdf/template');

    // setup kartik\mpdf\Pdf component
    $pdf = new Pdf([
      // set to use core fonts only
      'mode' => Pdf::MODE_UTF8,
      // A4 paper format
      'format' => Pdf::FORMAT_A4,
      // portrait orientation
      'orientation' => Pdf::ORIENT_PORTRAIT,
      // stream to browser inline
      'destination' => Pdf::DEST_BROWSER,
      // your html content input
      'content' => $content,
      'defaultFont' => 'thsarabun',
      // format content from your own css file if needed or use the
      // enhanced bootstrap css built by Krajee for mPDF formatting
      'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
      // any css to be embedded if required
      'cssInline' => '.kv-heading-1{font-size:18px}',

      // set mPDF properties on the fly
      'options' => [
        'title' => 'Krajee Report Title',
        'fontDir' => array_merge($fontDirs, [
          Url::base() . 'fonts/',
        ]),
        'fontdata' => $fontData + [
          'thsarabun' => $params['SetFontTHsarabun'],
          'garuda' => $params['SetFontGaruda'],
          'fontawesome' => $params['SetFontAwesome'],
        ],

      ],
      // call mPDF methods on the fly
      'methods' => [
        'SetTitle' => 'Privacy Policy - Krajee.com',
        'SetSubject' => 'Generating PDF files via yii2-mpdf extension has never been easy',
        'SetHeader' => ['Krajee Privacy Policy||Generated On: ' . date("r")],
        'SetFooter' => ['สร้างโดย||หน้า {PAGENO}'],
        'SetAuthor' => 'Kartik Visweswaran',
        'SetCreator' => 'Kartik Visweswaran',
        'SetKeywords' => 'Krajee, Yii2, Export, PDF, MPDF, Output, Privacy, Policy, yii2-mpdf',
        'WriteHTML' => [$stylesheet . $stylesheetPdf, 1]
      ]
    ]);


    // $pdf->WriteHTML($stylesheet, 1);
    // $pdf->WriteHTML($stylesheetPdf, 1);

    // return the pdf output as per the destination setting
    return $pdf->render();
  }

  public function actionMpdf()
  {
    $params = Yii::$app->params;
    $fontDirs = $params['defaultConfig']['fontDir'];
    $fontData = $params['defaultFontConfig']['fontdata'];

    $filename = "ชื่อรายงาน";
    $content = $this->renderPartial('pdf/template');

    $orientation = Pdf::ORIENT_PORTRAIT;
    $cssFilePath = "";
    $watermark = "";
    $paperFormat = Pdf::FORMAT_A4;

    $mpdf = new \Mpdf\Mpdf([
      'fontDir' => array_merge($fontDirs, [
        Url::base() . 'fonts/',
      ]),
      'fontdata' => $fontData + ['thsarabun' => Yii::$app->params['SetFontTHsarabun']],
      'default_font_size' => 18,
      'default_font' => 'thsarabun',
      'mode' => Pdf::MODE_UTF8,
      'format' => $paperFormat,
      'orientation' => $orientation,
      'filename' => $filename . ".pdf",
			'margin_top' => 14,
			'margin_bottom' => 14,
    ]);
 
    $header = $this->header($filename);
    $footer = $this->footer();
    $mpdf->SetTitle($filename);
    $mpdf->SetHeader($header);
    $mpdf->SetFooter($footer);

    $stylesheet = file_get_contents(Yii::getAlias('@webroot/css/kv-mpdf-bootstrap-sarabun.min.css'));
    $stylesheetPdf = file_get_contents(Yii::getAlias('@webroot/css/pdf-sarabun.css'));
    $mpdf->WriteHTML($stylesheet, 1);
    $mpdf->WriteHTML($stylesheetPdf, 1);

    if (!empty($cssFilePath)) {
      $customStylesheet = file_get_contents($cssFilePath);
      $mpdf->WriteHTML($customStylesheet, 1);
    }

    if (!empty($watermark)) {
      $mpdf->SetWatermarkImage($watermark, 0.1, [100, 100]);
      $mpdf->showWatermarkImage = true;
    }

    $mpdf->showWatermarkText = true;

    if ($this->cssInline) {
      $mpdf->WriteHTML($this->cssInline, 1);
    }

    $mpdf->WriteHtml($content, 2);

    if ($this->download) {
      $mpdf->destination = Pdf::DEST_DOWNLOAD;
    }

    $filename = str_replace("/", "-", $filename);
    $filename = str_replace(".", "_", $filename);

    return $mpdf->Output($filename . ".pdf", "I");
  }

  private function header($filename)
  {
    $header = array(
      'odd' => array(
        'L' => array(
          'content' => isset(Yii::$app->user->identity->school->fullname)
            ? user()->school->fullname
            : "ชื่อโรงเรียน",
          'font-size' => 8,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => $filename,
          'font-size' => 7,
          'font-family' => 'garuda',
        ),
        'line' => 2,
      ),
      'even' => array(
        'L' => array(
          'content' => isset(Yii::$app->user->identity->school->fullname)
            ?  user()->school->fullname : "ชื่อโรงเรียน",
          'font-size' => 8,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => $filename,
          'font-size' => 8,
          'font-family' => 'garuda',
        ),
        'line' => 1,
      ),
    );

    return $header;
  }

  private function footer()
  {
    $dtime = \DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
    $timestamp = $dtime->getTimestamp();
    $footer = array(
      'odd' => array(
        'L' => array(
          'content' => 'สร้างโดย: ' . Yii::$app->name . ' (' .  Yii::$app->date->date('วันlที่ j F พ.ศ.Y เวลา H:i:s', $timestamp) . ')',
          'font-size' => 7,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => "หน้า {PAGENO}/{nb}",
          'font-size' => 8,
          'font-family' => 'garuda',
        ),
        'line' => 1,
      ),
      'even' => array(
        'L' => array(
          'content' => 'สร้างโดย: ' . Yii::$app->name . ' (' .  Yii::$app->date->date('วันlที่ j F พ.ศ.Y เวลา H:i:s', $timestamp) . ')',
          'font-size' => 7,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => "หน้า {PAGENO}/{nb}",
          'font-size' => 8,
          'font-family' => 'garuda',
        ),
        'line' => 1,
      ),
    );

    return $footer;
  }

    public function actionStickerPdf(array $selection)
    {
        $content = $this->renderPartial('_sticker', [
            'selection' => $selection,
        ]);

        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            // A4 paper format
            //'format' => Pdf::FORMAT_A4,
            'format' => [25, 20],//Pdf::FORMAT_A4,
            'marginLeft' => 1,
            'marginRight' => 1,
            'marginTop' => 1,
            'marginBottom' => false,
            'marginHeader' => false,
            'marginFooter' => false,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@frontend/web/css/kv-mpdf-bootstrap.css',
            // any css to be embedded if required
            'cssInline' => 'body{font-size:11px}',
            // set mPDF properties on the fly
            'options' => ['title' => 'Sticker'],
            // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=>false,
                'SetFooter'=>false,
            ]
        ]);

        // return the pdf output as per the destination setting
        return $pdf->render();
    }
}
