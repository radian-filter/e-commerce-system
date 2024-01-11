<?php
// ECommerceSystem.php
class ECommerceSystem {
    public static function main() {
        // Create users
        $user1 = new User('john_doe', 'john@example.com');
        $user2 = new User('jane_doe', 'jane@example.com');

        // Create products
        $product1 = new Product('Laptop', 1200.0);
        $product2 = new Product('Headphones', 99.99);

        // Create a database and add users and products
        $database = new Database();
        $database->addUser($user1);
        $database->addUser($user2);
        $database->addProduct($product1);
        $database->addProduct($product2);

        // Simulate shopping
        $shoppingCart = new ShoppingCart();
        $shoppingCart->addItem($product1);
        $shoppingCart->addItem($product2);

        // Simulate order creation
        $order = $database->createOrder($user1, $shoppingCart);

        // Display order details
        self::displayOrderDetails($order);
    }

    private static function displayOrderDetails(Order $order) {
        echo "Order Details:\n";
        echo "Order ID: " . $order->getOrderId() . "\n";
        echo "User: " . $order->getUser()->getUsername() . " (" . $order->getUser()->getEmail() . ")\n";
        echo "Products:\n";

        foreach ($order->getShoppingCart()->getItems() as $item) {
            echo "- " . $item->getName() . ": $" . $item->getPrice() . "\n";
        }

        echo "Total: $" . $order->calculateTotal() . "\n";
    }
}

// Run the E-Commerce System
ECommerceSystem::main();
?>
