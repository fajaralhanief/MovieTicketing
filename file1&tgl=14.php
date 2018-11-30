<?php

  include ("fkonek.php");
  $koneksi = fkonek_db();
  $sql = "select * from hari";
  $aksi = mysqli_query($koneksi,$sql);
  $login = mysqli_query($koneksi, "select * from jadwal");
  $user = mysqli_fetch_array($login);
  session_start();
  $_SESSION['hari'] = "senin";
  $_SESSION['tanggal'] = "14";


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
<style type="text/css">
  .a{
    font-size: 55px;
    border: 2px solid grey;
    border-radius: 10px; 
    color: grey; 
    font-weight: bold; 
    text-decoration: none; 
    margin-right: 40px;
  }
  .b{
    border: 2px solid black;
    border-radius: 10px;
    font-size: 55px; color: black;
    font-weight: bold;
    text-decoration: none;
    margin-right: 40px;
  }
  .c{

    font-size: 25px; color: black;
    font-weight: bold;
    text-decoration: none;
    margin-right: 40px;
  }

</style>
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

    <a href="file1&tgl=14.php"><button class="b">14<font size="4" face="Century Gothic">senin</font></button></a>

    <a href="file1&tgl=15.php"><button class="a">15<font size="4" face="Century Gothic">selasa</font></button></a>
    
    <a href="file1&tgl=16.php"><button class="a">16<font size="4" face="Century Gothic">rabu</font></button></a>
    
    <a href="file1&tgl=17.php"><button class="a">17<font size="4" face="Century Gothic">kamis</font></button></a>
    
    <a href="file1&tgl=18.php"><button class="a">18<font size="4" face="Century Gothic">jumat</font></button></a>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">

    <font face ="Century Gothic" >

    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>XXI Transmart Buah Batu</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c" onclick="cek('1');">10:00</button>
    <button class="c" onclick="cek('2');">18:55</button>
    <button class="c" onclick="cek('3');">21:50</button>
    <br><br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">

    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>XXI Cihampelas Walk</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c" onclick="cek('4');">10:30</button>
    <button class="c" onclick="cek('5');">18:00</button>
    <button class="c" onclick="cek('6');">20:55</button>
    <br><br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>CGV Bandung Elektronik Center</b></font>
    <h4><b>> </b>2D</h4>
    <button class="c" onclick="cek('7');">11:30</button>
    <button class="c" onclick="cek('8');">17:30</button>
    <button class="c" onclick="cek('9');">20:30</button>
    <br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>CGV Paris Pan Java</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c" onclick="cek('10');">11:45</button>
    <button class="c" onclick="cek('11');">17:45</button>
    <button class="c" onclick="cek('12');">20:45</button>
    <br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="6" face="Century Gothic"><b>PESANAN: </b></font>
    <font size="5" face="Century Gothic"><br>
      Tempat: <font id="hasil2"> </font> | Tanggal: Senin, 14 Mei 2018 |
      Film : AVENGERS: INFINITY WAR | Class: 2D | Jam: <font id="hasil"> </font>|
    </font>
    </div>
    <a href="tes.php">asda</a>

    
    </font>
    
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
<script type="text/javascript">
    function cek(n){
    if(n == '1'){
       document.getElementById("hasil").innerHTML = "10:00";
       document.getElementById("hasil2").innerHTML = "XXI Transmart Buah Batu";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "10:00";
       $_SESSION['bioskop'] = "XXI Transmart Buah Batu";
       ?>
    }else if(n == '2'){
       document.getElementById("hasil").innerHTML = "18:55";
       document.getElementById("hasil2").innerHTML = "XXI Transmart Buah Batu";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "18:55";
       $_SESSION['bioskop'] = "XXI Transmart Buah Batu";
       ?>

    }else if(n == '3'){
       document.getElementById("hasil").innerHTML = "21:50";
       document.getElementById("hasil2").innerHTML = "XXI Transmart Buah Batu";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "21:50";
       $_SESSION['bioskop'] = "XXI Transmart Buah Batu";
       ?>
    }else if(n == '4'){
       document.getElementById("hasil").innerHTML = "10:30";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "10:30";
       $_SESSION['bioskop'] = "XXI Cihampelas Walk";
       ?>
    }else if(n == '5'){
       document.getElementById("hasil").innerHTML = "18:00";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "18:00";
       $_SESSION['bioskop'] = "XXI Cihampelas Walk";
       ?>
    }else if(n == '6'){
       document.getElementById("hasil").innerHTML = "20:55";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "20:55";
       $_SESSION['bioskop'] = "XXI Cihampelas Walk";
       ?>
    }else if(n == '7'){
       document.getElementById("hasil").innerHTML = "11:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "11:30";
       $_SESSION['bioskop'] = "CGV Bandung Elektronik Center";
       ?>
    }else if(n == '8'){
       document.getElementById("hasil").innerHTML = "17:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "17:30";
       $_SESSION['bioskop'] = "CGV Bandung Elektronik Center";
       ?>
    }else if(n == '9'){
       document.getElementById("hasil").innerHTML = "20:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "20:30";
       $_SESSION['bioskop'] = "CGV Bandung Elektronik Center";
       ?>
    }else if(n == '10'){
       document.getElementById("hasil").innerHTML = "11:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "11:45";
       $_SESSION['bioskop'] = "CGV Paris Van Java";
       ?>
    }else if(n == '11'){
       document.getElementById("hasil").innerHTML = "17:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "17:45";
       $_SESSION['bioskop'] = "CGV Paris Van Java";
       ?>
    }else if(n == '12'){
       document.getElementById("hasil").innerHTML = "20:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       <?php
       unset($_SESSION['jam']);
       unset($_SESSION['bioskop']);
       $_SESSION['jam'] = "20:45";
       $_SESSION['bioskop'] = "CGV Paris Van Java";
       ?>
    }
  }
</script>
</font>
</body>
</html>