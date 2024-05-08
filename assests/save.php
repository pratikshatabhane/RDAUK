<?php
session_start(); // Start session to store cart data

// Function to add a product to the cart
function addToCart($productId, $productName, $price) {
    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add product to cart
    $_SESSION['cart'][] = array(
        'id' => $productId,
        'name' => $productName,
        'price' => $price
    );
}

// Check if product ID is sent via POST
if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $productName = "Product Name"; // Replace with actual product name
    $price = 10.00; // Replace with actual product price

    // Add product to cart
    addToCart($productId, $productName, $price);

    // Redirect back to the page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
