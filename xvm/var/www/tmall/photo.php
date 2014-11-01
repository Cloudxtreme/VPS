<?php
	include '../common.php';
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("photo.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI","Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title>商品写真撮影リサーチ情報</title>
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
		<h1 class="center">商品写真撮影リサーチ情報</h1>
			<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
			<p class="center">
				<a href="javascript:history.go(-1)">戻る</a>
			</p>
		<hr />
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">大まかな流れ</a></li>
				<li class="gp-2"><a href="#tab2">検索ガイド</a></li>
				<li class="gp-3"><a href="#tab3">ピックアップ</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<br />
					<table class="center">
						<tr>
							<td>ステップ</td>
							<td>出品者</td>
							<td>クライアント</td>
						</tr>
						<tr>
							<td>1</td>
							<td colspan="2">事前商談</td>
						</tr>
						<tr>
							<td>2</td>
							<td class="null">該当しない</td>
							<td>落札</td>
						</tr>
						<tr>
							<td>3</td>
							<td class="null">該当しない</td>
							<td>商品を郵送</td>
						</tr>
						<tr>
							<td>4</td>
							<td>撮影を行う</td>
							<td class="null">該当しない</td>
						</tr>
						<tr>
							<td>5</td>
							<td>写真を電子データで提出</td>
							<td>問題ないか確認</td>
						</tr>
						<tr>
							<td>6</td>
							<td>商品を返却</td>
							<td>完了</td>
						</tr>
					</table>
				</div>
				<div id="tab2" class="tab">
					<br />
					キーワード：<span class="hilight">女装模特拍摄</span>
					<ol>
						<li>淘宝の<a href="http://s.taobao.com/" target="_blank">公式検索ページ</a>を開く；</li>
						<li>キーワードを入力し、「<strong>搜索</strong>」をクリック；</li>
						<li>
							検索結果ページの上半分の表で各種のフィルターで絞り込みができる；
							<table>
								<tr>
									<td>中国語</td>
									<td>日本語</td>
								</tr>
								<tr>
									<td>内景</td>
									<td>室内</td>
								</tr>
								<tr>
									<td>外景</td>
									<td>室外</td>
								</tr>
								<tr>
									<td>实景棚拍</td>
									<td>背景付きでスタジオ撮影</td>
								</tr>
								<tr>
									<td>纯色背景棚拍</td>
									<td>単色背景でスタジオ撮影</td>
								</tr>
							</table>
						</li>
					</ol>
				</div>
				<div id="tab3" class="tab">
					<br />
					<ol>
						<li>
							<a href="http://item.taobao.com/item.htm?spm=a230r.1.14.28.G8EkFu&id=41199910447&ns=1&abbucket=5#detail" target="_blank">爱图摄影机构</a>
							<span class="gray">作成期間：5〜7日間</span>
						</li>
						<li>
							<a href="http://item.taobao.com/item.htm?spm=a230r.1.14.54.5U6bcE&id=13313049502&ns=1&abbucket=5#detail">广州盛华摄影</a>
							<span class="gray">作成期間：3営業日</span>
						</li>
						<li>
							<a href="http://detail.tmall.com/item.htm?spm=a230r.1.14.150.xb1gEt&id=17757695496&abbucket=5">梦妮莎摄影</a>
							<span class="gray">作成期間：3〜5日間</span>
						</li>
					</ol>
				</div>
			</div>
		</div>