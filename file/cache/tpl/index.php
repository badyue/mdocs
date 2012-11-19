<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('index');?>
<?php $JS = array('lib/jquery.switchable-2.0.min', 'index');?>
<?php include template('header');?>
<!-- 第一部分-->
<div class="section k2-area k2-space k2-fix-float">
<div class="k2-w142 k2-fix-float f-left">
<div class="k2-fix-float">
<div class="k2-w48 frame-category f-left">
<ul>
<li><a href="#">珍珠饰品</a></li>
<li><a href="#">珍珠工艺品</a></li>
<li><a href="#">珍珠延伸产品</a></li>
<li><a href="#">珍珠原料</a></li>
<li><a href="#">珍珠养殖类</a></li>
<li><a href="#">贝壳产品</a></li>
<li><a href="#">珍珠设备/配件</a></li>
<li><a href="#">其它产品</a></li>
</ul>
</div>
<div class="k2-w110 frame-banner f-right">
<div id="slide">
<ul>
<li><?php echo ad(20);?></li>
<li><?php echo ad(21);?></li>
<li><?php echo ad(22);?></li>
<li><?php echo ad(23);?></li>
<li><?php echo ad(24);?></li>
<li><?php echo ad(25);?></li>
</ul>
</div>
</div>
<div class="frame-apply k2-fix-float">
<ul class="po-list">
<li><?php echo ad(20);?></li>
<li><?php echo ad(21);?></li>
<li><?php echo ad(22);?></li>
<li><?php echo ad(23);?></li>
<li><?php echo ad(24);?></li>
<li><?php echo ad(25);?></li>
</ul>
</div>
</div>


</div>
<div class="k2-w48 f-right">
<div class="frame-link">
<?php if($DT['page_login']) { ?>
 未登录状态
<?php } else { ?>
<ul class="login-nav k2-fix-float">
  <li><a href="http://china.alibaba.com/member/join/common_join.htm?leadUrl=http://china.alibaba.com/" title="马上注册，做生意、交商友、订阅行情" class="register-btn">免费注册</a></li>
  <li><a href=" https://loginchina.alibaba.com/member/signin.htm?spm=a260k.635.5067261.2&amp;Done=http://china.alibaba.com/" title="马上登录，享受会员专属服务" class="login-btn">登录</a></li>
  <li> <a href="http://page.china.alibaba.com/indexseller.html" title="成为诚信通会员，将拥有更多服务" class="supplier-btn" >供应商专区</a></li>
</ul>
<?php } ?>
  
</div>
<div class="frame-intro frame-border">
<dl class="tabs">
<dt class="tabtitle">
<span class="tabbtn tabcur"><span>买家入门</span></span>
<span class="tabbtn tablast"><span>卖家入门</span></span>
</dt>
<dd class="tabbody">
<div class="tabcont" style="display: block;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
</ul>
</div>
<div class="tabcont" style="display: none;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布---？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
</ul>
</div>
  </dd>
  </dl>

<div class="hrule">
<h4>安全网上贸易</h4>
<ul class="list-product k2-fix-float">
<li> <a href="http://page.china.alibaba.com/buyerprotection/buyer.html" class="a-mix" title="交易有保障，采购更放心"><span class="cell-security-icon"><img src="http://i00.c.aliimg.com/cms/upload/2012/462/064/460264_1451252140.jpg" alt="买家保障" class="title-name1"></span><span class="description">买家保障</span></a></li>
<li> <a href="http://page.china.alibaba.com/trust/rztx.html" class="a-mix" title="真实验证商家资质和实力"><span class="cell-security-icon"><img src="http://i00.c.aliimg.com/cms/upload/2012/462/064/460264_1451252140.jpg" alt="商家认证" class="title-name2"></span><span class="description">商家认证</span></a></li>
<li> <a href="http://service.china.alibaba.com/kf/detail/8317475.html" class="a-mix" title="通过支付宝付款，保障交易安全"><span class="cell-security-icon"><img src="http://i00.c.aliimg.com/cms/upload/2012/462/064/460264_1451252140.jpg" alt="交易安全" class="title-name3"></span><span class="description">安全交易</span></a></li>
</ul>
</div>
</div>
</div>
</div>
<!--第一部分end-->
<!--
<?php echo $MODULE['6']['linkurl'];?> 求购
<!--<?php echo tag("moduleid=6&condition=status=3&areaid=$cityid&pagesize=7&target=_blank&order=addtime desc");?>- ->
<?php echo $MODULE['5']['linkurl'];?> 供应
<!--<?php echo tag("moduleid=5&condition=status=3&areaid=$cityid&pagesize=7&target=_blank&order=addtime desc");?>- ->
<?php echo $MODULE['22']['linkurl'];?> 招商
<!--<?php echo tag("moduleid=22&condition=status=3&areaid=$cityid&pagesize=7&target=_blank&order=addtime desc");?>- ->
<?php echo $MODULE['5']['linkurl'];?> 推荐
<!--<?php echo tag("moduleid=5&length=14&condition=status=3 and level>0 and thumb<>''&areaid=$cityid&pagesize=".$DT['page_mall']."&order=addtime desc&width=100&height=100&cols=5&target=_blank&template=thumb-table");?>- ->
<?php echo $MODULE['16']['linkurl'];?> 热卖
<!--<?php echo tag("moduleid=16&length=14&condition=status=3&areaid=$cityid&pagesize=".$DT['page_mall']."&order=orders desc&width=90&height=90&cols=5&target=_blank&template=thumb-mall");?>- ->
<?php echo $MODULE['21']['linkurl'];?> 行业资讯
<!--<?php echo tag("moduleid=21&condition=status=3 and level=5&areaid=$cityid&order=addtime desc&pagesize=1&target=_blank&template=list-hl");?>- ->
<?php echo $MODULE['13']['linkurl'];?> 品牌展示
<!--<?php echo tag("moduleid=13&condition=status=3 and level>0&areaid=$cityid&pagesize=".$DT['page_brand']."&order=addtime desc&width=120&height=40&cols=4&target=_blank&template=thumb-brand");?>- ->
<?php echo $MODULE['4']['linkurl'];?> 最新加入企业
<!--<?php echo tag("moduleid=4&condition=groupid>5 and catids<>''&areaid=$cityid&pagesize=".$DT['page_com']."&order=userid desc&template=list-com");?>- ->
<?php echo $MODULE['11']['linkurl'];?> 推荐专题
<!--<?php $tags=tag("moduleid=11&condition=status=3 and level>0&pagesize=".$DT['page_special']."&datetype=2&order=addtime desc&template=null");?>- ->
<?php echo $MODULE['4']['linkurl'];?><?php echo rewrite('news.php?more=1');?> 企业新闻
<!--<?php echo tag("table=news&condition=status=3 and level>0&pagesize=".$DT['page_comnews']."&datetype=2&order=addtime desc&target=_blank");?>- ->
分类
<?php include template('catalog', 'chip');?>
-->
<!--第二部分-->
<div class="section k2-area k2-space k2-fix-float">
<div class="k2-w142 k2-fix-float f-left">
<div class="frame-brand frame-brand-hot k2-frame k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">热门品牌</h3>
</div>
<ul class="brand-list">
<li><a href="http://dudu.mbaobao.com/?l_bi=a_8_1_1_1_1" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_dudu.jpg" title="DUDU"><span>DUDU</span></a></li>
<li><a href="http://lm.mbaobao.com/?l_bi=a_8_1_1_1_2" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_lm.jpg" title="浪美"><span>浪美</span></a></li>
<li><a href="http://alfa.mbaobao.com/?l_bi=a_8_1_1_1_3" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_alfa.jpg" title="阿尔法·阿蒂斯特"><span>阿尔法·阿蒂斯特</span></a></li>
<li><a href="http://fy.mbaobao.com/?l_bi=a_8_1_1_1_4" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fy.jpg" title="飞扬空间"><span>飞扬空间</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
<li><a href="http://dudu.mbaobao.com/?l_bi=a_8_1_1_1_1" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_dudu.jpg" title="DUDU"><span>DUDU</span></a></li>
<li><a href="http://lm.mbaobao.com/?l_bi=a_8_1_1_1_2" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_lm.jpg" title="浪美"><span>浪美</span></a></li>
<li><a href="http://alfa.mbaobao.com/?l_bi=a_8_1_1_1_3" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_alfa.jpg" title="阿尔法·阿蒂斯特"><span>阿尔法·阿蒂斯特</span></a></li>
<li><a href="http://fy.mbaobao.com/?l_bi=a_8_1_1_1_4" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fy.jpg" title="飞扬空间"><span>飞扬空间</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
<li><a href="http://cover.mbaobao.com/?l_bi=a_8_1_1_1_6" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_kw.jpg" title="卡文"><span>卡文</span></a></li>
<li><a href="http://finebags.mbaobao.com/?l_bi=a_8_1_1_1_7" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fbs.jpg" title="梵贝斯"><span>梵贝斯</span></a></li>
<li><a href="http://gb.mbaobao.com/?l_bi=a_8_1_1_1_8" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_gb.jpg" title="戈尔本"><span>戈尔本</span></a></li>
<li><a href="http://landeiw.mbaobao.com/?l_bi=a_8_1_1_1_9" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_ldw.jpg" title="朗迪威"><span>朗迪威</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
<li><a href="http://cover.mbaobao.com/?l_bi=a_8_1_1_1_6" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_kw.jpg" title="卡文"><span>卡文</span></a></li>
<li><a href="http://finebags.mbaobao.com/?l_bi=a_8_1_1_1_7" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fbs.jpg" title="梵贝斯"><span>梵贝斯</span></a></li>
<li><a href="http://gb.mbaobao.com/?l_bi=a_8_1_1_1_8" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_gb.jpg" title="戈尔本"><span>戈尔本</span></a></li>
<li><a href="http://landeiw.mbaobao.com/?l_bi=a_8_1_1_1_9" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_ldw.jpg" title="朗迪威"><span>朗迪威</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
</ul>
</div>
</div>
<div class="k2-w48 f-right">
<div class="frame-news k2-frame">
<div class="title"><h3>最新资讯</h3></div>
</div>
<div class="frame-info frame-border" style="margin-bottom:8px">
<dl class="tabs">
<dt class="tabtitle">
<span class="tabbtn tabcur"><span>最新求购</span></span>
<span class="tabbtn tablast"><span>最新供应</span></span>
</dt>
<dd class="tabbody">
<div class="tabcont" style="display: block;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
</ul>
</div>
<div class="tabcont" style="display: none;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布---？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
</ul>
</div>
  </dd>
  </dl>
</div>
<div class="frame-info frame-border">
<dl class="tabs">
<dt class="tabtitle">
<span class="tabbtn tabcur"><span>珠宝资讯</span></span>
<span class="tabbtn tablast"><span>珠宝代理</span></span>
</dt>
<dd class="tabbody">
<div class="tabcont" style="display: block;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
</ul>
</div>
<div class="tabcont" style="display: none;">
<ul>
<li><a href="#">[快速入门]询价单是什么，如何发布---？</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
<li><a href="#">[快速入门]如何找到优质供应商？</a></li>
<li><a href="#">放心采购，交易请认准“买家保障”！</a></li>
</ul>
</div>
  </dd>
  </dl>
</div>

</div>
</div>
<!--第二部分end-->
<!--第三部分-->
<div class="section k2-area">
<div class="frame-brand frame-brand-new k2-frame k2-space k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">最新加入</h3>
</div>
<ul class="brand-list">
<li><a href="http://dudu.mbaobao.com/?l_bi=a_8_1_1_1_1" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_dudu.jpg" title="DUDU"><span>DUDU</span></a></li>
<li><a href="http://lm.mbaobao.com/?l_bi=a_8_1_1_1_2" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_lm.jpg" title="浪美"><span>浪美</span></a></li>
<li><a href="http://alfa.mbaobao.com/?l_bi=a_8_1_1_1_3" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_alfa.jpg" title="阿尔法·阿蒂斯特"><span>阿尔法·阿蒂斯特</span></a></li>
<li><a href="http://fy.mbaobao.com/?l_bi=a_8_1_1_1_4" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fy.jpg" title="飞扬空间"><span>飞扬空间</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
</ul>
</div>
<div class="frame-brand frame-brand-all k2-frame k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">品牌中心</h3>
</div>
<ul class="brand-list">
<li><a href="http://dudu.mbaobao.com/?l_bi=a_8_1_1_1_1" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_dudu.jpg" title="DUDU"><span>DUDU</span></a></li>
<li><a href="http://lm.mbaobao.com/?l_bi=a_8_1_1_1_2" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_lm.jpg" title="浪美"><span>浪美</span></a></li>
<li><a href="http://alfa.mbaobao.com/?l_bi=a_8_1_1_1_3" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_alfa.jpg" title="阿尔法·阿蒂斯特"><span>阿尔法·阿蒂斯特</span></a></li>
<li><a href="http://fy.mbaobao.com/?l_bi=a_8_1_1_1_4" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fy.jpg" title="飞扬空间"><span>飞扬空间</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
<li><a href="http://cover.mbaobao.com/?l_bi=a_8_1_1_1_6" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_kw.jpg" title="卡文"><span>卡文</span></a></li>
<li><a href="http://finebags.mbaobao.com/?l_bi=a_8_1_1_1_7" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fbs.jpg" title="梵贝斯"><span>梵贝斯</span></a></li>
<li><a href="http://gb.mbaobao.com/?l_bi=a_8_1_1_1_8" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_gb.jpg" title="戈尔本"><span>戈尔本</span></a></li>
<li><a href="http://landeiw.mbaobao.com/?l_bi=a_8_1_1_1_9" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_ldw.jpg" title="朗迪威"><span>朗迪威</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
<li><a href="http://cover.mbaobao.com/?l_bi=a_8_1_1_1_6" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_kw.jpg" title="卡文"><span>卡文</span></a></li>
<li><a href="http://finebags.mbaobao.com/?l_bi=a_8_1_1_1_7" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fbs.jpg" title="梵贝斯"><span>梵贝斯</span></a></li>
<li><a href="http://gb.mbaobao.com/?l_bi=a_8_1_1_1_8" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_gb.jpg" title="戈尔本"><span>戈尔本</span></a></li>
<li><a href="http://landeiw.mbaobao.com/?l_bi=a_8_1_1_1_9" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_ldw.jpg" title="朗迪威"><span>朗迪威</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
<li><a href="http://landeiw.mbaobao.com/?l_bi=a_8_1_1_1_9" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_ldw.jpg" title="朗迪威"><span>朗迪威</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
<li><a href="http://isda.mbaobao.com/?l_bi=a_8_1_1_1_10" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_asd.jpg" title="艾斯达"><span>艾斯达</span></a></li>
</ul>
</div>
<!-- ad -->
<div class="frame-ad k2-fix-float">
<div class="f-left">
<a href="#" target="_blank">
<img border="0" src="http://i.mmcdn.cn/simba/img/T1KxTWXlBXXXb1upjX.jpg?noq=y" width="740px" height="90px"></a>
</a>
</div>
<div class="f-right">
<a href="#" target="_blank">
<img border="0" src="http://i.mmcdn.cn/simba/img/T1dLTPXdJpXXb1upjX.jpg?noq=y" width="190px" height="90px"></a>
</a>
</div>
 </div>
<!-- ad end-->
    
<!-- 推荐 -->
<div class="frame-recommend k2-frame">
<div class="title"><h3>你可能感兴趣</h3></div>
<div class="bd">
<ul class="k2-fix-float">
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
<li>
<a target="_blank" href="#">
<img src="http://imu.zbird.cn/185/12/18512_1" title="[DUDU]柔情品味系列牛皮单肩包 黑色" height="174" width="174">
<span>梦之花－白18K金钻石女戒</span>
</a>
</li>
</ul>
</div>
</div>
<!-- 推荐end -->
</div>
<!--第三部分end-->
<script type="text/javascript" src="<?php echo DT_PATH;?>file/script/index.js"></script>
<script type="text/javascript" src="<?php echo DT_PATH;?>file/script/marquee.js"></script>
<script type="text/javascript">new dmarquee(20, 20, 2000, 'announce');</script>
<?php include template('footer');?>