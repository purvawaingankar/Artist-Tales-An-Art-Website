<?php
  include "logic_img.php"
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Image</title>
 </head>
 <body>

    <div class="container mt-5">

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create_img.php" class="btn" style='color:white;font: size 18px;background:darkblue;'><b>+ Create a new post</b></a>
            <a href="start.php" class="btn" role="button" style='color:white;font: size 18px;background:darkblue;'><b> Go Back </b></a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
                        <div class="card-body">
                        <?php 
                        $sql = "SELECT * FROM img_data ORDER BY img_id DESC";
                        $res = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($res) > 0) {
          	            while ($images = mysqli_fetch_assoc($res)){  ?>

                        <div class="card">
                        <div class="card-body" align="center">
                            <img src="images/<?=$images['img_url'] ?>" style="height:600px; width:500px;"><br>
                            <i><h3 class="card-title">By: <?php echo $images['username'];?></h3></i>
                            <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $images['img_id']?>')"> <span img_id="like_loop_<?php echo $images['img_id']?>"><?php echo $images['like_count']?></span></span></a>
                            <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $images['img_id']?>')"> <span img_id="dislike_loop_<?php echo $images['img_id']?>"><?php echo $images['dislike_count']?></span></span></a>
                            
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
            function like_update(img_id){
			    jQuery.ajax({
				url:'update_count_img.php',
				type:'post',
				data:'type=like&img_id='+img_id,
				success:function(result){
				var cur_count=jQuery('#like_loop_'+img_id).html();
				cur_count++;
				jQuery('#like_loop_'+img_id).html(cur_count);
				}
			    });
		        }

            function dislike_update(img_id){
                jQuery.ajax({
                 url:'update_count_img.php',
                type:'post',
                data:'type=dislike&img_id='+img_id,
                success:function(result){
                 var cur_count=jQuery('#dislike_loop_'+img_id).html();
                cur_count++;
                jQuery('#dislike_loop_'+img_id).html(cur_count);
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