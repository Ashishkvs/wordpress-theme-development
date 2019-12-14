<?php

require( 'ssp.class.php' );
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = $_GET['name'];
//$table = 'javafunctions';
// Table's primary key
$primaryKey = 'funcid';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
        array(
        'db' => 'funcid',
        'dt' => 'DT_RowId',
        'formatter' => function( $d, $row ) {
            // Technically a DOM id cannot start with an integer, so we prefix
            // a string. This can also be useful if you have multiple tables
            // to ensure that the id is unique with a different prefix
            return 'row_'.$d;
        }
    ),
    array( 'db' => 'funcname', 'dt' => 'funcname' ),
    array( 'db' => 'syntax',  'dt' => 'syntax' ),
    array( 'db' => 'example_code',   'dt' => 'example_code' ),
    array( 'db' => 'code_output',   'dt' => 'code_output' ),
    array( 'db' => 'purpose',  'dt' => 'purpose' ),
    array( 'db' => 'pagename',  'dt' => 'pagename' )
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'foolsrwn_java',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

echo json_encode(SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns ));
// echo json_encode(
//
//     SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
//
// );
// function dataFetchTable($sql_details, $table, $primaryKey, $columns ){
// $x=SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns );
// //echo '<pre>' . print_r($x) . '</pre>';
// echo json_encode($x,JSON_UNESCAPED_UNICODE);
// }
// dataFetchTable($sql_details, $table, $primaryKey, $columns );
//DEBUGGING
// echo json_last_error_msg(); // Print out the error if any
// die(); // halt the script
