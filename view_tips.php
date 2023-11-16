<?php
$con=mysqli_connect('localhost','root','','art website');
$sql="select * from tips_data";
$res=mysqli_query($con,$sql);
?>

<?php
    include "logic_tips.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Tips & Tricks</title>
</head>
<body>
   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['tips_title'];?></h1><br>
                <h4> Written By: <?php echo $q['username'];?></h4><br>

                <div class="d-flex justify-content-center align-items-center">
                    <?php while($row=mysqli_fetch_assoc($res))?>
                   <div class="row">
                       <div class="col title"><h3><?php echo $q['post']?></h3></div>
                       <div class="col">
                       <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $q['tips_id']?>')"> <span tips_id="like_loop_<?php echo $q['tips_id']?>"><?php echo $q['like_count']?></span></span></a>
                        </div>
                        <div class="col">
                        <a href="javascript:void(0)" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $q['tips_id']?>')"> <span tips_id="dislike_loop_<?php echo $q['tips_id']?>"><?php echo $q['dislike_count']?></span></span></a>
                        </div>
                        <?php } ?> 
                   </div>
                   <script>
                       function like_update(tips_id){
			           jQuery.ajax({
				       url:'update_count_tips.php',
				       type:'post',
				       data:'type=like&tips_id='+tips_id,
				       success:function(result){
					   var cur_count=jQuery('#like_loop_'+tips_id).html();
					   cur_count++;
					   jQuery('#like_loop_'+tips_id).html(cur_count);
			
				       }
			           });
		               }

                       function dislike_update(tips_id)
                       {
                           jQuery.ajax({
                               url:'update_count_tips.php',
                               type:'post',
                               data:'type=dislike&tips_id='+tips_id,
                               success:function(result){
                                var cur_count=jQuery('#dislike_loop_'+tips_id).html();
                                cur_count++;
                                jQuery('#dislike_loop_'+tips_id).html(cur_count);
                               }
                           });
                       }
                   </script>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['tips_content'];?></p>

        <a href="index_tips.php" class="btn" style='color:darkblue;font: size 18px;px;background:lightblue;'>Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>