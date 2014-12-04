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
		<a href="javascript:history.go(-1)">戻る</a>
		<h1 class="center">日本商品の輸出リサーチ情報</h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">一覧</a></li>
				<li class="gp-2"><a href="#tab2">フォーラムでの調査</a></li>
				<li class="gp-3"><a href="#tab3">タオバオでの調査</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<p class="center">売れているブランド・商品</p>
					<table class="center">
						<tr>
							<td>カテゴリー</td>
							<td>ブランド・商品</td>
						</tr>
						<tr>
							<td>パソコン・オフィス用品</td>
							<td>Kindle<tt class="f75">KPW2</tt>　Apple<tt class="f75">全製品</tt>　Filco、HHKB<tt class="f75">キーボード</tt><br />HP<tt class="f75">N54L</tt>　三菱鉛筆<tt class="f75">文房具</tt>　KOKUYO<tt class="f75">ノート</tt></td>
						</tr>
						<tr>
							<td>ホーム＆キッチン</td>
							<td>象印、TIGER、東芝、パナソニック<tt class="f75">炊飯器</tt>　SHARP<tt class="f75">空気清浄機</tt><br />象印、TIGER、THERMOS<tt class="f75">ケータイマグ</tt><tt class="f75">フードコンテナー</tt><br />九谷焼、有田焼<tt class="f75">陶器</tt>　京セラ<tt class="f75">セラミック包丁</tt></td>
						</tr>
						<tr>
							<td>ヘルス</td>
							<td>花王、エリエール<tt class="f75">オムツ</tt><tt class="f75">ナプキン</tt>　ライオン<tt class="f75">ハブラシ</tt><tt class="f75">ハミガキ</tt><br />Doクリア<tt class="f75">こどもハブラシ</tt>　花印、SANA、…<tt class="f75">効能付き化粧品</tt><br />ソンバーユ<tt class="f75">馬油</tt>　サガミオリジナル<tt class="f75">コンドーム</tt></td>
						</tr>
						<tr>
							<td>ホビー</td>
							<td>ACG関連ほぼ全部<tt class="f75">アニメDVD、BD</tt><tt class="f75">フィギュア</tt><tt class="f75">ガンプラ</tt><tt class="f75">コミック</tt></td>
						</tr>
						<tr>
							<td>腕時計</td>
							<td>SEIKO、CASIO</td>
						</tr>
						<tr>
							<td>その他</td>
							<td>宙-SOLA-<tt class="f75">標本</tt>　日本特有の日常を便利にする小道具</td>
						</tr>
					</table>
				</div>
				<div id="tab2" class="tab">
					<p class="gray center">未作成</p>
				</div>
			</div>
		</div>
	</body>
</html>