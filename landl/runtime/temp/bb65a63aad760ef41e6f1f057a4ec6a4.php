<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:89:"E:\phpStudy\PHPTutorial\WWW\landl\public/../application/index\view\download\download.html";i:1541401381;s:75:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\header.html";i:1541084271;s:74:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\right.html";i:1541082124;s:75:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\rright.html";i:1541082307;s:73:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\foot.html";i:1541082140;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>landl</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link href="http://127.0.0.1/landl/public/static/index/style/lady.css" rel="stylesheet">
    <link href="http://127.0.0.1/landl/public/static/index/style/bootstrap.css" rel="stylesheet">
    <!--Beyond styles-->
</head>
<body>

<!--顶部导航开始-->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div id="top">
        <div id="top-middle">
            <div id="top-left">
                <a href="#"><div id="top-logo">landl博客</div></a>
            </div>
            <div id="top-right">
                <div id="menu">
                    <li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
                    <li><a href="<?php echo url('Allarticle/index'); ?>">博文</a></li>
                    <li><a href="<?php echo url('Download/index'); ?>">下载</a></li>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--顶部导航结束-->

<!--首页图片-->
<div class="other-img"><img src="http://127.0.0.1/landl/public/static/index/images/img02.jpg"></div>
<!--顶部结束-->

<div id="middle">
<!--左侧开始-->
    <div id="left-download">
        <div class="h2css"><h2 class="titleH2">资源下载</h2></div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>名称</th>
                    <th>地址</th>
                    <th>密码</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <th>asdfasdfasdfasdfasdfadsf</th>
                    <th><a href="#">网盘地址</a></th>
                    <th>s25s</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>asdfasdfasdfasdfasdfadsf</th>
                    <th><a href="#">网盘地址</a></th>
                    <th>s25s</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>asdfasdfasdfasdfasdfadsf</th>
                    <th><a href="#">网盘地址</a></th>
                    <th>s25s</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th>asdfasdfasdfasdfasdfadsf</th>
                    <th><a href="#">网盘地址</a></th>
                    <th>s25s</th>
                </tr>

                </tbody>
            </table>


    </div>
<!--左侧结束-->
<!--右侧开始-->
    <div id="right">
    <div class="h2css"><h2 class="titleH2">站内搜索</h2></div>
    <div class="input-group">
        <input type="text" class="form-control input-lg"><span class="input-group-addon btn btn-primary">搜索</span>
    </div>
    <div class="h2css"><h2 class="titleH2">关键字</h2></div>
    <div id="key-words">
        <div id="key-words-box">
            <a class="btn btn-default" href="#" role="button">Link</a>
            <a class="btn btn-default" href="#" role="button">html</a>
            <a class="btn btn-default" href="#" role="button">php</a>
            <a class="btn btn-default" href="#" role="button">win</a>
            <a class="btn btn-default" href="#" role="button">www</a>
            <a class="btn btn-default" href="#" role="button">js</a>
            <a class="btn btn-default" href="#" role="button">jq</a>
            <a class="btn btn-default" href="#" role="button">css</a>
            <a class="btn btn-default" href="#" role="button">linux</a>
            <a class="btn btn-default" href="#" role="button">Link</a>
            <a class="btn btn-default" href="#" role="button">Link</a>
            <a class="btn btn-default" href="#" role="button">Link</a>
            <a class="btn btn-default" href="#" role="button">Link</a>

        </div>
    </div>
    <div class="h2css"><h2 class="titleH2">友情链接</h2></div>
    <div id="friend-links">
        <div id="friend-links-box">
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
            <a class="btn btn-default btn-sm" href="#" role="button">duanliang</a><a class="btn btn-default btn-sm" href="#" role="button">duanliang</a>
        </div>
    </div>
    <div class="h2css"><h2 class="titleH2">最近更新</h2></div>
    <div id="updates">
        <div id="updates-box">
            <table class="table table-condensed">
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr><tr>
                <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
            </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>
                <tr>
                    <td><a href="#">这是一个很长很长很长很长很长长的链接</a></td>
                </tr>


            </table>
        </div>
    </div>
</div>
<!--右侧结束-->
</div>

<!--最右侧-->
    <!--返回顶部-->
<div class="return_top"><img src="http://127.0.0.1/landl/public/static/index/images/go-top.png"></div>
<!--联系我-->
<a id="about-email" target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=OwgKCgoOAgILDgh7SkoVWFRW" style="text-decoration:none;"><img src="http://127.0.0.1/landl/public/static/index/images/about-email.png"></a>

<!--最右侧结束-->

<!--底部开始-->
    <div id="foot">
    <p>备案号：蜀ICP备18012869号-1</p>
</div>
<!--底部结束-->



<!--Basic Scripts-->
<script type="text/javascript" src="http://127.0.0.1/landl/public/static/index/style/jquery.js"></script>
<script type="text/javascript" src="http://127.0.0.1/landl/public/static/index/style/lady.js"></script>
<script type="text/javascript" src="http://127.0.0.1/landl/public/static/index/style/bootstrap.js"></script>
<!--Beyond Scripts-->

</body>
</html>