<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logic.css">
    <title>Add Inventory</title>
</head>

<body>

    <form id="product-form" action="../controller/insertindodata.php" method="POST">
        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="healthy">Healthy Snacks</option>
            <option value="unhealthy">Unhealthy Snacks</option>
        </select>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="price">Price:</label>
        <input type="number" name="price" id="price" step="0.01" min="0" required>

        <button type="submit">Add Product</button>

    </form>
    <form action="../controller/logouthandle.php" method="POST">
        <input type="submit" name="logout" value="Logout">
    </form>

</body>

</html>