<?php
	session_start();
  $_SESSION['id_pesanan'] = "(Anda Belum Memesan)";
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
    	<br><br>

	   
		  <div id="slideshow-mudah" class="carousel slide" data-ride="carousel" style="width: 720px; height:445px; margin: 0 auto;">
  <ol class="carousel-indicators">
    <li data-target="#slideshow-mudah" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow-mudah" data-slide-to="1"></li>
    <li data-target="#slideshow-mudah" data-slide-to="2" ></li>
    <li data-target="#slideshow-mudah" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <img src="banner/1.jpg" alt="slideshow-mudah" width="730" height="450"> 
    </div>
	<div class="item">
      <img src="banner/2.jpg" alt="slideshow-mudah" width="730" height="450"> 
    </div>
	<div class="item">
      <img src="banner/3.jpg" alt="slideshow-mudah" width="730" height="450"> 
    </div>
    <div class="item">
      <img src="banner/4.jpg" alt="slideshow-mudah" width="730" height="450"> 
    </div>
  </div>

  <a class="left carousel-control" href="#slideshow-mudah" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slideshow-mudah" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<br />
<br><br>
<hr width="50%" style="border-color: black;">
<center><font size="10" face="Century Gothic" >Movie Selection</font></center>
<hr width="50%" style="border-color: black;">
<br><br>
<div class="row">
  <div class="col-md-12">
      <div class="col-md-4">
        <a href="file1_14.php"><img src="playing/file1.jpg" width="240" height="390" ></a>
      </div>
      <div class="col-md-4">
        <a href="file2_14.php"><img src="playing/file2.jpg" width="240" height="390"></a>
      </div>
      <div class="col-md-4">
        <a href="file3_14.php"><img src="playing/file3.jpg" width="240" height="390" ></a>
      </div>
  </div>
</div>


    <br><br>
    <hr width="50%" style="border-color: black;">
    <center><font size="10" face="Century Gothic">Coming Soon</font></center>
    <hr width="50%" style="border-color: black;">
    <div class="row">
      <br><br>
      <div class="col-md-4">
        <img src = "csoon/c1.jpg" width="240" height="390" alt="gambar1">
        <p><a href="https://www.youtube.com/watch?v=vn9mMeWcgoM" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt4881806/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>                    
      </div>
      <div class="col-md-4">
        <img src = "csoon/c2.jpg" width="240" height="390" alt="gambar2">
        <p><a href="https://www.youtube.com/watch?v=D4lkpROfQ3k" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt5516328/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>
      </div>
      <div class="col-md-4">
        <img src = "csoon/c3.jpg" width="240" height="390" alt="gambar3">
        <p><a href="https://www.youtube.com/watch?v=20bpjtCbCz0" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt5463162/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>
      </div>
    </div>
      
    <div class="row">
      <br><br>
      <div class="col-md-4">
        <img src = "csoon/c4.jpg" width="240" height="390" alt="gambar4">
        <p><a href="https://www.youtube.com/watch?v=jPEYpryMp2s" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt3778644/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>             
      </div>
      <div class="col-md-4">
        <img src = "csoon/c5.jpg" width="240" height="390" alt="gambar5">
        <p><a href="https://www.youtube.com/watch?v=Cgnk3MLw9TM" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt6772950/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>
      </div>
      <div class="col-md-4">
        <img src = "csoon/c6.jpg" width="240" height="390" alt="gambar6">
        <p><a href="https://www.youtube.com/watch?v=aU_Zjz8A0sk" target="_blank" class="btn btn-danger">Trailer</a><a href="https://www.imdb.com/title/tt6470762/?ref_=nv_sr_1" target="_blank" class="btn btn-danger">IMDB</a></p>
      </div>
    </div>   

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