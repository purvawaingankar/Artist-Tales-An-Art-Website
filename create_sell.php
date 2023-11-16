<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Image for sell</title>
</head>
<body>
<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>'; } ?>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <div class="container mt-5">
        <form action="upload_sell.php" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="my_image" required=""><br><br>
            <input type="varchar" name="username" placeholder="Enter Your Username" class="form-control" style='color:darkblue;font: size 18px;background:lightblue; text-align:center' required=""><br>
            <input type="varchar" name="sell_mail" placeholder="Mail Id " class="form-control" style='color:darkblue;font: size 18px;background:lightblue; text-align:center' required=""><br>
            <input type="text" name="sell_price" placeholder="Price to be put on " class="form-control" style='color:darkblue;font: size 18px;background:lightblue; text-align:center' required=""><br>
            <button name="submit" class="btn" style='color:darkblue;font: size 18px;background:lightblue;' value="Upload" type="submit"><b>Add Post</b></button>
            <a href="index_sell.php" class="btn" role="button" style='color:darkblue;font: size 18px;background:lightblue;'><b>Go Back</b></a>
        </form>
    </div> 
     

     <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>



