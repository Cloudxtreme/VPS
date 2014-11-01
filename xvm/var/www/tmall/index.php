<?php
	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("index.php");

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
		<title>天猫 tmall.com リサーチ情報まとめ</title>
	</head>
	<body>
		<h1 class="center">天猫 tmall.com リサーチ情報まとめ</h1>
			<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
			<p class="center">
				<a href="javascript:history.go(-1)">戻る</a> <a href="guide.php#guide">店舗ガイド</a> <a href="guide.php#pickup">ピックアップ</a> <a href="guide.php#tag">タグ関連</a>
			</p>
		<hr />