<?php
	$title = '商品リサーチ手順';

	date_default_timezone_set('Asia/Tokyo');

	$updatetime_page = filemtime("research.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<style type="text/css">
			*	{ font-family: "Meiryo UI",Meiryo,"Microsoft Yahei UI","FontAwesome",sans-serif !important; }
		</style>
		<title><?php echo $title; ?></title>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			function setPageBreak() { document.getElementById("pb").style.pageBreakAfter="always"; }
		</script>
	</head>
	<body>
		<a href="javascript:history.go(-1)">戻る</a>
		<h1 class="center"><?php echo $title; ?></h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>
		<p class="center">
			
		</p>
		<hr />
		<h2>リサーチの流れ</h2>
			<ul>
				<li><h3>キーワードでリサーチ</h3>
					<ol>
						<li>
							商品のキーワードをアマゾンで検索します。
						</li>
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/0c1ed9b3_o.jpeg"><div>拡大表示</div><img style="height: 1000px;" src="http://i.share.pho.to/0c1ed9b3_o.jpeg" /></a>
									</td>
									<td class="noborder">
										
									</td>
								</tr>
							</table>
					</ol>
				</li>
			</ul>
	</body>
</html>