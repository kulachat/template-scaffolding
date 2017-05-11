<!DOCTYPE HTML>
<html>
<head>
    <title>Template Scaffolding</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet" />
</head>
<body>
  <div class="form wrapper">
    <h2 class="title">Inputs</h2>
    <div class="input-data">
      <label class="alignment-label" for="">Default</label>
      <input class="full-input" type="text" name="" value="" placeholder="Enter something">
    </div>
    <div class="input-data">
      <label class="alignment-label" for="">Search</label>
      <div class="attr-inline-block ps-r full-input">
        <input class="full-input" type="text" name="" value="" placeholder="Enter something">
        <button class="btn-type-search" type="submit"/>
      </div>
    </div>
    <br>
    <br>
    <!-- Select Option  -->
    <h2 class="title">Select Option</h2>
    <div class="input-data">
      <label for="" class="alignment-label">เหตุผลแจ้งลบ</label>
      <div class="select-option attr-inline-block">
        <select>
    			<option selected="" value="">ทั้งหมด</option>
    			<option value="3">มิจฉาชีพ หลอกลวง</option>
          <option value="2">สินค้าต้องห้าม / ผิดกฏหมาย</option>
          <option value="1">สแปม ประกาศซ้ำ</option>
          <option value="6">ไม่ผ่าน เหตุผลอื่นๆ</option>
        </select>
      </div>
    </div>
    <br>
    <br>
    <!-- Buttons -->
    <h2 class="title">Buttons</h2>
    <div class="input-data">
	    <input id="" type="button" value="ยกเลิกการแจ้งลบทั้งหมด" class="btn-default"/>
	    <input id="" type="button" value="ไม่ผ่านทั้งหมด" class="btn-manage"/>
      <input type="button" value="Clear" id="bt_clear" class="btn-delete"/>
    </div>
    <div class="input-data">
      <input type="button" value="เคลียร์ข้อมูล" id="bt_clear" class="btn-default"/>
      <input type="button" value="ค้นหา" id="bt_clear" class="btn-primary"/>
    </div>
    <div class="input-data">
      <input type="button" value="Monitoring" id="bt_clear" class="btn-success"/>
      <input type="button" value="บันทึก" id="bt_clear" class="btn-success"/>
    </div>
    <!-- Checkbox and Radio -->
  </div>
</body>
<html>
