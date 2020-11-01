<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost","root","","phone_db");
$sql = "select * from product";
$result = mysqli_query($con,$sql);
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>ตะกร้าสินค้า</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br><div class="container" style="width:700px">
      <h3 align="center">ระบบตะกร้าสินค้า</h3>
      <br>
      <?php
       while($row=mysqli_fetch_array($result)){
   ?>
   <div class="col-md-4">
        <form method="post" action="index.php?action=add&id=<?php echo $row['id'];?>">
        <div style="border:1px solid #333;background-color:white;border-radius:5px;padding:1px;margin:1px">
          <img src="<?php echo $row['img'];?>" class="img-responsive" /><br>
          <h4 class="text-info">สินค้า : <?php echo $row['name'];?></h4>
          <h4 class="text-danger">ราคา: <?php echo number_format($row['price'],2);?> บาท</h4>
          <input type="text" name="quantity" class="form-control" value="1"/>
          <input type="hidden" name="hidden_name" value="<?php echo $row['name'];?>"/>
          <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/>
          <input type="submit" name="add_product" style="margin-top:5px;" class="btn btn-success" value="เพิ่มลงตะกร้า" />
        </div>
        </form>
    </div>
 <?php
    }
 ?>
    </div>
  </body>
</html>
