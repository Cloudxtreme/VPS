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
		<h2 class="center"><a name="flow">リサーチの流れ</a></h2>
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
								<a class="tip-bottom" href="http://i.share.pho.to/71a60337_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/71a60337_o.jpeg" /></a>
							</td>
							<td class="noborder top">
								<br/>
								<tt>ノーブランド</tt>で検索した商品を例として、商品ページで要確認な箇所を説明します。
								<br/>
								<br/>
								<ol>
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
										登録情報の<tt>ASINコード</tt>、<tt>ルートカテゴリ</tt>、<tt>ベストセラー商品ランキング</tt>を確認します。
										<br />
										ランキングは<tt>ルートカテゴリ</tt>での値を確認します。
									</li>
									<br />
									<li>
										<tt>〜こんな商品も買っています</tt>や<tt>〜見た後に買っているのは？</tt>にも中国商品が大量存在しています。ぜひもれなく確認しましょう。
									</li>
									<br />
									<i class="fa fa-arrow-right"></i> 選定基準の詳細は<a href="#term">こちら</a>で確認できます。
								</ol>
								<br />
								<br />
								<b><i class="fa fa-check"></i> こんな商品は中国商品である可能性が高い。
								<br />
								<ul>
									<li>中国商品を扱う店舗にあるほかの商品。</li>
									<li>画像の背景、モデルさんの顔が、不自然にカット、白塗りされた商品。</li>
									<li>画像に部屋、街、風景が写った商品。</li>
									<li>画像が曇るほど拡大された商品。</li>
									<li>画像に日本語表記はあるが、あきらきに後から付けられたように見えた商品。</li>
									<li>（顧客の視点から）価格が低く感じた商品。</li>
									<li>サイフ、バックの画像に人民元（<a href="http://pic4.nipic.com/20091011/425_210633007709_2.jpg" target="_blank">赤いお札</a>）、中国語のある雑誌やそれら一部が写った商品。</li>
									<li>モデルさんの顔つきが日本人ではないと思った商品（要練習）。</li>
								</ul>
							</td>
						</tr>
					</table>
				</li>
				<li><h3>仕入れ先をリサーチ</h3>
					上記で選定した商品をタオバオ、テンモウ、アリババで仕入れ先を探します。
					<ul>
						<li>商品名本文のテキストで検索
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/829fb186_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/829fb186_o.jpeg" /></a>
									</td>
									<td class="noborder top">
										<ol>
											<li>
												アマゾンの商品名を<a href="https://translate.google.com/" target="_blank">Google翻訳</a>などで中国語に訳します。
											</li>
											<li>
												訳文から有用な情報を<a href="http://www.taobao.com/" target="_blank">タオバオ</a>、<a href="http://1688.com/" target="_blank">アリババ</a>で検索します。
												<br />
												通常、<tt>作品/人物名</tt>、<tt>材質</tt>、<tt>商品そのものの名称</tt>は結果につながりやすい。
											</li>
											<br />
											キーワードは非常に重要となります。結果が出ない場合は、
											<ul>
												<li>キーワードを変えて何度も検索をかけます。</li>
												<li>類似商品のタイトルをキーワードにして検索してみます。</li>
											</ul>
										</ol>
									</td>
								</tr>
							</table>
						</li>
						<li>商品の画像で検索
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/07d225e0_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/07d225e0_o.jpeg" /></a>
									</td>
									<td class="noborder top">
										<ol>
											<li>
												検索対象の画像をダウンロードしておきます。
											</li>
											<li>
												<a href="https://www.google.com/imghp?hl=ja&tab=wi">Google画像検索</a>を開きます。
											</li>
											<li>
												<span class="hilight">1</span>でダウンロードした画像を<span class="hilight">2</span>のウィンドウ/タブにドラッグ＆ドロップします。
											</li>
											<br />
											<i class="fa fa-arrow-right"></i> 検索条件に<tt>site:taobao.com</tt>や<tt>site:1688.com</tt>を追加すると、タオバオ、アリババの商品画像を対象にできます。
										</ol>
									</td>
								</tr>
							</table>
						</li>
					</ul>
				</li>
				<li><h3>仕入れ先を確認</h3>
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder">
								<a class="tip-bottom" href="http://i.share.pho.to/3e992cc1_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/3e992cc1_o.jpeg" /></a>
							</td>
							<td class="noborder top">
								仕入れ先ページで下記情報を確認します。
								<br/>
								<br/>
								<ol>
									<li>価格</li>
									<li>（中国内）送料</li>
									<li>カラー</li>
									<li>サイズ</li>
								</ol>
							</td>
						</tr>
					</table>
				</li>
				<li><h3>情報登録</h3>
					上記作業で取得した<tt>ASINコード</tt>、<tt>仕入単価</tt>、<tt>中国内送料</tt>をシステムに登録し、利益額を算出します。
				</li>
			</ol>
			<br />
		<hr />
		<h2 class="center"><a name="term">選定基準</a></h2>
			<table class="noborder center">
				<tr class="boborder">
					<td class="noborder center" colspan="2"><i class="fa fa-asterisk"></i> <b>カテゴリ・ランキング</b></td>
					<td class="noborder left"><i class="fa fa-asterisk"></i> <b>出品者人数</b></td>
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
					<td class="noborder top left">
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
		<h2 class="center"><a name="faq">FAQ</a></h2>
			<ul>
				<li><b>Q：もっとやすい価格で仕入れしたい。</b>
					<br />
					A：下記方法をしてみましょう。
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder">
								<a class="tip-bottom" href="http://i.share.pho.to/56c8ec1b_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/56c8ec1b_o.jpeg" /></a>
							</td>
							<td class="noborder">
								<ol>
									<li>こちらをクリックすると商品をやすい順に並び替えることができます。</li>
									<li>
										商品の画像にマウスを合わせると、「找同款（同様な商品を表示する）」と「找相似（類似品を表示する）」が出ますので、必要に合わせてクリックし、さらにやすい順に並び替え、ターゲットを決めます。
										<br />
										<a class="tip-bottom" href="http://i.share.pho.to/c0161931_o.jpeg"><div>拡大表示</div><img style="width: 320px;" src="http://i.share.pho.to/c0161931_o.jpeg" /></a>
									</li>
								</ol>
							</td>
						</tr>
					</table>
				</li>
			</ul>
	</body>
</html>