<style>
.dashboard {
  padding: 20px;
}

.dashboard h1 {
  text-align: center;
  font-size: 24px;
  color: #333;
}

.dashboard-table {
  width: 100%;
  border-collapse: collapse;
  border: 2px solid #333;
}

.dashboard-table th,
.dashboard-table td {
  border: 1px solid #333;
  padding: 8px;
}

.table-header {
  background-color: #4287f5;
  color: #fff;
}

.table-row-even {
  background-color: #f9f9f9;
}

.table-row-odd {
  background-color: #ffffff;
}
</style>



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
        $html = "<div class='dashboard'>
                    <h1>Dashboard</h1>
                    <table class='dashboard-table'>
                        <thead>
                            <tr class='table-header'>
                                ";
        while ($field = mysqli_fetch_field($result)) {
            $html .= "<th>" . $field->name . "</th>";
        }
        $html .= "</tr>
                        </thead>
                        <tbody>";
       
        // Fetch and add data rows to the table
        $rowNum = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $html .= "<tr class='" . ($rowNum % 2 == 0 ? "table-row-even" : "table-row-odd") . "'>";
            foreach ($row as $value) {
                $html .= "<td>" . $value . "</td>";
            }
            $html .= "</tr>";
            $rowNum++;
        }
       
        // Close the table and dashboard div
        $html .= "</tbody>
                </table>
            </div>";
       
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
