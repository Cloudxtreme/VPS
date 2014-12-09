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
		<title>中国で売れている日本商品</title>
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
		<h1 class="center">中国で売れている日本商品</h1>
		<p class="center gray">更新時刻：<?php echo date("Y年m月d日 H:i:s",$updatetime_page) ?></p>			
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">一覧</a></li>
				<li class="gp-2"><a href="#tab2">フォーラムでの調査</a></li>
				<li class="gp-3"><a href="#tab3">タオバオでの調査</a></li>
				<li class="sl"><a href="#tab4">淘宝指数</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<br />
					<table class="center">
						<tr>
							<td>カテゴリー</td>
							<td>ブランド・商品</td>
						</tr>
						<tr>
							<td>パソコン・オフィス用品</td>
							<td>Kindle<span class="tip"><tt class="f75"><div style="font-size: 100%;">Kindle Paperwhite 2</div>KPW2</tt></span>　Apple<tt class="f75">全製品</tt>　Filco、HHKB<tt class="f75">キーボード</tt><br />HP<span class="tip"><tt class="f75"><div style="font-size: 100%;">自作NASの資材として、コスパの良さが有名</div>N54L</tt></span>　三菱鉛筆<tt class="f75">文房具</tt>　KOKUYO<tt class="f75">ノート</tt></td>
						</tr>
						<tr>
							<td>ホーム＆キッチン</td>
							<td>象印、TIGER、東芝、パナソニック<tt class="f75">炊飯器</tt>　SHARP<tt class="f75">空気清浄機</tt><br />象印、TIGER、THERMOS<tt class="f75">ケータイマグ</tt><tt class="f75">フードコンテナー</tt><br />九谷焼、有田焼<tt class="f75">陶器</tt>　京セラ<tt class="f75">セラミック包丁</tt></td>
						</tr>
						<tr>
							<td>ヘルス</td>
							<td>花王、エリエール<tt class="f75">オムツ</tt><tt class="f75">ナプキン</tt>　ライオン<tt class="f75">ハブラシ</tt><tt class="f75">ハミガキ</tt><br />Doクリア<tt class="f75">こどもハブラシ</tt>　花印、SANA、…<tt class="f75">効能付き化粧品</tt>　ソンバーユ<tt class="f75">馬油</tt><br />サガミオリジナル<tt class="f75">コンドーム</tt>　日暮里、…<tt class="f75">名器シリーズオナホール</tt></td>
						</tr>
						<tr>
							<td>ホビー</td>
							<td>ACG関連ほぼ全部<tt class="f75">アニメDVD、BD</tt><tt class="f75">フィギュア</tt><tt class="f75">ガンプラ</tt><tt class="f75">マンガ</tt><tt class="f75">ライトノベル</tt></td>
						</tr>
						<tr>
							<td>腕時計</td>
							<td>SEIKO、CASIO</td>
						</tr>
						<tr>
							<td>その他</td>
							<td>宙-SOLA-<tt class="f75">標本</tt>　龍角散　目薬　日本特有の日常を便利にする小道具</td>
						</tr>
					</table>
					<ul style="width: 669px; margin: 1em auto 0;">
						<li>情報ソースは以降2つのタブとなります。</li>
						<li>Apple製品は特に新発売されたものが人気で、高くても購入する人がいます。</li>
						<li>ACG関連商品はここ数年売れていますが、中国への進出がはやいため、利益率はそれほど高くない可能性があります。</li>
					</ul>
				</div>
				<div id="tab2" class="tab">
					<h4>この調査について</h4>
					<ul>
						<li><a href="http://www.v2ex.com/" target="_blank">V2EX</a>は、クリエイティブで有名な、会員数8万人を超えるコミュニティです。</li>
						<li>会員はインターネット、ゲーム、メディア産業の従業者がメインとされています。</li>
						<li>会員は若く、知識見識ともよい人たちが集中しています。</li>
						<li>国際情勢について、中国のプロパガンダではなく、インターネットで情報を把握していますので、日本に対して偏見は少ない。</li>
						<li>二日間前に提出したトピックですが、現在までアクセス数：2163、お気に入り登録数：27、と、日本商品に対して、かなりの関心を示しています。</li>
						<li>会員構成のせいか、VPSを熱く語っている者がいますが、先日打ち合わせの通り、VPSの商用は見送りにしましょう。</li>
					</ul>
					<h4>一部参考にできる内容</h4>
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder">
								<a class="tip-bottom" href="http://i.share.pho.to/69de8695_o.png"><div>拡大表示</div><img style="height: 1000px;" src="http://i.share.pho.to/69de8695_o.png" /></a>
							</td>
							<td class="noborder">
								<ol>
									<li>「フィギュア、腕時計、マスク、効能付化粧品。」</li>
									<br />
									<li>「オムツ、ナプキン。」</li>
									<br />
									<li>
										「自分のCASIOの腕時計も日本から直送してきた。国内で買うよりかなりやすかった。しかも限定版なら国内では高くでも入手できない。
										<br />
										補充：
										<br />
										日本プロバイダーのVPS、サーバ。
										<br />
										文房具、コクヨのノート三菱パイロットのペンなど。」
									</li>
									<br />
									<li>
										「円安の今じゃ、何でも儲かるだろう。
										<br />
										以前から売れている三種の神器：オムツ、粉ミルク、化粧品
										<br />
										それからデジタル製品、カメラなど。
										<br />
										聞いた話だけど、ニッチを専門的にやってる人もいる。鍋（炊飯器どか）、マグ（TIGER、THERMOSの）。」
									</li>
									<br />
									<li>
										「HHKB、Apple製品全般、高級カメラ（円レートだから）、効能付き化粧品（大盛りが特に）、フィギュア、ガンプラ、粉ミルク。
										<br />
										Panasonicのノーパソ、日本語配列キーボードが残念だけど。
										<br />
										日本レノボ公式ページ、よくよく特価品を出してくれる。」
									</li>
									<br />
									<li>「龍角散。」</li>
									<br />
									<li>
										「みんなが日常必須品が１点言い忘れている：空気清浄機。
										<br />
										5月頃郵便局でSHARPのDX70を受け取りに行ってみたら、
										<br />
										地下室の半分が日本から来た空気清浄機で埋まっている。」
									</li>
									<br />
									<li>「HHKB、象印TIGER炊飯器保温瓶、ソニー、各種化粧品、粉ミルク。」</li>
									<br />
									<li>「『九谷焼』、『有田焼』の陶器。」</li>
									<br />
									<li>「オナホール。」</li>
									<br />
									<li>「Kindle、N54L（索：自作NASの資材として、コスパの良さが有名）。」</li>
									<br />
									<li>
										「文房具、小型電気、ACG、各種アパレル、原宿単品
										<br />
										現代芸術品、書籍（日本は図書の国だよ）。」
									</li>
									<br />
									<li>「LIONのハブラシ、ハミガキ。例えば：「システマ」シリーズのハブラシ、酵素入りハミガキ。」</li>
								</ol>
							</td>
						</tr>
					</table>
				</div>
				<div id="tab3" class="tab">
					<h4>検索傾向</h4>
					下記キーワードの組み合わせを入力し、オートコンプリートで傾向を調べてみました。
					<br />
					<tt>日本</tt><tt class="tip-top"><div>日本語訳：直送</div>直邮</tt><tt class="tip-top"><div>日本語訳：代行購入</div>代购</tt><tt>本土</tt>	
					<ul>
						<li>
							<tt>日本</tt>
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/937c9a23_o.png"><div>拡大表示</div><img style="width: 400px;" src="http://i.share.pho.to/937c9a23_o.png" /></a>
									</td>
									<td class="noborder">
										<ol>
											<li>日本 <b>代行購入</b></li>
											<li>日本 <b>オーダー商品</b></li>
											<li>日本 <b>目薬</b></li>
											<li>日本 <b>保温瓶（マグ）</b></li>
											<li>日本 <b>おやつ</b></li>
											<li>日本 <b>ダイエット</b></li>
										</ol>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<tt>日本</tt>+<tt class="tip-top"><div>日本語訳：直送</div>直邮</tt>
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/c7e18e1a_o.png"><div>拡大表示</div><img style="width: 400px;" src="http://i.share.pho.to/c7e18e1a_o.png" /></a>
									</td>
									<td class="noborder">
										<ol>
											<li>日本 直送 <b>天然痘</b></li>
											<li>日本 直送 <b>ダウンジャケット</b></li>
											<li>日本 直送 <b>ケータイケース 6</b></li>
											<li>日本 直送 <b>マスク</b></li>
											<li>日本 直送 <b>ケーキ</b></li>
										</ol>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<tt>日本</tt>+<tt class="tip-top"><div>日本語訳：代行購入</div>代购</tt>
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/e6159cf2_o.png"><div>拡大表示</div><img style="width: 400px;" src="http://i.share.pho.to/e6159cf2_o.png" /></a>
									</td>
									<td class="noborder">
										<ol>
											<li>日本 代行購入 <b>ブラジャー、ボディスーツ（タイツ的ななにか？）</b></li>
											<li>日本 代行購入 <b>靴下 厚木</b></li>
											<li>日本 代行購入 <b>礼服</b></li>
											<li>日本 代行購入 <b>秋冬 5分丈スカート</b></li>
											<li>日本 代行購入 <b>はがため</b></li>
											<li>日本 代行購入 <b>下着 福袋</b></li>
										</ol>
									</td>
								</tr>
							</table>
						</li>
						<li>
							<tt>日本</tt>+<tt>本土</tt>
							<table class="noborder">
								<tr class="noborder">
									<td class="noborder">
										<a class="tip-bottom" href="http://i.share.pho.to/b22c22b8_o.png"><div>拡大表示</div><img style="width: 400px;" src="http://i.share.pho.to/b22c22b8_o.png" /></a>
									</td>
									<td class="noborder">
										<ol>
											<li>日本 本土 <b>代行購入マスク</b></li>
											<li>日本 本土 <b>代行購入アイマスク</b></li>
											<li>日本 本土 <b>髪マスク</b></li>
											<li>日本 本土 <b>スーパー 花王 L</b></li>
										</ol>
									</td>
								</tr>
							</table>
						</li>
					</ul>
					※上記結果は「キーワードの間に半角スペースを入れた」場合となります。
					<br />
					　半角スペースのない場合や全角スペースの場合は異なる結果を示す可能性があります。
				</div>
				<div id="tab4" class="tab">
					<br />
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder">
								<a class="tip-bottom" href="http://i.share.pho.to/331bbbd8_o.png"><div>拡大表示</div><img style="width: 400px;" src="http://i.share.pho.to/331bbbd8_o.png" /></a>
							</td>
							<td class="noborder">
								<ul>
									<li>
										<span class="tip">出品者のサポートとしてタオバオが公式的で<div>タオバオの登録メンバーのみに開示</div><b>半公開的</b>に開設したページ。</span>
									</li>
									<li>ご覧の通り、傾向、年齢層、性別別、星座別などいろいろ見える化されています。</li>
									<li>
										索も初めてこのツールサイトを知りましたので、分からない機能もたくさんあります。
										<br />
										個別に調査してほしい商品がありましたら、ここで調査いたしますので、ご連絡ください。
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>