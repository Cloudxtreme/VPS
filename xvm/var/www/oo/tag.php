<?php
	include '../common.php';
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("tag.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI","Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title>店舗タグ、品質表示リサーチ情報</title>
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
		<h1 class="center">店舗タグ、品質表示リサーチ情報</h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1"><i class="fa fa-tags"></i> 店舗タグ</a></li>
				<li class="gp-3"><a href="#tab2"><i class="fa fa-bookmark"></i> 品質表示</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<br />
					<table class="center">
						<tr>
							<td>店舗</td>
							<td>リサーチ日</td>
							<td>最小ロット数</td>
							<td>作成期間</td>
							<td>金額（フィルム付き）</td>
							<td>金額（フィルムなし）</td>
						</tr>
						<tr>
							<td class="tip"><a href="http://detail.1688.com/offer/36087163822.html" target="_blank"><span>苍南县龙港佳恒纸塑制品厂</span>店舗 1</a></td>
							<td>2014-10-21</td>
							<td>2000 枚</td>
							<td>5 日間</td>
							<td class="tip"><span>約 3484 円</span>200 元</td>
							<td class="tip"><span>「フィルム付き」しか生産していない。</span>0 元</td>
						</tr>
						<tr>
							<td class="tip"><a href="http://detail.1688.com/offer/1266068729.html" target="_blank"><span>上海航丰印刷品有限公司</span>店舗 2</a></td>
							<td>2014-10-21</td>
							<td>1000 枚</td>
							<td>7 日間</td>
							<td class="tip"><span>約 15678 円</span>900 元</td>
							<td class="tip"><span>約 13936 円</span>800 元</td>
						</tr>
							<td class="tip"><a href="http://detail.1688.com/offer/1136701019.html" target="_blank"><span>广州市添艺服装辅料有限公司</span>店舗 3</a></td>
							<td>2014-10-21</td>
							<td>5000 枚</td>
							<td>7 日間</td>
							<td class="tip"><span>約 12194 円</span>700 元</td>
							<td class="tip"><span>約 11323 円</span>650 元</td>
						</tr>
					</table>
					<div class="tip-bottom dl">
						<span>
							<?php
								echo 'ファイルサイズ：'.RealSize(filesize($file)).'<br />更新時刻：'.date("Y年m月d日 H:i:s",filemtime($file));
							?>
						</span>
						<a href="https://www.dropbox.com/s/62dbooctha35rt0/%E5%BA%97%E8%88%97%E3%82%BF%E3%82%B0%E3%80%81%E5%93%81%E8%B3%AA%E8%A1%A8%E7%A4%BA%E3%83%AA%E3%82%B5%E3%83%BC%E3%83%81.xlsx?dl=0" target="_blank">エクセルフォーマットでダウンロード</a>
					</div>
					<div style="margin: 1em auto; width: 773px;">
						<ul>
							<li>すべての店舗が取り付け作業を請負していない。</li>
							<li>金額は<b>ロット単位</b>で記載されている。レート：1/17.42（元/円）としている。</li>
							<li><a href="http://detail.1688.com/offer/36087163822.html" target="_blank">店舗 1</a>：<b>フィルム付き</b>しか生産していない。</li>
							<li><a href="http://detail.1688.com/offer/1266068729.html" target="_blank">店舗 2</a>：ヒモの通る穴の周辺は<b>印刷加工</b>で処理する。画像のようなフィルム加工はできない。</li>
							<li><a href="http://detail.1688.com/offer/1136701019.html" target="_blank">店舗 3</a>：形状を<b>長方形</b>にすれば作成期間、金額を短縮できる。</li>
						</ul>
					</div>
				</div>
				<div id="tab2" class="tab">
					<br />
					<table class="center">
						<tr>
							<td>店舗</td>
							<td>リサーチ日</td>
							<td>最小ロット数</td>
							<td>作成期間</td>
							<td>金額</td>
						</tr>
						<tr>
							<td class="tip"><a href="http://detail.1688.com/offer/35461411842.html" target="_blank"><span>温州博兴印务有限公司</span>店舗 1</a></td>
							<td>2014-10-21</td>
							<td>1500 枚</td>
							<td>3 日間</td>
							<td class="tip"><span>約 1742 円</span>100 元</td>
						</tr>
						<tr>
							<td class="tip"><a href="http://detail.1688.com/offer/38520379399.html" target="_blank"><span>绍兴县万柯商标织印厂</span>店舗 2</a></td>
							<td>2014-10-21</td>
							<td>1000 枚</td>
							<td>3 日間</td>
							<td class="tip"><span>約 2439 円</span>140 元</td>
						</tr>
					</table>
					<div class="tip-bottom dl">
						<span>
							<?php
								echo 'ファイルサイズ：'.RealSize(filesize($file)).'<br />更新時刻：'.date("Y年m月d日 H:i:s",filemtime($file));
							?>
						</span>
						<a href="https://www.dropbox.com/s/62dbooctha35rt0/%E5%BA%97%E8%88%97%E3%82%BF%E3%82%B0%E3%80%81%E5%93%81%E8%B3%AA%E8%A1%A8%E7%A4%BA%E3%83%AA%E3%82%B5%E3%83%BC%E3%83%81.xlsx?dl=0" target="_blank">エクセルフォーマットでダウンロード</a>
					</div>
					<div style="margin: 1em auto; width: 518px;">
						<ul>
							<li>すべての店舗が取り付け作業を請負していない。</li>
							<li>金額は<b>ロット単位</b>で記載されている。<br />レート：1/17.42（元/円）としている。</li>
						</ul>
				</div>
			</div>
		</div>
	</body>
</html>