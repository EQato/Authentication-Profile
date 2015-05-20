<?php $this->load->helper('url'); ?>



<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Regjistrimi ne Student club</title>



<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/demo.css';?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<!--</a><script type="text/javascript" src="<?php echo base_url().'js/script.js';?>"></script> -->



</head>



<body>



<div id="div-regForm">



<div class="form-title">Login</div>

<div class="form-sub-title"><?php echo $msg; ?></div>



<form id="regForm" action="http://www.studentclub.al/card/index.php/welcome/login/" method="post">



<table>

  <tbody>
<tr><div style="font-size:18px;">Aplikuesit q&euml; d&euml;shirojn&euml; t&euml; pajisen me Visa Inspire Student Club Card t&euml; klikojn&euml; n&euml; linkun:
</br><p><a href="http://www.intesasanpaolobank.al/web/INSPIRE_STUDENT_CLUB.php" target="_blank"><img src="http://studentclub.al/visa_student.jpg" width="180px" height="90px;" style="padding-left:85px;"/></a></p>
<p style="padding-left:70px; padding-bottom:10px; padding-top:7px;"><a href="http://www.intesasanpaolobank.al/web/INSPIRE_STUDENT_CLUB.php" target="_blank">INSPIRE STUDENT CLUB</a></p></div>
  <tr>

    <td><label for="fname">Email:</label></td>

    <td><div class="input-container"><input name="email" id="fname" type="text" /></div></td>

  </tr>

  <tr>

    <td><label for="lname">Password:</label></td>

    <td><div class="input-container"><input name="pass" id="lname" type="password" /></div></td>

  </tr>

  

  <tr>

  <td>&nbsp;</td>

  <td><input type="submit" class="greenButton" value="Login" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />

</td>

  </tr>

  

  

  </tbody>

</table>



</form>



<div id="error">

&nbsp;

</div>

<table><td><tr>
<?php echo anchor('/welcome/forgot_password/', 'Keni harruar fjal&#235;kalimin?'); ?>
</tr></td></table>



</div>




