<?php
// ======================================================================= Market
class Market{
    public $id;
    public $name;
    public $location;
    function set_market($id, $name, $location){
        return $data = [
            'id' => $this->id = $id,
            'name' => $this->name = $name,
            'location' => $this->location = $location
        ];
    }
}
$market = new Market();
$markets = [
    $market->set_market(1, "Osiyo market", "Fergana"),
    $market->set_market(2, "Mini market", "Andijan"),
    $market->set_market(3, "Makro market", "Namangan"),
];


// ======================================================================= Categories
class Category extends Market{
    function set_category($id, $name){
        return $data = [
            'id' => $this->id = $id,
            'name' => $this->name = $name
        ];
    }
}
$category = new Category();
$categories = [
    $category->set_category(1, "Fruicts"),
    $category->set_category(2, "Vegetables"),
    $category->set_category(3, "Phones"),
];


// ======================================================================= Products
class Product extends Category{
    public $id;
    public $market_id;
    public $category_id;
    public $market_name;
    public $category_name;
    public $color;
    public $price;
    function set_product($id, $market_id, $category_id, $name, $color, $price){
        return $data = [
            'id' => $this->id = $id,
            'market_id' => $this->market_id = $market_id,
            'category_id' => $this->category_id = $category_id,
            'name' => $this->name = $name,
            'color' => $this->color = $color,
            'price' => $this->price = $price,
        ];
    }
}
$product = new Product();
$products = [
    $product->set_product(1, 1, 1, "Apple", "red", 6000),
    $product->set_product(2, 1, 1, "Banana", "yellow", 4000),
    $product->set_product(3, 2, 2, "Onion", "orange", 12000),
    $product->set_product(4, 1, 2, "Potatoes", "brown", 6500),
    $product->set_product(5, 3, 3, "Samsung S23", "black", 1000),
    $product->set_product(6, 3, 3, "MI NOTE11", "white", 350),
];


// |||||||||||||||||||||||||||||||||||||||
foreach($markets as $market_index => $market_data){
    foreach($categories as $category_data){
        foreach($products as $index => $product_data){
            if($product_data['category_id'] == $category_data['id']){
                $products[$index]['category_name'] = $category_data['name'];
            }
            if($product_data['market_id'] == $market_data['id']){
                $products[$index]['market_name'] = $market_data['name'];
                $markets[$market_index]['market_products'] = $product_data;
            }
        }
    }
}

// echo "<pre>";
// print_r($markets);
// echo "</pre>";


?>