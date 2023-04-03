<?php
class calculate
{
    function totalcal()
    {
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
    }
}
