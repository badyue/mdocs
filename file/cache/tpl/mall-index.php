<?php defined('IN_DESTOON') or exit('Access Denied');?><?php $CSS = array('mall');?>
<?php $JS = array('lib/jquery.switchable-2.0.min', 'mall');?>
<?php include template('header');?>
<!--
<li class="left_menu_on"><a href="<?php echo $MOD['linkurl'];?>">商品分类</a></li>
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<li class="left_menu_li"><a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?>(<?php echo $v['item'];?>)</a></li>
<?php } } ?>
<?php if($MOD['page_irec']) { ?>
<div class="tab_head">
<ul>
<li class="tab_2" id="mall_t_1" onmouseover="Tb(1, 2, 'mall', 'tab');">推荐商品</li>
<li class="tab_1" id="mall_t_2" onmouseover="Tb(2, 2, 'mall', 'tab');">热卖商品</li>
</ul>
</div>
<div class="box_body">
<div class="thumb" id="mall_c_1" style="display:">
<!--<?php echo tag("moduleid=$moduleid&length=20&condition=status=3 and level>0&areaid=$cityid&pagesize=".$MOD['page_irec']."&order=".$MOD['order']."&width=100&height=100&cols=5&template=thumb-mall&target=_blank");?>-- >
</div>
<div class="thumb" id="mall_c_2" style="display:none"><!--<?php echo tag("moduleid=$moduleid&length=20&condition=status=3&areaid=$cityid&pagesize=".$MOD['page_irec']."&order=orders desc&width=100&height=100&cols=5&template=thumb-mall&target=_blank");?>-- >
</div>
</div>
<div class="b10">&nbsp;</div>
<?php } ?>
<?php if($MOD['page_inew']) { ?>
<div class="box_head"><span class="f_r"><a href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?new=1');?>">更多..</a></span><strong>最新上架</strong></div>
<div class="box_body">
<div class="thumb">
<!--<?php echo tag("moduleid=$moduleid&length=20&condition=status=3&areaid=$cityid&pagesize=".$MOD['page_inew']."&order=".$MOD['order']."&width=100&height=100&cols=5&template=thumb-mall&target=_blank");?>-- >
</div>
</div>
<?php } ?>
-->
<!-- 第一部分-->
<div class="section k2-area k2-space k2-fix-float">
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
<div class="k2-w142 k2-fix-float f-left">
<dd class="banner">       
<div id="slide">
<ul>
<li><a target="_blank" title="讲爸妈爱情故事 赢心形克拉钻" alt="讲爸妈爱情故事 赢心形克拉钻" href="http://www.zbird.com/mtedetail/list/s/shizhounian/"><img src="http://imp.zbird.cn/206/67/20667_2" width="779" height="337" border="0" title="讲爸妈爱情故事 赢心形克拉钻" alt="讲爸妈爱情故事 赢心形克拉钻"></a></li>
<li><a target="_blank" title="小鸟10周年 积分会员惊喜礼" alt="小鸟10周年 积分会员惊喜礼" href="http://www.zbird.com/mono/2012/jfdh001/index.shtml"><img src="http://imu.zbird.cn/203/44/20344_3" width="779" height="337" border="0" title="小鸟10周年 积分会员惊喜礼" alt="小鸟10周年 积分会员惊喜礼"></a></li>
<li><a target="_blank" title="北极光Aurora 臻品裸钻系列" alt="北极光Aurora 臻品裸钻系列" href="http://www.zbird.com/mono/2012/bjg/index.shtml"><img src="http://imp.zbird.cn/195/75/19575_4" width="779" height="337" border="0" title="北极光Aurora 臻品裸钻系列" alt="北极光Aurora 臻品裸钻系列"></a></li>
<li><a target="_blank" title="天猫双11 购物狂欢节" alt="天猫双11 购物狂欢节" href="http://www.tmall.com/?spm=a220o.1000855.0.24.UOi7YL"><img src="http://imp.zbird.cn/207/45/20745_1" width="779" height="337" border="0" title="天猫双11 购物狂欢节" alt="天猫双11 购物狂欢节"></a></li>
<li><a target="_blank" title="讲爸妈爱情故事 赢心形克拉钻" alt="讲爸妈爱情故事 赢心形克拉钻" href="http://www.zbird.com/mtedetail/list/s/shizhounian/"><img src="http://imp.zbird.cn/206/67/20667_2" width="779" height="337" border="0" title="讲爸妈爱情故事 赢心形克拉钻" alt="讲爸妈爱情故事 赢心形克拉钻"></a></li>
                  </ul>
 </div>
 
</dd>
</div>
</div>
<!--第一部分end-->
<!--div class="frame-apply k2-frame k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">热门品牌</h3>
</div>
<ul class="brand-list">
<li><a href="http://dudu.mbaobao.com/?l_bi=a_8_1_1_1_1" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_dudu.jpg" title="DUDU"><span>DUDU</span></a></li>
<li><a href="http://lm.mbaobao.com/?l_bi=a_8_1_1_1_2" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_lm.jpg" title="浪美"><span>浪美</span></a></li>
<li><a href="http://alfa.mbaobao.com/?l_bi=a_8_1_1_1_3" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_alfa.jpg" title="阿尔法·阿蒂斯特"><span>阿尔法·阿蒂斯特</span></a></li>
<li><a href="http://fy.mbaobao.com/?l_bi=a_8_1_1_1_4" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_fy.jpg" title="飞扬空间"><span>飞扬空间</span></a></li>
<li><a href="http://cherlone.mbaobao.com/?l_bi=a_8_1_1_1_5" target="_blank"><img width="134" height="36" src="http://cca.mbaobao.com/main/mbb_logo/logo_zne.jpg" title="卓妮尔"><span>卓妮尔</span></a></li>
</ul>
</div-->
<!--第三部分-->
<div class="section k2-area">
<div class="ad" style="margin-bottom:20px">
<img width="960" src="http://imu.zbird.cn/197/90/19790_3">
</div>
<div class="frame-brand frame-brand-new k2-frame k2-space k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">新品推荐</h3>
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
<div class="ad" style="margin-bottom:20px">
<img width="960" src="http://imu.zbird.cn/197/90/19790_3">
</div>
<div class="frame-brand frame-brand-new k2-frame k2-space k2-fix-float">
<div class="title k2-fix-float">
<h3 class="name">最新上架</h3>
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
<h3 class="name">热卖商品</h3>
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
<?php include template('footer');?>