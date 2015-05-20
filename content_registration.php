<?php $this->load->helper('url'); ?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<title>Regjistrimi ne Student club</title>



<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/demo.css';?>" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/ajaxupload.js"></script>

 
  
<!--</a><script type="text/javascript" src="<?php echo base_url().'js/script.js';?>"></script> -->



<style type="text/css">

	@import "<?php echo base_url();?>css/jquery.datepick.css";

	.datepick-month-header select, .datepick-month-header input{

		width:72px;

	}

	#birthdate{

	   margin-left: -212px;

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

				$('#birthdate').datepick({ 

    					defaultDate: new Date(), 

						showOnFocus: false,

						defaultDate: new Date(), 

						selectDefaultDate: true,

						showTrigger: '<img style="position: relative; left: -18px; top: 2px;" class="trigger datepick-trigger" id="img_datepicker_id" alt="Popup" src="<?php echo base_url()?>css/images/calendar.png">'
              
  			    
						
						
				});
				

	           
	

});





</script>



<body >



<div id="div-regForm">



<div class="form-title">Student Club</div>

<div class="form-sub-title"><?php echo $msg; ?></div>


<?php echo form_open_multipart('welcome/register');?>

</br><label><center><font size="3" face="arial" color="#37375F"><b>KUJDES :DUHET FOTOGRAFI DOKUMENTI</b>!!!</font></center></label></br></br>


<table>

  <tbody>

  <tr>

    <td><label for="fname">Emri:</label></td>

    <td><div class="input-container"><input name="fname" id="fname" type="text" /></div></td>

  </tr>

  <tr>

    <td><label for="lname">Mbiemri:</label></td>

    <td><div class="input-container"><input name="lname" id="lname" type="text" /></div></td>

  </tr>

  <tr>

    <td><label for="email">Email Juaj:</label></td>

    <td><div class="input-container"><input name="email" id="email" type="text" /></div></td>

  </tr>

  <tr>

    <td><label for="pass">Password:</label></td>

    <td><div class="input-container"><input name="pass" id="pass" type="password" /></div></td>

  </tr>
  <tr>

    <td><label for="repass">Konfirmo Passwordin:</label></td>

    <td><div class="input-container"><input name="repass" id="repass" type="password" /></div></td>

  </tr>
  <tr>






    <td><label for="sex-select">Une jam:</label></td>

    <td>

    <div class="input-container">

    <select name="sex-select" id="sex-select">

    <option value="0">Gjinia:</option>

    <option value="1">Mashkull</option>

    <option value="2">Femer</option>

    </select>

    </div>

    </td>
    
  </tr>

    <tr>

    <td><label for="university">Universiteti / Shkolle e Mesme :</label></td>

    <td><div class="input-container"><input name="university" id="university" type="text" /></div></td>    

    </tr>
    
     <tr>

    <td><label for="university">Fakulteti:</label></td>

    <td><div class="input-container"><input name="fakulteti" id="fakulteti" type="text"  /></div></td>    

    </tr>
 <tr>

    <td><label for="university">Qyteti:</label></td>

    <td><div class="input-container"><input name="qyteti" id="qyteti" type="text" style="color: #BDBDBD" value="Qyteti ku studion..." onfocus="if(this.value=='Qyteti ku studion...'){ this.style.color='#000'; this.value='';}" onblur="if(this.value==''){ this.style.color='#D8D8D8'; this.value='Qyteti ku studion...'}" /></div></td>    

    </tr>

 <tr>

    <td><label for="university">Shteti:</label></td>

    <td><div class="input-container"><input name="shteti" id="shteti" type="text" style="color: #BDBDBD" value="Shteti ku studion..." onfocus="if(this.value=='Shteti ku studion...'){ this.style.color='#000'; this.value='';}" onblur="if(this.value==''){ this.style.color='#D8D8D8'; this.value='Shteti ku studion...'}" /></div></td>    

    </tr>





  <tr>

    <td><label>Datelindja :</label></td>

    <td>

    <div class="input-container">

    <td><div class="input-container"><input name="birthdate" id="birthdate" type="text" value="dd/mm/yyyy" /></div></td>

    </div>

    </td>

    </tr>
   
	 <tr>

    <td><label for="university">Nr.Celularit:</label></td>

    <td><div class="input-container"><input name="cel" id="cel" type="bigint" style="color: #BDBDBD" value="Vendosni prefixin..." onfocus="if(this.value=='Vendosni prefixin...'){ this.style.color='#000'; this.value='';}" onblur="if(this.value==''){ this.style.color='#D8D8D8'; this.value='Vendosni prefixin...'}" /></div></td>    

    </tr>
    <td><label>Ngarko foton :</label></td>

    <td>

    <div class="input-container">

    <td><div class="input-container"><input style="margin-left: -208px;" name="userfile" id="userfile" type="file" /></div></td>
   
    </div>

    </td>

    </tr>
    

  <tr>

  <td>&nbsp;</td>

  <td><input type="submit" class="greenButton" value="Regjistrohu" /><img id="loading" src="img/ajax-loader.gif" alt="working.." />

</td>

  </tr>

  

  </tbody>

</table>



</form>



<div id="error">



</div>



</div>





