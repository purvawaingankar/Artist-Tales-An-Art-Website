<?php
$conn = mysqli_connect("localhost", "root", "", "art website");
$type=$_POST['type'];
$tips_id=$_POST['tips_id'];
if($type=='like'){
    $sql="update tips_data set like_count=like_count+1 where tips_id=$tips_id";
}else{
    $sql="update tips_data set dislike_count=dislike_count+1 where tips_id=$tips_id";
}
$query = mysqli_query($conn,$sql);
?>

