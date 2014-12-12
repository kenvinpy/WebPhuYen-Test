<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
require_once("ketnoi.php");
if(isset($_POST['submit'])){
if ( $_GET['act'] == "do" )
{
	
	// Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
	$username = addslashes( $_POST['username'] );
	$password =  addslashes( $_POST['password'] );
	// Lấy thông tin của username đã nhập trong table members
	$sql_query = @mysql_query("SELECT id, username, pass FROM thanh_vien WHERE username='{$username}'");
	$member = @mysql_fetch_array( $sql_query );
		// Nếu username này không tồn tại thì....
	if ( @mysql_num_rows( $sql_query ) <= 0 )
	{
		print "Tên truy nhập không tồn tại. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	// Nếu username này tồn tại thì tiếp tục kiểm tra mật khẩu
	if ( $password != $member['pass'] )
	{
		print "Nhập sai mật khẩu. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	/*/ Khởi động phiên làm việc (session)
	$_SESSION['user_id'] = $member['id'];
	$_SESSION['user_admin'] = $member['admin'];
	*/// Thông báo đăng nhập thành công
	print "Bạn đã đăng nhập với tài khoản {$member['username']} thành công. <a href='index.php'>Nhấp vào đây để vào trang chủ</a>";
}



}
?> 
<form action="login.php?act=do" method="post">
Tên truy nhập: <input type="text" name="username" value="">
Mật khẩu: <input type="password" name="password" value="">
<input type="submit" name="submit" value="Đăng nhập">
</form>
</body>
</html>
