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
				<li class="active gp-1"><a href="#tab1">事前准备</a></li>
				<li class="gp-2"><a href="#tab2">配置ShadowSocks</a></li>
				<li class="gp-3"><a href="#tab3">配置ChinaDNS</a></li>
				<li class="sl"><a href="#tab4">常见问题</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<ul>
						<li>准备好自己ShadowSocks的设置 <span class="hilight">服务器端口</span>、<span class="hilight">密码</span></li>
						<li>记录下来你所在地的<span class="hilight">DNS</span> <a href="http://dns.ip.cn/" target="_blank">点击此处查找</a></li>
						<li>对应机型的固件 <a href="firmware.php">下载页面</a></li>
						<br />
						准备好上述各项后，开始刷机/配置。
					</ul>
				</div>
				<div id="tab2" class="tab">
					<ul>
						<li>在浏览器中登录路由器。</li>
						<li>打开<span class="hilight">服务</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">ShadowSocks</span></li>
						以下为各项配置说明：
						<li><h3>全局设置</h3>
							<ol>
								<li>
									<b>启用</b>：ShadowSocks的开关。
								</li>
								<li>
									<b>使用配置文件</b>：可以指定路由器中的<tt>json</tt>格式的配置文件。
									<br />
									<span class="octicon octicon-info"></span> 设置比较麻烦，建议取消勾选此处，然后填写下面各项来配置。
								</li>
								<li>
									<b>服务器地址</b>：已搭建好ShadowSocks服务端的VPS的 <tt>IP地址</tt>。
								</li>
								<li>
									<b>服务器端口</b>：已搭建好ShadowSocks服务端的VPS的 <tt>ShadowSocks监听端口</tt>，已告知各位各自的端口。
									<br />
									<span class="octicon octicon-info"></span> <tt>8xxx</tt>端口用于连接<b>python版服务端</b>。
									<br />
									<span class="octicon octicon-info"></span> <tt>28xxx</tt>端口用于连接<b>go版服务端</b>。
									<br />
									<span class="octicon octicon-info"></span> 两种服务端本身没有明显区别，只是用于期待不同线路下取得更好的速度。
								</li>
								<li>
									<b>本地端口</b>：任意的空闲端口，用于生成本地的代理端口，如无特殊需要，保持默认的<tt>1080</tt>即可。
								</li>
								<li>
									<b>连接超时</b>：单位为秒，ShadowSocks的超时等待时间。
									<br />
									<span class="octicon octicon-info"></span> 建议设为较大（大于等于300）的值，有可能减少断流现象。
								</li>
								<li>
									<b>密码</b>：已告知各位，格式为<tt>xxxx-xxxx-xxxx-xxxx</tt>。
								</li>
								<li>
									<b>加密方式</b>：选择<tt>rc4-md5</tt>。
								</li>
								<li>
									<b>代理方式</b>：选择<tt>忽略列表</tt>。
									<br />
									<span class="octicon octicon-info"></span> 忽略列表中为中国境内IP段，所有不在此IP段的TCP流量（所有境外流量）全部经由ShadowSocks代理。
								</li>
							</ol>
						</li>
						<li><h3>UDP转发</h3>
							<span class="octicon octicon-info"></span> 通过UDP协议转发域名解析请求至VPS，并将解析结果返回至路由器，流量经由ShadowSocks所以不会<a href="http://zh.wikipedia.org/wiki/%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8%E7%BC%93%E5%AD%98%E6%B1%A1%E6%9F%93" target="_blank">被GFW污染域名</a>。
							<br />
							<span class="octicon octicon-info"></span> 启用后相当于多出来一个本地DNS域名解析服务器。
							<br />
							<span class="octicon octicon-info"></span> <b>只能</b>转发域名解析请求的UDP流量。
							<ol>
								<li>
									<b>启用</b>：UDP转发的开关。
								</li>
								<li>
									<b>UDP本地端口</b>：空闲的任意端口。
									<br />
									<span class="octicon octicon-info"></span> 建议值<tt>5353</tt>。
								</li>
								<li>
									<b>UDP转发地址</b>：目标DNS，VPS接到来自路由器的域名解析请求后，会将请求转发到改地址解析域名。
									<br />
									<span class="octicon octicon-info"></span> 建议值<tt>8.8.8.8:53</tt>。
								</li>
							</ol>
						</li>
						<li><h3>访问控制</h3>
							<span class="octicon octicon-info"></span> 通过IP地址指定允许/禁止使用ShadowSocks的设备，如无特殊需求无需设置。
						</li>
					</ul>
					<br />
					<p class="center"><span class="octicon octicon-info"></span> 所有设置点按<span class="btn">保存&应用</span>按钮后才会生效。</p>
				</div>
				<div id="tab3" class="tab">
					<ul>
						<li>在浏览器中登录路由器。</li>
						<li>打开<span class="hilight">服务</span> <span class="octicon octicon-arrow-right"></span> <span class="hilight">ShadowSocks</span></li>
						以下为各项配置说明：
						<li><h3>基本设置</h3>
							<ol>
								<li>
									<b>启用</b>：ChinaDNS的开关
								</li>
							</ol>
						</li>
					</ul>
					<br />
					<p class="center"><span class="octicon octicon-info"></span> 所有设置点按<span class="btn">保存&应用</span>按钮后才会生效。</p>
				</div>
			</div>
		</div>
			<p class="center">
				<a href="#pre">事前准备</a><a href="#mods">需要修改的文件</a><a href="#steps">修改步骤、内容</a><a href="#faq">FAQ</a>
			</p>
		<hr />
		<h2><a name="pre">事前准备：</a></h2>
			<ul>
				<li>目前ShadowSocks的设置 <span class="hilight"> 端口</span>、<span class="hilight">密码 </span></li>
				<li>当地DNS <a href="http://www.ip.cn/dns.html" target="_blank">点击此处查找</a></li>
				<li>WinSCP <a href="http://winscp.net/eng/download.php" title="WinSCP :: Download" target="_blank">下载页面</a> <a href="http://winscp.net/eng/translations.php" title="WinSCP :: Download" target="_blank">语言包</a>，用<span class="hilight">scp文件协议</span>连接</li>
				<li>新固件 <a href="firmware.php">下载页面</a></li>
				<br />
				<br />
				准备好上述各项后，开始刷机。
			</ul>
		<hr />
		<h2><a name="mods">需要修改的文件：</a></h2>
			<ol>
				<li><code>/etc/shadowsocks/config.json</code></li>
				<li><code>/etc/init.d/chinadns</code></li>
				<li><code>/etc/dnsmasq.conf</code></li>
			</ol>
		<hr />
		<h2><a name="steps">修改步骤、内容：</a></h2>
			<ol>
				<li><h3><code>/etc/shadowsocks/config.json</code></h3>
					按照下面修改，注意<span class="hilight"> 区分需要/不需要引号包围 </span>的项目：
					<br />
<pre>{
	"server": "106.186.115.170",
	"server_port": <p class="hilight">你的端口</p>,
	"local_port": 1080,
	"password": "<p class="hilight">你的密码</p>",
	"method": "rc4-md5"
}</pre>
				</li>
				<li><h3><code>/etc/init.d/chinadns</code></h3>
					按照下面<span class="hilight"> 修改DNS行</span>：
					<br />
<pre>#!/bin/sh /etc/rc.common
# chinadns init script

START=90

SERVICE_USE_PID=1
SERVICE_WRITE_PID=1
SERVICE_DAEMONIZE=1

start() {
	service_start /usr/bin/chinadns \
		-s <p class="hilight">你的当地DNS</p>,127.0.0.1:5353 \
		-l /etc/chinadns_iplist.txt \
		-c /etc/chinadns_chnroute.txt \
		-p 1053
}

stop() {
	service_stop /usr/bin/chinadns
}</pre>
				</li>
				<li><h3><code>/etc/dnsmasq.conf</code></h3>
					在<span class="hilight">文件末尾</span>添加下面两行：
					<br />
<pre>no-resolv
server=127.0.0.1#1053</pre>
				</li>
				<li><h3>确认路由器端设置</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>网络 <span class="octicon octicon-arrow-right"></span> DHCP/DNS <span class="octicon octicon-arrow-right"></span> 基本设置：清空<span class="hilight"> DNS转发 </span>文本框；</li>
						<li>网络 <span class="octicon octicon-arrow-right"></span> DHCP/DNS <span class="octicon octicon-arrow-right"></span> HOSTS和解析文件：勾选<span class="hilight"> 忽略解析文件 </span>和<span class="hilight"> 忽略HOSTS文件 </span>；</li>
						<li>点击<span class="btn">保存 & 应用</span>按钮。</li>
					</ol>
				</li>
				<li><h3><a name="ignore">设置计划任务，定时更新ShadowSocks的ignore.list</a></h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 计划任务：将下列命令黏贴进文本框；
						<blockquote><code class="tip"><div>每天3点50分更新ignore.list，然后重启ShadowSocks服务</div>50 3 * * * curl "http://104.128.93.119/router/shadowsocks/ignore.list" > /tmp/ignore.list && mv -f /tmp/ignore.list /etc/shadowsocks/ignore.list && /etc/init.d/shadowsocks restart</code></blockquote>
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
				<li><h3>设置升级不覆盖相关文件</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 备份/升级 <span class="octicon octicon-arrow-right"></span> 配置：将下面三条添加至列表；
						<br />
<pre>/etc/init.d/chinadns
/etc/shadowsocks/
/etc/chinadns_chnroute.txt</pre>
						<br />
						系统默认保存 <code>/etc/dnsmasq.conf</code> 中的设置，所以无需添加至上述列表。
						<br />
						<li>点击<span class="btn">提交</span>按钮。</li>
						</li>
					</ol>
				</li>
				<li><h3>重启路由器，完成。</h3></li>
			</ol>
		<hr />
		<h2><a name="faq">FAQ：</a></h2>
			<ul>
				<li>Q：怎样能知道ShadowSocks已经启用了？
				<br />
				A：打开<a href="http://ip.cn/" target="_blank">ip.cn</a>，看到的IP<span class="hilight"> 是国内的IP </span>，而且，打开<a href="http://www.whatismyip.com/" target="_blank">What Is My IP</a>，看到的IP<span class="hilight"> 是VPS的IP </span>就说明配置成功。
				</li>
				<br />
				<li>Q：突然外网都打不开了，怎么办？
				<br />
				A：用浏览器<a href="http://192.168.1.1/" target="_blank">登录路由器</a>，点击：系统 <span class="octicon octicon-arrow-right"></span> 启动项 <span class="octicon octicon-arrow-right"></span> 启动脚本 <span class="octicon octicon-arrow-right"></span> shadowsocks <span class="octicon octicon-arrow-right"></span> <span class="btn">重启</span>按钮。
				</li>
			</ul>
	</body>
</html>