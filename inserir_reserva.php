<?php

include_once('conectar_reserva.php');

$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
if(isset($_POST['quarto1'])){
    $quarto1 = $_POST['quarto1'];
}

if(isset($_POST['quarto2'])){
    $quarto2 = $_POST['quarto2'];
}

if(isset($_POST['quarto3'])){
    $quarto3 = $_POST['quarto3'];
}

if(isset($_POST['op_sim'])){
    $almoco = $_POST['op_sim'];
}

if(isset($_POST['quarto1'])){
    if(isset($_POST['op_sim'])){
        $rese = "INSERT INTO reserva(check_in, check_out, quarto1, almoco) VALUES ('$check_in', '$check_out', '$quarto1', '$almoco')";
    } else {
        $rese = "INSERT INTO reserva(check_in, check_out, quarto1, almoco) VALUES ('$check_in', '$check_out', '$quarto1', '')";
    }
}

if(isset($_POST['quarto2'])){
    if(isset($_POST['op_sim'])){
        $rese = "INSERT INTO reserva(check_in, check_out, quarto2, almoco) VALUES ('$check_in', '$check_out', '$quarto2', '$almoco')";
    } else {
        $rese = "INSERT INTO reserva(check_in, check_out, quarto2, almoco) VALUES ('$check_in', '$check_out', '$quarto2', '')";
    }
}

if(isset($_POST['quarto3'])){
    if(isset($_POST['op_sim'])){
        $rese = "INSERT INTO reserva(check_in, check_out, quarto3, almoco) VALUES ('$check_in', '$check_out', '$quarto3', '$almoco')";
    } else {
        $rese = "INSERT INTO reserva(check_in, check_out, quarto3, almoco) VALUES ('$check_in', '$check_out', '$quarto3', '')";
    }
}

$query_rese = mysqli_query($conexao, $rese);

include_once("calculo_reserva.php");

?>

