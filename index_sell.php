<?php
  include "logic_sell.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Image For Sell</title>
</head>
<body>

    <div class="container mt-5">

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create_sell.php" class="btn" style='color:white;font: size 18px;background:darkblue;'><b>+ Create a new post</b></a>
            <a href="start.php" class="btn btn-info" role="button" style='color:white;font: size 18px;background:darkblue;'><b> Go Back </b></a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
                        <div class="card-body">
                        <?php 
                        $sql = "SELECT * FROM sell_data ORDER BY sell_id DESC";
                        $res = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($res) > 0) {
          	            while ($sells = mysqli_fetch_assoc($res)){  ?>

                        <div class="card">
                        <div class="card-body" align="center">
                            <img src="sells/<?php echo $sells['sell_url'] ?>" style="height:500px; width:500px;"><br>
                            <i><h4 class="card-text">By: <?php echo $sells['username'];?></h4></i>
                            <i><h4 class="card-text">Reach me: <?php echo $sells['sell_mail'];?></h4></i>
                            <i><h4 class="card-text">Price: Rs  <?php echo $sells['sell_price'];?></h4></i><br>
                            <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $sells['sell_id']?>')"> <span sell_id="like_loop_<?php echo $sells['sell_id']?>"><?php echo $sells['like_count']?></span></span></a>
                            <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $sells['sell_id']?>')"> <span sell_id="dislike_loop_<?php echo $sells['sell_id']?>"><?php echo $sells['dislike_count']?></span></span></a>
                            
                        </div><br><br><br>
                        <?php } ?> 
                   </div>
                   
                </div>

                        </div>
                        </div>
                        <?php }?>
						</div>          
        </div>
     </div>
         
        <script>
            function like_update(sell_id){
			    jQuery.ajax({
				url:'update_count_sell.php',
				type:'post',
				data:'type=like&sell_id='+sell_id,
				success:function(result){
				var cur_count=jQuery('#like_loop_'+sell_id).html();
				cur_count++;
				jQuery('#like_loop_'+sell_id).html(cur_count);
				}
			    });
		        }

            function dislike_update(sell_id){
                jQuery.ajax({
                 url:'update_count_sell.php',
                type:'post',
                data:'type=dislike&sell_id='+sell_id,
                success:function(result){
                 var cur_count=jQuery('#dislike_loop_'+sell_id).html();
                cur_count++;
                jQuery('#dislike_loop_'+sell_id).html(cur_count);
                }
                });
                }
        </script>

         
     </div>
    


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>