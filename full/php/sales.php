<?php include "header.php"; ?>
<?php include "conect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم المبيعات</title>
</head>
<body dir="rtl">
    

<div class="container">
 <h3 class="text-center">قسم المبيعات</h3>
    <form>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label">عنوان  التصميم</label>
        <input type="text" name="adress" class="form-control"  >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1"  class="form-label">نوع  التصميم</label>
    <select class="form-select form-select-lg mb-3" name="type" aria-label=".form-select-lg example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
     </select>
</div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">تفاصيل التصميم</label>
        <input type="text" name="details" class="form-control"  >
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">السعر</label>
        <input type="text" name="price" class="form-control"  >
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button> // send to acount 
    <a href="../index.php">&#8592;</a>
    </div>
</form>
</body>
</html>