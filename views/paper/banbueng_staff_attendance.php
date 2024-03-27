<?php
$dtime = \DateTime::createFromFormat("Y-m-d", date('Y-m-d'));
$timestamp = $dtime->getTimestamp();
$DateTime = Yii::$app->date->date('l j F Y', $timestamp);
$dateTimeParts = explode(' ', $DateTime);
$dayName = $dateTimeParts[0];
$day = $dateTimeParts[1];
$month = $dateTimeParts[2];
$year = $dateTimeParts[3] + 543;

$DateTime1 = Yii::$app->date->date('j M y', $timestamp);
$dateTimeParts1 = explode(' ', $DateTime1);
$dayShort = $dateTimeParts1[0];
$monthShort = $dateTimeParts1[1];
$yearShort = $dateTimeParts1[2] + 43;
?>
<div style="margin-left:15px;margin-right:15px;padding-top:10px;">
<div style="border:1px solid;width:100%;background-color: #CEFFFF;">
<div style="float:left;width:17%;text-align:right;">
<img src="img/banbueng.png" alt="School icon" style="width:60px;height:auto;">
</div>
<div style="float:left;width:73%;text-align:center;margin-top:10px;line-height:30px;font-weight:bold;font-size:18pt;">
<p>สรุปบันทึกการปฏิบัติราชการของข้าราชการครู และ บุคลากร<br/>โรงเรียนบ้านบึง "อุตสาหกรรมนุเคราะห์"</p>
<div style="padding-top:-15px;padding-left:-10px;">
<dl>
<dt style="width:70px;font-weight:bold;padding-left:25px">ประจำวัน</dt>
    <dd style="width:80px;"><?php echo $dayName ?></dd>
<dt style="width:30px;font-weight:bold;padding-left:-15px;padding-right:-3px;">ที่</dt>
    <dd style="width:45px;"><?php echo $day ?></dd>
    <dt style="width:45px;font-weight:bold;padding-left:-10px;">เดือน</dt>
    <dd style="width:95px;"><?php echo $month ?></dd>
    <dt style="width:40px;font-weight:bold;padding-left:-10px;">พ.ศ.</dt>
    <dd style="width:50px;"><?php echo $year ?></dd>
</dl>
</div>
</div>
</div>
<div style="padding-top:10px;">
<div style="padding-top:10px;">
<table class="table table-sm">
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;border: 1px solid;font-size:16pt;background-color: #CEFFFF;" colspan="3">
        ข้าราชการครู
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ข้าราชการครูทั้งหมด
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['totalStaff']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ไปราชการ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['onDutyService']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลาป่วย
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['sickLeave']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลากิจ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['personalLeave']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        มาสาย
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['late']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        อื่นๆ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $teacherCivilServant['other']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-left:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        รวมการมาปฎิบัติราชการ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        <?php echo $teacherCivilServant['totalPresent']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
คน
        </td>
      </tr>
    </table>
    <div style="float:left;width:10%;font-weight:bold;line-height:24px;padding-top:-10px;">
    ไปราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-top:-10px;">
<?php foreach ($teacherCivilServantListName['onDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลาป่วย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($teacherCivilServantListName['sickLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลากิจ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($teacherCivilServantListName['personalLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
มาสาย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($teacherCivilServantListName['late'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
อื่นๆ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($teacherCivilServantListName['other'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ช่วยราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-bottom:10px;">
<?php foreach ($teacherCivilServantListName['helpDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>

    <table class="table table-sm">
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;border: 1px solid;font-size:16pt;background-color: #CEFFFF;" colspan="3">
        ลูกจ้างประจำ
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลูกจ้างประจำทั้งหมด
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['totalStaff']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ไปราชการ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['onDutyService']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลาป่วย
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['sickLeave']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลากิจ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['personalLeave']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        มาสาย
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['late']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        อื่นๆ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $permanentStaff['other']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-left:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        รวมการมาปฎิบัติราชการ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
<?php echo $permanentStaff['totalPresent']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border:0px;border-right:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
คน
</td>
      </tr>
    </table>
    </div>

    <div style="float:left;width:10%;font-weight:bold;line-height:24px;padding-top:-10px;">
    ไปราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-top:-10px;">
<?php foreach ($permanentStaffListName['onDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลาป่วย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($permanentStaffListName['sickLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลากิจ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($permanentStaffListName['personalLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
มาสาย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($permanentStaffListName['late'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
อื่นๆ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($permanentStaffListName['other'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ช่วยราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-bottom:10px;">
<?php foreach ($permanentStaffListName['helpDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>

<pagebreak/>

<div style="padding-top:10px;">
<table class="table table-sm">
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;border: 1px solid;font-size:16pt;background-color: #CEFFFF;" colspan="3">
        ครูอัตราจ้าง
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ครูอัตราจ้างทั้งหมด
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['totalStaff']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ไปราชการ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['onDutyService']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลาป่วย
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['sickLeave']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลากิจ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['personalLeave']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        มาสาย
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['late']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        อื่นๆ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
        <?php echo $contractTeacher['other']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-left:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        รวมการมาปฎิบัติราชการ
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        <?php echo $contractTeacher['totalPresent']?>
        </td>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
คน
        </td>
      </tr>
    </table>

    <div style="float:left;width:10%;font-weight:bold;line-height:24px;padding-top:-10px;">
    ไปราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-top:-10px;">
<?php foreach ($contractTeacherListName['onDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลาป่วย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($contractTeacherListName['sickLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลากิจ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($contractTeacherListName['personalLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
มาสาย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($contractTeacherListName['late'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
อื่นๆ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($contractTeacherListName['other'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ช่วยราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-bottom:10px;">
<?php foreach ($contractTeacherListName['helpDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>

    <table class="table table-sm">
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;border: 1px solid;font-size:16pt;background-color: #CEFFFF;" colspan="3">
        ลูกจ้างชั่วคราว
        </td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลูกจ้างชั่วคราวทั้งหมด
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['totalStaff']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ไปราชการ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['onDutyService']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลาป่วย
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['sickLeave']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        ลากิจ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['personalLeave']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        มาสาย
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['late']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:left;font-size:16pt;border-left:1px solid;padding-left:7px;">
        อื่นๆ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;">
<?php echo $temporaryStaff['other']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-right:1px solid;">
คน
</td>
      </tr>
      <tr>
        <td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-left:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
        รวมการมาปฎิบัติราชการ
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
<?php echo $temporaryStaff['totalPresent']?>
</td>
<td style="line-height:22px;height:25px;font-weight:bold;text-align:center;font-size:16pt;border:0px;border-right:1px solid;border-bottom:1px solid;background-color:#D9D9D9;border-top:1px solid;">
คน
</td>
      </tr>
    </table>
    </div>

    <div style="float:left;width:10%;font-weight:bold;line-height:24px;padding-top:-10px;">
    ไปราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-top:-10px;">
<?php foreach ($temporaryStaffListName['onDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลาป่วย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($temporaryStaffListName['sickLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ลากิจ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($temporaryStaffListName['personalLeave'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
มาสาย:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($temporaryStaffListName['late'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
อื่นๆ:
</div>
<div style="float:left;width:90%;line-height:24px;">
<?php foreach ($temporaryStaffListName['other'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>
<div style="float:left;width:10%;font-weight:bold;line-height:24px;">
ช่วยราชการ:
</div>
<div style="float:left;width:90%;line-height:24px;padding-bottom:10px;">
<?php foreach ($temporaryStaffListName['helpDutyService'] as $index => $list){echo ($index + 1) . "." . $list . '&nbsp;&nbsp;';} ?><br/>
</div>

<div style="float:left;width:50%;text-align:center;font-weight:bold;line-height:24px;padding-top:30px;">
ลงชื่อ...........................................................<br/>
(<?php echo $deputyDirector['User']['title'] . $deputyDirector['User']['firstname'] . '&nbsp;&nbsp;&nbsp;' . $deputyDirector['User']['lastname'] ?>)<br/>
รองผู้อำนวยการกลุ่มบริหารงานบุคคลและงบประมาณ<br/>
<span style="color:blue;">(</span><span style="color:red;"><?php echo $dayShort . '&nbsp;' . $monthShort . '&nbsp;' . $yearShort ?></span><span style="color:blue;">)</span>
</div>
<div style="float:left;width:50%;text-align:center;font-weight:bold;line-height:24px;padding-top:30px;">
ลงชื่อ...........................................................<br/>
(<?php echo $principal['User']['title'] . $principal['User']['firstname'] . '&nbsp;&nbsp;&nbsp;' . $principal['User']['lastname'] ?>)<br/>
ผู้อำนวยการโรงเรียนบ้านบึง "อุตสาหกรรมนุเคราะห์"<br/>
<span style="color:blue;">(</span><span style="color:red;"><?php echo $dayShort . '&nbsp;' . $monthShort . '&nbsp;' . $yearShort ?></span><span style="color:blue;">)</span>
</div>
    </div>