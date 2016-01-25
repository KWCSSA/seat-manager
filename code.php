<?php
    class product {
        //properties
        var $size;
        var $cost;
        var $description;
        var $name;
        
        
        //constructor
        function __construct($size,$cost,$description,$name) {
            $this -> size = $size;
            $this -> cost = $cost;
            $this -> description = $description;
            $this -> name = $name;
        }    
    }
    
    class products {
        //googling how to set object variables...
        var $productsList = array();
        
        function addProduct($product) {
            array_push($this -> productsList, $product);
        }
        
        public function ListProducts() {
            $list = $this->productsList;
            
            for($i=0;$i<count($list);$i++){
                echo "Size: ".$list[$i]->size.", Cost: $".$list[$i]->cost.", Description: ".$list[$i]->description.", Name: ".$list[$i]->name."<br>";
            }
        }
    }
    
    $product1 = new product(7,14,"Red Shoes","Redz");
    $product2 = new product(8,18,"Blue Shoes","Bluez");
    $product3 = new product(9,23,"Green Shoes","Greenz");

    $productList1 = new products();
    $productList1 ->addProduct($product1);
    $productList1 ->addProduct($product2);
    $productList1 ->addProduct($product3);
    
    $productList1 ->ListProducts();

?>