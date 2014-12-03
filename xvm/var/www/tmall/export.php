<?php
	include '../common.php';
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("export.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI","Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title>日本商品の輸出リサーチ情報</title>
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
		<h1 class="center">日本商品の輸出リサーチ情報</h1>
			<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
			<p class="center">
				<a href="javascript:history.go(-1)">戻る</a>
			</p>
		<hr />
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">中国へ</a></li>
				<li class="gp-3"><a href="#tab2">ほかの国へ</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<p class="center">売れている商品</p>
					<table class="center">
						<tr>
							<td>カテゴリー</td>
							<td>パソコン・オフィス用品</td>
							<td>ホーム＆キッチン</td>
							<td>ヘルス</td>
							<td>ホビー</td>
							<td>腕時計</td>
							<td>その他</td>
						</tr>
						<tr>
							<td>ブランド・商品</td>
							<td>Kindleシリーズ</td>
							<td>ホーム＆キッチン</td>
							<td>ヘルス</td>
							<td>ホビー</td>
							<td>腕時計</td>
							<td>その他</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>