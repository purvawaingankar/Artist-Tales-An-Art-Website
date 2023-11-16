<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "logic_img.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$username = $_FILES['my_image']['username'];

	if ($error === 0) {
		if ($img_size > 500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: create_img.php?error=$em");
		}

		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");
			
			if (in_array($img_ex_lc, $allowed_exs)) {
				$username = $_REQUEST['username'];
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'images/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO img_data(img_url, username) VALUES('$new_img_name', '$username')";
				mysqli_query($conn, $sql);
				header("Location: index_img.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: create_img.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: create_img.php?error=$em");
	}

}else {
	header("Location: create_img.php");
}
?>