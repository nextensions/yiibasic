<div class="row">
  <div class="col-12 text-center" style="padding-top:10px;">
    <h1><?php echo $data['header'] ?></h1>
    <h3><?php echo $data['sub_header'] ?></h3>
  </div>

  <!--body-->

  <table class="table table-bordered">
    <thead>
      <tr>
        <td>A</td>
        <td>B</td>
        <td>C</td>
        <td>D</td>
        <td>E</td>
        <td>F</td>
        <td>G</td>
        <td>H</td>
        <td>I</td>
        <td>J</td>
      </tr>
    </thead>
    <tbody>
      <?php echo $data['rows'] ?>
    </tbody>
  </table>
</div>