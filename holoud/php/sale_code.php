
    <?php 
                 // connect with database 
     $host ='localhost';
     $user ='root';
     $password ='';
     $dbName = 'holoud';

   $conn =   mysqli_connect($host, $user, $password, $dbName);

//    if(isset($conn)){
//     echo "your connected with database";
//    }else {
//     echo "you not contnect with database";
//    }

   //send date with paitante to database
   $dName = $_POST['name'];
   $phone = $_POST['phone'];
   $detail = $_POST['detail'];
   $requer = $_POST['requer'];
   $number = $_POST['number'];
   $date = $_POST['date'];
   $price = $_POST['price'];
   $dbutton = $_POST['button'];

   if($dbutton){
    $query = "INSERT INTO data(name,phone,detail,requer,number,date,price)VALUE('$dName','$phone','$detail','$requer','$number','$date','$price')";
    $result = mysqli_query($conn,$query);
    header("location: salers.php");
} else {
    echo " <p>iTs Not Done </p>";
}

    ?>
    <style>
        p {
            color:red;
            font-size:25px;
            text-align:center;
        }
        </style>


