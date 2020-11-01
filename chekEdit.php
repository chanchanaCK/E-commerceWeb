
<?php
  header('Content-Type: charset=utf-8');
  include('connect.php');
  $query="select * from tb_login";
  $rs=mysqli_query($dbcon,$query);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>แก้ไขข้อมูล user</title>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container" style="width:10000px;"><br>
      <h3>User</h3>
      <br><br>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr class="success">
            <th scope="col" width="20%">Full Name</th>
            <th scope="col" width="40%">Username</th>
            <th scope="col" width="20%">Email</th>
            <?php while ($row=mysqli_fetch_array($rs)) { ?>
              <tbody>
              <tr>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['login_username']; echo "    "; echo $row['login_email']; ?></td>
                <td> <input type="button" name="view" value="view" class="btn btn-info btn-sm view_sup" id="<?php echo $row['first_name'] ?>"/>
                  <input type="button" name="edit" value="edit" class="btn btn-success btn-sm edit_sup" id="<?php echo $row['first_name'] ?>"/> </td>
              </tr>
            </tbody>
            <?php } ?>
          </thead>
        </table>
      </div>
    </div>

  </body>
  <script>

    $(document).ready(function(){
      $('.edituser').click(function(){
        var sid=$(this).attr("first_name");
        $.ajax({
          url:"edituser.php",
          type:"post",
          data:{id:sid},
          dataType:"JSON",
          success:function(data){
            $('#first_name').val(data.first_name);
            $('#login_username').val(data.login_username);
            $('#login_email').val(data.login_email);
            $('#sup_call').val(data.sup_call);
            $('#sup_email').val(data.sup_email);
            $('#sup_addr').val(data.sup_addr);
            $('#insertsup').val("Update");
            $('#addsup').modal('show');
          },
          error:function(data){
              console.log(data.responseText) ;
          }
        });
      });
    });
  </script>
</html>
