<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$comando = "select * from tabelausuario where email = '" . $email . "' and senha = '".$senha."'";
if(mysql_num_rows($resultado) > 0){
}else{
}
?>