<html>
<head>
<title>Upload Form</title>
</head>
<body>

<!-- <?php echo $error;?> -->

<?php echo form_open_multipart('C_CutiPegawai/do_upload');?>
<?php 
$pegawai = json_decode($hallo);
foreach ($pegawai as $tes) { ?>
	<?php echo $tes->id; ?>
<?php } ?>
<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>	
</html>