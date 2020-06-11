<?php
require("config/config.default.php");
require("config/config.candy.php");
$cekdb = mysqli_query($koneksi, "SELECT 1 FROM pengawas LIMIT 1");
if ($cekdb == false) {
	header("Location: install.php");
}



// if ($_SERVER["QUERY_STRING"] <> KEY) {
// 	echo '<img src="dist/img/octo.gif" style="display: block; margin: auto;">';
// 	exit;
// }
?>


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Siswa-<?php echo $setting['aplikasi']; ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/vendor/animate/animate.css">

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="dist/css/util.css">
	<link rel="stylesheet" type="text/css" href="dist/css/main.css">
	<!--===============================================================================================-->
	<link rel='stylesheet' href='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.css'>
</head>

<body>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */

html {
  background-color: white;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: white;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h1 {
  text-align: center;
  font-size: 50px;
  font-weight: 600;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
font-family: myFirstFont;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 370px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #3493ed;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  font-size: 10px;
  font-weight: 600;
  color:#edf6ff;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h1.inactive {
  color: #cccccc;

}

@font-face {
  font-family: myFirstFont;
  src: url(Allura-Regular.woff);
}

h1.active {
  color: white;
text-align:center;
  font-size: 2em
font-weight: bolder
font-family: myFirstFont;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 15px 20px 20px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text], input[type=password]  {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}





/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}
</style>
<section class='content-header' style="height:35%;z-index:0;background-image:url(https://1.bp.blogspot.com/-QxmiBcV5E4g/XqvcgOgtjrI/AAAAAAAAAOk/heBcuqokOGMDrU_MBJTe561MbPDxCEsBgCLcBGAsYHQ/s1600/Background25.png);">
				<form id="formlogin" action="ceklogin.php" class="login100-form validate-form">
  
    <center class="fadeIn first">
        
       <img src="https://1.bp.blogspot.com/-1XZWmyRcqzo/XqtOwRLs4qI/AAAAAAAAANI/G4ESfXj1oswlCEP6q32iDlRtceUWybtFACLcBGAsYHQ/s320/logo61.png" style='max-width:75px; width='75' id="icon" alt="User Icon" />
    <h1 class="active" box-shadow="0px 10px 10px 0px rgba(0,0,0,0.1)">Login Ujian</h1>
    <div style="color:white; font-size:11px; margin-top:-15px; margin-left:74px">Ujian Sekolah Berbasis Android Online
    </div>
    </center>
  

    <!-- Icon -->
  <div class="wrapper fadeInDown">
  <div id="formContent">
    
    
    <div class="fadeIn first">
        <br>
        
   </span>
    </div>

    <!-- Login Form -->
    <form>
     <div style="align:left; font-size:19px;">DINAS PENDIDIKAN</div>
  
    <div style="color:black; font-size:12px;">
    Silahkan Pilih <b>Jenjang</b> dan <b>Pastikan </b> <br> Sesuai dengan statusnya
    </div>
    <br>
    
   
    
      <a href="./sma/karawang/sma_karawang.php" >
      <input type="button" class="fadeIn fourth" value="S M A"></a>
      
       <a href="./7smp/karawang/smp_pat.php" >
      <input type="button" class="fadeIn fourth" value="S M P"></a>
      
       <a href="#" >
      <input type="button" class="fadeIn fourth" value="S D"></a>
      
      
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    <div style="color:white; font-size:15px">PAT 2019-2020
    </div>
    </div>

  </div>
</div>







				</form>
			</div>
		</div>
	</div>
  </div>

	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="dist/vendor/jquery/jquery-3.2.1.min.js"></script>

	<!--===============================================================================================-->
	<script src="dist/vendor/bootstrap/js/popper.js"></script>
	<script src="dist/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src='<?php echo $homeurl; ?>/plugins/sweetalert2/dist/sweetalert2.min.js'></script>
	<script src="dist/js/main.js"></script>
</body>

</html>