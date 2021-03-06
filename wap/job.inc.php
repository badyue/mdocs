<?php
/*
	[Destoon B2B System] Copyright (c) 2008-2011 Destoon.COM
	This is NOT a freeware, use is subject to license.txt
*/
defined('IN_DESTOON') or exit('Access Denied');
$resume = isset($resume) ? intval($resume) : 0;
$CATEGORY = cache_read('category-'.$moduleid.'.php');
$TYPE = explode('|', trim($MOD['type']));
$GENDER = explode('|', trim($MOD['gender']));
$MARRIAGE = explode('|', trim($MOD['marriage']));
$EDUCATION = explode('|', trim($MOD['education']));
$SITUATION = explode('|', trim($MOD['situation']));
if($resume) {
	$table = $DT_PRE.'resume';
	$table_data = $DT_PRE.'resume_data';
	if($itemid) {
		$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");
		($item && $item['status'] > 2 && $item['open'] == 3) or wap_msg($L['msg_not_exist']);
		extract($item);
		$CAT = get_cat($catid);
		if(!check_group($_groupid, $MOD['group_show_resume'])) wap_msg($L['msg_no_right']);
		$description = '';
		$user_status = 3;
		$fee = get_fee($item['fee'], $MOD['fee_view']);
		$MOD['group_show'] = $MOD['group_contact_resume'];
		require $action == 'pay' ? 'pay.inc.php' : 'content.inc.php';
		$content = $db->get_one("SELECT content FROM {$table_data} WHERE itemid=$itemid");
		$content = $content['content'];	
		$content = strip_tags($content);
		$content = preg_replace("/\&([^;]+);/i", '', $content);
		$contentlength = strlen($content);
		if($contentlength > $maxlength) {
			$start = ($page-1)*$maxlength;
			$content = dsubstr($content, $maxlength, '', $start);
			$pages = wap_pages($contentlength, $page, $maxlength);
		}
		$content = nl2br($content);
		$editdate = timetodate($addtime, 5);
		if($page == 1) $db->query("UPDATE {$table} SET hits=hits+1 WHERE itemid=$itemid");
		$head_title = $title.$DT['seo_delimiter'].$MOD['name'].$DT['seo_delimiter'].$head_title;
	} else {
		if($kw) {
			check_group($_groupid, $MOD['group_search_resume']) or wap_msg($L['msg_no_search']);
		}
		$head_title = $MOD['name'].$DT['seo_delimiter'].$head_title;
		if($kw) $head_title = $kw.$DT['seo_delimiter'].$head_title;
		$condition = "status=3 AND open=3";
		if($keyword) $condition .= " AND keyword LIKE '%$keyword%'";
		if($catid) $condition .= $CAT ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
		if($areaid) $condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $condition", 'CACHE');
		$pages = wap_pages($r['num'], $page, $pagesize);
		$lists = array();
		$result = $db->query("SELECT * FROM {$table} WHERE $condition ORDER BY edittime DESC LIMIT $offset,$pagesize");
		while($r = $db->fetch_array($result)) {
			$r['title'] = dsubstr($r['title'], $len);
			$lists[] = $r;
		}
		$db->free_result($result);
	}
	include template('resume', 'wap');
} else {
	$table = $DT_PRE.'job';
	$table_data = $DT_PRE.'job_data';
	if($itemid) {
		$item = $db->get_one("SELECT * FROM {$table} WHERE itemid=$itemid");
		($item && $item['status'] > 2) or wap_msg($L['msg_not_exist']);
		extract($item);
		$CAT = get_cat($catid);
		if(!check_group($_groupid, $MOD['group_show']) || !check_group($_groupid, $CAT['group_show'])) wap_msg($L['msg_no_right']);
		$member = array();
		$fee = get_fee($item['fee'], $MOD['fee_view']);
		require $action == 'pay' ? 'pay.inc.php' : 'contact.inc.php';
		$content_table = content_table($moduleid, $itemid, $MOD['split'], $table_data);
		$content = $db->get_one("SELECT content FROM {$content_table} WHERE itemid=$itemid");
		$content = $content['content'];
		$content = strip_tags($content);
		$content = preg_replace("/\&([^;]+);/i", '', $content);
		$contentlength = strlen($content);
		if($contentlength > $maxlength) {
			$start = ($page-1)*$maxlength;
			$content = dsubstr($content, $maxlength, '', $start);
			$pages = wap_pages($contentlength, $page, $maxlength);
		}
		$content = nl2br($content);
		$editdate = timetodate($edittime, 5);
		$parentid = $CATEGORY[$catid]['parentid'] ? $CATEGORY[$catid]['parentid'] : $catid;
		if($page == 1) $db->query("UPDATE {$table} SET hits=hits+1 WHERE itemid=$itemid");
		$head_title = $title.$DT['seo_delimiter'].$MOD['name'].$DT['seo_delimiter'].$head_title;
	} else {
		if($kw) {
			check_group($_groupid, $MOD['group_search']) or wap_msg($L['msg_no_search']);
		} else if($catid) {
			$CAT or wap_msg($L['msg_not_cate']);
			if(!check_group($_groupid, $MOD['group_list']) || !check_group($_groupid, $CAT['group_list'])) {
				wap_msg($L['msg_no_right']);
			}
		} else {
			check_group($_groupid, $MOD['group_index']) or wap_msg($L['msg_no_right']);
		}
		$head_title = $MOD['name'].$DT['seo_delimiter'].$head_title;
		if($kw) $head_title = $kw.$DT['seo_delimiter'].$head_title;
		$condition = "status=3";
		if($keyword) $condition .= " AND keyword LIKE '%$keyword%'";
		if($catid) $condition .= $CAT ? " AND catid IN (".$CAT['arrchildid'].")" : " AND catid=$catid";
		if($areaid) $condition .= $ARE['child'] ? " AND areaid IN (".$ARE['arrchildid'].")" : " AND areaid=$areaid";
		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$table} WHERE $condition", 'CACHE');
		$pages = wap_pages($r['num'], $page, $pagesize);
		$lists = array();
		$order = $MOD['order'];
		$result = $db->query("SELECT * FROM {$table} WHERE $condition ORDER BY $order LIMIT $offset,$pagesize");
		while($r = $db->fetch_array($result)) {
			$r['title'] = dsubstr($r['title'], $len);
			$lists[] = $r;
		}
		$db->free_result($result);
	}
	include template('job', 'wap');
}
?>