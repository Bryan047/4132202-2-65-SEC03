<?php
$user_id = $_GET['user_id'];
$user_name = $_GET['user_name'];
$user_pass = $_GET['user_pass'];


require "condb.php"

try {
    $sql = "INSERT INTO tb_user VALUES('$user_id','$user_name','$user_pass') ";
    mysqli_query($link,$sql);
    echo "Affected : ". mysql_affected_row($link);
}catch(Excepiont $e){ 
    echo $e . "Error NO :" . mysqli_errno($link);

}

?>