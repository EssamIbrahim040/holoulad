<?php include "../header.php"?>
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
<div class="container">
    <form action="account_code.php" class="mt-4"  method="post">
         <h2 class="text-center"> اضافة فاتورة جديد</h2> 
        
         <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم مدخل البيانات</label>
            <input class="form-control is-invalid" id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required  type="text" name="name" placeholder="ادخل اسم الموظف"><br>
        </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">اسم العميل</label>
            <input class="form-control" type="text"  id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required name="dataname" placeholder="ادخل اسم العميل"><br>
</div>
            <div class="col">
                <label for="validationCustom03" class="form-label">تفاصيل الطلب</label>
                <input type="text" class="form-control" name="detail" id="validationCustom03" required>
            </div>
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر النهائي</label>
                <input class="form-control" type="text"  id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required placeholder="ادخل السعر النهائي" name="price"><br>
        </div>

        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر المدفوع</label>
                <input class="form-control" type="text"  id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required placeholder="ادخل السعر المدفوع" name="priceup"><br>
        </div>

        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> السعر المتبقي</label>
                <input class="form-control" type="text"  id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required placeholder="ادخل السعر المتبقي" name="priceresid"><br>
        </div>
                <input class="btn btn-primary"  id="validationServerUsername" aria-describedby="validationTooltipUsernamePrepend" required type="submit" name="button" vaule="Send">

</form>
                
    <?php 


    ?>
    <style>
        p {
            color:red;
            font-size:25px;
            text-align:center;
        }
        </style>



<script>
    (() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>