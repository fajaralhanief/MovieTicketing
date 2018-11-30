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
        <form method="POST" action="inputbuatakun.php" role="login" style="margin-right: 20%; margin-left: 20%;">

          <b><font size="6" face="Century Gothic">Create Account</font></b><br><br>
          <input type="id_customer" name="id_customer" placeholder="ID Customer" required="" class="form-control input-lg"><br>
          <input type="nama" name="nama" placeholder="Nama" required="" class="form-control input-lg"><br>
          <input type="email" name="email" placeholder="Email" required="" class="form-control input-lg"><br>
          <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required=""><br>
          <input type="password" class="form-control input-lg" id="password1" placeholder="Ulangi Password" required=""><br>
          <br>      

          <button type="submit" id="go" class="button">Create</button>
          
          <div>
            <font face="Century Gothic">
            <a href="#" onclick="history.back(-1)">Back to login</a>
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