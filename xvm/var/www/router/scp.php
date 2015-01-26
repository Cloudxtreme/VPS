<?php
	$title = '管理路由器内部文件';

	$updatetime_page = filemtime("scp.php");

	include '../common.php';
?>

	<body>
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center">管理路由器内部文件</h1>
		<?php
			echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
		?>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1"><i class="fa fa-apple"></i> Mac OS X</a></li>
				<li class="gp-3"><a href="#tab2"><i class="fa fa-windows"></i>&nbsp;&nbsp;Windows</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<h2><a name="osx-pre">事前准备：</a></h2>
						<ul>
							<li>新固件：<a href="firmware.php">下载页面</a> <span class="hilight">2014年10月18日之后</span>的版本</li>
							<li>客户端：<span class="safe">推荐</span><a href="http://soft.macx.cn/2910.htm" target="_blank">Transmit</a></li>
						</ul>
					<hr />
					<h2><a name="osx-steps">步骤：</a></h2>
						<ol>
							<li>参考<a href="http://104.128.93.119/router/ssh.php" target="_blank" title="使用ssh协议设置OpenWrt">这篇文章</a>将ssh公钥导入路由器；</li>
							<li>参考<a href="http://104.128.93.119/router/ssh.php" target="_blank" title="使用ssh协议设置OpenWrt">这篇文章</a>准备好ssh私钥文件，或将私钥文件加入 <i class="fa fa-apple"></i> OS X钥匙串；</li>
							<li>启动 Transmit，点按菜单栏 Favorites <span class="octicon octicon-arrow-right"></span> Add to Favorites…</li>
							<li>如下填写：
								<ol>
									<li>随便起个好记的名字；</li>
									<li><span class="hilight">Protocol:</span> 选择 <tt><i class="fa fa-lock"></i> SFTP</tt>；</li>
									<li><span class="hilight">Server:</span> 填写 <tt class="tip"><div>路由器的IP</div>192.168.1.1</tt>；</li>
									<li><span class="hilight">User Name:</span> 填写 <tt>root</tt>；</li>
									<li>
										<span class="hilight">Password:</span> 输入框留空，点按密码输入框右侧钥匙按钮，导入ssh私钥；
										<br />
										<span class="octicon octicon-info"></span> 若已将ssh私钥导入钥匙串，则须允许 Transmit 访问钥匙串，允许后无需做其他密码相关的设置。
									</li>
									<li>点按<span class="btn">Save</span>按钮保存设置。</li>
								</ol>
							</li>
							<li>完成。</li>
							<br />
							双击刚才设置的项目，即可登录路由器。
						</ol>
				</div>
				<div id="tab2" class="tab">
					<h2><a name="win-pre">事前准备：</a></h2>
						<ul>
							<li>新固件：<a href="firmware.php">下载页面</a> <span class="hilight">2014年10月18日之后</span>的版本</li>
							<li>客户端：<a href="http://www.guofs.com/archives/15712">FlashFXP</a>、<span class="safe">推荐</span><a href="http://winscp.net/eng/download.php" target="_blank">WinSCP</a> <a href="http://winscp.net/eng/translations.php" target="_blank">语言包</a></li>
						</ul>
					<hr />
					<h2><a name="osx-steps">步骤：</a></h2>
						<ol>
							<li>参考<a href="http://104.128.93.119/router/ssh.php" target="_blank" title="使用ssh协议设置OpenWrt">这篇文章</a>将ssh公钥导入路由器；</li>
							<li>参考<a href="http://104.128.93.119/router/ssh.php" target="_blank" title="使用ssh协议设置OpenWrt">这篇文章</a>准备好ssh私钥文件；</li>
							<li>启动WinSCP，如下设置：
								<ol>
									<li>点按左上角<span class="hilight">新建站点</span>；</li>
									<li><span class="hilight">文件协议</span> 选择 <tt>SFTP</tt> 或者 <tt>SCP</tt>；</li>
									<li><span class="hilight">主机名</span> 填写 <tt class="tip"><div>路由器的IP</div>192.168.1.1</tt>；</li>
									<li><span class="hilight">用户名</span> 填写 <tt>root</tt>；</li>
									<li><span class="hilight">密码</span> 留空，点按下方<span class="btn">高级</span>按钮；</li>
									<li>左侧树状目录定位至 SSH <span class="octicon octicon-arrow-right"></span> 验证，选取事先准备好的私钥文件；</li>
									<li>点按<span class="btn">确定</span>按钮关闭高级站点设置窗口；</li>
									<li>点按<span class="btn">保存</span>按钮保存设置。</li>
								</ol>
							</li>
							<li>完成。</li>
							<br />
							双击刚才设置的项目，即可登录路由器。
						</ol>
				</div>
			</div>
		</div>
	</body>
</html>