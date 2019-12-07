<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foolsrwn_java";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM $table"; //table from inclusion caller file
$result = $conn->query($sql);
//dynamic column
// $columns = ["Functions","Purpose"];

$conn->close();
// echo "connection closed";
?>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr class="text-center">
            <?php foreach($columns as $header)
                echo "<th>".$header."</th>";
            ?>
        </tr>
    </thead>
    <tbody>
        <?php if ($result !=null && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $col1 = $row["funcname"];
        $col2 = $row["purpose"];
        $col3 = $row["syntax"];
        $col4 = $row["example_code"];

echo <<<DATATABLES
         <tr>
                <td><img src="plus.png" onclick="alert('hello');"></td>
                <td>$col1</td>
                <td>$col2</td>
        </tr>
       
      
DATATABLES;
    }
} else {
    echo "0 results";
}
?>


    </tbody>
    <tfoot>
        <tr class="text-center">
            <th>Function</th>
            <th>Purpose</th>

        </tr>
    </tfoot>
</table>
                 <!-- <td><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span></td> -->
 