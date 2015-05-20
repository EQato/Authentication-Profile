<?php $this->load->helper('url'); ?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" charset="windows-1250" />
<title>Student Card Club</title>
<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/stylep.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php echo base_url(); ?>style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <style>.loading img { display: none; background: url('<?php echo base_url(); ?>img/ajax-loader.gif'); }</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/ajaxfileupload.js"></script>
	  <script src="http://www.studentclub.al/card/application/views/js/prototype.js" type="text/javascript"></script>
  <script src="http://www.studentclub.al/card/application/views/js/scriptaculous.js" type="text/javascript"></script>
  <script src="http://www.studentclub.al/card/application/views/js/simple-slide-show.js" type="text/javascript"></script>
  <style>

#slide-images{
	position:relative;
	display:block;
	margin:0px;
	padding:0px;
	width:185px;
	height:265px;
	overflow:hidden;
}

#slide-images li{
	position:absolute;
	display:block;
	list-style-type:none;
	margin:0px;
	padding:0px;
	background-color:#FFFFFF;
}

#slide-images li img{
	display:block;
	background-color:#FFFFFF;
}

</style>
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
            <h4 align="center">Welcome <?php echo $name;?> &nbsp <?php echo $surname;?> </h4>
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
	  		<div class="midheading" style='height:50px;'>
          <h2>Njoftime</h2>
        </div>
		
		<?php
/******************************************************aplication DB*************************************************************/
	//Connect to mysql server
	$card = mysql_connect("localhost", "stclub_admcard", "ORi,?oaiCEqd");
	if(!$card) {
		die('Failed to connect to server: ' . mysql_error());
	}else{//echo "connected<br/>";
	}
	$carddb = mysql_select_db('stclub_studentclub');
	if(!$carddb) {
		die("Unable to select database");
	}else{//echo "DB selected<br/>";
	}
/*******************************************************************************************************************************/
	$pd = "SELECT * FROM personal_data ORDER BY faculty ASC";
	$pdretv = mysql_query($pd);
	if( !$pdretv ) {
  echo mysql_error();
}
/******************************************************website DB*************************************************************/
$link = mysql_connect("localhost", "stclub_jona", "jona12");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}else{//echo "connected<br/>";
	}

	//Select database		
	$db = mysql_select_db('stclub_studenti');
	if(!$db) {
		die("Unable to select database");
	}else{//echo "DB selected<br/>";
	}
/*******************************************************************************************************************************/	
	$sql = "SELECT * FROM wp_posts WHERE post_status='publish' ORDER BY post_date DESC";
	$retv = mysql_query($sql);
	if( !$retv ) {
  echo mysql_error();
}
while($pdres = mysql_fetch_array($pdretv)){	
	while($res = mysql_fetch_array($retv)){	
	if((strcmp($res ['faculty'], $faculty)==0)||(strcmp($res ['faculty'], 'All')==0)){
	if (($res['post_title'] != NULL)&&($res['post_content'] != NULL)){
		echo "&#x27ad;"." "."<a href='/studenti/?p=".$res['ID']."' target='_blank'>".$res['post_title']."</a>"."<br/><br/>";
}}
}}?>
<br/>
        <div class="midheading">
          <h2>Rreth nesh</h2>
        </div>

        <div class="midtxt"><span class="midboldtxt">Libri i Studentit dhe Student Club Card</span><br />
         Libri i Studentit dhe Student Club Card botohen sipas pervojes me te mire ne vendet e zhvilluara. Ato do te perdoren per nje afat kohor 1-vjeçar. Me kete karte studenti do te kete si perfitim te drejtperdrejte ulje reale gjate blerjeve ne te gjitha dyqanet dhe njesite e sherbimit qe kane reklamuar produktet e tyre ne faqet e librit.</div>
        <div id="comments">
          <div id="morecomments"><a href="#" class="morecomments">read more</a></div>
        </div>
        <div class="midheading">
          <h2>Projekti me i fundit<span class="projectheading"></span></h2>
        </div>
        <div id="projectbg">
          <div id="projectthumnail"></div>
          <div id="projecttxtblank">
            <div id="projecttxt"><span class="projectboldtxt">Nje karte ne tre shtete</span> <br />
            </div>
            <div id="moreproject"><a href="#" class="moreproject">read more</a></div>
          </div>
        </div>
        <div class="midheading">
          <h2>Qellimi jone kryesore</h2>
        </div>
        <div id="purposetxt">Me  kete karte studenti do te kete si perfitim te drejtperdrejte ulje reale gjate blerjeve ne te gjitha dyqanet dhe njesite e sherbimit qe kane reklamuar produktet e tyre ne faqet e librit.</div>
        <div id="purposenav">
          <ul>
            <li><a href="#" class="purposenav">Bizneset</a></li>
            <li><a href="#" class="purposenav">Qellimi</a></li>
          </ul>
          <ul>
          </ul>
        </div>
        <div class="midtxt"><span class="midboldtxt">Nje falenderim i vecante shkone per </span> studentet qe u angazhuan per studimin e tregut dhe bizneset qe moren pjese ne kete investim te perbashket.</div>
      </div>
<div id="contentright">
	<div class="rightheading">
          <h4>Bussines</h4>
        </div><br/><br/>
		

<ul id="slide-images">
	<li><a href='http://www.klinika-aks.com/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/aks.jpg"  /></a></li>
	<li><a href='http://www.fiore-restaurant.com' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/fiore.jpg" /></a></li>
	<li><a href='http://www.gjergji-kompjuter.com/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/gjergji.jpg"  /></a></li>
	<li><a href='http://www.iregister.al' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/iregister.jpg" /></a></li>
	<li><a href='http://www.bashkiakorce.gov.al' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/korce.jpg"  /></a></li>
	<li><a href='http://lavogliatirana.al/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/la_voglia.jpg" /></a></li>
	<li><a href='http://likometajonline.com/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/likometaj.jpg"  /></a></li>
	<li><a href='http://www.tbu.al/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/tbu.jpg" /></a></li>
	<li><a href='http://www.teg.al/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/teg.jpg"  /></a></li>
	<li><a href='http://www.friendstravel.al/' target="_blank"><img src="http://www.studentclub.al/card/application/views/images/travel.jpg" /></a></li>
</ul>
<br/>


       <!-- <div class="rightheading">
          <h4>Photo Gallery</h4>
        </div>-->
        <div id="galleryblank">
        <!--  <div id="rightpic"><a href="#" class="rightpic"></a></div>
          <div id="rightpic02"><a href="#" class="rightpic02"></a></div>
          <div id="rightpic03"><a href="#" class="rightpic03"></a></div>
          <div class="viewbutton"><a href="#" class="view"> view more</a></div>-->
          <div class="rightheading">
            <h4>Bizneset Pjesmarrese</h4>
          </div>
          <div class="righttxt"><span class="rightboldtxt">01. <a href="../../../studenti/?p=444" target="_blank">Kamping Livadh</a> </span></div>
          <div class="righttxt"><span class="rightboldtxt">02.  <a href="../../../studenti/?p=256" target="_blank">Interalbanian </a></span><br />
            </div>
          <div class="righttxt"><span class="rightboldtxt">03. <a href="../../../studenti/?p=253" target="_blank">Lavazza</a></span><br />
            </div>
          <div class="righttxt"><span class="rightboldtxt">04. <a href="../../../studenti/?p=250" target="_blank">Intimo Penti </a></span></div>
          <div class="righttxt"><span class="rightboldtxt">05. <a href="../../../studenti/?p=248" target="_blank">Primo </a></span></div>
          <div class="righttxt"><span class="rightboldtxt">06. <a href="../../../studenti/?p=75" target="_blank">Kinema Mellenium </a></span></div>
          <div class="righttxt"><span class="rightboldtxt">07. <a href="../../../studenti/?p=72" target="_blank">Libraria Adrion </a></span></div>
          <div class="viewbuttonbot"><a href="http://studentclub.al/studenti/?page_id=611" class="view"> read more</a></div>
        </div>
      </div>
</div>
<div id="footerbg">
  <div id="footerblank">
</div>
</div>
      </body>
</html>
