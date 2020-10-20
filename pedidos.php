<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>CANTINA IFB</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!--<script type="text/javascript" src="javascript.js"></script>-->


    <link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="lib/owlcarousel2/dist/assets/owl.theme.default.min.css">

</head>

<body>
    <nav>

        <a href="index.php" id="inicio" class="amenu">INICIO</a>
        <a href="index.php" class="amenu">PROMOÇÕES</a>
        <a href="login.php" class="amenu">PEDIDOS</a>
		<a href="logoff.php" class="amenu">SAIR</a>
    </nav>
    <header>

        <img src="img/imgseg.png" alt="Banner da home page, traz fotos de comidas" />
    </header>


    <h1>PEDIDOS</h1>
    <p id="frase"> Escolha seu pedido: </p>


    <form name="pedidos" method="POST" action="carrinho.php">


        <p><label name="ham">LANCHES:</label>&nbsp;
            <select name="lanche" id="s1" class="form-control">
                <option value="#">Selecione</option>
                <option value="1">TAPIOCA R$6,00 </option>
                <option value="2">BOLO R$3,00</option>
                <option value="3">HAMBUGUER R$12,00</option>
                <option value="4">PIZZA FATIA R$5,00</option>
                <option value="5">SALGADO R$4,00</option>
                <option value="6">OMELETE R$6,00</option>
                <option value="7">BATATA FRITA R$5,00</option>
                <option value="8">PASTEL R$4,00</option>
                <option value="9">SANDUICHE R$5,00</option>
                <option value="10">HOT-DOG R$6,00</option>
            </select></p>



        <p><label name="beb">BEBIDAS: </label> &nbsp;
            <select name="bebida" id="s2" class="form-control">
                <option  value="#">Selecione</option>
                <option value="11">COCA-COLA LATA R$4,00</option>
                <option value="12">FANTA LARANJA LATA R$4,00</option>
                <option value="13">MILK-SHAKE R$10,00</option>
                <option value="14">SUCO R$5,00</option>
                <option value="15">LIMONADA R$8,00</option>
            </select></p>

            <input type="submit" value="FECHAR COMPRA">

</form>
    


    <footer>
        <p>Desenvolvido por <a href="https://www.facebook.com/natanael.batista.9" target="_blank">VisualTecBSB</a> -
            2019</p>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/efeitos.js"></script>
</body>

</html>