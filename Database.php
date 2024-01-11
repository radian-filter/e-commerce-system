<?php
// Database.php
class Database {
    private $users;
    private $products;
    private $orders;

    public function __construct() {
        $this->users = [];
        $this->products = [];
        $this->orders = [];
    }

    public function addUser(User $user) {
        $this->users[] = $user;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function createOrder(User $user, ShoppingCart $shoppingCart) {
        $orderId = count($this->orders) + 1;
        $order = new Order($orderId, $user, $shoppingCart);
        $this->orders[] = $order;

        // Clear the shopping cart after creating the order
        $shoppingCart = new ShoppingCart();

        return $order;
    }

    public function getUsers() {
        return $this->users;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getOrders() {
        return $this->orders;
    }
}
?>
