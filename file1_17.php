<?php

  include ("fkonek.php");
  $koneksi = fkonek_db();
  $sql = "select * from hari";
  $aksi = mysqli_query($koneksi,$sql);
  $login = mysqli_query($koneksi, "select * from jadwal");
  $user = mysqli_fetch_array($login);
  session_start();
  $_SESSION['film'] = "Avengers: Infinity War";
  $_SESSION['hari'] = "kamis";
  $_SESSION['tanggal'] = "17";
  echo $_SESSION['jam'];
  unset($_SESSION['jam']);
  unset($_SESSION['bioskop']);

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
    outline: none;
    font-size: 55px;
    border: 2px solid grey;
    border-radius: 10px; 
    color: grey; 
    font-weight: bold; 
    text-decoration: none; 
    margin-right: 40px;
  }
  .b{
    outline: none;
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
  .d{
    border: 2px solid black;
    border-radius: 10px;
    font-size: 55px; color: black;
    
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
    <img src = "playing/file1.jpg" width="304" height="450" alt="gambar1" style="margin-top:-440px;margin-left: 40px;">
    <iframe width="665" height="450" src="https://www.youtube.com/embed/QwievZ1Tx-8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    <font size="6" face="Century Gothic" style="margin-left: 41px; "><b>JADWAL TAYANG</b></font><font size="3" face="Century Gothic" style="margin-left: 480px; ">*Jadwal bisa berubah</font>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    <font size="4" face="Century Gothic" style="margin-left: 41px; margin-right: 40px; "><b>MEI : </b></font>

    <a href="file1_14.php"><button class="a">14<font size="4" face="Century Gothic">senin</font></button></a>

    <a href="file1_15.php"><button class="a">15<font size="4" face="Century Gothic">selasa</font></button></a>
    
    <a href="file1_16.php"><button class="a">16<font size="4" face="Century Gothic">rabu</font></button></a>
    
    <a href="file1_17.php"><button class="b">17<font size="4" face="Century Gothic">kamis</font></button></a>
    
    <a href="file1_18.php"><button class="a">18<font size="4" face="Century Gothic">jumat</font></button></a>
    <hr width="95.2%" style="margin-left: 41px; border-color: black;">

    <font face ="Century Gothic" >

    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>XXI Transmart Buah Batu</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c T1" onclick="cek('1');">10:00</button>
    <button class="c T2" onclick="cek('2');">18:55</button>
    <button class="c T3" onclick="cek('3');">21:50</button>
    <br><br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">

    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>XXI Cihampelas Walk</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c C1" onclick="cek('4');">10:30</button>
    <button class="c C2" onclick="cek('5');">18:00</button>
    <button class="c C3" onclick="cek('6');">20:55</button>
    <br><br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>CGV Bandung Elektronik Center</b></font>
    <h4><b>> </b>2D</h4>
    <button class="c B1" onclick="cek('7');">11:30</button>
    <button class="c B2" onclick="cek('8');">17:30</button>
    <button class="c B3" onclick="cek('9');">20:30</button>
    <br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="5" face="Century Gothic"><b>CGV Paris Pan Java</b></font>
    <h4><b>> </b>2D</h4>

    <button class="c P1" onclick="cek('10');">11:45</button>
    <button class="c P2" onclick="cek('11');">17:45</button>
    <button class="c P3" onclick="cek('12');">20:45</button>
    <br><br>
    </div>

    <hr width="95.2%" style="margin-left: 41px; border-color: black;">
    
    <div style="margin-left: 41px;">
    <font size="6" face="Century Gothic"><b>PESANAN: </b></font>
    <font size="5" face="Century Gothic"><br>
      <b>Tempat:</b> <font id="hasil2"> </font> |<b> Tanggal: </b>Kamis, 17 Mei 2018 |
      <b>Film:</b>  AVENGERS: INFINITY WAR | <b>Class:</b> 2D | <b>Jam:</b> <font id="hasil"> </font>|
    </font>
    </div>
    <br><br>

<form name="form1" id="form1" method="POST" action ="tes.php" onsubmit="cek()">
<input type="hidden" id="media" name="media" value="">
<input type="hidden" id="media1" name="media1" value="">
<input class="b" type="submit" id="submit" name="submit" value="PILIH KURSI" style="float: right;">
</form>
<a href="index.php"  style=" margin-left: 40px;"><button class ="d">BACK</button></a>



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
       var teks = $(".T1").text();
       var teks1 = "XXI Transmart Buah Batu"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;
       

    }else if(n == '2'){
       document.getElementById("hasil").innerHTML = "18:55";
       document.getElementById("hasil2").innerHTML = "XXI Transmart Buah Batu";
       var teks = $(".T2").text();
       var teks1 = "XXI Transmart Buah Batu"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '3'){
       document.getElementById("hasil").innerHTML = "21:50";
       document.getElementById("hasil2").innerHTML = "XXI Transmart Buah Batu";
       var teks = $(".T3").text();
       var teks1 = "XXI Transmart Buah Batu"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;


    }else if(n == '4'){
       document.getElementById("hasil").innerHTML = "10:30";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       var teks = $(".C1").text();
       var teks1 = "XXI Cihampelas Walk"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '5'){
       document.getElementById("hasil").innerHTML = "18:00";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       var teks = $(".C2").text();
       var teks1 = "XXI Cihampelas Walk"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '6'){
       document.getElementById("hasil").innerHTML = "20:55";
       document.getElementById("hasil2").innerHTML = "XXI Cihampelas Walk";
       var teks = $(".C3").text();
       var teks1 = "XXI Cihampelas Walk"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '7'){
       document.getElementById("hasil").innerHTML = "11:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       var teks = $(".B1").text();
       var teks1 = "CGV Bandung Elektronik Center"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '8'){
       document.getElementById("hasil").innerHTML = "17:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       var teks = $(".B2").text();
       var teks1 = "CGV Bandung Elektronik Center"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '9'){
       document.getElementById("hasil").innerHTML = "20:30";
       document.getElementById("hasil2").innerHTML = "CGV Bandung Elektronik Center";
       var teks = $(".B3").text();
       var teks1 = "CGV Bandung Elektronik Center"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '10'){
       document.getElementById("hasil").innerHTML = "11:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       var teks = $(".P1").text();
       var teks1 = "CGV Paris Van Java"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }else if(n == '11'){
       document.getElementById("hasil").innerHTML = "17:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       var teks = $(".P2").text();
       var teks1 = "CGV Paris Van Java"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;
    }else if(n == '12'){
       document.getElementById("hasil").innerHTML = "20:45";
       document.getElementById("hasil2").innerHTML = "CGV Paris Van Java";
       var teks = $(".P3").text();
       var teks1 = "CGV Paris Van Java"
       document.form1.media.value = teks;
       document.form1.media1.value = teks1;

    }
  }
</script>
</font>

</body>
</html>