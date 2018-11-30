<?php
	session_start();
	unset($_SESSION['nomorkursi']);
	unset($_SESSION['totalkursi']);
    $_SESSION['nomorkursi'] = "";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="css/file1.css">
	<link href="play-button.png" rel='SHORTCUT ICON'/>
    <style type="text/css">
	.bangku{
		width: 30px;
		height:30px;
		text-align:center;
		font-size:12px;
		background-color:black;
		color:black;
		cursor:pointer;
		margin-top:2px;
	}

	.bangku:hover{
        background-color: maroon; 
        color: white;
    }

	.btn-pink{
		background:pink;
		border-radius: 3px;
	}				
    .btn-maroon{
		background:maroon;
        color: white;
        border-radius: 3px;
	}
    .box{
    width:530px;
    height:20px;
    margin-left: 10px;
    margin-right: 10px;
    background:pink;
    margin-bottom: 80px;
    }
    .latar {
    background: #eee;
    border-radius: 30px;
    margin-left: 20%;
    margin-right: 20%;
	}
</style>
</head>
<body>

	<div class="latar">
	<font face="Century Gothic">
	<a onclick="location.reload();"><button class="z" style="margin-top: 30px;margin-left: 615px; margin-bottom: 10px;">Reset</button></a>

    <center><div class="box" style="background-color: black; color: white;">SCREEN</div></center>
    <center>
<table>


  <tr>
    <td><div class="bangku btn-pink" data-id="0">K12</div></td>
    <td><div class="bangku btn-pink" data-id="0">K11</div></td>
    <td><div class="bangku btn-pink" data-id="0">K10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">K09</div></td>
    <td><div class="bangku btn-pink" data-id="0">K08</div></td>
    <td><div class="bangku btn-pink" data-id="0">K07</div></td>
    <td><div class="bangku btn-pink" data-id="0">K06</div></td>
    <td><div class="bangku btn-pink" data-id="0">K05</div></td>
    <td><div class="bangku btn-pink" data-id="0">K04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">K03</div></td>
    <td><div class="bangku btn-pink" data-id="0">K02</div></td>
    <td><div class="bangku btn-pink" data-id="0">K01</div></td>

  </tr>

  <tr>

    <td><div class="bangku btn-pink" data-id="0">J12</div></td>
    <td><div class="bangku btn-pink" data-id="0">J11</div></td>
    <td><div class="bangku btn-pink" data-id="0">J10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">J09</div></td>
    <td><div class="bangku btn-pink" data-id="0">J08</div></td>
    <td><div class="bangku btn-pink" data-id="0">J07</div></td>
    <td><div class="bangku btn-pink" data-id="0">J06</div></td>
    <td><div class="bangku btn-pink" data-id="0">J05</div></td>
    <td><div class="bangku btn-pink" data-id="0">J04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">J03</div></td>
    <td><div class="bangku btn-pink" data-id="0">J02</div></td>
    <td><div class="bangku btn-pink" data-id="0">J01</div></td>

  </tr>
    <tr>

    <td><div class="bangku btn-pink" data-id="0">H12</div></td>
    <td><div class="bangku btn-pink" data-id="0">H11</div></td>
    <td><div class="bangku btn-pink" data-id="0">H10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">H09</div></td>
    <td><div class="bangku btn-pink" data-id="0">H08</div></td>
    <td><div class="bangku btn-pink" data-id="0">H07</div></td>
    <td><div class="bangku btn-pink" data-id="0">H06</div></td>
    <td><div class="bangku btn-pink" data-id="0">H05</div></td>
    <td><div class="bangku btn-pink" data-id="0">H04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">H03</div></td>
    <td><div class="bangku btn-pink" data-id="0">H02</div></td>
    <td><div class="bangku btn-pink" data-id="0">H01</div></td>
  </tr> 

    <tr>

    <td><div class="bangku btn-pink" data-id="0">G12</div></td>
    <td><div class="bangku btn-pink" data-id="0">G11</div></td>
    <td><div class="bangku btn-pink" data-id="0">G10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">G09</div></td>
    <td><div class="bangku btn-pink" data-id="0">G08</div></td>
    <td><div class="bangku btn-pink" data-id="0">G07</div></td>
    <td><div class="bangku btn-pink" data-id="0">G06</div></td>
    <td><div class="bangku btn-pink" data-id="0">G05</div></td>
    <td><div class="bangku btn-pink" data-id="0">G04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">G03</div></td>
    <td><div class="bangku btn-pink" data-id="0">G02</div></td>
    <td><div class="bangku btn-pink" data-id="0">G01</div></td>
  </tr> 

  <tr>

    <td><div class="bangku btn-pink" data-id="0">F12</div></td>
    <td><div class="bangku btn-pink" data-id="0">F11</div></td>
    <td><div class="bangku btn-pink" data-id="0">F10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">F09</div></td>
    <td><div class="bangku btn-pink" data-id="0">F08</div></td>
    <td><div class="bangku btn-pink" data-id="0">F07</div></td>
    <td><div class="bangku btn-pink" data-id="0">F06</div></td>
    <td><div class="bangku btn-pink" data-id="0">F05</div></td>
    <td><div class="bangku btn-pink" data-id="0">F04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">F03</div></td>
    <td><div class="bangku btn-pink" data-id="0">F02</div></td>
    <td><div class="bangku btn-pink" data-id="0">F01</div></td>
  </tr> 

  <tr>

    <td><div class="bangku btn-pink" data-id="0">E12</div></td>
    <td><div class="bangku btn-pink" data-id="0">E11</div></td>
    <td><div class="bangku btn-pink" data-id="0">E10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">E09</div></td>
    <td><div class="bangku btn-pink" data-id="0">E08</div></td>
    <td><div class="bangku btn-pink" data-id="0">E07</div></td>
    <td><div class="bangku btn-pink" data-id="0">E06</div></td>
    <td><div class="bangku btn-pink" data-id="0">E05</div></td>
    <td><div class="bangku btn-pink" data-id="0">E04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">E03</div></td>
    <td><div class="bangku btn-pink" data-id="0">E02</div></td>
    <td><div class="bangku btn-pink" data-id="0">E01</div></td>
  </tr>

    <tr>

    <td><div class="bangku btn-pink" data-id="0">D12</div></td>
    <td><div class="bangku btn-pink" data-id="0">D11</div></td>
    <td><div class="bangku btn-pink" data-id="0">D10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">D09</div></td>
    <td><div class="bangku btn-pink" data-id="0">D08</div></td>
    <td><div class="bangku btn-pink" data-id="0">D07</div></td>
    <td><div class="bangku btn-pink" data-id="0">D06</div></td>
    <td><div class="bangku btn-pink" data-id="0">D05</div></td>
    <td><div class="bangku btn-pink" data-id="0">D04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">D03</div></td>
    <td><div class="bangku btn-pink" data-id="0">D02</div></td>
    <td><div class="bangku btn-pink" data-id="0">D01</div></td>
  </tr>

  <tr>

    <td><div class="bangku btn-pink" data-id="0">C12</div></td>
    <td><div class="bangku btn-pink" data-id="0">C11</div></td>
    <td><div class="bangku btn-pink" data-id="0">C10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">C09</div></td>
    <td><div class="bangku btn-pink" data-id="0">C08</div></td>
    <td><div class="bangku btn-pink" data-id="0">C07</div></td>
    <td><div class="bangku btn-pink" data-id="0">C06</div></td>
    <td><div class="bangku btn-pink" data-id="0">C05</div></td>
    <td><div class="bangku btn-pink" data-id="0">C04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 60px;" data-id="0">C03</div></td>
    <td><div class="bangku btn-pink" data-id="0">C02</div></td>
    <td><div class="bangku btn-pink" data-id="0">C01</div></td>
  </tr>

  <tr>

    <td><div class="bangku btn-pink" data-id="0">B12</div></td>
    <td><div class="bangku btn-pink" data-id="0">B11</div></td>
    <td><div class="bangku btn-pink" data-id="0">B10</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 68px;" data-id="0">B09</div></td>
    <td><div class="bangku btn-pink" data-id="0">B08</div></td>
    <td><div class="bangku btn-pink" data-id="0">B07</div></td>
    <td><div class="bangku btn-pink" data-id="0">B06</div></td>
    <td><div class="bangku btn-pink" data-id="0">B05</div></td>
    <td><div class="bangku btn-pink" data-id="0">B04</div></td>
    <td><div class="bangku btn-pink" style="margin-right: 68px;" data-id="0">B03</div></td>
    <td><div class="bangku btn-pink" data-id="0">B02</div></td>
    <td><div class="bangku btn-pink" data-id="0">B01</div></td>
  </tr>
  
</table>

<table>
    
    <tr>

    <td><div class="bangku btn-pink" data-id="0">A16</div></td>
    <td><div class="bangku btn-pink" data-id="0">A15</div></td>
    <td><div class="bangku btn-pink" data-id="0">A14</div></td>  
    <td><div class="bangku btn-pink" data-id="0" >A13</div></td>   
    <td><div class="bangku btn-pink" data-id="0" >A12</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A11</div></td>
    <td><div class="bangku btn-pink" data-id="0">A10</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A09</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A08</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A07</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A06</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A05</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A04</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A03</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A02</div></td>
    <td><div class="bangku btn-pink" data-id="0" >A01</div></td>
  </tr>

</table>
<br>
<input class="q" type="submit" id="ambilkursi" name="submit" value="AMBIL KURSI" style="float: right;">	<br>
<form onsubmit="readCookie()" name="form1" id="form1" method="POST" action ="cekpesanan.php" style="background-color: #eee;border-radius: 30px;margin-top: -30px;">
<hr width="90%" style="border-color: black;"><br>
<div style="text-align: left; margin-left: 40px;">
<table>
	<tr>
		<td><b>Film:</b> <?php echo  $_SESSION['film'];?><br>
			<b>Layar:</b> Regular<br>
			<b>Bioskop:</b> <?php echo  $_SESSION['bioskop'];?><br>
			<b>Tanggal:</b> <?php echo  $_SESSION['hari'];?>, <?php echo  $_SESSION['tanggal'];?> Mei 2018
		</td>
		<td><hr style="width: 0; height: 100px; margin-left: 30px;margin-right: 30px;"></td>
		<td>
			<b>Jumlah Kursi:</b> <font id="hasil"> </font><br>
			<b>No. Kursi:</b> <font id="hasil2"> </font><br>
			<b>Harga:</b>Rp <font id="hasil3"> </font><br>
			
		</td>

			
	
	</tr>

	<input type="hidden" id="media" name="media" value="">
	<input type="hidden" id="media1" name="media1" value="">
	<input type="hidden" id="media2" name="media2" value="">
	<?php
		if(isset($_POST['media'])){ 
			$jml = $_POST['media'];
			$no = $_POST['media1'];
			$harga = $_POST['media2'];
			$_SESSION['totalkursi']= $jml;
			$_SESSION['nomorkursi']= $no;
			$_SESSION['hargakursi']= $harga;
		}
	?>

</table>
<input class="q" type="submit" id="submit" name="submit" value="BOOKING" style="float: right; font-size: 40px;">
<div>

<br>
<br>
<br>
</font>
</form>
	</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">

function writeCookie(name,value,days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}
$(document).ready(function(){
	$('.bangku').each(function() {
		    $(this).click(function() {
		    		var i=$(this).attr("data-id");
					if(i=="1"){
						return false;
					}
                    else{
						if(i=="0"){
							$(this).attr('class','btn-maroon bangku');
							$(this).attr('data-id','3');
							Tambah();
						}else if(i=="3"){
							$(this).attr('class','btn-pink bangku');
							$(this).attr('data-id','0');
							Tambah();
						}
					}
	 });
});

$("#ambilkursi").click(function(){
  	var total=$('div[data-id="3"]').length;
  		//alert("Jumlah pemesanan " + total);
  	var harga= total*45000;


  	
	var str = [], item;
	   $.each($('div[data-id="3"]'), function (index, value){
			 item = $(this).text();                 
			 str.push(item);                 
		});
	var selek=str.join(',');

  	cek(total,selek,harga);
});

$("#lihattotal").click(function(){
  	var total=$('div[data-id="3"]').length;
  		//alert("Jumlah pemesanan " + total);
  	var harga= total*45000;
  		alert(harga);

  	});
$("#lihatbangku").click(function(){
  	var str = [], item;
	   $.each($('div[data-id="3"]'), function (index, value){
			 item = $(this).text();                 
			 str.push(item);                 
		});
	var selek=str.join(',');
		 alert("No Kursi yg dipesan "+selek);
 });
function Tambah() {
	var total=$('div[data-id="3"]').length;
		var str = [], item;
			    $.each($('div[data-id="3"]'), function (index, value){
			        item = $(this).text();                 
			        str.push(item);                 
			    });
			    var selek=str.join(',');
		    	writeCookie('totseat',total,1);
		    	writeCookie('selekseat',selek,1);
		    	}

});
function cek(total,nomor,harga){
	var tot = total;
	var no = nomor;
	var cost = harga;
	document.getElementById("hasil").innerHTML = tot;
    document.getElementById("hasil2").innerHTML = no;
    document.getElementById("hasil3").innerHTML = cost;
	document.form1.media.value = tot;
    document.form1.media1.value = no;
    document.form1.media2.value = cost;
}

</script>
</center>
</body>
</html>