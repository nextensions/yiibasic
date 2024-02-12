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

  private function header($filename)
  {
    $header = array(
      'odd' => array(
        'L' => array(
          'content' => isset(Yii::$app->user->identity->school->fullname)
            ? Yii::$app->user->identity->school->fullname
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
            ?  Yii::$app->user->identity->school->fullname : "ชื่อโรงเรียน",
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

  private function outputMpdf($config, $data)
  {
    $params = Yii::$app->params;
    $fontDirs = $params['defaultConfig']['fontDir'];
    $fontData = $params['defaultFontConfig']['fontdata'];

    $filename = $config['filename'];
    $content = $this->renderPartial($config['template'], ['data' => $data]);

    $orientation = $config['orientation'];
    $cssFilePath =  $config['cssFilePath'];
    $watermark =  $config['watermark'];
    $paperFormat = $config['paperFormat'];

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

  public function actionPayin()
  {
    $config = [
      'filename' => 'ชื่อรายงาน',
      'template' => 'pdf/template',
      'orientation' => Pdf::ORIENT_PORTRAIT,
      'paperFormat' => Pdf::FORMAT_A4,
      'cssFilePath' => '',
      'watermark' => 'img/nikomwitthaya.png',
    ];

    $data = [
      'tax_id' => '0994000158149',
      'firstname' => 'dddfdfdf',
      'qr' => '099400026587500-13980-101-200000',
      'codabar1' => '099400026587500-13980-101-200000',
    ];

    $this->outputMpdf($config, $data);
  }

  public function actionReceipt()
  {
    $config = [
      'filename' => 'ชื่อรายงาน',
      'template' => 'pdf/receipt',
      'orientation' => Pdf::ORIENT_PORTRAIT,
      'paperFormat' => Pdf::FORMAT_A4,
      'cssFilePath' => '',
      'watermark' => 'img/nextschool.png',
    ];

    $receiptRaws = [
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002539',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '17000',
        'method' => '1',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-12',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-13',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-14',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ],
      [
        'date' => '2024-02-14',
        'receipt_id' => 'K67002540',
        'code' => '4055',
        'fullname' => 'เด็กชาย อัครโยธิน สิทธิวงษ์',
        'name' => 'ค่าใช้จ่ายประจำปีการศึกษา 2566 ภาคเรียนที่ 2',
        'classroom' => 'อ.1/4 MEP',
        'paid' => '2900',
        'method' => '0',
        'receive_name' => 'ภัทรินญา แก้วโท',
        'status' => 'true',
      ]
    ];

    $rowSpanIndex = array_filter(array_count_values(array_column($receiptRaws, 'date')), function ($v) {
      return $v > 1;
    });

    $rows = '';
    $currentDate = '';
    $numRows = 0;
    foreach ($receiptRaws as $receiptData) {

      $numRows++;

      $rowSpanNumber = isset($rowSpanIndex[$receiptData['date']]) ? $rowSpanIndex[$receiptData['date']] : 0;
      $firstTD = '';

      if (empty($currentDate)) {
        $currentDate =  $receiptData['date'];
        if ($rowSpanNumber) {
          $firstTD = '<td rowspan="' . $rowSpanNumber . '">' . $receiptData['date'] . '</td>';
        }
      } else if ($currentDate !== $receiptData['date']) {
        $rows .= '<tr><td colspan="10">รวม</td>';
        $currentDate = $receiptData['date'];
        if ($rowSpanNumber) {
          $firstTD = '<td rowspan="' . $rowSpanNumber . '">' . $receiptData['date'] . '</td>';
        } else {
          $firstTD = '<td>' . $receiptData['date'] . '</td>';
        }
      }


      $rows .= '<tr>
                  ' . $firstTD . '
                  <td>' . $receiptData['receipt_id'] . '</td>
                  <td>' . $receiptData['code'] . '</td>
                  <td>' . $receiptData['fullname'] . '</td>
                  <td>' . $receiptData['name'] . '</td>
                  <td>' . $receiptData['classroom'] . '</td>
                  <td>' . $receiptData['paid'] . '</td>
                  <td>' . $receiptData['method'] . '</td>
                  <td>' . $receiptData['receive_name'] . '</td>
                  <td>' . $receiptData['status'] . '</td>
                </tr>
      ';

      if ($numRows == count($receiptRaws))
        $rows .= '<tr><td colspan="10">รวม</td>';
    }

    $data = [
      'header' => 'รายงานการรับเงินประจำวันแยกตามใบเสร็จ',
      'sub_header' => 'ประจำวันที่ XX - XX',
      'rows' => $rows,
    ];

    $this->outputMpdf($config, $data);
  }
}
