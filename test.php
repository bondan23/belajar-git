<?php

//jika di tambahin @ maka error tidak akan di tampilkan


function validemail($mail)
{
	define('valid','bondan@bondan.com');
	
	if($mail !== valid)
	{
		return FALSE;
	}
	else 
	{
		return TRUE;
	}
}
/*
if(@$_POST['email'])
{
	$email = $_POST['email'];
	$check = validemail($email);

	if(!$check)
	{
		echo "Salah Email";
	}
	else
	{
		echo "Hallo Bondan";
	}
}
*/


?>
<form action="?code" method="post">
	<input type="text" name="email" />
	<input type="submit" value="send" />
</form>

<?php
$_subscribe=array();

$mail = @$_REQUEST['email'];
$code = @$_GET['code'];

$_subscribe["confirmation_code"] = md5("code".$mail);

$a = $_subscribe["confirmation_code"];


if(isset($code))
{
	//kirim code konfirmasi dengan code hasil random yang di tampung di $data['activation_code'];
	echo "<a href='?code=".$_subscribe["confirmation_code"]."&email=".$mail."'>";
	echo "Konfirmasi Disini";
	echo "</a>";
}
//jika ada parameter ?code
if(isset($_GET['code']))
{
	if($a === $code)
	{
		echo "<br> Anda Sudah aktif";
	}
}
