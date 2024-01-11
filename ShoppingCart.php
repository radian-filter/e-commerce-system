<?php
// ShoppingCart.php
class ShoppingCart {
    private $items;

    public function __construct() {
        $this->items = [];
    }

    public function addItem(Product $product) {
        $this->items[] = $product;
    }

    public function getItems() {
        return $this->items;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
}
?>
