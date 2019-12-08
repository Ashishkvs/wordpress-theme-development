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
        <div class="col-8 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="pt-2 pb-2 bg-danger mx-0">
                <h2 class=text-center><?php the_title();?></h2>
            </div>
            <div class="col-xs-2 mt-2">
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
$columns = ["","Functions", "Purpose"];
$table = preg_replace("/[^a-zA-Z0-9]/", "", $table);

$table_url = "http://localhost/data_tables/javafunctions.php?name=".$table;
//  include_once 'javafunctions.php';

 ?>
                <table id="example" class="display w3-large" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Function Name</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Function Name</th>
                            <th>Purpose</th>
                        </tr>
                    </tfoot>
                </table>
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
<script>

function format ( d ) {
    return '<b><u>Syntax:</u></b> <br>'+d.syntax+ '<br>'+
            '<b><u>Example Code:</u></b> <br>' +d.example_code +'<br>'+'<b><u>Result:</u></b> <br>'+d.code_output+'<br> <a href="'+d.pagename+'.php" target="_blank" ><button class="w3-button w3-deep-purple w3-border-yellow w3-round"> Click for more Examples</button></a>'
            ;
}


$(document).ready(function() {
    var table_url="<?php echo $table_url; ?>";
    
    var dt = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "info":true,
		"ajax": {
            "url": table_url,
            "type": "GET"
},
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { "data": "funcname" },
            { "data": "purpose" }

            
        ],
        
        "columnDefs": [
                   
                        {
                            "targets": 2,
                    render: function (data, type, full, meta) {
                        return "<div class='text-wrap '>" + data + "</div>";
                    },
}
                    ],
        
        "order": [[1, 'asc']]
    } );
    

    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#example tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('funcid'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('funcid') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, funcid ) {
            $('#'+funcid+' td.details-control').trigger( 'click' );
        } );
    } );
} );    
    
</script>