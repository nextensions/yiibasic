<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!--
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
-->
<br/>
<br/>
<div class="row">
<div class="col-lg-4 mb-3">
            <h2>In product</h2>
<?php echo Html::a('พระนารายณ์ ใบมอบตัว', ['/paper/profile_phanarai'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4265">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('ไตรมิตร ใบมอบตัว', ['/paper/profile_traimit'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4248">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('พุทไธสง ปก ปพ.5', ['/paper/putthaisong_transcript5'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4264">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('นิคม บัตรประจำตัวผู้เข้าสอบ', ['/paper/examidcard'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4294">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('จินดาพร แก้ไขรายงานการรับเงิน', ['/report/receipt'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4209">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('นิคมวิทยา ทะเบียนประวัตินักเรียนรายบุคคล', ['/paper/nikom_print_profile'], ['class' => 'btn btn-success']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4406">Link Tree &raquo;</a>
</div>
    <div class="col-lg-4 mb-3">
        <h2>In pull request</h2>
        <?php echo Html::a('บ้านบึง สรุปรายงานขาด ลา มาสายบุคลากร', ['/paper/banbueng_staff_attendance'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4369">Link Tree &raquo;</a>
<br/><br/>
            <?php echo Html::a('แบบเยี่ยมบ้านบดิน (แบบบันทึกเยี่ยมบ้าน)', ['/paper/visit_bodin'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4342">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('แบบเยี่ยมบ้านบดิน (แบบสรุปเยี่ยมบ้าน)', ['/paper/visit_bodin_summary'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4342">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('แบบเยี่ยมบ้าน ศรียานุสร', ['/paper/visit_siyanuson'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4348">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('พุทไธสง คะแนน ปพ.5 ตั้ง margin', ['/paper/putthaisong_transcript_eva'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4351">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('พุทไธสง เข้าเรียน ปพ.5 ตั้ง margin', ['/paper/putthaisong_transcript_attendance'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4351">Link Tree &raquo;</a>
<br/><br/>
<?php echo Html::a('Image cropper', ['/image/imagecrop'], ['class' => 'btn btn-warning']); ?>&nbsp;
<a class="btn btn-outline-secondary" href="https://t.nextschool.io/project/nextschool/issue/4050">Link Tree &raquo;</a>
</div>
</div>


