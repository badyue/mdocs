var config = '5|0xFFFFFF|0x333333|80|0xFAFAFA|0x333333|0x000000';
var files = "file/image/player_1.jpg|file/image/player_2.jpg";
var links = "http://www.destoon.com|http://www.destoon.com";
var texts = '';
document.write('<embed src="http://localhost/destoon/file/flash/slide.swf" wmode="opaque" FlashVars="config='+config+'&bcastr_flie='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&menu="false" quality="high" width="400" height="160" type="application/x-shockwave-flash" extendspage="http://get.adobe.com/flashplayer/"></embed>');