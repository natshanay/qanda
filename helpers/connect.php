<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($root."../config.php");
// echo $_SERVER["DOCUMENT_ROOT"];

// connect to sql server
$sqlConnect = mysqli_connect($sql_db_host,$sql_db_user, $sql_db_pass, $sql_db_name);

if($sqlConnect){
    echo "Connect";
}
else{
    echo "Not Connected";
}

?>