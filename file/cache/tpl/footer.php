<?php defined('IN_DESTOON') or exit('Access Denied');?><!--底部-->
<div class="footer" style="clear:both">
<div id="webpage">
<a href="<?php echo $MODULE['1']['linkurl'];?>">网站首页</a>
<?php echo tag("table=webpage&condition=item=1&areaid=$cityid&order=listorder desc,itemid desc&template=list-webpage");?>
| <a href="<?php echo $MODULE['1']['linkurl'];?>sitemap/">网站地图</a>
<?php if($EXT['guestbook_enable']) { ?> | <a href="<?php echo $EXT['guestbook_url'];?>">网站留言</a><?php } ?>
<?php if($EXT['ad_enable']) { ?> | <a href="<?php echo $EXT['ad_url'];?>">广告服务</a><?php } ?>
<?php if($EXT['gift_enable']) { ?> | <a href="<?php echo $EXT['gift_url'];?>">积分换礼</a><?php } ?>
<?php if($EXT['feed_enable']) { ?> | <a href="<?php echo $EXT['feed_url'];?>">RSS订阅</a><?php } ?>
<?php if($DT['icpno']) { ?> | <a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $DT['icpno'];?></a><?php } ?>
 </div>
<div id="copyright"><?php echo $DT['copyright'];?></div>
</div>
</div>
<!--底部end-->
</div>
<!--main end-->
<script src="<?php echo DT_SKIN;?>js/lib/jquery-1.8.2.min.js"></script>
<script src="<?php echo DT_SKIN;?>js/share.js"></script>
<?php if($JS) { ?>
<?php if(is_array($JS)) { foreach($JS as $js) { ?>
<script src="<?php echo DT_SKIN;?>js/<?php echo $js;?>.js"></script>
<?php } } ?>
<?php } ?>
<script>show_task('<?php echo $destoon_task;?>');</script>
</body>
</html>