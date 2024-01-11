<?php
// Order.php
class Order {
    private $orderId;
    private $user;
    private $shoppingCart;

    public function __construct($orderId, User $user, ShoppingCart $shoppingCart) {
        $this->orderId = $orderId;
        $this->user = $user;
        $this->shoppingCart = $shoppingCart;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getUser() {
        return $this->user;
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }

    public function calculateTotal() {
        return $this->shoppingCart->calculateTotal();
    }
}
?>
