<?php include "../db_conn.php" ?>


<?php

   $dName = $_POST['name'];
   $phone = $_POST['phone'];
   $requer = $_POST['requer'];
   $detail = $_POST['detail'];
   $number = $_POST['number'];
   $date = $_POST['date'];
   $price = $_POST['price'];
   $dbutton = $_POST['submit'];

   if($dbutton){
    $query = "INSERT INTO data(name,phone,requer,detail,number,date,price)VALUE('$dName','$phone','$requer','$detail','$number','$date,'$price')";
    $result = mysqli_query($conn,$query);
    header("location: ../account/res_account.php");
} else {
    echo " <p>iTs Not Done </p>";
}

?>