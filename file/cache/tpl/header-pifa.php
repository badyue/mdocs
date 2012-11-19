<?php defined('IN_DESTOON') or exit('Access Denied');?><!doctype html>
<html>
<head>
<meta charset="<?php echo DT_CHARSET;?>">
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?><?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?><?php } ?></title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_PATH;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<link rel="stylesheet" href="<?php echo DT_SKIN;?>style.css"/>
<link rel="stylesheet" href="<?php echo DT_SKIN;?>share.css"/>
<?php if($moduleid>4) { ?><link rel="stylesheet" href="<?php echo DT_SKIN;?><?php echo $module;?>.css"/><?php } ?>
<?php if($CSS) { ?>
<?php if(is_array($CSS)) { foreach($CSS as $css) { ?>
<link rel="stylesheet" href="<?php echo DT_SKIN;?><?php echo $css;?>.css"/>
<?php } } ?>
<?php } ?>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo DT_SKIN;?>ie6.css"/>
<![endif]-->
<?php if(!DT_DEBUG) { ?><script>window.onerror=function(){return true;}</script><?php } ?>
<?php if($itemid && $DT['anticopy']) { ?>
<script>
document.oncontextmenu=function(e){return false;};
document.onselectstart=function(e){return false;};
</script>
<?php } ?>
<script src="<?php echo DT_PATH;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
<script src="<?php echo DT_PATH;?>file/script/config.js"></script>
<script src="<?php echo DT_PATH;?>file/script/common.js"></script>
<script src="<?php echo DT_PATH;?>file/script/page.js"></script>
</head>
<body>
<!--main-->
<div class="main">
<!--顶部-->
<div class="top">
<div class="k2-area k2-fix-float">
<div class="f-left">
<span>您好， 欢迎来到华东国际珠宝网！</span>
<!--<span><a href="login.html">请登录</a></span>
<span><a href="register.html">免费注册</a></span>-->
</div>
<div class="f-right" id="destoon_member"></div>
</div>
</div>
<!--头部logo和搜索-->
<div class="header k2-single">
<div class="k2-area k2-fix-float">
<div class="f_l logo">
<a href="<?php echo $MODULE['1']['linkurl'];?>"><img src="http://www.jewechina.com/file/upload/201211/11/19-51-12-85-1.png" width= "200" height="60"></a>
</div>
<div class="f_l">
<img width="750" height="100" src="http://img.china.alibaba.com/cms/upload/2012/971/344/443179_1573916616.png">
</div>
</div>
</div>
<!--头部end-->
<!--导航-->
<div class="nav">
<ul class="k2-area k2-fix-float">
<li<?php if($moduleid<4) { ?> class="current"<?php } ?>><a href="<?php echo $MODULE['1']['linkurl'];?>"><span>首页</span></a></li><?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?><?php if($m['ismenu']) { ?><li<?php if($m['moduleid']==$moduleid) { ?> class="menuon"<?php } ?>><a href="<?php echo $m['linkurl'];?>"<?php if($m['isblank']) { ?> target="_blank"<?php } ?>><span<?php if($m['style']) { ?> style="color:<?php echo $m['style'];?>;"<?php } ?>><?php echo $m['name'];?></span></a></li><?php } ?><?php } } ?>
</ul>
</div>
<!--导航end-->