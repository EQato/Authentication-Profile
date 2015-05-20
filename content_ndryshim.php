<?php $this->load->helper('url'); ?>


<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Student Card Club</title>
<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/stylep.css" type="text/css" media="screen, projection" />
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
             url         :'<?php echo base_url(); ?>index.php/welcome/photoupdate/',
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
       $.get('<?php echo base_url(); ?>index.php/welcome/getfoto')
       .success(function (data){
          $('#parashiko').html(data);
       });
    }
    </script>
    
    
</head>

<body>
<div id="headerbg">
  <div id="headerblank">
    <div id="header">
      <div id="menu">
        
      </div>
<img src="<?php echo $foto;?>" style="margin-top:110px; background-color:#fff; margin-left:55px; -webkit-box-shadow: 7px 7px 20px rgba(50, 50, 50, 0.53);
-moz-box-shadow: 7px 7px 20px rgba(50, 50, 50, 0.53);
box-shadow: 7px 7px 20px rgba(50, 50, 50, 0.53);" width="200px" height="200px" align="left"/>
      <div id="login" height="80px">
        <div id="logintxtblank">

          <div id="loginheading" >
            <h4 align="center">Profili juaj</h4>
          </div>
         
         
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contentbg">
  <div id="contentblank">
    <div id="content">
      <div id="contentleft">
        
        <div id="leftnav">
          <ul>
		  <li><a href="<?php echo base_url(); ?>index.php/welcome/profili0" class="leftnav">Home</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/welcome/profili1" class="leftnav">Profili im</a></li>
            <li><a href="#" class="leftnav">Ofertat</a></li>
            <li><a href="#" class="leftnav">Uljet </a></li>
            <li><a href="<?php echo base_url();?>index.php/welcome/logout" class="leftnav">Log out</a></li>
          </ul>
        </div>
      </div>
<div id="contentmid" width="469px">
     <div id="profile" width="469px">
	 
<form method="post" action="<?php echo base_url(); ?>index.php/welcome/photoupdate" id="foto">
    <input type="file" name="userfile" id="userfile"></input><br />
    <input type="submit" value="Ndrysho">
	</form>
 
<form action="<?php echo base_url(); ?>index.php/welcome/update" method="post" width="469px">

<fieldset>
<table style="font-family: Arial; font-size: 20px; font-weight: normal; color: #464646;">
	
		<tr >
			<td>
			<label>
			<b><i><em><span class="required">*</span></em>
			Emri:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $name; ?>" name="name">
		</td></tr>
		<tr >
			<td>
			<label><b><i>
			<em><span class="required">*</span></em>
			Mbiemri:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $surname; ?>" name="surname">
		</td></tr>
			<tr >
			<td>
			<label><b><i>
			<em><span class="required">*</span></em>
			Email:
			</label></i></b></td><td><input id="" type="text" maxlength="20" value="<?php echo $email; ?>" name="email">
	</td></tr>
           <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			 Universiteti:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $universiteti; ?>" name="universiteti">
	</td></tr>
           <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Fakulteti:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $faculty; ?>" name="faculty">
	</td></tr>
       <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Adresa:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $address; ?>" name="address">
		</td></tr>
        <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Datelindja:
			</label></i></b></td><td><input id="" type="text" maxlength="20" value="<?php echo $ditelindja; ?>" name="birth_date">
		</td></tr>
        <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Gjinia:
			</label></i></b></td><td><input id="" type="text" maxlength="20" value="<?php echo $gjinia; ?>" name="sex">
	</td></tr>
         <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Vendlindja:
			</label></i></b></td><td><input id="" type="text" maxlength="200" value="<?php echo $vendlindja; ?>" name="vendlindja">
	</td></tr>
         <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Celi:
			</label></i></b></td><td><input id="" type="text" maxlength="20" value="<?php echo $celi; ?>" name="telephone">
	</td></tr>
        <tr >
			<td>
			<label><b><i>
			<em><span class="required"></span></em>
			Barcodi:
			</label></i></b></td><td><img src="<?php echo base_url().$barcode; ?>"></img>
	</td></tr>
        
        
        
		 <tr >
			<td>				<input type="submit" value="Ndrysho" />				</td></tr>	
</table>
	<fieldset>
	
	</form>
</div>


	
	</div><!-- #container-->
 
<div id="contentright">
        <div class="rightheading">
          <h4>Photo Gallery</h4>
        </div>
        <div id="galleryblank">
          <div id="rightpic"><a href="#" class="rightpic"></a></div>
          <div id="rightpic02"><a href="#" class="rightpic02"></a></div>
          <div id="rightpic03"><a href="#" class="rightpic03"></a></div>
          <div class="viewbutton"><a href="#" class="view"> view more</a></div>
          <div class="rightheading">
            <h4>Bizneset Pjesmarrese</h4>
          </div>
          <div class="righttxt"><span class="rightboldtxt">01. Biznes 1 </span></div>
          <div class="righttxt"><span class="rightboldtxt">02.  Biznesi 2 </span><br />
            </div>
          <div class="righttxt"><span class="rightboldtxt">03. Biznesi 3</span><br />
            </div>
          <div class="righttxt"><span class="rightboldtxt">04. Biznesi 4 </span></div>
          <div class="viewbuttonbot"><a href="#" class="view"> read more</a></div>
        </div>
      </div>
</div>
<div id="footerbg">
  <div id="footerblank">
</div>
</div>
      </body>
</html>
