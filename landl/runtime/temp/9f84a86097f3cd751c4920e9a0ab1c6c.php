<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/home/WWW/landl/public/../application/admin/view/Login/login.html";i:1541724130;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>landl后台系统</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/admin.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">landl登陆</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="code" name="code" type="text" style="width: 80px; float: left">
                    <div class="code-img">
                    <img style="float: left; cursor: pointer;" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" />
		    </div>
                </div>

                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>

        </form>
    </div>
    <!--Basic Scripts-->
    <script src="/static/admin/style/jquery.js"></script>
    <script src="/static/admin/style/bootstrap.js"></script>
    <script src="/static/admin/style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="/static/admin/style/beyond.js"></script>




</body><!--Body Ends--></html>
