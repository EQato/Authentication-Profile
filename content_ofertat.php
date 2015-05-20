<?php $this->load->helper('url'); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Profili</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo base_url(); ?>style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <style>.loading img { display: none; background: url('<?php echo base_url(); ?>img/ajax-loader.gif'); }</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/ajaxfileupload.js"></script>
 </head>






<body>

<div id="wrapper">

<div id="header">
	<ul id="menu">
		<li><a target="_self" href="http://www.studentclub.al">home</a></li>
        <li><a target="_self" href="<?php echo base_url();?>index.php/welcome/logout">Dil</a></li>
        <li><a target="_self" href="#"></a></li>
		<li><a target="_self" href="#"></a></li>
		<li><a target="_self" href="#"></a></li>
	    <li></li>	
        <li style="margin-top:-0.9px;"><img style="height: 50px;" src="<?php echo base_url(); ?>img/logo.png"></img></li>
    
    </ul>
</div><!-- #header-->

	<div id="middle">
	<div id="container">
	<div id="content">
   <strong id="menu_title">Profili</strong> <br /><br />	
    <div id="profile">
        <div id="parashiko">
               <!-- <img src="" id="thumb"></img>!-->
        </div>
	    <table border="1">
<?php foreach($msg['ofertat'] as $listo):
     ?>  
      <tr>
        <td><?php echo $listo['id_b'];?></td>
        <td><?php echo $listo['permbajtja'];?></td>
        <td><?php echo $listo['finish_date'];?></td>
     </tr>
  
<?php endforeach;   ?>

</table>
    </div>


	</div><!-- #content-->
	</div><!-- #container-->

	<div class="sidebar" id="sideLeft">
	<strong id="menu_title">Llogaria ime</strong> <br />
	<div id="my_acount">
	<ul>
	<li><a href="#">Profili</a></li>
	<li><a href="#">Ofertat</a></li>
	<li><a href="#">Kerko sipas kategorise</a></li>
	<li><a href="#">Uljet</a></li>
	<li><a href="#">My Profile</a></li>
	<li><a href="#">Your Profile</a></li>
	<li><a href="#">His Profile</a></li>
	<li><a href="#">Our Profile</a></li>
	</ul>
	</div><!--my_account-->
	</div><!-- .sidebar#sideLeft -->

	<div class="sidebar" id="sideRight">
	<strong id="menu_title">Oferta</strong> <br />
	<div id="my_acount">
	Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga 
    Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga 
    Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga 
    Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga 
    Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga Ofertat e Fundit nga 
	</div><!--my_account-->
	</div><!-- .sidebar#sideRight -->
	</div><!-- #middle-->

	<div id="footer">
<br>
	<ul>
	<li><a href="#"> Rreth Nesh 	</a></li>
	<li><a href="#">	Policy		</a></li>
	<li><a href="#">	Contact		</a></li>
	<li><a href="#">	Privacy 	</a></li>
	<li><a href="#">	&copy; Keminet.net and Botart </a>	</li>
	</ul>
	</div><!-- #footer -->

</div><!-- #wrapper -->



