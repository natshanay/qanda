<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($root."/config.php");

$conn = @mysqli_connect($sql_db_host,$sql_db_user, $sql_db_pass, $sql_db_name);
// if($conn){
//     echo "conn";
// }
// query file how to import using php path....

$query_file = 'bdQuery.sql';

// Tempo var , used to store current query

$templine = '';
// read in entire file 

$lines = file($query_file);

foreach($lines as $line){
    
    if(substr($line, 0, 2)== '--' || $line == '')
        continue;
        $templine.=$line;
        $query = false;

        if(substr(trim($line), -1,1) == ';'){
            $query = mysqli_query($conn, $templine);
            $templine = '';
    }

}
echo "Done";
?>