<?php

require 'ssp.class.php';


// DB table to use
$table = 'javafunctions';

// Table's primary key
$primaryKey = 'funcid';
$columns = array(
    array(
        'db' => 'funcid',
        'dt' => 'DT_RowId',
        'formatter' => function ($d, $row) {

            return 'row_' . $d;
        },
    ),
    array('db' => 'funcname', 'dt' => 'funcname'),
    array('db' => 'syntax', 'dt' => 'syntax'),
    array('db' => 'example_code', 'dt' => 'example_code'),
    array('db' => 'code_output', 'dt' => 'code_output'),
    array('db' => 'purpose', 'dt' => 'purpose'),
    array('db' => 'pagename', 'dt' => 'pagename'),
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db' => 'foolsrwn_java',
    'host' => 'localhost',
);


echo json_encode(SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns));

