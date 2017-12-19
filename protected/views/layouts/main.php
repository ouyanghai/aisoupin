<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->menu[$this->action->id]['title']; ?></title>
    <script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/jquery-1.7.2.js"></script>
    <script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/common.js?ver=20130228"></script>
    <script type="text/javascript" src="<?php echo $this->assets['app'] ?>/js/asp.js?ver=20130625"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/asp.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app'] ?>/css/jia.css"/>
</head>
<body>
	<div class="header">
		<div class="background"></div>
		<div class="area">
			<div class="area_in">
				<span><a href="">商家入口</a>|<a href="<?php echo $this->createUrl("about") ?>">关于我们</a></span>
			</div>
			<div class="area_logo">
				<span class="area_flag1">每日新品</span>
				<span class="area_dote"></span>
				<span class="area_flag2">品质保证</span>
				<span class="area_flag3">
					<form method="get" action="" id="post_file">
						<input id="keyword" name="keyword" placeholder="在此输入您要找的宝贝！" type="text"/>
						<input type="hidden" id="file_search" value="1" />
						<input id="sub" type="submit" value=""/>
					</form>
				</span>
			</div>
		</div>
		<div class="mainnav">
			<div class="main_menu">
				<ul>
		            <li><a href="<?php echo $this->createUrl("index") ?>">首页</a></li>
		            <!--<li><a href="./remai.php">热卖单品</a></li>-->
		            <li style="position:relative;">
		            	<img style="position:absolute;top:-3px;right:-10px;" src="<?php echo $this->assets['app'] ?>/images/asp/hot.png">
		            	<a href="<?php echo $this->createUrl("tejia") ?>">天天特价</a>
		            </li>
		            <li><a href="<?php echo $this->createUrl("shop") ?>">店铺推荐</a></li>
		            <li><a target="_blank" href="https://qiang.taobao.com/ ">淘抢购</a></li>
		            <li><a target="_blank" href="https://headline.taobao.com/feed/feedList.htm?spm=a21bo.50862.226762.1.3DPJrz">上头条</a></li>
		            <li style="float:right;color:white;width:200px;font-size:13px;">联系电话:&nbsp;0755-27678161</li>
		        </ul>
			</div>
		</div>
	</div>
	<?php echo $content; ?>
	<div class="footer">
		<div class="footer_intro">
			<span><a href="<?php echo $this->createUrl('/web/index'); ?>">网站首页</a>|</span>
			<span><a href="<?php echo $this->createUrl('/web/about'); ?>">关于我们</a>|</span>
			<span><a href="<?php echo $this->createUrl('/web/about'); ?>">联系我们</a>|</span>
			<span><a href="<?php echo $this->createUrl('/web/about'); ?>">广告合作</a></span>
		</div>
		<div class="footer_link">
			<span>友情链接:</span>
			<a href="http://www.ytx.la" target="_blank" >营天下</a>
			<a href="http://hao.360.cn/" target="_blank" >360导航</a>
			<a href="http://www.114la.com" target="_blank">114啦网址导航</a>
			<a href="http://www.duba.com/" target="_blank">毒霸网址大全</a>
			<a href="http://www.hao10hui.cn" target="_blank"> 好实惠</a>
			<a href="http://www.dakouzi.com/" target="_blank"> 大扣子</a>
			<a href="http://www.zhfanli.com/" target="_blank"> 最好返利网</a>
			<a href="http://www.taopinshop.com" target="_blank"> 淘牛品一折网</a>
			<a href="http://mall.hao10hui.cn" target="_blank"> 网购商城大全</a>
			<a href="http://www.hao10hui.cn/jiu.htm" target="_blank"> 九块九包邮</a>
			<a href="http://www.hao10hui.cn/shijiu.htm" target="_blank"> 十九块九包邮</a>
			<a href="http://www.hao10hui.cn" target="_blank"> 折扣网</a>
			<a href="http://www.jiuyuango.com" target="_blank"> 9.9元全国包邮</a>
			<a href="http://www.5akan.com" target="_blank"> 我爱折扣</a>
		</div>
		<p class="f_miibeian w980" style="width:450px;">
			地址:宝安区宝安25区华丰青贸大厦501&nbsp;&nbsp;&nbsp;&nbsp;联系电话:0755-27678161
		</p>
		<p class="f_miibeian w980">
			<a href="http://www.ytx.la">深圳营天下云计算有限公司</a>&nbsp;<span style="font-size:10px;">版权所有</span>&nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">粤ICP备16103362号</a>	
				<!--  51流量统计 -->
			<script language="javascript" type="text/javascript" src="http://js.users.51.la/18902420.js"></script>
			<noscript><a href="http://www.51.la/?18902420" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/18902420.asp" style="border:none" /></a></noscript>
			<!--  51流量统计 -->
		</p>
	</div>
</body>
</html>