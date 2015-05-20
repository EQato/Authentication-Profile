<?php $this->load->helper('url'); ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Buissnes</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo base_url(); ?>style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <style>.loading img { display: none; background: url('<?php echo base_url(); ?>img/ajax-loader.gif'); }</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/ajaxfileupload.js"></script>
    <style type="text/css">

	@import "<?php echo base_url();?>css/jquery.datepick.css";

	.datepick-month-header select, .datepick-month-header input{

		width:72px;

	}

	#birthdate{

	   margin-left: -217px;

	}

	.datepick-month-header, .datepick-month-header select, .datepick-month-header input{

		font-weight:normal;

		margin:0px;

	}

</style>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.datepick.js"></script>



</head>

<script type="text/javascript">

jQuery(document).ready(function(){

	$.datepick.regional['shqip'] = {

					monthNames: ['Janar','Shkurt','Mars','Prill','Maj','Qershor', 'Korrik','Gusht','Shtator','Tetor','Nëntor','Dhjetor'],

					monthNamesShort: ['Jan','Shk','Mar','Pri','Maj','Qer', 'Kor','Gus','Sht','Tet','Nën','Dhj'],

					dayNames: ['E Diel','E Hënë','E Martë','E Mërkurë','E Enjte','E Premte','E Shtune'],

					dayNamesShort: ['Di','Hë','Ma','Më','En','Pr','Sh'],

					dayNamesMin: ['Di','He','Ma','Me','En','Pr','Sh'],

					dateFormat: 'dd/mm/yyyy', 

					firstDay: 1,

					renderer: $.datepick.defaultRenderer,

					prevText: '&#x3c;&#x3c;', 

					prevStatus: 'Trego muajin e fundit',

					prevJumpText: '&#x3c;&#x3c;', 

					prevJumpStatus: '',

					nextText: '&#x3e;&#x3e;', 

					nextStatus: 'trego muajin tjetër',

					nextJumpText: '&#x3e;&#x3e;', 

					nextJumpStatus: '',

					currentText: 'sot', 

					currentStatus: '',

					todayText: 'sot', 

					todayStatus: '',

					clearText: 'Fshije', 

					clearStatus: 'Fshije datën aktuale',

					closeText: 'Mbylle', 

					closeStatus: 'Mbylle pa ndryshime',

					yearStatus: 'Trego tjetër vit', 

					monthStatus: 'Trego muajin pasardhës',

					weekText: 'Ja', 

					weekStatus: 'Java e muajit',

					dayStatus: '\'Zgjedh\' D, M d', 

					defaultStatus: 'Zgjedhe një datë',

					isRTL: false

				};

				$.datepick.setDefaults($.datepick.regional['shqip']);

				$('#finish_date').datepick({ 

    					defaultDate: new Date(), 

						showOnFocus: false,

						defaultDate: new Date(), 

						selectDefaultDate: true,

						showTrigger: '<img style="position: relative; left: -18px; top: 2px;" class="trigger datepick-trigger" id="img_datepicker_id" alt="Popup" src="<?php echo base_url()?>css/images/calendar.png">'

				});

	

	

});





</script>
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

      <table>

  <tbody>
  
    <?php 
    if(isset($msg))
    echo $msg; ?>
    <?php if ($tipi == 1){ ?>
    <?php echo form_open('admin/addbuissness'); ?>
 
     <tr>

    <td><label for="name">Name:</label></td>

    <td><div class="input-container"><input name="name" id="name" type="text" /></div></td>

    </tr>
  
  <tr>

    <td><label for="fname">Email:</label></td>

    <td><div class="input-container"><input name="email" id="fname" type="text" /></div></td>

  </tr>

  <tr>

    <td><label for="lname">Password:</label></td>

    <td><div class="input-container"><input name="pass" id="lname" type="password" /></div></td>

  </tr>

    <tr>

    <td><label for="personale">Personale:</label></td>

    <td><div class="input-container"><textarea name="personale"></textarea></div></td>

  </tr>
  

  <tr>

  <td>&nbsp;</td>

  <td><input type="submit" class="greenButton" value="Regjistroje" />

    </td>

  </tr>

<?php }elseif($tipi == 2){ ?> <!-- shto oferte-->
     <?php echo form_open('admin/addoffer'); ?>
    
      <tr>

    <td><label for="id_b">Biznesi qe leshon oferten:</label></td>

    <td><div class="input-container">
    <select name="id_b">
    <?php foreach($prova['biz'] as $biznesname):?>
    <option value="<?php echo $biznesname['id'];?>"><?php echo $biznesname['name'];?></option>
    <?php endforeach ; ?>
    </select>
    </div></td>

    </tr>   
       
    <tr>

    <td><label for="offer">Oferta:</label></td>

    <td><div class="input-container"><textarea name="offer" id="offer" type="text" /></textarea></div></td>

  </tr>

  <tr>

    <td><label for="finish_date">Data e mbarimit te ofertes:</label></td>

    <td><div class="input-container"><input name="finish_date" id="finish_date" type="text" /></div></td>

  </tr>

    <tr>

    <td><label for="personale">Personale:</label></td>

    <td><div class="input-container"><textarea name="personale" id="personale"></textarea></div></td>

  </tr>
  

  <tr>

  <td>&nbsp;</td>

  <td><input type="submit" class="greenButton" value="Regjistroje" />

    </td>

  </tr>
 <?php } ?>

  </tbody>
</form>
</table>
	</div>


	</div><!-- #content-->
	</div><!-- #container-->

	<div class="sidebar" id="sideLeft">
	<strong id="menu_title">Llogaria ime</strong> <br />
	<div id="my_acount">
	<ul>
	<li><a href="<?php echo base_url();?>index.php/admin/addbuissness">Shto biznes</a></li>
	<li><a href="<?php echo base_url();?>index.php/admin/addoffer">Shto ofertat</a></li>

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



