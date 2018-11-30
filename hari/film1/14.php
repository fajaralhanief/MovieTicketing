<?php
	session_start();
?>

<html>
<head>
<meta charset="UTF-8">
<title>Movie Ticketing : Choose Movie</title>
<link rel="stylesheet" type="text/css" href="css/file1.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="play-button.png" rel='SHORTCUT ICON'/>

</head>
<body>


<font face="Century Gothic">
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Tampilan Nama Web -->
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Navigasi</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="file:///C:/xampp/htdocs/Tubes/halamanweb.html">Movie Ticketing</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://www.google.com" target="_blank">Home</a></li>


        </div>
    </div>
</nav>


<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Movie Ticketing</a>
    </div>
      
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"  style="margin-right: 6px;"></span>Home</a></li>
      <li ><a href="pesanan.php"><span class="glyphicon glyphicon-shopping-cart"  style="margin-right: 6px;"></span>Pesanan Anda</a></li>
      <?php
          if(!isset($_SESSION['nama'])){
          ?>
          <li ><a href="buatakun.php"><span class="glyphicon glyphicon-pencil"  style="margin-right: 6px;"></span>Buat Akun</a></li>
          <?php
        }

                
        ?>
        <li ><a href="aboutus.php"><span class="glyphicon glyphicon-info-sign"  style="margin-right: 6px;"></span>Tentang Kami</a></li>
        <?php
        if(isset($_SESSION['nama'])){
          ?>
        <li><a href="#keluar"><span class="glyphicon glyphicon-refresh"></span> Reset Password</a></li>
          <div id="keluar">
            <div class="window">
              
              
              <h1>Anda Yakin Ingin Reset Password?</h1>
              <a href="#" style="color: red;float: left;margin-top: 20px;margin-left: 50px;"><span class="glyphicon glyphicon-remove" style="font-size: 55px;"></span></a>
              <a href="resetpassword.php" style="color: green;float: right;margin-top: 20px;margin-right: 50px;"><span class="glyphicon glyphicon-ok" style="font-size: 55px;"></span></a>
              
            </div>
          </div>
        <?php
        }
        ?>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <?php
        if(!isset($_SESSION['nama'])){
          ?>
          
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <?php
        }else{ 
          ?>
          <li><a><span class="glyphicon glyphicon-user" style="margin-right: 6px;"></span><?php echo $_SESSION['nama']; ?></a></li>
          <li><a href="#popup"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

         <div id="popup">
            <div class="window">
              
              
              <h1>Anda Yakin Ingin Keluar?</h1>
              <a href="#" style="color: red;float: left;margin-top: 20px;margin-left: 50px;"><span class="glyphicon glyphicon-remove" style="font-size: 55px;"></span></a>
              <a href="logout.php" style="color: green;float: right;margin-top: 20px;margin-right: 50px;"><span class="glyphicon glyphicon-ok" style="font-size: 55px;"></span></a>
              
            </div>
          </div>
          
          <?php
        }
        ?>
        
    </ul>
  </div>
</nav>

<div class="container">
  <div class="jumbotron">
    <hr color = "black" width="95.2%" style="margin-left: 41px; border-color: black;">
    <font size="8" face="Century Gothic" style="margin-left: 41px;"><b>AVENGERS: INFINITY WAR</b></font><br>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    <img src = "file1.jpg" width="304" height="450" alt="gambar1" style="margin-top:-440px;margin-left: 40px;">
    <iframe width="665" height="450" src="https://www.youtube.com/embed/QwievZ1Tx-8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    <font size="6" face="Century Gothic" style="margin-left: 41px; "><b>JADWAL TAYANG</b></font><font size="3" face="Century Gothic" style="margin-left: 480px; ">*Jadwal bisa berubah</font>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    <font size="4" face="Century Gothic" style="margin-left: 41px; margin-right: 40px; "><b>MEI : </b></font>

    <a href="avg/hari/14.php"  style="font-size: 55px;border: 2px solid black;border-radius: 10px; color: black; font-weight: bold; text-decoration: none; margin-right: 40px;" type="button" >14<font size="4" face="Century Gothic">senin</font></a>

    <a href="URL_DISINI"  style="border: 2px solid grey;border-radius: 10px;font-size: 55px; color: grey; font-weight: bold; text-decoration: none; margin-right: 40px;" type="button" >15<font size="4" face="Century Gothic">selasa</font></a>
    
    <a href="URL_DISINI"  style="border: 2px solid grey;border-radius: 10px;font-size: 55px; color: grey; font-weight: bold; text-decoration: none; margin-right: 40px;" type="button" >16<font size="4" face="Century Gothic">rabu</font></a>
    
    <a href="URL_DISINI"  style="border: 2px solid grey;border-radius: 10px;font-size: 55px; color: grey; font-weight: bold; text-decoration: none; margin-right: 40px;" type="button" >17<font size="4" face="Century Gothic">kamis</font></a>
    
    <a href="URL_DISINI"  style="border: 2px solid grey;border-radius: 10px;font-size: 55px; color: grey; font-weight: bold; text-decoration: none; margin-right: 40px;" type="button" >18<font size="4" face="Century Gothic">jumat</font></a>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">


    

    <hr>
    <div class="row">
        <div class="col-sm-12">
            <footer>
                <p>© MovieTicketing </p>
            </footer>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</font>
</body>
</html>