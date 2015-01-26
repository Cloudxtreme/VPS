<?php
	$title = '使用ssh协议设置OpenWrt';

	$updatetime_page = filemtime("ssh.php");

	include '../common.php';
?>

	<body>
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center">使用ssh协议设置 <i class="fa fa-rss"></i> OpenWrt</h1>
		<?php
			echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
		?>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1"><i class="fa fa-apple"></i> Mac OS X</a></li>
				<li class="gp-3"><a href="#tab2"><i class="fa fa-windows"></i>&nbsp;&nbsp;Windows</a></li>
				<li class="sl"><a href="#tab3"><i class="fa fa-rss"></i> OpenWrt 端常见命令</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<h2><a name="win-pre">事前准备：</a></h2>
						<ul>
							<li>启动 <i class="fa fa-terminal"></i> 终端。</li>
						</ul>
					<hr />
					<h2><a name="osx-steps">步骤：</a></h2>
						<ol>
							<li><h3>生成必要的文件</h3>
								<ol>
									<li>执行<tt>mkdir ~/.ssh</tt> 生成密钥用文件夹；</li>
									<li>执行<tt>touch ~/.ssh/config</tt> 生成ssh配置文件。</li>
									<span class="octicon octicon-info"></span> 如果提示文件已存在，可以使用已有的，无视即可。
								</ol>
							</li>
							<li><h3>生成、设置配对密钥</h3>
								<ol>
									<li>
										执行<tt>ssh-keygen -t rsa</tt> 生成配对密钥；
										<br />
										<span class="octicon octicon-info"></span> 要求指定输出路径时，按回车输出至默认路径 <span class="gray">括号中的路径</span>。
										<br />
										<span class="octicon octicon-info"></span> 要求指定密码短语时，按2次回车不使用密码短语。
									</li>
									<li>
										正常完成后，屏幕输出如下：
										<br />
										<span class="octicon octicon-info"></span> <p class="hilight">id_rsa</p>是 <i class="fa fa-key"></i> 私钥文件、<p class="hilight">id_rsa.pub</p>是 <i class="fa fa-lock"></i> 公钥文件。
										<br />
<pre>ssh-keygen -t rsa
Generating public/private rsa key pair.
Enter file in which to save the key (/Users/<i>用户名</i>/.ssh/id_rsa): 
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in /Users/<i>用户名</i>/.ssh/<code class="hilight">id_rsa</code>.
Your public key has been saved in /Users/<i>用户名</i>/.ssh/<code class="hilight">id_rsa.pub</code>.
The key fingerprint is:
80:9c:b3:e5:f5:d2:2d:3f:69:c6:e7:67:b6:87:e8:1f <i>用户名</i>@<i>主机名</i>
The key's randomart image is:
+--[ RSA 2048]----+
|                 |
|   . o           |
|    = o .        |
|     = o o .     |
|    . . S + .    |
|         . + .   |
|            B.E. |
|           o.+..=|
|           ...o=o|
+-----------------+</pre>
									</li>
									<li><p class="safe">推荐</p>执行<tt>ssh-add -K ~/.ssh/id_rsa</tt> 将 <i class="fa fa-key"></i> 私钥加入OS X钥匙串，今后可随iCloud同步至其他客户端。</li>
									<li>
										执行<tt>scp ~/.ssh/id_rsa.pub root@192.168.1.1:/tmp/id_rsa.pub</tt> 
										上传 <i class="fa fa-lock"></i> 公钥至路由器；
										<br />
										<span class="octicon octicon-info"></span> 会要求输入<tt>root</tt>的密码。
									</li>
									<li>
										执行<tt>ssh root@192.168.1.1</tt> 使用ssh协议登录路由器；
										<br />
										<span class="octicon octicon-info"></span> 会要求输入<tt>root</tt>的密码 <span class="gray">最后一次</span>。
									</li>
									<li>
										执行<tt>cat /tmp/id_rsa.pub >> /etc/dropbear/authorized_keys</tt> 将刚才生成的 <i class="fa fa-lock"></i> 公钥加入路由器的公钥列表；
										<br />
										<span class="octicon octicon-info"></span> 加入完毕后可以执行<tt>rm /tmp/id_rsa.pub</tt>删除刚才上传的 <i class="fa fa-lock"></i> 公钥，也可以无视，在下次路由器重启后自动删除 <span class="gray">因为/tmp是临时文件夹</span>。
									</li>
									<li>完成。执行<tt>exit</tt>退出路由器，今后执行<tt>ssh root@192.168.1.1</tt>即可免密码登录。</li>
								</ol>
							</li>
							<li><h3>设置ssh配置文件快速访问</h3>
								<ol>
									<li>执行<tt>nano ~/.ssh/config</tt> 开始编辑ssh配置文件；</li>
									<li>
										将下面的配置黏贴到终端窗口：
										<br />
										<span class="octicon octicon-info"></span> Host名称n750可以任意指定。
										<br />
										<span class="octicon octicon-info"></span> 默认端口22，如果没有修改过ssh端口，最后一行可有可无。
										<br />
<pre>Host	n750
	Hostname	192.168.1.1
	User		root
	Port		22</pre>
									</li>
									<li>按下<span class="key">control</span>+<span class="key">O</span>将变更写入文件，确认文件名后按回车确定。</li>
									<li>按下<span class="key">control</span>+<span class="key">X</span>退出nano。</li>
									<li>完成。今后执行<tt>ssh n750</tt>即可。</li>
								</ol>
							</li>
						</ol>
				</div>
				<div id="tab2" class="tab">
					<h2><a name="win-pre">事前准备：</a></h2>
						<ul>
							<li>PuTTY，下载：<a href="http://the.earth.li/~sgtatham/putty/latest/x86/putty.exe">putty.exe</a></li>
							<li>PuTTY Key Generator，下载：<a href="http://the.earth.li/~sgtatham/putty/latest/x86/puttygen.exe">puttygen.exe</a></li>
						</ul>
					<hr />
					<h2><a name="win-steps">步骤：</a></h2>
						<dl>
							<dt><h3><i class="fa fa-lock"></i> 公钥 <span class="gray">Public Key</span></h3></dt>
							<dd>
								<ol>
									<li>双击 puttygen.exe 启动 PuTTY Key Generator，点击<p class="btn">Generate</p>按钮；</li>
									<li>在进度条下方空白处随机移动鼠标光标，添加随机片段；</li>
									<li>全选复制刚才生成的公钥；</li>
									<li>在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>：
										<ol>
											<li>打开 系统 <span class="octicon octicon-arrow-right"></span> 管理权；</li>
											<li>将刚才复制的公钥黏贴至<p class="hilight">SSH-密钥</p>下方的文本框；</li>
											<li>点击<p class="btn">保存 & 应用</p>按钮。</li>
										</ol>
									</li>
									<li>完成。</li>
									<span class="octicon octicon-info"></span> 不要关闭PuTTY Key Generator。
								</ol>
							</dd>
							<dt><h3><i class="fa fa-key"></i> 私钥 <span class="gray">Private Key</span></h3></dt>
							<dd>
								<ol>
									<li>回到PuTTY Key Generator，点击<p class="btn">Save private key</p>按钮，随便起个名字保存到好找的地方；</li>
									<span class="octicon octicon-info"></span> 出现弹窗的话点<p class="btn">是(Y)</p>按钮。
									<li>双击putty.exe启动PuTTY：
										<ol>
											<li>在<p class="hilight">Host Name</p>中填入路由器IP；</li>
											<li>左侧树状目录定位至 Connection <span class="octicon octicon-arrow-right"></span> Data，在<p class="hilight">Auto-login username</p>中填入<tt>root</tt>；</li>
											<li>左侧树状目录定位至 Connection <span class="octicon octicon-arrow-right"></span> SSH <span class="octicon octicon-arrow-right"></span> Auth，点按<p class="btn">Browse...</p>按钮，指定刚才保存的私钥为认证用私钥；</li>
											<li>左侧树状目录定位回 Session，在<p class="hilight">Saved Sessions</p>输入要保存的会话名，如<tt>root@192.168.1.1</tt>；</li>
											<li>点击<p class="btn">Save</p>按钮，保存设置。</li>
										</ol>
									</li>
									<li>完成。</li>
									<span class="octicon octicon-info"></span> 双击刚才保存的<tt>root@192.168.1.1</tt>，未请求用户名、密码，直接完成登录，即为设置成功。
									<br />
									<span class="octicon octicon-info"></span> 首次启动会有密钥指纹警示弹窗，点<p class="btn">是(Y)</p>按钮。											
								</ol>
							</dd>
						</dl>
				</div>
				<div id="tab3" class="tab">
					<br />
					<table class="noborder">
						<tr class="noborder">
							<td class="noborder"><tt>cat /proc/version</tt></td>
							<td class="noborder">显示版本详细信息。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>cat /proc/cpuinfo</tt></td>
							<td class="noborder">显示CPU详细信息。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>cd /to/path/</tt></td>
							<td class="noborder">切换到新目录下。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>cp /path/to/A /new/path/to/B</tt></td>
							<td class="noborder">复制文件A到新路径下并改名为B。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>mv /path/to/A /new/path/to/B</tt></td>
							<td class="noborder">移动文件A到新路径下并改名为B。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>rm /path/to/A</tt></td>
							<td class="noborder">删除文件A。</td>
						</tr>
						<tr class="noborder">
							<td class="noborder"><tt>reboot</tt></td>
							<td class="noborder">重新启动。</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>