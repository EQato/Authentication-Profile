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



<?php echo form_open_multipart('welcome/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>










<div id="error">

&nbsp;

</div>



</div>





