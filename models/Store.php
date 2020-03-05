<?php
class Store extends model {

        public function getTemplateData() {
        	$dados = array();

        	$products = new Products();
                $categories = new Categories();
                $cart = new Cart();

        	$dados['categories'] = $categories->getList();

                $dados['widget_featured1'] = $products->getList(0, 5, array('featured'=>'1'), true);
                $dados['widget_featured2'] = $products->getList(0, 3, array('featured'=>'1'), true);
                $dados['widget_sale'] = $products->getList(0, 3, array('sale'=>'1'), true);
                $dados['widget_toprated'] = $products->getList(0, 3, array('toprated'=>'1'));

                $dados['cart_subtotal'] = $cart->getSubtotal();

                return $dados;
        }

}