<?php
if (isset($_SESSION['id']) == false) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location: http://localhost/Project/login.php');
}else {
	if (isset($_SESSION['level']) == true) {
		// Ngược lại nếu đã đăng nhập
		$level = $_SESSION['level'];
		// Kiểm tra quyền của người đó có phải là admin hay không
		if ($level == '0') {
			// Nếu không phải admin thì xuất thông báo
			echo "<script language='javascript'>alert('Bạn không đủ quyền để sử dụng tính năng này !!');</script>";
			echo "<a href='http://localhost/Project/index.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}
}
?>