<?php
	$title = '定时自动检测ShadowSocks，并且按需重启的脚本';

	$updatetime_page = filemtime("keep_alive.php");

	$ico = 'gm.ico';
	$check = 'scripts/check';
	$check_plus = 'scripts/check_plus';

	include '../../common.php';
?>

	<body>
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center">定时自动检测ShadowSocks，并且按需重启的脚本</h1>
			<?php
				echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
			?>
			<p class="center">
				<a href="#notes">原理</a><a href="#pre">事前准备</a><a href="#steps">修改步骤、内容</a><a href="#faq">FAQ</a>
			</p>
		<hr />
		<h2><a name="notes">原理：</a></h2>
			<?php
				echo
					'<div>用wget下载推特的网站图标 <img src="'.$ico.'" /> <sup>文件大小：'.filesize($ico).'字节</sup>，并输出日志。
					<br />
					如果ShadowSocks断流会导致下载失败，日志中会有<p class="hilight">failed</p>字样，脚本检测到<p class="hilight">failed</p>就会重启ShadowSocks。
					<br />
					有时ShadowSocks的进程已经消失，但是图标依然可以被下载，所以脚本还会检测进程是否存在，消失时重启ShadowSocks。</div>';
			?>
		<hr />
		<h2><a name="pre">事前准备：</a></h2>
			<ul>
				<li>管理路由器内部文件 <a href="../scp.php">查看</a></li>
			</ul>
		<hr />
		<h2><a name="steps">修改步骤、内容：</a></h2>
			<ol>
				<li><h3>脚本</h3>
					<p class="hilight">脚本1</p>：检测到断流后，重启ShadowSocks；
					<br />
					<p class="hilight">脚本2</p>：检测到断流后，重启ShadowSocks并验证，依然断流的话重启路由器。
					<br />
					<br />
					<ol>
						<li>脚本1:
							<?php
								echo
								'<br />
								<pre>'
								.file_get_contents($check)
								.'</pre>
								<br />
								点击<a class="tip" href="../../savingfiles.php?filename=router/shadowsocks/'.$check.'"><div>更新时间：'
								.date("Y年m月d日 H:i:s",filemtime($check))
								.'</div>此处</a>下载脚本，保存备用。';
							?>
						</li>
						<br />
						<li>脚本2:
							<?php
								echo
								'<br />
								<pre>'
								.file_get_contents($check_plus)
								.'</pre>
								<br />
								点击<a class="tip" href="../../savingfiles.php?filename=router/shadowsocks/'.$check_plus.'"><div>更新时间：'
								.date("Y年m月d日 H:i:s",filemtime($check_plus))
								.'</div>此处</a>下载脚本，保存备用。';
							?>
						</li>
					</ol>
				</li>
				<li><h3>上传、编辑脚本权限</h3>
					<ol>
						<li>用WinSCP将脚本上传到路由器中 <p class="safe">推荐上传至</p> <code>/etc/shadowsocks/</code></li>
						<li>赋予脚本执行权限：
							<ol>
								<li>右键点击 <code>/etc/shadowsocks/check</code> 选择<p class="hilight">属性</p>；</li>
								<li>在<p class="hilight">八进制表示法</p>中输入 <code>0755</code> ；</li>
								<li>点击<p class="btn">确定</p>按钮完成权限编辑。</li>
							</ol>
						</li>
					</ol>
				</li>
				<li><h3>将脚本添加至计划任务，定时检查ShadowSocks</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 计划任务：将下列命令黏贴进文本框；
						<blockquote><code class="tip"><div>每隔10分钟运行一次</div>*/10 * * * * sh /etc/shadowsocks/check<div>脚本1</div></code></blockquote>
						或者
						<blockquote><code class="tip"><div>每隔10分钟运行一次</div>*/10 * * * * sh /etc/shadowsocks/check_plus<div>脚本2</div></code></blockquote>
						</li>
						<li>点击<span class="btn">提交</span>按钮。</li>
					</ol>
				</li>				
				<li><h3>设置升级不覆盖相关文件</h3>
					在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
					<ol>
						<li>系统 <span class="octicon octicon-arrow-right"></span> 备份/升级 <span class="octicon octicon-arrow-right"></span> 配置：将下面1条添加至列表；
						<blockquote><code>/etc/shadowsocks/</code></blockquote>
						</li>
						<li>点击<span class="btn">提交</span>按钮。</li>
					</ol>
				</li>
				<li><h3>完成</h3></li>
			</ol>
		<hr />
		<h2><a name="faq">FAQ：</a></h2>
			<ul>
				<li>Q：怎么还是断流？
				<br />
				A：有可能ShadowSocks客户端本身还有bug，设置脚本、手动重启ShadowSocks客户端依然无效的话，就只能重启路由器了。
				</li>
			</ul>
	</body>
</html>