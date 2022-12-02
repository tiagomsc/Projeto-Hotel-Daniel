<?php

// Usei SELECT para obter todos os dados da tabela "reserva"

include("conectar_reserva.php");

$consu = "SELECT * FROM reserva";

$query = $conexao->query($consu) or die($mysqli-> error);

?>

<link rel="stylesheet" href="css/styleres_feita.css">

<img src="img/img_principal.jpg" alt="">
<div class="conteudo">
    <h1>RESERVAS FEITAS:</h1>
    <h3>Aqui você irá encontrar todas as reservas feitas por você!</h3>
    <table>
        <tr>
            <td class="bold">Check-in </td>
            <td class="bold">Check-out </td>
            <td class="bold">Quarto Básico </td>
            <td class="bold">Quarto VIP </td>
            <td class="bold">Quarto Premium </td>
            <td class="bold">Almoço </td>
        </tr>
        <!--O while vai executar ate a última linha do banco de dados da tabela reserva, depois vai parar-->
        <?php while($data = $query->fetch_array()) { ?>
        <tr>
            <td><?php echo $data["check_in"]; ?></td>
            <td><?php echo $data["check_out"]; ?></td>
            <td><?php echo $data["quarto1"]; ?></td>
            <td><?php echo $data["quarto2"]; ?></td>
            <td><?php echo $data["quarto3"]; ?></td>
            <td><?php echo $data["almoco"]; ?></td>
        </tr>
        <?php } ?>
    </table>

    <button class="button"><a href="index.php">CLIQUE AQUI PARA VOLTAR PARA PÁGINA INICIAL</a></button>
</div>