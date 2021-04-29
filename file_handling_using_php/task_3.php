<?php
echo "Before <br><br>";
$CSVfp = fopen("student.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  print_r($data);
 }
}
fclose($CSVfp);


$delimiter = "\t"; //your column separator
$csv_data = array();
$row = 1;
if (($handle = fopen('student.csv', 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
        $csv_data[] = $data;
        $row++;
    }
    fclose($handle);
}

$extra_columns = array('Mob' => 9876543213);
foreach ($csv_data as $i => $data) {
    if ($i == 0) {
        $csv_data[$i] = array_merge($data, array_keys($extra_columns));
    } else {
        $csv_data[$i] = $data = array_merge($data, $extra_columns);
    }
}

if (($handle = fopen('student.csv', 'w')) !== FALSE) {
    foreach ($csv_data as $data) {
        fputcsv($handle, $data, $delimiter);
    }
    fclose($handle);
}

echo "<br><br> After <br><br>";

$CSVfp = fopen("student.csv", "r");
if($CSVfp !== FALSE) {
 while(! feof($CSVfp)) {
  $data = fgetcsv($CSVfp, 1000, ",");
  print_r($data);
 }
}
fclose($CSVfp);

?>

<!-- https://phppot.com/php/php-csv-file-read/
https://stackoverflow.com/questions/36142899/add-2-new-column-header-and-contents-in-csv-file-using-php -->