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
<form id="form1" name="form1" method="post" action="">
 <div id="topheader">
   <div class="logo"></div>
   <div class="menu_area"><a href="#" class="ideas">kerko  <span class="menu_text">Kerko Studentet</span></a> <a href="#" class="links">Oferta  <span class="menu_text">Oferta te reja</span></a> <a href="#" class="info">Info  <span class="menu_text">Informacione</span></a> <a href="#" class="works">Biznese<span class="menu_text"></span></a></div>
 </div>
 <div id="search_strip">
  <div class="freeregistration">
    <div class="registration"><a href="#" class="free">FREE</a> Registration </div>
  </div>
  <div class="search_area">
    <div class="search_box">
      <label>
      <input name="textfield" type="text" class="searchtextbox" />
      </label>
    </div>
    <div class="search_go">
      <div align="center"><a href="#" class="go">GO</a></div>
    </div>
    <div class="search_box">&raquo; <a href="#" class="advancesearch">Advance Search</a></div>
  </div>
 </div>
<div id="body_area">
  <div class="left">
    <div class="left_menutop"></div>
    <div class="left_menu_area">
      <div align="right"><a href="#" class="left_menu">Home</a><br />
          <a href="#" class="left_menu">About us</a><br />
          <a href="#" class="left_menu">Companies success</a><br />
          <a href="#" class="left_menu">Client testimonials</a><br />
          <a href="#" class="left_menu">Methods of Develop</a><br />
          <a href="#" class="left_menu">Questions</a><br />
          <a href="#" class="left_menu">Online Support</a><br />
          <a href="#" class="left_menu">Newsletter</a><br />
          <a href="#" class="left_menu">Subscribe info</a><br />
          <a href="#" class="left_menu">Oppotunities</a><br />
          <a href="#" class="left_menu">Current events</a><br />
        <a href="#" class="left_menu">Contact us</a></div>
    </div>
	<div class="comments_area">
    <div class="comment_head">
      <div align="right">Comments</div>
    </div>
    <div class="comments_text">
      
    </div>
    <div class="comments_text">
      
    </div>
    <div class="comments_text">
      
    </div></div>
	<div class="comments_area">
    <div class="Services_head">
      <div align="right">Services</div>
    </div>
    <div class="comments_text">
      
    </div>
    <div class="comments_text">
      
    </div>
    <div class="comments_text">
      
    </div>
    <div class="comments_text">
     
    </div></div>
  </div>
  <div class="midarea">
    
  </div>
  <div class="right">
    <div class="comments_area">
      <div class="events_head">Events</div>
      <div class="comments_text">
        <div align="left">On 12th January 2008 <br />
          <a href="#" class="comments_link">ourna tempus imperdiet llentes Pellentesque</a></div>
      </div>
      <div class="comments_text">
        <div align="left">On 14th January 2008 <br />
          <a href="#" class="comments_link">uctus pellentesque et erat nec </a></div>
      </div>
      <div class="comments_text">
        <div align="left">On 16th January 2008 <br />
          <a href="#" class="comments_link">vamus et magna et torpraesent accumsan</a></div>
      </div>
    </div>
    <div class="login_area">
      <div class="login_top"></div>
      <div class="login_bodyarea">
        <div class="right_head">
          <div align="center">Join Us For Membership</div>
        </div>
        <div class="right_textbox">
          <label>
          <input name="textfield2" type="text" class="righttextbox" value="Name" />
          </label>
        </div>
        <div class="right_textbox">
          <label>
          <input name="textfield22" type="password" class="righttextbox" value="Password" />
          </label>
        </div>
        <div class="right_text">
          <label>
          <input type="checkbox" name="checkbox" value="checkbox" />
          </label>
        Remember Me</div>
        <div class="right_text">
          <div align="center"><a href="#" class="login">Login</a></div>
        </div>
      </div>
      <div class="login_bottom"></div>
    </div>
    <div class="login_area">
      <div class="login_top"></div>
      <div class="login_bodyarea">
        <div class="right_head">
          <div align="center"><strong>Newsletter Signup </strong></div>
        </div>
        <div class="right_textbox">
          <label>
          <input name="textfield23" type="text" class="righttextbox" value="Email Id" />
          </label>
        </div>
        <div class="right_text">
          <div align="center"><a href="#" class="login">Signup</a></div>
        </div>
      </div>
      <div class="login_bottom"></div>
    </div>
    <div class="comments_area">
      <div class="newletter_head">Newslinks</div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Sed massa Integer tincidunt </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Dapibus nunc</a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Phasellus ac Nunc</a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Quisque rhoncus felis in </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Ultricies sollicitudin diam orci </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Mollis risusin rhoncus velit </a></div>
      </div>
      <div class="comments_text">
        <div align="left"><a href="#" class="news_link">Nulla ege</a></div>
      </div>
    </div>
  </div>
</div>
<div id="fotter">
  <div class="fotter_links">
    <div align="center"><a href="#" class="fotterlink">Home</a>  |  <a href="#" class="fotterlink">About Us</a>  |  <a href="#" class="fotterlink">Companies Success</a>  |  <a href="#" class="fotterlink">Client Testimonials</a>  |  <a href="#" class="fotterlink">Methods of Development</a>  |  <a href="#" class="fotterlink">Newsletter</a>  |  <a href="#" class="fotterlink">Subscribe Info</a>  |  <a href="#" class="fotterlink">Oppotunities</a>  |  <a href="#" class="fotterlink">Current Events</a>  |  <a href="#" class="fotterlink">Contact Us</a></div>
  </div>
  <div class="fotter_copyrights">
    <div align="center">&copy; Copyright Information Goes Here. All Rights Reserved</div>
  </div>
  <div class="fotter_validation">
    <div align="center"><a href="http://validator.w3.org/check?uri=referer" target="_blank" class="xhtml">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank" class="css">CSS</a><br />
    </div>
  </div>
  <div class="fotter_designed">
    <div align="center">Designed By : <a href="#" class="fotter_designedlink">Template World</a></div>
  </div>
</div>
</form>

</body>
</html>




