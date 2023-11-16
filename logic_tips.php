<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "art website");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM tips_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $tips_title = $_REQUEST['tips_title'];
        $tips_content = $_REQUEST['tips_content'];
        $username = $_REQUEST['username'];

        $sql = "INSERT INTO tips_data(tips_title, tips_content, username) VALUES('$tips_title', '$tips_content', '$username')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_tips.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['tips_id'])){
        $tips_id = $_REQUEST['tips_id'];
        $sql = "SELECT * FROM tips_data WHERE tips_id = $tips_id";
        $query = mysqli_query($conn, $sql);
    }

?>

