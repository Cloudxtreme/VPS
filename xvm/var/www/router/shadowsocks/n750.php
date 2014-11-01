<?php
	date_default_timezone_set('Asia/Shanghai');

	$updatetime_page = filemtime("n750.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>使用ss-rules透明翻墙的步骤</title>
	</head>
	<body>
		<h1 class="center">使用ss-rules透明翻墙的步骤</h1>
			<?php
				echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
			?>
			<p class="center">
				<a href="javascript:history.go(-1)">返回</a><a href="#pre">事前准备</a><a href="#mods">需要修改的文件</a><a href="#steps">修改步骤、内容</a><a href="#faq">FAQ</a>
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
				<li><h3>设置计划任务，每天更新ShadowSocks的ignore.list</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 计划任务：将下列命令黏贴进文本框；
						<blockquote><code class="tip"><span>每天3点50分更新ignore.list，然后重启ShadowSocks服务</span>50 3 * * * curl "http://104.128.93.119/router/shadowsocks/ignore.list" > /tmp/ignore.list && mv -f /tmp/ignore.list /etc/shadowsocks/ignore.list && /etc/init.d/shadowsocks restart</code></blockquote>
						</li>
						<li>点击<span class="btn">提交</span>按钮。</li>
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