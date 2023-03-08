<?php
$id = $_GET['id'];

require "condb.php"

try {
    $sql = "DELETE FORM tb_user WHERE user_id = '$id' ";
    mysqli_query($link,$sql);
    echo "Affected : ". mysql_affected_row($link);
}catch(Excepiont $e){ 
    echo $e . "Error NO :" . mysqli_errno($link);

}

?>