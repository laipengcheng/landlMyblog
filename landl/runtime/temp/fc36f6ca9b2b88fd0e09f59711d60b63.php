<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/home/WWW/landl/public/../application/admin/view/Articles/edit.html";i:1541731490;s:54:"/home/WWW/landl/application/admin/view/common/top.html";i:1541665464;s:55:"/home/WWW/landl/application/admin/view/common/left.html";i:1541665884;}*/ ?>
<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <title>landl后台系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/static/admin/style/demo.css" rel="stylesheet">
    <link href="/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/static/admin/style/animate.css" rel="stylesheet">

</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/images/adam-jansen.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Request::instance()->session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/lit'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-th-list"></i>
                <span class="menu-text">关键字管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/lit'); ?>">
                                    <span class="menu-text">
                                        关键字列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file"></i>
                <span class="menu-text">文章管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Articles/lit'); ?>">
                                    <span class="menu-text">
                                        文章列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('links/lit'); ?>">
                                    <span class="menu-text">
                                        链接列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-download"></i>
                <span class="menu-text">下载管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('downloads/lit'); ?>">
                                    <span class="menu-text">
                                        下载列表                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <!--<li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>-->


    </ul>
    <!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">系统</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Articles/lit'); ?>">文章管理</a>
                    </li>
                    <li class="active">修改文章</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->

            <!-- Page Body -->
            <div class="page-body">

                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-header bordered-bottom bordered-blue">
                                <span class="widget-caption">修改文章</span>
                            </div>
                            <div class="widget-body">
                                <div id="horizontal-form">
                                    <form class="form-horizontal" role="form" action="" enctype="multipart/form-data" method="post">
                                        <input type="hidden" name="id" value="<?php echo $articles['id']; ?>">
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label no-padding-right">文章标题</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="title" placeholder="" name="title" required="" type="text" value="<?php echo $articles['title']; ?>">
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="author" class="col-sm-2 control-label no-padding-right">文章作者</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="author" placeholder="" name="author" type="text" value="<?php echo $articles['author']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="keywords" class="col-sm-2 control-label no-padding-right">文章关键字</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" id="keywords" placeholder="" name="keywords" type="text" value="<?php echo $articles['keywords']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="desc" class="col-sm-2 control-label no-padding-right">文章简介</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" id="desc" name="desc" ><?php echo $articles['desc']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pic" class="col-sm-2 control-label no-padding-right">文章图片</label>
                                            <div class="col-sm-6">
                                                <input class="input-large" id="pic" placeholder="" name="pic" style="display: inline" type="file">
                                                <?php if($articles['pic'] != ''): ?>
                                                <img src="/static<?php echo $articles['pic']; ?>" height="50">
                                                <?php else: ?>
                                                暂无图片
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cateid" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                            <div class="col-sm-6">
                                                <select name="cateid" id="cateid">
                                                    <option value="">请选择栏目</option>
                                                    <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <option <?php if($vo['id'] == $articles['cateid']): ?>selected="selected"<?php endif; ?> value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                            <p class="help-block col-sm-4 red">* 必填</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="state" class="col-sm-2 control-label no-padding-right">是否推荐</label>
                                            <div class="col-sm-6">
                                                <label>
                                                    <input <?php if($articles['state'] == 1): ?>checked="checked"<?php endif; ?> class="checkbox-slider yesno" type="checkbox" name="state" id="state">
                                                    <span class="text"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content" class="col-sm-2 control-label no-padding-right">文章内容</label>
                                            <div class="col-sm-6">
                                                <div id="editor" style="width: 750px;"><?php echo $articles['content']; ?></div>
                                                <textarea id="content" name="content" style="width:100%; height:400px;display: none;"><?php echo $articles['content']; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">保存信息</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
</div>

<!--Basic Scripts-->
<script src="/static/admin/style/jquery_002.js"></script>
<script src="/static/admin/style/bootstrap.js"></script>
<script src="/static/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/style/beyond.js"></script>
<script src="/static/admin/wangEditor/src/js/xss/xss.js"></script>
<script type="text/javascript" src="/static/admin/wangEditor/release/wangEditor.min.js"></script>
<script type="text/javascript">
    var E = window.wangEditor
    var editor = new E('#editor')
    var $content = $('#content')
    editor.customConfig.onchange = function (html) {
        // 监控变化，同步更新到 textarea
        $content.val(html)
    }
    editor.customConfig.linkImgCheck = function (src) {
        console.log(src) // 图片的链接

        return true // 返回 true 表示校验成功
        // return '验证失败' // 返回字符串，即校验失败的提示信息
    }
    // 或者 var editor = new E( document.getElementById('editor') )
    editor.create()
</script>


</body></html>
