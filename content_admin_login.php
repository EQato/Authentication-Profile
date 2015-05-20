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

<div class="form-sub-title"><?php if(isset($msg))
                                    echo $msg;
                                    else
                                    echo 'Identifikohuni ju lutem serish sepse te dhenat tuaja jane ruajtur si admin!';
 ?></div>

<?php echo form_open('admin/admin_login') ?>

<!--<form id="regForm" action="admin/admin_login" method="post">-->



<table>

  <tbody>

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



</div>





