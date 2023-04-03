<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script src="sc.js"></script>
    <title>Innoraft-Groceries</title>
</head>

<body>


    <form id="product-form" action="" method="POST">
        <div id="category1">
            <h2>Healthy Snacks</h2>
            <ul>
                <li>
                    <input type="checkbox" name="item[]" value="Lays Tangy">
                    <label>Lays Tangy ($1)</label>
                    <!-- <input type="text" name="price" value="1" style="display: none;"> -->
                    <input type="number" name="quantity[]" min="1" max="5">
                </li>
                <li>
                    <input type="checkbox" name="item[]" value="Almonds">
                    <label>Almonds ($2)</label>
                    <input type="number" name="quantity[]" min="1" max="5">
                </li>
                <!-- Add more items here -->
            </ul>
        </div>

        <div id="category2">
            <h2>Unhealthy Snacks</h2>
            <ul>
                <li>
                    <input type="checkbox" name="item[]" value="Doritos">
                    <label>Doritos ($1.5)</label>
                    <input type="number" name="quantity[]" min="1" max="5">
                </li>
                <li>
                    <input type="checkbox" name="item[]" value="Twix">
                    <label>Twix ($2)</label>
                    <input type="number" name="quantity[]" min="1" max="5">
                </li>
                <!-- Add more items here -->
            </ul>
        </div>

        <button type="button" name="submit-btn" id="submit-btn">Submit</button>
    </form>
    <?php
    if (isset($_POST['submit-btn'])) {
        $items = $_POST['item'];
        $quantities = $_POST['quantity'];
        $total = 0;
        for ($i = 0; $i < count($items); $i++) {
            if (!empty($quantities[$i]) && $quantities[$i] > 0) {
                if ($items[$i] == 'Lays Tangy') {
                    $price = 1;
                } else if ($items[$i] == 'Almonds') {
                    $price = 2;
                } else if ($items[$i] == 'Doritos') {
                    $price = 1.5;
                } else if ($items[$i] == 'Twix') {
                    $price = 2;
                }
                $subtotal = $price * $quantities[$i];
            }
            $total += $subtotal;
        }
    }
    ?>
    <form id="customer-form" action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required>

        <label for="total-payable-amount">Total Payable Amount:</label>
        <input type="number" name="total-payable-amount" id="total-payable-amount" value="<?php echo $total; ?>" disabled>

        <button type="submit">Submit</button>
    </form>
</body>

</html>