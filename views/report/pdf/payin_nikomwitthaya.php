<body>
    <div class="row" style="margin-left: 0px;margin-right: 0px;font-size: 16px;">
        <div class="row" style="margin-left: 0px;margin-right: 0px">
            <div class="col-md-1" style="float:left; width: 10%">
                <img src="img/nikomwitthaya.png" alt="School icon" width="auto" height="80" />
            </div>
            <div class="col-md-1">
                <h5 style="line-height: 22px">
                    <b>ใบแจ้งการชำระเงินเพื่อบำรุงการศึกษา<br />
                        โรงเรียนนิคมวิทยา</b>
                </h5>
            </div>
            <hr style="height: 2px;border-width: 0;margin-top: -7px;margin-bottom: 5px;" />
            <b>
                    ภาคเรียนที่ <?php echo $data['semester']?>
                    ปีการศึกษา <?php echo $data['year'] ?></b>
            <div class="col-md-3 offset-md-3" style="float: right;width: 20%;padding: 0px;font-weight: bold;text-align: center;border-width: 1px;border-style: solid; margin-top:-70px;">
                ส่วนที่ 1 (สำหรับนักเรียน)
                </div>
        </div>
        
        <div class="row" style="margin-left: 0px; margin-right: 0px; margin-top: 10px">
            <div class="col-md-1" style="margin-left: 0px;margin-right: 0px;margin-top: 10px;float: left;width: 25%;">
                ชื่อ-นามสกุลนักเรียน<br />
                รหัสประจำตัวนักเรียน<br />
                ชั้นห้องเรียน
            </div>
            <div>
                <b>
                    <?php echo $data['name']?><br />
                    <?php echo $data['studentid']?><br />
                    <?php echo $data['classroom']?><br /></b>
            </div>

            <div class="row" style="margin-top: 5px;margin-left: 0px;margin-right: 0px;">
                <table class="table table-bordered table-sm table-collapse" style="border: 1px solid">
                    <thead>
                        <tr>
                            <th style="width: 450px;padding-top: 0px;vertical-align: middle;padding-bottom: 0px;background-color: #2dfeff;border: 1px solid;">
                                <b>รายการ</b>
                            </th>
                            <th style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;background-color: #2dfeff;border: 1px solid;">
                                <b>จำนวนเงิน</b>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                1. ค่าบำรุงการศึกษา
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                <?php echo $data['educational_fees1']?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                2. ค่าประกันอุบัติเหตุ
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                <?php echo $data['educational_fees2']?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                3. ค่าระบบสารสนเทศออนไลน์และระบบโรงอาหาร
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                <?php echo $data['educational_fees3']?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                4. ค่าปฐมนิเทศและกิจกรรมเสริมทักษะวิชาการทักษะชีวิต
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                <?php echo $data['educational_fees4']?>
                            </td>
                        </tr>
                        <tr>
                        <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                5. ค่าสมาชิกสมาคมผู้ปกครอง (ม.1 ชำระทุกคน)
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                <?php echo $data['educational_fees5']?>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 450px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;border: 1px solid;text-align: center;">
                                <b>( <?php echo $data['total_text']?> )</b>
                            </td>
                            <td style="width: 150px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;background-color: #2dfeff;border: 1px solid;">
                                <b><?php echo $data['total']?></b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-1" style="width: 70% ;float: left; margin-top: -10px">
                <h3>หมายเหตุ</h3>
                <p>
                    ช่องทางการชำระเงิน ดังนี้<br />
                    1. สาขาธนาคารกรุงไทยทั่วประเทศ ในอัตรา 10 บาท<br />
                    2. ATM ธนาคารกรุงไทย ในอัตรา 5 บาท<br />
                    - กรณีมีเหตุขัดข้องไม่สามารถชำระเงินได้ กรุณาติดต่อ Call Center บมจ. ธนาคารกรุงไทย โทร 0-2111-1111<br />
                    - หากเกินกำหนดวันชำระเงิน ให้นักเรียนติดต่อที่ฝ่ายการเงินของโรงเรียน
                </p>
            </div>
            <div class="col-1" style="width: 30% ;float: right">
                <table class="table table-bordered table-sm table-collapse">
                    <tr>
                        <th style="line-height: 1.8em;border: 1px solid;">
                            <h3>สำหรับเจ้าหน้าที่ธนาคาร</h3>  
                            (ลงชื่อ)........................................................ผู้รับเงิน<br />
                            วันที่...........................................................<br />
                            <p style="font-size: 16px">
                                ลงลายมือชื่อและประทับตรา
                            </p>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <hr style="height: 2px; border-width: 0; margin-top: -5px; margin-bottom: 5px" />
        <p style="float: right;width: 22%;padding: 5px;font-weight: bold;margin-bottom: -50px;margin-top: 10px;text-align: center;border-width: 1px;border-style: solid;">
            ส่วนที่ 2 (สำหรับธนาคาร)
        </p>
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <div class="col-1" style="width:20%; float: left; padding-right:-30px;">
                <img src="img/nikomwitthaya.png" alt="School icon" width="auto" height="80" />
                <img src="img/Krungthai.png" alt="Bank icon" width="auto" height="60" style="padding-left: 10px; padding-top: 10px" />
            </div>
            <div class="col-1" style="padding-top: 0px; margin-left: -15px;float: left">
                <p style="font-size: 18px">
                    <b>แบบฟอร์มชำระเงินเพื่อบำรุงการศึกษา (Pay-in Slip)<br />
                        โรงเรียนนิคมวิทยา</b>
                    </p>
                <table class="table table-bordered table-sm table-collapse">
                    <thead>
                        <tr>
                            <th style="width: 200px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;border: 1px solid;">
                                ธนาคารกรุงไทย จำกัด (มหาชน)
                            </th>
                            <th colspan="2" style="width: 50px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;border-right: 0px;">
                                Product Code :<br />
                                ชื่อ-นามสกุลนักเรียน :<br />
                                รหัสประจำตัวนักเรียน (Ref.1) :<br />
                                ชั้นห้องเรียน (Ref.2) :
                            </th>
                            <th style="width: 200px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;border-left: 0px;">
                                <?php echo $data['productcode'] ?><br />
                                <?php echo $data['name'] ?><br />
                                <?php echo $data['studentid'] ?><br />
                                <?php echo $data['classroom_no'] ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 200px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                จำนวนเงิน (ตัวเลข)
                            </td>
                            <td colspan="3" style="width: 300px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                <b><?php echo $data['total']?></b>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;">
                                จำนวนเงิน (ตัวอักษร)
                            </td>
                            <td colspan="3" style="width: 300px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: left;border: 1px solid;">
                                <b><?php echo $data['total_text']?></b>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 200px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;height: 35px;">
                                สำหรับเจ้าหน้าที่ธนาคาร
                            </td>
                            <td colspan="3" style="width: 300px;padding-top: 0px;padding-bottom: 0px;vertical-align: middle;text-align: right;border: 1px solid;height: 35px;">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="background-color: #2dfeff; border: 1px solid;text-align:center">
                                <b>กำหนดชำระที่ธนาคารกรุงไทยทุกสาขา 13 พฤศจิกายน - 1 ธันวาคม 2566</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row" style="margin-top: 10px">
                <div class="col-1" style="margin-left: 30px; float:left; width: 20%">
                    <barcode code="<?php echo $data['qr'] ?>" type="QR" size="0.8" error="M" disableborder="1" />
                </div>
                <div class="col-1" style="float:left; width: 50%">
                    <barcode code="<?php echo $data['codabar'] ?>" type=" CODABAR" class="barcode" height="1.5" />
                    <div style="text-align: left; margin-left:20px">
                        <p style="font-size: 16px"><?php echo $data['codabar'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>