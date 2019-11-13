
<!DOCTYPE html>
<html>
<title>Java Reference</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="../DataTables/datatables.js"></script>

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
<style>
.w3-theme {color:#fff !important;background-color:#4da6ff !important}
.w3-btn {background-color:##4da6ff;margin-bottom:4px}
.w3-code{border-left:4px solid ##4da6ff}
.myMenu {margin-bottom:150px}
.w3-sidebar {
    margin-top: 5px !important;}

td.details-control {
    background: url('../dtimages/plus3.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('../dtimages/minus_20.png') no-repeat center center;
}

.text-wrap{
    white-space:normal;
}
.width-300{
    width:500px;
}

</style>
<body>

<!-- Top -->images/
<div class="w3-top">
  <div class="w3-row w3-white w3-padding">
    <div class="w3-half" style="margin:4px 0 6px 0"><a href='https://www.Foolstutorials.com'><img src = 'http://localhost/foolstutorials/wp-content/themes/foolstutorials/images/foolstutorials_logo.png' alt = 'Picture' alt='Foolstutorials.com'></a></div>
    <div class="w3-half w3-margin-top w3-wide w3-hide-medium w3-hide-small"><div class="w3-right">Quickest Reference on IT Languages and Tools</div></div>
  </div>
  <div class="w3-bar w3-theme w3-large" style="z-index:4;">
    <a class="w3-bar-item w3-button w3-left w3-hide-large w3-hover-white w3-large w3-theme w3-padding-16" href="javascript:void(0)" onclick="w3_open()">&#9776;</a>
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuTut')">TUTORIALS</a>
   <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16" href="javascript:void(0)" onclick="w3_show_nav('menuRef')">REFERENCES</a>
  </div>
</div>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-collapse w3-animate-left" style="z-index:3;width:270px" id="mySidebar">
  <div class="w3-bar w3-hide-large w3-large">
    <a href="javascript:void(0)" onclick="w3_show_nav('menuTut')" class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">Tutorials</a>
    <a href="javascript:void(0)" onclick="w3_show_nav('menuRef')" class="w3-bar-item w3-button w3-theme w3-hover-white w3-padding-16" style="width:50%">References</a>
  </div>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-right w3-xlarge w3-hide-large" title="Close Menu">&times;</a>
  <div id="menuTut" class="myMenu">
  <div class="w3-container">
    <h3>Tutorials</h3>
  </div>
  <a class="w3-bar-item w3-button" href="/tutorial/python_tutorial.html">Python Tutorial</a>
  <a class="w3-bar-item w3-button" href="#">Java Tutorial</a>
    <a class="w3-bar-item w3-button" href="#">Scala Tutorial</a>

  </div>
  <div id="menuRef" class="myMenu" style="display:none">
  <div class="w3-container">
    <h3>References</h3>
  </div>
  <a class="w3-bar-item w3-button" href='/references/pythonref.html'>Python Reference</a>
  <a class="w3-bar-item w3-button" href='#'>Java  Reference</a>
    <a class="w3-bar-item w3-button" href='#'>Scala  Reference</a>
  </div>
</div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->
<div class="w3-main w3-container " style="margin-left:270px;margin-top:6px;">


<div class="w3-row w3-border">
<div class="w3-twothird w3-container w3-border">
    <div class="w3-panel w3-xlarge w3-red">
  <p>Java Functions and Methods</p>
    </div>


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
<div class="w3-third w3-container">
<!--  <h2>w3-third</h2>
  <p>The w3-twothird class uses 33% of parent container.</p>
  <p>On screens smaller than 601 pixels it resizes to full screen.</p>
-->

</div>
</div>


<footer class="w3-panel w3-padding-32 w3-card-4 w3-light-grey w3-center w3-opacity">
  <p><nav>
  <a href="/forum/default.asp" target="_blank">FORUM</a> |
  <a href="/about/default.asp" target="_top">ABOUT</a>
  </nav></p>
</footer>

<!-- END MAIN -->
</div>

<script>
// Script to open and close the sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

function w3_show_nav(name) {
  document.getElementById("menuTut").style.display = "none";
  document.getElementById("menuRef").style.display = "none";
  document.getElementById(name).style.display = "block";
  w3-open();
}
</script>

<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>

<script>
w3CodeColor();
</script>

</body>
</html>
