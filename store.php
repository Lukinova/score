<?php

class Product 
{
	public $name;
	public $price;
	public $img;
	public $prefix = '';

	function __construct($id , $name, $price)
	{
		$product = $this;
		$product->id = $id;
		$product->name = $name;
		$product->price = $price;
		$product->img = 'img/' . $this->prefix . '_' . $id . '.jpg';
		return $product;
	}
}

// Шкаф
class Cupboard extends Product
{
	public $prefix = 'cupboard';
	function __construct($id , $name, $price) {
		return parent::__construct($id , $name, $price);
	}
}
// Духовка
class Oven extends Product
{
	public $prefix = 'oven';
	function __construct($id , $name, $price) {
		return parent::__construct($id , $name, $price);
	}
}
// Плита
class Stove extends Product
{
	public $prefix = 'stove';
	function __construct($id , $name, $price) {
		return parent::__construct($id , $name, $price);
	}
}

$cupboards = [
	new Cupboard(1, 'Шкаф напольный', 2000),
	new Cupboard(2, 'Шкаф настенный', 3500),
];
$ovens = [
	new Oven(1, 'Духовка Bosh', 12200),
	new Oven(2, 'Духовка Redmond', 15500),
];
$stoves = [
	new Stove(1, 'Плита Bosh', 8400),
	new Stove(2, 'Плита Redmond', 9200),
];
$products = [
	'cupboards' => $cupboards,
	'ovens' => $ovens,
	'stoves' => $stoves
];

/*echo '<pre>';
var_dump($products);
echo '</pre>';*/

echo json_encode($products, JSON_UNESCAPED_UNICODE);