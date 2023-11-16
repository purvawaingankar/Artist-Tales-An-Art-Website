<?php
$conn = mysqli_connect("localhost", "root", "", "art website");
$type=$_POST['type'];
$sell_id=$_POST['sell_id'];
if($type=='like'){
    $sql="update sell_data set like_count=like_count+1 where sell_id=$sell_id";
}else{
    $sql="update sell_data set dislike_count=dislike_count+1 where sell_id=$sell_id";
}
$query = mysqli_query($conn,$sql);
?>

