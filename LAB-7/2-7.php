<!-- 2.7 Write a PHP code to use mysql date and time functions as given bellow:
        1) HOUR()
        2) MINUTE()
        3) SECOND()
        4) DATE_FORMAT(). -->

<?php
$currentDateTime = date('Y-m-d H:i:s');
echo "<b>Current DateTime:</b> " . $currentDateTime . "<br>";

$hour = date('H');
echo "<b>HOUR:</b> " . $hour . "<br>";

$minute = date('i');
echo "<b>MINUTE:</b> " . $minute . "<br>";

$second = date('s');
echo "<b>SECOND:</b> " . $second . "<br><br>";

$timestamp = time();
echo "<b>DATE_FORMAT Examples:</b><br>";
echo "Format 1 (Y-m-d): " . date('Y-m-d', $timestamp) . "<br>";
echo "Format 2 (d/m/Y): " . date('d/m/Y', $timestamp) . "<br>";
echo "Format 3 (l, F j, Y): " . date('l, F j, Y', $timestamp) . "<br>";
echo "Format 4 (H:i:s): " . date('H:i:s', $timestamp) . "<br>";
echo "Format 5 (Y-m-d H:i:s): " . date('Y-m-d H:i:s', $timestamp) . "<br>";
?>