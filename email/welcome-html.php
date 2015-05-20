<html>
<head><title>Miresevini ne <a href="http://studentclub.al/">Student Club Card!</a></title></head>
<body>
<div style="max-width: 800px; margin: 0; padding: 30px 0;">
<table width="80%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="5%"></td>
<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"></h2>
Faleminderit per regjistrimin ne faqen tone. Poshte keni listen e te dhenave tuaja.<br />
Per te hapur profilin tuaj, ju lutem klikoni ne linkun me poshte:<br />
<br />
<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="<?php echo site_url('/welcome/profili/'); ?>" style="color: #3366cc;">Go to LOGIN now!</a></b></big><br />
<br />
Nese linku nuk punon, kopjoni url me poshte ne browserin tuaj:<br />
<nobr><a href="<?php echo site_url('/welcome/profili/'); ?>" style="color: #3366cc;"><?php echo site_url('/welcome/profili/'); ?></a></nobr><br />
<br />
<br />
<?php if (strlen($name) > 0) { ?>Emri juaj: <?php echo $name; ?><br /><?php } ?>
Mbiemri juaj: <?php echo $surname; ?><br />
Adresa emailit tuaj: <?php echo $email; ?><br />
Passwordi juaj: <?php echo $password; ?><br /> 
<br />
<br />
Faleminderit!<br />
Student Card Club
</td>
</tr>
</table>
</div>
</body>
</html>