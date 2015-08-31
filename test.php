<form action="?code" method="post">
	<input type="text" name="email" />
	<input type="submit" value="send" />
</form>

<?php
$_subscribe=array();

$mail = @$_GET['email'];
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
		echo "<br> Anda Sudah aktif bro/sis";
	}
}
