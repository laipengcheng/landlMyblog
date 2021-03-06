<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:83:"E:\phpStudy\PHPTutorial\WWW\landl\public/../application/index\view\index\index.html";i:1541649002;s:75:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\header.html";i:1541646698;s:77:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\carousel.html";i:1541082214;s:74:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\right.html";i:1541596810;s:75:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\rright.html";i:1541082307;s:73:"E:\phpStudy\PHPTutorial\WWW\landl\application\index\view\common\foot.html";i:1541082140;}*/ ?>
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
                <a href="<?php echo url('Index/index'); ?>"><div id="top-logo">landl博客</div></a>
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
<div id="pictures">
    <div id="pictures-max">
        <!--bootstrap图片轮播-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-wh" src="http://127.0.0.1/landl/public/static/index/images/img01.jpg" alt="" data-holder-rendered="true">
                </div>
                <div class="item">
                    <img class="img-wh" src="http://127.0.0.1/landl/public/static/index/images/img02.jpg" alt="" data-holder-rendered="true">
                </div>
                <div class="item">
                    <img class="img-wh" src="http://127.0.0.1/landl/public/static/index/images/img03.jpg" alt="" data-holder-rendered="true">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--轮播结束-->
    </div>
</div>
<!--顶部结束-->

<div id="middle">
<!--左侧开始-->
    <div id="left">
        <div class="h2css"><h2 class="titleH2">文章推荐</h2></div>
        <?php if(is_array($articles) || $articles instanceof \think\Collection || $articles instanceof \think\Paginator): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pic'] != ''): ?>
        <div class="introduce-yes-img">
            <!--文章预览-->
            <div class="introduce-yes-left">
                <div class="introduce-top">
                    <a class="introduce-yes-title" href="<?php echo url('article/index',array('articleid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                </div>
                <div class="introduce-img">
                    <a href="<?php echo url('article/index',array('articleid'=>$vo['id'])); ?>">

                            <img class="img-introduce-wh" src="http://127.0.0.1/landl/public/static<?php echo $vo['pic']; ?>">
                    </a>
                </div>
            </div>
            <div class="introduce-yes-right">
                <div class="introduce-yes-desc"><?php echo $vo['desc']; ?></div>
                <div class="introduce-yes-message">
                    作者:<?php echo $vo['author']; ?>
                    关键词:<a href="<?php echo url('Search/index',array('keywords'=>$vo['cateid'])); ?>"><?php echo $vo['cate']['catename']; ?></a>&nbsp;&nbsp;
                    发布时间:<?php echo date("Y-m-d",$vo['time']); ?>
                </div>
            </div>
        <?php else: ?>
        <div class="introduce-no-img">
            <!--文章预览-->
            <div class="introduce-no-right">
                <a class="introduce-no-title" href="<?php echo url('article/index',array('articleid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                <div class="introduce-no-message">
                    作者:<?php echo $vo['author']; ?>
                    关键词:<a href="<?php echo url('Search/index',array('keywords'=>$vo['cateid'])); ?>"><?php echo $vo['cate']['catename']; ?></a>&nbsp;&nbsp;
                    发布时间:<?php echo date("Y-m-d",$vo['time']); ?>
                </div>
                <div class="introduce-no-desc"><?php echo $vo['desc']; ?></div>
        </div>
        <?php endif; ?>



            <!--预览结束-->
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
            <?php echo $articles->render(); ?>

    </div>
<!--左侧结束-->
<!--右侧开始-->
    <div id="right">
    <div class="h2css"><h2 class="titleH2">站内搜索</h2></div>
    <div class="input-group">
        <form class="form-inline" method="get" action="<?php echo url('Search/index'); ?>">
            <div class="but-left">
                <div class="form-group">
                    <input type="text" name="inkeys" class="form-control" id="" placeholder="请输入搜索内容" required="">
                </div>
            </div>

            <div class="but-right">
                <button type="submit" class="btn btn-default">搜索</button>
            </div>

        </form>

    </div>
    <div class="h2css"><h2 class="titleH2">关键字</h2></div>
    <div id="key-words">
        <div id="key-words-box">
            <?php if(is_array($keywords) || $keywords instanceof \think\Collection || $keywords instanceof \think\Paginator): $i = 0; $__LIST__ = $keywords;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vok): $mod = ($i % 2 );++$i;?>
            <a class="btn btn-default" href="<?php echo url('Search/index',array('keywords'=>$vok['id'])); ?>" role="button"><?php echo $vok['catename']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
    </div>
    <div class="h2css"><h2 class="titleH2">友情链接</h2></div>
    <div id="friend-links">
        <div id="friend-links-box">
            <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a class="btn btn-default btn-sm" href="<?php echo $vo['url']; ?>" role="button"><?php echo $vo['title']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="h2css"><h2 class="titleH2">最近更新</h2></div>
    <div id="updates">
        <div id="updates-box">
            <table class="table table-condensed">

                <?php if(is_array($articleTime) || $articleTime instanceof \think\Collection || $articleTime instanceof \think\Paginator): $i = 0; $__LIST__ = $articleTime;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vot): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><a href="<?php echo url('article/index',array('articleid'=>$vot['id'])); ?>"><?php echo $vot['title']; ?></a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

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