
<?php
$jsonFile = 'learning_dashboard_multiple.json';
$jsonData = file_get_contents($jsonFile);
$dataArray = json_decode($jsonData, true);
if ($dataArray === null) {
    echo "Failed to decode JSON";
} else {
    echo "<pre>";
    print_r($dataArray); 
}
?>