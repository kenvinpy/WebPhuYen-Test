<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Đăng Ký</title>
<?php
// Tải file mysql.php lên
require_once("ketnoi.php");
//Kiem tra email co hop le hay ko
/*function check_email($email) {
	if (strlen($email) == 0) return false;
	if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) return true;
	return false;
}*/
if(isset($_POST['submit'])){
if ( $_GET['act'] == "do" )
{
	// Dùng hàm addslashes() để tránh SQL injection, dùng hàm md5() để mã hóa password
	$username = addslashes( $_POST['username'] );
	$password =  addslashes( $_POST['password'] );
	$verify_password =  addslashes( $_POST['verify_password']  );
	$email = addslashes( $_POST['email'] );
	$dt = addslashes( $_POST['dt'] );
	
	$dc = addslashes( $_POST['dc'] );
	// Kiểm tra 7 thông tin, nếu có bất kỳ thông tin chưa điền thì sẽ báo lỗi
	if ( ! $username || ! $_POST['password'] || ! $_POST['verify_password'] || ! $email || ! $dt || ! $dc)
	{
		print "Xin vui lòng nhập đầy đủ các thông tin. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	// Kiểm tra username nay co nguoi dung chua
	if ( mysql_num_rows(mysql_query("SELECT username FROM thanh_vien WHERE username='$username'"))>0)
	{
		print "Username này đã có người dùng, Bạn vui lòng chọn username khác. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	/*/ Kiểm tra email nay co hop le ko
	if (!check_email($email))
	{
		print "Email này ko hợp lệ. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	*/
	
	// Kiểm tra email nay co nguoi dung chua
	if ( mysql_num_rows(mysql_query("SELECT email FROM thanh_vien WHERE email='$email'"))>0)
	{
		print "Email này đã có người dùng, Bạn vui lòng chọn Email khác. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	// Kiểm tra mật khẩu, bắt buộc mật khẩu nhập lúc đầu và mật khẩu lúc sau phải trùng nhau
	if ( $password != $verify_password )
	{
		print "Mật khẩu không giống nhau, bạn hãy nhập lại mật khẩu. <a href='javascript:history.go(-1)'>Nhấp vào đây để quay trở lại</a>";
		exit;
	}
	// Tiến hành tạo tài khoản
	@$a=mysql_query("INSERT INTO thanh_vien (username, pass, email,dien_thoai,dia_chi) VALUES ('{$username}', '{$password}', '{$email}', '{$dt}', '{$dc}')");
	// Thông báo hoàn tất việc tạo tài khoản
	if ($a)
		print "Tài khoản {$username} đã được tạo. <a href='login.php'>Nhấp vào đây để đăng nhập</a>";
	else
		print "Có lỗi trong quá trình đăng kí, Vui lòng liên hệ BQT";



}
}
?>


<form action="dangki.php?act=do" method="post">
	<table border="1" width="400" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0">
		<tr>
			<td>Tên truy nhập:</td>
			<td><input type="text" name="username" value=""></td>
		</tr>
		<tr>
			<td>Mật khẩu:</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td>Xác nhận mật khẩu:</td>
			<td><input type="password" name="verify_password" value=""></td>
		</tr>
		<tr>
			<td>Địa chỉ E-mail:</td>
			<td><input type="text" name="email" value=""></td>
		</tr>
		<tr>
			<td>Điện thoại</td>
			<td><input type="text" name="dt" value="" id="dt"></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><input type="text" name="dc" value="" id="dc"></td>
		</tr>
		<tr>
			<td><center><input type="submit" name="submit" value="Đăng ký"></center></td>
			<td><Font size="5">&nbsp; &nbsp;&nbsp;&nbsp;Đăng ký</Font></td>
		</tr>
	</table>
</form>