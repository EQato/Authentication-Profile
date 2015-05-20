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
    <script>
    $(document).ready(function () {
    refresh_files();
    });
   </script>
   
   <script type="text/javascript">
        $(function() {
        $('#foto').submit(function(e) {
          e.preventDefault();
          $.ajaxFileUpload({
             url         :'<?php echo base_url();?>index.php/welcome/photoupdate/',
             secureuri      :false,
             fileElementId  :'userfile',
             dataType    : 'json',
             
             success  : function (data, status)
             {
                if(data.status != 'error')
                {
                   $('#parashiko').html('<p>Po refreskohet fotoja...</p>');
                   refresh_files();
                   
                }
                alert(data.msg);
             }
          });
          return false;
       });
    });
    </script>
    
    <script type="text/javascript">
    function refresh_files()
    {
       $.get('<?php echo base_url();?>index.php/welcome/getfoto')
       .success(function (data){
          $('#parashiko').html(data);
       });
    }
    </script>
    
    </head>






<body>

<div id="wrapper">

<div id="header">
	<ul id="menu">
		<li><a target="_self" href="http://www.studentclub.al">Home</a></li>
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
    <?php $atribute  = array('id'=>'foto'); ?>
   <!-- <?php //echo form_open_multipart('welcome/photoupdate', $atribute);?> !-->
    <form method="post" action="" id="foto">
    <input type="file" name="userfile" id="userfile"></input>
    <input type="submit" value="Ndrysho">
	</form>
    
    
	
<div id="profile">
 <div id="parashiko">
               <!-- <img src="" id="thumb"></img>!-->
        </div>

<form action="<?php echo base_url(); ?>index.php/welcome/update" method="post">

<fieldset>
	<ul>
		<li>
			<label>
			<em><span class="required">*</span></em>
			Emri:
			</label><input id="" type="text" maxlength="200" value="<?php echo $name; ?>" name="name">
		</li>
		<li>
			<label>
			<em><span class="required">*</span></em>
			Mbiemri:
			</label><input id="" type="text" maxlength="200" value="<?php echo $surname; ?>" name="surname">
		</li>
			<li>
			<label>
			<em><span class="required">*</span></em>
			Email:
			</label><input id="" type="text" maxlength="20" value="<?php echo $email; ?>" name="email">
		</li>
           <li>
			<label>
			<em><span class="required"></span></em>
			 Universiteti:
			</label><input id="" type="text" maxlength="200" value="<?php echo $universiteti; ?>" name="universiteti">
	 	</li>
            <li>
			<label>
			<em><span class="required"></span></em>
			Fakulteti:
			</label><input id="" type="text" maxlength="200" value="<?php echo $faculty; ?>" name="faculty">
		</li>
        <li>
			<label>
			<em><span class="required"></span></em>
			Adresa:
			</label><input id="" type="text" maxlength="200" value="<?php echo $address; ?>" name="address">
		</li>
         <li>
			<label>
			<em><span class="required"></span></em>
			Datelindja:
			</label><input id="" type="text" maxlength="20" value="<?php echo $ditelindja; ?>" name="birth_date">
		</li>
         <li>
			<label>
			<em><span class="required"></span></em>
			Gjinia:
			</label><input id="" type="text" maxlength="20" value="<?php echo $gjinia; ?>" name="sex">
		</li>
         <li>
			<label>
			<em><span class="required"></span></em>
			Vendlindja:
			</label><input id="" type="text" maxlength="200" value="<?php echo $vendlindja; ?>" name="vendlindja">
		</li>
         <li>
			<label>
			<em><span class="required"></span></em>
			Celi:
			</label><input id="" type="text" maxlength="20" value="<?php echo $celi; ?>" name="telephone">
		</li>
         
        
        
        
		<li>				<input type="submit" value="Ndrysho" />				</li>	
	</ul>
	<fieldset>
	</div>
	</form>

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

</body>
</html>



