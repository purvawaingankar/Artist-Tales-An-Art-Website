<?php
$conn = mysqli_connect("localhost", "root", "", "art website");
$type=$_POST['type'];
$img_id=$_POST['img_id'];
if($type=='like'){
    $sql="update img_data set like_count=like_count+1 where img_id=$img_id";
}else{
    $sql="update img_data set dislike_count=dislike_count+1 where img_id=$img_id";
}
$query = mysqli_query($conn,$sql);
?>

