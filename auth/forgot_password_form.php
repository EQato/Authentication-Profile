
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<title>Regjistrimi ne Student club</title>



<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/demo.css';?>" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ajaxupload.js"></script>
<!--</a><script type="text/javascript" src="<?php echo base_url().'js/script.js';?>"></script> -->

<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<body>
<div id="div-regForm">
<div class="form-title">Student Club Card</div>
<div class="form-sub-title">Ju lutem shkruani adresen e emailit me te cilen jeni regjistruar per ti bere reset passwordit tuaj</div>

<?php echo form_open($this->uri->uri_string()); ?>
<div>
<table>
	<tr>
		<td><?php echo form_label($login_label, $login['id']); ?></td>
		<td><?php echo form_input($login); ?></td>
		<td style="color: red;"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
	</tr>
</table>
</div>

<p align="center"><br>
<?php echo form_submit('reset', 'Get a new password'); ?></p>

<?php echo form_close(); ?>
</div>
</body>