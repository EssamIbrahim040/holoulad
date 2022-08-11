<?php include "header.php"; ?>
<?php include "conect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قسم التصميم</title>
</head>
<body dir="rtl">

<style>
    form,h3 {
        margin-top:50px;
    }
</style>
<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <h3 class="text-center">قسم التصميم</h3>
    <div class="container">
     <form class="form-control "  action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input class="form-control mb-3"  type="file" 
                  name="my_image">

           <input class="btn btn-primary" type="submit" 
                  name="submit"
                  value="Upload">
                  <a href="../index.php">&#8592;</a>
     </form>
     
</div>
</body>
</html>