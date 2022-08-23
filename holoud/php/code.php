<?php


require 'db_conn.php';
if(isset($_POST['button']))
{
    $entry = mysqli_real_escape_string($conn, $_POST['name']);
    $dname = mysqli_real_escape_string($conn, $_POST['dataname']);
    $type = mysqli_real_escape_string($conn, $_POST['requer']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    // $number = mysqli_real_escape_string($conn, $_POST['number']);
    // $date = mysqli_real_escape_string($conn, $_POST['date']);
    $priceup = mysqli_real_escape_string($conn, $_POST['priceup']);
    $pricedon = mysqli_real_escape_string($conn, $_POST['priceresid']);

    $query = "INSERT INTO account (name,dataname,requer,detail,price,priceup,priceresid) VALUES ('$entry','$dname','$requer','$detail','$price','$priceup','$pricedon')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "";
        header("Location: ./res_print.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "حدث خطأ ما لم يتم انشاء ";
        header("Location: ./account.php");
        exit(0);
    }
}

?>


