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
    color: blue;
  }
  td{
     font-family: 'Prompt', sans-serif;
  }
    th{
    font-family: 'Prompt', sans-serif;
  }
  a{
    font-family: 'Prompt', sans-serif;
  }
  body{
    background: #f0f2f5
  }
  .card{
    border : 0px
  }
  </style>
</head>
<body>

 
    <div class="container">
    <div align="right" style="margin:3%">
    <a href="<?php echo site_url('welcome/index') ?>">เพิ่มข้อมูล</a>
    </div>
    <br></b><h1>แสดงข้อมูลการเดินทาง</h1>
<div class="card">
<div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ขบวน</th>
      <th scope="col">สถานีต้นทาง</th>
      <th scope="col">เวลาออก</th>
      <th scope="col">ถึงจุดพักเวลา</th>
      <th scope="col">ออกจุดพักเวลา</th>
      <th scope="col">สถานีปลายทาง</th>
      <th scope="col">เวลาถึง</th>
      <th scope="col">หมายเหตุ</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($query->result_array() as $rs){ ?>
    <tr>
      <th scope="row"><?php echo $rs['procession'] ?></th>
      <td><?php echo $rs['d_station'] ?></td>
      <td><?php echo $rs['d_time'] ?></td>
      <td><?php echo $rs['b_to'] ?></td>
      <td><?php echo $rs['b_out'] ?></td>
      <td><?php echo $rs['a_station'] ?></td>
      <td><?php echo $rs['a_time'] ?></td>
      <td><?php echo $rs['note'] ?></td>
      <td></td>
    </tr>
<?php } ?>
  </tbody>
</table>
</div>
   </div>
    </div>

</body>
</html>