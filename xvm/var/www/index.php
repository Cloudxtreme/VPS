<?php
	include 'common.php';

	$updatetime_page = filemtime("index.php");

	$path_op = 'router';
	$path_ss = 'router/shadowsocks';
	$ignore = 'router/shadowsocks/ignore.list';

	$blance = 0;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>OpenWrt LAB</title>
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
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center"><i class="fa fa-rss"></i> OpenWrt LAB</h1>
		<?php
			echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
		?>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1 tip"><a href="#tab1"><div>OpenWrt</div><i class="fa fa-rss"></i><span class="autohide"> OpenWrt</span></a></li>
				<li class="gp-2 tip"><a href="#tab2"><div>ShadowSocks</div><i class="fa fa-paper-plane"></i><span class="autohide"> ShadowSocks</span></a></li>
				<li class="gp-3 tip"><a href="#tab3"><div>ShadowVPN</div><i class="fa fa-link"></i><span class="autohide"> ShadowVPN</span></a></li>
				<li class="gp-1 tip"><a href="#tab4"><div>集资明细</div><i class="fa fa-usd"></i><span class="autohide"> 集资明细</span></a></li>
				<li class="gp-3 tip"><a href="#tab5"><div>可用服务器</div><i class="fa fa-tasks"></i><span class="autohide"> 可用服务器</span></a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<ul>
						<li>
							使用ssh协议设置OpenWrt
							<?php 
								echo
								'<a href="'.$path_op.'/ssh.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("$path_op/ssh.php")).'</sup>';
							?>
						</li>
						<li>
							管理路由器内部文件
							<?php
								echo 
								'<a href="'.$path_op.'/scp.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("$path_op/scp.php")).'</sup>';
							?>
						</li>
						<li>
							固件下载
							<?php
								echo
								'<a href="'.$path_op.'/firmware.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("$path_op/firmware/timetag")).'</sup>';
							?>
							<br />
							<span class="octicon octicon-info"></span><a href="<?php echo $path_op; ?>/firmware.php#etc">设置计划任务</a>定时自动更新固件
						</li>
					</ul>
				</div>
				<div id="tab2" class="tab">
					<ul>
						<li>
							使用ss-rules透明翻墙的步骤
							<?php
								echo
								'<a href="'.$path_ss.'/ss_rules.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("$path_ss/ss_rules.php")).'</sup>';
							?>
							<br />
							<span class="octicon octicon-info"></span><a href="<?php echo $path_ss; ?>/ss_rules.php#ignore">设置计划任务</a>定时更新 <a class="tip-bottom" href="../../savingfiles.php?filename=<?php echo $ignore ?>">
							<div>
								<?php
									echo
										'文件行数：'.CountLines($ignore)
										.'<br />文件大小：'.RealSize($ignore)
										.'<br />更新时间：'.date("Y年m月d日 H:i:s",filemtime($ignore));
								?>
							</div>
							<i class="fa fa-file-text-o"></i> ignore.list</a>
						</li>
						<li>
							防止断流的脚本
							<?php
								echo
								'<a href="'.$path_ss.'/keep_alive.php">查看</a>
								<sup>'.date("Y-m-d H:i",filemtime("$path_ss/keep_alive.php")).'</sup>';
							?>
						</li>
						<li><span class="deleted">开启TCP Fast Open降低延迟</span> 已整合入<a href="<?php echo $path_ss; ?>/gui.php">图形设置界面</a></li>
						<li>添加图形设置界面 <a href="<?php echo $path_ss; ?>/gui.php">查看</a></li>
					</ul>
				</div>
				<div id="tab3" class="tab">
					<p class="gray center null">暂无。</p>
				</div>
				<div id="tab4" class="tab">
					<br />
					<table class="center">
						<tr>
							<td>日期</td>
							<td>
								<i class="fa fa-plus-circle text-success"></i> <i class="fa fa-minus-circle text-danger"></i>
							</td>
							<td>剩余</td>
						</tr>
						<tr>
							<td>2014-11-19</td>
							<td class="tip"><div>年租金 $9.99 用于 BangwagonHost VPS</div><i class="fa fa-minus-circle text-danger"></i> 62.15 元</td>
							<td><?php echo $blance += -62.15; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-28</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> kk</div><i class="fa fa-plus-circle text-success"></i> 50 元</td>
							<td><?php echo $blance += 50; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-28</td>
							<td class="tip"><div>月租金 $7.02 用于 Linode VPS</div><i class="fa fa-minus-circle text-danger"></i> 43.68 元</td>
							<td><?php echo $blance += -43.68; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> 2罗</div><i class="fa fa-plus-circle text-success"></i> 3 元</td>
							<td><?php echo $blance += 3; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> 西瓜</div><i class="fa fa-plus-circle text-success"></i> 10 元</td>
							<td><?php echo $blance += 10; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> kano</div><i class="fa fa-plus-circle text-success"></i> 3 元</td>
							<td><?php echo $blance += 3; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> 37</div><i class="fa fa-plus-circle text-success"></i> 10 元</td>
							<td><?php echo $blance += 10; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> kk</div><i class="fa fa-plus-circle text-success"></i> 36 元</td>
							<td><?php echo $blance += 36; ?> 元</td>
						</tr>
						<tr>
							<td>2014-11-29</td>
							<td class="tip"><div>月租金用于 Kvmla VPS</div><i class="fa fa-minus-circle text-danger"></i> 18 元</td>
							<td><?php echo $blance += -18; ?> 元</td>
						</tr>
						<tr>
							<td>2014-12-1</td>
							<td class="tip"><div>来自 Kvmla VPS 的退款</div><i class="fa fa-plus-circle text-success"></i> 18 元</td>
							<td><?php echo $blance += 18; ?> 元</td>
						</tr>
						<tr>
							<td>2014-12-1</td>
							<td class="tip"><div>月租金 $5 用于 DigitalOcean VPS</div><i class="fa fa-minus-circle text-danger"></i> 31.11 元</td>
							<td><?php echo $blance += -31.11; ?> 元</td>
						</tr>
						<tr>
							<td>2014-12-22</td>
							<td class="tip"><div>来自 <i class="fa fa-user"></i> 神往</div><i class="fa fa-plus-circle text-success"></i> 100 元</td>
							<td><?php echo $blance += 100; ?> 元</td>
						</tr>
						<tr>
							<td>2014-12-23</td>
							<td class="tip"><div>月租金 $5 用于 DigitalOcean VPS</div><i class="fa fa-minus-circle text-danger"></i> 31.11 元</td>
							<td><?php echo $blance += -31.11; ?> 元</td>
						</tr>
					</table>
				</div>
				<div id="tab5" class="tab">
					<br />
					<table class="center">
						<tr>
							<td>VPS IP</td>
							<td>VPS 运营商</td>
							<td>机房位置</td>
							<td>服务端版本</td>
							<td>价格</td>
							<td>到期日期</td>
						</tr>
						<tr>
							<td class="ip left">&#241;&#240;&#244;&#239;&#242;&#242;&#244;&#239;&#241;&#243;&#245;&#239;&#244;&#243;</td>
							<td rowspan="2">Bandwagon Host</td>
							<td>美国 加州</td>
							<td><span class="hilight">python</span><span class="hilight">go</span></td>
							<td>$4.99 / 年</td>
							<td>2015-4-2 <i class="fa fa-toggle-on"></i></td>
						</tr>
						<tr>
							<td class="ip left">&#241;&#240;&#244;&#239;&#242;&#242;&#244;&#239;&#241;&#243;&#244;&#239;&#242;&#242;&#249;</td>
							<td>美国 加州</td>
							<td><span class="hilight">python</span><span class="hilight">go</span></td>
							<td>$9.99 / 年</td>
							<td>2015-11-19 <i class="fa fa-toggle-on"></i></td>
						</tr>
						<tr>
							<td class="ip left">
								&#241;&#240;&#244;&#239;&#241;&#242;&#248;&#239;&#249;&#242;&#239;&#241;&#244;&#246;
								<br />
								&#241;&#240;&#244;&#239;&#241;&#242;&#248;&#239;&#249;&#242;&#239;&#242;&#244;&#246;
								<br />
								&#241;&#240;&#244;&#239;&#241;&#242;&#248;&#239;&#249;&#243;&#239;&#241;&#241;&#249;
								<br />
								&#241;&#240;&#244;&#239;&#241;&#242;&#248;&#239;&#249;&#244;&#239;&#242;&#240;&#244;
							</td>
							<td>XVM Labs</td>
							<td>美国 加州</td>
							<td><span class="hilight">go</span></td>
							<td>$4.99 / 年</td>
							<td>2015-6-19 <i class="fa fa-toggle-on"></i></td>
						</tr>
						<tr>
							<td class="ip left">&#241;&#240;&#246;&#239;&#241;&#248;&#246;&#239;&#241;&#241;&#245;&#239;&#241;&#247;&#240;</td>
							<td>Linode</td>
							<td>日本 东京</td>
							<td><span class="hilight">python</span><span class="hilight">go</span></td>
							<td>$10 / 月</td>
							<td>2014-12-31 <i class="fa fa-toggle-on"></i></td>
						</tr>
						<tr>
							<td class="ip left">&#241;&#242;&#248;&#239;&#241;&#249;&#249;&#239;&#242;&#242;&#242;&#239;&#241;&#247;&#247;</td>
							<td>DigitalOcean</td>
							<td>新加坡</td>
							<td><span class="hilight">python</span><span class="hilight">go</span></td>
							<td>$5 / 月</td>
							<td>2015-1-31 <i class="fa fa-toggle-on"></i></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>