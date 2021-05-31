<?php
require("../lib/vendor/autoload.php");
$carrinho=new \Classes\ClassCarrinho();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento via API - Mercado Pago</title>
    <link rel="stylesheet" href="../lib/css/style.css">
</head>

<body>
<div class="banner">
    <img src="../img/mercado-pago.png" alt="Mercado Pago">
</div>

<div class="carrinho">
    Você tem <?php echo $carrinho->getQuantity(); ?> produto(s) no carrinho. <a href="https://paulistar.com.br/mercadopago/controllers/CarrinhoController.php?action=clear">Esvaziar Carrinho</a>
</div>

<div class="product__list">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody>
        <?php echo $carrinho->listProducts(); ?>
        </tbody>
    </table>
</div>

    <form action="/controllers/PaymentController.php" method="post" id="pay" name="pay" >
        <h3>Detalhe do comprador</h3>
     <div>
       <div>
         <label for="email">E-mail</label>
         <input type="email" id="email" name="email" value="test_user_92801501@testuser.com"  placeholder="your email"/>
       </div>
       <div>
         <label for="docType">Tipo de documento</label>
         <select id="docType" data-checkout="docType"></select>
       </div>
       <div>
         <label for="docNumber">Número do documento</label>
         <input type="text" id="docNumber" data-checkout="docNumber" placeholder="24283661813" />
       </div>
     </div> <br/>
   <h3>Detalhes do cartão</h3>
     <div>
       <div>
         <label for="cardholderName">Titular do cartão</label>
         <input type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" />
       </div>
       <div>
         <label for="">Data de vencimento</label>
         <div>
           <input type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="11" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
           <span class="date-separator">/</span>
           <input type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="25" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
         </div>
       </div>
       <div>
         <label for="cardNumber">Número do cartão</label>
         <input type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4357 6064 1502 1810" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
       </div>
		 <div class="brand"></div> 
       <div>
         <label for="securityCode">Código de segurança</label>
         <input type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
       </div>
       <div>
         <label for="installments">Parcelas</label>
         <select id="installments" class="form-control" name="installments"></select>
       </div>
	   <div>
        <input type="hidden" name="amount" id="amount" value="<?php echo $carrinho->getAmount(); ?>" />
        <input type="hidden" name="description" value="Website Dinâmico" />
        <input type="hidden" name="paymentMethodId" /><br/>
        <input type="submit" value="Pagar!" /> <br/><br/>
      </div>
    </form>
	
	<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
	<script src="../lib/js/javascript.js"></script>
</body>
</html>