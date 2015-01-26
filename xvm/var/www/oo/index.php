<?php
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("index.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI",Meiryo,"Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title>リサーチ情報まとめ</title>
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
		<h1 class="center">リサーチ情報まとめ</h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">輸入</a></li>
				<li class="gp-3"><a href="#tab2">輸出</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<ul>
						<li>
							天猫 tmall.com 店舗ガイド＆ピックアップ
							<?php
								echo 
								'<a href="guide.php">開く</a>
								<sup>'.date("Y-m-d H:i",filemtime("guide.php")).'</sup>';
							?>
						</li>
						<li>
							商品写真撮影リサーチ情報
							<?php
								echo 
								'<a href="photo.php">開く</a>
								<sup>'.date("Y-m-d H:i",filemtime("photo.php")).'</sup>';
							?>
						</li>
						<li>
							店舗タグ、品質表示リサーチ情報
							<?php
								echo 
								'<a href="tag.php">開く</a>
								<sup>'.date("Y-m-d H:i",filemtime("tag.php")).'</sup>';
							?>
						</li>
					</ul>
				</div>
				<div id="tab2" class="tab">
					<ul>
						<li>
							中国で売れている日本商品
							<?php
								echo 
								'<a href="export.php">開く</a>
								<sup>'.date("Y-m-d H:i",filemtime("export.php")).'</sup>';
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>