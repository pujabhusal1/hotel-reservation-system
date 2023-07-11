
<?php
 $name = $_GET["name"];
echo $name;
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql ="Select * from book where name ='".$name."'";
    
    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // Start building the HTML table
            $html = "<table>";
            
            // Create table headers using the column names
            $html .= "<tr>";
            while ($field = mysqli_fetch_field($result)) {
                $html .= "<th>" . $field->name . "</th>";
            }
            $html .= "</tr>";
            
            // Fetch and add data rows to the table
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= "<tr>";
                foreach ($row as $value) {
                    $html .= "<td>" . $value . "</td>";
                }
                $html .= "</tr>";
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
        echo "Error Login failed" . mysqli_error($conn);
    }
mysqli_close($conn);
exit(); // Stop executing the rest of the code


?>
