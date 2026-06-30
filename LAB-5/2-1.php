<!-- 2.1 Write a PHP code to create numeric array for Monday to Saturday, associative array for month with total days of month such as
January=>30,February=>28 upto December and multidimensional array for laptop along with company name inside that model and price(any
two companies). -->

<?php
// Numeric array for Monday to Saturday
echo "<b>Numeric array for Monday to Saturday:</b><br>";
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<pre>";
print_r($days);
echo "</pre><br>";

// Associative array for month with total days of month such as January=>30,February=>28 upto December
echo "<b>Associative array for month with total days of month:</b><br>";
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<pre>";
print_r($months);
echo "</pre><br>";

// Multidimensional array for laptop along with company name inside that model and price(any two companies)
echo "<b>Multidimensional array for laptop:</b><br>";
$laptops = array(
    "Dell" => array(
        "Model" => "XPS 13",
        "Price" => "1200"
    ),
    "HP" => array(
        "Model" => "Spectre x360",
        "Price" => "1300"
    )
);

echo "<pre>";
print_r($laptops);
echo "</pre><br>";

?>