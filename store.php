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
		$product->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.";
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
class Microwave extends Product
{
	public $prefix = 'microwave';
	function __construct($id , $name, $price) {
		return parent::__construct($id , $name, $price);
	}
}

$cupboards = [
	new Cupboard(1, 'Шкаф напольный', 2000),
	new Cupboard(2, 'Шкаф настенный', 3500),
	new Cupboard(3, 'Шкаф напольный', 2690),
	new Cupboard(4, 'ШКаф настенный', 3470)
];
$ovens = [
	new Oven(1, 'Духовка Bosh', 12200),
	new Oven(2, 'Духовка Redmond', 15500),
	new Oven(3, 'Духовка Gefest', 25380),
];
$stoves = [
	new Stove(1, 'Плита Bosh', 8400),
	new Stove(2, 'Плита Redmond', 9200),
	new Stove(3, 'Плита Zanussi', 11320),
	new Stove(4, 'Ariston', 16880),
];
$microwaves = [
	new Microwave(1, 'Микроволновка', 15700),
	new Microwave(2, 'Микроволновка', 13400),
	new Microwave(3, 'Микроволновка', 5360),
];
$products = [
	'cupboards' => $cupboards,
	'ovens' => $ovens,
	'stoves' => $stoves,
	'microwaves' => $microwaves,
];

/*echo '<pre>';
var_dump($products);
echo '</pre>';*/

echo json_encode($products, JSON_UNESCAPED_UNICODE);