<!DOCTYPE html>
<html>

<head>

<title>Đăng ký | ThePerfume</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="css/style1.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
	<h1>Thông tin đăng ký</h1>
	<div class="w3layoutscontaineragileits">
		<h2>Đăng ký</h2>
		<form action="dangky.php" method="post">
			<input placeholder="User Name" name='username'  type="text" required="">
			<input type="text" Name="fullname" placeholder="Full Name" required="">
			<input type="email" Name="email" placeholder="EMAIL" required="">
			<input type="password" Name="password" placeholder="Password" required="">

			<div>
				<input type="password" Name="repassword" placeholder="Confirm Password" required="">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
			</div>

				<div class="submit">
					<input type="submit" name="btn_submit" value="Đăng ký">
				</div>
				<p> Quay về trang chủ <span>→</span> <a  href="index.php"> Bấm vào đây</a></p>
	</div>
				</form>
			</div>
		</div>	
	</div>
	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>

<?php require_once('lib/connect.php'); ?>
<?php  
if(isset($_POST['btn_submit']))
{
	$maquanly="qlchinh";
	$username=$_POST["username"];
	$fullname=$_POST["fullname"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
	$sql="SELECT * from khachhang Where taikhoan=:taikhoan or email='email'";
	$stm=$o->prepare($sql);
	$stm->execute(array('taikhoan' => $username));
	$c=$stm->rowCount(); 
	if($c>0)
	{
		echo 'Username trùng! Mời nhập lại';
	}
	// if($username=='taikhoan'||$fullname==null||$email==null||$password==null||$repassword==null||$password!=$repassword)
	// {
	// 	echo 'Đăng ký thất bại ! username trùng	';
	// }
	
	else
	{
		$sql="INSERT INTO khachhang(makhachhang,maquanly,tenkhachhang,taikhoan,matkhau,email) VALUES (null,'$maquanly','$fullname','$username','$password','$email')";
		$stm=$o->query($sql);
		echo 'Đăng ký thành công !';
	}
}
?>
