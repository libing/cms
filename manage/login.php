<?php
//include_once 'include/header.php';
include_once '../_config.inc.php';//包含配置文件

session_start();
if(!empty($_SESSION['login']) && $_SESSION['login'] = 'yes' && !empty($_SESSION['user'])){
	header('Location:http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,-9).'index.php');
}

if(!empty($_POST) && $_GET['ch'] == 'login'){
	$userData = $DBopera->data_query(array('*'),array('members'),array('`user`'=>$_POST['user'],'`passwd`'=>md5( addslashes( $_POST['passwd'] ) )));

	if(!empty($userData)){
		$_SESSION['login'] = 'yes';
		$_SESSION['user'] = $_POST['user'];
		header('Location:http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,-9).'index.php');
	}else{
		echo "<script>alert('用户名或密码错误');</script>";
	}
}
?>
                
<body>
<div id="wrapper">

	<div id="main" style="">
		<form action="login.php?ch=login" class="jNice" method="post">
		<h3>Hiccer登录</h3>
			<fieldset>
				<p><label>用户名:</label><input type="text" name="user" class="text-medium" /></p>
				<p><label>密码:</label><input type="password" name="passwd" class="text-medium" /></p>
				<input type="submit" value="登录" />
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>

