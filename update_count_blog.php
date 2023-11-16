<?php
$conn = mysqli_connect("localhost", "root", "", "art website");
$type=$_POST['type'];
$blog_id=$_POST['blog_id'];
if($type=='like'){
    $sql="update blog_data set like_count=like_count+1 where blog_id=$blog_id";
}else{
    $sql="update blog_data set dislike_count=dislike_count+1 where blog_id=$blog_id";
}
$res=mysqli_query($conn,$sql);
?>

