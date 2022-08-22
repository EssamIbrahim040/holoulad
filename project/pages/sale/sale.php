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

         <h2 class="text-center mt-5">قسم المبيعات</h2> 
        
         <form class="row g-3 needs-validation" novalidate action="sale_code.php" Method="POST">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">اسم العميل</label>
    <input type="text" class="form-control" name="name" id="validationCustom01"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">رقم الهاتف</label>
    <input type="text" class="form-control" name="phone" id="validationCustom02"  required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-3">
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

  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">تفاصيل الطلب</label>
    <input type="text" class="form-control" name="detail" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid Details.
    </div>
  </div>
 
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">عدد الطلب</label>
    <input type="text" class="form-control" name="number" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid Details.
    </div>
  </div>
<br>
<div class="col-md-6">
    <label for="validationCustom03" class="form-label"> السعر المبدئ</label>
    <input type="text" class="form-control" name="price" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid Price.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">تاريخ استلام  الطلب</label>
    <input type="date" class="form-control" name="date" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid Date.
    </div>
  </div>
<br>
  <div class="col-12">
    <button class="btn btn-primary" name="submit" type="submit">Submit </button>
  </div>
</form>