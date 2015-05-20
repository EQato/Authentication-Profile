<?php $this->load->helper('url'); ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Profili</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleadmin.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo base_url(); ?>style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <style>.loading img { display: none; background: url('<?php echo base_url(); ?>img/ajax-loader.gif'); }</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/ajaxfileupload.js"></script>
 </head>


<body>

 <div id="topheader">
   <div class="logo"></div>
   <div class="menu_area"><a href="http://studentclub.al/card/index.php/admin/export_data?page=1" class="ideas">k&euml;rko  <span class="menu_text">K&euml;rko Studentet</span></a> <a href="#" class="links">Oferta  <span class="menu_text">Oferta te reja</span></a> <a href="#" class="info">Info  <span class="menu_text">Informacione</span></a> <a href="#" class="works">Biznese<span class="menu_text"></span></a></div>
 </div>

 <div id="search_strip">
  <div class="freeregistration">
    <div class="registration"><a href="http://studentclub.al/card/index.php/admin/admin_login" class="free">ADMIN</a></div>
  </div>
  <form id="mbiemrif" action="http://studentclub.al/card/index.php/admin/gjejtegjitha" method="get">
  <div class="search_area">
    <div class="search_box">
      <label>
      <input name="tegjitha" type="text" class="searchtextbox" />
      </label>
    </div>
    <div class="search_go">
      <div align="center"><input class="go" name="go" type="submit" value="GO" /></div>
    </div></form>
    <div class="search_box">&raquo; <a href="#" class="advancesearch">Advance Search</a></div>
  </div>
 </div>

<div id="body_area">




  <div class="left">
  <br>
  <div ><a href="http://studentclub.al/card/index.php/admin/exportedToCSV">Shkarko Te Gjithe Listen!</a></div><br><br>
    <div class="left_menutop">Departamenti i Student Club Card<br></div>
	<div>Departamenti i Student Club Card</div><br>                                                                                                                                                                                                                       
<div>Genta Gjoni</div><br>
 <img src="http://studentclub.al/card/img/genta.jpg" width="100%" height="200px" /><br><br><br>
 <div>Lindi Koxhaj</div><br>
  <img src="http://studentclub.al/card/img/lindi.jpg" width="100%" height="150px" /><br><br><br>
  <br><br><br>
  <div><a href="<?php echo base_url();?>index.php/welcome/logout">Log out</a></div>
</div>

<form id="emrif" action="http://studentclub.al/card/index.php/admin/gjejemri" method="get">
<table>
<tr>
<div class="center_title">K&euml;rko Sipas Emrit</div></tr>
<tr><div class="center_title"><img src="http://studentclub.al/card/css/images1/menu_top.png" width="170px" /></div></tr>
<tr>
<td ><div class="center" >
Emri:</div></td><td><div class="center"><input name="emri" id="emri" type="text" /></div></td>
<td><div class="center"><input class="go1" name="go1" type="submit" value="K&euml;rko" /></div></td>
</tr>
</table>
</form>

<form id="mbiemrif" action="http://studentclub.al/card/index.php/admin/gjejmbiemri" method="get"><br>
<br><br><br><br>
<table>
<tr>
<div class="center_title" >K&euml;rko Sipas Mbiemrit</div></tr>
<tr><div class="center_title"><img src="http://studentclub.al/card/css/images1/menu_top.png" width="200px" /></div></tr>
<tr>
<td ><div class="center" width="100px">
Mbiemri:</div></td><td><div class="center"><input name="mbiemri" id="mbiemri" type="text" /></div></td>
<td><div class="center"><input class="go1" name="go2" type="submit" value="K&euml;rko" /></div></td>
</tr>
</table>
</form>

<form id="qytetif" action="http://studentclub.al/card/index.php/admin/gjejqytet" method="get"><br>
<br><br><br><br>
<table>
<tr>
<div class="center_title" >K&euml;rko Sipas Qytetit</div></tr>
<tr><div class="center_title"><img src="http://studentclub.al/card/css/images1/menu_top.png" width="200px" /></div></tr>
<tr>
<td><div class="center" >
Qyteti:</div></td><td><div class="center"><input name="qyteti" id="qyteti" type="text" /></div></td>
<td><div class="center"><input class="go1" name="go3" type="submit" value="K&euml;rko" /></div></td>
</tr>
</table>
</form>

<form id="shtetif" action="http://studentclub.al/card/index.php/admin/gjejshtet" method="get"><br>
<br><br><br><br>
<table>
<tr>
<div class="center_title" >K&euml;rko Sipas Shtetit</div></tr>
<tr><div class="center_title"><img src="http://studentclub.al/card/css/images1/menu_top.png" width="200px" /></div></tr>
<tr>
<td><div class="center" >
Shtetit:</div></td><td><div class="center"><input name="shteti" id="shteti" type="text" /></div></td>
<td><div class="center"><input class="go1" name="go4" type="submit" value="K&euml;rko" /></div></td>
</tr>
</table>
</form>

<form id="universitetif" action="http://studentclub.al/card/index.php/admin/gjejuniver" method="get"><br>
<br><br><br><br>
<table>
<tr>
<div class="center_title" >K&euml;rko Sipas Universitetit</div></tr>
<tr><div class="center_title"><img src="http://studentclub.al/card/css/images1/menu_top.png" width="200px" /></div></tr>
<tr>
<td><div class="center" >
Universiteti:</div></td><td><div class="center"><input name="universitet" id="universitet" type="text" /></div></td>
<td><div class="center"><input class="go1" name="go5" type="submit" value="K&euml;rko" /></div></td>
</tr>
</table>
</form>

</div>


</body>
</html>




