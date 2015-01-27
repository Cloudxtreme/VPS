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
			*	{ font-family: "Meiryo UI",Meiryo,"Microsoft Yahei UI",FontAwesome,Octicons,sans-serif !important; }
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
			<a href="#flow">リサーチの流れ</a><a href="#term">選定基準</a><a href="#faq">FAQ</a>
		</p>
		<hr />
		<h2><a name="flow">リサーチの流れ</a></h2>
			<ol>
				<li><h3>商品の選定</h3>
					商品のキーワードをアマゾンで検索します。
					<br />
					中国商品の出やすいキーワード：<tt>オリジナル</tt>、<tt>ノーブランド</tt>、<tt>コスプレ</tt>、<tt>janコード</tt>、<tt>swat</tt>、<tt>セット</tt>。
					<br />
					<span class="hilight">ポイント</span> スペルを変えること（<tt>no brand</tt>、<tt>ノンブランド</tt>、<tt>non brand</tt>…など）で新しい商品も出るかも。
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder">
								<a class="tip-bottom" href="http://i.share.pho.to/a4ea955d_o.jpeg"><div>拡大表示</div><img style="width: 300px;" src="http://i.share.pho.to/a4ea955d_o.jpeg" /></a>
							</td>
							<td class="noborder top">
								<ol>
									<br />
									<tt>ノーブランド</tt>で検索した商品を例として、商品ページで要確認な箇所を説明します。
									<br />
									<li>
										価格。価格帯が表示された場合は、サイズ、カラーを選択すると該当の価格が表示されます。	
									</li>
									<br />
									<li>
										出品者人数。新品のみが対象のため、新品を出品する人数のみを確認します。
										<ul>
											<li><tt>通常配送無料</tt>表記のある項目のみ確認。</li>
											<li>出品者人数が<tt>5人以下</tt>であれば対象とします。</li>
										</ul>
									</li>
									<br />
									<li>
										登録情報の<tt>ASINコード</tt>、<tt>ベストセラー商品ランキング</tt>を確認します。
										<br />
										ランキングは<tt>ルートカテゴリ</tt>での値を確認します。
									</li>
									<br />
									<li>
										<tt>〜こんな商品も買っています</tt>や<tt>〜こんな商品もチェックしています</tt>にも中国商品が大量存在しています。ぜひもれなく確認しましょう。
										<br />
										<br />
										選定基準の詳細は<a href="#term">こちら</a>で確認できます。	
									</li>
								</ol>
							</td>
						</tr>
					</table>
				</li>
				<li><h3>仕入れ先をリサーチ</h3>
					上記で選定した商品をタオバオ、テンモウ、アリババで仕入れ先を探します。
					<ul>
						<li>商品名本文のテキストで検索
							<ol>
								<li>
									アマゾンの商品名を<a href="https://translate.google.com/" target="_blank">Google翻訳</a>などで中国語に訳します。
								</li>
								<li>
									訳文から有用な情報を<a href="http://www.taobao.com/" target="_blank">タオバオ</a>、<a href="http://1688.com/" target="_blank">アリババ</a>で検索します。
									<br />
									通常、<tt>材質</tt>、<tt>商品そのものの名称</tt>は結果につながりやすい。
								</li>
							</ol>
						</li>
						<li>商品の画像で検索
							<ol>
								<li>
									検索対象の画像をダウンロードしておきます。
								</li>
								<li>
									<a href="https://www.google.com/imghp?hl=ja&tab=wi">Google画像検索</a>を開きます。
								</li>
								<li>
									<span class="hilight">1</span>でダウンロードした画像を<span class="hilight">2</span>にドラッグ＆ドロップします。
								</li>
								<li>
									検索条件に<tt>site:taobao.com</tt>や<tt>site:1688.com</tt>を追加すると、タオバオ、アリババの商品画像を対象にできます。
								</li>
							</ol>
						</li>
					</ul>
				</li>
				<li><h3>情報登録</h3></li>
			</ol>
		<hr />
		<h2><a name="term">選定基準</a></h2>
			<table class="noborder left">
				<tr class="boborder">
					<td class="noborder center" colspan="2"><i class="fa fa-asterisk"></i> <b>カテゴリ・ランキング</b></td>
					<td class="noborder"><i class="fa fa-asterisk"></i> <b>出品者人数</b></td>
				</tr>
				<tr class="noborder">
					<td class="noborder right">
						家電&カメラ
						<br />
						カーバイク用品
						<br />
						ホーム&キッチン
						<br />
						ミュージック
						<br />
						おもちゃ
						<br />
						DIY・工具
						<br />
						ホビー
						<br />
						服&ファッション小物
						<br />
						ヘルス&ビューティー
						<br />
						スポーツ&アウトドア
						<br />
						文房具・オフィス用品
						<br />
						ジュエリー
						<br />
						パソコン・周辺機器
						<br />
						シューズ&バッグ
						<br />
						腕時計
						<br />
						楽器
						<br />
						ペット用品
						<br />
						ベビー&マタニティ
					</td>
					<td class="noborder left">
						〜40,000位
						<br />
						〜30,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜20,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
						<br />
						〜10,000位
					</td>
					<td class="noborder top">
						FBA利用出品者<b>5人</b>以内
						<br />
						<br />
						<br />
						<i class="fa fa-asterisk"></i> <b>対象外商品</b>
						<ul>
							<li><b>カテゴリ・ランキング</b>に含まれていないカテゴリ</li>
							<li>コンセントを利用する製品</li>
							<li>偽物</li>
							<li>オリジナルのタグ、パッケージなど、独自製造を行い、オリジナル化している物</li>
							<li>セット商品（セット商品も仕入れ先を見つけたなら良い）</li>
							<li>「商標登録をしている」という文言が書いてある物</li>
							<li>「独自のサービスを行っている」という文言が書いてある物</li>
							<li>「相乗りしたら訴える」という文言が書いてある物</li>
						</ul>
						<br />
						<br />
						<b><i class="fa fa-check"></i> 上記条件を満たし、システムが算出した利益が300円以上の商品を審査ＯＫとします。</b>
					</td>
				</tr>
			</table>
		<hr />
		<h2><a name="faq">FAQ</a></h2>
	</body>
</html>