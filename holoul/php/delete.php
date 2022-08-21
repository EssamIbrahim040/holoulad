<?php
session_start();
require 'db_conn.php';

if(isset($_POST['delete_account']))
{
    $account_id = mysqli_real_escape_string($conn, $_POST['delete_account']);

    $query = "DELETE FROM account WHERE id='$account_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Acount Deleted Successfully";
        header("Location: salers.php");
       
    }
    else
    {
        $_SESSION['message'] = "Acount Not Deleted";
        header("Location: salers.php");
       
    }
}

?>