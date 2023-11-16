<?php
  include "logic_tips.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Tips & Tricks</title>
</head>
<body>

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert" style='color:darkblue;background:lightblue;'>
                    <center><b>Added successfully</b></center>
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create_tips.php" class="btn" style='color:white;font: size 18px;background:darkblue;'><b>+ Create a new post</b></a>
            <a href="start.php" class="btn btn-info" role="button" style='color:white;font: size 18px;background:darkblue;'><b> Go Back </b></a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center p-3 my-3">
                    <div class="card" style='color:darkblue;background:lightblue;'>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['tips_title'];?></h5>
                            <h6 class="card-title">Written By: <?php echo $q['username'];?></h6>
                            <p class="card-text"><?php echo substr($q['tips_content'], 0, 50);?>...</p>
                            <a href="view_tips.php?tips_id=<?php echo $q['tips_id']?>" class="btn" style='color:lightblue;font: size 18px;px;background:darkblue;'>Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
      