<?php
class Product {
    // Properties
    public int $id;
    public string $name;
    public float $price;

    

    public function __construct( $id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return number_format($this->price, 2);
    }
    public function showDetails() {
        echo "- ID : {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }
}

// Example usage:
$product = new Product(1, "T-Shirt", 19.99);
$product->showDetails();

