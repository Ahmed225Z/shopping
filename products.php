<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>
    <link rel="stylesheet" href="memo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  body{
    width: 100%;
    background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(open.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    background-attachment: fixed;

  }
  h3{
    font-family: 'Changa', sans-serif;
    font-weight: bold;
    color:white;

  }
  .card{
    float:right;
    margin-top: 20px;
    margin-left: 10px;
    margin-right: 10px;
  }
  .card img{
    width: 100%;
    height: 200px;
  }
  main{
    width: 70%;
  }
</style>
</head>
<body>
   <center>
       <h3>جميع المنتجات المتوفرة</h3>
   </center>
   <?php
   include('config.php');
   $result=mysqli_query($con,"SELECT * FROM prod");
   while($row=mysqli_fetch_array($result)){
       echo"<center>
       <main>
       <div class='card' style='width: 18rem;'>
       <img src='$row[image]' class='card-img-top'>
       <div class='card-body'>
       <h5 class='card-title'>$row[name]</h5>
     <p class='card-text'>$row[price]</p>
     <a href='delete.php?id=$row[id]
     ' class='btn btn-danger'>حذف منتج</a>
     <a href='update.php?id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
       </main>
       <center>";
   }
   
   ?>
   <main></main>

  </div>
</div>
</body>
</html>