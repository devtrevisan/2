<?php
require("lib/vendor/autoload.php");
$carrinho=new \Classes\ClassCarrinho();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento via API - Mercado Pago</title>
    <link rel="stylesheet" href="lib/css/style.css">
</head>

<body>
    <div class="banner">
        <img src="img/mercado-pago.png" alt="Mercado Pago">
    </div>

    <div class="carrinho">
        Você tem <?php echo $carrinho->getQuantity(); ?> produto(s) no carrinho. <a href="https://mercado-pago-paulistar.herokuapp.com/controllers/CarrinhoController.php?action=clear">Esvaziar Carrinho</a>
    </div>

    <div class="product">
        <div class="product_title">Pen Drive</div>
        <div class="product_image"><img src="img/pendrive.jpg" alt=""></div>
        <div class="product_desc">Pen Drive de 16gb</div>
        <div class="product_btn"><a href="https://mercado-pago-paulistar.herokuapp.com/controllers/CarrinhoController.php?action=add&product=pendrive&price=10&id=9485906696">Adicionar ao Carrinho</a></div>
    </div>


    <div class="product">
        <div class="product_title">Celular</div>
        <div class="product_image"><img src="img/celular.jpg" alt=""></div>
        <div class="product_desc">Celular Sony</div>
        <div class="product_btn"><a  href="https://mercado-pago-paulistar.herokuapp.com/controllers/CarrinhoController.php?action=add&product=celular&price=200&id=1334124134">Adicionar ao Carrinho</a></div>
    </div>

</body>
</html>