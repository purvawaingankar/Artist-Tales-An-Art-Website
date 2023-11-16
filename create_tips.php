<?php
  include "logic_tips.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <title>Tips & Tricks</title>
</head>
<body>
    
    <center><div class="container mt-5">
        <form method="GET">
            <input type="text" name="tips_title" placeholder="Title" class="form-control" style='color:darkblue;font: size 18px;background:lightblue; text-align:center' required=""><br>
            <textarea name="tips_content" class="form-control" style='color:darkblue;font: size 1cm;background:lightblue;' required rows="20" cols="50"></textarea><br>
            <input type="text" name="username" placeholder="Write your username" class="form-control" style='color:darkblue;font: size 18px;background:lightblue; text-align:center' required=""><br>
            <button name="new_post" class="btn" style='color:darkblue;font: size 18px;background:lightblue;'><b>Add Post</b></button>
            <a href="index_tips.php" class="btn" role="button" style='color:darkblue;font: size 18px;background:lightblue;'><b> Go Back </b></a>
        </form>
     </div></center>   

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
      
      