<?php require_once('encript/encription.php'); ?>

<?php 

$pswd = "gihan";
echo $pswd;
echo "<br>";

$epswd = encript($pswd);
echo $epswd;
echo "<br>";

$dpswd = decript($epswd);
echo $dpswd;

?>