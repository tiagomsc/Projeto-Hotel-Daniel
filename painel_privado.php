<link rel="stylesheet" href="css/stylereserva.css">
<link rel="stylesheet" href="css/stylerodapereserva.css">

<img src="img/img_principal.jpg" alt="">

<div class="conteudo">
    <div class="painel_adm">
        <div class="back">
            <h1>Bem vindo ao Painel Privado!</h1>
            <p>Aqui você pode reservar os quartos do Hotel Unipê e saber um pouco mais sobre as nossas praias.</p>
            <p><b><a href="logout.php" class="button_lougot">Logout</a></b></p>
        </div>
    </div>

    <div class="inicio_praia">
        <p>O Hotel Unipê fica bem perto de dois tipos de praias, com areia limpa, mar azul e uma linda paisagem para você aproveitar com os amigos e família.</p>
        <p>Veja as fotos das praias:</p>
    </div>

    <div class="fotos_praia">
        <img src="img/img_praia4.jpg" alt="Foto Praia 4">
        <img src="img/img_praia2.jpg" alt="Foto Praia 2">
        <img src="img/img_praia1.jpg" alt="Foto Praia 1">
        <img src="img/img_praia3.jpg" alt="Foto Praia 3">
    </div>

    <div class="inicio_reserva">
        <p>Fazendo a reserva no Hotel Unipê você irá poder aproveitar as várias exclusividades inéditas e especiais dentro e fora do Hotel.</p>
        <p><b>Estamos te esperando!</b></p>
    </div>

    <div class="formulario">
        <fieldset>
            <form action="calculo_reserva.php" method="POST">
                <legend><b>RESERVA</b></legend>

                <br>

                <div class="input_form">
                    <label>Check-in:</label>
                    <input type="date" name="check-in" id="check-in">
                </div>

                <br>

                <div class="input_form">
                    <label>Check-out</label>
                    <input type="date" name="check-out" id="check-out">
                </div>

                <br>

                <div class="input_form">
                    <label>Quantidade total de dias:</label>
                    <input type="number" name="qtd_dias" id="qtd_dias">
                </div>

                <br>
                <br>

                <div class="input_form">
                    <legend><label>Escolha o quarto:</label></legend>
                    <br>
                    <label>Quarto Básico - R$200/noite
                    <input type="radio" name="quarto1" id="quarto1">
                    </label>
                    <br>
                    <br>
                    <label>Quarto VIP - R$400/noite
                    <input type="radio" name="quarto2" id="quarto2">
                    </label>
                    <br>
                    <br>
                    <label>Quarto Premium - R$600/noite
                    <input type="radio" name="quarto3" id="quarto3">
                    </label>
                </div>

                <br>
                <br>

                <div class="input_form">
                    <legend><label>Deseja incluir almoço?(R$50/dia)</label></legend>
                    <br>
                    <label>SIM
                    <input type="radio" name="op_sim" id="op_sim">
                    </label>
                    <br>
                    <br>
                    <label>NÃO
                    <input type="radio" name="op_nao" id="op_nao">
                    </label>

                </div>

                <br>

                <input type="submit" value="Reservar" class="button">
            </form>
        </fieldset>
    </div>

    
</div>
