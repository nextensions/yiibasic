<?php
$timestamp = time();
Yii::$app->setTimeZone('Asia/Bangkok');
Yii::$app->formatter->locale = 'th-TH';
$buddhistYear = substr(Yii::$app->formatter->asDate($timestamp, 'yy') + 543, -2);
$formattedDate = Yii::$app->formatter->asDate($timestamp, 'd MMM');
$formattedDate .= " {$buddhistYear}";
$formattedTime = Yii::$app->formatter->asTime($timestamp, 'HH.mm');
$formattedTime .= ' น.';
$formattedDateTime = $formattedDate . ' ' . $formattedTime;

$monthNamesThai = array(
    "January" => "มกราคม",
    "February" => "กุมภาพันธ์",
    "March" => "มีนาคม",
    "April" => "เมษายน",
    "May" => "พฤษภาคม",
    "June" => "มิถุนายน",
    "July" => "กรกฎาคม",
    "August" => "สิงหาคม",
    "September" => "กันยายน",
    "October" => "ตุลาคม",
    "November" => "พฤศจิกายน",
    "December" => "ธันวาคม"
);

$examDatetime = $exam['datetime'];
$formattedExamDatetime = date("d", strtotime($examDatetime)) . " " .
$monthNamesThai[date("F", strtotime($examDatetime))] . " " .
(date("Y", strtotime($examDatetime)) + 543) . " " .
date("h.i", strtotime($examDatetime)) . " น.";
?>
<div style="width:100%;padding-top:30px">
<div style="margin-right:-3px;width:8.8cm;height:6cm;border: 3px solid;border-color: #737E9A;border-right-style: dotted;float:left;">
<p style="font-size:22px;font-weight:bold;margin-top:10px;margin-left:10px">บัตรประจำตัวผู้เข้าห้องสอบ</p>
<div class="col-1" style="margin-top:-5px;margin-left:10px;float:left;width:37%;">
<div style="width:3cm;height:4cm;border: 2px solid;border-color: #737E9A;">
<img src="<?php echo $registrant['image']?>" alt="School icon" style="width:3cm;height:4cm;margin-top:0px;">
</div>
</div>

<div class="col-1" style="margin-top:5px;margin-left:10px;float:left;width:55%;">
<p style="font-size:18px;font-weight:bold;margin-top:10px;line-height:20px">ชื่อ <?php echo $profile['fullname']?><br />
เลขประจำตัวประชาชน<br />
<?php echo $profile['personal_id']?><br />
<?php echo $old_school['name']?><br />
จังหวัด <?php echo $old_school['province']?>
</p>
  </div>
  <p style="font-size:14px;margin-top:5px;margin-left:10px;">
  วันที่จัดทำเอกสาร: <?php echo $formattedDateTime?>
  </p>
  </div>
  <div style="margin-left:-3px;width:8.8cm;height:6cm;border: 3px solid;border-color: #737E9A;border-left:0px solid;float:left;">
  <p style="font-size:18px;font-weight:bold;margin-top:20px;margin-left:20px;color: #737E9A;">เลขที่นั่งสอบ <b style="font-size:22px"><?php echo $exam['seat_name']?></b>
</p>
    <div style="margin-left:20px;margin-top:20px">
    <dl>
  <dt style="width:45px;line-height:20px">ระดับชั้น</dt>
  <dd style="width:215px;line-height:20px">มัธยมศึกษาปีที่ <?php echo $profile['grade'] . '&nbsp;ปีการศึกษา&nbsp;' . $profile['year'] ?></dd>
        <dt style="width:120px;line-height:20px">ประเภท / แผนการเรียน</dt>
        <dd style="width:140px;line-height:20px"><?php echo $targets[0] ?></dd>
        <dt style="width:70px;line-height:20px">วันเวลาที่สอบ</dt>
        <dd style="width:190px;line-height:20px"><?php echo $formattedExamDatetime ?></dd>
        <dt style="width:305px;line-height:20px">เวลา 8.00 - 12.00 น.</dt>
        <dt style="width:305px;line-height:20px">สนามสอบ โรงเรียนนิคมวิทยา</dt>
        <dt style="width:35px;line-height:20px">อาคาร</dt>
        <dd style="width:45px;line-height:20px"><?php echo $exam['location_name'] ?></dd>
        <dt style="width:24px;line-height:20px">ชั้น</dt>
        <dd style="width:60px;line-height:20px">ม. <?php echo $profile['grade'] ?></dd>
        <dt style="width:25px;line-height:20px">ห้อง</dt>
        <dd style="width:51px;line-height:20px"><?php echo $profile['classroom'] ?></dd>
</dl>
</div>
</div>
</div>