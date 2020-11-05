<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
  <style>
  h1{
    font-family: 'Prompt', sans-serif;
    text-align : center ;
    margin-bottom : 3%;
  }
  label{
     font-family: 'Prompt', sans-serif;
  }
    h3{
    font-family: 'Prompt', sans-serif;
  }
  a{
    font-family: 'Prompt', sans-serif;
  }
  option{
     font-family: 'Prompt', sans-serif;
  }
  button{
      font-family: 'Prompt', sans-serif;
      margin-top: 2%;
      
  }
  .card{ 
    margin-bottom: 5%;
    border : 0px
  }
body{
    background: #f0f2f5
  }
  </style>
</head>
<body>
    <div class="container">
    <div align="right" style="margin:3%">
    <a href="<?php echo site_url('welcome/show') ?>">แสดงข้อมูล</a></div>
    <h1 style="margin-top:3%; 
                color:blue;
                ">เพิ่มขบวนและข้อมูลการเดินทาง</h1>
    <div class="card">
    <div class="card-body">
    <form action="<?php echo site_url('welcome/add_data') ?>" method="POST">
    <div class="row">
    <div class="col">
      <label for="">ขบวน</label>
      <input type="text" class="form-control" placeholder="" name="procession">
    </div>
    <div class="col">
     <label for="">หมายเหตุ</label>
      <select style="font-family: 'Prompt', sans-serif;" id="inputState" class="form-control" name="note">
        <option selected>เลือก</option>
        <option>รถธรรมดา</option>
        <option>รถดีเซลราง</option>
        <option>รถด่วนดีเซลราง</option>
      </select>
    </div>
  </div>
<br>
  <h3 style="color:blue;">ต้นทาง</h3>
  <div class="form-row">
    <div class="col">
     <label for="">สถานี</label>
      <input type="text" class="form-control" placeholder="" name="d_station">
    </div>
    <div class="col">
       <label for="">เวลาออก</label>
      <input type="time" class="form-control" placeholder=""name="d_time">
    </div>
  </div>
<br>
  <h3 style="color:blue;">จุดพัก</h3>
  <div class="form-row">
    <div class="col">
     <label for="">ถึง</label>
      <input type="time" class="form-control" placeholder=""name="b_to">
    </div>
    <div class="col">
       <label for="">ออก</label>
      <input type="time" class="form-control" placeholder=""name="b_out">
    </div>
  </div>
<br>
  <h3 style="color:blue;">ปลายทาง</h3>
  <div class="form-row">
    <div class="col">
     <label for="">สถานี</label>
      <input type="text" class="form-control" placeholder=""name="a_station">
    </div>
    <div class="col">
       <label for="">ถึงเวลา</label>
      <input type="time" class="form-control" placeholder=""name="a_time">
    </div>
  </div>
<br>

<div><button type="submit" class="btn btn-primary btn-lg btn-block ">ตกลง</button></div>
</form>
</div>
    </div>
</div>

</body>
</html>