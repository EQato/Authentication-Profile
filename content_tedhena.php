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
<div id="contentmid">
     <div id="profile" width="500px">
 

<fieldset>
<table style="font-family: Arial; font-size: 20px; font-weight: normal; color: #464646;">
	
		<tr >
			<td><label >
			<em></em>
			<b><i>Emri:</i></b></label></td>
			<td><?php echo $name; ?></td></tr>
		
		
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Mbiemri:</i></b>
			</label></td><td><?php echo $surname; ?></td></tr>
		
			
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Email:</i></b>
			</label></td><td><?php echo $email; ?></td></tr>
		
         
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			 <b><i>Universiteti:</i></b>
			</label></td><td><?php echo $universiteti; ?></td></tr>
	 	
           
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Fakulteti:</i></b>
			</label></td><td><?php echo $faculty; ?></td></tr>
		
      
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Adresa:</i></b>
			</label></td><td><?php echo $address; ?></td></tr>
		
        
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Datelindja:</i></b>
			</label></td><td><?php echo $ditelindja; ?></td></tr>
		
        
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Gjinia:</i></b>
			</label></td><td><?php echo $gjinia; ?></td></tr>
		
        
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Vendlindja:</i></b>
			</label></td><td><?php echo $vendlindja; ?></td></tr>
		
       
			<tr>
			<td><label>
			<em><span class="required"></span></em>
			<b><i>Celi:</i></b>
			</label></td><td><?php echo $celi; ?></td></tr>

<tr><td style="color:#f4e7bd">Nese doni te ndryshoni te dhenat tuaja klikoni ketu.</td></tr>
        </table>
        
        
		<table>				<tr>
		<td>Nese doni te ndryshoni te dhenat tuaja klikoni ketu. <a href="<?php echo base_url();?>index.php/welcome/profili2">Settings</a></td>	</tr>			
	</table>
	<fieldset>
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
