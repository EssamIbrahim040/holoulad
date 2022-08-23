<?php include "header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المبيعات</title>
</head>
<body>
<style>
     body {
      background-color:#000;
     }
     label,h2 {
      color:#eee;
     }
     .form-control,.form-select,.form-select:hover, .form-control:hover {
      background: #242424eb;
      color:#eee;
      border:none;
     }
     </style>
<div class="container">
    <form action="sale_code.php" class="mt-4"  method="post">
         <h2 class="text-center">انشاء طلب </h2> 
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم العميل</label>
            <input class="form-control" type="text" name="name" placeholder="ادخل اسم العميل"><br>
        </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> رقم الهاتف</label>
            <input class="form-control" type="text" name="phone" placeholder="ادخل رقم الهاتف"><br>
        </div>
                <div class="mb-3">
                    <label for="validationCustom04" class="form-label">الطلب</label>
                    <select class="form-select" name="requer" id="validationCustom04" required>
                    <option selected disabled value="">اختر ...</option>
                    <option >استاند رول اب</option>
                    <option >بنرات</option>
                    <option >استيكرات</option>
                    <option >اكريلك</option>
                    <option >حروف بارزة</option>
                    <option >كلادينك</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
        </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> تفاصيل الطلب</label>
            <input class="form-control" type="text" name="detail" placeholder="ادخل  تفاصيل الطلب"><br>
        </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> عدد الطلب</label>
            <input class="form-control" type="text" name="number" placeholder="ادخل  عدد الطلب"><br>
        </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> تاريخ الاستلام</label>
            <input class="form-control" type="date" name="date" placeholder="ادخل تاريخ  الاستلام"><br>
        </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر المبدي</label>
                <input class="form-control" type="text" name="price" placeholder="ادخل السعر المبدي"><br>
        </div>
      
                <input class="btn btn-primary" type="submit" name="button" vaule="Send">

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


     

<div class="container">

    <input onclick="my()" type="button" class="text-center btn btn-primary mt-4" id="show" value="Show Date">
    <input type="button"  id="hide" value="hide data">
    </div>

<div class="text-center text-success">
<div id="data">
<script type = "text/javascript" >
            var date1 = new Date("06/30/2019");
            var date2 = new Date("07/30/2019");
            var Difference_In_Time = date2.getTime() - date1.getTime();
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
                 document.write("Total number of days between dates  <br>"
               + date1 + "<br> and <br>" 
               + date2 + " is: <br> " 
               + Difference_In_Days);


               function my() {
                var yy = document.getElementById("show");
                yy.style.display="none";
                
                var b = document.getElementById("data");
                b.style.display="block";
    	 
    	 
    	 
    }
  
   </script>
   </div>
   </div>

   <style>
     #hide{ display:none;}
     #show{ display:true;} 
     #data{ display: none;}
     </style>