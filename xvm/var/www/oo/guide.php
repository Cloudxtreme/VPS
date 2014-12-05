<?php
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("guide.php");

	$ico_tm = '../favicons/tmall.ico';
	$ico_tb = '../favicons/taobao.ico';
	$ico_1688 = '../favicons/1688.ico';

	$url_tm = 'http://www.tmall.com/';
	$url_tb = 'http://www.taobao.com/';
	$URL_1688 = 'http://www.1688.com/';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI","Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title>天猫 tmall.com 店舗ガイド＆ピックアップ</title>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('.tabs .tab-links a').on('click', function(e)  {
					var currentAttrValue = jQuery(this).attr('href');

					// Show/Hide Tabs
					jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

					// Change/remove current tab to active
					jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

					e.preventDefault();
				});
			});
		</script>
	</head>
	<body>
		<a href="javascript:history.go(-1)">戻る</a>
		<h1 class="center">天猫 tmall.com 店舗ガイド＆ピックアップ</h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>	
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">背景</a></li>
				<li class="gp-2"><a href="#tab2">店舗ガイド</a></li>
				<li class="gp-2"><a href="#tab3">ピックアップ</a></li>
				<li class="gp-3"><a href="#tab4">タグ関連</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<ul>
						<li><?php echo '<a href="'.$url_tb.'" target="_blank">淘宝</a>、<a href="'.$url_tm.'" target="_blank">天猫</a>、<a href="'.$url_1688.'" target="_blank">アリババ</a>は同一オーナーが運営している。';?></li>
						<li>創立順：アリババ（1999）<i class="fa fa-long-arrow-right"></i> 淘宝（2003）<i class="fa fa-long-arrow-right"></i> 天猫（2011）。</li>
						<li>淘宝のサイトで、淘宝、天猫どちらで販売されている商品でも購入できるが、天猫のサイトでは天猫の商品しか購入できない。</li>
						<li>アリババの売り上げのほとんどはコンシューマーではなく経営者の貢献で構成されている。</li>
					</ul>
				</div>
				<div id="tab2" class="tab">
					<ul>
						<li>淘宝で天猫の店舗を探す方法：
							<ol>
								<li>淘宝の<a href="http://s.taobao.com/" target="_blank">公式検索ページ</a>を開き、検索対象を「<strong>店舗</strong>」に切り替える；</li>
								<li>検索キーワードとして「<strong>连衣裙</strong>」を入力し、「<strong>搜索</strong>」をクリック；</li>
								<li><p class="btn">ポイント</p> 「<strong>店铺类型</strong>」から「<strong>天猫(商城)</strong>」を選び、天猫の店舗のみ表示させる。</li>
								最終的に、下記のような画面にたどり着くかと思う。
								<br />
								<a class="tip-bottom" href="http://i.share.pho.to/d3cb0f6f_o.png"><span>拡大表示</span><img style="margin: .5em auto; height: 200px;" src="http://i.share.pho.to/d3cb0f6f_o.png" /></a>
								<br />
								<a href="http://s.taobao.com/search?initiative_id=staobaoz_20120515&q=%E8%BF%9E%E8%A1%A3%E8%A3%99&app=shopsearch&fs=1&isb=1&goodrate=" target="_blank">直通リンク</a>
							</ol>
						</li>
						<br />
						<li>天猫で独自のブランドでキーワード関連の商品を販売している店舗：
							<br />
							<a class="tip-bottom" href="http://i.share.pho.to/387ee0e1_o.png"><span>拡大表示</span><img style="margin: .5em auto; height: 200px;" src="http://i.share.pho.to/387ee0e1_o.png" /></a>
							<br />
							<a href="http://list.tmall.com/search_product.htm?q=%C1%AC%D2%C2%C8%B9&type=p&spm=a220m.1000858.a2227oh.d100&xl=lianyiqun_1&from=.list.pc_1_suggest" target="_blank">直通リンク</a>
						</li>
					</ul>
				</div>
				<div id="tab3" class="tab">
					<p class="center">
						<a href="http://list.tmall.com/search_product.htm?spm=a220m.1000858.1000720.71.Z5gvfG&cat=50025145&brand=3437878&sort=s&style=g&search_condition=23&from=sn__brand&suggest=0_1&industryCatId=50025145#J_crumbs" target="_blank">Artka</a> <a href="http://list.tmall.com/search_product.htm?spm=a220m.1000858.1000720.31.Z5gvfG&cat=50025145&brand=222856239&sort=s&style=g&search_condition=23&from=sn__brand-qp&suggest=0_1&industryCatId=50025145#J_crumbs" target="_blank">尘顔</a>
					</p>
				</div>
				<div id="tab4" class="tab">
					<p class="center">
						<a href="http://detail.1688.com/offer/38520379399.html" target="_blank">店舗 1</a> <a href="http://detail.1688.com/offer/35461411842.html" target="_blank">店舗 2</a> <a href="http://detail.1688.com/offer/1136701019.html" target="_blank">店舗 3</a> <a href="http://detail.1688.com/offer/1266068729.html" target="_blank">店舗 4</a> <a href="http://detail.1688.com/offer/36087163822.html" target="_blank">店舗 5</a> <a href="http://detail.1688.com/offer/41514926680.html" target="_blank">店舗 6</a>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>