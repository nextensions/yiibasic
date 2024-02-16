<body>
<div class="row" style="margin-left:0px; margin-right:0px;font-size:16px; line-height: 1.2em;">
  <div class="text-center"><img src="img/Triamudom.png" alt="School icon" width="auto" height="80"></div>
  <div class="text-center">
    <h4><i><b>โรงเรียนเตรียมอุดมศึกษาพัฒนาการ รัชดา</b></i></h4>
    <i><b>170 ถนนรัชดาภิเษก แขวง/ต.ห้วยขวาง เขต/อ.ห้วยขวาง จ.กรุงเทพมหานคร 10310</b></i>
  </div>
  <h5 align="right"><i><b>ส่วนของผู้ชําระเงิน</i></b></h5>
  <div class="row">
  <div style="margin-left:16px; margin-right:16px;width:22%;float:left;" class="col-1">
  <i><b>เลขประจําตัวผู้เสียภาษี<br/>
  ใบแจ้งการชําระเงิน<br/>
  ประจําปีการศึกษา<br/>
  ภาคเรียนที่<br/>
  เลขประจําตัวนักเรียน<br/>
  ชั้น/ห้อง<br/>
  Company Code<br/>
  เลขที่อ้างอิง 2<br/>
  จํานวนเงินที่ต้องชําระ<br/>
  ชําระที่สาขา<br/>
  <b></i>
  </div>
  <div class="col-1" style="margin-left:16px; margin-right:16px;width:22%;float:left;">
  <i><b>: 0994000158149<br/><br/>
  : 2566<br/>
  : 2<br/>
  : 30758<br/>
  : 1/5 เลขที่ 1<br/>
  : 80467<br/>
  : 105<br/>
  : 2,500.00<br/>
  : <br/></b></i></div>
  <div class="col-1" style="margin-left:16px; margin-right:16px;width:22%;float:left;">
  <i><b><br/><br/>
  <br/>
  <?php echo $data['fullname'] ?><br/><br/>
  จ.<br/><br/>
  ชำระได้ไม่เกินวันที่<br/>
  ผู้รับเงิน<br/>
  วันที่รับเงิน<br/></b></i></div>
  <div class="col-1" style="margin-left:16px; margin-right:16px;width:22%;float:right;">
  <i><b><br/><br/>
  <br/>
  <br/><br/>
  <br/><br/>
  : 30/11/2566<br/>
  _______________________<br/>
  _______/_______/_______<br/></b></i></div>
</div>

<div class="text-center" style="margin-bottom:-5px">
<br/>
<p style="font-size:20px; text-align: center;"><i><b>กรุณานําใบแจ้งการชําระเงินฉบับนี้ ยื่นชําระที่ ธนาคารกรุงไทย จํากัด (มหาชน)</b></i></p>
    <i><b>(กรณีมีเหตุขัดข้อง ติดต่อฝ่ายการเงิน โรงเรียนเตรียมอุดมศึกษาพัฒนาการ รัชดา)</b></i>
    <hr style="margin-bottom:20px;margin-top:10px">
  </div>
  <div class="col-1" style="width:12%;float:left;">
  <img src="img/Triamudom.png" alt="School icon" width="auto" height="60"><br/><br/>
  <img src="img/Krungthai.png" alt="Bank icon" width="auto" height="60"></div>
  <div class="col-1" style="width:30%;float:left;">
  <p style="padding-top:15px"><i><b>โรงเรียนเตรียมอุดมศึกษาพัฒนาการ รัชดา<br/>Triamudomsuksapattanakarn Ratchada</b><i></p><br/>
  <p style="padding-top:5px"><i><b>ธนาคารกรุงไทย จํากด (มหาชน) Company Code 80467</b></i></p></div>
  
  <div class="col-1" style="width:50%;float:right;">
  <i><b>สาขาผู้รับฝาก.......................................วันที่..............................................................</b></i>
  <div class="table-responsive">
    <div class="col-12">
      <table class="table table-bordered table-sm table-collapse">
        <thead>
          <tr>
            <th scope="col" colspan="2" style="background-color: #E8E8E8"><i><b>Service Code</b></i></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align="left" style="border-right:0;"><b><i>ชื่อนักเรียน(Name) <?php echo $data['fullname'] ?><br/>เลขประจําตัวนักเรียน(Ref.1)<br/>ชั้นเรียน/ห้องเรียน(Ref.2)</i></b></td>
            <td align="left" style="border-left:0;"><br/><?php echo $data['studentid'] ?><br/><?php echo $data['classroom_no'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  
<div style="width: 100%; text-align: center;margin-top:-5px">
  <table class="table table-bordered table-sm table-collapse">
      <thead>
          <tr>
            <td style="width: 100px; text-align: center;"><i><b>หมายเลขเช็ค<br/>Cheque No.</b></i></td>
            <td style="width: 100px; text-align: center;"><i><b>เช็ควันที่<br/>Date</b></i></td>
            <td style="width: 300px; text-align: center;"><i><b>ชื่อธนาคาร/สาขา<br/>Bank/Branch</b></i></td>
            <td colspan="2" style="text-align: center;"><i><b>จำนวนเงิน (บาท)<br/>Amount (Baht)</b></i></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="text-align: center;vertical-align:middle;height: 35px; text-align: center;"></td>
            <td style="text-align: center;vertical-align:middle;height: 35px; text-align: center;"></td>
            <td style="text-align: center;vertical-align:middle;height: 35px; text-align: center;"></td>
            <td style="text-align: center;vertical-align:middle;height: 35px; text-align: center;"></td>
            <td style="text-align: center;vertical-align:middle;height: 35px; text-align: center;"></td>
          </tr>
          <tr>
            <td rowspan="2" style="text-align: center;vertical-align:middle"><i><b>เงินสด</b></i></td>
            <td colspan="2" style="text-align: center;vertical-align:middle"><i><b>( <?php echo $data['total_text'] ?> )</b></i></td>
            <td rowspan="2" style="text-align: center;vertical-align:middle"><i><b><?php echo $data['total'] ?></b></i></td>
            <td rowspan="2" style="text-align: center;vertical-align:middle">--</td>
            <tr>
            <td colspan="2" style="text-align: center;vertical-align:middle"><i><b>โปรดเขียนจํานวนเงินเป็นตัวหนังสือ/Please write amount in words</b></i></td>
          </tr>
          </tr>
        </tbody>
      </table>
    </div>

<div class="col-1" style="width:60%; float:left">
<i><b>หมายเหตุ - รับชำระเป็นเงินสดเท่านั้น<br/>- ชําระผ่านธนาคารได้ไม่เกินวันที่ 30 พฤศจิกายน 2566<br/>(สําหรับธนาคาร)</b></i>
<div class="row" style="padding-top:10px;"><barcode code="<?php echo $data['codabar'] ?>" type=" CODABAR" class="barcode" height="1" size="1"/>
                    <div style="text-align: left; margin-left:20px">
                        <p style="font-size: 16px"><?php echo $data['codabar'] ?></p>
                      </div>
    </div></div>
  <div class="col-1" style="width:23%; float:right">
  <i><b>* ชําระตามยอดจํานวนเต็มเท่านั้น *</b></i>
      <table class="table table-bordered table-sm table-collapse">
        <thead>
          <tr>
            <td align="center"><i><b>(ชื่อผู้รับเงิน)</b></i></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td align="center"><b><i>ผู้รับเงิน/Collector</i></b></td>
          </tr>
        </tbody>
      </table>

  </div>
</div>
</body>