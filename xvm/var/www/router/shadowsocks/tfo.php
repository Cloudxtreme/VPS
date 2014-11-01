<?php
	date_default_timezone_set('Asia/Shanghai');

	$updatetime_page = filemtime("tfo.php");

	$tfo = "TCP Fast Open";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../../style.css">
		<title>开启TFO（TCP Fast Open）特性，进一步降低ShadowSocks连接延时</title>
	</head>
	<body>
		<?php
			echo
			'<h1 class="center">开启TFO（<a href="http://en.wikipedia.org/wiki/TCP_Fast_Open" title="'.$tfo.' @ Wikipedia" target="_blank">'.$tfo.'</a>）特性<br />进一步降低ShadowSocks连接延时</h1>
			<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
		?>
			<p class="center">
				<a href="javascript:history.go(-1)">返回</a><a href="#pre">事前准备</a><a href="#mods">需要修改的文件</a><a href="#steps">修改步骤、内容</a>
			</p>
		<hr />
		<h2><a name="pre">事前准备：</a></h2>
			<ul>
				<li>WinSCP <a href="http://winscp.net/eng/download.php" title="WinSCP :: Download" target="_blank">下载页面</a> <a href="http://winscp.net/eng/translations.php" title="WinSCP :: Download" target="_blank">语言包</a>，用<span class="hilight">scp文件协议</span>连接</li>
				<li>新固件 <a href="firmware.php">下载页面</a>，<span class="hilight">2014年10月08日之后</span>的版本</li>
			</ul>
		<hr />
		<h2><a name="mods">需要修改的文件：</a></h2>
			<ol>
				<li><code>/etc/init.d/shadowsocks</code></li>
				<li><code>/etc/sysctl.conf</code></li>
			</ol>
		<hr />
		<h2><a name="steps">修改步骤、内容：</a></h2>
			<ol>
				<li><h3><code>/etc/init.d/shadowsocks</code></h3>
				按照下面修改，添加<span class="hilight"> 蓝字部分参数 </span>：
					<br />
<pre>#!/bin/sh /etc/rc.common

START=95

SERVICE_USE_PID=1
SERVICE_WRITE_PID=1
SERVICE_DAEMONIZE=1

CONFIG=/etc/shadowsocks/config.json
IGNORE=/etc/shadowsocks/ignore.list

start() {
	/usr/bin/ss-rules -c $CONFIG -i $IGNORE && \
	service_start /usr/bin/ss-redir <p class="hilight"><code>--fast-open</code></p> -c $CONFIG
	service_start /usr/bin/ss-tunnel <p class="hilight"><code>--fast-open</code></p> -c $CONFIG -l 5353 -L 8.8.8.8:53 -u
}

stop() {
	service_stop /usr/bin/ss-tunnel
	service_stop /usr/bin/ss-redir
	/etc/init.d/firewall restart>/dev/null 2>&1
}</pre>
				</li>
				<li><h3><code>/etc/sysctl.conf</code></h3>
					在<span class="hilight">文件末尾</span>添加下面一行：
					<blockquote><code>net.ipv4.tcp_fastopen = 1</code></blockquote>
				</li>
				<li><h3>设置升级不覆盖相关文件</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 备份/升级 <span class="octicon octicon-arrow-right"></span> 配置：将下面一条添加至列表
							<blockquote><code>/etc/init.d/shadowsocks</code></blockquote>
							系统默认保存 <code>/etc/sysctl.conf</code> 中的设置，所以无需添加至上述列表。
						</li>
						<br />
						<li>点击<span class="btn">提交</span>按钮。</li>
					</ol>
				</li>
				<li><h3>重启路由器，完成。</h3></li>
			</ol>
	</body>
</html>