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
<style type="text/css">
  table{
      margin-top: 20px;
      margin-bottom: 20px; 
    }
    
    tr:nth-child(odd) {background-color: #dee1e8a6;}
    tr:nth-child(even) {background-color: #5d6b8d59;}
    
    th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }
    
    th {
    background-color: #5d6b8da6;
    color: white;
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
      
         <center>
        
        <font face="Century Gothic">

          <font size="6"> <b>TABEL PESANAN</b><br></font>

          <?php
            include("fkonek.php");

            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "movieticketing";

            $koneksi = fkonek_db();
            $sql = "select * from pesanan";
            $aksi = mysqli_query($koneksi,$sql);
            
            echo"<table align='center' border='1'>
              <tr>
              <th>ID Pesanan</th>
              <th>ID Customer</th>
              <th>Film</th>
              <th>Bioskop</th>
              <th>Jadwal</th>
              <th>Total Kursi</th>
              <th>Nomor Kursi</th>
              <th>Harga</th>
              </tr>";

            $no = 1;
            while($data = mysqli_fetch_array($aksi)):?>
              <tr>
                <td><?php echo $data['id_pesanan'];?></td>
                <td><?php echo $data['id_customer'];?></td>
                <td><?php echo $data['film'];?></td>
                <td><?php echo $data['bioskop'];?></td>
                <td><?php echo $data['jadwal'];?></td>
                <td><?php echo $data['totalkursi'];?></td>
                <td><?php echo $data['nomorkursi'];?></td>
                <td><?php echo $data['harga'];?></td>
                
              </tr>
            <?php
            $no++;
            endwhile;
            ?>
          </table>
          <br> 
          <br>
          <hr><br>
          <font face="Century Gothic">
            <a href="index.php" style="float:left">Kembali Ke Pilih Film</a>

            <a href="pesanan.php" style="float:right">Lihat Tiket Anda</a><br>
          </font>

      
          
          </center>
      
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