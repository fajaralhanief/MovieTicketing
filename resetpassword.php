<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/file1.css" />

</head>
<body style="background: url(background2.jpg) no-repeat center center fixed;">

<div class="container">
  
  <div class="row" id="pwd-container">  
    <div class="col-md-4">
      <div class="fadein">
      <section class="login-form">
        <center>
        <form method="POST" action="reset.php" role="login" style="margin-right: 20%; margin-left: 20%;">

          <b><font size="6" face="Century Gothic">Reset Password<br></font>
          <font size="3" face="Century Gothic">
          ID : <?php echo $_SESSION['id_customer']; ?><br>
          Nama : <?php echo $_SESSION['nama']; ?><br><br>
          </font>
          </b>
          
          <font size="3" face="Century Gothic">Password Lama</font><br>
          <input type="password" class="form-control input-lg" name="passwordlama" id="passwordlama" placeholder="Masukkan Password Lama" required=""><br><br>
          <font size="3" face="Century Gothic">Password Baru</font><br>
          <input type="password" class="form-control input-lg" name="passwordbaru" id="passwordbaru" placeholder="Masukkan Password Baru" required=""><br>
          <input type="password" class="form-control input-lg" id="passwordbaru1" name="passwordbaru1" placeholder="Ulangi Password" required=""><br>
          <br>      

          <button type="submit" id="go" class="button">Reset</button>
          
          <div>
            <font face="Century Gothic">
            <a href="index.php">Kembali</a>
            </font>
          </div>
          </center>
        </form>
        
      
      </section>  
      </div>
      </div>

      

  </div>
  
  <p>

    <br>
    <br>
    
  </p>     
  
  
</div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("#go").click(function () {
                var password = $("#password").val();
                var confirmPassword = $("#password1").val();
                if (password != confirmPassword) {
                    alert("Password Tidak Cocok");
                    return false;
                }
                return true;
            });
        });
    </script>
</body>
</html>