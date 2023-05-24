<?php
// Load the database configuration file 
include("./connection.php");


// Filter the excel data 
function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"'))
        $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls";

// Column names 
$fields = array('S.No', 'NAME', 'ROLL NUMBER', 'COURSE', 'YEAR', 'SEMESTER', 'BRANCH', 'COURSE CODES','UPI REFERENCE ID','RECEIPT');

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database 
$query = $conn->query("SELECT * FROM `data` ORDER BY sno ASC");
if ($query->num_rows > 0) {
    // Output each row of the data 
    while ($row = $query->fetch_assoc()) {
        
        $lineData = array($row['sno'], $row['Name'], $row['Roll_number'], $row['Course'], $row['Year'], $row['Semester'], $row['Branch'], $row['Course_code'],$row['upiref'],$row['receipt']);
        array_walk($lineData, 'filterData');
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data 
echo $excelData;

exit;
?>