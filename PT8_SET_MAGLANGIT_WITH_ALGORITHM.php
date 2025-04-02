<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Order</title>
    <style>
        body {
            background: url('armageddon_background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: auto;
        }
        input, select, button {
            margin: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Order Your Drink</h2>
        <form method="POST">
            <label>Choose Item:</label>
            <select name="item">
                <option value="cappuccino">Cappuccino - $5</option>
                <option value="espresso">Espresso - $4</option>
                <option value="latte">Latté - $6</option>
                <option value="iced_cappuccino">Iced Cappuccino - $7</option>
                <option value="iced_latte">Iced Latté - $8</option>
            </select><br>
            <label>Quantity:</label>
            <input type="number" name="quantity" min="1" required><br>
            <label>Dining Option:</label>
            <input type="radio" name="dine_option" value="dine_in" checked> Dine In
            <input type="radio" name="dine_option" value="take_out"> Take Out<br>
            <button type="submit" name="submit">Calculate</button>
        </form><?php
    if(isset($_POST['submit'])) {
        function getPrice($item) {
            $prices = [
                'cappuccino' => 5,
                'espresso' => 4,
                'latte' => 6,
                'iced_cappuccino' => 7,
                'iced_latte' => 8
            ];
            return $prices[$item];
        }
        
        function calculateTax($subtotal) {
            return $subtotal * 0.12;
        }
        
        function calculateTotal($subtotal, $tax) {
            return $subtotal + $tax;
        }
        
        $item = $_POST['item'];
        $quantity = intval($_POST['quantity']);
        $dine_option = $_POST['dine_option'];
        $price = getPrice($item);
        $subtotal = $price * $quantity;
        $tax = calculateTax($subtotal);
        $total = calculateTotal($subtotal, $tax);
        
        echo "<p>Subtotal: $" . number_format($subtotal, 2) . "</p>";
        echo "<p>Total Tax (12%): $" . number_format($tax, 2) . "</p>";
        echo "<p>Total Amount: $" . number_format($total, 2) . "</p>";
    }
    ?>
</div>

</body>
</html>
