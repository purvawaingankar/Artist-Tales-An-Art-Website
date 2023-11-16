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
    $sql = "SELECT * FROM blog_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $blog_title = $_REQUEST['blog_title'];
        $blog_content = $_REQUEST['blog_content'];
        $username = $_REQUEST['username'];

        $sql = "INSERT INTO blog_data(blog_title, blog_content, username) VALUES('$blog_title', '$blog_content', '$username')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_blog.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['blog_id'])){
        $blog_id = $_REQUEST['blog_id'];
        $sql = "SELECT * FROM blog_data WHERE blog_id = $blog_id";
        $query = mysqli_query($conn, $sql);
    }

?>

