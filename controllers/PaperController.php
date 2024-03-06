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
        'familyStatus' => 'N/A',
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
            0 => 'แผนการเรียนภาษาเพื่อการสื่อสารและการประกอบธุรกิจ (อังกฤษ-ธุรกิจ)',
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
            'image' => '',
        ],
        'exam' => [
            'datetime' => '2024-02-18 09:00:00',
            'seat_name' => 'F6',
            'location_name' => '232',
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

  private function dummyDataTranscript()
  {
    return [
      'missing' => [
        'credit' => '1.00',
        'study_hour' => '2',
        'subject_areas' => 'ไม่ได้ระบุ',
        'subject' => 'ภาษาไทยพื้นฐาน',
        'course_code' => 'ส23103',
        'grade' => '6/6'
      ],
    'model' => [
      'id' => 257098,
      'name' => 'ม.6/6',
      'course_id' => 134639,
      'create_id' => 14867,
      'created_at' => '2023-11-23 11:13:20.427502',
      'updated_at' => '2023-11-23 11:13:20.427502',
      'deleted_at' => null,
      'create_source_type' => null,
      'create_source_id' => null,
    ],
  'students' => [
      0 => [
          'id' => 450109,
          'title' => '3',
          'code' => '24219',
          'firstname' => 'ชนาธิป',
          'lastname' => 'มามาก',
      ],
      1 => [
          'id' => 450110,
          'title' => '3',
          'code' => '24267',
          'firstname' => 'ติณณภพ',
          'lastname' => 'อันดี',
      ],
      2 => [
          'id' => 450111,
          'title' => '3',
          'code' => '24274',
          'firstname' => 'ศิวกร',
          'lastname' => 'หอมเย็น',
      ],
      3 => [
          'id' => 450112,
          'title' => '3',
          'code' => '24313',
          'firstname' => 'ภาณุวิชญ์',
          'lastname' => 'จิตรไธสง',
      ],
      4 => [
          'id' => 450113,
          'title' => '4',
          'code' => '24323',
          'firstname' => 'จิราชา',
          'lastname' => 'ปลื้มพันธ์',
      ],
      5 => [
          'id' => 450114,
          'title' => '4',
          'code' => '24329',
          'firstname' => 'ปณิชา',
          'lastname' => 'ภาศรี',
      ],
      6 => [
          'id' => 450115,
          'title' => '3',
          'code' => '24352',
          'firstname' => 'ชนพล',
          'lastname' => 'สังสีแก้ว'
      ],
      7 => [
          'id' => 450116,
          'title' => '3',
          'code' => '24354',
          'firstname' => 'ชิษณุพงศ์',
          'lastname' => 'หนองคาย',
      ],
      8 => [
          'id' => 450117,
          'title' => '3',
          'code' => '24357',
          'firstname' => 'ปัณณวัฒน์',
          'lastname' => 'ด่านแก้ว',
      ],
      9 => [
          'id' => 450118,
          'title' => '3',
          'code' => '24361',
          'firstname' => 'มงคล',
          'lastname' => 'สุริวงศ์',
      ],
      10 => [
          'id' => 450119,
          'title' => '3',
          'code' => '24362',
          'firstname' => 'วสันต์',
          'lastname' => 'แสนจันทร์',
      ],
      11 => [
          'id' => 450120,
          'title' => '3',
          'code' => '24364',
          'firstname' => 'ศรสิทธิ์',
          'lastname' => 'แอมไธสง',
      ],
      12 => [
          'id' => 450121,
          'title' => '3',
          'code' => '24367',
          'firstname' => 'อาคีราภ์',
          'lastname' => 'คาระมาตย์',
      ],
      13 => [
          'id' => 450122,
          'title' => '4',
          'code' => '24388',
          'firstname' => 'สุภา',
          'lastname' => 'พลจันทึก',
      ],
      14 => [
          'id' => 450123,
          'title' => '3',
          'code' => '24405',
          'firstname' => 'พันธวัช',
          'lastname' => 'สนไธสง',
      ],
      15 => [
          'id' => 450125,
          'title' => '4',
          'code' => '24427',
          'firstname' => 'แพรวนภา',
          'lastname' => 'ยอดรัก',
      ],
      16 => [
          'id' => 450126,
          'title' => '4',
          'code' => '24466',
          'firstname' => 'นิรชา',
          'lastname' => 'วงศ์คช',
      ],
      17 => [
          'id' => 450127,
          'title' => '4',
          'code' => '24472',
          'firstname' => 'ภัครวดี',
          'lastname' => 'เจิมแหล่',
      ],
      18 => [
          'id' => 450129,
          'title' => '4',
          'code' => '24557',
          'firstname' => 'ณัฎฐธิดา',
          'lastname' => 'กัณหา',
      ],
      19 => [
          'id' => 450130,
          'title' => '4',
          'code' => '24566',
          'firstname' => 'ภรปภัช',
          'lastname' => 'สารบรรณ์',
      ],
      20 => [
          'id' => 450131,
          'title' => '4',
          'code' => '24595',
          'firstname' => 'กชกร',
          'lastname' => 'ชาลีวรรณ',
      ],
      21 => [
          'id' => 450132,
          'title' => '4',
          'code' => '24597',
          'firstname' => 'กฤตพร',
          'lastname' => 'เวฬุวันใน',
      ],
      22 => [
          'id' => 450133,
          'title' => '4',
          'code' => '24606',
          'firstname' => 'เมธาพร',
          'lastname' => 'ไพบูลย์',
      ],
      23 => [
          'id' => 450134,
          'title' => '4',
          'code' => '24643',
          'firstname' => 'ปิยนุช',
          'lastname' => 'เนียดไธสง',
      ],
      24 => [
          'id' => 450135,
          'title' => '4',
          'code' => '24682',
          'firstname' => 'จิรัศยา',
          'lastname' => 'จงเพียร',
      ],
      25 => [
          'id' => 450136,
          'title' => '4',
          'code' => '24685',
          'firstname' => 'นิรมล',
          'lastname' => 'สิบพุด',
      ],
      26 => [
          'id' => 450137,
          'title' => '4',
          'code' => '24687',
          'firstname' => 'ประกายวรรณ',
          'lastname' => 'ลครพล',
      ],
      27 => [
          'id' => 450138,
          'title' => '4',
          'code' => '24688',
          'firstname' => 'ปรินัณดิ์',
          'lastname' => 'เวหน',
      ],
      28 => [
          'id' => 450139,
          'title' => '4',
          'code' => '24691',
          'firstname' => 'เสาวลักษณ์',
          'lastname' => 'แสงแก้ว',
      ],
      29 => [
          'id' => 450140,
          'title' => '4',
          'code' => '24715',
          'firstname' => 'พัชรีพร',
          'lastname' => 'พิมรัมย์',
      ],
      30 => [
          'id' => 450141,
          'title' => '3',
          'code' => '24832',
          'firstname' => 'ถิรวัฒน์',
          'lastname' => 'เยี่ยมเสมอ',
      ],
      31 => [
          'id' => 450142,
          'title' => '3',
          'code' => '25403',
          'firstname' => 'ชนะทรัพย์',
          'lastname' => 'วารีย์',
      ],
      32 => [
          'id' => 450143,
          'title' => '3',
          'code' => '26668',
          'firstname' => 'รัฐธรรมนูญ',
          'lastname' => 'บัวงาม',
      ],
      33 => [
          'id' => 450144,
          'title' => '4',
          'code' => '26670',
          'firstname' => 'ปนัดดา',
          'lastname' => 'วันสุวรรณ',
      ],
      34 => [
          'id' => 450145,
          'title' => '4',
          'code' => '26671',
          'firstname' => 'อนัญญา',
          'lastname' => 'รู้ทั่วรัมย์',
      ],
      35 => [
          'id' => 450146,
          'title' => '3',
          'code' => '26783',
          'firstname' => 'ทศธร',
          'lastname' => 'ขจีรัมย์',
      ],
  ],
  'ranges' => [
      0 => [
          'name' => '4',
          'range_max' => 100,
          'range_min' => 80,
          'count' => 7,
          'ratio' => 19.44,
      ],
      1 => [
          'name' => '3.5',
          'range_max' => 79.99999,
          'range_min' => 75,
          'count' => 7,
          'ratio' => 19.44,
      ],
      2 => [
          'name' => '3',
          'range_max' => 74.99,
          'range_min' => 70,
          'count' => 7,
          'ratio' => 19.44,
      ],
      3 => [
          'name' => '2.5',
          'range_max' => 69.99,
          'range_min' => 65,
          'count' => 4,
          'ratio' => 11.11,
      ],
      4 => [
          'name' => '2',
          'range_max' => 64.99,
          'range_min' => 60,
          'count' => 3,
          'ratio' => 8.33,
      ],
      5 => [
          'name' => '1.5',
          'range_max' => 59.99,
          'range_min' => 55,
          'count' => 0,
          'ratio' => 0,
      ],
      6 => [
          'name' => '1',
          'range_max' => 54.99,
          'range_min' => 50,
          'count' => 0,
          'ratio' => 0,
      ],
      7 => [
          'name' => '0',
          'range_max' => 49.99,
          'range_min' => 0,
          'count' => 0,
          'ratio' => 0,
      ],
      8 => [
          'name' => 'ร',
          'range_max' => 100,
          'range_min' => 0,
          'count' => 0,
          'ratio' => 0,
      ],
      9 => [
          'name' => 'มส',
          'range_max' => 100,
          'range_min' => 0,
          'count' => 7,
          'ratio' => 22.22,
      ],
      10 => [
          'name' => 'ขส.',
          'range_max' => 100,
          'range_min' => 0,
          'count' => 0,
          'ratio' => 0,
      ],
      11 => [
          'name' => 'ขร.',
          'range_max' => 100,
          'range_min' => 0,
          'count' => 0,
          'ratio' => 0,
      ],
      12 => [
          'name' => 'ท.',
          'range_max' => 100,
          'range_min' => 0,
          'count' => 0,
          'ratio' => 0,
      ],
  ],
  'totalStudent' => 36,
  'academicYear' => [
      'id' => 9,
      'name' => '2566',
  ],
  'semester' => [
      'id' => 1251,
      'academic_id' => 9,
      'school_id' => 268,
      'start_date' => '2023-10-30',
      'end_date' => '2024-03-08',
      'created_at' => '2023-11-06 18:21:22.682898',
      'updated_at' => '2024-02-14 12:34:45.606355',
      'name' => 'ภาคเรียนที่ 2',
      'grade_sync_type' => null,
      'grade_sync_param' => null,
      'grade_sync_updated_at' => null,
      'is_active' => true,
      'study_start_date' => '2023-10-30',
      'study_end_date' => '2024-03-08',
  ],
  'teachName' => 'นางอุไรรัตน์ ศรีวงษ์ชัย',
  'teacherClass' => [
      0 => [
          'fullname' => 'นายธีระชัย เถลิงลาภ',
      ],
      1 => [
          'fullname' => 'นายพรพล เทพไทยอำนวย',
      ],
      ],
  'xBar' => 0,
  'logoImage' => '/asset',
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

  public function actionPutthaisong_transcript5()
  {
    $data = $this->dummyDataTranscript();
    $html = $this->renderPartial('putthaisong_transcript5', [...$data]);

    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8');

    $fileName =   'ใบ_ปพ.5';
    $extraCssPath = Yii::getAlias('@frontend') . '/web/css/pdf/admission/base.css';
    $additionals = [];

    $this->outputPDF($fileName, $html, $extraCssPath, [
      'default_font_size' => 10,
    ], $additionals);
  }
}
