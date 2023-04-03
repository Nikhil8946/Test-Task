<?php
// Get form data
class additem
{
    function insertdata()
    {
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $category = $_POST['category'];

        $server = "localhost";
        $username = "nikhil";
        $password = "Nikhil@123";
        $database = "inventory";


        $connect = new mysqli($server, $username, $password, $database);

        /* Check the connection is created properly or not */
        if ($connect->connect_error)
            echo "Connection error:" . $connect->connect_error;
        else
            echo "Connection is created successfully";


        // Prepare SQL statement to insert product into database
        $sql = $connect->prepare("INSERT INTO additem (category,name, price) VALUES ('$category', '$product_name', '$product_price')");

        $sql->execute();
    }
}
