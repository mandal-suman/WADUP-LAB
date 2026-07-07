<!-- 2.6 Write a PHP code to use date and time functions as given bellow:
        1) DAYOFWEEK()
        2) WEEKDAY()
        3) DAYOFMONTH()
        4) DAYOFYEAR()
        5) DAYNAME() -->

<?php
$date = "2024-01-15";

$dayOfWeek = date('w', strtotime($date));
echo "<b>DAYOFWEEK:</b> " . $dayOfWeek . "\n";

$weekday = date('w', strtotime($date));
echo "<br><b>WEEKDAY:</b> " . $weekday . "\n";

$dayOfMonth = date('d', strtotime($date));
echo "<br><b>DAYOFMONTH:</b> " . $dayOfMonth . "\n";

$dayOfYear = date('z', strtotime($date)) + 1;
echo "<br><b>DAYOFYEAR:</b> " . $dayOfYear . "\n";

$dayName = date('l', strtotime($date));
echo "<br><b>DAYNAME:</b> " . $dayName . "\n";
?>  