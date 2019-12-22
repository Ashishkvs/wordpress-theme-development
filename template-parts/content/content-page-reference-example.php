<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="ml-3">Examples</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Python Examples</li>
                <li class="list-group-item">Java Examples</li>
                <li class="list-group-item">Scala Examples</li>

            </ul>
        </div>
        <div class="col-md-6 col-sm-6 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="pt-2 pb-2 bg-primary mb-2">
                <h2 class="text-center text-white-color">Example on <?php the_title(); ?></h2>
            </div>
<?php 
ob_start(); //Start output buffer
the_content();
$output = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer
$output = substr($output, 4);
$output = strip_tags($output, '</p>');
$output = ltrim($output);

echo $output;
$arr = explode(" ", $output);
// echo $arr[1];
$table = $arr[0];
$funcId = $arr[1];
$funcId = preg_replace("/[^0-9]/", "", $funcId);
// echo $funcId;
$wherClause = " where funcid=".$funcId ;
$columns = ["", "Functions", "Purpose"];
$table = preg_replace("/[^a-zA-Z0-9_]/", "", $table);

echo $wherClause;
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

$sql = "SELECT * FROM $table ".$wherClause; //table from inclusion caller file
$result = $conn->query($sql);
//dynamic column
// $columns = ["Functions","Purpose"];

$conn->close();
// echo "connection closed";

$x=1;
// loop starts here 
 if ($result != null && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $func_name = $row["funcname"];
        $goal = $row["goal"];
        $explanation = $row["explanation"];
        $example_code = $row["exmp_code"];
        $exmp_output = $row["exmp_output"];


echo <<<EXAMPLEPOSTS

<div class="example-post"> 
<p class="example-code badge badge-pill badge-warning">Example : $x</p><hr>
<p class="example-code badge badge-info">Goal</p>
<div class="ml-2">
   <h3> $goal </h3>
</div>
<p class="example-code badge badge-info">Code</p>
<div class="ml-2">
<pre>
$example_code

</pre>
</div>
<p class="example-code badge badge-info">Result:</p>
<div class="ml-2 jumbotron">
    <p>       $exmp_output     </p>
</div>
<p class="example-code badge badge-info">Explanantion</p>
<div class="ml-2">
    <p>     $explanation       </p>
</div>
</div>
EXAMPLEPOSTS;
$x++;
}   
} else {
    echo "<br> No records to display !!";
}

// loop ends here
?>
        </div>
        <!-- right side bar starts here -->
        <div class="col">
            <h2 class="float-right">Advertisement</h2>
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <!-- //end right side bar starts here -->
    </div>
</div>
