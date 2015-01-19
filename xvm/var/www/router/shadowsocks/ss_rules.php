<?php
	include '../../common.php';

	$updatetime_page = filemtime("ss_rules.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>使用ss-rules透明翻墙的步骤</title>
		<script src="../../js/jquery-1.11.1.min.js"></script>
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
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center">使用ss-rules透明翻墙的步骤</h1>
		<?php
			echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
		?>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active sl"><a href="#tab1">事前准备</a></li>
				<li class="gp-1"><a href="#tab2">ShadowSocks</a></li>
				<li class="gp-2"><a href="#tab3">ChinaDNS</a></li>
				<li class="gp-3"><a href="#tab4">其他</a></li>
				<li class="sl"><a href="#tab5">常见问题</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<ul>
						<li>准备好自己ShadowSocks的设置 <span class="hilight">服务器端口</span>、<span class="hilight">密码</span></li>
						<li>记录下来你所在地的<span class="hilight">DNS</span> <a href="http://dns.ip.cn/" target="_blank">点击此处查找</a></li>
						<li>对应机型的固件 <a href="../firmware.php">下载页面</a></li>
						<br />
						准备好上述各项后，开始刷机/配置。
					</ul>
				</div>
				<div id="tab2" class="tab">
					<ol>
						<li>在浏览器中登录路由器。</li>
						<li>打开<span class="hilight">服务</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">ShadowSocks</span></li>
						以下为各项配置说明：
						<table class="noborder center">
							<th class="noborder f175 right">全局设置</th>
							<tr class="noborder">
								<td class="noborder bold right top">启用</td>
								<td class="noborder left">
									ShadowSocks的开关。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">使用配置文件</td>
								<td class="noborder left">
									可以指定路由器中的<tt>json</tt>格式的配置文件。
									<br />
									<span class="octicon octicon-info"></span> 设置比较麻烦，建议取消勾选此处，然后填写下面各项来配置。
									<br />
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">服务器地址</td>
								<td class="noborder left">
									已搭建好ShadowSocks服务端的VPS的 <tt>IP地址</tt>。
									<br />
									<span class="octicon octicon-info"></span> 当前可用的IP地址可以在<a href="../../index.php">首页</a>找到。
									<br />
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">服务器端口</td>
								<td class="noborder left">
									已搭建好ShadowSocks服务端的VPS的 <tt>ShadowSocks监听端口</tt>，已告知各位各自的端口。
									<br />
									<span class="octicon octicon-info"></span> <tt>8xxx</tt>端口用于连接<b>python版服务端</b>。
									<br />
									<span class="octicon octicon-info"></span> <tt>28xxx</tt>端口用于连接<b>go版服务端</b>。
									<br />
									<span class="octicon octicon-info"></span> 两种服务端本身没有明显区别，只是用于期待不同线路下取得更好的速度。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">本地端口</td>
								<td class="noborder left">
									任意的空闲端口，用于生成本地的代理端口，如无特殊需要，保持默认的<tt>1080</tt>即可。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">连接超时</td>
								<td class="noborder left">
									单位为秒，ShadowSocks的超时等待时间。
									<br />
									<span class="octicon octicon-info"></span> 建议设为较大（大于等于300）的值，有可能减少断流现象。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">密码</td>
								<td class="noborder left">
									已告知各位，格式为<tt>xxxx-xxxx-xxxx-xxxx</tt>。
									<br />
									<span class="octicon octicon-info"></span> 所有VPS的密码都一样，切换VPS无需更换密码。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">加密方式</td>
								<td class="noborder left">
									选择<tt>rc4-md5</tt>。
									<br />
									<span class="octicon octicon-info"></span> 所有VPS的加密方式都一样，切换VPS无需更换加密方式。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">代理方式</td>
								<td class="noborder left">
									选择<tt>忽略列表</tt>。
									<br />
									<span class="octicon octicon-info"></span> 忽略列表中为中国境内IP段，所有不在此IP段的TCP流量（所有境外流量）全部经由ShadowSocks代理。
								</td>
							</tr>
							<th class="noborder f175 right">UDP转发</th>
							<tr class="noborder">
								<td class="noborder left" colspan="2">
									通过UDP协议转发域名解析请求至VPS，并将解析结果返回至路由器。
									<br />
									<span class="octicon octicon-info"></span> 流量由ShadowSocks传输所以不会<a href="http://zh.wikipedia.org/wiki/%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BC%93%E5%AD%98%E6%B1%A1%E6%9F%93" target="_blank">被GFW污染域名</a>。
									<br />
									<span class="octicon octicon-info"></span> 启用后相当于多出来一个本地DNS域名解析服务器。
									<br />
									<span class="octicon octicon-info"></span> <b>只能</b>转发域名解析请求的UDP流量。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">启用</td>
								<td class="noborder left">
									UDP转发的开关。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">UDP本地端口</td>
								<td class="noborder left">
									空闲的任意端口。
									<br />
									<span class="octicon octicon-info"></span> 建议值<tt>5353</tt>。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">UDP转发地址</td>
								<td class="noborder left">
									目标DNS。VPS接到来自路由器的域名解析请求后，会将请求转发到此地址解析域名。
									<br />
									<span class="octicon octicon-info"></span> 建议值<tt>8.8.8.8:53</tt>。
								</td>
							</tr>
							<th class="noborder f175 right">访问控制</th>
							<tr class="noborder">
								<td class="noborder left" colspan="2">
									通过IP地址指定允许/禁止使用ShadowSocks的设备，如无特殊需求无需设置。
								</td>
							</tr>
						</table>
					</ol>
					<br />
					<p class="center"><span class="octicon octicon-info"></span> 所有设置在点按<span class="btn">保存&应用</span>按钮后才会生效。</p>
				</div>
				<div id="tab3" class="tab">
					<ol>
						<li>在浏览器中登录路由器。</li>
						<li>打开<span class="hilight">服务</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">ChinaDNS</span></li>
						以下为各项配置说明：
						<table class="noborder center">
							<th class="noborder f175 right">基本设置</th>
							<tr class="noborder">
								<td class="noborder bold right top">启用</td>
								<td class="noborder left">
									ChinaDNS的开关。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">本地端口</td>
								<td class="noborder left">
									ChinaDNS监听域名解析请求的端口，填写空闲的任意端口。
									<br />
									<span class="octicon octicon-info"></span> 建议值<tt>1053</tt>。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">污染IP列表</td>
								<td class="noborder left">
									来自GFW的虚假IP结果，列表内IP将被丢弃。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">国内路由表</td>
								<td class="noborder left">
									中国境内全部IP段，文件内容和ShadowSocks的忽略列表一致。
									<br />
									<span class="octicon octicon-info"></span> 建议修改为<tt>/etc/shadowsocks/ignore.list</tt>，与ShadowSocks共用一个文件。
								</td>
							</tr>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">上游服务器</td>
								<td class="noborder left">
									ChinaDNS的上游DNS服务器，格式为<tt>一个国内DNS,若干个境外DNS</tt>，多个IP地址使用逗号隔开。
									<br />
									<span class="octicon octicon-info"></span> 境内/外站点会自动使用境内/外DNS的解析结果，有CDN加速又不会被污染域名。
									<br />
									<span class="octicon octicon-info"></span> 建议填写<tt>你自己当地的DNS,8.8.4.4,208.67.220.220:443,208.67.220.220:5353</tt>。
									<br />
									<span class="octicon octicon-info"></span> 如果在ShadowSocks设置中启用了<b>UDP转发</b>，还可以再追加填写一个<tt>127.0.0.1:5353</tt>。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">启用双向过滤</td>
								<td class="noborder left">
									境外站点解析出国内IP时，解析结果将被丢弃。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">延迟时间(秒)</td>
								<td class="noborder left">
									解析请求发出后，正确结果返回前，GFW会抢先发出虚假应答以达到污染目的。
									<br />
									设置后会丢弃小于设定延时时间返回的解析结果。
								</td>
							</tr>
						</table>
					<li>打开<span class="hilight">网络</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">DHCP/DNS</span></li>
						以下为各项配置说明：
						<table class="noborder center">
							<th class="noborder f175 right">基本设置</th>
							<tr class="noborder">
								<td class="noborder bold right top">DNS转发</td>
								<td class="noborder left">
									设为<tt>127.0.0.1#1053</tt>，将域名解析请求全部转发给ChinaDNS。
								</td>
							</tr>
							<th class="noborder f175 right">HOSTS和解析文件</th>
							<tr class="noborder">
								<td class="noborder bold right top">忽略解析文件</td>
								<td class="noborder left">
									<span class="octicon octicon-check"></span> 勾选，以保证不影响ChinaDNS的解析结果。
								</td>
							</tr>
							<tr class="noborder">
								<td class="noborder bold right top">忽略HOSTS文件</td>
								<td class="noborder left">
									<span class="octicon octicon-check"></span> 勾选，以保证不影响ChinaDNS的解析结果。
								</td>
							</tr>
						</table>
					</ol>
					<br />
					<p class="center"><span class="octicon octicon-info"></span> 所有在设置点按<span class="btn">保存&应用</span>按钮后才会生效。</p>
				</div>
				<div id="tab4" class="tab">
					<ul>
						<li><a name="ignore">设置计划任务，定时更新ShadowSocks的忽略列表。</a>
							<br />
							在浏览器中登录路由器。
							<ol>
								<li>打开<span class="hilight">系统</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">计划任务</span>：将下列命令黏贴进文本框（一行）；
								<blockquote><code class="tip"><div>每天3点50分更新ignore.list，然后重启ChinaDNS和ShadowSocks服务</div>50 3 * * * curl "http://104.128.93.119/router/shadowsocks/ignore.list" > /tmp/ignore.list && mv -f /tmp/ignore.list /etc/shadowsocks/ignore.list && /etc/init.d/chinadns restart && /etc/init.d/shadowsocks restart</code></blockquote>
								</li>
								<li>点击<span class="btn">提交</span>按钮。
									<br />
									<span class="octicon octicon-info"></span> 下载随时更新的 <a class="tip-bottom" href="../../savingfiles.php?filename=router/shadowsocks/ignore.list">
									<div>
										<?php
											echo
												'文件行数：'.CountLines("ignore.list")
												.'<br />文件大小：'.RealSize("ignore.list")
												.'<br />更新时间：'.date("Y年m月d日 H:i:s",filemtime("ignore.list"));
										?>
									</div>
									<i class="fa fa-file-text-o"></i> ignore.list</a>
								</li>
							</ol>
						</li>
						<li>
							设置计划任务，定时运行防止断流的脚本
							<?php
								echo
								'<a href="keep_alive.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("keep_alive.php")).'</sup>';
							?>
						</li>
					</ul>
				</div>
				<div id="tab5" class="tab">
					<p class="center gray">遇到问题时，请先排查前面的设置是否全部正确。</p>
					<ul>
						<li>
							Q：怎样能知道ShadowSocks已经启用了？
							<br />
							A：打开<a href="http://ip138.com/" target="_blank">ip138.com</a>，看到的IP<span class="hilight"> 是国内的IP </span>，<b>而且</b>打开<a href="http://www.whatismyip.com/" target="_blank">What Is My IP</a>，看到的IP<span class="hilight"> 是VPS的IP </span>就说明配置成功。
						</li>
						<br />
						<li>
							Q：我已经<a href="keep_alive.php">设置了定时运行防止断流的脚本</a>，外网还是突然都打不开了，怎么办？
							<br />
							A：用浏览器登录路由器，打开：系统 <span class="octicon octicon-arrow-right"></span> 启动项 <span class="octicon octicon-arrow-right"></span> 启动脚本 <span class="octicon octicon-arrow-right"></span> shadowsocks <span class="octicon octicon-arrow-right"></span> 点按<span class="btn">重启</span>按钮。
						</li>
						<br />
						<li>
							Q：怎么这么慢啊？是不是SS坏了啊？
							<br />
							A：电信国际出口拥挤，高峰时段（周末、晚上）尤其严重，现在基本无解。
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>