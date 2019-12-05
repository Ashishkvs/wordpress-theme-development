<!-- datatables -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="ml-3">References</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Python References</li>
                <li class="list-group-item">Java References</li>
                <li class="list-group-item">Scala References</li>

            </ul>
        </div>
        <div class="col-6 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="pt-2 pb-2 bg-danger mx-0">
                <h2 class=text-center><?php the_title();?></h2>
            </div>
            <div class="mt-2">
 <?php
//  $temp=the_content();
//  echo "asdas".$temp;
// the_content();

ob_start(); //Start output buffer
the_content();
$output = ob_get_contents(); //Grab output
ob_end_clean(); //Discard output buffer
// echo "HI".$output."hello";
// parse_str($output, $myArray);
// print_r($myArray);
// echo $output;
$output=substr($output,4);
$output = strip_tags($output, '</p>');


// echo $output;
$arr=explode(" ", $output);
// echo $arr[2];
 $table = $arr[0];
$columns = ["Functions", "Purpose"];
 include_once 'datatables.php';
 ?>
            </div>
        </div>
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
    </div>
</div>