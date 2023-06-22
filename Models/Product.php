<?php 

require_once __DIR__ . "/../traits/Weightable.php";
require_once __DIR__ . "/Category.php";

class Product {

	use Weightable;

	public $name;
	private $price;
    public $description;
	public $is_available;
	public $quantity;
	public $image;
	public $category;

	public function __construct($name, $price, $description, $is_available, $quantity, $image, Category $category)
	{
		$this->name = $name;
		$this->price = $price;
        $this->description = $description;
		$this->is_available = $is_available;
		$this->quantity = $quantity;
		$this->image = $image;
		$this->category = $category;
	}

    public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

    public function getimage() {
		return $this->image;
	}

	public function setimage($image) {
		$this->image = $image;
	}

    
    



	public function getClassName() {
		return get_class();
	}

	public function setPrice($value) {
		if($value>=0) {
			$this->price = $value;
		}
	}

	public function getPrice() {

		if( is_null($this->price) || is_nan($this->price) ) {
			throw new Exception("valore non numerico");
		}

		if($this->price < 0) {
			throw new RangeException("prezzo negativo");
		} else if($this->price==0) {
			throw new RangeException("prezzo zero");
		}

		return $this->price . " €";
	}

}

?>