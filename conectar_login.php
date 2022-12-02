<?php

$conexao = mysqli_connect('localhost', 'root','','login'); 

$sql = "SELECT * FROM user WHERE usuario = '$_REQUEST[usuario]' AND senha = '$_REQUEST[senha]'";

$res = mysqli_query($conexao, $sql);

if(mysqli_num_rows($res) == 1){

    header('Location: painel_privado.php');
} else {
    
    echo "<br><br><br><br><br><br>Usuario ou senha incorretos.<br>";
    echo "<a href=?pg=form_login>Clique aqui para voltar para a tela de login.</a>";

}

?>