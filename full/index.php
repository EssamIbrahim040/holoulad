<?php include "tempaletes/header.php";
 include "tempaletes/footer.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <style>
        .landing {
            width:100%;
            height:50%;
        }
        .landing h2 {
            margin-top:40px
        }
        .card {
            border : 1px;
            text-align:center;
            box-shadow:10px 13px 20px 5px #eee;
            margin-bottom:10px;
            height: 124px;
            background:#eee;
            cursor: pointer;
        }
        .card:hover {
            background:#fff;
        }
        .card a {
            text-decoration: none;
            font-size: 20px;
            background: #1366e1;
            padding: 8px;
            color: #fff;
            font-weight: 400px;
            border-radius: 8px;
            box-shadow: 4px 11px 19px 2px #8fbae5;
        }
        .card a:hover{
            background: #000;
        }
    </style>
    <div class="landing">
        <div class="container">
        <h2 class="text-center">حلول النشر </h2>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa iusto debitis quo dicta odit soluta
            </p></div>
    </div>

    <div class="container">
          <div class="row">
            <div class="col">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title text-center">قسم المبيعات</h5><br>
            <a href="php/sales.php" class="card-link text-center">Click Here</a>
             </div>
            </div>
            </div>

            <div class="col">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title text-center">قسم التصميم</h5><br>
            <a href="php/desgin.php" class="card-link text-center">Click Here</a>
             </div>
            </div>
            </div>

          </div>

          <div class="row">
            <div class="col">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title text-center"> قسم المالية</h5><br>
            <a href="php/acuont.php" class="card-link text-center">Click Here</a>
             </div>
            </div>
            </div>

            <div class="col">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title text-center">المعمل</h5><br>
            <a href="php/lab.php" class="card-link text-center">Click Here</a>
             </div>
            </div>
            </div>

          </div>
</div>
</body>
</html>