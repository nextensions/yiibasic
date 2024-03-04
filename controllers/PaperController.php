<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\NgMpdf;

class PaperController extends Controller
{

  private function getBasePdfCss()
  {
    return 'body {font-size: 13pt;line-height: 15px;} .border {border:1px solid #000000;} .border-top {border-top:1px solid #000000;} .border-left {border-left:1px solid #000000;} .border-right {border-right:1px solid #000000;} .border-bottom {border-bottom:1px solid #000000;} .title {line-height: -1px;} .bold {font-weight: bold;} .underline {text-decoration: underline} .content {text-indent: 20mm;  margin-left: 4mm;margin-right: 8mm;} .float-left {float: left;} .float-right {float: right;} .clear {clear: both;} .pad-left {padding-left: 5mm;} .pad-right {padding-right: 5mm;} h2,h3 {margin:0;} h3{font-weight: bold;}';
  }

  private function footer()
  {
    $dtime = \DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
    $timestamp = $dtime->getTimestamp();
    $footer = array(
      'odd' => array(
        'L' => array(
          'content' => 'สร้างโดย: ' . Yii::$app->name . ' (' .  Yii::$app->date->date('วันlที่ j F พ.ศ.Y เวลา H:i:s', $timestamp) . ')',
          'font-size' => 10,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => "หน้า {PAGENO}/{nb}",
          'font-size' => 11,
          'font-family' => 'garuda',
        ),
        'line' => 1,
      ),
      'even' => array(
        'L' => array(
          'content' => 'สร้างโดย: ' . Yii::$app->name . ' (' .  Yii::$app->date->date('วันlที่ j F พ.ศ.Y เวลา H:i:s', $timestamp) . ')',
          'font-size' => 10,
          'font-family' => 'garuda',
        ),
        'R' => array(
          'content' => "หน้า {PAGENO}/{nb}",
          'font-size' => 11,
          'font-family' => 'garuda',
        ),
        'line' => 1,
      ),
    );

    return $footer;
  }

  private function outputPDF($fileName, $content, $cssFilePath, $overrideConfig = [], $additionals = [], $watermark = "")
  {

    $mpdf = new NgMpdf('utf-8', 'A4', 12, 'thsarabunnew', $left = 18, $right = 13, $top = 8, $bottom = 8, $mgh = 5, $mgf = 2, 'P');

    $mpdf->showWatermarkText = true;
    $mpdf->filename = $fileName . ".pdf";
    $mpdf->title = $fileName;

    $customCssContent = $this->getBasePdfCss();
    if (!empty($cssFilePath)) {
      $customCssContent .= file_get_contents($cssFilePath);
    }


    $mpdf->genPdf($content, $customCssContent, $this->footer(), $additionals, $watermark);
  }

  private function dummyData()
  {
    return [
      'register' => [
        'date' => '2024-02-10',
        'time' => '11:09',
      ],
      'exam' => [
        'date' => '2024-03-09',
        'time' => '00:00',
      ],
      'profile' => [
        'regis_id' => 293048,
        'seat_id' => '',
        'edu_program' => 'ห้องเรียนพิเศษภาษาจีน ชั้นมัธยมศึกษาปีที่ 1',
        'gender' => 0,
        'title' => 'ด.ช.',
        'firstname' => 'ฉัตรปรัชญา',
        'lastname' => 'มุ้งบัง',
        'mobile_no' => '0810548699',
        'fullname' => 'ด.ช. ฉัตรปรัชญา มุ้งบัง',
        'personal_id' => '1129902294330',
        'race' => 'ไทย',
        'nationality' => 'ไทย',
        'religion' => 'พุทธ',
        'dob' => '29 กันยายน 2554',
        'height' => 140,
        'weight' => 46,
        'ageYear' => '12',
        'ageMonth' => '4',
        'blood' => 'ไม่ทราบ',
        'email' => 'namotassa17@gmail.com',
        'hospital' => 'N/A',
        'born' => '-',
        'mainLang' => 'N/A',
        'graduate' => 'อนุบาลนนทบุรี',
        'graduateSubDistrict' => 'สวนใหญ่',
        'graduateDistrict' => 'เมืองนนทบุรี',
        'graduateProvince' => 'นนทบุรี',
        'elderBrother' => '0',
        'elderSister' => 1,
        'youngerBrother' => '0',
        'youngerSister' => '0',
        'birthOrder' => 1,
        'childInSchool' => 1,
        'distance' => '19',
        'travelDuration' => '25 นาที',
        'travelCost' => '.',
        'talent' => 'N/A',
        'familyStatus' => 'อยู่ด้วยกันจดทะเบียนสมรส',
        'familyStatusNo' => 0,
        'transport' => 'รถประจำทาง',
        'hasfee' => true,
        'livingType' => 'N/A',
        'siblings' => 1,
      ],
      'address' => [
        'no' => '49',
        'moo' => '4',
        'soi' => 'เรวดี 27',
        'street' => 'ติวานนท์',
        'sub_district' => 'ตลาดขวัญ',
        'district' => 'เมืองนนทบุรี',
        'province' => 'นนทบุรี',
        'zip' => '11000',
        'tel' => '0810548699',
      ],
      'dad' => [
        'title' => 'นาย',
        'f_name' => 'ธรรมนูญ',
        'l_name' => 'มุ้งบัง',
        'fullname' => 'นาย ธรรมนูญ มุ้งบัง',
        'job' => 'รับราชการ',
        'phone' => '0881994519',
        'citizen' => '3250700112548',
        'age' => 50,
        'dob' => '10 ธันวาคม 2517',
        'blood' => 'ไม่ทราบ',
        'income' => '25,000',
        'occupation' => 'รับราชการ',
        'nationality' => 'ไทย',
        'race' => 'ไทย',
        'religion' => 'พุทธ',
      ],
      'mom' => [
        'title' => 'นางสาว',
        'f_name' => 'นิตญา',
        'l_name' => 'ราชบุตร',
        'fullname' => 'นางสาว นิตญา ราชบุตร',
        'job' => 'พนักงานราชการ',
        'phone' => '0999486517',
        'citizen' => '3250700142293',
        'age' => 44,
        'dob' => '14 เมษายน 2523',
        'blood' => 'ไม่ทราบ',
        'income' => '20,000',
        'occupation' => 'พนักงานราชการ',
        'nationality' => 'ไทย',
        'race' => 'ไทย',
        'religion' => 'พุทธ',
      ],
      'parent' => [
        'title' => 'นาย',
        'firstname' => 'ธรรมนูญ',
        'lastname' => 'มุ้งบัง',
        'fullname' => 'นาย ธรรมนูญ มุ้งบัง',
        'age' => 50,
        'job' => 'รับราชการ',
        'phone' => '0881994519',
        'citizen' => '3250700112548',
        'blood' => 'ไม่ทราบ',
        'income' => '25,000',
        'occupation' => 'รับราชการ',
        'patronize' => 'N/A',
        'relative' => 'บิดา',
        'relativeDad' => true,
        'relativeMom' => 'none',
        'relativeOther' => 'none',
        'nationality' => 'ไทย',
        'race' => 'ไทย',
        'religion' => '-',
      ],
      'old_school' => [
        'name' => 'อนุบาลนนทบุรี',
        'sub_district' => 'สวนใหญ่',
        'district' => 'เมืองนนทบุรี',
        'province' => 'นนทบุรี',
        'type' => 'ค้นหา',
      ],
      'img' => 'https://app.nextschool.io/img/logo/1682664778โลโก้โรงเรียนใหญ่.jpg',
      'title' => [
        'name' => 'ไตรมิตรวิทยาลัย',
        'grade' => 1,
        'year' => 2567,
      ],
      'model' => [
        'id' => 103701,
        'registrant_id' => 293048,
        'relative_type' => 'บิดา',
        'title' => 'นาย',
        'firstname' => 'ธรรมนูญ',
        'lastname' => 'มุ้งบัง',
        'dob' => '1974-12-10',
        'citizen_id' => '3250700112548',
        'blood_type' => 'ไม่ทราบ',
        'occupation' => 'รับราชการ',
        'nationality' => 'ไทย',
        'race' => 'ไทย',
        'religion' => 'พุทธ',
        'work_place' => 'สำนักงานประกันสังคม',
        'mobile_no' => '0881994519',
        'mobile_no_verify_status' => null,
        'living_status' => 0,
        'income_per_month' => 25000,
        'address_id' => 71478,
        'created_at' => '2024-02-10 11:14:51',
        'updated_at' => '2024-02-11 13:17:18',
        'registrant' => [
          'id' => 293048,
          'source_id' => '1129902294330',
          'school_id' => 48,
          'status' => 10,
          'created_at' => '2024-02-10 11:06:08',
          'updated_at' => '2024-02-10 11:10:26',
          'last_login' => null,
          'source_type' => null,
          'target_id' => 11504,
          'period_id' => 1537,
          'delete_id' => null,
          'deleted_at' => null,
          'targets' => [
            0 => 11504
          ]
        ]
      ],
      'grade' => 1,
      'attachImage' => [
        'disability_table' => ''
      ],
    ];
  }

  private function dummyDataExamCard()
  {
    return [
        'profile' => [
        'title' => 'นางสาว',
        'firstname' => 'ณิชา',
        'lastname' => 'ทีแคส',
        'fullname' => 'นางสาว ณิชา ทีแคส',
        'personal_id' => '1505200012123',
        'grade' => 1,
        'year' => 2567,
        ],
        'register_number' => '01388',
        'targets' => [
            0 => 'วิทยาศาสตร์-คณิตศาสตร์',
        ],
        'old_school' => [
            'name' => 'เมืองใหม่(ชลอราษฎร์รังสฤษฏ์)',
            'sub_district' => 'เขาสามยอด',
            'district' => 'เมืองลพบุรี',
            'province' => 'ลพบุรี',
            'type' => 'ค้นหา',
        ],
        'dad' => [
            'fullname' => 'นาย ทศพล ศิริคูหาสมบูรณ์',
            'occupation' => 'รับจ้าง',
            'mobile_no' => '0928066647',
        ],
        'mom' => [
            'fullname' => 'นางสาว ยุภา คำวิเศษ',
            'occupation' => 'รับจ้าง',
            'mobile_no' => '0998104766',
        ],
        'parent' => [
            'fullname' => 'นางสาว อรพรรณ คำยันต์',
            'occupation' => 'รับราชการ',
            'mobile_no' => '0909098146',
            'relation' => 'ป้า',
        ],
        'homeown' => [
            'fullname' => '-',
            'occupation' => '-',
            'mobile_no' => '-',
        ],
        'registrant' => [
            'image' => 'https://s3-ap-southeast-1.amazonaws.com/nextschool.com/documents/166%2Ftmb_65cc8650c4e92_image.jpg',
        ],
        'exam' => [
            'datetime' => '2024-02-18 09:00:00',
            'seat_name' => 'F6',
            'location_name' => '232',
            'floor' => 2,
            'classroom' => 3,
        ],
        ];
  }
public function actionExamidcard()
  {
    $data = $this->dummyDataExamCard();
    $html = $this->renderPartial('examidcard', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'บัตรประจำตัวผู้เข้าสอบ_' . $data['register_number'];
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }


  public function actionProfile()
  {
    $data = $this->dummyData();
    $html = $this->renderPartial('profile', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'ใบมอบตัว_' . $data['profile']['regis_id'] . '_' . $data['model']['firstname'] . '_' . $data['model']['lastname'];
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }
  public function actionProfile_traimit()
  {
    $data = $this->dummyData();
    $html = $this->renderPartial('profile_traimit', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'ใบมอบตัว_' . $data['profile']['regis_id'] . '_' . $data['model']['firstname'] . '_' . $data['model']['lastname'];
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }

  public function actionProfile_phanarai()
  {
    $data = $this->dummyData();
    $html = $this->renderPartial('profile_phanarai', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'ใบมอบตัว_' . $data['profile']['regis_id'] . '_' . $data['model']['firstname'] . '_' . $data['model']['lastname'];
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }

  private function dummyDataNikomwitthaya()
  {
    return [
      'dataNikom' => [
      'semester' => '2',
            'year' => '2566',
            'name' => 'เด็กชายกิตติธัช สนืทราษฎร์',
            'studentid' => '13980',
            'classroom' => 'ม.1/1',
            'qr' => '099400026587500-13980-101-200000',
            'codabar' => '099400026587500-13980-101-200000',
            'educational_fees1' => '2,000.00',
            'educational_fees2' => '300.00',
            'educational_fees3' => '350.00',
            'educational_fees4' => '500.00',
            'educational_fees5' => '200.00',
            'total_text' => 'สามพันสามร้อยห้าสอบบาทถ้วน',
            'total' => '3,350.00',
            'product_code' => '80771',
            'classroom_no' => '101',
      ],
    ];
  }
  public function actionPayin_nikomwitthaya()
  {
    $data = $this->dummyDataNikomwitthaya();
    $html = $this->renderPartial('payin_nikomwitthaya', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'Payin';
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }
}
