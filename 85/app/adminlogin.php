<!DOCTYPE html>

<html class="no-js"><head><meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登陆到管理系统 - Powered by CISP-PTE</title>
        <meta name="robots" content="noindex, nofollow">
        <link rel="stylesheet" href="./css/normalize.css">
<link rel="stylesheet" href="./css/grid.css">
<link rel="stylesheet" href="./css/style.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.js?v=17.10.29"></script>
<script src="js/respond.js?v=17.10.29"></script>
<![endif]-->    </head>
	
<?php error_reporting(0); ?>
	
<?php
	
	session_start();

	$login = $_POST['name'];
	$password = $_POST['password'];
	if( $login == "admin" && $password == "password123" )
	{
		$_SESSION['logged_in'] = 'True';
		header("location: admin/index.php");
	}
	
?>
<body class="body-100">
<div class="typecho-login-wrap">
    <div class="typecho-login">
        <h1 class="i-logo">CISP-PTE</h1>
        <form action="adminlogin.php" method="post" name="login" role="form">
            <p>
                <label for="name" class="sr-only">用户名</label>
                <input type="text" id="name" name="name" value="" placeholder="用户名" class="text-l w-100" autofocus="">
            </p>
            <p>
                <label for="password" class="sr-only">密码</label>
                <input type="password" id="password" name="password" class="text-l w-100" placeholder="密码">
            </p>
            <p class="submit">
                <button type="submit" class="btn btn-l w-100 primary">登录</button>
            </p>
            <p>
                <label for="remember"><input type="checkbox" name="remember" class="checkbox" value="1" id="remember"> 下次自动登录</label>
            </p>
        </form>
        
    </div>
</div>
<script src="./css/jquery.js"></script>
<script src="./css/jquery-ui.js"></script>
<script src="./css/typecho.js"></script>
 
</body></html>