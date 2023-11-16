<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "logic_sell.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$username = $_FILES['my_image']['username'];
	$sell_mail = $_FILES['my_image']['sell_mail'];
	$sell_price = $_FILES['my_image']['sell_price'];

	if ($error === 0) {
		if ($img_size > 500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: create_sell.php?error=$em");
		}

		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");
			

			if (in_array($img_ex_lc, $allowed_exs)) {
				$username = $_REQUEST['username'];
				$sell_mail = $_REQUEST['sell_mail'];
				$sell_price = $_REQUEST['sell_price'];
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'sells/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO sell_data(sell_url, username, sell_mail, sell_price) VALUES('$new_img_name', '$username', '$sell_mail', '$sell_price')";
				mysqli_query($conn, $sql);
				header("Location: index_sell.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: create_sell.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: create_sell.php?error=$em");
	}

}else {
	header("Location: create_sell.php");
}
?>