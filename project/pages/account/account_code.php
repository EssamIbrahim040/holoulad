<?php
require '../db_conn.php';
if(isset($_POST['button']))
{
    $entry = mysqli_real_escape_string($conn, $_POST['name']);
    $dname = mysqli_real_escape_string($conn, $_POST['dataname']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $priceup = mysqli_real_escape_string($conn, $_POST['priceup']);
    $pricedon = mysqli_real_escape_string($conn, $_POST['priceresid']);

    $query = "INSERT INTO account (name,detail,dataname,price,priceup,priceresid) VALUES ('$entry','$dname','$price','$detail','$priceup','$pricedon')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "";
        header("Location: ./salers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "حدث خطأ ما لم يتم انشاء ";
        header("Location: ./salers.php");
        exit(0);
    }
}

?>
