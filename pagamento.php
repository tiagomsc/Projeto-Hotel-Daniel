<link rel="stylesheet" href="css/stylepagamento.css">

<img src="img/img_principal.jpg" alt="">

<div class="conteudo">

    <h1>PAGAMENTO DA RESERVA</h1>
    <p>Aqui você irá pagar sua reserva!</p>
    <div class="form-pag">
        <form action="pagamento_concluido.php" method="POST">
            <div class="form-tot">
                <label>Dados do Cartão</label>
                <input type="text" name="nome" id="nome" placeholder=" Nome do titular">
                <input type="text" name="num_cartao" id="num_cartao" placeholder="1234 1234 1234 1234">
                <div class="form-met">
                    <input type="text" name="venc" id="venc" placeholder=" Vencimento">
                    <input type="text" name="cvc" id="cvc" placeholder=" CVC">
                </div>
            </div>
            <div class="form-tot">
                <label>Email</label>
                <input type="text" name="email" id="email" >
            </div>
            <div class="form-tot">
                <button class="button"><a href="pagamento_concluido.php">PAGAR</a></button>
                <button class="button"><a href="painel_privado.php">PAINEL PRIVADO</a></button>
            </div>
        </form>
    </div>
</div>