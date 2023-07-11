<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "records";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM book";

if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Start building the HTML table
        $html = "<table style='border-collapse: collapse; width: 100%;'>";
       
        // Create table headers using the column names
        $html .= "<tr style='background-color: #006400;'>";
        while ($field = mysqli_fetch_field($result)) {
            $html .= "<th style='border: 1px solid #ddd; padding: 8px; background-color: #4287f5; color: #fff;'>" . $field->name . "</th>";
        }
        $html .= "</tr>";
       
        // Fetch and add data rows to the table
        $rowNum = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= "<tr style='background-color: " . ($rowNum % 2 == 0 ? "#f9f9f9" : "#ffffff") . ";'>";
            foreach ($row as $value) {
                $html .= "<td style='border: 1px solid #ddd; padding: 8px; color: #333;'>" . $value . "</td>";
            }
            $html .= "</tr>";
            $rowNum++;
        }
       
        // Close the table
        $html .= "</table>";
       
        // Output or store the generated HTML table
        echo $html;
    } else {
        echo "No rows found.";
    }
   
    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
exit(); // Stop executing the rest of the code
?>
