<link rel="stylesheet" href="css/stylecalculo.css">

<img src="img/img_principal.jpg" alt="">
<div class="conteudo">
    <h1>INFORMAÇÕES FINAIS DA RESERVA</h1>
    <h2>Dados sobre a reserva:</h2>
    <?php
    
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
    $qtd = $_POST['qtd_dias'];
    
    // Calculo da parte do quarto
    if(isset($_POST['quarto1'])){
        $calculo = $qtd * 200;
        $qt = 'Quarto Básico';
    } else if(isset($_POST['quarto2'])){
        $calculo = $qtd * 400;
        $qt = 'Quarto VIP';
    } else if(isset($_POST['quarto3'])){
        $calculo = $qtd * 600;
        $qt = 'Quarto Premium';
    }
    
    // Calculo da parte do almoço
    if(isset($_POST['op_sim'])){
        $calculo = $calculo + ($qtd * 50);
        $almoco = 'Almoço INCLUSO';
    } else {
        $almoco = 'Almoço NÃO INCLUSO';
    }

    ?>
    
    <p>Check-in: <?=$check_in?></p>

    <p>Check-out: <?=$check_out?></p>

    <p><?=$qt?></p>

    <p><?=$almoco?></p>
        

    <h2>Preço final:</h2>
    <p>A hospedagem final ficou, durante <?=$qtd?> dias, R$<?=$calculo?></p>

    <button class="btn_pag"><a href="pagamento.php">PAGAMENTO</a></button>
    <br>
    <button class="btn_pag"><a href="painel_privado.php">VOLTAR PARA MODIFICAR A RESERVA</a></button>
</div>