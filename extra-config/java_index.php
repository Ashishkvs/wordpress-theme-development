<html>
<!-- for datatables only  -->
<head>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="datatables.js"></script>
<script>

function format ( d ) {
    return '<b><u>Syntax:</u></b> <br>'+d.syntax+ '<br>'+
            '<b><u>Example Code:</u></b> <br>' +d.example_code +'<br>'+'<b><u>Result:</u></b> <br>'+d.code_output+'<br> <a href="'+d.pagename+'.php" target="_blank" ><button class="w3-button w3-deep-purple w3-border-yellow w3-round"> Click for more Examples</button></a>'
            ;
}


$(document).ready(function() {
    var dt = $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "pageLength": 10,
        "info":true,
        "ajax": "javafunctions.php",
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
</head>
<body>
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
                </table></body>
</html>