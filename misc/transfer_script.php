<?php

// Name of the file
$filename = 'info30005database_cleaned.sql';

// Connect to MySQL server
$con=mysqli_connect('127.0.0.1', 'beta', 'beta_2014', 'beta');
if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysqli_query($con, $templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error($con) . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
}
}
mysqli_close($con);
 echo "Tables imported successfully";
?>
