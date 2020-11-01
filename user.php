<?php
include("connect.php") ;
$rs = $dbcon->query("select * from tb_login ") ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit user</title>
    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/font-awesome.css" type="text/css" rel="stylesheet" />
    <link href="bootstrap/css/s2-docs.css" type="text/css" rel="stylesheet" >
  </head>
    <body>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
  <h2>User details</h2>
  <table class="table">
    <thead>
        <tr>
         <th>Full Name</th><th>username</th><th>Email</th><th>password</th><th></th>
        </tr>
      <?php
          if($rs->num_rows > 0)
          {
            while($row = $rs->fetch_array())
            {
  ?>
  <tr>
    <td><?php echo $row['first_name'] ; ?></td><td><?php echo $row['login_username'] ;?></td>
    <td><?php echo $row['login_email'];?></td>
    <td><?php echo $row['login_password'] ;?></td>
    <td><a href="chekEdit.php"><i class='glyphicon glyphicon-pencil'>edit</i></a></td>
  </tr>
<?php
  }
}
?>
</thead>
</table>
</div>
     <div class="col-md-6">
      <h2> [<a href="logout.php">กลับหน้าหลัก</a>]</h2>
      <form  method="post" action="index1.php" class="form-horizontal">
        <div class="form-group">
                  <label for="txt_name" class="col-1 col-form-label">Full Name</label>
                  <div class="col-5">
                    <input class="form-control" type="text" id="firstname" name="firstname">
                  </div>
                </div>
                  <div class="form-group">
                    <label for="txt_gpa" class="col-1 col-form-label">username</label>
                    <div class="col-5">
                      <input class="form-control" type="text" id="username" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="txt_gpa" class="col-1 col-form-label">password</label>
                    <div class="col-5">
                      <input class="form-control" type="password" id="pass" name="pass">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="txt_gpa" class="col-1 col-form-label">Email</label>
                    <div class="col-5">
                      <input class="form-control" type="text" id="email" name="email">
                    </div>
                  </div>


                  <div class="form-group">
          <label for="bt" class="col-1 col-form-label"></label>
          <div class="col-5">
           <button class="btn btn-primary" id="bt">Submit</button>
          </div>
        </div>
</div>
</div>

 </body>
</html>
