<?php
$totalStudents = $dataTranscript['total_student'];// Assuming there are no students not allowed for exam for now

// Calculate percentages



if ($dataTranscript['student_present_exam'] == 0) {
    $presentExam = "";
} else {
    $presentExam = $dataTranscript['student_present_exam'];
}

if ($dataTranscript['student_absent_exam'] == 0) {
    $absentExam = "";
} else {
    $absentExam = $dataTranscript['student_absent_exam'];
}

if ($dataTranscript['student_not_allowed_exam'] == 0) {
    $notAllowedExam = "";
} else {
    $notAllowedExam = $dataTranscript['student_not_allowed_exam'];
}

if ($dataTranscript['student_present_exam'] == 0) {
    $presentExam_percentage = "";
} else {
    $presentExam_percentage = ($dataTranscript['student_present_exam'] / $totalStudents) * 100;
}

if ($dataTranscript['student_absent_exam'] == 0) {
    $absentExam_percentage = "";
} else {
    $absentExam_percentage = ($dataTranscript['student_absent_exam'] / $totalStudents) * 100;
}

if ($dataTranscript['student_not_allowed_exam'] == 0) {
    $notAllowedExam_percentage = "";
} else {
    $notAllowedExam_percentage = ($dataTranscript['student_not_allowed_exam'] / $totalStudents) * 100;
}

if ($dataTranscript['student_grade_4'] == 0) {
    $student_grade_4_output = "";
} else {
    $student_grade_4_output = $dataTranscript['student_grade_4'];
}

if ($dataTranscript['student_grade_3.5'] == 0) {
    $student_grade_3_5_output = "";
} else {
    $student_grade_3_5_output = $dataTranscript['student_grade_3.5'];
}

if ($dataTranscript['student_grade_3'] == 0) {
    $student_grade_3_output = "";
} else {
    $student_grade_3_output = $dataTranscript['student_grade_3'];
}

if ($dataTranscript['student_grade_2.5'] == 0) {
    $student_grade_2_5_output = "";
} else {
    $student_grade_2_5_output = $dataTranscript['student_grade_2.5'];
}

if ($dataTranscript['student_grade_2'] == 0) {
    $student_grade_2_output = "";
} else {
    $student_grade_2_output = $dataTranscript['student_grade_2'];
}

if ($dataTranscript['student_grade_1.5'] == 0) {
    $student_grade_1_5_output = "";
} else {
    $student_grade_1_5_output = $dataTranscript['student_grade_1.5'];
}

if ($dataTranscript['student_grade_1'] == 0) {
    $student_grade_1_output = "";
} else {
    $student_grade_1_output = $dataTranscript['student_grade_1'];
}

if ($dataTranscript['student_grade_0.5'] == 0) {
    $student_grade_0_5_output = "";
} else {
    $student_grade_0_5_output = $dataTranscript['student_grade_0.5'];
}

if ($dataTranscript['student_grade_0'] == 0) {
    $student_grade_0_output = "";
} else {
    $student_grade_0_output = $dataTranscript['student_grade_0'];
}

if ($dataTranscript['student_grade_4'] == 0) {
    $student_grade_4_percentage = "";
} else {
    $student_grade_4_percentage = ($dataTranscript['student_grade_4'] / $totalStudents) * 100;
    $student_grade_4_percentage = number_format($student_grade_4_percentage, 0);
}

if ($dataTranscript['student_grade_3.5'] == 0) {
    $student_grade_3_5_percentage = "";
} else {
    $student_grade_3_5_percentage = ($dataTranscript['student_grade_3.5'] / $totalStudents) * 100;
    $student_grade_3_5_percentage = number_format($student_grade_3_5_percentage, 0);
}

if ($dataTranscript['student_grade_3'] == 0) {
    $student_grade_3_percentage = "";
} else {
    $student_grade_3_percentage = ($dataTranscript['student_grade_3'] / $totalStudents) * 100;
    $student_grade_3_percentage = number_format($student_grade_3_percentage, 0);
    
}

if ($dataTranscript['student_grade_2.5'] == 0) {
    $student_grade_2_5_percentage = "";
} else {
    $student_grade_2_5_percentage = ($dataTranscript['student_grade_2.5'] / $totalStudents) * 100;
    $student_grade_2_5_percentage = number_format($student_grade_2_5_percentage, 0);
}

if ($dataTranscript['student_grade_2'] == 0) {
    $student_grade_2_percentage = "";
} else {
    $student_grade_2_percentage = ($dataTranscript['student_grade_2'] / $totalStudents) * 100;
    $student_grade_2_percentage = number_format($student_grade_2_percentage, 0);
}

if ($dataTranscript['student_grade_1.5'] == 0) {
    $student_grade_1_5_percentage = "";
} else {
    $student_grade_1_5_percentage = ($dataTranscript['student_grade_1.5'] / $totalStudents) * 100;
    $student_grade_1_5_percentage = number_format($student_grade_1_5_percentage, 0);
}

if ($dataTranscript['student_grade_1'] == 0) {
    $student_grade_1_percentage = "";
} else {
    $student_grade_1_percentage = ($dataTranscript['student_grade_1'] / $totalStudents) * 100;
    $student_grade_1_percentage = number_format($student_grade_1_percentage, 0);
}

if ($dataTranscript['student_grade_0.5'] == 0) {
    $student_grade_0_5_percentage = "";
} else {
    $student_grade_0_5_percentage = ($dataTranscript['student_grade_0.5'] / $totalStudents) * 100;
    $student_grade_0_5_percentage = number_format($student_grade_0_5_percentage, 0);
}

if ($dataTranscript['student_grade_0'] == 0) {
    $student_grade_0_percentage = "";
} else {
    $student_grade_0_percentage = ($dataTranscript['student_grade_0'] / $totalStudents) * 100;
    $student_grade_0_percentage = number_format($student_grade_0_percentage, 0);
}

$totalGradePoints = ($dataTranscript['student_grade_4'] * 4) +
                   ($dataTranscript['student_grade_3.5'] * 3.5) +
                   ($dataTranscript['student_grade_3'] * 3) +
                   ($dataTranscript['student_grade_2.5'] * 2.5) +
                   ($dataTranscript['student_grade_2'] * 2) +
                   ($dataTranscript['student_grade_1.5'] * 1.5) +
                   ($dataTranscript['student_grade_0.5'] * 0.5) +
                   ($dataTranscript['student_grade_0'] * 0);

                   $totalStudentsWithGrades = $dataTranscript['student_grade_4'] +
                           $dataTranscript['student_grade_3.5'] +
                           $dataTranscript['student_grade_3'] +
                           $dataTranscript['student_grade_2.5'] +
                           $dataTranscript['student_grade_2'] +
                           $dataTranscript['student_grade_1.5'] +
                           $dataTranscript['student_grade_0.5'] +
                           $dataTranscript['student_grade_0'];

                           if ($totalStudentsWithGrades != 0) {
                            $averageGrade = $totalGradePoints / $totalStudentsWithGrades;
                        } else {
                            $averageGrade = 0;
                        }
                        
?>
<div style="font-size:20px;padding-top:50px">
<p style="font-size:30px;font-weight:bold;text-align:center;">แบบรายงานผลการพัฒนาคุณภาพผู้เรียน (ปพ.5)<p>
<p style="text-align:center;margin-top:10px">โรงเรียนพุทไธสง อำเภอพุทไธสง จังหวัดบุรีรัมย์<p>

<div style="margin-left:30px">
    <dl>
<dt style="width:130px;">ระดับชั้นมัธยมศึกษาปีที่</dt>
        <dd style="width:50px;"><?php echo $dataTranscript['grade'] ?></dd>
        <dt style="width:45px;">จำนวน</dt>
        <dd style="width:50px;"><?php echo $dataTranscript['total_student'] ?></dd>
        <dt style="width:25px;">คน</dt>
        <dt style="width:100px;">ประจำภาคเรียนที่</dt>
        <dd style="width:40px;"><?php echo $dataTranscript['semester'] ?></dd>
        <dt style="width:65px;">ปีการศึกษา</dt>
        <dd style="width:60px;"><?php echo $dataTranscript['year'] ?></dd>
        </dl>
</div>
<div style="margin-left:0px;margin-right:-20px">
    <dl>
<dt style="width:60px;">รหัสวิชา : </dt>
        <dd style="width:100px;"><?php echo $dataTranscript['course_code'] ?></dd>
        <dt style="width:25px;">วิชา</dt>
        <dd style="width:180px;"><?php echo $dataTranscript['subject_name'] ?></dd>
        <dt style="width:110px;">กลุ่มสาระการเรียนรู้</dt>
        <dd style="width:180px;"><?php echo $dataTranscript['subject_group'] ?></dd>
        </dl>
</div>
<div style="margin-left:100px;">
    <dl>
<dt style="width:120px;">จำนวนหน่วยการเรียน</dt>
        <dd style="width:40px;"><?php echo $dataTranscript['credit'] ?></dd>
        <dt style="width:105px;">หน่วยกิต</dt>
        <dt style="width:55px;">เวลาเรียน</dt>
        <dd style="width:45px;"><?php echo $dataTranscript['study_time'] ?></dd>
        <dt style="width:80px;">ชั่วโมง/สัปดาห์</dt>
        </dl>
</div>
<div style="margin-left:40px;margin-top:10px;">
<p>ตารางแสดงผลสัมฤทธิ์ทางการเรียน</p>
<div style="margin-left:10px;margin-right:-20px;">
<table class="table table-bordered table-sm table-collapse" style="border: 1px solid">
                    <thead>
                        <tr>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;vertical-align: middle;padding-bottom: 0px;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                                ระดับผลการเรียน
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            4
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            3.5
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            3
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            2.5
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            2
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            1.5
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            1
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            0.5
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            0
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            ร
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            มส
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            รวม
                            </th>
                            <th style="font-weight:bold;width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;background-color: white;border: 1px solid;text-align: center;height:60px;font-weight:normal;">
                            ผลการเรียน<br />เฉลี่ย
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            จำนวนคน
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_4_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_3_5_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_3_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_2_5_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_2_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_1_5_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_1_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_0_5_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_0_output ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $absentExam ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $notAllowedExam ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $presentExam ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $averageGrade ?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            คิดเป็นร้อยละ
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $student_grade_4_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_3_5_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_3_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_2_5_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_2_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_1_5_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_1_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_0_5_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                <?php echo $student_grade_0_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $absentExam_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            <?php echo $notAllowedExam_percentage ?>
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            100 
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
<p>ผลการประเมิณ การอ่าน คิด วิเคราะห์และเขียน</p>
<div style="margin-left:10px;margin-right:-20px;">
<table class="table table-bordered table-sm table-collapse" style="border: 1px solid">
                    <thead>
                        <tr>
                            <th colspan="5" style="font-weight:bold;width: 30px;padding-top: -15px;vertical-align: middle;padding-bottom: 0px;background-color: white;border: 1px solid;text-align: center;height:45px;font-weight:normal;">
                                ผลการประเมิณ
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            จำนวนนักเรียนทั้งหมด
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            ดีเยี่ยม (3)
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            ดี (2)
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            ผ่านเกณฑ์ (1)
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                            ไม่ผ่านเกณฑ์ (0)
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">

                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                
                            </td>
                            <td style="width: 30px;padding-top: -15px;padding-bottom: 0px;vertical-align: middle;text-align: center;border: 1px solid;height:45px">
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <p>ขอรับรองว่าได้ตรวจสอบข้อมูลข้างต้นแล้ว เป็นข้อมูลที่ถูกต้องตามความเป็นจริงทุกประการ</p>
        <div style="padding-top:10px;margin-left:80px;text-align:center;line-height:30px">
        <dl>
<dt style="width:35px;margin-left:150px">ลงชื่อ</dt>
        <dd style="width:180px;"><?php echo $dataTranscript['teacher'] ?></dd>
        <dt style="width:50px;">ครูผู้สอน</dt>
</dl>
        <p style="padding-top:10px;margin-left:-25px;line-height:10px">(<?php echo $dataTranscript['teacher'] ?>)<p>
        <p style="line-height:10px">วันที่ ......... เดือน ......................... พ.ศ. ................<p>
        </div>
        <p>เรียนเสนอเพื่อพิจารณาอนุมัติผลการเรียน</p>
        <div style="padding-top:10px;margin-left:220px;line-height:30px">
        <p style="line-height:10px;">ลงชื่อ ......................................................... หัวหน้ากลุ่มสาระการเรียนรู้<p>
        <p style="margin-left:30px;line-height:10px">(.........................................................)<p>
        <p style="line-height:10px;margin-left:0px;">ลงชื่อ ......................................................... หัวหน้างานวัดผลและประเมิณผล<p>
        <p style="margin-left:70px;line-height:10px">(<?php echo $dataTranscript['responsible_teacher'] ?>)<p>
        <p style="line-height:10px;margin-left:0px;">ลงชื่อ ......................................................... รองผู้อำนวยการกลุ่มบริหารวิชาการ<p>
        <p style="margin-left:70px;line-height:10px">(<?php echo $dataTranscript['deputy_director'] ?>)<p>
        <p style="line-height:10px;margin-left:-155px;"><span style="font-family: fontawesome; font-size:120%;">&#9723;</span>&nbsp;&nbsp;&nbsp;&nbsp;อนุมัติ&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: fontawesome; font-size:120%;">&#9723;</span>&nbsp;&nbsp;&nbsp;&nbsp;ไม่อนุมัติ&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ ......................................................... ผู้อำนวยการโรงเรียนพุทไธสง<p>
        <p style="margin-left:70px;line-height:10px">(<?php echo $dataTranscript['director'] ?>)<p>
        <p style="line-height:10px;margin-left:5px;">วันที่ ......... เดือน ......................... พ.ศ. ................<p>
        </div>
</div>
</div>

