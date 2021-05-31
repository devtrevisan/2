<?php
namespace Classes;

class ClassCarrinho{

    public function __construct()
    {
        session_start();
    }

    //Add products
    public function addProducts(ClassProdutos $product)
    {
        if(isset($_SESSION['products']) && array_key_exists($product->getId(),$_SESSION['products'])){
            $_SESSION['products'][$product->getId()]['quantity']+=1;
        }else{
            $_SESSION['products'][$product->getId()]=[
                'id'=>$product->getId(),
                'description'=>$product->getDescription(),
                'price'=>$product->getPrice(),
                'quantity'=>1
            ];
        }
    }

    //Clear products
    public function clearProducts()
    {
        unset($_SESSION['products']);
    }

    //Get Quantity
    public function getQuantity()
    {
        $quantity=0;
        if(isset($_SESSION['products'])){
            foreach ($_SESSION['products'] as $product){
                $quantity+=$product['quantity'];
            }
        }
        return $quantity;
    }

    //List products
    public function listProducts()
    {
        $html="";
        if(isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $product) {
                $html .= "";
                $html .= "" . $product['id'] . "";
                $html .= "" . $product['description'] . "";
                $html .= "" . $product['quantity'] * $product['price'] . "";
                $html .= "";
            }
        }
        return $html;
    }

    //Total Amount
    public function getAmount()
    {
        $amount=0;
        if(isset($_SESSION['products'])){
            foreach ($_SESSION['products'] as $product){
                $amount+=$product['quantity']*$product['price'];
            }
        }
        return $amount;
    }
}